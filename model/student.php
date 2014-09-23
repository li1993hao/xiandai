<?php
class student extends Model {
	
	/**
	 * 获取学生信息详情
	 */
	public function getstudetail($id) {
		$sql = "SELECT `student`.*, `file`.*, `picture`.* FROM `student`
				LEFT JOIN `picture` ON `picture`.`pic_id` = `student`.`pic_id`
				LEFT JOIN `file` ON `file`.`file_id` = `student`.`file_id`
				WHERE `student`.`fu_id` = " . $id;
		return $this->fetchRow ( $sql );
	}
	/**
	 * 获取学生信息详情(包括学生感兴趣领域)
	 * lsq
	 */
	public function getstudetail2($id) {
		$sql = "SELECT `student`.*, `file`.*, `picture`.* FROM `student`
				LEFT JOIN `picture` ON `picture`.`pic_id` = `student`.`pic_id`
				LEFT JOIN `file` ON `file`.`file_id` = `student`.`file_id` 
				WHERE `student`.`fu_id` = " . $id;
		
		if($userinfo = $this->fetchRow ( $sql )){
			$userinfo["ind_id"] = "";
			$userinfo["ind_name"] = "";
			$sql = "SELECT `industry`.* from `studentindustry` 
						LEFT JOIN  `industry` ON `industry`.ind_id = `studentindustry`.ind_id 
						WHERE `studentindustry`.fu_id = ".$id;
			//echo $sql;
			if($result = $this->fetchAll($sql)){
					$userinfo["ind_id"] = $result[0]["ind_id"];
					$userinfo["ind_name"] = $result[0]["ind_type"];
					for($i = 1 ;$i < count($result); $i++ ){
						$userinfo["ind_id"] .= ",".$result[$i]["ind_id"];
						$userinfo["ind_name"] .= ",".$result[$i]["ind_type"];
					}
					
			}
			
			return $userinfo;
		}
		return false;
	}
	
	/**
	 * 获取某学生感兴趣的领域
	 *
	 * @param unknown_type $id        	
	 */
	public function getstuindustry($id) {
		if ($id != 0) {
			$sql = "SELECT `industry`.*,`studentindustry`.* FROM  `industry`
				   LEFT JOIN `studentindustry` ON `studentindustry`.`ind_id` = `industry`.`ind_id` 
			   	WHERE `studentindustry`.`fu_id` = " . $id;
		} else {
			$sql = "SELECT * FROM `industry`";
		}
		return $this->fetchAll ( $sql );
	}
	public function modifymyinfo($fileid, $filename, $picid, $intro, $id) {
		if ($picid == "") {
			if ($fileid == "") {
				$sql = "UPDATE `student`
						SET `stu_intro`= '" . $intro . "' 
						WHERE `fu_id` = " . $id;
			} else {
				$sql = "UPDATE `student`
						SET `stu_intro`= '" . $intro . "',
							`file_id` = '" . $fileid . "',
							`file_name` = '" . $filename . "'		
						WHERE `fu_id` = " . $id;
			}
		} else {
			if ($fileid == "") {
				$sql = "UPDATE `student`
					SET `stu_intro`= '" . $intro . "',
						`pic_id` = '" . $picid . "'
					WHERE `fu_id` = " . $id;
			} else {
				$sql = "UPDATE `student`
						SET `stu_intro`= '" . $intro . "',
							`file_id` = '" . $fileid . "',
							`file_name` = '" . $filename . "',
							`pic_id` = '" . $picid . "'
						WHERE `fu_id` = " . $id;
			}
		}
		// echo $sql;
		return $this->update ( $sql );
	}
	
	/**
	 * 删除学生感兴趣的领域
	 *
	 * @param unknown_type $stuid        	
	 * @param unknown_type $indid        	
	 */
	public function delstuindustry($stuid, $indid = NULL) {
		if ($indid != NULL) {
			$sql = "DELETE FROM `studentindustry`
					WHERE `fu_id` = " . $stuid . " AND `ind_id` = " . $indid;
		} else {
			$sql = "DELETE FROM `studentindustry`
					WHERE `fu_id` = " . $stuid;
		}
		return $this->del ( $sql );
	}
	
	/**
	 * 删除学生感兴趣的领域
	 *
	 * @param unknown_type $stuid        	
	 * @param unknown_type $indid        	
	 */
	public function insertstuindistry($id, $indid) {
		$sql = "INSERT INTO `studentindustry` (`fu_id`, `ind_id`) ";
		$value = " VALUES ";
		if (is_array ( $indid ) && (($total = count ( $indid )) > 0)) {
			$value .= " ('" . $id . "', '" . $indid [0] . "') ";
			for($i = 1; $i < $total; $i ++) {
				$value .= ", ( '" . $id . "', '" . $indid [$i] . "') ";
			}
		} else {
			$value .= " ('" . $id . "', '" . $pics . "') ";
		}
		$sql .= $value;
		// echo $sql;
		return $this->insert ( $sql );
	}
	
	/**
	 * 获取某学生招聘日历
	 *
	 * @param unknown_type $start        	
	 * @param unknown_type $end        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getmyjobfair($id, $start, $end) {
		$sql = "SELECT `jobfairmsg`.`jm_id`, `jobfairmsg`.`jm_name`, `jobfairmsg`.`jm_addr`, UNIX_TIMESTAMP(`jobfairmsg`.`jm_opentime`) AS `jm_opentimestamp` , `student`.`fu_id`, `collect`.*
				FROM `collect` 
				LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id`
				LEFT JOIN `jobfairmsg` ON `jobfairmsg`.`jm_id` = `collect`.`coll_info_id`
				WHERE `collect`.`coll_type` = 0 AND `jobfairmsg`.`jm_opentime`>='" . $start . "' AND `jobfairmsg`.`jm_opentime`<='" . $end . "' AND `student`.`fu_id` = " . $id;
		// echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 *
	 * @param unknown_type $id        	
	 * @param unknown_type $type
	 *        	0 所有招聘实习基层的信息 1招聘 2实习 3基层
	 * @param unknown_type $page        	
	 * @param unknown_type $num        	
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getmyrecruinfo($id, $type, $page, $num) {
		$sql = "SELECT `student`.`fu_id` ,`corpinternmsg`.* , `collect`.* 
				FROM `collect`
				LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id`
				LEFT JOIN `corpinternmsg` ON `corpinternmsg`.`cim_id` = `collect`.`coll_info_id` ";
		$filter = " `collect`.`fu_id` = " . $id;
		if ($type != 0) {
			$filter .= " AND `collect`.`coll_type` =  " . $type;
		} else {
			$filter .= " AND `collect`.`coll_type` !=  " . $type;
		}
		// echo $sql.$infotype;
		$where = " WHERE ";
		$where .= $filter;
		$limit = " LIMIT " . ($page - 1) * $num . "," . $num . " ";
		// echo $sql . $where . $limit;
		$list = $this->fetchAll ( $sql . $where . $limit );
		
		$total = $this->getTotal ( "collect", $filter );
		// $total = count ( $this->fetchAll ( $sql . $infotype ) );
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function delcollect($fuid, $collinfoid) {
		$sql = "DELETE FROM `collect`
				WHERE `fu_id` = '" . $fuid . "' AND `coll_info_id` = " . $collinfoid;
		return $this->del ( $sql );
	}
	public function openmyinfo($fuid, $collinfoid) {
		$sql = "UPDATE `collect` SET `coll_open_myinfo` = 1 
				WHERE `fu_id` = '" . $fuid . "' AND `coll_info_id` = " . $collinfoid;
		return $this->update ( $sql );
	}
	public function closemyinfo($fuid, $collinfoid) {
		$sql = "UPDATE `collect` SET `coll_open_myinfo` = 0
				WHERE `fu_id` = '" . $fuid . "' AND `coll_info_id` = " . $collinfoid;
		return $this->update ( $sql );
	}
	public function getcibpublishname($publishid) {
		$sql = "SELECT `com_name` FROM `company` WHERE `fu_id` =" . $publishid;
		return $this->fetchRow ( $sql );
	}
	public function provlist() {
		$sql = "SELECT * FROM `prov`";
		return $this->fetchAll ( $sql );
	}
	public function canceljobfair($id, $infoid) {
		$sql = "DELETE FROM `collect` 
				WHERE `fu_id` = " . $id . " AND `coll_info_id` = " . $infoid;
		return $this->del ( $sql );
	}
	
	/**
	 * 筛选学生信息
	 *
	 * @param unknown_type $type        	
	 * @param unknown_type $college        	
	 * @param unknown_type $grade        	
	 * @param unknown_type $degree        	
	 * @param unknown_type $pro        	
	 * @param unknown_type $page        	
	 * @param unknown_type $num        	
	 * @return multitype:unknown number Ambigous <boolean, multitype:> |Ambigous <boolean, multitype:>
	 */
	public function getAllStudentInfo($type = 0, $college = 0, $grade = 0, $degree = 3, $pro = 0, $page = 1, $num = 10, $gender = NULL, $name = NULL, $number = NULL, $state = NULL) {
		if($type == 0){
			$select = "SELECT `frontuser`.*,`student`.* FROM `frontuser` "
					. " LEFT JOIN `student` ON `frontuser`.`fu_id` = `student`.`fu_id` ";
		}else if ($type == 1){
			$select = "SELECT DISTINCT `student`.`stu_pro` FROM `frontuser` "
					. " LEFT JOIN `student` ON `frontuser`.`fu_id` = `student`.`fu_id` ";
		}else if ($type == 2){
			$select = "SELECT DISTINCT `student`.`stu_grade` FROM `frontuser` "
					. " LEFT JOIN `student` ON `frontuser`.`fu_id` = `student`.`fu_id` ";
		}else if ($type == 3){
			$select = "SELECT DISTINCT `student`.`stu_college` FROM `frontuser` "
					. " LEFT JOIN `student` ON `frontuser`.`fu_id` = `student`.`fu_id` ";
		}else{
			$select = "SELECT DISTINCT `student`.`stu_education` FROM `frontuser` "
					. " LEFT JOIN `student` ON `frontuser`.`fu_id` = `student`.`fu_id` ";
		}
		$filter = " WHERE `frontuser`.`fu_type` = '0' ";
		if ($college) {
			$filter .= " AND `student`.`stu_college` = '" . $college . "'";
		}
		if ($grade) {
			$filter .= " AND `student`.`stu_grade` = '" . $grade . "'";
		}
		if ($degree != 3) {
			$filter .= " AND `student`.`stu_education` = '" . $degree . "'";
		}
		if ($pro) {
			$filter .= " AND `student`.`stu_pro` = '" . $pro . "'";
		}
		if ($gender && $gender != 3) {
			if ($gender == 2) {
				$filter .= " AND `student`.`stu_gender` = 0";
			} elseif ($gender == 1) {
				$filter .= " AND `student`.`stu_gender` = 1";
			}
		} elseif ($gender == 3) {
			$filter .= " AND 1";
		}
		if ($name) {
			$filter .= " AND `student`.`stu_name` LIKE '%$name%'";
		}
		if ($number) {
			$filter .= " AND `frontuser`.`fu_number` LIKE '%$number%'";
		}
		if ($state && $state != 3) {
			// $filter .= " AND `frontuser`.`fu_isable` = '".$state."' ";
			if ($state == 2) {
				$filter .= " AND `frontuser`.`fu_isable` = 1";
			} elseif ($state == 1) {
				$filter .= " AND `frontuser`.`fu_isable` = 0";
			}
		} elseif ($state == 3) {
			$filter .= " AND 1";
		}
		
		$order = " ORDER BY `frontuser`.`fu_register_time` DESC";
		$limit = " LIMIT " . ($page - 1) * $num . "," . $num . "";
		$sql = $select . $filter . $order . $limit;
		// echo $sql;
		$sqlTotal = $select . $filter . $order;
		if ($type == 0) {
			$list = $this->fetchAll ( $sql );
			$total = count ( $this->fetchAll ( $sqlTotal ) );
			$totalPage = ceil ( $total / $num );
			return array (
					'page' => $page,
					'list' => $list,
					'total' => $total,
					'totalPage' => $totalPage 
			);
		} else {
			return $this->fetchAll ( $sqlTotal );
		}
	}
}