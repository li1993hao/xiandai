<?php
//插入一条日志，获取用户登录记录（查看一条，查看多条），按时段查看网站浏览量
class log extends Model{
	
	private $__userlogin=1;
	private $__sitevisite=0;
	private $_android = 3;
	private $_ios = 4;
	
	/**
	 * 添加用户登录日志
	 * @param unknown_type $userid
	 * @param unknown_type $logip
	 */
	public function  addAdminLoginLog($userid){
		return $this->addLog( $this->__userlogin, $userid);
	}
	
	/**
	 * 添加站点访问记录
	 * @param unknown_type $logip
	 */
	public function addSiteVisite($userid=0){
		
		return $this->addLog($this->__sitevisite, $userid);
	}
	
	/**
	 * 添加安卓客户端访问量
	 * @param unknown_type $userId
	 * @return Ambigous <Ambigous, boolean, number>
	 */
	public function addAndroidVisite($userId = 0){
		return $this->addLog($this->_android, $userId);
	}
	/**
	 * 添加iOS客户端访问量
	 * @param unknown_type $userId
	 * @return Ambigous <Ambigous, boolean, number>
	 */
	public function addiOSVisite($userId = 0){
		return $this->addLog($this->_ios, $userId);
	}
	/**
	 * 获取一段时间内的站点访问信息
	 * @param $visitType
	 * @param datetime 2012-02-02 11:22:22 $start
	 * @param datetime 2012-02-02 11:22:22 $end
	 * @return number
	 */
	public function getVisteNum($visitType, $start=null, $end=null){
		if ($visitType == 5){
			$filter = "  `log_type` != '1' AND `log_type` != '2' ";
		}else{
			$filter = "  `log_type` = '" .$visitType. "' ";
		}
		if($start&&$end){
			$filter.=" AND `log_time` > '".$start."' AND `log_time` < '".$end."' "; 
		}
		return $this->getTotal("log",$filter);
	}
	
	/**
	 * 获取一段时间内的站点访问信息
	 * @param datetime 2012-02-02 11:22:22 $start
	 * @param datetime 2012-02-02 11:22:22 $end
	 * @return number
	 */
	public function getSiteVisteNum($start=null,$end=null){
		return $this->getVisteNum($this->__sitevisite,$start,$end);
	}
	
	/**
	 * 选取用户上次的登录信息
	 * @param unknown_type $userid
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getLastLoginLog($userid){
		$sql = "SELECT * FROM `log` WHERE `log_type` = '".$this->__userlogin."' AND `user_id`='".$userid."' ORDER BY `log_time` DESC ";
		return $this->fetchRow($sql);
	}
	
	public function getUserLoginLogPageModel($userid = 0,$page =1 , $num = 10 , $start = null,$end =null){
		$filter = " `log`.`log_type` = ".$this->__userlogin." "; 
		if($userid > 0){
			$filter .= " AND `log`.`user_id` = ".$userid." ";
		}
		if($start){
			$filter .= " AND `log`.`log_time` > '".$start."' "; 
		}
		if($end){
			$filter .= " AND `log`.`log_time` < '".$end."' ";
		}
		$sql = "SELECT `log`.*,`user`.* FROM `log` LEFT JOIN `user` ON `log`.`user_id` = `user`.`user_id`  WHERE ".$filter." ORDER BY  `log`.`log_time` DESC  Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('log',$filter);
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	
	
	/**
	 * 添加一条日志
	 * @param unknown_type $userid
	 * @param unknown_type $logType
	 * @param unknown_type $logip
	 * @return Ambigous <boolean, number>
	 */
	protected function addLog($logType,$userid=0){
		$logip = $this->getClientIp();
		$sql = "INSERT INTO `log` (`log_id` , `user_id` ,`log_type` , `log_time` ,`log_ip` )VALUES (NULL, '".$userid."' , '".$logType."' , NOW() , '".$logip."'); ";
		//echo $sql;
		return  $this->insert($sql);
	}
	
	/**
	 * 获取用户的ip地址
	 * @return unknown
	 */
	public function getClientIp(){
		return array_key_exists("HTTP_X_FORWARDED_FOR", $_SERVER) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] ;
	}
	
}

?>