<?php
/*
 * create on 2013-07-15
 * author:wangchao
 * QQ:411468280
 */
class professionpersontalk extends Model
{
	/*
	 * 通过用户名查找用户ID
	*/
	public function getuserid($username)
	{
		$sql="select `user`.`user_id` from `user` where `user`.`user_name`='".$username."' ";
		return $this->fetchRow($sql);
	}
	//通过链接获取图片id
	public function getPicid($link)
	{
		$sql="select `picture`.`pic_id` from `picture` where `picture`.`pic_link`='".$link."' ";
		return $this->fetchRow($sql);
	}
	/*
	 * 获取校友访谈信息列表
	 */
	public function getTalkList()
	{
		$sql="SELECT `professionpersontalk`.*,`alumnusinfo`.`ai_id`,`alumnusinfo`.`ai_name`,`reporter`.`re_name` FROM `professionpersontalk`,`alumnusinfo`,`reporter` WHERE `professionpersontalk`.`ai_id`=`alumnusinfo`.`ai_id` AND `professionpersontalk`.`re_id`=`reporter`.`re_id` ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	public function getTalkPic($id)
	{
		$sql="select `picture`.`pic_link` from `picture` where `picture`.`pic_id`='".$id."' ";
		return $this->fetchRow($sql);
	}
	/*
	 * 获取校友信息列表
	 */
	public function getAlumusList()
	{
		$sql="SELECT `alumnusinfo`.* `picture`.* FROM `alumnusinfo` LEFT JOIN `picture` ON `picture`.`pic_id`= `alumnusinfo`.`pic_id` ";
		
		
		return $this->fetchAll($sql);
	}
	
	/*
	 * 获取访谈人信息列表
	 */
	public function getReporterList()
	{
		$sql="SELECT `reporter`.* FROM `reporter` ";
		return $this->fetchAll($sql);
	}
	
	/*
	 * 获取访谈详细信息
	 */
	public function getTalkDetail($id)
	{
		$sql="SELECT `professionpersontalk`.*,`alumnusinfo`.*,`reporter`.*,`picture`.* FROM `professionpersontalk` 
				LEFT JOIN `alumnusinfo` ON `professionpersontalk`.`ai_id` = `alumnusinfo`.`ai_id`
				LEFT JOIN `picture` ON `professionpersontalk`.`pic_id` = `picture`.`pic_id` 
				LEFT JOIN `reporter` ON `reporter`.`re_id`= `professionpersontalk`.`re_id`  
				WHERE `professionpersontalk`.`ppt_id`='".$id."' ";
		//echo $sql;
		//exit();
		return $this->fetchRow($sql);
	}
	
	/*
	 * 获取访谈校友信息
	 */
	public function getAlumnusInfo($id)
	{
		$sql="select `alumnusinfo`.* from `alumnusinfo` where `alumnusinfo`.`ai_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
	
	}
	public function addreadnum($id)
	{
		$sql = "UPDATE  `professionpersontalk` SET  `ppt_scan` =  `ppt_scan` +1 WHERE  `professionpersontalk`.`ppt_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "UPDATE  `professionpersontalk` SET  `ppt_share` =  `ppt_share` +1 WHERE  `professionpersontalk`.`ppt_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	public function addalureadnum($id)
	{
		$sql = "UPDATE  `alumnusinfo` SET  `ai_scan` =  `ai_scan` +1 WHERE  `alumnusinfo`.`ai_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	
	public function getPretalk($cur_id)
	{
	
		$sql = "SELECT `professionpersontalk`.* FROM `professionpersontalk` WHERE `ppt_id` < ".$cur_id." ORDER BY `ppt_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNexttalk($cur_id)
	{
		$sql = "SELECT `professionpersontalk`.* FROM `professionpersontalk` WHERE `ppt_id` > ".$cur_id." ORDER BY `ppt_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getAlumunsPageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `professionpersontalk`.* ,`picture`.* ,`alumnusinfo`.*,`reporter`.* FROM `professionpersontalk` LEFT JOIN `picture` ON `professionpersontalk`.`pic_id` = `picture`.`pic_id` LEFT JOIN `alumnusinfo` ON `professionpersontalk`.`ai_id`=`alumnusinfo`.`ai_id` LEFT JOIN `reporter` ON `professionpersontalk`.`re_id`=`reporter`.`re_id` ORDER BY  `professionpersontalk`.`ppt_top` DESC , `professionpersontalk`.`ppt_pubtime` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('professionpersontalk',"");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//添加校友寻访报告
	public function addalumunreport($aiid,$reid,$title,$vtime,$city,$content,$userid,$picid)
	{
		if($picid=="")
		{
		$sql="insert into `professionpersontalk`(`ai_id`,`re_id`,`ppt_title`,`ppt_pubtime`,`ppt_top`,`ppt_talktime`,`ppt_city`,`ppt_content`,`ppt_scan`,`ppt_share`,`user_id`,`pic_id`) values('".$aiid."','".$reid."','".$title."',NOW(), NULL,'".$vtime."','".$city."','".$content."',0,0,'".$userid."',NULL)";
		}
		else 
		{
			$sql="insert into `professionpersontalk`(`ai_id`,`re_id`,`ppt_title`,`ppt_pubtime`,`ppt_top`,`ppt_talktime`,`ppt_city`,`ppt_content`,`ppt_scan`,`ppt_share`,`user_id`,`pic_id`) values('".$aiid."','".$reid."','".$title."',NOW(), NULL,'".$vtime."','".$city."','".$content."',0,0,'".$userid."','".$picid."')";
		}
			
		//echo $sql;
		return $this->insert($sql);
	}
	//删除校友访谈信息
	
	
	public function delmsg($id,$aiid,$reid){
		$sql1 = "DELETE FROM `professionpersontalk` WHERE `professionpersontalk`.`ppt_id` = '".$id."'";
		$sql2 = "DELETE FROM `alumnusinfo` WHERE `alumnusinfo`.`ai_id` = '".$aiid."'";
		$sql3 = "DELETE FROM `reporter` WHERE `reporter`.`re_id` = '".$reid."'";
		$list1 = $this->del($sql1);
		$list2 = $this->del($sql2);
		$list3 = $this->del($sql3);
		return array('list1'=>$list1,'list2'=>$list2,'list3'=>$list3);
	}
	//校友访谈信息置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `professionpersontalk` SET `ppt_top` = NOW() WHERE `professionpersontalk`.`ppt_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `professionpersontalk` SET `ppt_top` = NULL WHERE `professionpersontalk`.`ppt_id` = '".$id."'";
	
		return $this->update($sql);
	}
	
	//添加校友信息
	//$_POST['alumunname'], $_POST['graduateyear'],$_POST['time'],$_POST['discipline'], $_POST['where'],$_POST['position'],$_POST['mail']
	public function addalumsallinfo($alumunname,$graduateyear,$time,$disciplline,$where,$position,$mail)
	{
		
			$sql="insert into `alumnusinfo`(`ai_name`,`ai_year`,`ai_times`,`ai_disciplline`,`ai_where`,`ai_position`,`ai_mail`) values('".$alumunname."','".$graduateyear."','".$time."','".$disciplline."','".$where."','".$position."','".$mail."')";
		//echo $sql;
		return $this->insert($sql);
	}
	//删除校友信息
	public function delai($id){
		$sql = "DELETE FROM `alumnusinfo` WHERE `alumnusinfo`.`ai_id` = '".$id."'";
		return $this->del($sql);
	}
	//校友信息分页
	public function getAlumunsinfoPageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `alumnusinfo`.*,`picture`.* FROM `alumnusinfo` LEFT JOIN `picture` ON `alumnusinfo`.`pic_id` = `picture`.`pic_id` ORDER BY  `alumnusinfo`.`ai_year` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('alumnusinfo',"");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//添加访谈者信息
	public function addinterviewersallinfo($name,$grade,$discipline)
	{
		$sql="insert into `reporter`(`re_name`,`re_grade`,`re_discipline`) values('".$name."','".$grade."','".$discipline."')";
		//echo $sql;
		return $this->insert($sql);
	}
	//删除访谈者信息
	public function delii($id){
		$sql = "DELETE FROM `reporter` WHERE `reporter`.`re_id` = '".$id."'";
		return $this->del($sql);
	}
	//访谈者信息分页
	public function getinterviewerinfoPageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `reporter`.*  FROM `reporter`  Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('reporter',"");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
//通过id获取信息详情
	public function getDetailInfoFromId($id){
		$sql = "SELECT `professionpersontalk`.*,`reporter`.* ,`alumnusinfo`.*,`picture`.*,`user`.* FROM `professionpersontalk` LEFT JOIN `reporter` ON `professionpersontalk`.`re_id` = `reporter`.`re_id` LEFT JOIN `alumnusinfo` ON `professionpersontalk`.`ai_id` = `alumnusinfo`.`ai_id` LEFT JOIN `picture` ON `professionpersontalk`.`pic_id`=`picture`.`pic_id` LEFT JOIN `user` ON `professionpersontalk`.`user_id` = `user`.`user_id` WHERE `professionpersontalk`.`ppt_id` = '".$id."'  ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//通过访谈报告id获取report的id
	public function getReidFromid($id)
	{
		$sql="select `professionpersontalk`.`re_id` from `professionpersontalk` where `professionpersontalk`.`ppt_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//通过访谈报告id获取alumnus的id
	public function getAiidFromid($id)
	{
		$sql="select `professionpersontalk`.`ai_id` from `professionpersontalk` where `professionpersontalk`.`ppt_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//修改校友信息 $id,$_POST['alumunname'], $_POST['graduateyear'],$_POST['time'],$_POST['discipline'], $_POST['where'],$_POST['position'],$_POST['mail'],$_POST['picid']
	public function updateaimsg($aiid,$alumunname,$graduateyear,$time,$disciplline,$where,$position,$mail)
	{
		
		
			$sql = "UPDATE `alumnusinfo` SET `ai_name` = '".$alumunname."',`ai_year` = '".$graduateyear."',`ai_times` = '".$time."',`ai_disciplline` = '".$disciplline."',`ai_where` = '".$where."',`ai_position` = '".$position."',`ai_mail` = '".$mail."'  WHERE `alumnusinfo`.`ai_id` = '".$aiid."'";
		
		//echo $sql;
		return $this->update($sql);
	}
	//修改访谈者信息
	public function updateremsg($reid,$name,$grade,$discipline)
	{
		$sql= "UPDATE `reporter` SET `re_name` = '".$name."',`re_grade` = '".$grade."',`re_discipline` = '".$discipline."'  WHERE `reporter`.`re_id` = '".$reid."'";
		//$sql= "UPDATE `reporter` SET `re_name` = '".$name."',`re_grade` = '".$grade."',`re_discipline` = '".$discipline."' FROM `reporter` RIGHT JOIN `professionpersontalk` ON `reporter`.`re_id` = `professionpersontalk`.`re_id` WHERE `professionpersontalk`.`ppt_id` = '".$id."'";
		//echo $sql;
		return $this->update($sql);
	}
//修改校友寻访报告
	public function updatepptmsg($id,$title,$vtime,$city,$content,$picid)
	{
		if($picid == ""){
		$sql="UPDATE `professionpersontalk` SET  `ppt_title` = '".$title."' ,`ppt_talktime` = '".$vtime."',`ppt_city` = '".$city."' ,`ppt_content` = '".$content."',`pic_id` = NULL   WHERE `professionpersontalk`.`ppt_id` = '".$id."'";
		}
		else
		{
			$sql="UPDATE `professionpersontalk` SET  `ppt_title` = '".$title."' ,`ppt_talktime` = '".$vtime."',`ppt_city` = '".$city."' ,`ppt_content` = '".$content."',`pic_id` = '".$picid."' WHERE `professionpersontalk`.`ppt_id` = '".$id."'";
		}
		//$sql="insert into `professionpersontalk`(`ai_id`,`re_id`,`ppt_title`,`ppt_pubtime`,`ppt_top`,`ppt_talktime`,`ppt_city`,`ppt_content`,`user_id`) values('".$aiid."','".$reid."','".$title."','".$time."',NULL,'".$vtime."','".$city."','".$content."','".$userid."')";
		//echo $sql;
		return $this->update($sql);
	}
	
}