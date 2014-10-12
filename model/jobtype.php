<?php
/**
 * Create On 2014-1-21 ����4:01:29
 * Author: dongguanjun
 * E-mail: dongguanjun@iwind-tech.com
 */

class jobtype extends Model{

	/**
	 * 根据父节点ID获取父节点地区信息
	 * @param unknown_type $pid
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getParentJobtypeByParentId($pid){
		$sql = "SELECT * FROM `officetype` WHERE `ot_id` = '".$pid."'";
		return $this->fetchRow($sql);
	}

	/**
	 * 根据父节点ID获取下级信息
	 * @param unknown_type $pId
	 */
	public function getJobtypeByParentId($pId=0){
		$sql = "SELECT * FROM `officetype` WHERE `parent_id` = '".$pId."'";
		return $this->fetchAll($sql);
	}
}