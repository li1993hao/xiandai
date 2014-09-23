<?php
/*
 * create on 2013-07015
 * author wangchao
 * QQ:411468280
 * 
 */
class collegeintroduction extends Model
{
	/*
	 * 添加新的院系介绍
	 */
	public function addcollegeintroduction()
	{
		$sql="insert into `college` values() ";
	}
	/*
	 * 通过用户名查找用户ID
	*/
	public function getuserid($username)
	{
		$sql="select `user`.`user_id` from `user` where `user`.`user_name`='".$username."' ";
		return $this->fetchRow($sql);
	}
	
	/*
	 * 获取院系介绍列表
	 */
	public function getList()
	{
		$sql="SELECT `collegeintroduction`.*  FROM `collegeintroduction` ORDER BY `cci_top` DESC, `cci_time` DESC";
		return $this->fetchAll($sql);
	}
	
	/*
	 * 获取院系介绍
	 * 
	 */
	public function getDetail($id)
	{
		$sql=" SELECT `collegeintroduction`.* FROM `collegeintroduction` WHERE `collegeintroduction`.`cci_id`='".$id."' ";
		
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	
	/*
	 * 添加新的工作简报阅读次数
	*/
	public function addreadnum($id)
	{
		$sql = "UPDATE  `collegeintroduction` SET  `cci_scan` =  `cci_scan` +1 WHERE  `collegeintroduction`.`cci_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	
	public function getPre($cur_id)
	{
	
		$sql = "SELECT `collegeintroduction`.* FROM `collegeintroduction` WHERE `cci_id` > ".$cur_id." ORDER BY `cci_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNext($cur_id)
	{
		$sql = "SELECT `collegeintroduction`.* FROM `collegeintroduction` WHERE `cci_id` < ".$cur_id." ORDER BY `cci_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	public function getCollegePageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `collegeintroduction`.* FROM `collegeintroduction` ORDER BY  `collegeintroduction`.`cci_top` DESC , `collegeintroduction`.`cci_time` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('collegeintroduction',"");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	
	/*
	 * 根据用户操作添加分享次数
	*/
	public function addSharetimes($id)
	{
		$sql="UPDATE `collegeintroduction` SET `cci_share`=`cci_share`+1 WHERE `cci_id`='".$id."' ";
		return $this->update($sql);
	}
	//添加院系介绍
	public function addcollegeintro($title,$time,$content,$userid)
	{
		$sql="insert into `collegeintroduction`(`cci_title`,`cci_time`,`cci_top`,`cci_content`,`user_id`,`cci_scan`,`cci_share`) values('".$title."','".$time."',NULL,'".$content."','".$userid."',0,0)";
		//echo $sql;
		return $this->insert($sql);
	}
	//删除工作简报
	public function delmsg($id){
		$sql = "DELETE FROM `collegeintroduction` WHERE `collegeintroduction`.`cci_id` = '".$id."'";
		return $this->del($sql);
	}
	//就业工作简报置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `collegeintroduction` SET `cci_top` = NOW() WHERE `collegeintroduction`.`cci_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `collegeintroduction` SET `cci_top` = NULL WHERE `collegeintroduction`.`cci_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//修改院系介绍
	public function updateccimsg($id, $title,  $userid,  $content)
	{
		$sql = "UPDATE `collegeintroduction` SET `cci_title` = '".$title."',`user_id` = '".$userid."',`cci_content` = '".$content."'
				WHERE `collegeintroduction`.`cci_id` = '".$id."'";
		//echo $sql;
		return $this->update($sql);
	}
	//通过id获取信息的详情
	public function getDetailInfoFromId($id){
	
		$sql = "SELECT `collegeintroduction`.*,  `user`.* FROM `collegeintroduction`  LEFT JOIN `user` ON `collegeintroduction`.`user_id` = `user`.`user_id` WHERE `collegeintroduction`.`cci_id` = '".$id."' ";
		return $this->fetchRow($sql);
	}
}