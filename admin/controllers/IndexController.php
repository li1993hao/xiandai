<?php
/**
*  Create On 2010-7-12
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
class IndexController extends Controller{
	public function __construct(){
		
		parent::__construct();
		//print_r($this->getRequest());
		$this->view->web_url = $this->getRequest()->hostUrl;
		
	}
	public function Index(){
		//echo "dddddd";

		
		echo $this->view->render("index.htm");
	}
	public function Header(){
		$userinfo = $this->getData("userinfo");
		$this->view->roleid = $userinfo["role_id"];
		$this->view->user = $userinfo["user_name"]."[".$userinfo['user_realname']."]";
		echo $this->view->render("header.htm");
	}
	public function Menu(){
		$resource = $this->getData("resource");
		//print_r($resource);
		$menu =array();
		$menu['west'] = 0;
		$menu['user'] = 0;
		$menu['employerservice'] = 0;
		$menu['studentjobinfo'] = 0;
		$menu['othermanagement'] = 0;
		$menu['jobinfo'] = 0;
		$menu['recruit'] = 0;
		$menu['questionnaire'] = 0;
		$menu['stat'] = 0;
		$menu['version'] = 0;
		$menu['wechat'] = 0;
		$menu['jobfair'] = 0;
		$menu['push'] = 0;
		$menu['frontuser'] = 0;
		$menu['leavelist'] = 0;
		foreach($resource as $key){
			if(array_key_exists($key, $menu)){
				$menu[$key]=1;
			}
		}
		$this->view->menu = $menu;
		echo $this->view->render("menu.htm");
	}
	public function Main(){
		$userinfo = $this->getData("userinfo");
		$this->view->roleid = $userinfo["role_id"];
		
		$corpinternmsg = new corpinternmsg();
		$jobfairmsg = new jobfairmsg();
		$fuser = new frontuser();
		$calendar = new calendar();
		
		$corpmsg = $corpinternmsg->verifyinfo(0);
		$jobmsg = $jobfairmsg->getJobfairPageModel(1, 0, NULL, 2, NULL);
		$comnum = $fuser->getunverifiedcompany();
		$todaycal = $calendar->gettodaycalendar();
		
		
		$this->view->corpmsg = $corpmsg["total"];
		$this->view->jobmsg = $jobmsg["total"];
		$this->view->commsg = $comnum ? count($comnum) : 0;
		$this->view->calendar = $todaycal;
		
		echo $this->view->render("main.htm");
	}
	

}