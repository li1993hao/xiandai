<?php
class collect extends Model {
	/**
	 *
	 * @name 插入收藏 如果已经插入过返回 -1
	 * @author lsq
	 * @return 已经插入过：-1 插入失败：0 插入成功：总数
	 */
	public function add($userId, $id, $flag, $type) {
		//6/218/1/1
		if ($this->haveCollect ( $userId, $id, $type )) {
			
			return - 1;
		}
		
		$sql = "INSERT INTO `collect`
				(`fu_id`, `coll_info_id`, `coll_type`, `coll_open_myinfo`, `coll_time`)
				VALUES 
				('" . $userId . "', '" . $id . "', '" . $type . "', '" . $flag . "', NOW())";
		//echo $sql;
		return $this->insert ( $sql ) ? $this->getCollectNum ( $id, $type ) : 0;
	}
	public function haveCollect($userId, $id, $type=null) {
		if($type == null){
		$type = '';
		}else{
		$type = " AND  `coll_type` =" . $type ;
		}
		//$sql = "SELECT * FROM  `collect` WHERE  `fu_id` =" . $userId . " AND  `coll_info_id` =" . $id . " AND  `coll_type` =" . $type . " LIMIT 1";
		$sql = "SELECT * FROM  `collect` WHERE  `fu_id` =" . $userId . " AND  `coll_info_id` =" . $id . $type. " LIMIT 1";
		//echo $sql;
		return $this->fetchRow ( $sql );
	}
	
	/**
	 *
	 * @name 删除收藏
	 * @author lsq
	 * @return 失败：false 成功：收藏数
	 */
	public function delete($userId, $id, $type) {
		$sql = "DELETE FROM `collect` 
				WHERE `fu_id` = '" . $userId . "' 
				  And `coll_info_id` = '" . $id . "'
				  And `coll_type` = '" . $type . "'";
// 		echo  $sql;
		return $this->del ( $sql ) ? $this->getCollectNum ( $id, $type ) : false;
	}
	
	/**
	 *
	 * @name 根据招聘类型与id获取收藏数量
	 * @author lsq
	 * @return boolean
	 */
	public function getCollectNum($id, $type) {
		$sql = "select COUNT(`collect`.`coll_id`)
				from `collect`
				where `collect`.`coll_info_id`='" . $id . "'
				  and `collect`.`coll_type`='" . $type . "'";
		// echo $sql;
		return $this->fetchRow ( $sql );
	}
	
	/**
	 *
	 * @name 根据userid获取收藏列表
	 * @typeud  0招聘会信息  1 招聘信息 2 实习信息 3 基层招聘信息
	 * @author lsq
	 * @return array
	 */
	public function getCollectList($userid, $typeid, $page = 1, $num = 10) {
		$sql = "select `collect`.`coll_time`,`c`.* 
				from `collect` ";
		if ($typeid == 0) { // 招聘会
			$sql .= "left join `jobfairmsg` as `c` on `collect`.`coll_info_id`=`c`.`jm_id` 
				where `collect`.`coll_type`='0'
				  and `collect`.`fu_id`='" . $userid . "' AND `c`.`jm_id` = `collect`.`coll_info_id`
				ORDER BY  `c`.`jm_isup` DESC , `c`.`jm_date` DESC ";
		} else {
			$sql .= "left join `corpinternmsg` as `c` on `collect`.`coll_info_id`=`c`.`cim_id`
				where `collect`.`coll_type`='" . $typeid . "'
				  and `collect`.`fu_id`='" . $userid . "'
				ORDER BY  `c`.`cim_isup` DESC , `c`.`cim_date` DESC ";
		}
// 				  and `c`.`rit_id`='" . $typeid . "'
		$sql .= "Limit " . ($page - 1) * $num . "," . $num;
		//echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 *
	 * @name 根据userid获取感兴趣学生列表
	 * @author linkai
	 * @return array
	 */
	public function getFavStudentList($userid, $page = 1, $num = 10) {
		$sql = "SELECT DISTINCT `student`.* FROM `collect`
			LEFT JOIN `corpinternmsg` ON (`corpinternmsg`.`cim_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=0)
			LEFT JOIN `jobfairmsg` ON (`jobfairmsg`.`jm_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=1)
			LEFT JOIN `student` ON (`student`.`fu_id`=`collect`.`fu_id` )
			WHERE `corpinternmsg`.`cim_publish`=$userid OR `jobfairmsg`.`jm_publish`=$userid
			ORDER BY  `collect`.`coll_time` DESC  "; // TODO
		$sql .= "Limit " . ($page - 1) * $num . "," . $num;
// 		echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 * 筛选对我感兴趣的学生
	 *
	 * @param unknown_type $fuId        	
	 * @param unknown_type $type        	
	 * @param unknown_type $page        	
	 * @param unknown_type $num        	
	 * @param unknown_type $infoId        	
	 * @param unknown_type $pro        	
	 * @param unknown_type $time        	
	 * @return multitype:unknown number
	 */
	public function getInterestedstudentsByFuId($fuId, $type, $flag = 0, $infoId = 0, $pro = 0, $time = 0, $page = 1, $num = 10) {
		$today = strtotime ( date ( 'Y-m-d', time () ) );
		$timeRange = $today - (3600 * $time * 24);
		if($flag == 0){
			if ($type == 0) {
				$select = "SELECT `collect`.*, `jobfairmsg`.`jm_name` AS info_name, `student`.*
								FROM `collect` "
						. "LEFT JOIN `jobfairmsg` ON `collect`.`coll_info_id` = `jobfairmsg`.`jm_id` "
								. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter = " WHERE `jobfairmsg`.`jm_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			} else {
				$select = "SELECT `collect`.*, `corpinternmsg`.`cim_name` AS info_name, `student`.* FROM `collect` "
						. "LEFT JOIN `corpinternmsg` ON `collect`.`coll_info_id` = `corpinternmsg`.`cim_id` "
								. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter =  " WHERE `corpinternmsg`.`cim_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			}
		}else if ($flag == 1){
			if ($type == 0) {
				$select = "SELECT DISTINCT `collect`.`coll_info_id`, `jobfairmsg`.`jm_name` AS info_name FROM `collect` "
						. "LEFT JOIN `jobfairmsg` ON `collect`.`coll_info_id` = `jobfairmsg`.`jm_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter = " WHERE `jobfairmsg`.`jm_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			} else {
				$select = "SELECT DISTINCT `collect`.`coll_info_id`, `corpinternmsg`.`cim_name` AS info_name FROM `collect` "
						. "LEFT JOIN `corpinternmsg` ON `collect`.`coll_info_id` = `corpinternmsg`.`cim_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter =  " WHERE `corpinternmsg`.`cim_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			}
		}else{
			if ($type == 0) {
				$select = "SELECT DISTINCT `student`.`stu_pro` FROM `collect` "
						. "LEFT JOIN `jobfairmsg` ON `collect`.`coll_info_id` = `jobfairmsg`.`jm_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter = " WHERE `jobfairmsg`.`jm_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			} else {
				$select = "SELECT DISTINCT DISTINCT `student`.`stu_pro` FROM `collect` "
						. "LEFT JOIN `corpinternmsg` ON `collect`.`coll_info_id` = `corpinternmsg`.`cim_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter =  " WHERE `corpinternmsg`.`cim_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			}
		}
		
		if ($infoId) {
			$filter .= "AND `collect`.`coll_info_id` = '" . $infoId . "' ";
		}
		if ($pro) {
			$filter .= "AND `student`.`stu_pro` = '" . $pro . "' ";
		}
		if ($time) {
			$filter .= "AND UNIX_TIMESTAMP(`collect`.`coll_time`) >= " . $timeRange . " ";
		}
		$order = "ORDER BY `collect`.`coll_time` DESC ";
		$limit = "LIMIT " . ($page - 1) * $num . "," . $num . " ";
		$sql = $select . $filter . $order . $limit;
		// echo $sql;
		$sqlTotal = $select . $filter . $order;
		if ($flag == 0) {
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
			// echo $sqlTotal;
			return $this->fetchAll ( $sqlTotal );
		}
	}
}