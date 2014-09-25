<?php
class friendlink extends Model
{
	public function geyAllLink(){
		$sql = "select * from `friendlink`";
		return $this->fetchAll($sql);	
	}

	public function getLinkList($flag)
	{
		$sql = "select * from `friendlink` where `fl_flag`='".$flag."'";
		return $this->fetchAll($sql);	

	}
	public function updateLinkTitle($title,$id)
	{
		$sql = "UPDATE `friendlink` SET `fl_title` = '".$title."' WHERE `friendlink`.`fl_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateLinkUrl($url,$id)
	{
		$sql = "UPDATE `friendlink` SET `fl_url` = '".$url."' WHERE `friendlink`.`fl_id` = '".$id."'";
		return $this->update($sql);
	}
	public function insertLink($url,$title,$flag)
	{
		$sql = "INSERT INTO `friendlink` (`fl_id`, `fl_url`, `fl_title`, `fl_flag`) VALUES (NULL, '".$url."', '".$title."', '".$flag."')";
		return $this->insert($sql);
	}
	public function getInfoById($id)
	{

		$sql = "SELECT `friendlink`.*  FROM `friendlink`  WHERE `friendlink`.`fl_id`='".$id."'";
		return $this->fetchRow($sql);
	}
	public function modifyinfo($id,$title,$url)
	{
		$sql = "UPDATE `friendlink` SET `fl_url` = '".$url."',`fl_title` = '".$title."' WHERE `friendlink`.`fl_id` = '".$id."'";
		return $this->update($sql);
	}
	public function delLink($id)
	{
		$sql = "DELETE FROM `friendlink` WHERE `friendlink`.`fl_id` = '".$id."'" ;
		return $this->del($sql);
	}
}