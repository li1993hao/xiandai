<?php
class westwork extends Model{
	
	private $__newsColumnId = 1;//西部就业动态
	private $__personColumnId = 3;//西部就业典型人物
	private $__policyColumnId = 2;//西部就业相关政策
	
	/**
	 * 获取西部就业栏目列表
	 */
	public function getSortList(){
		$sql='SELECT * FROM `westworkcolumn` ';
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取所有西部就业动态
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getNews($page = 1,$num=10){
		
		$sql = "SELECT `westwork`.*,`picture`.* FROM `westwork` LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  WHERE `westwork`.`wc_id` = '".$this->__newsColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC Limit ".($page-1)*$num.",".$num." ";
		return $this->fetchAll($sql);
	}
	
	public function getNewsPageModel($page = 1 , $num = 10 ){
		
		$sql = "SELECT `westwork`.*,`picture`.* FROM `westwork` LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  WHERE `westwork`.`wc_id` = '".$this->__newsColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC Limit ".($page-1)*$num.",".$num." ";
	//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('westwork'," `westwork`.`wc_id` = '".$this->__newsColumnId."' ");	
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	
	public function getPolicyPageModel($page = 1 , $num = 10 ){
	
		$sql = "SELECT `westwork`.*,`picture`.* FROM `westwork` LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  WHERE `westwork`.`wc_id` = '".$this->__policyColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('westwork'," `westwork`.`wc_id` = '".$this->__policyColumnId."' ");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	public function getPersonPageModel($page = 1 , $num = 10 ){
	
		$sql = "SELECT `westwork`.*,`picture`.* FROM `westwork` LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  WHERE `westwork`.`wc_id` = '".$this->__personColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('westwork'," `westwork`.`wc_id` = '".$this->__personColumnId."' ");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	/**
	 * 获取西部就业人物
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getPersons($page=1,$num=3){
		$sql = "SELECT `westwork`.*,`picture`.* FROM `westwork` LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  WHERE `westwork`.`wc_id` = '".$this->__personColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC  Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	
	/**
	 * 获取西部就业政策
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getPolicy($page=1,$num=6){
		$sql = "SELECT `westwork`.*,`picture`.* FROM `westwork` LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  WHERE `westwork`.`wc_id` = '".$this->__policyColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC Limit ".($page-1)*$num.",".$num." ";
		return $this->fetchAll($sql);
	}
	
	/**
	 * 
	 */
	public function getNewsPolicy($page=1,$num=6){
		$sql = "SELECT `westwork`.* FROM `westwork`   WHERE `westwork`.`wc_id` != '".$this->__personColumnId."' ORDER BY  `westwork`.`ww_isup` DESC , `westwork`.`ww_time` DESC Limit ".($page-1)*$num.",".$num." ";
		return $this->fetchAll($sql);
	}
	
	/**
	 * 通过id获取信息的详情
	 * @param unknown_type $id
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getDetailInfoFromId($id){
		$sql = "SELECT `westwork`.*,`picture`.*,`westworkcolumn`.*,`user`.* 
				FROM `westwork` 
				INNER JOIN `westworkcolumn` ON `westwork`.`wc_id` = `westworkcolumn`.`wc_id` 
				LEFT JOIN `picture` ON `westwork`.`pic_id` = `picture`.`pic_id`  
				LEFT JOIN `user` ON `user`.`user_id` = `user`.`user_id` 
				WHERE `westwork`.`ww_id` = '".$id."'  ";
		return $this->fetchRow($sql);
	}
	
	public function getPreNews($cur_id,$type){
		
		$sql = "SELECT `westwork`.* FROM `westwork` WHERE `ww_id` < ".$cur_id." AND `wc_id` = '".$type."' ORDER BY `ww_id` DESC ";
		return $this->fetchRow($sql);
	}
	public function getNextNews($cur_id,$type){
		$sql = "SELECT `westwork`.* FROM `westwork` WHERE `ww_id` > ".$cur_id." AND `wc_id` = '".$type."' ORDER BY `ww_id` ASC ";
		return $this->fetchRow($sql);
	}
	
	public function addReadnum($id){
		$sql = "UPDATE  `westwork` SET  `ww_read` =  `ww_read` +1 WHERE  `westwork`.`ww_id` = ".$id." ";
		return $this->update($sql);
	}
	
	public function addShareNum($id){
		$sql = "UPDATE  `westwork` SET  `ww_share` =  `ww_share` +1 WHERE  `westwork`.`ww_id` = ".$id." ";
		return $this->update($sql);
	}
	/**
	 * 删除新闻
	 * @param unknown_type $id
	 */
	public function delinfo($id){
		$sql = "DELETE FROM `westwork` WHERE `westwork`.`ww_id` = ".$id.";";
		return $this->del($sql);
	}
	
	/**
	 * 置顶新闻
	 * @param unknown_type $id
	 * @return resource
	 */
	public function upinfo($id){
		$sql = "UPDATE  `westwork` SET  `ww_isup` = NOW( ) WHERE  `westwork`.`ww_id` =".$id.";";
		return $this->update($sql);
	}
	
	/**
	 * 取消置顶新闻
	 * @param unknown_type $id
	 * @return resource
	 */
	public function cancelupinfo($id){
		$sql = "UPDATE  `westwork` SET  `ww_isup` = NULL WHERE  `westwork`.`ww_id` =".$id.";";
		return $this->update($sql);
	}
	
	/**
	 * 添加新闻
	 * @param unknown_type $title
	 * @param unknown_type $wc_id
	 * @param unknown_type $pic_id
	 * @param unknown_type $user_id
	 * @param unknown_type $content
	 * @return Ambigous <boolean, number>
	 */
	public function addinfo($title,$wc_id,$pic_id,$user_id,$content){
		if($pic_id==""){
			$sql = "INSERT INTO `westwork` (`ww_id`, `ww_title`, `wc_id`, `pic_id`, `ww_isup`, `user_id`, `ww_content`, `ww_time`, `ww_share`, `ww_read`) VALUES (NULL, '".$title."', '".$wc_id."', NULL, NULL, '".$user_id."', '".$content."', NOW(), '0', '0');";
		}else{
			$sql = "INSERT INTO `westwork` (`ww_id`, `ww_title`, `wc_id`, `pic_id`, `ww_isup`, `user_id`, `ww_content`, `ww_time`, `ww_share`, `ww_read`) VALUES (NULL, '".$title."', '".$wc_id."', '".$pic_id."', NULL, '".$user_id."', '".$content."', NOW(), '0', '0');";
		}
		//echo $sql;
		return $this->insert($sql);
	}
	
	public function modifyinfo($id,$arr){
		if($arr){
			reset($arr);
			list($key, $val) = each($arr);
			$str = " `".$key."` = '".$val."' ";
			while (list($key, $val) = each($arr)) {
				//echo "$key => $val\n";
			if($val){
					$str .= " , `".$key."` = '".$val."' ";
				}else{
					$str .= " , `".$key."` = NULL ";
				}
			}
			$sql = "UPDATE `westwork` SET ".$str." WHERE `ww_id` =".$id."  LIMIT 1" ;
			//echo $sql;
			return $this->update($sql);
		}else{
			return false;
		}
	}
}