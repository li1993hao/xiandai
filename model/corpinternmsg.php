<?php

// namespace model;
class corpinternmsg extends Model {
	private $__corptypeId = 1; //企业招聘
	private $__interntypeId = 2; // 实习招聘
	private $__basetypeId = 3; //基层招聘
	
	// 0未处理 ， 1通过， 2拒绝
	protected $_state = array (
			"untreated" => 0,
			"pass" => 1,
			"refuse" => 2 
	);
	public function getList() {
		$sql = "SELECT *  FROM `recruinfotype`";
		return $this->fetchAll ( $sql );
	}
	public function getcttypelist() {
		$sql = "SELECT * FROM `corptype`";
		return $this->fetchAll ( $sql );
	}
	public function getprovlist() {
		$sql = "SELECT * FROM `prov`";
		return $this->fetchAll ( $sql );
	}
	// 获取前台招聘信息
	public function getfrontmsg($num = 6, $state = NULL) {
		$select = "SELECT `corpinternmsg`.* FROM `corpinternmsg` ";
		$filter = "WHERE `corpinternmsg`.`rit_id` = 1 ";
		if ($state){
			$filter .="AND `corpinternmsg`.`cim_veri` = '".$state."' ";
		}
		$order = "ORDER BY `corpinternmsg`.`cim_isup` DESC, `corpinternmsg`.`cim_date` DESC ";
		$limit = "LIMIT " . $num . " ";
		//echo $sql;
		$sql = $select.$filter.$order.$limit;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 * 通过id获取信息详情
	 * $state:null不限 ，pass 通过，untreated 未处理， refuse拒绝
	 * $fu_id:用户id
	 */
	public function getDetailInfoFromId($id, $fu_id = null, $state = null) {
		$sql = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`recruinfotype`.*,`user`.*,`file`.*,`company`.*  
				FROM `corpinternmsg` 
				INNER JOIN `recruinfotype` ON `corpinternmsg`.`rit_id` = `recruinfotype`.`rit_id` 
				LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id` 
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id` 
				LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id` 
				LEFT JOIN `company` ON `corpinternmsg`.`cim_publish` = `company`.`com_id` 
				LEFT JOIN `file` ON `corpinternmsg`.`file_id` = `file`.`file_id`  ";
		$where = " WHERE `corpinternmsg`.`cim_id` = '" . $id . "'  ";
		// echo $sql;
		
		if ($fu_id !== null) {
			$where .= " AND `corpinternmsg`.`cim_publish`=" . $fu_id . " ";
		}
		
		if ($state !== null) {
			$where .= " AND `corpinternmsg`.`cim_veri` = " . $this->_state [$state] . " ";
		}
		// echo $sql.$where;
		return $this->fetchRow ( $sql . $where );
	}
	// 获取推荐招聘信息
	public function getCorprecominfo() {
		$sql = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* FROM `corpinternmsg` 
				LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id` 
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id` 
				LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id` 
				WHERE `corpinternmsg`.`rit_id` = '" . $this->__corptypeId . "' AND `cim_veri` = " . $this->_state ["pass"] . "  AND `corpinternmsg`.`cim_recom` = 1";
		return $this->fetchAll ( $sql );
	}
	public function getPreNews($cur_id, $type) {
		$sql = "SELECT `corpinternmsg`.* FROM `corpinternmsg` 
				WHERE `cim_id` > " . $cur_id . " AND `rit_id` = '" . $type . "' AND `cim_veri` = " . $this->_state ["pass"] . " ORDER BY `cim_id` ASC ";
		return $this->fetchRow ( $sql );
	}
	public function getNextNews($cur_id, $type) {
		$sql = "SELECT `corpinternmsg`.* FROM `corpinternmsg` 
				WHERE `cim_id` < " . $cur_id . " AND `rit_id` = '" . $type . "' AND `cim_veri` = " . $this->_state ["pass"] . " ORDER BY `cim_id` DESC ";
		return $this->fetchRow ( $sql );
	}
	public function addReadnum($id) {
		$sql = "UPDATE  `corpinternmsg` SET  `cim_read` =  `cim_read` +1 WHERE  `corpinternmsg`.`cim_id` = '" . $id . "' ";
		return $this->update ( $sql );
	}
	public function addsharenum($id) {
		$sql = "UPDATE  `corpinternmsg` SET  `cim_share` =  `cim_share` +1 WHERE  `corpinternmsg`.`cim_id` = '" . $id . "' ";
		return $this->update ( $sql );
	}
	public function addgoodnum($id, $type) {
		if (! $type) {
			$sql = "UPDATE  `jobfairmsg` SET  `jm_good` =  `jm_good` +1 WHERE  `jobfairmsg`.`jm_id` = '" . $id . "' ";
			// echo $sql;
			if ($this->update ( $sql )) {
				$sql = "SELECT `jobfairmsg`.`jm_good` from `jobfairmsg` WHERE  `jobfairmsg`.`jm_id` = '" . $id . "' ";
				$nu = $this->fetchRow ( $sql );
				if ($nu) {
					return $nu ['jm_good'];
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		} else {
			$sql = "UPDATE  `corpinternmsg` SET  `cim_good` =  `cim_good` +1 WHERE  `corpinternmsg`.`cim_id` = '" . $id . "' ";
			// echo $sql;
			if ($this->update ( $sql )) {
				$sql = "SELECT `corpinternmsg`.`cim_good` from `corpinternmsg` WHERE  `corpinternmsg`.`cim_id` = '" . $id . "' ";
				$nu = $this->fetchRow ( $sql );
				if ($nu) {
					return $nu ['cim_good'];
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}
	}
	/**
	 * 获取各类招聘信息
	 *
	 * @param unknown_type $type        	
	 * @param unknown_type $page        	
	 * @param unknown_type $num        	
	 * @param unknown_type $key        	
	 * @param unknown_type $publish        	
	 * @param unknown_type $state
	 *        	1或null所有 ， 2未处理， 3通过，4未通过
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getPageModel($corptype = null, $page = 1, $num = 10, $key = null, $state = null, $publish = null) {
		$select = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* ,`file`.*
				FROM `corpinternmsg`
				LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id`
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id`
				LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id`
				LEFT JOIN `file` ON `corpinternmsg`.`file_id` = `file`.`file_id` ";
		if ($corptype == 1) {
			$filter = " `corpinternmsg`.`rit_id` = '" . $this->__corptypeId . "' ";
		} elseif ($corptype == 2) {
			$filter = " `corpinternmsg`.`rit_id` = '" . $this->__interntypeId . "' ";
		} elseif ($corptype == 3) {
			$filter = " `corpinternmsg`.`rit_id` = '" . $this->__basetypeId . "' ";
		} else {
			$filter = " 1 ";
		}
		if ($key) {
			// echo $key;
			$keyArr = explode ( " ", $key );
			foreach ( $keyArr as $item ) {
				$filter .= " AND `corpinternmsg`.`cim_name` LIKE '%" . $item . "%' ";
			}
		}
		if ($state == null || $state == 1) {
			$filter .= " AND 1 ";
		} elseif ($state == 2) {
			$filter .= " AND `corpinternmsg`.`cim_veri` = " . $this->_state ["untreated"] . " ";
		} elseif ($state == 3) {
			$filter .= " AND `corpinternmsg`.`cim_veri` = " . $this->_state ["pass"] . " ";
		} elseif ($state == 4) {
			$filter .= " AND `corpinternmsg`.`cim_veri` = " . $this->_state ["refuse"] . " ";
		}
		if ($publish) {
			$filter .= " AND `corpinternmsg`.`cim_publish` = '" . $publish . "'";
		}
		$where = " WHERE " . $filter;
		$order = " ORDER BY  `corpinternmsg`.`cim_isup` DESC , `corpinternmsg`.`cim_date` DESC ";
		$limit = " Limit " . ($page - 1) * $num . "," . $num . " ";
		$sql = $select . $where . $order . $limit;
		// echo $sql;
		
		$list = $this->fetchAll ( $sql );
		$total = $this->getTotal ( 'corpinternmsg', $filter );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	/**
	 * 获取企业招聘信息
	 *
	 * @param unknown_type $page        	
	 * @param unknown_type $num        	
	 * @param unknown_type $key   
	 * $userinfo      判断是否已经登录	
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getCorpPageModel($page = 1, $num = 10, $key = null, $state = null,$userinfo = true) {
		$select = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* ,`file`.*
				FROM `corpinternmsg` 
				LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id` 
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id` 
				LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id` 
				LEFT JOIN `file` ON `corpinternmsg`.`file_id` = `file`.`file_id` ";
		
		$filter = " `corpinternmsg`.`rit_id` = '" . $this->__corptypeId . "' ";
		if ($key != null) {
			// echo $key;
			$keyArr = explode ( " ", $key );
			foreach ( $keyArr as $item ) {
				$filter .= " AND `corpinternmsg`.`cim_name` LIKE '%" . $item . "%' ";
			}
		}
		if ($state !== null) {
			
			$filter .= " AND `cim_veri` = " . $this->_state [$state] . " ";
		}
		if($userinfo == false){
			$gongkai = " AND cim_isopen = 1 ";
		}else{
			$gongkai = '';
		}
		$filter .=$gongkai;
		$where = " WHERE " . $filter.$gongkai;
		$order = " ORDER BY  `corpinternmsg`.`cim_isup` DESC , `corpinternmsg`.`cim_date` DESC ";
		$limit = " Limit " . ($page - 1) * $num . "," . $num . " ";
		$sql = $select . $where . $order . $limit;
		// echo $sql;
		
		$list = $this->fetchAll ( $sql );
		$total = $this->getTotal ( 'corpinternmsg', $filter );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function getInternPageModel($page = 1, $num = 10, $key = null, $state = null,$userinfo = true) {
		$select = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* 
				FROM `corpinternmsg` 
				LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id` 
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id` 
				LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id` ";
		
		$filter = " `corpinternmsg`.`rit_id` = '" . $this->__interntypeId . "' ";
		
		if ($key) {
			// echo $key;
			$keyArr = explode ( " ", $key );
			foreach ( $keyArr as $item ) {
				$filter .= " AND `corpinternmsg`.`cim_name` LIKE '%" . $item . "%' ";
			}
		}
		if ($state !== null) {
			
			$filter .= " AND `cim_veri` = " . $this->_state [$state] . " ";
		}
	   if($userinfo == false){
			$gongkai = " AND cim_isopen = 1 ";
		}else{
			$gongkai = '';
		}
		$filter .=$gongkai;
		$where = " WHERE " . $filter . $gongkai;
		
		$order = " ORDER BY  `corpinternmsg`.`cim_isup` DESC , `corpinternmsg`.`cim_date` DESC ";
		$limit = " Limit " . ($page - 1) * $num . "," . $num . " ";
		$sql = $select . $where . $order . $limit;
		 //echo $sql;
		$list = $this->fetchAll ( $sql );
		$total = $this->getTotal ( 'corpinternmsg', $filter );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function getBasePageModel($page = 1, $num = 10, $key = null, $state = null,$userinfo = true) {
		$select = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* ,`file`.*
				FROM `corpinternmsg`
				LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id`
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id`
				LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id`
				LEFT JOIN `file` ON `corpinternmsg`.`file_id` = `file`.`file_id` ";
		
		$filter = " `corpinternmsg`.`rit_id` = '" . $this->__basetypeId . "' ";
		if ($key) {
			// echo $key;
			$keyArr = explode ( " ", $key );
			foreach ( $keyArr as $item ) {
				$filter .= " AND `corpinternmsg`.`cim_name` LIKE '%" . $item . "%' ";
			}
		}
		if ($state !== null) {
			$filter .= " AND `cim_veri` = " . $this->_state [$state] . " ";
		}
		if($userinfo == false){
			$gongkai = " AND cim_isopen = 1 ";
		}else{
			$gongkai = '';
		}
		$filter .=$gongkai;
		
		$where = " WHERE " . $filter . $gongkai;
		$order = " ORDER BY  `corpinternmsg`.`cim_isup` DESC , `corpinternmsg`.`cim_date` DESC ";
		$limit = " Limit " . ($page - 1) * $num . "," . $num . " ";
		$sql = $select . $where . $order . $limit;
		// echo $sql;
		
		$list = $this->fetchAll ( $sql );
		$total = $this->getTotal ( 'corpinternmsg', $filter );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function getuserid($username) {
		$sql = "select `user`.`user_id` from `user` where `user`.`user_name`='" . $username . "' ";
		return $this->fetchRow ( $sql );
	}
	public function getctid($cttype) {
		$sql = "select `corptype`.`ct_id` from `corptype` where `corptype`.`ct_type`='" . $cttype . "' ";
		// echo $sql;
		return $this->fetchRow ( $sql );
	}
	public function getprovid($provcont) {
		$sql = "select `prov`.`prov_id` from `prov` where `prov`.`prov_cont`='" . $provcont . "' ";
		return $this->fetchRow ( $sql );
	}
	public function getusername($userid) {
		$sql = "SELECT `user`.`user_name` FROM `user` WHERE `user`.`user_id` = '" . $userid . "'";
		return $this->fetchRow ( $sql );
	}
	public function getcttype($ctid) {
		$sql = "SELECT `corptype`.`ct_type` FROM `corptype` WHERE `corptype`.`ct_id` = '" . $ctid . "'";
		return $this->fetchRow ( $sql );
	}
	public function getprov($provid) {
		$sql = "SELECT `prov`.`prov_cont` FROM `prov` WHERE `prov`.`prov_id` = '" . $provid . "' ";
		return $this->fetchRow ( $sql );
	}
	
	/**
	 * 添加招聘信息
	 */
	public function addmsg($name, $ritid, $ctid, $provid, $addr, $contact, $tel, $email, $fax, $web, $userid, $src, $content, $news, $notice, $filename = null, $fileid = null, $publish = null, $veri = 0,$isopen=1) {
		if ($fileid == "") {
			$file = "NULL,NULL";
		} else {
			$file = " '" . $filename . "', '" . $fileid. "'";
		}
		
		if ($publish == "0") {
			$veri = "1";
		}
		
		$sql = "INSERT INTO `corpinternmsg`(`cim_name`,`rit_id`,`ct_id`,`prov_id`,`cim_addr`,`cim_contact`,`cim_tel`,`cim_email`,`cim_fax`,`cim_web`,`user_id`,`cim_publish`,`cim_src`,`cim_isup`,`cim_content`,`cim_news`,`cim_notice`,`cim_date`,`file_name`,`file_id`,`cim_veri`,`cim_isopen`)
				VALUES('" . $name . "','" . $ritid . "','" . $ctid . "','" . $provid . "','" . $addr . "','" . $contact . "','" . $tel . "','" . $email . "','" . $fax . "','" . $web . "','" . $userid . "','" . $publish . "','" . $src . "',NULL,'" . $content . "','" . $news . "','" . $notice . "', NOW()," . $file . ",'" . $veri . "','" . $isopen . "') ";
        //var_dump($sql);
		return $this->insert ( $sql );
	}
	
	/**
	 *
	 * @param unknown_type $id        	
	 * @param $userid 前台的企业用户删除需提交$userid        	
	 * @return resource
	 */
	public function delmsg($id, $userid = 0) {
		if ($userid != 0) {
			$sql = "DELETE FROM `corpinternmsg` WHERE `corpinternmsg`.`cim_id` = '" . $id . "' AND `cim_publish` = '" . $userid . "' ";
		} else {
			$sql = "DELETE FROM `corpinternmsg` WHERE `corpinternmsg`.`cim_id` = '" . $id . "'";
		}
		// echo $sql;
		if ($this->del ( $sql )) {
			$sql = "DELETE FROM `collect` WHERE `collect`.`coll_info_id` = $id AND `coll_type` = 1 ";
			// echo $sql;
			return $this->del ( $sql );
		} else {
			return false;
		}
	}
	// 招聘信息置顶
	public function updateIsup($id) {
		$sql = "UPDATE `corpinternmsg` SET `cim_isup` = NOW() WHERE `corpinternmsg`.`cim_id` = '" . $id . "'";
		
		return $this->update ( $sql );
	}
	// 取消置顶
	public function cancelup($id) {
		$sql = "UPDATE `corpinternmsg` SET `cim_isup` = NULL WHERE `corpinternmsg`.`cim_id` = '" . $id . "'";
		
		return $this->update ( $sql );
	}
	/**
	 * 最后一个参数 $userid:代表前台用户的id，如果是前台的企业用户需要传入此参数22
	 */
	public function updatemsg($id, $name, $ctid, $provid, $addr, $contact, $tel, $email, $fax, $web, $userid, $src, $content, $news, $notice, $filename = null, $fileid = null, $userid = 0,$isopen) {
		if ($fileid) {
			$sql = "UPDATE `corpinternmsg` 
					SET 
					`cim_name`='" . $name . "',
					`ct_id` = '" . $ctid . "',
					`prov_id` = '" . $provid . "',
					`cim_addr` = '" . $addr . "',
					`cim_contact` = '" . $contact . "',
					`cim_tel` = '" . $tel . "',
					`cim_email` = '" . $email . "',
					`cim_fax` = '" . $fax . "',
					`cim_web` = '" . $web . "',
					`user_id` = '" . $userid . "',
					`cim_src` = '" . $src . "',
					`cim_content` = '" . $content . "',
					`cim_news` = '" . $news . "',
					`cim_notice` = '" . $notice . "',
					`file_name`= '" . $filename . "',
					`cim_isopen`= '" . $isopen . "',
					`file_id`= '" . $fileid . "'
				 	WHERE `cim_id` = '" . $id . "'";
		} else {
			$sql = "UPDATE `corpinternmsg`
			SET
			`cim_name`='" . $name . "',
			`ct_id` = '" . $ctid . "',
			`prov_id` = '" . $provid . "',
			`cim_addr` = '" . $addr . "',
			`cim_contact` = '" . $contact . "',
			`cim_tel` = '" . $tel . "',
			`cim_email` = '" . $email . "',
			`cim_fax` = '" . $fax . "',
			`cim_web` = '" . $web . "',
			`user_id` = '" . $userid . "',
			`cim_src` = '" . $src . "',
			`cim_content` = '" . $content . "',
			`cim_news` = '" . $news . "',
			`cim_isopen`= '" . $isopen . "',
			`cim_notice` = '" . $notice . "',
			`file_name`= NULL,
			`file_id`= NULL
			WHERE `cim_id` = '" . $id . "'";
		}
		if ($userid != 0) {
			$sql .= " AND `cim_publish` = '" . $userid . "' ";
		}
		//echo $sql;
		return $this->update ( $sql );
	}
	
	/**
	 * 获取一段时间内的企业招聘的数量
	 *
	 * @param unknown_type $start        	
	 * @param unknown_type $end        	
	 * @return number
	 */
	public function getCorpMsgNum($start = null, $end = null) {
		$filter = "  `rit_id` = '" . $this->__corptypeId . "' ";
		if ($start && $end) {
			$filter .= " AND `cim_date` > '" . $start . "' AND `cim_date` < '" . $end . "' ";
		}
		return $this->getTotal ( "corpinternmsg", $filter );
	}
	
	/**
	 * 获取一段时间内实习招聘的数量
	 *
	 * @param unknown_type $start        	
	 * @param unknown_type $end        	
	 * @return number
	 */
	public function getInternMsgNum($start = null, $end = null) {
		$filter = "  `rit_id` = '" . $this->__interntypeId . "' ";
		if ($start && $end) {
			$filter .= " AND `cim_date` > '" . $start . "' AND `cim_date` < '" . $end . "' ";
		}
		return $this->getTotal ( "corpinternmsg", $filter );
	}
	public function getBaseMsgNum($start = null, $end = null) {
		$filter = "  `rit_id` = '" . $this->__basetypeId . "' ";
		if ($start && $end) {
			$filter .= " AND `cim_date` > '" . $start . "' AND `cim_date` < '" . $end . "' ";
		}
		return $this->getTotal ( "corpinternmsg", $filter );
	}
	
	/**
	 * 获取一段时间内企业招聘和实习招聘的总数
	 *
	 * @param unknown_type $start        	
	 * @param unknown_type $end        	
	 */
	public function getMsgNum($start = null, $end = null) {
		$filter = "";
		if ($start && $end) {
			$filter .= " `cim_date` > '" . $start . "' AND `cim_date` < '" . $end . "' ";
		}
		return $this->getTotal ( "corpinternmsg", $filter );
	}
	// 搜索信息
	public function getsearchPageModel($page = 1, $num = 10, $content, $ritid) {
		$sql = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* FROM `corpinternmsg` LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id` 
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id` LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id` WHERE `corpinternmsg`.`rit_id` = '" . $ritid . "'
				AND `corpinternmsg`.`cim_name` LIKE '%$content%' OR `corpinternmsg`.`cim_content` LIKE '%$content%'";
		$limit = "ORDER BY  `corpinternmsg`.`cim_isup` DESC , `corpinternmsg`.`cim_date` DESC limit " . ($page - 1) * $num . "," . $num . "";
		// echo $sql.$limit;
		$list = $this->fetchAll ( $sql . $limit );
		$total = count ( $this->fetchAll ( $sql ) );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function getcrPageModel($page = 1, $num = 10, $content, $ritid) {
		$sql = "SELECT `corpinternmsg`.*,`corptype`.* ,`prov`.*,`user`.* FROM `corpinternmsg` LEFT JOIN `corptype` ON `corpinternmsg`.`ct_id` = `corptype`.`ct_id`
				LEFT JOIN `prov` ON `corpinternmsg`.`prov_id`=`prov`.`prov_id` LEFT JOIN `user` ON `corpinternmsg`.`user_id` = `user`.`user_id` 
				WHERE `corpinternmsg`.`rit_id` = '" . $ritid . "'
				AND `corpinternmsg`.`cim_name` LIKE '%$content%' OR `corpinternmsg`.`cim_content` LIKE '%$content%'
				ORDER BY  `corpinternmsg`.`cim_isup` DESC , `corpinternmsg`.`cim_date` DESC LIMIT " . ($page - 1) * $num . "," . $num . " ";
		// echo $sql;
		$list = $this->fetchAll ( $sql );
		$total = $this->getTotal ( 'corpinternmsg', " `corpinternmsg`.`rit_id` = '" . $ritid . "'
				 AND `corpinternmsg`.`cim_name` LIKE '%$content%' OR `corpinternmsg`.`cim_content` LIKE '%$content%' " );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function getCorpByNum($num = 5) {
		$today = strtotime ( date ( 'Y-m-d', time () ) );
		$sql = "SELECT `corpinternmsg`.* FROM `corpinternmsg` WHERE UNIX_TIMESTAMP(`corpinternmsg`.`cim_date`) >=" . $today . " ORDER BY `corpinternmsg`.`cim_date` ASC Limit 0," . $num . ";";
		return $this->fetchAll ( $sql );
	}
	
	/**
	 * 根据企业获取最近的招聘信息
	 *
	 * @param unknown_type $fuId        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getRecentByCompanyId($fuId) {
		$sql = "SELECT `corpinternmsg`.* FROM `corpinternmsg` " . "WHERE `corpinternmsg`.`cim_publish`='" . $fuId . "' AND `corpinternmsg`.`cim_veri` = " . $this->_state ["pass"] . " " . "ORDER BY `corpinternmsg`.`cim_date` DESC Limit 0,5 ";
		// echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 * 添加职位
	 *
	 * @param unknown_type $name        	
	 * @param unknown_type $intro        	
	 */
	public function insertoffice($name, $intro, $otid, $cimid) {
		$sql = "INSERT INTO `office` (`office_name`, `office_intro`, `ot_id`,`cim_id`) VALUES ('" . $name . "', '" . $intro . "', '" . $otid . "', '" . $cimid . "')";
		// echo $sql;
		return $this->insert ( $sql );
	}
	
	/**
	 * 添加职位与招聘信息关系
	 *
	 * @param unknown_type $offid        	
	 * @return Ambigous <boolean, number>
	 */
	public function insertreoff($offid, $corpmsgid = null) {
		if ($corpmsgid) {
			$sql = "INSERT INTO `office` (`office_id`,`cim_id`) VALUES ('" . $offid . "','" . $corpmsgid . "')";
		} else {
			$sql = "INSERT INTO `office` (`office_id`) VALUES ('" . $offid . "')";
		}
		// echo $sql;
		return $this->insert ( $sql );
	}
	/**
	 * 判断职位与招聘会是否已经相关
	 *
	 * @param unknown_type $officeid        	
	 * @param unknown_type $corpmsgid        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function isoffice($officeid, $corpmsgid) {
		$sql = "SELECT `office`.*
				FROM `office`
				WHERE `cim_id` = " . $corpmsgid . " AND `office_id` = " . $officeid;
		return $this->fetchRow ( $sql );
	}
	/**
	 * 添加职位
	 *
	 * @param unknown_type $comid        	
	 */
	public function insertcomid($comid) {
		$sql = "UPDATE `recruitoffice` 
				SET `cim_id` = '" . $comid . "'
				WHERE `cim_id` IS NULL";
		// echo $sql;
		return $this->update ( $sql );
	}
	
	/**
	 * 获取职位
	 *
	 * @param unknown_type $id        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getoffice($id) {
		$sql = "SELECT `office`.*,`officetype`.*
				FROM `office` 
				LEFT JOIN `officetype` ON `office`.`ot_id` = `officetype`.`ot_id`
				WHERE `office_id` = " . $id;
		// echo $sql;
		return $this->fetchRow ( $sql );
	}
	/**
	 * 获取职位类别信息
	 *
	 * @param unknown_type $id        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getofficetype($id) {
		$sql = "SELECT `officetype`.*
				FROM `officetype`
				WHERE `ot_id` = " . $id;
		// echo $sql;
		return $this->fetchRow ( $sql );
	}
	/**
	 * 修改职位
	 *
	 * @param unknown_type $id        	
	 * @param unknown_type $officename        	
	 * @param unknown_type $officeintro        	
	 * @return resource
	 */
	public function modoffice($id, $officename, $officeintro, $otid = NULL) {
		$sql = "UPDATE `office` 
				SET `office_name` = '" . $officename . "',
					`office_intro` = '" . $officeintro . "',
					`ot_id` = '" . $otid . "'
				WHERE `office_id` = " . $id;
		return $this->update ( $sql );
	}
	
	/**
	 * 删除职位
	 *
	 * @param unknown_type $id        	
	 * @return resource
	 */
	public function deloffice($cimid) {
		$sql = "DELETE FROM `office` WHERE `cim_id` = $cimid ;";
		return $this->del ( $sql );
	}
	
	/**
	 * 获取某招聘信息的职位信息
	 *
	 * @param unknown_type $cimid        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getofficeinfo($cimid) {
		$sql = "SELECT  `office`.* ,`officetype`.*
				FROM `office`
				LEFT JOIN `officetype` ON `office`.`ot_id`= `officetype`.`ot_id`
				WHERE `office`.`cim_id` =" . $cimid;
		return $this->fetchAll ( $sql );
	}
	public function verifyinfo($type, $page = 0, $num = 0) {
		$sql = "SELECT * FROM `corpinternmsg` ";
		$where = " WHERE ";
		$filter = " 1 ";
		if ($type == 1) { // type默认为1，全部显示
			$filter .= " AND `cim_veri` = 0 OR `cim_veri` = 2";
		} else if ($type == 0) {
			$filter .= " AND `cim_veri` = 0";
		} else {
			$filter .= " AND `cim_veri` = 2";
		}
		$where .= $filter;
		$order = " ORDER BY `cim_date` DESC ";
		$limit = "";
		if ($num) {
			$limit .= "  LIMIT " . ($page - 1) * $num . "," . $num . " ";
		}
		
		// echo $sql . $where . $order . $limit ;
		$list = $this->fetchAll ( $sql . $where . $order . $limit );
		$total = $this->getTotal ( "corpinternmsg", $filter );
		if ($num == 0) {
			$totalPage = 1;
		} else {
			$totalPage = ceil ( $total / $num );
		}
		
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function infopassed($infoid) {
		$sql = "UPDATE `corpinternmsg` SET `cim_veri` = 1 
				WHERE `cim_id` = " . $infoid;
		return $this->update ( $sql );
	}
	public function rejectreason($infoid, $reason) {
		$sql = "UPDATE `corpinternmsg` 
				SET `cim_reason` = '" . $reason . "',
				    `cim_veri` = 2
				WHERE `cim_id` = " . $infoid;
		return $this->update ( $sql );
	}
	public function getTokenByInfoId($infoId) {
		$sql = "SELECT `corpinternmsg`.`cim_publish`, `frontuser`.`fu_token` FROM `corpinternmsg` " . "LEFT JOIN `frontuser`.`fu_id` = `corpinternmsg`.`cim_publish` ";
		return $this->fetchRow ( $sql );
	}
	
	/**
	 * 获取赞数
	 * @author linkai
	 * @param unknown $id
	 * @param unknown $type
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getGood($id, $type) {
		if ($type) {
			$sql = "SELECT `cim_good` as `good`
				FROM `corpinternmsg`
				WHERE `cim_id` = '" . $id . "'  ";
		} else {
			$sql = "SELECT `jm_good` as `good`
				FROM `jobfairmsg`
				WHERE `jm_id` = '" . $id . "'  ";
		}
		// echo $sql;
		return $this->fetchRow ( $sql );
	}


    /** APP获取招聘信息赫建武 */
    // 获取前台招聘信息
    public function getappfrontmsg($num = 0, $state = NULL,$rit_id = 1) {
        $select = "SELECT `corpinternmsg`.* FROM `corpinternmsg` ";
        $filter = "WHERE `corpinternmsg`.`rit_id` = '".$rit_id."' ";
        if ($state){
            $filter .="AND `corpinternmsg`.`cim_veri` = '".$state."' ";
        }
        $order = "ORDER BY `corpinternmsg`.`cim_isup` DESC, `corpinternmsg`.`cim_date` DESC ";
        $limit = "LIMIT " . $num . ",10 ";
        //echo $sql;
        $sql = $select.$filter.$order.$limit;
        return $this->fetchAll ( $sql );
    }
    /**  获取单条招聘信息内容*/
    public function getappzpcontent($userId=0,$cim_id,$type){
        if($type==1){
            $sql="select cim.cim_name title,cim.cim_date fb_date ,cim.cim_read read_num,cim.cim_content content,f.file_link,cim.file_name from corpinternmsg cim left join file f on cim.file_id=f.file_id where cim.cim_id=$cim_id";
            $sql1="update corpinternmsg set cim_read=cim_read+1 where cim_id=$cim_id";
            $this->update($sql1);
            $sql1="insert into tj_view (user_id,post_id,post_type,view_time) values ('".$userId."','".$cim_id."','".$type."','".date('Y-m-d H:i:s',time())."')";
            $this->insert($sql1);
        }elseif($type==0){
            $sql="select jm.jm_name title,jm.jm_opentime fb_date,jm.jm_read read_num,jm.jm_content content,f.file_link,jm.file_name from jobfairmsg jm  left join file f on jm.file_id=f.file_id  where jm.jm_id=$cim_id";
            $sql1="update jobfairmsg set jm_read=jm_read+1 where jm_id=$cim_id";
            $this->update($sql1);
            $sql1="insert into tj_view (user_id,post_id,post_type,view_time) values ('".$userId."','".$cim_id."','".$type."','".date('Y-m-d H:i:s',time())."')";
            $this->insert($sql1);
        }elseif($type==2){
            $sql="select ep.ep_title title,ep.ep_create fb_date,ep.ep_content content,f.file_link,ep.file_name from employmentpolicy ep left join file f on ep.file_id=f.file_id  where ep.ep_id=$cim_id";
            $sql1="update employmentpolicy set ep_browse=ep_browse+1 where ep_id=$cim_id";
            $this->update($sql1);
        }elseif($type==3){
            $sql="select ji_title title,ji_date fb_date,ji_read read_num,ji_content content from jobinfo where ji_id=$cim_id";
            $sql1="update jobinfo set ji_read=ji_read+1 where ji_id=$cim_id";
            $this->update($sql1);
        }elseif($type==4){
            $sql="select cci_title title,cci_time fb_date,cci_scan read_num,cci_content content from collegeintroduction where cci_id=$cim_id";
            $sql1="update collegeintroduction set cci_scan=cci_scan+1 where cci_id=$cim_id";
            $this->update($sql1);
        }elseif($type==5){
            $sql="select si.si_title title,si.si_time fb_date,si.si_scan read_num,si.si_content content,f.file_link,si.file_name from sourceinformation si left join file f on si.fu_id=f.fu_id where si.si_id=$cim_id";
            $sql1="update sourceinformation set si_scan=si_scan+1 where si_id=$cim_id";
            $this->update($sql1);
        }
        return $this->fetchRow($sql);
    }
    /**
     * 获取企业  通过审核  未通过审核 未审核的信息列表
     */
    public function getappmsg($fu_id,$state){
        $sql="select cim_id,cim_name,cim_content,cim_date from corpinternmsg where cim_publish=$fu_id and cim_veri=$state";
        $cor_msg_lists=$this->fetchAll($sql);
        if($cor_msg_lists){
            for($i=0;$i<count($cor_msg_lists);$i++){
                $cor_msg_lists[$i][type]=1;
                $cor_msg_lists[$i][content]=strip_tags($cor_msg_lists[$i][content]);
            }
        }
        $sql1="select jm_id cim_id,jm_name cim_name,jm_content cim_content,jm_date cim_date from jobfairmsg where jm_publish=$fu_id and jm_veri=$state";
        $jobfairmsg=$this->fetchAll($sql1);
        if($jobfairmsg){
            for($i=0;$i<count($jobfairmsg);$i++){
                $jobfairmsg[$i][type]=0;
                $jobfairmsg[$i][content]=strip_tags($jobfairmsg[$i][content]);
            }
        }

        if($cor_msg_lists&&$jobfairmsg){
            return  array_merge($cor_msg_lists,$jobfairmsg);
        }else{
            if($cor_msg_lists){
                return $cor_msg_lists;
            }elseif($jobfairmsg){
                return $jobfairmsg;
            }else{
                return false;
            }
        }


    }
    /** 获取热点排行信息 0表示招聘会信息  1表示招聘 2 实习信息   最近一周的排行  按照点击量排序 */
    public function gethotnews1($type_num,$num,$start_time,$end_time){
        if($type_num==1){
            $sql="SELECT cim_id info_id,cim_name info_name,cim_content info_content,cim_read info_read,cim_good info_good,cim_date info_date FROM corpinternmsg WHERE  `cim_date` >  '".$end_time."' AND  `cim_date` <  '".$start_time."' AND `rit_id`='".$type_num."' order by cim_read desc limit $num,10";
        }elseif($type_num==2){
            $sql="SELECT cim_id info_id,cim_name info_name,cim_content info_content,cim_read info_read,cim_good info_good,cim_date info_date FROM corpinternmsg WHERE  `cim_date` >  '".$end_time."' AND  `cim_date` <  '".$start_time."' AND `rit_id`='".$type_num."' order by cim_read desc limit $num,10";
        }elseif($type_num==0){
            $sql="SELECT jm_id info_id,jm_name info_name,jm_addr info_content,jm_read info_read,jm_good info_good,jm_date info_date FROM jobfairmsg WHERE  `jm_date` >  '".$end_time."' AND  `jm_date` <  '".$start_time."'  order by jm_read desc limit $num,10";

        }
        return $this->fetchAll($sql);
    }

    public function gethotnews2($type_num,$num,$start_time,$end_time){
        if($type_num==1){
            $sql="SELECT cim_id info_id,cim_name info_name,cim_content info_content,cim_read info_read,cim_good info_good,cim_date info_date FROM corpinternmsg WHERE  `cim_date` >  '".$end_time."' AND  `cim_date` <  '".$start_time."' AND `rit_id`='".$type_num."' order by cim_good desc limit $num,10";
        }elseif($type_num==2){
            $sql="SELECT cim_id info_id,cim_name info_name,cim_content info_content,cim_read info_read,cim_good info_good,cim_date info_date FROM corpinternmsg WHERE  `cim_date` >  '".$end_time."' AND  `cim_date` <  '".$start_time."' AND `rit_id`='".$type_num."' order by cim_good desc limit $num,10";
        }elseif($type_num==0){
            $sql="SELECT jm_id info_id,jm_name info_name,jm_addr info_content,jm_read info_read,jm_good info_good,jm_date info_date FROM jobfairmsg WHERE  `jm_date` >  '".$end_time."' AND  `jm_date` <  '".$start_time."'  order by jm_good desc limit $num,10";
        }
        return $this->fetchAll($sql);
    }

    /** 统计当天新信息数量  0表示招聘会信息  1表示招聘 2 实习信息  */
    public function getcountnum($start_time,$end_time){
        $sql="select count(*) zp_num from corpinternmsg where `cim_date` >  '".$start_time."' AND  `cim_date` <  '".$end_time."' AND `rit_id`=1";
        $zp_num=$this->fetchRow($sql);
        $sql2="select count(*) sx_num from corpinternmsg where `cim_date` >  '".$start_time."' AND  `cim_date` <  '".$end_time."' AND `rit_id`=2";
        $sx_num=$this->fetchRow($sql2);
        $sql3="select count(*) zph_num from jobfairmsg where `jm_date` >  '".$start_time."' AND  `jm_date` <  '".$end_time."' ";
        $zph_num=$this->fetchRow($sql3);
        $sql4="select count(*) dz_num from tj_zan where `zan_time` >  '".$start_time."' AND  `zan_time` <  '".$end_time."' ";
        $dz_num=$this->fetchRow($sql4);
        $sql5="select count(*) dj_num from tj_view where `view_time` >  '".$start_time."' AND  `view_time` <  '".$end_time."' ";
        $dj_num=$this->fetchRow($sql5);
        $sql6="select count(*) fw_num from tj_login where `login_time` >  '".$start_time."' AND  `login_time` <  '".$end_time."' ";
        $fw_num=$this->fetchRow($sql6);
        return array_merge($dj_num,$dz_num,$fw_num,$zp_num,$sx_num,$zph_num);
    }
}

?>