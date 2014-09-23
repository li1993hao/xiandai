<?php
/**
* Create On 2014-1-15 ����4:01:29
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/

class area extends Model{
	
	/**
	 * 根据父节点ID获取父节点地区信息
	 * @param unknown_type $pid
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getParentAreaByParentId($pid){
		$sql = "SELECT * FROM `area` WHERE `area_id` = '".$pid."'";
		return $this->fetchRow($sql);
	}
	
	/**
	 * 根据父节点ID获取地区信息
	 * @param unknown_type $pId
	 */
	public function getAreaByParentId($pId=0){
		$sql = "SELECT * FROM `area` WHERE `p_id` = '".$pId."'";
		return $this->fetchAll($sql);
	}
	/**
	 * 由id获取节点信息
	 * @param unknown_type $id
	 */
	public function getInfoById($id){
		$sql = "SELECT * FROM `area` WHERE `area_id` = '".$id."'";
		return $this->fetchRow($sql);
	}
}
