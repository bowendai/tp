<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

/**
 * 自动化设计控制器
 */
 
class AutoDesignController extends Controller {
    
	
	public function index() {
		
		require_once './Public/dokuwiki/doku.php';
		//$AutoDesignModel = new \Home\Model\AutoDesignModel();
		$AutoDesignModel = M('Topic');
		
		$topic = $AutoDesignModel->where("navigation_id=%d",$_GET['id'])->select();
		
		$verModel = new Model();
		for($i=0; $i<count($topic); $i++) {
			$ver[] = $verModel->table('tp_version')->where("id={$topic[$i]['cur_version_id']}")->find();
		}		
		
		if(count($topic)>0){
			$this->assign('autoinfoArr', $topic);
			$this->assign('verArr', $ver);
			$this->assign('navigation_id',$_GET['id']);
		}
		/*$dir = getcwd() . "/Public/dokuwiki/data/pages/autodesign";
		
		$filenames = $AutoDesignModel->getFilenames($dir);
		
		if(count($filenames) > 0) {
			
			$fileinfos = $AutoDesignModel->getFileinfo($filenames,$dir);
			
			//var_dump($fileinfos);
			
			$this->assign('navigationid',$_GET['id']);
			$this->assign('autoinfoArr',$fileinfos);
		}*/
		
		
		$this->display();
	}
	
	
	public function detail() {
		
		require_once './Public/dokuwiki/doku.php';
		$AutoDesignModel = new \Home\Model\AutoDesignModel();
		
		//if(!isset($_GET['id']))
		//	return ;
		$verid = intval($_GET['id']);
		
		$verModel = new Model();
		$where='';
		if(!isset($_GET['version']) || $_GET['version'] == ''){//当前使用版本
						
			$where['id'] = $verid;
			
			$topic = $AutoDesignModel->where("cur_version_id={$verid}")->find();
		}else{//某一个版本号
			
			$where['version'] = $_GET['version'];
			$m = $verModel->field('topic_id')->table('tp_version')->where($where)->find();
			$topic = $AutoDesignModel->where("id={$m['topic_id']}")->find();
		}
		
		$verShow = $verModel->table('tp_version')->where($where)->find();
			
		
		$act = act_clean($_POST["do"]);
		
		//$request = $_REQUEST['do'];
				
		
			
		//if($request=="edit"){
		//	$ACT = $request;
		//}
		//if($act != "show"){
		//	$ACT = $act;
		//}
		
		
		//可以改变右侧图标文字链接
		$ACT = "show";
		
		//$this->assign('detailinfoArr',$fileinfo);
		$this->assign('detailinfoArr', $verShow);
		$this->assign('topicArr',$topic);
		//$this->assign('id',$id);
		$this->assign('do','detail');
		
		$this->display();
	}
	
	public function edit() {
		
		require_once './Public/dokuwiki/doku.php';
		
		if(!isset($_GET['do'])){
			return ;
		}
		
		$do = $_GET['do'];
		
		if(!isset($_GET['version']))
			return ;
		if($_GET['version']==''){
			$rev['id'] = $_GET['id'];
		}else{
			$rev['version'] = $_GET['version'];
		}
		
		
		global $EDIT_WIKI_CONTENT;
		global $PREVIEW_WIKI_CONTENT;
		//可以改变右侧图标文字链接
		$ACT = "edit";
		
		$verModel = new Model();
		$verShow = $verModel->table('tp_version')->where($rev)->find();
		
		$topic = M('Topic');
		$topicInfo = $topic->where('id='.$verShow['topic_id'])->find();
		$EDIT_WIKI_CONTENT = $verShow['content'];
		if(isset($_POST['wikitext']))
			$PREVIEW_WIKI_CONTENT = $_POST['wikitext'];
		else 
			$PREVIEW_WIKI_CONTENT = $EDIT_WIKI_CONTENT;
			
		$this->assign('do',$do);
		$this->assign('verShow',$verShow);
		$this->assign('topicArr',$topicInfo);
		$this->display();
	}
	
	public function add() {
		
		$TopicModel = M('Topic');
		
		$wikitext = $_POST['wikitext'];
	
		$ver['modified_time'] = date("Y-m-d H:i:s",time());
		$ver['version'] = time();
		$ver['content'] = $wikitext;
		
		$VersionModel = new Model();
		if(!isset($_GET['id']))
			return ;
		$verid['id'] = $_GET['id'];
		$topicidArr = $VersionModel->table('tp_version')->field('topic_id')->where($verid['id'])->find();
		
		if($topicidArr){
			$ver['topic_id'] = intval($topicidArr['topic_id']);
			
			$verid = $VersionModel->table('tp_version')->add($ver);
			$cur_version_id['cur_version_id'] = $verid;
			$TopicModel->where($topicidArr['topic_id'])->save($cur_version_id);
			
			$this->redirect("Home/autodesign/detail",array('id'=>$verid,'version'=>$ver['version']));
		}
	
	}
	
	public function revisions() {
		
		//if(!isset($_GET['id']))
		//	return ;
		if(!isset($_GET['do']))
			return ;
		
		
		$first = isset($_GET['first']) ? $_GET['first'] : 0;
		
		require_once './Public/dokuwiki/doku.php';
		
		//var_dump($conf['recent']);
				
		$do = $_GET['do'];
		$verid = $_GET['id'];
		//var_dump($_POST);
		$TopicModel = M('Topic');
		$topicArr = $TopicModel->where('cur_version_id='.$verid)->find();
		$VersionModel = new Model();
		$curverArr = $VersionModel->table('tp_version')->field('version')->where('id='.$verid)->find();
		if($do=='revisions'){
			
			$topic_id['topic_id']  = $topicArr['id'];
			$topic_id['id'] = array('neq',$verid);
			
			
			$verArr = $VersionModel->table('tp_version')->where($topic_id)->limit($first,$conf['recent'])->select();
			$count = $VersionModel->table('tp_version')->where($topic_id)->count();
			
			
			$cur_version = $curverArr['version'];
			
			$versions = [];
			for($i=0;$i<count($verArr);$i++){
				//var_dump($verArr[$i]);
				$versions[] = $verArr[$i]['version'];
				
				//if($verArr[$i]['id'] == $verid);{
					//$cur_version = $verArr[$i]['version'];
				//}
			} 		
			//var_dump($versions);
			$this->assign('first',$first);
			$this->assign('count',$count+1);			
			$this->assign('versions',$versions);
		}
				
		if($do=='diff'){
			
			//var_dump($_POST);
			if(count($_POST) <= 0){
				//显示与当前版本的差异
				//echo "href";
				
				$version = $_GET['version'];
				$m = $TopicModel->field('title')->where('cur_version_id='.$verid)->find();
				$diffInfo['title'] = $m['title'];
				//$diffInfo['create_time'] = $m['create_time'];
				
				//$VersionModel = new Model();
				$lv = $VersionModel->table('tp_version')->field('content')->where('version='.$version)->find();
				$diffInfo['lversion'] = $version;
				$diffInfo['ltext'] = $lv['content'];
				
				$rv = $VersionModel->table('tp_version')->field('version,content')->where('id='.$verid)->find();
				
				$diffInfo['rversion'] = $rv['version'];
				$diffInfo['rtext'] = $rv['content'];
				
				//$diffInfo['cur_version'] = $rv['version'];
				
				//var_dump($diffInfo);
				
			}else{
				//所选择的两个版本差异
				
				$lversion = $_POST['rev2'][0];
				$rversion = $_POST['rev2'][1];
				
				//$VersionModel = new Model();
				$lv = $VersionModel->table('tp_version')->field('topic_id,content')->where('version='.$lversion)->find();
				$m = $TopicModel->field('title')->where('id='.$lv['topic_id'])->find();
				
				$diffInfo['title'] = $m['title'];
				$diffInfo['lversion'] = $lversion;
				$diffInfo['ltext'] = $lv['content'];
								
				$rv = $VersionModel->table('tp_version')->field('content')->where('version='.$rversion)->find();
				
				$diffInfo['rversion'] = $rversion;
				$diffInfo['rtext'] = $rv['content'];
						
			}
			
			
			$this->assign('diffInfo',$diffInfo);			
		}
		
		$this->assign('topicArr',$topicArr);
		$this->assign('curverArr',$curverArr);
		$this->assign('id',$verid);
		$this->assign('do',$do);
		$this->display();
	}
	
	public function create() {
		
		require_once './Public/dokuwiki/doku.php';
		if(!isset($_GET['id']))
			return;
		$id=$_GET['id'];
		
		$m = D('navigation');
		$parentid['parentid'] = array('neq',0);
		$navArr = $m->where($parentid)->select();
		
		var_dump($navArr);
		
		//var_dump($_POST);
		//echo '<hr />';
		$act = act_clean($_POST["do"]);
		//echo $act;
		if($act=='draftdel'){
			$this->redirect('Home/autodesign/index',array('id'=>$id));
		}
		if($act == 'preview'){
			global $PREVIEW_WIKI_CONTENT;
			
			$PREVIEW_WIKI_CONTENT = $_POST['wikitext'];
			$do='preview';
		}
		if($act == 'save'){
			
			
			$this->redirect('Home/autodesign/index',array('id'=>$id));
		}
		
		if($act == "show"){
			
			$do='edit';
		}
		
		//$ACT = 'edit';
		//$this->assign('navigation_id',$id);
		$this->assign('do',$do);
		$this->assign('navArr',$navArr);
		$this->display();
	}
	
}