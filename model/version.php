<?php
class version extends Model
{
	public function addVersion($pid,$num,$desc,$type,$size,$flag,$time,$fileurl,$filedisp,$fileid=null,$filename=null)
	{
		if($fileid)
		{
			$sql = "INSERT INTO `version` 
				(`ID_VERSION`, `CODE_PLATFORM`, `NUM_VERSION`, `DESC_VERSION`, `TYPE_UPGRADE`, `SIZE_VERSION`, `FLAG_PUBLISH`, `TIME_PUBLISH`, `NAME_FILE`, `NAME_DISP`,`file_id`,`file_name`, `download_num`)
				 VALUES 
				(NULL, '".$pid."', '".$num."', '".$desc."', '".$type."', '".$size."', '".$flag."', '".$time."', '".$fileurl."', '".$filedisp."','".$fileid."','".$filename."','0');";
		}
		else
		{
			$sql = "INSERT INTO `version`
			(`ID_VERSION`, `CODE_PLATFORM`, `NUM_VERSION`, `DESC_VERSION`, `TYPE_UPGRADE`, `SIZE_VERSION`, `FLAG_PUBLISH`, `TIME_PUBLISH`, `NAME_FILE`, `NAME_DISP`,`file_id`,`file_name`, `download_num`)
			VALUES
			(NULL, '".$pid."', '".$num."', '".$desc."', '".$type."', '".$size."', '".$flag."', '".$time."', '".$fileurl."', '".$filedisp."',NULL,NULL,0);";
		}
		return $this->insert($sql);
	}
	public function modifyVersion($id,$pid,$num,$desc,$type,$size,$flag,$time,$fileurl,$filedisp,$fileid=null,$filename=null)
	{
		if($fileid)
		{
			$sql = "UPDATE `version` SET 
				`CODE_PLATFORM` = '".$pid."',
				`NUM_VERSION` = '".$num."', 
				`DESC_VERSION` = '".$desc."', 
				`TYPE_UPGRADE` = '".$type."', 
				`SIZE_VERSION` = '".$size."',
				`FLAG_PUBLISH` = '".$flag."', 
				`TIME_PUBLISH` = '".$time."', 
				`NAME_FILE` = '".$fileurl."', 
				`NAME_DISP` = '".$filedisp."',
				`file_id` = '".$fileid."',
				`file_name` = '".$filename."'
				 WHERE `version`.`ID_VERSION` = '".$id."';";
		}
		else 
		{
			$sql = "UPDATE `version` SET
			`CODE_PLATFORM` = '".$pid."',
			`NUM_VERSION` = '".$num."',
			`DESC_VERSION` = '".$desc."',
			`TYPE_UPGRADE` = '".$type."',
			`SIZE_VERSION` = '".$size."',
			`FLAG_PUBLISH` = '".$flag."',
			`TIME_PUBLISH` = '".$time."',
			`NAME_FILE` = '".$fileurl."',
			`NAME_DISP` = '".$filedisp."',
			`file_id` = NULL,
			`file_name` = NULL
			WHERE `version`.`ID_VERSION` = '".$id."';";
		}
		return $this->update($sql);
	}
	public function getVersionByPlatform($codeflatform)
	{
		$sql = "SELECT * FROM `version` WHERE `CODE_PLATFORM` = '".$codeflatform."' LIMIT 0, 30 ";
		return $this->fetchAll($sql);
	}
	public function getVersion()
	{
		$sql = "SELECT `version`.*,`platform`.* FROM `version` 
			LEFT JOIN `platform` ON `version`.`CODE_PLATFORM` = `platform`.`CODE_PLATFORM` 
			LEFT JOIN `file` ON `version`.`file_id` = `file`.`file_id`
			LIMIT 0, 30 ";
		return $this->fetchAll($sql);
	}
	public function checkVersion($platform,$numVersion)
	{
		$sql = "SELECT `version`.* FROM `version` LEFT JOIN `platform` ON `version`.`CODE_PLATFORM` = `platform`.`CODE_PLATFORM`
				WHERE `platform`.`NAME_PLATFORM`='".$platform."' AND `version`.`NUM_VERSION` > '".$numVersion."' AND `version`.`FLAG_PUBLISH`=1
				 ORDER BY `version`.`NUM_VERSION` DESC";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	public function delVersion($id)
	{
		$sql = "DELETE FROM `version` WHERE `version`.`ID_VERSION` = '".$id."'";
		//echo $sql;
		return $this->del($sql);
	}
	public function getDetailById($id)
	{
		$sql = "SELECT `version`.*,`platform`.*,`file`.* FROM `version`
				LEFT JOIN `platform` ON `version`.`CODE_PLATFORM` = `platform`.`CODE_PLATFORM`
				LEFT JOIN `file` ON `version`.`file_id` = `file`.`file_id`
				WHERE `version`.`ID_VERSION` = '".$id."';";
		return $this->fetchRow($sql);
	}
	public function getAppLastVersion($platform)
	{
		$sql = "SELECT `version`.* FROM `version` LEFT JOIN 
				`platform` ON `version`.`CODE_PLATFORM` = `platform`.`CODE_PLATFORM`
				WHERE `platform`.`NAME_PLATFORM`='".$platform."'  AND `version`.`FLAG_PUBLISH`=1 
				ORDER BY `version`.`NUM_VERSION` DESC";
		return $this->fetchRow($sql);
	}
	
	public function adddownloadnum($versionid)
	{
		$sql = "UPDATE `version`
				SET `download_num` = `download_num` + 1
				WHERE `CODE_PLATFORM` = '".$versionid."'";
		return $this->update($sql);
	}
	
}