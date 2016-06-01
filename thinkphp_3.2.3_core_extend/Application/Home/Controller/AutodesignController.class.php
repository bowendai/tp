<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

/**
 * 自动化设计控制器
 */
 
class AutoDesignController extends Controller {
    
	
	public function index() {
		
		//$AutoDesignModel = new \Home\Model\AutoDesignModel();
		$AutoDesignModel = M('Topic');
		
		$topic = $AutoDesignModel->where("navigation_id={$_GET['id']}")->select();
		
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
		
		$AutoDesignModel = new \Home\Model\AutoDesignModel();
		
		$verid = $_GET['id'];
	
		$verModel = new Model();
		$verShow = $verModel->table('tp_version')->where("id={$verid}")->find();
		
		$topic = $AutoDesignModel->where("cur_version_id={$verid}")->find();
	
		//$dir = getcwd() . "/Public/dokuwiki/data/pages/autodesign";
		
		//$filename = explode(":",$id);
		
		//$fileinfo = $AutoDesignModel->getDetailFileinfo(urlencode($filename[1].".txt"),$dir);
	
		
		
		$act = $AutoDesignModel->act_clean($_POST["do"]);
		
		$request = $_REQUEST['do'];
				
		require_once './Public/dokuwiki/doku.php';
		
		//$ID=$verid;//"autodesign:".$detailinfoArr["title"];
			
		//if($request=="edit"){
		//	$ACT = $request;
		//}
		//if($act != "show"){
		//	$ACT = $act;
		//}
		//可以改变右侧图标文字链接
		$ACT = "show";
		
		//file_put_contents('ceshi.txt',$ACT.PHP_EOL,FILE_APPEND);
		//写数据库表
		if($ACT == "save"){
			//file_put_contents('ceshi.txt',$_GET['id'].' --- '.$_POST['wikitext'].PHP_EOL,FILE_APPEND);
			$TopicModel = M('Topic');
			
			$data['navigation_id'] = intval(explode(":",$_GET['id'])[0]);
			$data['title'] = explode(":",$_GET['id'])[1];
			
			$VersionModel = new Model();
			//$a =  $model->table('Users')->where('uid=1 and login="admin"')->find();
			$res = $TopicModel->where('navigation_id='.$data['navigation_id'].' and title="'.$data['title'].'"')->find();
			
			if(is_null($res) == false){
				//修改
				
			}else{
				//创建
				$data['create_time'] = date("Y-m-d H:i:s",time());
				$data['creater'] = '';
				
				
				$verAdd['modified_time'] = $data['create_time'];
				$verAdd['version'] = time();
				$verAdd['content'] = $_POST['wikitext'];
				
				$ver_id = $VersionModel->table('tp_version')->add($verAdd);
				//$obj = $VersionModel->field('id')->table('tp_version')->order('id desc')->find();
				
				$data['create_version_id'] = $ver_id;//$obj['id'];
				$data['cur_version_id'] = $ver_id;//$obj['id']; 				
				$TopicModel->add($data);
				
			}		
			
		}
		
		//act_dispatch();
		
		//$this->assign('detailinfoArr',$fileinfo);
		$this->assign('detailinfoArr', $verShow);
		$this->assign('topicArr',$topic);
		$this->assign('id',$id);
		$this->assign('do','detail');
		
		$this->display();
	}
	
	public function edit() {
		
		require_once './Public/dokuwiki/doku.php';
		
		$verid = $_GET['id'];
		$do = $_GET['do'];
		global $EDIT_WIKI_CONTENT;
		global $PREVIEW_WIKI_CONTENT;
		
		$verModel = new Model();
		$verShow = $verModel->table('tp_version')->where("id={$verid}")->find();
		
		$topic = M('Topic');
		$topicInfo = $topic->where("cur_version_id={$verid}")->find();
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
		
		$wikitext = $_POST['wikitext'];
	
		$ver['modified_time'] = date("Y-m-d H:i:s",time());
		$ver['version'] = time();
		$ver['content'] = $wikitext;
		
		$VersionModel = new Model();
		$verid = $VersionModel->table('tp_version')->add($ver);
		
		$TopicModel = M('Topic');
		$cur_version_id['cur_version_id'] = $verid;
		$TopicModel->where('cur_version_id='.$_GET['id'])->save($cur_version_id);
		
		$this->redirect("Home/autodesign/detail",array('id'=>$verid));
		
	}
	
}