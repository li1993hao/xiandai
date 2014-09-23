<?php
class message extends Model{
	public function addFavMessage($userId, $infoId, $publisherId) {
		$sql = "INSERT INTO message VALUES (null, $userId, $infoId, 1, 3, 0, NOW(), $publisherId)";
		//echo $sql;
		return $this->insert($sql);
	}
	
	/**
	 * 获取企业消息——学生收藏消息
	 */
	public function getFavMessageList($userId, $page, $num) {
		$sql = "SELECT student.stu_name AS name, 
					student.stu_id AS id,
					message.mes_time AS msgTime
				FROM frontuser INNER JOIN message ON frontuser.fu_id = message.fu_id
			 		INNER JOIN student ON student.fu_id = frontuser.fu_id
				WHERE message.fu_id_publisher = $userId AND message.mes_type = 3
				ORDER BY mes_id DESC , mes_time DESC
				Limit ".($page-1)*$num.",".$num;
// 		echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取企业消息——企业资质消息
	 */
	public function getCompanyMessageList($userId, $page, $num) {
		$sql = "SELECT message.mes_sort AS flag, 
				message.mes_time AS msgTime
				FROM message
				WHERE message.fu_id = $userId AND message.mes_type = 0
				ORDER BY mes_id DESC , mes_time DESC
				Limit ".($page-1)*$num.",".$num;
// 		echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取企业消息——审核消息(包括招聘和招聘会)
	 */
	public function getRecruitMessageList($userId, $page, $num) {
		$sql = "(SELECT 
					message.mes_sort AS flag,
					corpinternmsg.cim_id AS id,
					message.mes_time AS msgTime, 
					corpinternmsg.cim_name AS name,
					message.mes_type AS msgType,
					0 AS location,
					0 AS openTime
				FROM corpinternmsg INNER JOIN message ON corpinternmsg.cim_id = message.info_id
				WHERE message.fu_id = $userId AND message.mes_type = 1 AND corpinternmsg.rit_id = 1  
				ORDER BY id DESC , msgTime DESC
				) union all (
				SELECT 
					message.mes_sort AS flag,
					jobfairmsg.jm_id AS id, 
					message.mes_time AS msgTime,
					message.mes_type AS msgType, 
					jobfairmsg.jm_name AS name, 
					jobfairmsg.jm_addr AS location,  
					jobfairmsg.jm_opentime AS openTime
				FROM jobfairmsg INNER JOIN message ON jobfairmsg.jm_id = message.info_id
				WHERE message.fu_id = $userId AND message.mes_type = 2
				)
				ORDER BY time DESC , id DESC
				Limit ".($page-1)*$num.",".$num;
// 		echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取企业用户发布的信息(包括招聘和招聘会)
	 * @param type
	 * 0-未审核，1-审核通过，2-审核失败
	 */
	public function getPublishList($userId, $page, $num, $type) {
		if ($type == 1 || $type == 2 || $type == 0) 
		$sql = "
				(SELECT
					corpinternmsg.cim_id AS id,
					corpinternmsg.cim_name AS name,
					corpinternmsg.cim_content AS content,
					corpinternmsg.cim_date AS msgTime,
					1 AS msgType
				FROM corpinternmsg
				WHERE corpinternmsg.rit_id = 1 AND corpinternmsg.cim_veri = $type AND cim_publish = $userId
				Limit ".($page-1)*$num.",$num
				) union all (
				SELECT jobfairmsg.jm_id AS id, 
					jobfairmsg.jm_name AS name, 
					jobfairmsg.jm_content AS content, 
					jobfairmsg.jm_date AS msgTime,
					2 AS msgType
				FROM jobfairmsg
				WHERE jobfairmsg.jm_veri = $type AND jobfairmsg.jm_publish  = $userId
				Limit ".($page-1)*$num.",$num
				)
				ORDER BY msgTime DESC , id DESC
				Limit ".($page-1)*$num.",$num";
 		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 
	 * @param unknown_type $fuId
	 * @param unknown_type $type
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @return multitype:unknown number
	 */
	public function getComMesByFuId($fuId, $type = 0, $page = 1, $num = 10){
		$filter = "WHERE `message`.`fu_id_publisher` = '".$fuId."' ";
		if ($type == 1){
			$filter .= "AND `message`.`mes_isread` = '0' ";
		}
		$order = "ORDER BY `mes_time` DESC ";
		$limit = "LIMIT ".($page-1)*$num.",".$num."";
		//$limit = "LIMIT 5,10";
		$sql = "(SELECT `message`.*, `corpinternmsg`.`cim_name` AS info_name FROM `message` "
				. "LEFT JOIN `corpinternmsg` ON `message`.`info_id` = `corpinternmsg`.`cim_id` "
				. $filter." AND `message`.`mes_type` != '0' AND `message`.`mes_type` != '4' 
						AND `message`.`mes_type` != '5' AND `corpinternmsg`.`cim_publish` = '".$fuId."') "
				. "UNION ALL "
				. "(SELECT `message`.*, `jobfairmsg`.`jm_name` AS info_name FROM `message` "
				. "LEFT JOIN `jobfairmsg` ON `jobfairmsg`.`jm_id` = `message`.`info_id` "
				. $filter."	AND `message`.`mes_type` = '4'  AND `jobfairmsg`.`jm_publish` = '".$fuId."') "
				. "UNION ALL "
				. "(SELECT `message`.*, `student`.`stu_name` AS info_name FROM `message` "
				. "LEFT JOIN `student` ON `student`.`fu_id` = `message`.`fu_id` "
				. $filter." AND `message`.`mes_type` = '5') "
				. "UNION ALL "
				. "(SELECT `message`.*, `company`.`com_name` AS info_name FROM `message` "
				. "LEFT JOIN `company` ON `company`.`fu_id` = `message`.`fu_id_publisher` "
				. $filter." AND `message`.`mes_type` = '0') "
				.$order.$limit;
		
		$sqlTotal = "(SELECT `message`.*, `corpinternmsg`.`cim_name` AS info_name FROM `message` "
				. "LEFT JOIN `corpinternmsg` ON `message`.`info_id` = `corpinternmsg`.`cim_id` "
				. $filter." AND `message`.`mes_type` != '0' AND `message`.`mes_type` != '4' AND `message`.`mes_type` != '5' AND `corpinternmsg`.`cim_publish` = '".$fuId."') "
				. "UNION ALL "
				. "(SELECT `message`.*, `jobfairmsg`.`jm_name` AS info_name FROM `message` "
				. "LEFT JOIN `jobfairmsg` ON `jobfairmsg`.`jm_id` = `message`.`info_id` "
				. $filter."	AND `message`.`mes_type` = '4'  AND `jobfairmsg`.`jm_publish` = '".$fuId."') "
				. "UNION ALL "
				. "(SELECT `message`.*, `student`.`stu_name` AS info_name FROM `message` "
				. "LEFT JOIN `student` ON `student`.`fu_id` = `message`.`fu_id` "
				. $filter." AND `message`.`mes_type` = '5') "
				. "UNION ALL "
				. "(SELECT `message`.*, `company`.`com_name` AS info_name FROM `message` "
				. "LEFT JOIN `company` ON `company`.`fu_id` = `message`.`fu_id_publisher` "
				. $filter." AND `message`.`mes_type` = '0') "
				.$order;
		echo $sqlTotal;
		$list = $this->fetchAll($sql);
		$total = count($this->fetchAll($sqlTotal));
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);		
	}
	
	/**
	 * 删除消息
	 * @param unknown_type $mesId
	 * @return resource
	 */
	public function delMes($mesId){
		$sql = "DELETE FROM `message` WHERE `message`.`mes_id` = '".$mesId."'";
		return $this->del($sql);
	}
	
	/**
	 * 设置为已读
	 * @param unknown_type $mesId
	 * @return resource
	 */
	public function setRead($mesId){
		$sql = "UPDATE `message` SET `mes_isread` = '1' WHERE `message`.`mes_id` = '".$mesId."';";
		return $this->update($sql);
	}
	
	public function addMes($fuId, $infoId, $sort, $type, $publishId){
		$sql = "INSERT INTO `message` (`mes_id`, `fu_id`, `info_id`, `mes_sort`, `mes_type`, `mes_isread`, `mes_time`, `fu_id_publisher`) "
			 . "VALUES "
			 . "(NULL, '".$fuId."', '".$infoId."', '".$sort."', '".$type."', '0', NOW(), '".$publishId."');";
		//echo $sql;
		return $this->insert($sql);
	}
}

?>