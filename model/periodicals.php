<?php
/*create on 2013-07-15
 * author: wangchao
* QQ:411468280
*/

class periodicals extends Model
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
	 * 添加新文章
	*/
	public function addarticle($periods,$title,$banmian,$picid,$content,$userid)
	{
		if($picid == "")
		{
		$sql="insert into `article`(`p_id`,`a_time`,`a_title`,`l_id`,`a_top`,`pic_id`,`a_content`,`user_id`,`a_scan`,`a_share`) values('".$periods."',NOW(),'".$title."','".$banmian."',NULL,NULL,'".$content."','".$userid."',0,0)";
		}
		else
			{
				$sql="insert into `article`(`p_id`,`a_time`,`a_title`,`l_id`,`a_top`,`pic_id`,`a_content`,`user_id`,`a_scan`,`a_share`) values('".$periods."',NOW(),'".$title."','".$banmian."',NULL,'".$picid."','".$content."','".$userid."',0,0)";
			}
			
		//echo $sql;
		return $this->insert($sql);
		
	}
	
	public function getPerIdList()
	{
		$sql="SELECT `periodicals`.* FROM `periodicals` ORDER BY `periodicals`.`p_number` DESC  ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	public function getLidFromId($id)
	{
		$sql="SELECT `layout`.* from `article` LEFT JOIN `layout` ON `layout`.`p_id` = `article`.`p_id` ORDER BY `layout`.`l_number` DESC  ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取期刊号
	 * 1 当前      0前一个    2是后一个
	*/
	public function getPeriodicals($id=NULL,$flag=1)
	{
		$sql="SELECT `periodicals`.* FROM `periodicals`  ";
		if($id){
			if($flag == 1){
				$sql .= " where `periodicals`.`p_id`='".$id."'  ";
			}else if($flag == 2){
				$sql .= " where `periodicals`.`p_id`>'".$id."' ORDER BY `periodicals`.`p_number` ASC ";
			}else{
				$sql .= " where `periodicals`.`p_id`<'".$id."' ORDER BY `periodicals`.`p_number` DESC ";
			}
		}else{
			$sql .= " ORDER BY `periodicals`.`p_number` DESC ";
		}
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function hasNext($id){
		$re = $this->getPeriodicals($id,2);
		//echo $id."nex:";
		//print_r($re);
		if($re){
			return true;
		}
		return false;
	}
	
	public function hasPre($id){
		$re = $this->getPeriodicals($id,0);
		//echo $id."pre:";
		//print_r($re);
		if($re){
			return true;
		}
		return false;
	}
	
	/*
	 * 获取版面号
	 */
	public function getLayout($id)
	{
		$sql="select `layout`.* from `layout` where `layout`.`p_id`='".$id."' ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	/**
	 * 获取最新的版面信息
	 * @param unknown_type $pid
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getLatestLayout($pid){
		$sql="select `layout`.* from `layout` where `layout`.`p_id`='".$pid."' ORDER BY `layout`.`l_number` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	/*
	 * 获取每版面有多少篇文章
	*/
	public function getArticleNum($id)
	{
		$sql="select count(*) as num from `article` where `article`.`l_id`='".$id."' ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getArticleFromLayoutId($id)
	{
		$sql="select `article`.*,`picture`.* from `article` 
				LEFT JOIN `picture` ON `picture`.`pic_id` = `article`.`pic_id` 
				where `article`.`l_id`='".$id."' 
				ORDER BY `article`.`a_top` DESC	
				";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	/*
	 * 根据期刊号查询期刊信息(包括此期刊下的版面及其版面下的文章)
	*/

	public function  getPeriodicalsList($id)
	{
		$sql="SELECT `periodicals`.`p_id`,`periodicals`.`p_name`,`layout`.`l_id`,`layout`.`l_number`,`article`.`a_id`,`article`.`a_title`,`article`.`a_time` FROM `periodicals`,`layout`,`article` WHERE `periodicals`.`p_id` ='".$id."' AND `periodicals`.`p_id`=`layout`.`p_id` AND `layout`.`l_id`=`article`.`l_id` ";
		//echo $sql;
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
	 * 根据查询得到的列表点击查看文章的详细内容
	*/
	public function getPeriodicalsDetail($articleid)
	{
		$sql="select `article`.*, `picture`.* FROM  `article` LEFT JOIN `picture` ON `article`.`pic_id` = `picture`.`pic_id`  where `article`.`a_id`='".$articleid."' ";
		//echo $sql;
		return $this->fetchRow($sql);
		
	}
	public function getPer_lay_id($id)
	{
		$sql="select `layout`.*,`periodicals`.* from `layout` LEFT JOIN `periodicals` ON `periodicals`.`p_id` = `layout`.`p_id` where `layout`.`l_id`='".$id."' ";
		return $this->fetchRow($sql);
	}

	/**
	 * 添加新的期刊号
	 */
	public function addperiodicals()
	{	
		$p = $this->getPeriodicals();
		if($p){
			$periodicalsnumber = $p["p_number"]+1;
			$periodicalsname = "第".$periodicalsnumber."期";
			$periodicalsyears = date("Y");
		}else{
			$periodicalsnumber = 1;
			$periodicalsname = "第1期";
			$periodicalsyears = date("Y");
		}
		$sql="INSERT INTO `periodicals` (`p_id`, `p_name`, `p_number`, `p_years`) VALUES (NULL, '".$periodicalsname."','".$periodicalsnumber."','".$periodicalsyears."')";
		$id =  $this->insert($sql);
		if($id){
			return array('result'=>$id, 'number' => $periodicalsnumber, 'name'=>$periodicalsname,'year'=> $periodicalsyears );
		}else{
			return array('result'=>$id, 'msg' => "tianjiashibai" );
		}
	}
	
	/**
	 * 添加版面号
	 * @param unknown_type $pid
	 */
	public function addlayout($pid){
		$latest = $this->getLatestLayout($pid);
		if($latest){
			$layoutNumber = $latest["l_number"]+1;
			$name = "第".$layoutNumber."版";
			
		}else{
			$layoutNumber = 1;
			$name = "第1版";
			
		}
		$sql = "INSERT INTO `layout` (`l_id`, `p_id`, `l_name`, `l_number`) VALUES (NULL, '".$pid."', '".$name."', '".$layoutNumber."')";
		$id = $this->insert($sql);
		return array('result'=>$id,'l_number'=>$layoutNumber,'l_name'=>$name,'p_id'=>$pid);
	}

	/*
	 * 根据期刊号查询获取年号
	*
	*/
	public function getYearsFromPeriodicalsid($id)
	{
		$sql="select `p_years` from `periodicals` where `p_id`='".$id."' ";
		return $this->fetchRow($sql);
	}
	
	
	/*
	 * 添加新的工作简报阅读次数
	*/
	public function addreadnum($id)
	{
		$sql = "UPDATE  `article` SET  `a_scan` =  `a_scan` +1 WHERE  `article`.`a_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	public function addShareNum($id)
	{
		$sql = "UPDATE  `article` SET  `a_share` =  `a_share` +1 WHERE  `article`.`a_id` = '".$id."' ";
		//echo $sql;
		return $this->update($sql);
	}
	public function getPrearticle($cur_id,$layout_id)
	{
	
		$sql = "SELECT `article`.* FROM `article` WHERE `a_id` < ".$cur_id." and `article`.`l_id`='".$layout_id."' ORDER BY `a_id` DESC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	public function getNextarticle($cur_id,$layout_id)
	{
		$sql = "SELECT `article`.* FROM `article` WHERE `a_id` > ".$cur_id." and `article`.`l_id`='".$layout_id."' ORDER BY `a_id` ASC ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	
	/**
	 * 获取就业通讯 id是版面号的id
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @param unknown_type $id
	 * @return multitype:unknown number
	 */
	public function getArticalPageModel($page = 1 , $num = 10,$id=0){
	
		if($id){
			$sql = "SELECT `article`.* ,`picture`.* FROM `article` LEFT JOIN `picture` ON `article`.`pic_id` = `picture`.`pic_id` where `article`.`l_id`='".$id."' ORDER BY  `article`.`a_top` DESC , `article`.`a_time` DESC Limit ".($page-1)*$num.",".$num." ";
		}else{
			$sql = "SELECT `article`.* ,`picture`.* FROM `article` LEFT JOIN `picture` ON `article`.`pic_id` = `picture`.`pic_id` ORDER BY  `article`.`a_top` DESC , `article`.`a_time` DESC Limit ".($page-1)*$num.",".$num." ";
		}
		//echo $sql;
		$list = $this->fetchAll($sql);
		if($id){
			$total = $this->getTotal('article'," `article`.`l_id`='".$id."' ");
		}else{
			$total = $this->getTotal('article',"");
		}
	
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//后台分页
	public function getsjcPageModel($page = 1 , $num = 10){
	
		$sql = "SELECT `periodicals`.`p_id` AS id,
				 `periodicals` . * , 
				`layout`.`l_id` AS `layoutid` , 
				`layout`. * , 
				`article`. * , 
				`picture`. * , 
				`user`. *
				FROM `periodicals`
				LEFT JOIN `layout` ON `layout`.`p_id` = `periodicals`.`p_id`
				LEFT JOIN `article` ON `layout`.`l_id` = `article`.`l_id`
				LEFT JOIN `picture` ON `article`.`pic_id` = `picture`.`pic_id`
				LEFT JOIN `user` ON `article`.`user_id` = `user`.`user_id`
				ORDER BY `periodicals`.`p_id` DESC , 
				`layout`.`l_id` ASC , 
				`article`.`a_top` DESC , 
				`article`.`a_time` DESC ";
		$sql1 = $sql. " Limit ".($page-1)*$num.",".$num." ";
		//echo $sql1;
		$list = $this->fetchAll($sql1);
		$total = $this->getTotalFromSql($sql);
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	//删除工作简报
	public function delmsg($id){
		$sql = "DELETE FROM `article` WHERE `article`.`a_id` = '".$id."'";
		return $this->del($sql);
	}
	//置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `article` SET `a_top` = NOW() WHERE `article`.`a_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `article` SET `a_top` = NULL WHERE `article`.`a_id` = '".$id."'";
	
		return $this->update($sql);
	}
	//通过id获取信息详情
	public function getDetailInfoFromId($id){
		$sql = "SELECT `article`.*,`layout`.* ,`picture`.*,`periodicals`.*,`user`.* 
				FROM `article` 
				LEFT JOIN `picture` ON `article`.`pic_id` = `picture`.`pic_id` 
				LEFT JOIN `layout` ON `article`.`l_id` = `layout`.`l_id` 
				LEFT JOIN `periodicals` ON `article`.`p_id`=`periodicals`.`p_id` 
				LEFT JOIN `user` ON `article`.`user_id` = `user`.`user_id` 
				WHERE `article`.`a_id` = '".$id."'  ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//修改学生就业通讯
	public function updatearticle($id,$periods,$banmian,$title,$picid,$content,$userid)
	{
		if($picid == "")
		{
			$sql = "UPDATE `article` SET `a_title` = '".$title."',`p_id` = '".$periods."',`l_id` = '".$banmian."',`pic_id` = NULL,`a_content` = '".$content."'
				WHERE `article`.`a_id` = '".$id."'";
		}
		else
		{
			$sql = "UPDATE `article` SET `a_title` = '".$title."',`p_id` = '".$periods."',`l_id` = '".$banmian."',`pic_id` = '".$picid."',`a_content` = '".$content."'
				WHERE `article`.`a_id` = '".$id."'";
		}
		//echo $sql;
		return $this->update($sql);
	}
	
	public function delqi($id){
		$sql = "DELETE FROM `periodicals` WHERE `periodicals`.`p_id` = ".$id ; 
		if($this->getLayout($id)){
			return -1;//不能删除 期刊下有内容
		}
		if( $this->del($sql) )return 1;
		return false;
	}
	
	public function delban($id){
		$sql = "DELETE FROM `layout` WHERE `layout`.`l_id` = ".$id;
		if($this->getArticleFromLayoutId($id)){
			return -1; //不能删除 期刊下边有内容
		}
		if( $this->del($sql) )return 1;
		return false;
	}
	//选出指定id的期刊号pid
	public function getPlnumFromId($id)
	{
	
		$sql = "SELECT `periodicals`.*,`layout`.* ,`article`.* FROM `article` LEFT JOIN `periodicals` ON `article`.`p_id` = `periodicals`.`p_id` LEFT JOIN `layout` ON `article`.`l_id` = `layout`.`l_id` where `article`.`a_id`='".$id."'";
		//echo $sql;
		return $this->fetchRow($sql);
	}
}