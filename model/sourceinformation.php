<?php
/*
 * create on 2013-07-16
 * author:wangchao
 * QQ:411468280
 */
class sourceinformation extends Model
{
	/*
	 * 通过用户名查找用户ID
	*/
	public function getuserid($username)
	{
		$sql="select `user`.`user_id` from `user` where `user`.`user_name`='".$username."' ";
		return $this->fetchRow($sql);
	}
	/*
	 * 获得生源信息列表
	 */
	public function getSourceList()
	{
		$sql="SELECT `sourceinformation`.* FROM `sourceinformation` ";
		return $this->fetchAll($sql);
	}
	
	/*
	 * 获得生源详细信息
	 */
	public function getSourceDetail($id)
	{
		$sql="SELECT `sourceinformation`.*,`file`.* FROM `sourceinformation`
				LEFT JOIN `file` ON `file`.`file_id` = `sourceinformation`.`file_id`
				WHERE `sourceinformation`.`si_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
				
	}
	public function addreadnum($id)
	{
		$sql = "UPDATE  `sourceinformation` SET  `si_scan` =  `si_scan` +1 WHERE  `sourceinformation`.`si_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	
	public function addShareNum($id){
		$sql = "UPDATE  `sourceinformation` SET  `si_share` =  `si_share` +1 WHERE  `sourceinformation`.`si_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	public function getPre($cur_id)
	{
	
		$sql = "SELECT `sourceinformation`.* FROM `sourceinformation` WHERE `si_id` > ".$cur_id." ORDER BY `si_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNext($cur_id)
	{
		$sql = "SELECT `sourceinformation`.* FROM `sourceinformation` WHERE `si_id` < ".$cur_id." ORDER BY `si_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	public function getSourcePageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `sourceinformation`.*,`file`.* FROM `sourceinformation` 
				LEFT JOIN `file` ON `file`.`file_id` = `sourceinformation`.`file_id`
				ORDER BY  `sourceinformation`.`si_top` DESC , `sourceinformation`.`si_time` DESC Limit ".($page-1)*$num.",".$num." ";
		$list = $this->fetchAll($sql);
		//print_r($list);
		$total = $this->getTotal('sourceinformation');
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//添加生源信息
	public function addsourceinfo($title,$time,$content,$userid,$filename=null,$fileid=null)
	{
		if($fileid){
			$sql="insert into `sourceinformation`(`si_title`,`si_time`,`file_id`,`file_name`,`si_top`,`si_content`,`user_id`,`si_scan`,`si_share`) values('".$title."','".$time."','".$fileid."','".$filename."',NULL,'".$content."','".$userid."',0,0)";
		}else{
			$sql="insert into `sourceinformation`(`si_title`,`si_time`,`si_top`,`si_content`,`user_id`,`si_scan`,`si_share`) values('".$title."','".$time."',NULL,'".$content."','".$userid."',0,0)";
		}
		//echo $sql;
		return $this->insert($sql);
	}
	//删除生源信息
	public function delmsg($id){
		$sql = "DELETE FROM `sourceinformation` WHERE `sourceinformation`.`si_id` = '".$id."'";
		return $this->del($sql);
	}
	//生源信息置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `sourceinformation` SET `si_top` = NOW() WHERE `sourceinformation`.`si_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `sourceinformation` SET `si_top` = NULL WHERE `sourceinformation`.`si_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//通过id获取信息的详情
	public function getDetailInfoFromId($id){
	
		$sql = "SELECT `sourceinformation`.*,  `user`.* ,`file`.* FROM `sourceinformation`  
				LEFT JOIN `user` ON `sourceinformation`.`user_id` = `user`.`user_id` 
				LEFT JOIN `file` ON `sourceinformation`.`file_id` = `file`.`file_id`
				WHERE `sourceinformation`.`si_id` = '".$id."' ";
		return $this->fetchRow($sql);
	}
	//修改生源信息
	public function updatesimsg($id, $title,$userid,$content,$filename=null,$fileid=null)
	{
		if($fileid){
			$sql = "UPDATE `sourceinformation` 
					SET `si_title` = '".$title."',`file_id` = '".$fileid."',`file_name`='".$filename."',`user_id` = '".$userid."',`si_content` = '".$content."'
				WHERE `sourceinformation`.`si_id` = '".$id."'";
		}else{
			$sql = "UPDATE `sourceinformation` SET `si_title` = '".$title."',`user_id` = '".$userid."',`si_content` = '".$content."'
				WHERE `sourceinformation`.`si_id` = '".$id."'";
		}
		//echo $sql;
		return $this->update($sql);
	}
}