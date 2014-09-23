<?php
class downloadcenter extends Model
{
	public function getdownList()
	{
		$sql = "SELECT * FROM `downloadCenter` WHERE `dc_flag` = 0 ORDER BY  `downloadCenter`.`dc_istop` DESC LIMIT 0, 8 ";
		return $this->fetchAll($sql);
	}
	public function deleteDown($id)
	{
		$sql = "delete from `downloadCenter` where `downloadCenter`.`dc_id`='".$id."'";
		return $this->del($sql);
	}
	public function updateDowntitle($title,$id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_titlet` = '".$title."' WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateDownurl($url,$id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_urlt` = '".$url."' WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateDowncontent($content,$id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_content` = '".$content."' WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateDownsize($size,$id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_size` = '".$size."' WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addDownNum($id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_download` = `dc_download`+1  WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_share` = `dc_share`+1  WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function insertDown($title,$conent,$size)
	{
		$sql = "INSERT INTO `downloadCenter` (`dc_id`, `dc_title`, `dc_content`, `dc_size`, `dc_create`, `dc_browse`, `dc_download`, `dc_share`, `dc_flag`, `dc_istop`) VALUES (NULL, '".$title."', '".$content."', '".$size."', NOW(), '0', '0', '0', '0', NOW())";
		return $this->insert($sql);
	}
	public function getDownPageModel($page = 1 , $num = 10)
	{
		$sql = "SELECT `downloadCenter`.*,`file`.* FROM `downloadCenter` LEFT JOIN `file` ON `downloadCenter`.`file_id` = `file`.`file_id`  WHERE `dc_flag` = 0 ORDER BY `downloadCenter`.`dc_istop` DESC,`downloadCenter`.`dc_create` DESC LIMIT ".($page-1)*$num.",".$num."";
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('downloadCenter',"`downloadCenter`.`dc_flag`= 0");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	public function setDownIstop($id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_istop` = NOW() WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function cancelTop($id)
	{
		$sql = "UPDATE `downloadCenter` SET `dc_istop` = NULL WHERE `downloadCenter`.`dc_id` = '".$id."'";
		return $this->update($sql);
	}
	public function insertDownfile($fid,$title,$size)
	{
	
		
		if($fid){
			$sql = "INSERT INTO `downloadCenter` (`dc_id`, `dc_title`,  `dc_size`, `dc_create`, `dc_browse`, `dc_download`, `dc_share`, `dc_flag`,`file_id`,`dc_istop`) VALUES (NULL, '".$title."','".$size."', NOW(),0, 0, 0, 0, '".$fid."',NULL)";
			//echo $sql;
		}else{
			return 0;
		}
	
		return $this->insert($sql);
	}
	public function updateInfo($id,$title,$fid,$size)
	{
		if($fid)
		{
			$sql = "UPDATE `downloadCenter` SET `dc_title` = '".$title."' ,`file_id` = '".$fid."',`dc_size`='".$size."' WHERE `downloadCenter`.`dc_id` = '".$id."'";
		}
		else {
			$sql = "UPDATE `downloadCenter` SET `dc_title` = '".$title."' ,`file_id` = NULL WHERE `downloadCenter`.`dc_id` = '".$id."'";
		}
		return $this->update($sql);
	}
	public function getInfofromId($id)
	{
		$sql = "SELECT `downloadCenter`.* ,`file`.* FROM `downloadCenter` LEFT JOIN `file` ON `downloadCenter`.`file_id` = `file`.`file_id` WHERE `downloadCenter`.`dc_id`='".$id."'";
		return $this->fetchRow($sql);
	}
	public function getDownUrl($id)
	{
		$sql = "SELECT `downloadCenter`.`file_id` ,`file`.`file_id` FROM `downloadCenter` LEFT JOIN `file` ON `downloadCenter`.`file_id` = `file`.`file_id` WHERE `downloadCenter`.`dc_id`='".$id."'";
		return $this->fetchRow($sql);
	}
}