<?php
/**
 * 就业资讯模块的model
 */
//namespace model;

class jobinfo extends Model{
	
	private $__jobnews = 1;//就业动态
	private $__activity = 2;//通知公告
	private $__plan = 3;//职业生涯规划
	private $__search = 4;//求职指导
	private $__start = 5;//创业指导
	private $__process = 6;//创业流程
	
	/**
	 * 获取首页大图推荐的新闻
	 */
	public function getRecNews($num=0){
		$sql = "SELECT `jobinfo`.*,`picture`.* FROM `jobinfo` LEFT JOIN `picture` ON `jobinfo`.`pic_id` = `picture`.`pic_id`  WHERE  `jobinfo`.`ji_recom` IS NOT NULL ORDER BY  `jobinfo`.`ji_recom` DESC ";
		if($num>0){
			$sql.="LIMIT 0,".$num;
		}
		//echo $sql;
		return $this->fetchAll($sql);
	}
	//获取前台新闻
	public function getfrontnews($num = 3, $id)
	{
		$sql = "SELECT `jobinfo`.* FROM `jobinfo` WHERE `jobinfo`.`it_id` = '".$id."' ORDER BY `jobinfo`.`ji_isup` DESC LIMIT ".$num."";
		return $this->fetchAll($sql);
	}
	
	
	public function get_news_page_model($type = 0 , $page = 1 , $num = 10 , $key = null, $recomFirst=false ){
		
		$select = "SELECT `jobinfo`.*,`picture`.* FROM `jobinfo` LEFT JOIN `picture` ON `jobinfo`.`pic_id` = `picture`.`pic_id` ";
		
		
		$filter = ( $type == 0 ) ? " 1 " : " `jobinfo`.`it_id` = '".intval( $type )."' ";
		
		if($key){
			$keyArr  = explode( " ", $key );
			foreach($keyArr as $item){
				$filter .= " AND `jobinfo`.`ji_title` LIKE '%".$item."%' ";
			}
		}
		
		$where = " WHERE ".$filter;
		
		if($recomFirst){
			$order = " ORDER BY `jobinfo`.`ji_recom` DESC, `jobinfo`.`ji_isup` DESC , `jobinfo`.`ji_date` DESC ";
		}else{
			$order = " ORDER BY  `jobinfo`.`ji_isup` DESC , `jobinfo`.`ji_date` DESC ";
		}

		$limit = " Limit ".($page-1)*$num.",".$num."";
		
		$sql = $select.$where.$order.$limit;
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('jobinfo', $filter);
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
		
	}
	
	
	/**
	 * 获取就业动态
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getJobPageModel($page = 1 , $num = 10 , $key = null, $recomFirst=false ){
		
		return $this->get_news_page_model( $this->__jobnews, $page, $num , $key, $recomFirst);

	}
	
	/**
	 * 获取通知公告
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @param string $key
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getActPageModel($page = 1 , $num = 10 ,$key=null, $recomFirst=false){
		
		return $this->get_news_page_model( $this->__activity, $page, $num , $key, $recomFirst);
		
	}
	/**
	 * 获取职业生涯规划
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @return multitype:unknown number
	 */
	public function getPlanPageModel($page = 1 , $num = 10 , $key = null, $recomFirst=false ){
		
		return $this->get_news_page_model( $this->__plan, $page, $num , $key, $recomFirst);
		
	}
	
	/**
	 * 获取求职指导
	 */
	public function getSearchPageModel($page = 1 , $num = 10 ,$key=null, $recomFirst=false ){
		
		return $this->get_news_page_model( $this->__search, $page, $num , $key, $recomFirst);
		
	}
	//
	/**
	 * 获取创业指导
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getStartPageModel($page = 1 , $num = 10 ,$key=null , $recomFirst=false ){
		
		return $this->get_news_page_model( $this->__start, $page, $num , $key, $recomFirst);
		
	}
	//
	/**
	 * 获取创业流程
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getProcessPageModel($page = 1 , $num = 10 ,$key=null, $recomFirst=false){
		
		return $this->get_news_page_model( $this->__process, $page, $num , $key, $recomFirst);
		
	}
	
	/**
	 * 	获取就业新闻分类列表
	 */
	public function getList(){
		$sql='SELECT * FROM `infotype`';
		return $this->fetchAll($sql);
	}
	
	
	//通过id获取信息的详情
	public function getDetailInfoFromId($id){
		
		$sql = "SELECT `jobinfo`.*, `picture`.*, `infotype`.*, `user`.* FROM `jobinfo` INNER JOIN `infotype` ON `jobinfo`.`it_id` = `infotype`.`it_id` LEFT JOIN `picture` ON `jobinfo`.`pic_id` = `picture`.`pic_id` LEFT JOIN `user` ON `jobinfo`.`user_id` = `user`.`user_id` WHERE `jobinfo`.`ji_id` = '".$id."' ";
		$result =  $this->fetchRow($sql);
		if($result){
			$sql = "SELECT `jobinfo_attr`.*, `file`.* FROM `jobinfo_attr`,`file` 
					WHERE `ji_id` = ".$result['ji_id']." AND  `jobinfo_attr`.`file_id`=`file`.`file_id` ";
			$file = $this->fetchRow($sql);
			if($file){
				$result =  array_merge($result,$file);
			}
		}
		return $result;
		
	}
	public function getPreNews($cur_id, $type){
	
		$sql = "SELECT `jobinfo`.* FROM `jobinfo` WHERE `ji_id` > ".$cur_id." AND `it_id` = '".$type."' ORDER BY `ji_id` ASC limit 0,1";
		return $this->fetchRow($sql);
	}
	public function getNextNews($cur_id, $type){
		$sql = "SELECT `jobinfo`.* FROM `jobinfo` WHERE `ji_id` < ".$cur_id." AND `it_id` = '".$type."' ORDER BY `ji_id` DESC limit 0,1 ";
		return $this->fetchRow($sql);
	}
	
	public function addReadnum($id){
		$sql = "UPDATE  `jobinfo` SET  `ji_read` =  `ji_read` +1 WHERE  `jobinfo`.`ji_id` = ".$id." ";
		return $this->update($sql);
	}
	public function addsharenum($id){
		$sql = "UPDATE  `jobinfo` SET  `ji_share` =  `ji_share` +1 WHERE  `jobinfo`.`ji_id` = ".$id." ";
		return $this->update($sql);
	}
	public function addgoodnum($id){
		$sql = "UPDATE  `jobinfo` SET  `ji_good` =  `ji_good` +1 WHERE  `jobinfo`.`ji_id` = ".$id." ";
		if( $this->update($sql)){
			$sql = "SELECT `jobinfo`.`ji_good` from `jobinfo` WHERE  `jobinfo`.`ji_id` = '".$id."' ";
			$nu = $this->fetchRow($sql);
			if($nu){
				return $nu['ji_good'];
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}
	
	public function getjobinfolist($timestamp, $num, $type)
	{
		$sql = "SELECT `jobinfo`.*,`picture`.* FROM `jobinfo` LEFT JOIN `picture` ON `jobinfo`.`pic_id` = `picture`.`pic_id`  
				WHERE `jobinfo`.`it_id` = '".type."' ORDER BY  `jobinfo`.`ji_recom` DESC, `jobinfo`.`ji_isup` DESC , `jobinfo`.`ji_date` DESC Limit ".$num."";
		return $this->fetchAll($sql);
	}
	
	
	//添加就业资讯
	public function addjobinfo($title, $itid, $picid, $userid, $content,$fileid=0,$filename=null)
	{
		if($picid == "")
		{
			$sql = "INSERT INTO `jobinfo`(`ji_title`,`it_id`,`pic_id`,`user_id`,`ji_recom`,`ji_content`,`ji_date`,`ji_isup`) VALUES('".$title."', '".$itid."',NULL,'".$userid."',NULL,'".$content."', NOW(), NULL)";
		}
		else 
		{
			$sql = "INSERT INTO `jobinfo`(`ji_title`,`it_id`,`pic_id`,`user_id`,`ji_recom`,`ji_content`,`ji_date`,`ji_isup`) VALUES('".$title."', '".$itid."','".$picid."','".$userid."',NULL,'".$content."', NOW(), NULL)";
		}
		
		//echo $sql;
		$infoid = $this->insert($sql);
		if($infoid && $fileid > 0){
			$sql = "INSERT INTO 
				`jobinfo_attr` (`jia_id` ,`ji_id` ,`file_id` ,`file_name`)
								VALUES (NULL , '".$infoid."', '".$fileid."', '".$filename."')";
			//echo $sql;
			$this->insert($sql);
		}
		return $infoid;
		
	}
	
	public function getuserid($username)
	{
		$sql="select `user`.`user_id` from `user` where `user`.`user_name`='".$username."' ";
		return $this->fetchRow($sql);
	}
	public function getPicid($link)
	{
		$sql="select `picture`.`pic_id` from `picture` where `picture`.`pic_link`='".$link."' ";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//删除信息
	public function delmsg($id)
	{
		$sql = "DELETE FROM `jobinfo` WHERE `jobinfo`.`ji_id` = '".$id."'" ;
		return $this->del($sql);
	}
	//置顶功能
	public function updateIsup($id)
	{
		$sql = "UPDATE `jobinfo` SET `ji_isup` = NOW() WHERE `jobinfo`.`ji_id` = '".$id."'";
		
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `jobinfo` SET `ji_isup` = NULL WHERE `jobinfo`.`ji_id` = '".$id."'";
		
		return $this->update($sql);
	}
	//推荐功能
	public function updaterecom($id)
	{
		$sql = "UPDATE `jobinfo` SET `ji_recom` = NOW() WHERE `jobinfo`.`ji_id` = '".$id."'";
		return $this->update($sql);
	}
	//取消推荐
	public function cancelrecom($id)
	{
		$sql = "UPDATE `jobinfo` SET `ji_recom` = NULL WHERE `jobinfo`.`ji_id` = '".$id."'";
		return $this->update($sql);
	}
	
	//修改就业资讯
	public function updatemsg($id, $title, $picid, $userid, $content,$jobinfoattrid=0,$fileid=0,$filetitle=null)
	{
		if($picid == "")
		{
			$sql = "UPDATE `jobinfo` SET `ji_title` = '".$title."' ,`pic_id` = NULL,`user_id` = '".$userid."',`ji_recom` = NULL,`ji_content` = '".$content."'
				WHERE `jobinfo`.`ji_id` = '".$id."'";
			
		}
		else
		{
			$sql = "UPDATE `jobinfo` SET `ji_title` = '".$title."' ,`pic_id` = '".$picid."',`user_id` = '".$userid."',`ji_recom` = NULL,`ji_content` = '".$content."' 
				WHERE `jobinfo`.`ji_id` = '".$id."'";
		}
		$result =  $this->update($sql);
		if($result){
			if($jobinfoattrid){
				$sql = "UPDATE `jobinfo_attr` SET `file_id` = '".$fileid."', `file_name` = '".$filetitle."' WHERE `jobinfo_attr`.`jia_id` =".$jobinfoattrid." ";
				//echo $sql;
				$result =  $this->update($sql);
			}else{
				if($fileid>0){
					$sql = "INSERT INTO
								`jobinfo_attr` (`jia_id` ,`ji_id` ,`file_id` ,`file_name`)
								VALUES (NULL , '".$id."', '".$fileid."', '".$filetitle."')";
					//echo $sql;
					$result = $this->insert($sql);
				}
			}
		}
		return $result;
	}
	//搜索信息
	public function getSearchlistPageModel($page = 1 , $num = 10 ,$content){
	
		$sql = "SELECT `jobinfo`.*,`picture`.* FROM `jobinfo` LEFT JOIN `picture` ON `jobinfo`.`pic_id` = `picture`.`pic_id`  
				WHERE `jobinfo`.`ji_title` LIKE '%$content%' OR `jobinfo`.`ji_content` LIKE '%$content%' ORDER BY  `jobinfo`.`ji_recom` DESC, `jobinfo`.`ji_isup` DESC , `jobinfo`.`ji_date` DESC Limit ".($page-1)*$num.",".$num."";
		//echo $sql;
		$list = $this->fetchAll($sql);
		//$sql = "SELECT COUNT(*) FROM `jobinfo` WHERE `jobinfo`.`ji_content` LIKE '%$content%' OR `jobinfo`.`ji_title` LIKE '%$content%'";
		//$count = $this->getTotal($table)
		$total = $this->getTotal('jobinfo', "`jobinfo`.`ji_title` LIKE '%$content%' OR `jobinfo`.`ji_content` LIKE '%$content%'");
		//echo $total;
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	
	
}



?>