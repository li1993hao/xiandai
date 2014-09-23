<?php
/*
 * create on 2013-07-16
 * author:wangchao
 * QQ:411468280
 */
class professionsail extends Model
{
	/*
	 * 通过用户名查找用户ID
	*/
	public function getuserid($username)
	{
		$sql="select `user`.`user_id` from `user` where `user`.`user_name`='".$username."' ";
		return $this->fetchRow($sql);
	}
	//获取图片链接
	public function getPicid($link)
	{
		$sql="select `picture`.`pic_id` from `picture` where `picture`.`pic_link`='".$link."' ";
		return $this->fetchRow($sql);
	}
	/*
	 * 获取职业启航列表
	 */
	public function getSailList()
	{
		$sql="SELECT `professionsail`.* FROM `professionsail`";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	public function getsailpic($id)
	{
		$sql="select `picture`.`pic_link` from `picture` where `picture`.`pic_id`='".$id."' ";
		return $this->fetchRow($sql);
	}
	/*
	 * 根据需求获取职业启航详细信息
	 */
	public function getSailDetail($id)
	{
		$sql="SELECT `professionsail`.*,`picture`.* FROM `professionsail`
				LEFT JOIN `picture` ON `picture`.`pic_id`= `professionsail`.`pic_id` 
				where `professionsail`.`ps_id`='".$id."' ";
		return $this->fetchRow($sql);
	}
	
	/*
	 * 添加新的工作简报阅读次数
	*/
	public function addreadnum($id)
	{
		$sql = "UPDATE  `professionsail` SET  `pa_scan` =  `pa_scan` +1 WHERE  `professionsail`.`ps_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "UPDATE  `professionsail` SET  `ps_share` =  `ps_share` +1 WHERE  `professionsail`.`ps_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	
	public function getPresail($cur_id)
	{
	
		$sql = "SELECT `professionsail`.* FROM `professionsail` WHERE `ps_id` < ".$cur_id." ORDER BY `ps_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNextsail($cur_id)
	{
		$sql = "SELECT `professionsail`.* FROM `professionsail` WHERE `ps_id` > ".$cur_id." ORDER BY `ps_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	public function getSailPageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `professionsail`.*,`picture`.* FROM `professionsail` LEFT JOIN `picture` ON `professionsail`.`pic_id` = `picture`.`pic_id` ORDER BY  `professionsail`.`ps_top` DESC , `professionsail`.`ps_time` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('professionsail',"");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//添加新的职业起航后台$result=$pro->addprofessionsail($_POST['title'], $date,$isup,$_POST['content'],$userid['user_id']);
	public function addprofessionsail($title,$content,$picid,$userid)
	{
		if($picid=="")
		{
		$sql="insert into `professionsail`(`ps_title`,`ps_time`,`ps_top`,`ps_content`,`pic_id`,`user_id`,`pa_scan`,`ps_share`) values('".$title."',NOW(),NULL,'".$content."',NULL,'".$userid."',0,0)";
		//echo $sql;
		}
		else
			{
				$sql="insert into `professionsail`(`ps_title`,`ps_time`,`ps_top`,`ps_content`,`pic_id`,`user_id`,`pa_scan`,`ps_share`) values('".$title."',NOW(),NULL,'".$content."','".$picid."','".$userid."',0,0)";
				//echo $sql;
			}
		//echo $sql;
		return $this->insert($sql);
	}
	//删除职业起航
	public function delmsg($id){
		$sql = "DELETE FROM `professionsail` WHERE `professionsail`.`ps_id` = '".$id."'";
		return $this->del($sql);
	}
	//职业起航置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `professionsail` SET `ps_top` = NOW() WHERE `professionsail`.`ps_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `professionsail` SET `ps_top` = NULL WHERE `professionsail`.`ps_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//通过id获取信息的详情
	public function getDetailInfoFromId($id){
	
		$sql = "SELECT `professionsail`.*, `picture`.*,  `user`.* FROM `professionsail` LEFT JOIN `picture` ON `professionsail`.`pic_id` = `picture`.`pic_id` LEFT JOIN `user` ON `professionsail`.`user_id` = `user`.`user_id` WHERE `professionsail`.`ps_id` = '".$id."' ";
		return $this->fetchRow($sql);
	}
	//修改职业起航$result = $psmsg->updatepsmsg($id, $_POST['title'], $picid['pic_id'], $userinfo['user_id'], $isup, $_POST['content']);
	public function updatepsmsg($id, $title, $picid, $userid,$content)
	{
		if($picid=="")
		{
		$sql = "UPDATE `professionsail` SET `ps_title` = '".$title."' ,`pic_id` = NULL,`user_id` = '".$userid."',`ps_content` = '".$content."' WHERE `professionsail`.`ps_id` = '".$id."'";
		}
		else
		{
		$sql = "UPDATE `professionsail` SET `ps_title` = '".$title."' ,`pic_id` = '".$picid."',`user_id` = '".$userid."',`ps_content` = '".$content."' WHERE `professionsail`.`ps_id` = '".$id."'";
		}
		//echo $sql;
		return $this->update($sql);
	}
}