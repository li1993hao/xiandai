<?php
include_once "Filter.class.php";
class clientapiFilter extends Filter{
	
	protected $_openRS = array(
			'Account' => array('Login','Logout','Applogin','Zpinfo','Sxinfo','Zphinfo','Do_good','Zponeinfo','Epinfo','Jobinfo','Collegeinfo','Sourceinfo','Collectinfo','Show_stu_collect','Fetchqymsg','Stu_info','Company_info','Stu_like_company','Zpzm','Feedback','Favstudentlist','Del_collect','Hot_news','Count_num','Focus_img','Collect_info','Qyzz_msg','Zp_msg','Login_num'),
			'Index' => array('Test'),
			'Employer' => array('Getcenterintroduction','Getcollegeintroductioninfolist','Collegedetail','Getenrollintroductioninfolist','Sourcedetail','Getemployguide'),
			'Setting' => array('Check','Feedback'),
			'Statistics' => array('Count'),
// 			'Userinfo'=>array('Favrecruinfo','Getfavrecruinfolist','Getstudentuserinfo','Getenterpriseuserinfo','Getfavstudentlist'),
			'Student' => array('Getrecruinfolist','Getjobfairinfolist','Getpolicyinfolist','Getnoticeinfolist','Getjobinfolist','Getrecruinfodetail','Getjobfairinfodetail','Getbaseinfodetail','Getpolicyinfodetail',
							   'Getnoticeinfodetail','Getjobinfodetail','corpinfolist','Interninfolist','Baseinfolist','Getwestinfolist','Getwestdetail','Goodinfo','Isgood','Getcalendarbymonth','Getcalendarbyday','IsFav'),
			'Upgrade' => array('Check'),
// 			'Message' =>  array('Getpublishlist')
	); // 允许不用登陆访问的资源
	   
	// 属于账号的资源
	   // protected $_selfRS = array( 'Account' => array('Login','Logout'),
	   // 'Index' => array('Test') );
	   
	// 最终的资源列表
	   // protected $_RSList = array();
	public function doFilter() {
// 		echo 123;
// 		exit;
		$session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
// 		print_r($session);
		$userid = $session->get ( "session_userid" );
		if ($userid) { // 有session
			$user = new frontuser ();
			$userdata = $user->getUserFromAccount ( $userid, true );
			if ($userdata) {
				$this->getApp ()->getView ()->setStatus ( "1" );
				// 设置用户的信息
				$this->getApp ()->putData ( 'userinfo', $userdata );
			} else {
				$session->clear ();
				$view = $this->getApp ()->getView ();
				$view->setState ( "0" );
				$view->setMsg ( "error:invalid session infomation!" );
				$view->setStatus ( "0" );
				$view->setData ( "" );
				$view->display ( "json" );
				exit ();
			}
		} else { // 无session
			$view = $this->getApp ()->getView ();
			if ($this->canViste ( $this->getCName (), $this->getAName () )) {
				$view->setStatus ( "0" );
			} else { // 必须登录
				$view->setState ( "0" );
				$view->setMsg ( "错误:请登录!" );
				$view->setStatus ( "0" );
				$view->setData ( "" );
				$view->display ( "json" );
				exit ();
			}
		}
	}
	
	// 检查是否可以访问
	public function canViste($cName, $aName) {
		if ($this->isOpenRS ( $cName, $aName )) {
			return true;
		} else {
			return array_key_exists ( $cName, $this->_RSList ) ? in_array ( $aName, $this->_RSList [$cName] ) : false;
		}
	}
	public function isOpenRS($cName, $aName) {
		return array_key_exists ( $cName, $this->_openRS ) ? in_array ( $aName, $this->_openRS [$cName] ) : false;
	}
}

?>