<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

require_once './Public/dokuwiki/doku.php';
/**
 * 自动化设计控制器
 */
 
class AutoDesignController extends Controller {
    
	
	public function index() {		
		
		$verModel = D("Version");		

		$db = M("Topic");
		$where = "navigation_id=".$_GET['id'];
		$count = $db->where($where)->count();
		$pagecount = 2;
		$page = new \Think\Page($count , $pagecount);
		//$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$list = $db->where($where)->order('id asc')->limit($page->firstRow.','.$page->listRows)->select();
		for($i=0; $i<count($list); $i++){
			$m = $verModel->where("id=%d",$list[$i]['cur_version_id'])->find();
			$list[$i]['verArr']=$m; 
		}
		$this->assign('list',$list);
		$this->assign('page',$show);
		
		$this->assign('navigation_id',$_GET['id']);
		
		
		
		$this->display();
	}
	public function test() {
		
		//$AutoDesignModel = M('Topic');
		
		//$topic = $AutoDesignModel->where("navigation_id=%d",$_GET['id'])->select();
		
		//$verModel = D("Version");
		// for($i=0; $i<count($topic); $i++) {
			// $ver[] = $verModel->where("id={$topic[$i]['cur_version_id']}")->find();
		// }		
		
		//if(count($topic)>0){
		//	$this->assign('autoinfoArr', $topic);
		//	$this->assign('verArr', $ver);			
		//}
		//
		/* $count = $AutoDesignModel->where("navigation_id=%d",$_GET['id'])->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$Page->setConfig('first','首页');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','尾页');
		$show   = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $AutoDesignModel->where("navigation_id=%d",$_GET['id'])->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show); */
	//var_dump($count);
		//var_dump($show);
		//var_dump($list);
		//$this->assign('navigation_id',$_GET['id']);
	
		$db = M("Topic");
		$where = "navigation_id=".$_GET['id'];
		$count = $db->where($where)->count();
		$pagecount = 2;
		$page = new \Think\Page($count , $pagecount);
		//$page->parameter = $row; //此处的row是数组，为了传递查询条件
		$page->setConfig('first','首页');
		$page->setConfig('prev','上一页');
		$page->setConfig('next','下一页');
		$page->setConfig('last','尾页');
		$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		$show = $page->show();
		$list = $db->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		
		
		
		$this->display();
	}
	
	
	public function detail() {
		
		//require_once './Public/dokuwiki/doku.php';
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
		
		//require_once './Public/dokuwiki/doku.php';
		
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
		$veridArr['id'] = $_GET['id'];
		$topicArr = $VersionModel->table('tp_version')->field('topic_id')->where($veridArr)->find();
		
		if($topicArr){
			$ver['topic_id'] = intval($topicArr['topic_id']);
			
			$verid = $VersionModel->table('tp_version')->add($ver);
			$cur_version_id['cur_version_id'] = $verid;
			$TopicModel->where('id=%d',$topicArr['topic_id'])->save($cur_version_id);
			
			$this->redirect("Home/autodesign/detail",array('id'=>$verid,'version'=>$ver['version']));
		}
	
	}
	
	public function revisions() {
		
		//if(!isset($_GET['id']))
		//	return ;
		if(!isset($_GET['do']))
			return ;
		
		
		$first = isset($_GET['first']) ? $_GET['first'] : 0;
		
		//require_once './Public/dokuwiki/doku.php';
		
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
		
		//require_once './Public/dokuwiki/doku.php';
		if(!isset($_GET['id']))
			return;
		$id=$_GET['id'];
		
		$navigation_id = $id;
		$title = '';
		
		$m = D('Navigation');
		$parentid['parentid'] = array('neq',0);
		$navArr = $m->field('id,text')->where($parentid)->select();
	
		//var_dump($navArr);
		
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
			
			$navigation_id = $_POST['category'];	
			$title = $_POST['title'];
		}
		if($act == 'save'){
			 
			$topic = D("Topic");
			$topic_data['navigation_id'] = $_POST['category'];
			$topic_data['title'] = $_POST['title'];
			$topic_data['create_time'] = date("Y-m-d H:i:s",time());
			$topic_id = $topic->add($topic_data);
			
			$version = D("Version");
			$version_data['topic_id'] = $topic_id;
			$version_data['modified_time'] = date("Y-m-d H:i:s",time());
			$version_data['version'] = time();
			$version_data['content'] = $_POST['wikitext'];
			$verid = $version->add($version_data);
			
			$update_topic_data['cur_version_id'] = $verid;
			$update_topic_data['create_version_id'] = $verid;
			$topic->where('id=%d',$topic_id)->save($update_topic_data);
			
			$this->redirect('Home/autodesign/index',array('id'=>$id));
		}
		
		if($act == "show"){
			
			$do='edit';
		}
		
		//$ACT = 'edit';
		$this->assign('navigation_id',$navigation_id);
		$this->assign('title',$title);
		$this->assign('do',$do);
		$this->assign('navArr',$navArr);
		$this->display();
	}
	
}