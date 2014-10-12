<?php
class employmentteam extends Model
{
	public function AddeEploymentteam ($title,$content,$userid)
	{
		//echo $sql;
		$sql = "INSERT INTO `employmentteam` (`et_id`, `et_title`, `et_content`,`et_create`, `et_browse`, `et_share`, `et_istop`, `user_id`) VALUES (NULL, '".$title."', '".$content."',NOW(), '0', '0', NULL, '".$userid."');";
		//echo $sql;
		return $this->insert($sql);
	}
	public function EditEmploymentteam($id,$title,$content,$userid)
	{
		$sql = "UPDATE `employmentteam` SET `et_title` = '".$title."', `et_content` = '".$content."',`user_id`='".$userid."', `et_istop` = NULL WHERE `employmentteam`.`et_id` = '".$id."';";
		return $this->update($sql);
	}
	public function GetInfo($id)
	{
		$sql = "SELECT `employmentteam`.*, `user`.* 
				FROM `employmentteam` 
				LEFT JOIN `user` ON `employmentteam`.`user_id` = `user`.`user_id` 
				WHERE `et_id`='".$id."'";
		return $this->fetchRow($sql);
	}
	public function Delteam($id)
	{
		$sql = "DELETE FROM `employmentteam` WHERE `employmentteam`.`et_id` = '".$id."'";
		//echo $sql;
		return $this->del($sql);
	}
	public function setTop($id)
	{
		$sql = "UPDATE `employmentteam` SET `et_istop` = NOW() WHERE `employmentteam`.`et_id` = '".$id."';";
		return $this->update($sql);
	}
	public function cancalTop($id)
	{
		$sql = "UPDATE `employmentteam` SET `et_istop` = NULL WHERE `employmentteam`.`et_id` = '".$id."';";
		return $this->update($sql);
	}
	public function getTeamPageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `employmentteam`.* FROM `employmentteam` ORDER BY  `employmentteam`.`et_istop` DESC , `employmentteam`.`et_create` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('employmentteam',"");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
public function addBrowseNum($id)
	{
		$sql = "update `employmentteam` set `et_browse`=`et_browse`+1 where `et_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "update `employmentteam` set `et_share`=`et_share`+1 where `et_id` = '".$id."'";
		return $this->update($sql);
	}
	public function getPre($cur_id)
	{
	
		$sql = "SELECT * FROM `employmentteam` WHERE `et_id` > '".$cur_id."' ORDER BY `et_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNext($cur_id)
	{
		$sql = "SELECT * FROM `employmentteam` WHERE `et_id` < '".$cur_id."' ORDER BY `et_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
}