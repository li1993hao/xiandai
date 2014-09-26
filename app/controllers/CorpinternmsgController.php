<?php


//use model\corpinternmsg;

class CorpinternmsgController extends Controller{
	
	private $__typeinfo = array(
							"corp" => array("type_code"=>1,"type_name"=>"企业招聘信息"),
							"intern" => array("type_code"=>2,"type_name"=>"实习招聘信息"),
							"base" => array("type_code"=>3,"type_name"=>"基层招聘信息")
							);
	
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	
	public function Index(){
		$userinfo = $this->getData("userinfo");
		$pageSize = 10;
		$corpinternmsg = new corpinternmsg();

		//推荐招聘会
		$jobfairmsg = new jobfairmsg();
		$this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
		
		$type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 1;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;

		//echo $page;
		if( $type == $this->__typeinfo["corp"]["type_code"]){
			if($userinfo){
				$newsList = $corpinternmsg->getCorpPageModel($page,$pageSize,null,"pass",true);
			}else{
				$newsList = $corpinternmsg->getCorpPageModel($page,$pageSize,null,"pass",false);
			}
			$this->getView()->corpInfo = $this->__typeinfo["corp"];

		
		}else if( $type == $this->__typeinfo["intern"]["type_code"] ){
			if($userinfo){
				$newsList = $corpinternmsg->getInternPageModel($page,$pageSize,null,"pass",true);
			}else{
				$newsList = $corpinternmsg->getInternPageModel($page,$pageSize,null,"pass",false);
			}
			$this->getView()->corpInfo = $this->__typeinfo["intern"];
		}else{
			if($userinfo){
				$newsList = $corpinternmsg->getBasePageModel($page,$pageSize,null,"pass",true);
			}else{
				$newsList = $corpinternmsg->getBasePageModel($page,$pageSize,null,"pass",false);
			}
			$this->getView()->corpInfo = $this->__typeinfo["base"];
			
		}	

		
		//print_r($newsList);
		//$corpinfolist = $corpinternmsg->getCorprecruinfo(1,10);
		
		$this->view->news = $newsList;
		
		
		//$this->view->exist = $corpinfolist;
		
		echo $this->view->render("index.htm");//自动加载tpl下的west文件夹下的index。htm模板
	}
	
	
	public function Corpindex(){
		$_GET["type"] = 1;
		$this->Index();
		/*
		$pageSize = 20;
		$corpinternmsg = new corpinternmsg();
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$jobfairmsg = new jobfairmsg();
		
		$newsList = $corpinternmsg->getCorpPageModel($page,$pageSize,null,"pass");
		//print_r($newsList);
		//$corpinfolist = $corpinternmsg->getCorprecruinfo(1,10);
		$this->view->news = $newsList;
		
		//$this->view->exist = $corpinfolist;
	
		echo $this->view->render("corpindex.htm");//自动加载tpl下的west文件夹下的index。htm模板
		*/
	}
	

	/**
	 * 基层就业信息
	 */
	public function Baseindex(){
		
		$_GET["type"] = 3;
		$this->Index();
		
		/*
		$pageSize = 20;
		$corpinternmsg = new corpinternmsg();
	
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$jobfairmsg = new jobfairmsg();
	
		$newsList = $corpinternmsg->getBasePageModel($page,$pageSize,null,"pass");
		//print_r($newsList);
		//$corpinfolist = $corpinternmsg->getCorprecruinfo(1,10);
		$this->view->news = $newsList;
	
		//$this->view->exist = $corpinfolist;
	
		echo $this->view->render("baseindex.htm");//自动加载tpl下的west文件夹下的index。htm模板
		*/
	}
	
	public function Internindex(){
		$_GET["type"] = 2;
		$this->Index();
		
		/*
		$pageSize = 20;
		$corpinternmsg = new corpinternmsg();
	
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
	
		$newsList = $corpinternmsg->getInternPageModel($page,$pageSize,null,"pass");
		$jobfairmsg = new jobfairmsg();
		$this->view->news = $newsList;
	
		//$this->view->exist = $corpinfolist;
	
		echo $this->view->render("internindex.htm");//自动加载tpl下的west文件夹下的index。htm模板
		*/
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
	
	public function Detail(){
		$id = $this->getRequest()->get('id');
		//echo $id;
		if($id){
			//echo 111;
			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				//推荐招聘会
				$jobfairmsg = new jobfairmsg();
				$this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
				//echo 222;
				$corpinternmsg = new corpinternmsg();
				$interninfo = $corpinternmsg->getDetailInfoFromId($id,null,"pass");
				if($interninfo){
					if($userinfo = $this->getData("userinfo")){
						$userId = $userinfo["id"];
						$collect = new collect();
						if($collect->haveCollect($userId, $id)){
							$this->getView()->collectFlag = 0;
							
						}else{
							$this->getView()->collectFlag = 1;
							//ECHO $userId."AA".$id;
						}
						
						//添加阅读统计 推荐用的
						$post_type = 3;
						$ip = $this->getRequest()->getClientIp();
						$tj = new tj();
						$tj->add_view($id, $post_type, $userId, $ip);
						
					}else{
						$this->getView()->collectFlag = 1;
					}
					
					$corpinternmsg->addReadnum($id);
						
					//$internlist = $corpinternmsg->getBaserecruinfo(1,18);
					//$this->view->internlist = $internlist;
					$typeinfo = $this->_typecode2info($interninfo['rit_id']);
					$this->getView()->corpInfo = $typeinfo;
					$this->view->preNews = $corpinternmsg->getPreNews($interninfo['cim_id'],$interninfo['rit_id']);
					$this->view->nextNews = $corpinternmsg->getNextNews($interninfo['cim_id'],$interninfo['rit_id']);
					$this->view->detail = $interninfo;
					
					//获取职位的信息
					$officelist = $corpinternmsg->getofficeinfo($id);
					//print_r($officelist);
					$this->view->officelist = $officelist;
					
					echo $this->view->render("detail.htm");
				}else{
					$this->error404();
					//$this->gotoUrl('corpinternmsg','baseindex',1,"没有这篇文章");
				}
			}else{
				$this->error404();
				//$this->gotoUrl('corpinternmsg','baseindex',1,"没有这篇文章");
			}
				
		}else{
			$this->error404();
			//$this->gotoUrl('corpinternmsg','baseindex',0);
		}
	}
	
 	public function Corpdetail(){
 		$this->Detail();
// 		$id = $this->getRequest()->get('id');
// 		if($id){
// 			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
// 			$corpinternmsg = new corpinternmsg();
// 			$corpinfo = $corpinternmsg->getDetailInfoFromId($id);
// 			//print_r($corpinfo);
// 			if($corpinfo){
// 				if($userinfo = $this->getData("userinfo")){
// 					$userId = $userinfo["id"];
// 					$collect = new collect();
// 					//print_r($collect);
// 					if($collect->haveCollect($userId, $id, 1)){
// 						$this->getView()->collectFlag = 0;
// 					}else{
// 						$this->getView()->collectFlag = 1;
// 					}
					
// 					//添加阅读统计 推荐用的
// 					$post_type =  1;
// 					$ip = $this->getRequest()->getClientIp();
// 					$tj = new tj();
// 					$tj->add_view($id, $post_type, $userId, $ip);
							
					
					
// 				}else{
// 					$this->getView()->collectFlag = 1;
// 				}
				
// 				$corpinternmsg->addReadnum($id);
// 				//print_r($corpinfo);
				
// 				$this->view->detail = $corpinfo;
// 				//获取职位的信息
// 				$officelist = $corpinternmsg->getofficeinfo($id);
// 				//print_r($officelist);
// 				$this->view->officelist = $officelist;
				
// 				$this->view->preNews = $corpinternmsg->getPreNews($corpinfo['cim_id'],$corpinfo['rit_id']);
// 				$this->view->nextNews = $corpinternmsg->getNextNews($corpinfo['cim_id'],$corpinfo['rit_id']);
				
// 				echo $this->view->render("corpdetail.htm");
// 				}else{
// 					$this->error404();
// 					$this->gotoUrl('corpinternmsg','corpindex',1,"没有这篇文章");
// 				}
// 			}else{
// 				$this->error404();
// 				$this->gotoUrl('corpinternmsg','corpindex',1,"没有这篇文章");
// 			}
// 		}else{
// 			$this->error404();
// 			$this->gotoUrl('corpinternmsg','corpindex',0);
// 		}
 	}
	
	
	public function Basedetail(){
		$this->Detail();
// 		$id = $this->getRequest()->get('id');
// 		if($id){
// 			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
// 				$corpinternmsg = new corpinternmsg();
// 				$interninfo = $corpinternmsg->getDetailInfoFromId($id);
	
// 				if($interninfo){
// 					if($userinfo = $this->getData("userinfo")){
// 						$userId = $userinfo["id"];
// 						$collect = new collect();
// 						//print_r($collect);
// 						if($collect->haveCollect($userId, $id, 3)){
// 							$this->getView()->collectFlag = 0;
// 						}else{
// 							$this->getView()->collectFlag = 1;
// 						}
						
// 						//添加阅读统计 推荐用的
// 						$post_type = 3;
// 						$ip = $this->getRequest()->getClientIp();
// 						$tj = new tj();
// 						$tj->add_view($id, $post_type, $userId, $ip);
						
// 					}else{
// 						$this->getView()->collectFlag = 1;
// 					}
					
// 					$corpinternmsg->addReadnum($id);
						
// 					//$internlist = $corpinternmsg->getBaserecruinfo(1,18);
// 					//$this->view->internlist = $internlist;
// 					$this->view->preNews = $corpinternmsg->getPreNews($interninfo['cim_id'],$interninfo['rit_id']);
// 					$this->view->nextNews = $corpinternmsg->getNextNews($interninfo['cim_id'],$interninfo['rit_id']);
// 					$this->view->detail = $interninfo;
					
// 					//获取职位的信息
// 					$officelist = $corpinternmsg->getofficeinfo($id);
// 					//print_r($officelist);
// 					$this->view->officelist = $officelist;
					
// 					echo $this->view->render("basedetail.htm");
// 				}else{
// 					$this->error404();
// 					$this->gotoUrl('corpinternmsg','baseindex',1,"没有这篇文章");
// 				}
// 			}else{
// 				$this->error404();
// 				$this->gotoUrl('corpinternmsg','baseindex',1,"没有这篇文章");
// 			}
				
// 		}else{
// 			$this->error404();
// 			$this->gotoUrl('corpinternmsg','baseindex',0);
// 		}
	}
	
	
	
	public function Interndetail(){
		$this->Detail();
// 		$id = $this->getRequest()->get('id');
// 		if($id){
// 			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
// 			$corpinternmsg = new corpinternmsg();
// 			$interninfo = $corpinternmsg->getDetailInfoFromId($id);
				
// 			if($interninfo){
// 				if($userinfo = $this->getData("userinfo")){
// 					$userId = $userinfo["id"];
// 					$collect = new collect();
// 					//print_r($collect);
// 					if($collect->haveCollect($userId, $id, 2)){
// 						$this->getView()->collectFlag = 0;
// 					}else{
// 						$this->getView()->collectFlag = 1;
// 					}
					
// 					//添加阅读统计 推荐用的
// 					$post_type = 2;
// 					$ip = $this->getRequest()->getClientIp();
// 					$tj = new tj();
// 					$tj->add_view($id, $post_type, $userId, $ip);
					
// 				}else{
// 					$this->getView()->collectFlag = 1;
// 				}
				
				
// 				$corpinternmsg->addReadnum($id);
			
// 				//$internlist = $corpinternmsg->getInternrecruinfo(1,18);
// 				//$this->view->internlist = $internlist;
// 				$this->view->preNews = $corpinternmsg->getPreNews($interninfo['cim_id'],$interninfo['rit_id']);
// 				$this->view->nextNews = $corpinternmsg->getNextNews($interninfo['cim_id'],$interninfo['rit_id']);
// 				//print_r($interninfo);
// 				$this->view->detail = $interninfo;
				
// 				//获取职位的信息
// 				$officelist = $corpinternmsg->getofficeinfo($id);
// 				//print_r($officelist);
// 				$this->view->officelist = $officelist;
				
// 				echo $this->view->render("interndetail.htm");
// 				}else{
// 					$this->error404();
// 					$this->gotoUrl('corpinternmsg','internindex',1,"没有这篇文章");
// 				}
// 			}else{
// 				$this->error404();
// 				$this->gotoUrl('corpinternmsg','internindex',1,"没有这篇文章");
// 			}
			
// 		}else{
// 			$this->error404();
// 			$this->gotoUrl('corpinternmsg','internindex',0);
// 		}
	}
	
	
	public function getsearchlist2()
	{
		$corpinternmsg = new corpinternmsg();
		$pageSize = 20;
		$jobfairmsg = new jobfairmsg();
		$uplist = $jobfairmsg->getRecentCorpMsg(5);
		$this->view->uplist = $uplist;
		
		//$ctid = $corpinternmsg->getctid($_POST['cttype']);
		//$provid = $corpinternmsg->getprovid($_POST['prov']);
		//$uplist = $corpinternmsg->getfrontnews(3,1);
		//$this->view->uplist = $uplist;
		//$content = $_POST['content'];
		//$content2 = array_key_exists('content', $_POST) ? $_POST['content'] : $content;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$key = $this->getRequest()->get('key') ? $this->getRequest()->get('key') :  ( array_key_exists("content", $_POST) ? $_POST['content'] : false  ) ;
		//echo $key;
		if(!$key){
			$this->error404();
			//exit();
			$this->gotoUrl('corpinternmsg','internindex',0);
			//exit();
		}else{
			$news = $corpinternmsg->getsearchPageModel($page, $pageSize, $key, 2);
			$this->view->key = $key;
			$this->view->news = $news;
			echo $this->view->render("internindex.htm");
		}
	}
	
	public function getsearchlist3()
	{
		$corpinternmsg = new corpinternmsg();
		//$pageSize = 20;
		$jobfairmsg = new jobfairmsg();
		$uplist = $jobfairmsg->getRecentCorpMsg(5);
		$this->view->uplist = $uplist;
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$key = $this->getRequest()->get('key') ? $this->getRequest()->get('key') :  ( array_key_exists("content", $_POST) ? $_POST['content'] : false  ) ;
		
		if(!$key){
			$this->error404();
			//exit();
			$this->gotoUrl('corpinternmsg','corpindex',0);
			//exit();
		}else{
			//echo $key;
			if($key == "null"){
				$key = "";
			}
			$news = $corpinternmsg->getsearchPageModel($page, 20, urldecode($key) ,1);
			$this->view->key = $key;
			$this->view->news = $news;
			echo $this->view->render("corpindex.htm");
		}
	}
	
	public function getsearchlist()
	{
		$jobinfo = new jobinfo();
		$uplist = $jobinfo->getfrontnews(3,1);
		//print_r($uplist);
		$this->view->uplist = $uplist;
		$pageSize = 10;
		$corpinternmsg = new corpinternmsg();
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$key = $this->getRequest()->get('key') ? $this->getRequest()->get('key') :  ( array_key_exists("content", $_POST) ? $_POST['content'] : false  ) ;
		
		$str = trim( str_replace("/", " ",  urldecode($key)));
		
		if(!$str){
			//$this->error404();
			//exit();
			$this->gotoUrl('corpinternmsg','corpindex',0);
			//exit();
		}else{
			//echo $key;
			$news = $corpinternmsg->getcrPageModel($page, $pageSize, $str ,1);
			$this->view->key = $str;
			$this->view->news = $news;
			echo $this->view->render("searchlist.htm");
		}
	}
	
	
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$corpmsg = new corpinternmsg();
			if($corpmsg->addshareNum($id)){
				
				if( $userinfo = $this->getData( "userinfo" ) ){
				
					$user_id = $userinfo["id"];
					$post_type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 1;
					$ip = $this->getRequest()->getClientIp();
					$tj = new tj();
					$tj->add_share($id, $post_type, $user_id, $ip);
						
				}
				
				echo 1;
			}else{
				echo 0;
			}
				
		}else{
			echo 0;
		}
	}
	//赞！
	public function Addgood(){
		$id = $this->getRequest()->get('id');
		//echo $id;
		if($id){
			$corpmsg = new corpinternmsg();

			$nu = $corpmsg->addgoodnum($id,$type='1');
			//print_r($this->getData( "userinfo" ));
			if( $userinfo = $this->getData( "userinfo" ) ){
			
				$user_id = $userinfo["id"];
				$post_type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 1;
				$ip = $this->getRequest()->getClientIp();
				$tj = new tj();
				$tj->add_zan($id, $post_type, $user_id, $ip);
			}
			

			if( $nu > 0 ){
				echo $nu;

			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}
	//就业须知
	public function jiuyexvzhi(){
		$db = new frontuser();
		$row = $db->selectxvzhi();
		$this->view->info = $row;
		//print_R($row);
		echo $this->view->render("jiuyexvzhi.html");
	}
}

?>