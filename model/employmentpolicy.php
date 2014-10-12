<?php
class employmentpolicy extends Model
{
	public function getEmploy()
	{
		$sql = "select * from `employmentpolicy`";
		return $this->fetchRow($sql);
	}
	public function addBrowseNum($id)
	{
		$sql = "update `employmentpolicy` set `ep_browse`=`ep_browse`+1 where `ep_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "update `employmentpolicy` set `ep_share`=`ep_share`+1 where `ep_id` = '".$id."'";
		return $this->update($sql);
	}
	public function addEmploy($title,$content,$fileid=null,$filename=null)
	{
		if($fileid)
		{
			$sql = "INSERT INTO `employmentpolicy` (`ep_id`, `ep_title`, `ep_content`, `ep_create`, `ep_browse`, `ep_share`, `ep_istop`,`file_id`,`file_name`) VALUES (NULL, '".$title."', '".$content."', NOW(), '0', '0', NULL,'".$fileid."','".$filename."');";
		}
		else
		{
			$sql = "INSERT INTO `employmentpolicy` (`ep_id`, `ep_title`, `ep_content`, `ep_create`, `ep_browse`, `ep_share`, `ep_istop`,`file_id`,`file_name`) VALUES (NULL, '".$title."', '".$content."', NOW(), '0', '0', NULL,NULL,NULL);";
		}
		
		return $this->insert($sql);
	}
	public function modifyInfo($id,$title,$content,$fileid=NULL,$filetitle=NULL)
	{
		if($fileid)
		{
			$sql = "UPDATE `employmentpolicy` SET `ep_title` = '".$title."', `ep_content` = '".$content."',`file_id`='".$fileid."',`file_name`='".$filetitle."' WHERE `employmentpolicy`.`ep_id` = '".$id."';";
		}
		else 
		{
			$sql = "UPDATE `employmentpolicy` SET `ep_title` = '".$title."', `ep_content` = '".$content."',`file_id`= NULL,`file_name`= NULL WHERE `employmentpolicy`.`ep_id` = '".$id."';";
		}
		return $this->update($sql);
	}
	public function delInfo($id)
	{
		$sql = "DELETE FROM `employmentpolicy` WHERE `employmentpolicy`.`ep_id` = '".$id."'";
		return $this->del($sql);
	}
	public function setTop($id)
	{
		$sql = "UPDATE `employmentpolicy` SET `ep_istop` = NOW() WHERE `employmentpolicy`.`ep_id` = '".$id."'";
		return $this->update($sql);
	}
	public function cancalTop($id)
	{
		$sql = "UPDATE `employmentpolicy` SET `ep_istop` = NULL WHERE `employmentpolicy`.`ep_id` = '".$id."'";
		return $this->update($sql);
	}
	public function getEmployPageModel($page = 1 , $num = 10, $key=null)
	{
		$select = "SELECT * FROM `employmentpolicy` ";
		$filter = "1";
		if($key){
			$keyArr  = explode( " ", $key );
			foreach($keyArr as $item){
				$filter .= " AND `employmentpolicy`.`ep_title` LIKE '%".$item."%' ";
			}
		}
		$where = " WHERE ".$filter;
		$order = " ORDER BY `employmentpolicy`.`ep_istop` DESC,`employmentpolicy`.`ep_create` DESC "; 
		$limit = " LIMIT ".($page-1)*$num.",".$num."";
		
		$sql = $select.$where.$order.$limit;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('employmentpolicy',$filter);
		
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	
	public function getPolicyinfolist($timestamp, $num)
	{
		$sql = "SELECT * FROM `employmentpolicy` ORDER BY `employmentpolicy`.`ep_istop` DESC,`employmentpolicy`.`ep_create` DESC LIMIT ".$num."";
		return $this->fetchAll($sql);
	}
	
	public function getInfofromId($id)
	{
		$sql = "SELECT `employmentpolicy`.*,`file`.* FROM `employmentpolicy`
			   LEFT JOIN `file` ON `employmentpolicy`.`file_id` = `file`.`file_id`
			   WHERE `employmentpolicy`.`ep_id` = '".$id."'";
		return $this->fetchRow($sql);
	}
	public function getPre($cur_id)
	{
	
		$sql = "SELECT * FROM `employmentpolicy` WHERE `ep_id` > '".$cur_id."' ORDER BY `ep_id` ASC LIMIT 0,1";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNext($cur_id)
	{
		$sql = "SELECT * FROM `employmentpolicy` WHERE `ep_id` < '".$cur_id."' ORDER BY `ep_id` DESC LIMIT 0,1 ";
		//echo $sql;
		return $this->fetchRow($sql);
	}

    /**
     * 赫建武APP
     * 就业政策列表
     */
    public function getappepinfo($num){
        $select = "SELECT `employmentpolicy`.* FROM `employmentpolicy` ";
        $order = "ORDER BY  `employmentpolicy`.`ep_create` DESC ";
        $limit = "LIMIT " . $num . ",10 ";
        //echo $sql;
        $sql = $select.$order.$limit;
        return $this->fetchAll ( $sql );

    }
}