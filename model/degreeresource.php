<?php
/**
* Create On 2014-1-23 ����4:40:53
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/

class degreeresource extends Model{
	public function getAllDegreeSource(){
		$sql = "SELECT * FROM `degreeresource`";
		return $this->fetchAll($sql);
	}
	
	/**
	 * 根据级别英文名称修改
	 * @param unknown_type $enName
	 * @param unknown_type $limit
	 */
	public function serLimit($enName, $limit){
		$sql = "UPDATE `degreeresource` SET `dr_limit` = '".$limit."' WHERE `degreeresource`.`dr_en_name` = '".$enName."';";
		//echo $sql;
		return $this->update($sql);
	}
	public function getLimit($enName){
		$sql = "SELECT `degreeresource`.`dr_limit` FROM `degreeresource` WHERE `degreeresource`.`dr_en_name` = '".$enName."'";
		//echo $sql;
		return $this->fetchRow($sql);
	}
}
