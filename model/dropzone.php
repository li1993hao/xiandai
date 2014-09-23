<?php
class dropzone extends Model
{
	public function getDropzoneList($num=0)
	{
		if($num){
			$sql = "SELECT `dropzoneManagement`.* ,`picture`.* FROM `dropzoneManagement` LEFT JOIN `picture` ON `dropzoneManagement`.`pic_id` = `picture`.`pic_id` WHERE `dropzoneManagement`.`dm_flag` IS NOT NULL   ORDER BY  `dropzoneManagement`.`dm_flag` DESC , `dropzoneManagement`.`dm_create` DESC LIMIT 0,".$num." ";
		}else{
			$sql = "SELECT `dropzoneManagement`.* ,`picture`.* FROM `dropzoneManagement` LEFT JOIN `picture` ON `dropzoneManagement`.`pic_id` = `picture`.`pic_id` WHERE `dropzoneManagement`.`dm_flag` IS NOT NULL   ORDER BY  `dropzoneManagement`.`dm_flag` DESC , `dropzoneManagement`.`dm_create` DESC  ";
		}
		//echo $sql;
		return $this->fetchAll($sql);
	}
	public function getDropzoneId()
	{
		$sql = "select `dm_id` from `dropzoneManagement`";
		return $this->fetchAll($sql);
	}
	public function getDropzoneURL()
	{
		$sql = "select `dm_url` from `dropzoneManagement`";
		return $this->fetchAll($sql);
	}
	public function getDropzoneTitle()
	{
		$sql = "select `dm_title` from `dropzoneManagement`";
		return $this->fetchAll($sql);
	}
	public function getDropzoneCreate()
	{
		$sql = "select `dm_create` from `dropzoneManagement`";
		return $this->fetchAll($sql);
	}
	public function getDropzoneFlag()
	{
		$sql = "select `dm_flag` from `dropzoneManagement`";
		return $this->fetchAll($sql);
	}
	public function insertDrop($pid,$title,$url,$content)
	{
		if($pid=="")
		{
			$sql = "INSERT INTO `dropzoneManagement` (`dm_id`, `pic_id`, `dm_title`, `dm_url`, `dm_create`, `dm_flag`,`dm_content`) 
					VALUES 
					(NULL, NULL, '".$title."', '".$url."', NOW(), NULL,'".$content."')";
		}
		else 
		{
			$sql = "INSERT INTO `dropzoneManagement` (`dm_id`, `pic_id`, `dm_title`, `dm_url`, `dm_create`, `dm_flag`,`dm_content`) 
					VALUES 
					(NULL, '".$pid."', '".$title."', '".$url."', NOW(), NULL,'".$content."')";
		}
		//echo $sql;
		return $this->insert($sql);
	}
	public function updateLogo($pid,$id)
	{
		$sql = "UPDATE `dropzoneManagement` SET `pic_id` = '".$pid."' WHERE `dropzoneManagement`.`dm_id` = '".$id."';";
		return $this->update($sql);
	}
	public function updateTitle($title,$id)
	{
		$sql = "UPDATE `dropzoneManagement` SET `dm_title` = '".$title."' WHERE `dropzoneManagement`.`dm_id` = '".$id."';";
		return $this->update($sql);
	}
	public function updateUrl($url,$id)
	{
		$sql = "UPDATE `dropzoneManagement` SET `dm_url` = '".$url."' WHERE `dropzoneManagement`.`dm_id` = '".$id."';";
		return $this->update($sql);
	}
	public function getDropPageModel($page = 1 , $num = 10 ){
	
		$sql = "SELECT `dropzoneManagement`.*,`picture`.* FROM `dropzoneManagement` LEFT JOIN `picture` ON `dropzoneManagement`.`pic_id` = `picture`.`pic_id` ORDER BY  `dropzoneManagement`.`dm_flag` DESC , `dropzoneManagement`.`dm_create` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('dropzoneManagement');
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	public function delDrop($id)
	{
		$sql = "delete from `dropzoneManagement` where `dropzoneManagement`.`dm_id`='".$id."'";
		return $this->del($sql);
	}
	public function setDropIstop($id)
	{
		$sql = "UPDATE `dropzoneManagement` SET `dm_flag` = NOW() WHERE `dropzoneManagement`.`dm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function cancelTop($id)
	{
		$sql = "UPDATE `dropzoneManagement` SET `dm_flag` = NULL WHERE `dropzoneManagement`.`dm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function modifyinfo($id,$url,$pid,$title,$content){
		if($pid == "")
		{
			$sql = "UPDATE `dropzoneManagement` 
					SET 
					`dm_url` = '".$url."' ,
					`pic_id` = NULL, 
					`dm_title`='".$title."' ,
					`dm_content`='".$content."'
					WHERE `dropzoneManagement`.`dm_id` = '".$id."'";
	
		}
		else
		{
			$sql = "UPDATE `dropzoneManagement` 
					SET 
					`dm_url` = '".$url."' ,
					`pic_id` = '".$pid."',
					`dm_title`='".$title."',
					`dm_content`='".$content."'
					 WHERE `dropzoneManagement`.`dm_id` = '".$id."'";
		}
		echo $sql;
		return $this->update($sql);
	}
	public function getInfofromId($id)
	{
		$sql = "SELECT `dropzoneManagement`.* ,`picture`.* FROM `dropzoneManagement` LEFT JOIN `picture` ON `dropzoneManagement`.`pic_id` = `picture`.`pic_id` WHERE `dropzoneManagement`.`dm_id`='".$id."'";
		return $this->fetchRow($sql);
	}
}