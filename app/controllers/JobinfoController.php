<?php

//namespace app\controllers;

// array(
// 	  'jobAct' => 1,  //工作动态
// 	  'jobNotice' => 2, //通知公告
// 	  'jobPlan' => 3, //职业生涯规划
// 	  'jobGuid' => 4, //就业指导
// 	  'entreGuid' => 5, //创业指导
// 	  'empPolicy' => 6, //就业政策
// 	  'empSpe' =>7, //就业专员
// 	  'fellowVisited' =>8, //校友寻访
// 	  'empStar' =>9, //创就业明星
// 	  'bohai' => 11, //渤海轻工业集团
// 	  'bulletin' => 12, //就业工作简报
// 	  'stuNotice' => 13, //学生就业通知
// 	  'centerIntro' => 15, //中心介绍
// 	  'departIntro' => 16, //院系介绍
// 	  'recGuid' =>17 //招聘指南
// 	);
class JobinfoController extends Controller{
	
	private $__typeinfo = array(
			"jobAct"=> array("type_code"=>1,"type_name"=>"工作动态","type_color"=>"red"),
			"jobNotice"=>array("type_code"=>2,"type_name"=>"通知公告","type_color"=>"red"),
			"jobPlan"=>array("type_code"=>3,"type_name"=>"职业生涯规划","type_color"=>"blue"),
			"jobGuid"=> array("type_code"=>4,"type_name"=>"就业指导","type_color"=>"blue"),
			"entreGuid"=> array("type_code"=>5,"type_name"=>"创业指导","type_color"=>"blue"),
			"empPolicy"=> array("type_code"=>6,"type_name"=>"就业政策","type_color"=>"blue")
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
			$frontlist = $jobinfo->getRecNews(6);
            $this->view->frontlist = $frontlist;
          //  var_dump($this->view->$frontlist);


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
	public function jobAct(){
		$_GET["type"]=1;
		$this->Index();
	}
	
	/**
	 * 通知公告
	 */
	public function jobNotice(){
		
		$_GET["type"]=2;
		$this->Index();
	
	}
	//职业生涯规划
	public function jobPlan(){
		
		$_GET["type"]=3;
		$this->Index();
		
	}
	//求职指导
	public function jobGuid(){

		$_GET["type"]=4;
		$this->Index();
		
	}
	//创业指导
	public function entreGuid(){
		$_GET["type"]=5;
		$this->Index();
		
	}
	//就业政策
	public function empPolicy(){
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

                $frontlist = $jobinfo->getRecNews(6);
                $this->view->frontlist = $frontlist;
				
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
	
	
	public function searchlist()
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
            $frontlist = $jobinfo->getRecNews(6);
            $this->view->frontlist = $frontlist;
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