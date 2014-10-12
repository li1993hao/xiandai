<?php
class studysoft extends Model
{
    public function getPublicitycolumn( )
    {
        $sql = "SELECT `publicitycolumn`.* ,`picture`.* FROM `publicitycolumn` LEFT JOIN `picture` ON `publicitycolumn`.`pic_id` = `picture`.`pic_id` ";
        return $this->fetchRow($sql);
    }

    public function  setPublicitycolumn($id, $pid,$title="",$pc_url="",$stop=0){
        if($pid != -1){
            $sql = "UPDATE `publicitycolumn` SET `pic_id` = '".$pid."' ,pc_title='".$title."', pc_url='".$pc_url."',stop='".$stop."' WHERE `publicitycolumn`.`pc_id` = '".$id."'";
            return $this->update($sql);
        }else{
            $sql = "UPDATE `publicitycolumn` SET pc_title='".$title."', pc_url='".$pc_url."',stop='".$stop."' WHERE `publicitycolumn`.`pc_id` = '".$id."'";
            return $this->update($sql);
        }

    }


    /**
	 * 获取学习软件列表
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getSoftList($num = 0 )
	{
		if($num){
			$sql = "SELECT `softmanagement`.* ,`picture`.* FROM `softmanagement` LEFT JOIN `picture` ON `softmanagement`.`pic_id` = `picture`.`pic_id`  ORDER BY  `softmanagement`.`sm_istop` DESC LIMIT 0,".$num." ";
		}else{
			$sql = "SELECT `softmanagement`.* ,`picture`.* FROM `softmanagement` LEFT JOIN `picture` ON `softmanagement`.`pic_id` = `picture`.`pic_id`  ORDER BY  `softmanagement`.`sm_istop` DESC  ";
		}
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	public function getSoftId()
	{
		$sql = "select `sm_id` from `softmanagement`";
		return $this->fetchAll($sql);
	}
	public function getSoftLogo($id)
	{
		$sql = "select `pic_link` from `picture` where `pic_id`='".$id."'";
		return $this->fetchRow($sql);
	}
	public function getSoftUrl()
	{
		$sql = "select `sm_url` from `softmanagement`";
		return $this->fetchAll($sql);
	}
	public function getSoftTitle()
	{
		$sql = "select `sm_title` from `softmanagement`";
		return $this->fetchAll($sql);
	}
	public function getSoftIstop()
	{
		$sql = "select `sm_istop` from `softmanagement`";
		return $this->fetchAll($sql);
	}
	public function setSoftIstop($id)
	{
		$sql = "UPDATE `softmanagement` SET `sm_istop` = NOW() WHERE `softmanagement`.`sm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function cancelTop($id)
	{
		$sql = "UPDATE `softmanagement` SET `sm_istop` = NULL WHERE `softmanagement`.`sm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateLogo($pid, $id)
	{
		$sql = "UPDATE `softmanagement` SET `pic_id` = '".$pid."' WHERE `softmanagement`.`sm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateTitle($title,$id)
	{
		$sql = "UPDATE `softmanagement` SET `sm_title` = '".$title."' WHERE `softmanagement`.`sm_id` = '".$id."'";
		return $this->update($sql);
	}
	public function updateUrl($url,$id)
	{
		$sql = "UPDATE `softmanagement` SET `sm_url` = '".$url."' WHERE `softmanagement`.`sm_id` = '".$id."'";
		return $this->update($sql);
	}
	
	public function insertSoft($pid,$url,$title)
	{
			$sql = "INSERT INTO `softmanagement` (`sm_id`, `pic_id`, `sm_url`, `sm_title`, `sm_istop`) VALUES (NULL, '".$pid."', '".$url."', '".$title."', NULL)";
			//echo $sql;
		return $this->insert($sql);
	}
	public function getInfofromId($id)
	{
		$sql = "SELECT `softmanagement`.* ,`picture`.* FROM `softmanagement` LEFT JOIN `picture` ON `softmanagement`.`pic_id` = `picture`.`pic_id` WHERE `softmanagement`.`sm_id`='".$id."'";
		return $this->fetchRow($sql);
	}
	public function delSoft($id)
	{
		$sql = "DELETE FROM `softmanagement` WHERE `softmanagement`.`sm_id` = '".$id."'" ;
		return $this->del($sql);
	}
	public function modifyinfo($id,$title,$url,$pid){
		if($pid == "")
		{
			$sql = "UPDATE `softmanagement` SET `sm_title` = '".$title."' ,`pic_id` = NULL,`sm_url` = '".$url."' WHERE `softmanagement`.`sm_id` = '".$id."'";
				
		}
		else
		{
			$sql = "UPDATE `softmanagement` SET `sm_title` = '".$title."' ,`pic_id` = '".$pid."',`sm_url` = '".$url."' WHERE `softmanagement`.`sm_id` = '".$id."'";
		}
		return $this->update($sql);
	}
}
