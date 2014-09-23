<?php
class centerintroduction extends Model
{
	
	public function getCenter()
	{
		$sql = "select * from `complexintroduction` where `cic_id`='2'";
		return $this->fetchRow($sql);
	}
	public function addBrowseNum($id)
	{
		$sql = "update `complexintroduction` set `ci_browse`=`ci_browse`+1 where `ci_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "update `complexintroduction` set `ci_share`=`ci_share`+1 where `ci_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateTime($id)
	{
		$sql = "UPDATE `complexintroduction` SET  `ci_modify` = NOW() WHERE `complexintroduction`.`ci_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateContent($id,$content)
	{
		$sql = "UPDATE `complexintroduction` SET `ci_content` = '".$content."',`ci_modify` = NOW() WHERE `complexintroduction`.`ci_id` = '".$id."'";
		return $this->update($sql);
	}
}