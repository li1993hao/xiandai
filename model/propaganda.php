<?php
class propaganda extends  Model
{
	public function getPropagandaList()
	{
		$sql = "select * from `propagandaManagement`";
		return $this->fetchAll($sql);
	}
	public function insertPropaganda($pid,$url,$content,$title)
	{
		if($pid=="")
		{
			$sql = "INSERT INTO `propagandaManagement` (`pm_id`, `pic_id`, `pm_title`, `pm_content`, `pm_url`, `pm_create`, `pm_flag`,`pm_browse`, `pm_share`) VALUES (NULL, NULL, '".$title."','".$content."','".$url."', NOW(), NULL, '0', '0')";
		}
		else 
		{
			$sql = "INSERT INTO `propagandaManagement` (`pm_id`, `pic_id`, `pm_title`, `pm_content`,`pm_url`, `pm_create`, `pm_flag`,`pm_browse`, `pm_share`) VALUES (NULL, '".$pid."','".$title."','".$content."', '".$url."', NOW(), NULL,'0', '0')";
		}
		//echo $sql;
		return $this->insert($sql);
	}
	public function updateLogo($id,$pid)
	{
		$sql = "UPDATE `propagandaManagement` SET `pic_id` = '".$pid."' WHERE `propagandaManagement`.`pm_id` = '".$id."';";
		return $this->update($sql);
	}
	public function updateUrl($id,$url)
	{
		$sql = "UPDATE `propagandaManagement` SET `pm_url` = '".$url."' WHERE `propagandaManagement`.`pm_id` = '".$id."';";
		return $this->update($sql);
	}
	public function deletePropaganda($id)
	{
		$sql = "delete from `propagandaManagement` where `propagandaManagement`.`pm_id`='".$id."'";
		return $this->del($sql);
	}
	public function getPropagandaPageModel($page = 1 , $num = 10)
	{
		$sql = "SELECT `propagandaManagement`.*,`picture`.* FROM `propagandaManagement` LEFT JOIN `picture` ON `propagandaManagement`.`pic_id` = `picture`.`pic_id` ORDER BY  `propagandaManagement`.`pm_flag` DESC , `propagandaManagement`.`pm_create` DESC Limit ".($page-1)*$num.",".$num." ";
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('propagandaManagement');
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	public function setProIstop($id)
	{
		$sql = "UPDATE `propagandaManagement` SET `pm_flag` = NOW() WHERE `propagandaManagement`.`pm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function cancelTop($id)
	{
		$sql = "UPDATE `propagandaManagement` SET `pm_flag` = NULL WHERE `propagandaManagement`.`pm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function modifyinfo($id,$url,$pid,$content,$title){
		if($pid == "")
		{
			$sql = "UPDATE `propagandaManagement` SET `pm_url` = '".$url."' ,`pic_id` = NULL, `pm_content`='".$content."',`pm_title`='".$title."' WHERE `propagandaManagement`.`pm_id` = '".$id."'";
	
		}
		else
		{
			$sql = "UPDATE `propagandaManagement` SET `pm_url` = '".$url."' ,`pic_id` = '".$pid."',`pm_content`='".$content."',`pm_title`='".$title."' WHERE `propagandaManagement`.`pm_id` = '".$id."'";
		}
		return $this->update($sql);
	}
	public function getInfofromId($id=0)
	{
		if($id == 0){
			$sql = "SELECT `propagandaManagement`.* ,`picture`.* FROM `propagandaManagement` 
					LEFT JOIN `picture` ON `propagandaManagement`.`pic_id` = `picture`.`pic_id` 
					WHERE `pm_flag` IS NOT NULL
					ORDER BY  `propagandaManagement`.`pm_flag` DESC , `propagandaManagement`.`pm_create` DESC limit 0,1";
		}
		else{
			$sql = "SELECT `propagandaManagement`.* ,`picture`.* FROM `propagandaManagement` 
					LEFT JOIN `picture` ON `propagandaManagement`.`pic_id` = `picture`.`pic_id` 
					WHERE `propagandaManagement`.`pm_id`='".$id."'";
		}
		return $this->fetchRow($sql);
	}
	public function addBrowseNum($id)
	{
		$sql = "update `propagandaManagement` set `pm_browse`=`pm_browse`+1 where `pm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "update `propagandaManagement` set `pm_share`=`pm_share`+1 where `pm_id` = '".$id."'";
		return $this->update($sql);
	}

}