<?php
/**
*  Create On 2013-7-25
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
class AccountController extends Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Index(){
		$this->login();
	}
	
	public function Login(){	
		if($_POST){
			$user=new user();
			$loginre=$user->authUser($_POST['username'],$_POST['password']);
			if($loginre['result'] > 0){
				$log = new log();
				$log->addAdminLoginLog($loginre['result']);
				$this->setcookie("cookie_Uid",$loginre['result'])
					 ->setcookie("cookie_Uname",$_POST['username'])
					 ->setcookie("cookie_shell",$user->getUserShell($loginre['result'],$_POST['username'],$loginre['userinfo']['user_pw']) );
				$this->gotoUrl("index","index");
				exit();
			}elseif($loginre['result']== -1){
				$mess=$loginre['msg'];
			}elseif($loginre['result']== -2){
				$mess=$loginre['msg'];
			}else{
				
				$mess=$this->_lang->dengluchucuole;
			}
			$this->view->message=$mess;
			$this->view->username=$_POST['username'];
		}else{
		
			if(isset($_COOKIE['cookie_Uid']) && isset($_COOKIE['cookie_Uname']) && isset($_COOKIE['cookie_shell'])){
				
				$user=new user();
				$re=$user->authUserFromCookieData($_COOKIE['cookie_Uid'],$_COOKIE['cookie_shell']);
				if($re){
					$this->gotoUrl("index","index");
					exit();
				}
			}
		}
		echo $this->view->render("login.htm");
	
	}//-----------------------------------------
	
	public function Logout(){
		$this->setcookie("cookie_Uid")
			 ->setcookie("cookie_Uname")
			 ->setcookie("cookie_shell")
			 ->gotoUrl("account","login");
		
	}
	
	public function Changepw(){
		if($_POST){
			if($_POST['old'] && $_POST['new'] && $_POST['renew']){
				if($_POST['new'] != $_POST['renew']) $result = $this->_lang->liangcimimabuyizhi;
				else{
					
					$userinfo = $this->getData('userinfo');
					$user = new User();
					
					$result = $user -> changePw( $userinfo['user_id'], $_POST['old'], $_POST['new'] ); //修改密码	
					$reCode = $result['result'];
					if( $reCode == 1){
						
						$this->setcookie("cookie_Uid",$userinfo['user_id'])
							->setcookie("cookie_shell",$user->getUserShell($userinfo['user_id'],$userinfo['user_name'],$result['newPw']) );
						$result = $this->_lang->xiugaichenggong;
					}else if( $reCode == -1 ){
						$result = $this->_lang->mimashurucuowu;
					}else{
						$result = $this->_lang->xiugaishibai;
					}
				}
			}else{
				$result = $this->_lang->xinxishurubuwanzheng;
			}
		}else{
			$result="";
		}
		
		$this->view->result=$result;
		echo $this->view->render("changepw.htm");
	}
	
	public function Myinfo(){
		//Array ( [user_id] => 1 [user_name] => admin [user_realname] => ewwewe [user_pw] => ccad7b1ca9998882f9188310e67cdccb 
		//[user_salt] => 74cb7abedafeded8 [role_id] => 1 [user_regtime] => 2012-02-02 00:00:00 [role_name] => 超级管理员 )
		$userinfo = $this->getData("userinfo");
		if($_POST){
			$id = $userinfo["user_id"];
			$user = new user();
			$result = $user->modUserInfo($id, array("user_realname"=>$_POST["realname"]));
			if($result){
				$userinfo["user_realname"] = $_POST["realname"];
				$this->view->result = $this->_lang->xiugaichenggong;
			}else{
				$this->view->result = $this->_lang->xiugaibufenshibai;
			}
		}
		
		
		$this->view->userInfo = $userinfo;
		$log = new log();
		$page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1 ;
		$logList = $log->getUserLoginLogPageModel($userinfo["user_id"],$page);
		//print_r($logList);
		$this->view->logList = $logList; 
		echo $this->view->render("myinfo.htm");
	}
}