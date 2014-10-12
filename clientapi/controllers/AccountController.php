<?php
class AccountController extends Controller {
	public function __construct() {
		parent::__construct ();
		$this->view->web_host = $this->getRequest ()->hostUrl;
		$this->view->web_app_url = $this->getRequest ()->hostUrl . "/index.php";
	}
	
	/**
	 * 登录
	 */
	public function Login() {
		$username = $this->getRequest ()->get ( "userName" );
		$password = $this->getRequest ()->get ( "password" );
		$osType = $this->getRequest ()->get ( "platform" ); // 2-代表Android,3-代iOS
		$token = $this->getRequest ()->get ( "userToken" );
		$userType = $this->getRequest ()->get ( "userType" ); // 0学生 1 企业
		if ($username && $password && $osType && $token && ($userType == 0 || $userType == 1)) {
			
			$user = new frontuser ();
			$userinfo = $user->authUser ( $username, $password, 0 );
			if ($userinfo ["result"] > 0) {
				$data ["userID"] = $userinfo ["result"];
				$data ["userType"] = $userinfo ["userinfo"] ["type"] == 1 ? "1" : "0";
				$url = $this->getRequest ()->hostUrl;
				// 判断企业还是学生
				if ($data ["userType"]) {
					// 1-企业
					$com = new company ();
					$info = $com->getCompanyDetailByFuId2 ( $data ["userID"] );
					$data ['nickName'] = $info ['com_name'];
				} else {
					// 0-学生
					$student = new student ();
					$info = $student->getstudetail ( $data ["userID"] );
					$data ['nickName'] = $info ['stu_name'];
				}
				// echo 2;
				$data ["pic"] = $info ["pic_link"] == null ? "" : "$url/common/upload/images/" . $info ["pic_link"];
				$session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
				$session->set ( "session_userid", $userinfo ["result"] );
				$user->setPhoneInfo ( $userinfo ["result"], $osType, $token == "null" ? "" : $token );
				// echo 3;
				// var_dump($session->get("session_id"));
				// $userdata=$user->getUserFromAccount($session->get("session_id"),true);
				// $this->getApp()->putData('userinfo', $userdata );
				// $userinfo = $this->getData ( 'userinfo' );
				// $userId = $userinfo ['id'];
				// var_dump($userId);
				
				$this->view->setState ( "1" );
				$this->view->setStatus ( "1" );
				$this->view->setMsg ( "登录成功!" );
				$this->view->setData ( $data );
				$this->view->display ( "json" );
			} else {
				$this->view->setState ( "0" );
				$this->view->setStatus ( "0" );
				$this->view->setData ( ( object ) null );
				$this->view->setMsg ( $userinfo ['msg'] );
				$this->view->display ( "json" );
			}
		} else {
			$this->view->setState ( "0" );
			$this->view->setMsg ( "参数缺失!" );
			$this->view->setStatus ( "0" );
			$this->view->setData ( ( object ) null );
			$this->view->display ( "json" );
		}
	}
	
	/**
	 * 注销
	 */
	public function Logout() {
		$session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
		$session->clear ();
		$this->view->setMsg ( "注销成功!" );
		$this->view->setState ( "1" );
		$this->view->setStatus ( "0" );
		$this->view->setData ( ( object ) null );
		$this->view->display ( "json" );
	}
}