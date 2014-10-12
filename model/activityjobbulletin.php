<?php
/*
 * create on 2013-07-16
* author:wangchao
* QQ:411468280
*/
//error_reporting(E_ALL & ~E_NOTICE);
class activityjobbulletin extends Model
{
	/**
	 * 获取工作简报期刊号
	 * 
	 */
	public function getPerIdList()
	{
		$sql="SELECT `activityperiodicals`.* FROM `activityperiodicals` ORDER BY `activityperiodicals`.`ap_number` DESC ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取最新的期刊号
	 */
	public function getLatestPerId()
	{
		$sql="SELECT `activityperiodicals`.* FROM `activityperiodicals` ORDER BY `activityperiodicals`.`ap_number` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	/**
	 * 添加新的期刊号
	 */
	public function addperiodicals(){
		$lastap = $this->getLatestPerId();
		if($lastap){
			$periodicalsnumber = $lastap["ap_number"]+1;
			$periodicalsyears = date("Y");
		}else{
			$periodicalsnumber = 1;
			$periodicalsyears = date("Y");
		}
		$sql="INSERT INTO `activityperiodicals` (`ap_id`, `ap_number`, `ap_years`) VALUES (NULL, '".$periodicalsnumber."','".$periodicalsyears."')";
		$id =  $this->insert($sql);
		if($id){
			return array('result'=>$id, 'number' => $periodicalsnumber, 'years'=> $periodicalsyears );
		}else{
			return array('result'=>$id, 'msg' => "tianjiashibai" );
		}
	}
	
	/**
	 * 获取期刊号
	 * 1 当前      0前一个    2是后一个
	 */
	public function getBulletinPeriodicalsId($id=NULL,$flag=1)
	{
		$sql="SELECT `activityperiodicals`.* FROM `activityperiodicals`  ";
		if($id){
			if($flag == 1){
				$sql .= " where `activityperiodicals`.`ap_id`='".$id."'  ";
			}else if($flag == 2){
				$sql .= " where `activityperiodicals`.`ap_id`>'".$id."' ORDER BY `activityperiodicals`.`ap_number` ASC ";
			}else{
				$sql .= " where `activityperiodicals`.`ap_id`<'".$id."' ORDER BY `activityperiodicals`.`ap_number` DESC ";
			}
		}else{
			$sql .= " ORDER BY `activityperiodicals`.`ap_number` DESC ";
		}
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	public function hasNext($id){
		$re = $this->getBulletinPeriodicalsId($id,2);
		//echo $id."nex:";
		//print_r($re);
		if($re){
			return true;
		}
		return false;
	}
	
	public function hasPre($id){
		$re = $this->getBulletinPeriodicalsId($id,0);
		//echo $id."pre:";
		//print_r($re);
		if($re){
			return true;
		}
		return false;
	}
	//通过id获取信息的详情
	public function getDetailInfoFromId($id){
	
		$sql = "SELECT `activityarticle`.*, `picture`.*,  `file`.*, `user`.* FROM `activityarticle` 
				LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id` 
				LEFT JOIN `user` ON `activityarticle`.`user_id` = `user`.`user_id` 
				LEFT JOIN `file` ON `file`.`file_id` = `activityarticle`.`file_id`
				WHERE `activityarticle`.`aa_id` = '".$id."' ";
		return $this->fetchRow($sql);
	}
	
	/*
	 * 根据就业工作期刊号获取就业工作简报列表
	 */
	public function getBulletinList($id)
	{
		$sql="select `activityarticle`.* from `activityarticle` where `activityarticle`.`ap_id`='".$id."' ";
		return $this->fetchAll($sql);
	}
	
	/*
	 * 根据pic_id获取图片链接
	 */
	public function getPicLink($id)
	{
		$sql="select `picture`.`pic_link` from `picture` where `picture`.`pic_id`='".$id."' ";
		return $this->fetchRow($sql);
	}
	
	/*
	 * 获取单个简报详细信息
	 */
	public function getBulletinDetail($id)
	{
		$sql="select `activityarticle`.*,`picture`.*, `activityperiodicals`.* , `user`.*, `file`.`file_link` from `activityarticle` 
				LEFT JOIN `picture` ON `picture`.`pic_id` = `activityarticle`.`pic_id` 
				LEFT JOIN `activityperiodicals` ON `activityperiodicals`.`ap_id` = `activityarticle`.`ap_id` 
				LEFT JOIN `file` ON `file`.`file_id` = `activityarticle`.`file_id`
				LEFT JOIN `user` ON `user`.`user_id` = `activityarticle`.`user_id` 
				where `activityarticle`.`aa_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
		
	}
	public function getBulletinDetail01($id)
	{
		$sql="select `activityarticle`.* from `activityarticle` where `activityarticle`.`aa_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
	
	}
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
	 * 添加新的工作简报
	*/
	public function addbulletin($periodicaksid,$title,$content,$source,$userid,$picid,$fid,$fname)
	{
		if($picid == "")
		{
			if ($fid == ""){
				$sql = "INSERT INTO `activityarticle` "
					 . "(`aa_id`, `ap_id`, `aa_time`, `aa_title`, `aa_content`, `aa_source`, `aa_share`, `aa_scan`, `aa_top`, `pic_id`, `file_id`, `file_name`, `user_id`) "
					 . "VALUES "
					 . "(NULL, '".$periodicaksid."', NOW(), '".$title."', '".$content."', '".$source."', '0', '0', NULL, NULL, NULL, NULL, '".$userid."');";
			}else {
				$sql = "INSERT INTO `activityarticle` "
						. "(`aa_id`, `ap_id`, `aa_time`, `aa_title`, `aa_content`, `aa_source`, `aa_share`, `aa_scan`, `aa_top`, `pic_id`, `file_id`, `file_name`, `user_id`) "
						. "VALUES "
						. "(NULL, '".$periodicaksid."', NOW(), '".$title."', '".$content."', '".$source."', '0', '0', NULL, NULL, '".$fid."', '".$fname."', '".$userid."');";
			}
		}
		else 
		{
			if ($fid == ""){
				$sql = "INSERT INTO `activityarticle` "
					 . "(`aa_id`, `ap_id`, `aa_time`, `aa_title`, `aa_content`, `aa_source`, `aa_share`, `aa_scan`, `aa_top`, `pic_id`, `file_id`, `file_name`, `user_id`) "
					 . "VALUES "
					 . "(NULL, '".$periodicaksid."', NOW(), '".$title."', '".$content."', '".$source."', '0', '0', NULL, '".$picid."', NULL, NULL, '".$userid."');";
			}else {
				$sql = "INSERT INTO `activityarticle` "
					 . "(`aa_id`, `ap_id`, `aa_time`, `aa_title`, `aa_content`, `aa_source`, `aa_share`, `aa_scan`, `aa_top`, `pic_id`, `file_id`, `file_name`, `user_id`) "
					 . "VALUES "
					 . "(NULL, '".$periodicaksid."', NOW(), '".$title."', '".$content."', '".$source."', '0', '0', NULL, '".$picid."', '".$fid."', '".$fname."', '".$userid."');";
			}
		}
		//echo $sql;
		return $this->insert($sql);
	}
	
	/*
	 * 添加新的工作简报阅读次数
	*/
	public function addreadnum($id)
	{
		$sql = "UPDATE  `activityarticle` SET  `aa_scan` =  `aa_scan` +1 WHERE  `activityarticle`.`aa_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	
	public function addShareNum($id)
	{
		$sql = "UPDATE  `activityarticle` SET  `aa_share` =  `aa_share` +1 WHERE  `activityarticle`.`aa_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	
	public function getPrearticle($cur_id,$periodical_id)
	{
	
		$sql = "SELECT `activityarticle`.* FROM `activityarticle` WHERE `aa_id` < ".$cur_id." and `activityarticle`.`ap_id`='".$periodical_id."' ORDER BY `aa_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNextarticle($cur_id,$periodical_id)
	{
		$sql = "SELECT `activityarticle`.* FROM `activityarticle` WHERE `aa_id` > ".$cur_id." and `activityarticle`.`ap_id`='".$periodical_id."' ORDER BY `aa_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getBulletinPageModel($page = 1 , $num = 10,$id=0){
		
		if($id){
			$sql = "SELECT `activityarticle`.* ,`picture`.* 
					FROM `activityarticle` 
					LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id`  
					where `activityarticle`.`ap_id`='".$id."' 
					ORDER BY  `activityarticle`.`aa_top` DESC , 
					`activityarticle`.`aa_time` DESC 
					Limit ".($page-1)*$num.",".$num." ";
		}else{
			$sql = "SELECT `activityarticle`.* ,`picture`.* 
					FROM `activityarticle` 
					LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id`   
					ORDER BY `activityarticle`.`ap_id` DESC ,  
					`activityarticle`.`aa_top` DESC , 
					`activityarticle`.`aa_time` DESC 
					Limit ".($page-1)*$num.",".$num." ";
		}
		//echo $sql;
		$list = $this->fetchAll($sql);
		if($id){
			$total = $this->getTotal('activityarticle'," `activityarticle`.`ap_id`='".$id."' ");
		}else{
			$total = $this->getTotal('activityarticle',"");
		}
		
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//删除工作简报
	public function delmsg($id){
		$sql = "DELETE FROM `activityarticle` WHERE `activityarticle`.`aa_id` = '".$id."'";
		return $this->del($sql); 
	}
	//置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `activityarticle` SET `aa_top` = NOW() WHERE `activityarticle`.`aa_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `activityarticle` SET `aa_top` = NULL WHERE `activityarticle`.`aa_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//获取实习招聘信息
	//这里需要改
	public function getInternrecruinfo(){
		$sql = "SELECT `activityarticle`.*,`activityperiodicals`.* ,`picture`.*,`user`.* FROM `activityarticle` LEFT JOIN `activityperiodicals` ON `activityarticle`.`ap_id` = `activityperiodicals`.`ap_id`
				LEFT JOIN `picture` ON `activityarticle`.`pic_id`=`picture`.`pic_id` LEFT JOIN `user` ON `activityarticle`.`user_id` = `user`.`user_id`";
		return $this->fetchAll($sql);
	}
	
//后台分页	
	public function getJbPageModel($page = 1 , $num = 10){
	
		//$sql = "SELECT `activityarticle`.* ,`picture`.* ,`user`.* FROM `activityarticle` LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id` LEFT JOIN `user` ON `activityarticle`.`user_id`=`user`.`user_id` ORDER BY  `activityarticle`.`aa_top` DESC , `activityarticle`.`aa_time` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		
		$sql = "SELECT `activityperiodicals`.`ap_id` AS id,
				 `activityperiodicals` . * ,
				`activityarticle`. * ,
				`picture`. * ,
				`user`. *
				FROM `activityperiodicals`
				LEFT JOIN `activityarticle` ON `activityperiodicals`.`ap_id` = `activityarticle`.`ap_id`
				LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id`
				LEFT JOIN `user` ON `activityarticle`.`user_id` = `user`.`user_id`
				ORDER BY `activityperiodicals`.`ap_number` DESC ,
				`activityperiodicals`.`ap_id` DESC ,
				`activityarticle`.`aa_top` DESC ,
				`activityarticle`.`aa_time` DESC ";
		//echo $sql;
		$sql1 = $sql. " Limit ".($page-1)*$num.",".$num." ";
		$list = $this->fetchAll($sql1);
		$total = $this->getTotalFromSql($sql);
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	/*后台分页
	public function getJbPageModel($page = 1 , $num = 10,$id=0){
	
		if($id){
				
			$sql = "SELECT `activityarticle`.* ,`picture`.*,`activityperiodicals`.* FROM `activityarticle` LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id` LEFT JOIN `activityperiodicals` ON `activityarticle`.`ap_id` = `activityperiodicals`.`ap_id`  where `activityarticle`.`ap_id`='".$id."' ORDER BY  `activityarticle`.`aa_top` DESC , `activityarticle`.`aa_time` DESC Limit ".($page-1)*$num.",".$num." ";
		}else{
			$sql = "SELECT `activityarticle`.* ,`picture`.* `activityperiodicals`.* FROM `activityarticle` LEFT JOIN `picture` ON `activityarticle`.`pic_id` = `picture`.`pic_id`   ORDER BY  `activityarticle`.`aa_top` DESC , `activityarticle`.`aa_time` DESC Limit ".($page-1)*$num.",".$num." ";
		}
		echo $sql;
		$list = $this->fetchAll($sql);
		if($id){
			$total = $this->getTotal('activityarticle'," `activityarticle`.`ap_id`='".$id."' ");
		}else{
			$total = $this->getTotal('activityarticle',"");
		}
	
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	} */
	//选出指定id的期刊号pid
	public function getDatailFromId($id)
	{
	
		$sql = "SELECT `activityperiodicals`.*,`activityarticle`.*  FROM `activityarticle` LEFT JOIN `activityperiodicals` ON `activityarticle`.`ap_id` = `activityperiodicals`.`ap_id`  where `activityarticle`.`aa_id`='".$id."'";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//修改就业资讯
	
	
	public function updatejbmsg($id, $title,$periodicals,$source, $picid, $userid,$content,$fid,$fname)
	{
		if($picid == "")
		{
			if ($fid == ""){
				$sql = "UPDATE `activityarticle` SET `aa_title` = '".$title."', "
					 . " `ap_id` = '".$periodicals."', `aa_source` = '".$source."', "
					 . "`pic_id` = NULL, `file_id` = NULL, `user_id` = '".$userid."', `aa_content` = '".$content."', `file_name` = NULL "
				     . "WHERE `activityarticle`.`aa_id` = '".$id."'";
			}else{
				$sql = "UPDATE `activityarticle` SET `aa_title` = '".$title."', "
					. " `ap_id` = '".$periodicals."', `aa_source` = '".$source."', "
					. "`pic_id` = NULL, `file_id` = '".$fid."', `user_id` = '".$userid."', `aa_content` = '".$content."', `file_name` = '".$fname."' "
					. "WHERE `activityarticle`.`aa_id` = '".$id."'";
			}
			
		}
		else
		{
			if ($fid == ""){
				$sql = "UPDATE `activityarticle` SET `aa_title` = '".$title."', "
					 . " `ap_id` = '".$periodicals."', `aa_source` = '".$source."', "
					 . "`pic_id` = '".$picid."', `file_id` = NULL, `user_id` = '".$userid."', `aa_content` = '".$content."', `file_name` = NULL "
					 . "WHERE `activityarticle`.`aa_id` = '".$id."'";
			}else{
				$sql = "UPDATE `activityarticle` SET `aa_title` = '".$title."', "
					 . " `ap_id` = '".$periodicals."', `aa_source` = '".$source."', "
					 . "`pic_id` = '".$picid."', `file_id` = '".$fid."', `user_id` = '".$userid."', `aa_content` = '".$content."', `file_name` = '".$fname."' "
					 . "WHERE `activityarticle`.`aa_id` = '".$id."'";
			}
		}
		//echo $sql;
		return $this->update($sql);
	}
	
	/**
	 * 删除一期
	 * @param unknown_type $id
	 * @return number|boolean
	 */
	public function delqi($id){
		$sql = "DELETE FROM `activityperiodicals` WHERE `activityperiodicals`.`ap_id` = ".$id ;
		if($this->getBulletinList($id)){
			return -1;//不能删除 期刊下有内容
		}
		if( $this->del($sql) )return 1;
		return 0;
	}	
	
}