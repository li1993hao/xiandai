<?php

//namespace app\controllers;

class JobfairmsgController extends Controller{

	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}

	public function Index(){
		$userinfo = $this->getData("userinfo");
		//var_dump($userinfo);
		$pageSize = 10;

		//推荐招聘会
		$jobfairmsg = new jobfairmsg();
		$this->view->jobFair = $jobfairmsg->getfrontjobfair(5);

		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		if($userinfo){
			$newsList = $jobfairmsg->getJobfairPageModel($page,$pageSize,null,3,null,1);
		}else{
			$newsList = $jobfairmsg->getJobfairPageModel($page,$pageSize,null,3,null,0);
		}

		//print_r($newsList);
		//$uplist = $jobfairmsg->getRecentCorpMsg(5);
		//$this->view->uplist = $uplist;
		
		$this->view->news = $newsList;
		echo $this->view->render("index.htm");
	}

	public function Calendar(){
		//$jobfairmsg = new jobfairmsg();
			//推荐招聘会
		$jobfairmsg = new jobfairmsg();
		$this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
		//$uplist = $jobfairmsg->getRecentCorpMsg(5);
		//$this->view->uplist = $uplist;
		echo $this->view->render("calendar.htm");
	}

	public function Detail(){

		$id = $this->getRequest()->get('id');


		if($id){
			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$jobfairmsg = new jobfairmsg();

				$jobfairinfo = $jobfairmsg->getDetailInfoFromId($id);
				if($jobfairinfo){

					if($userinfo = $this->getData("userinfo")){
						$userId = $userinfo["id"];
						$collect = new collect();
						//print_r($collect);
						if($collect->haveCollect($userId, $id, 0)){
							$this->getView()->collectFlag = 0;
						}else{
							$this->getView()->collectFlag = 1;
						}

						//添加阅读统计 推荐用的
						$post_type = 0;
						$ip = $this->getRequest()->getClientIp();
						$tj = new tj();
						$tj->add_view($id, $post_type, $userId, $ip);

					}else{
						$this->getView()->collectFlag = 1;
					}


					$jobfairmsg->addReadnum($id);
					$corpinternmsg = new corpinternmsg();
					$frontlist = $corpinternmsg->getfrontmsg(4);
					$this->view->frontlist = $frontlist;


					$this->view->preNews = $jobfairmsg->getPreNews($jobfairinfo['jm_id']);
					$this->view->nextNews = $jobfairmsg->getNextNews($jobfairinfo['jm_id']);
					$this->view->detail = $jobfairinfo;
					echo $this->view->render("detail.htm");
				}else{
					$this->error404();
					$this->gotoUrl('jobfairmsg','index',1,"没有这篇文章");
				}
			}else{
				$this->error404();
				$this->gotoUrl('jobfairmsg','index',1,"没有这篇文章");
			}
		}else{//如果用户没有传id 跳转回西部就业列表中
			$this->error404();
			$this->gotoUrl('jobfairmsg','index',0);
		}
	}

	public function Calendardetail(){


		$id = $this->getRequest()->get('id');


		if($id){
			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$jobfairmsg = new jobfairmsg();
				$jobfairinfo = $jobfairmsg->getDetailInfoFromId($id);
				if($jobfairinfo){

					if( $userinfo = $this->getData("userinfo") ){
						$userId = $userinfo["id"];
						$collect = new collect();
						//print_r($collect);
						if( $collect->haveCollect($userId, $id, 0) ){
							$this->getView()->collectFlag = 0;
						}else{
							$this->getView()->collectFlag = 1;
						}

						//添加阅读统计 推荐用的
						$post_type = 0;
						$ip = $this->getRequest()->getClientIp();
						$tj = new tj();
						$tj->add_view($id, $post_type, $userId, $ip);


					}else{
						$this->getView()->collectFlag = 1;
					}


					$jobfairmsg->addReadnum($id);
					$corpinternmsg = new corpinternmsg();
					$frontlist = $corpinternmsg->getfrontmsg(4);
					$this->view->frontlist = $frontlist;


					$this->view->preNews = $jobfairmsg->getPreNews($jobfairinfo['jm_id']);
					$this->view->nextNews = $jobfairmsg->getNextNews($jobfairinfo['jm_id']);
					$this->view->detail = $jobfairinfo;
					echo $this->view->render("calendardetail.htm");
				}else{
					$this->error404();
					$this->gotoUrl('jobfairmsg','calendar',1,"没有这篇文章");
				}
			}else{
				$this->error404();
				$this->gotoUrl('jobfairmsg','calendar',1,"没有这篇文章");
			}
		}else{//如果用户没有传id 跳转回西部就业列表中
			$this->error404();
			$this->gotoUrl('jobfairmsg','calendar',0);
		}
	}


	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$corpmsg = new jobfairmsg();
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

	public function Addgood(){

		$id = $this->getRequest()->get('id');
		if($id){
			$corpmsg = new jobfairmsg();
			$nu =$corpmsg->addgoodnum($id);
			if( $nu > 0 ){

				if( $userinfo = $this->getData( "userinfo" ) ){

					$user_id = $userinfo["id"];
					$post_type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 1;
					$ip = $this->getRequest()->getClientIp();
					$tj = new tj();
					$tj->add_zan($id, $post_type, $user_id, $ip);

				}

				echo $nu;
			}else{
				echo 0;
			}

		}else{
			echo 0;
		}

	}

	public function Getjsondata(){
		//echo $_POST["start"];
		//echo $_POST["end"];
		$start = date("Y-m-d H:i:s",@$_POST["start"]/1000);
		$end = date("Y-m-d H:i:s",(@$_POST["end"]/1000)-1);
		$jobfairmsg = new jobfairmsg();
		$list = $jobfairmsg->getJobfairMsgFromTime($start,$end);
		echo json_encode($list);
		//print_r($list);
	}
}

?>