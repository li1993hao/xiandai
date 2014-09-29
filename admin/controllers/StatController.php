<?php
/**
*  
*  Create On 2013-7-29 4:51:22
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
class StatController extends Controller{

	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}

	public function Index(){
		//$this->login();
	}
	
	/**
	 * 网站访问统计
	 */
	public function Sitevisit(){
		if($_POST){
			//print_r($_POST);
			//Array ( [order] => 0 [start] => 2013-08-08 [end] => 2013-08-14 [submit] => 查询 ) 
			if ($_POST['terminal'] == 0){
				$terminal = "Web端";
			}elseif ($_POST['terminal'] == 3){
				$terminal = "Android客户端";
			}elseif ($_POST['terminal'] == 4){
				$terminal = "iOS客户端";
			}else {
				$terminal = "全部";
			}
			
			if($_POST["order"] == 0 ){//日
				$order = "日";
				$start = $_POST["start"];
				$end = $_POST["end"];
				//echo $start."-".$end."+";
				//echo strtotime($start)."-".strtotime($end)."+";
				$log = new log();
				$result = array();
				for($j = 0,$i = strtotime($start) ; $i < strtotime($end."+1 day"); $j++, $i += 24*60*60 ){
					//echo date("Y-m-d",$i).":".$i." ";
					
					$result[$j]["date"] = date("Y-m-d",$i);
					$result[$j]["result"] = $log->getVisteNum($_POST['terminal'], $log->Timestamp2Datetime($i-1), $log->Timestamp2Datetime($i+(24*60*60) ) );
				}
				$message = "查询方式：".$order." 终端类型：".$terminal." 开始时间：".$start." 结束时间：".$end;
				$this->view->result = $message;
				$this->view->visitList = $result; 
			
			}else if($_POST["order"] == 1){//月
				$order = "月";
				$start = $_POST["start"];
				$end = $_POST["end"];	
				$log = new log();
				//echo $start."-".$end."+";
				//echo strtotime($start)."-".strtotime($end)."+";
				
				$result = array();
				for($j = 0,$i = strtotime($start) ; $i < strtotime($end."+1 month"); $j++, $i = strtotime(date("Y-m",$i)."+1 month") ){
					//echo date("Y-m-d",$i).":".$i." ";
						
					$result[$j]["date"] = date("Y-m",$i);
					$result[$j]["result"] = $log->getVisteNum($_POST['terminal'], $log->Timestamp2Datetime($i-1), $log->Timestamp2Datetime( strtotime(date("Y-m",$i)."+1 month") ) );
				}
				$message = "查询方式：".$order." 终端类型：".$terminal." 开始时间：".$start." 结束时间：".$end;
				$this->view->result = $message;
				$this->view->visitList = $result;
				
			}else if($_POST["order"] == 2){//年
				$order = "年";
				$start = $_POST["start"];
				$end = $_POST["end"];	
				$log = new log();
				$result = array();
				
				for($j = 0, $i = mktime(0,0,0,1,1,$start) ; $i < mktime(0,0,0,1,1,$end+1); $j++, $i = mktime(0,0,0,1,1,date("Y",$i)+1 ) ){
					//echo date("Y-m-d",$i).":".$i." ";
					//if($j==5)break;	
					$result[$j]["date"] = date("Y",$i);
					$result[$j]["result"] = $log->getVisteNum($_POST['terminal'], $log->Timestamp2Datetime($i-1), $log->Timestamp2Datetime( mktime(0,0,0,1,1,date("Y",$i)+1) ) );
				}
				$message = "查询方式：".$order." 终端类型：".$terminal." 开始时间：".$start." 结束时间：".$end;
				$this->view->result = $message;
				$this->view->visitList = $result;
			}
		}
		echo $this->view->render("sitevisit.htm");
	}
	
	/**
	 * 工作统计
	 */
	public function Jobstat(){
		
		if($_POST){
			//print_r($_POST);
			//Array ( [order] => 0 [sort]=>0 [start] => 2013-08-08 [end] => 2013-08-14 [submit] => 查询 )
			$start = $_POST["start"];
			$end = $_POST["end"];
			$sort = $_POST["sort"];
			$order = $_POST["order"];
			
			$result = $this->_getDayJobResultNumBySort($order,$sort,$start,$end);
			
			$this->view->visitList = $result;
			
		}
		echo $this->view->render("jobstat.htm");
	}
	
	/**
	 * 用户登录统计
	 */
	public function Userlogin(){
		$user = new user();
		$log = new log();
		if($_POST){
			$userid = $_POST["user"];
			$start = $_POST["start"];
			$end = $_POST["end"];
			$page = 1 ;
			$logList = $log->getUserLoginLogPageModel($userid,$page,10,$start,$end);
			if($userid > 0){
				$userinfo = $user->getUserFromUserid($userid);
				$username = $userinfo["user_name"]."[".$userinfo["user_realname"]."]";
			}else{
				$username = "不限";
			}
			$this->view->result = "用户：".$username."&nbsp;时间段：".($start ? $start:"不限" )."&nbsp;——&nbsp;".($end ? $end:"不限");
			
		}else{
			$userid = $this->getRequest()->get("userid") ;
			$start = $this->getRequest()->get("start") ?  $this->getRequest()->get("start") : 0 ;
			$end = $this->getRequest()->get("end")?  $this->getRequest()->get("end") : 0 ;
			
			$page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1 ;
			$logList = $log->getUserLoginLogPageModel($userid,$page,10,$start,$end);
			
			if($userid > 0){
				$userinfo = $user->getUserFromUserid($userid);
				$username = $userinfo["user_name"]."[".$userinfo["user_realname"]."]";
			}else{
				$username = "不限";
			}
			$this->view->result = "用户：".$username."&nbsp;时间段：".($start ? $start:"不限" )."-".($end ? $end:"不限");
		}
		$this->view->userid = $userid;
		$this->view->start = $start;
		$this->view->end = $end;
		$this->view->userList = $user->getUsersList();
		
		//print_r($logList);
		$this->view->logList = $logList;
		echo $this->view->render("userlogin.htm");
	}
	
	/*
	 *用户反馈 
	 */
	public function feedback(){
		$pagesize = 10;
		$feedback = new feedback();
		if($_POST){
			$platform = $_POST["platform"];
			$start = $_POST["start"];
			$end = $_POST["end"];
			$page = 1 ;
			$avglist = $feedback->getFeedbackAvgScore($platform,$start,$end);
			$feedbackList = $feedback->getFeedbackPageModel($platform,$page,$pagesize,$start,$end);
			
			if($platform == 1){
				$platformName = "web";
			}else if($platform == 2){
				$platformName = "android";
			}else if($platform == 3){
				$platformName = "ios";
			}else{
				$platformName = "不限";
			}
			$this->view->result = "平台：".$platformName."&nbsp;时间段：".($start ? $start:"不限" )."&nbsp;——&nbsp;".($end ? $end:"不限");
				
		}else{
			$platform = $this->getRequest()->get("platform") ;
			$start = $this->getRequest()->get("start") ?  $this->getRequest()->get("start") : 0 ;
			$end = $this->getRequest()->get("end")?  $this->getRequest()->get("end") : 0 ;
				
			$page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1 ;
			
			$avglist = $feedback->getFeedbackAvgScore($platform,$start,$end);
			$feedbackList = $feedback->getFeedbackPageModel($platform,$page,$pagesize,$start,$end);
			if($platform == 1){
				$platformName = "web";
			}else if($platform == 2){
				$platformName = "android";
			}else if($platform == 3){
				$platformName = "ios";
			}else{
				$platformName = "不限";
			}
			$this->view->result = "平台：".$platformName."&nbsp;时间段：".($start ? $start:"不限" )."&nbsp;——&nbsp;".($end ? $end:"不限");
		
		}
		$this->view->avg =$avglist;
		$this->view->platform = $platform;
		$this->view->start = $start;
		$this->view->end = $end;
		
		//print_r($logList);
		$this->view->feedbackList = $feedbackList;
		$this->view->display("feedback.htm");
	}
	
	protected function _getDayJobResultNumBySort($order,$sort,$start,$end){
		/*
		 * order 0 1 2 日 月 年
		 <option value="0" >企业招聘信息</option>
		<option value="1" >实习招聘信息</option>
		<option value="2" >招聘会信息</option>
		<option value="3" >基层招聘信息</option>
		<option value="4" >不限</option>
		*/
		
		$result=array();
		if($sort == 0 ){
			$cim = new corpinternmsg();
			for($j = 0,$i = $this->_date2Ts($start, $order) ; $i < $this->_getNextTime($end, $order); $j++, $i = $this->_getNextTime($i, $order,TRUE) ){
				//echo date("Y-m-d",$i).":".$i." ";
				$result[$j]["date"] = date("Y-m-d",$i);
				$result[$j]["result"] = $cim->getCorpMsgNum( $cim->Timestamp2Datetime($i-1), $cim->Timestamp2Datetime($this->_getNextTime($i, $order,true) ) );
			}
		}else if($sort == 1){
			
			$cim = new corpinternmsg();
			for($j = 0,$i = $this->_date2Ts($start, $order) ; $i < $this->_getNextTime($end, $order); $j++, $i = $this->_getNextTime($i, $order,TRUE) ){
				//echo date("Y-m-d",$i).":".$i." ";
				//if($j==5)break;
				$result[$j]["date"] = date("Y-m-d",$i);
				$result[$j]["result"] = $cim->getInternMsgNum( $cim->Timestamp2Datetime($i-1), $cim->Timestamp2Datetime($this->_getNextTime($i, $order,TRUE) ) );
			}
		
		}else if($sort == 2 ){
			$jfm = new jobfairmsg();
			for($j = 0,$i = $this->_date2Ts($start, $order) ; $i < $this->_getNextTime($end, $order); $j++, $i = $this->_getNextTime($i, $order,TRUE) ){
				//echo date("Y-m-d",$i).":".$i." ";
				$result[$j]["date"] = date("Y-m-d",$i);
				$result[$j]["result"] = $jfm->getJobfairMsgNum( $jfm->Timestamp2Datetime($i-1), $jfm->Timestamp2Datetime($this->_getNextTime($i, $order,TRUE) ) );
			}	
		}else if($sort == 3){
			//$brm = new baserecrumsg();
			$cim = new corpinternmsg();
			for($j = 0,$i = $this->_date2Ts($start, $order) ; $i < $this->_getNextTime($end, $order); $j++, $i = $this->_getNextTime($i, $order,TRUE) ){
				//echo date("Y-m-d",$i).":".$i." ";
				$result[$j]["date"] = date("Y-m-d",$i);
				$result[$j]["result"] = $cim->getBaseMsgNum( $cim->Timestamp2Datetime($i-1), $cim->Timestamp2Datetime($this->_getNextTime($i, $order,TRUE) ) );
			}
		}else if($sort == 4 ){
			//$brm = new baserecrumsg();
			$jfm = new jobfairmsg();
			$cim = new corpinternmsg();
			for($j = 0,$i = $this->_date2Ts($start, $order) ; $i < $this->_getNextTime($end, $order); $j++, $i = $this->_getNextTime($i, $order,TRUE) ){
				//echo date("Y-m-d",$i).":".$i." ";
				$result[$j]["date"] = date("Y-m-d",$i);
				$result[$j]["result"] = 0;
				$result[$j]["result"] += $cim->getMsgNum( $cim->Timestamp2Datetime($i-1), $cim->Timestamp2Datetime($this->_getNextTime($i, $order,TRUE) ) );
				$result[$j]["result"] += $jfm->getJobfairMsgNum($jfm->Timestamp2Datetime($i-1), $jfm->Timestamp2Datetime($this->_getNextTime($i, $order,TRUE) ));
				$result[$j]["result"] += $cim->getBaseMsgNum( $cim->Timestamp2Datetime($i-1), $cim->Timestamp2Datetime($this->_getNextTime($i, $order,TRUE) ) );
			}
		}
		
		return $result;
	}
	
	protected function _nextDay($date,$isTS = FALSE){
		if($isTS) return $date + 24*60*60;
		return strtotime($date."+1 day");
	}
	
	protected function _nextMonth($date,$isTS = FALSE){
		if($isTS) return strtotime(date("Y-m",$date)."+1 month");
		return strtotime($date."+1 month");
	}
	
	protected function _nextYear($date,$isTS = FALSE){
		if($isTS) return mktime(0,0,0,1,1,date("Y",$date)+1 );
		return mktime(0,0,0,1,1,$date+1);
	}
	
	protected function _getNextTime($date,$sort,$isTS = FALSE){
		if($sort == 1 ){
			return $this->_nextMonth($date,$isTS);
		}else if($sort == 2 ){
			return $this->_nextYear($date,$isTS);
		}else{
			return $this->_nextDay($date,$isTS);

		}
	}
	
	protected function _date2Ts($date,$sort){
		
		if($sort == 2 ){//如果是年号
			return mktime(0,0,0,1,1,$date);
		}
		return strtotime($date);
	}
	
}

?>