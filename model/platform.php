<?php
class platform extends Model
{
	public function addPlatform($name,$key)
	{
		$sql = "INSERT INTO `platform` (`CODE_PLATFORM`, `NAME_PLATFORM`, `KEYWORD`) VALUES (NULL, '".$name."', '".$key."');";
		return $this->insert($sql);
	}
	
	public function get_platform_from_name($name)
	{
		$sql = "SELECT * FROM `platform` WHERE `NAME_PLATFORM` = '".$name."' ";
		return $this->fetchRow($sql);
		
	}
	
	public function modifyPlatform($id,$name,$key)
	{
		$sql = "UPDATE `platform` SET `NAME_PLATFORM` = '".$name."', `KEYWORD` = '".$key."' WHERE `platform`.`CODE_PLATFORM` = '".$id."';";
		return $this->update($sql);
	}
	public function getPlatformList()
	{
		$sql = "SELECT * FROM `platform`";
		return $this->fetchAll($sql);
	}
	public function delPlatform($id)
	{
		$sql = "DELETE FROM `platform` WHERE `platform`.`CODE_PLATFORM` = '".$id."'";
		//echo $sql;
		return $this->del($sql);
	}
	public function getDetailById($id)
	{
		$sql = "SELECT * FROM `platform` WHERE `platform`.`CODE_PLATFORM` = '".$id."'";
		return $this->fetchRow($sql);
	}
}