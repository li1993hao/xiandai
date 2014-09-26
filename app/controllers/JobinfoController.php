<?php

//namespace app\controllers;

class JobinfoController extends Controller{
	
	private $__typeinfo = array(
			"jobnews" => array("type_code"=>1,"type_name"=>"就业动态&nbsp;E<em>mployment&nbsp;Dynamics</em>","type_color"=>"red"),
			"activity" => array("type_code"=>2,"type_name"=>"通知公告&nbsp;N<em>otice</em>","type_color"=>"red"),
			"plan" => array("type_code"=>3,"type_name"=>"职业生涯规划&nbsp;C<em>areer&nbsp;Planning</em>","type_color"=>"blue"),
			"search" => array("type_code"=>4,"type_name"=>"求职指导&nbsp;C<em>areer&nbsp;Guidance</em>","type_color"=>"blue"),
			"start" => array("type_code"=>5,"type_name"=>"创业指导&nbsp;C<em>areer&nbsp;Guidance</em>","type_color"=>"blue"),
			"process" => array("type_code"=>6,"type_name"=>"创业流程&nbsp;E<em>ntrepreneurial&nbsp;process</em>","type_color"=>"blue")
	);
	
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	
	private function _typecode2info($type_code){
		reset($this->__typeinfo);
		foreach( $this->__typeinfo as $key => $val ){
			if($val["type_code"] == $type_code){
				return $this->__typeinfo[$key];
			}
		}
		return null;	
	}
	
	/**
	 * 列表页
	 */
	public function Index(){
		
		$type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 1;
		if($typeinfo = $this->_typecode2info($type)){
			$pageSize = 10;
			$jobinfo = new jobinfo();
			$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
			
			
			$newsList = $jobinfo->get_news_page_model($typeinfo["type_code"], $page,$pageSize);
			
			//print_r($newsList);
			$this->getView()->typeinfo = $typeinfo;
			$this->view->news = $newsList;
			echo $this->view->render("index.htm");
			
		}else{
			$this->error404();
		}
		
		
	}
	
	/**
	 * 就业动态
	 */
	public function News(){
		$_GET["type"]=1;
		$this->Index();
	
	}
	
	/**
	 * 通知公告
	 */
	public function Act(){
		
		$_GET["type"]=2;
		$this->Index();
	
	}
	//职业生涯规划
	public function Plan(){
		
		$_GET["type"]=3;
		$this->Index();
		
	}
	//求职指导
	public function Search(){
		$_GET["type"]=4;
		$this->Index();
		
	}
	//创业指导
	public function Start(){
		$_GET["type"]=5;
		$this->Index();
		
	}
	//创业流程
	public function Process(){
		$_GET["type"]=6;
		$this->Index();

	}
	//还没改
	public function Detail(){
		
		$id = $this->getRequest()->get('id');
		if($id){
			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
			$jobinfo = new jobinfo();
			
			$jobinfodetail = $jobinfo->getDetailInfoFromId($id);
			if($jobinfodetail){
				
				$type = $jobinfodetail['it_id'];
				$typeinfo = $this->_typecode2info($type);
				$this->getView()->typeinfo = $typeinfo;
				
				$jobinfo->addReadnum($id);
				//print_r($westNews);
				$this->view->preNews = $jobinfo->getPreNews($id, $jobinfodetail['it_id']);
				$this->view->nextNews = $jobinfo->getNextNews($id, $jobinfodetail['it_id']);
				$this->view->detail = $jobinfodetail;
				//var_dump($jobinfodetail);
				echo $this->view->render("detail.htm");//自动加载tpl下的west文件夹下的index。htm模板
				}else{
					$this->error404();
					exit();
				}
			}else{
				$this->error404();
				exit();
			}
		}else{//如果用户没有传id 跳转回西部就业列表中
			$this->error404();
			exit();
		}
		
		
	}
	
	
	public function getsearchlist()
	{
		$jobinfo = new jobinfo();
		$pageSize = 10;
		//$content = $_POST['content'];
		//$content2 = array_key_exists('content', $_POST) ? $_POST['content'] : $content;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$key = $this->getRequest()->get('key') ? trim($this->getRequest()->get('key')) : ( array_key_exists("content", $_POST) ? trim($_POST['content']) : false  ) ;
		//echo $key;
		if(!$key){
			$this->error404();
			//exit();
			$this->gotoUrl('jobinfo','index',0);
			//exit();
		}else{
			$news = $jobinfo->getSearchlistPageModel($page, $pageSize, $key);
			$this->view->key = $key;
			$this->view->news = $news;
			echo $this->view->render("searchlist.htm");
		}
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$corpmsg = new jobinfo();
			if($corpmsg->addshareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}

	public function addgood(){
	
		$id = $this->getRequest()->get('id');
		if($id){
			$corpmsg = new jobinfo();
			$nu =$corpmsg->addgoodnum($id);
			if( $nu > 0 ){
				echo $nu;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	
	}

}

?>