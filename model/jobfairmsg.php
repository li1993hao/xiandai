<?php

//namespace model;

class jobfairmsg extends Model{

	//0未处理 ，  1通过，   2拒绝
	protected $_state = array("untreated"=>0,"pass"=>1,"refuse"=>2);

	/**
	 * 获取招聘会信息
	 * state: null所有 ，pass审核通过， refuse拒绝 ， untreated未操作
	 */
	public function getJobfairinfo($page = 1, $num = 6, $state=null){
			$sql = "SELECT `jobfairmsg`.*,`picture`.*,`user`.*
					FROM `jobfairmsg` LEFT JOIN `picture`
					ON `jobfairmsg`.`pic_id` = `picture`.`pic_id`
					LEFT JOIN `user` ON `jobfairmsg`.`user_id` = `user`.`user_id` ";
			if($state!==null){
				$where = " WHERE `jobfairmsg`.`jm_veri` = ".$this->_state[$state];
			}
			$order = " ORDER BY  `jobfairmsg`.`jm_isup` DESC , `jobfairmsg`.`jm_date` DESC Limit ".($page-1)*$num.",".$num."";
		return $this->fetchAll($sql);
	}
	public function getJobfairMsgFromTime($start,$end){


		$sql = "SELECT `jobfairmsg`.`jm_id`, `jobfairmsg`.`jm_name`, `jobfairmsg`.`jm_addr`, UNIX_TIMESTAMP(`jobfairmsg`.`jm_opentime`) AS `jm_opentimestamp` FROM `jobfairmsg`
				WHERE `jm_veri` = ".$this->_state["pass"]." AND `jm_opentime`>='".$start."' AND `jm_opentime`<='".$end."' ";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	//获取前台右侧招聘会信息
	public function getfrontjobfair($num = 5)
	{
		$today = strtotime(date('Y-m-d',time()));
		$sql = "SELECT `jobfairmsg`.* FROM `jobfairmsg` WHERE `jm_veri` = ".$this->_state["pass"]." AND UNIX_TIMESTAMP(`jobfairmsg`.`jm_opentime`) >=".$today." ORDER BY `jobfairmsg`.`jm_opentime` ASC Limit 0,".$num."";
		return $this->fetchAll($sql);
	}
	//
	/**
	 * 通过id获取信息的详情
	 * state: null所有 ，pass审核通过， refuse拒绝 ， untreated未操作
	 * $fu_id: 用户的id
	 */
	public function getDetailInfoFromId($id,$fu_id=null,$state=null){

		$sql = "SELECT `jobfairmsg`.*,`picture`.*,`user`.*,`file`.*,`company`.* FROM `jobfairmsg`
		LEFT JOIN `picture` ON `jobfairmsg`.`pic_id` = `picture`.`pic_id`
		LEFT JOIN `file` ON `jobfairmsg`.`file_id` = `file`.`file_id`
		LEFT JOIN `user` ON `jobfairmsg`.`user_id` = `user`.`user_id`
		LEFT JOIN `company` ON `jobfairmsg`.`jm_publish` = `company`.`com_id`  ";
		$where = " WHERE `jobfairmsg`.`jm_id` = '".$id."' ";
		if($fu_id !== null){
			$where .= " AND `jobfairmsg`。`jm_publish`=".$fu_id." ";
		}

		if($state !== null){
			$where .= " AND `jobfairmsg`。`jm_veri` = ".$this->_state[".$state."]." ";
		}
		//echo $sql.$where;
		return $this->fetchRow($sql.$where);
	}
	//由id获取招聘会信息
	public function getsomeDetailInfoFromId($id,$fu_id=null,$state=null){
		$sql = "SELECT `jobfairmsg`.*,`picture`.*,`user`.*,`file`.* FROM `jobfairmsg`
		LEFT JOIN `picture` ON `jobfairmsg`.`pic_id` = `picture`.`pic_id`
		LEFT JOIN `file` ON `jobfairmsg`.`file_id` = `file`.`file_id`
		LEFT JOIN `user` ON `jobfairmsg`.`user_id` = `user`.`user_id`
		WHERE `jobfairmsg`.`jm_id` = '".$id."'";
		//echo $sql;
		return $this->fetchRow($sql);
	}
	//获取图片链接
	public function getPicid($link)
	{
		$sql="select `picture`.`pic_id` from `picture` where `picture`.`pic_link`='".$link."' ";
		return $this->fetchRow($sql);
	}

	public function getPreNews($cur_id){

		$sql = "SELECT `jobfairmsg`.* FROM `jobfairmsg` WHERE `jm_veri` = ".$this->_state["pass"]." AND `jm_id` > ".$cur_id."   ORDER BY `jm_id` ASC ";
		return $this->fetchRow($sql);
	}
	public function getNextNews($cur_id){
		$sql = "SELECT `jobfairmsg`.* FROM `jobfairmsg` WHERE `jm_veri` = ".$this->_state["pass"]." AND `jm_id` < ".$cur_id."  ORDER BY `jm_id` DESC ";
		return $this->fetchRow($sql);
	}

	public function addReadnum($id){
		$sql = "UPDATE  `jobfairmsg` SET  `jm_read` =  `jm_read` +1 WHERE  `jobfairmsg`.`jm_id` = ".$id." ";
		return $this->update($sql);
	}
	public function addsharenum($id){
		$sql = "UPDATE  `jobfairmsg` SET  `jm_share` =  `jm_share` +1 WHERE  `jobfairmsg`.`jm_id` = ".$id." ";
		return $this->update($sql);
	}
	public function addgoodnum($id){
		$sql = "UPDATE  `jobfairmsg` SET  `jm_good` =  `jm_good` +1 WHERE  `jobfairmsg`.`jm_id` = ".$id." ";
		if( $this->update($sql)){
			$sql = "SELECT `jobfairmsg`.`jm_good` from `jobfairmsg` WHERE  `jobfairmsg`.`jm_id` = '".$id."' ";
			$nu = $this->fetchRow($sql);
			if($nu){
				return $nu['jm_good'];
			}else{
				return 0;
			}
		}else{
			return 0;
		}

	}

	/**
	 * 获取招聘会信息
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @param unknown_type $key
	 * @param unknown_type $type 1所有 2申请中 3已通过 4 未通过 5非就业中心的所有待审核信息
	 * @param unknown_type $publish
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getJobfairPageModel($page = 1 , $num = 0 , $key=null,$state=null, $publish=null,$islog = 1 ){

		$select = "SELECT `jobfairmsg`.*,`picture`.*
				FROM `jobfairmsg` LEFT JOIN `picture` ON `jobfairmsg`.`pic_id` = `picture`.`pic_id` ";
		$filter = " 1 ";
		if($key){
			//echo $key;
			$keyArr  = explode(" ",$key);
			foreach($keyArr as $item){
				$filter .= " AND `jobfairmsg`.`jm_name` LIKE '%".$item."%' ";
			}
		}
		if($state==null || $state==1){
			$filter.=" AND 1 ";
		}elseif ($state == 2){
			$filter.= " AND `jobfairmsg`.`jm_veri` = ".$this->_state["untreated"]." ";
		}elseif($state == 3){
			$filter.= " AND `jobfairmsg`.`jm_veri` = ".$this->_state["pass"]." ";
		}elseif($state == 4){
			$filter.= " AND `jobfairmsg`.`jm_veri` = ".$this->_state["refuse"]." ";
		}elseif($state == 5){
			$filter.= " AND ( `jobfairmsg`.`jm_veri` = ".$this->_state["refuse"]." OR `jobfairmsg`.`jm_veri` = ".$this->_state["untreated"]." ) ";
		}
		if($publish){
			$filter.= "AND `jobfairmsg`.`jm_publish` = '".$publish."'";
		}
		if($islog == 1){
			$filter.="AND 1";
		}else{
			$filter.="AND `jobfairmsg`.`jm_isopen` = 1";
		}
		$where = " WHERE ".$filter;

		$order = " ORDER BY  `jobfairmsg`.`jm_isup` DESC , `jobfairmsg`.`jm_opentime` DESC ";

		$limit = $num > 0 ? " Limit ".($page-1)*$num.",".$num." " : "";

		$sql = $select.$where.$order.$limit;
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('jobfairmsg',$filter);

		$totalPage = $num > 0 ? ceil($total / $num) : 1;

		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}


	public function searchjobfairmsg($key, $page, $num){
		$sql = "SELECT `jobfairmsg`.*,`picture`.* FROM `jobfairmsg`
				LEFT JOIN `picture` ON `jobfairmsg`.`pic_id` = `picture`.`pic_id`
				WHERE `jobfairmsg`.`jm_name` LIKE '%$key%'
				OR `jobfairmsg`.`jm_content` LIKE '%$key%'
				ORDER BY  `jobfairmsg`.`jm_isup` DESC , `jobfairmsg`.`jm_opentime` DESC Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('jobfairmsg', " `jobfairmsg`.`jm_name` LIKE '%$key%'
				OR `jobfairmsg`.`jm_content` LIKE '%$key%'");
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);

	}
	/**
	 * 获取从今天开始的近期的招聘信息
	 * 如果今天往后的数目超过$num条则返回包括今天在内的最近$num条 如果不足则用今天之前的补充
	 */
	public function getRecentCorpMsg($num,$islog = 1, $state="pass" ){
		$result = false;
		//echo date('Y-m-d',time());
		$today = strtotime(date('Y-m-d',time()));
		if($islog == 1){
			$filter=" AND 1 ";
		}else{
			$filter=" AND `jobfairmsg`.`jm_isopen` = 1 ";
		}
		$sql = "SELECT `jobfairmsg`.*,`picture`.* FROM `jobfairmsg`
				LEFT JOIN `picture` ON `jobfairmsg`.`pic_id` = `picture`.`pic_id`
				WHERE `jobfairmsg`.`jm_veri` = ".$this->_state["$state"]." AND UNIX_TIMESTAMP(`jobfairmsg`.`jm_opentime`) >=".$today.""
				.$filter.
				"ORDER BY   `jobfairmsg`.`jm_opentime` ASC Limit 0,".$num." ";

		//echo $sql;

		$result1 = $this->fetchAll($sql);
		$count = $result1 ? count($result1): 0 ;
		if( $count < $num ){
			$sql = "SELECT `jobfairmsg`.*,`picture`.* FROM `jobfairmsg`
					LEFT JOIN `picture` ON `jobfairmsg`.`pic_id` = `picture`.`pic_id`
					WHERE `jobfairmsg`.`jm_veri` =".$this->_state["$state"]." AND UNIX_TIMESTAMP(`jobfairmsg`.`jm_opentime`) <".$today.""
					.$filter.
					"ORDER BY   `jobfairmsg`.`jm_opentime` DESC Limit 0,".($num-count($result1))." ";
			//echo $sql;
			$result2 = $this->fetchAll($sql);
			if($result2){

				for( $i = count($result2)-1 ; $i >=0 ; $i--){
					$result[] = $result2[$i];
				}
			}

		}
		if($result1){
			for($i = 0 ; $i<$count ;$i++){
				$result[]=$result1[$i];
			}
		}
		return $result;
	}
	//添加招聘会信息
	public function addjobfairmsg($name, $addr, $link, $opentime, $picid, $userid, $require,$content, $fuId,$news, $notice,$filetitle=null,$fileid=null,$areaid=null,$isopen)
	{
		if($fileid == ""){
			$file = "NULL,NULL";
		}else{
			$file = " '".$fileid."', '".$filetitle."'";
		}
		if($picid == ""){
			$pic = "NULL";
		}else{
			$pic = "'".$picid."'";
		}
		if($fuId == "0"){
			$veri = $this->_state["pass"];
		}else{
			$veri = $this->_state["untreated"];
		}

		$sql = "INSERT INTO `jobfairmsg` "
			 . "(`jm_id`, `jm_name`, `jm_addr`, `file_id`, `file_name`, `jm_link`, "
			 . "`jm_opentime`, `jm_date`, `pic_id`, `user_id`, `jm_read`, `jm_share`, "
			 . "`jm_isup`, `jm_require`, `jm_content`, `jm_publish`, `jm_good`, `jm_veri`, `jm_news`, `jm_notice`,`area_id`,`jm_isopen`) "
			 . " VALUES "
			 . "(NULL, '".$name."', '".$addr."', ".$file.", '".$link."', "
			 . "'".$opentime."', NOW(), ".$pic.",'".$userid."', '0', '0', "
			 . "NULL, '".$require."', '".$content."', '".$fuId."', '0', ".$veri.", '".$news."','".$notice."','".$areaid."','".$isopen."');";
		//echo $sql;
		return $this->insert($sql);
	}


	public function getuserid($username){
		$sql="select `user`.`user_id` from `user` where `user`.`user_name`='".$username."' ";
		return $this->fetchRow($sql);
	}

	/**
	 * 删除招聘会信息 (不是自己的信息是不能删的)
	 * $id 信息的id $fu_id 前台用户的id
	 * 注意：为防止系统漏洞用户删除其他人的信息， web前台调用此接口必须填写用户的fu_id
	 */
	public function delmsg($id,$fu_id=0){
		if($fu_id==0){
			$sql = "DELETE FROM `jobfairmsg` WHERE `jobfairmsg`.`jm_id` = '".$id."'" ;
		}else{
			$sql = "DELETE FROM `jobfairmsg` WHERE `jobfairmsg`.`jm_id` = '".$id."' AND `jm_publish`=".$fu_id ;
		}

		if($this->del($sql)){//删除关注信息
			$sql = "DELETE FROM `collect` WHERE `collect`.`coll_info_id` = $id AND `coll_type` = 0 ";
			$this->del($sql);
			return true;
		}else{
			return false;
		}
	}
	//招聘会信息置顶
	public function updateIsup($id)
	{
		$sql = "UPDATE `jobfairmsg` SET `jm_isup` = NOW() WHERE `jobfairmsg`.`jm_id` = '".$id."'";
		return $this->update($sql);
	}
	//取消置顶
	public function cancelup($id)
	{
		$sql = "UPDATE `jobfairmsg` SET `jm_isup` = NULL WHERE `jobfairmsg`.`jm_id` = '".$id."'";
		return $this->update($sql);
	}

	//修改招聘会信息
	public function editjobfairmsg($id, $name, $addr, $link, $opentime, $picid,$userid, $content, $news, $notice,$filename=null,$fileid=null,$require=null,$areaid=null,$fu_id=0,$isopen)
	{
		if( $picid == null ){
			$picid = "NULL";
		}
		if( $fileid ==null ){
			$fileid="NULL";
			$filename ="NULL";
		}
		//echo $require;
		$sql = "UPDATE `jobfairmsg`
					SET
						`jm_name` = '".$name."',
						`jm_addr` = '".$addr."',
						`jm_link` = '".$link."',
						`jm_opentime` = '".$opentime."',
						`pic_id` = '".$picid."',
						`user_id` = '".$userid."',
						`jm_require` = '".$require."',
						`jm_content` = '".$content."',
						`jm_news` = '".$news."',
						`jm_notice` = '".$notice."',
						`file_name` = '".$filename."',
						`file_id` = '".$fileid."',
						`area_id` = '".$areaid."',
						`jm_isopen` = '".$isopen."'
					WHERE `jobfairmsg`.`jm_id` = '".$id."' AND `jobfairmsg`.`jm_publish`=".$fu_id;

		//echo $sql;
		return $this->update($sql);
	}

	/**
	 * 获取招聘会一段时间内招聘会信息的数目
	 * @param unknown_type $start
	 * @param unknown_type $end
	 * @return number
	 */
	public function getJobfairMsgNum($start=null,$end=null){
		$filter = " WHERE `jm_veri` = ".$this->_state['pass']." ";
		if($start&&$end){
			$filter.=" `jm_date` > '".$start."' AND `jm_date` < '".$end."' ";
		}
		return $this->getTotal("jobfairmsg",$filter);
	}


	public function getcalendarbymonth($date, $type){
		$sql = "SELECT * FROM `jobfairmsg` ";
		//$where = " WHERE `jm_opentime` LIKE '$date%'";
		$where = " WHERE `jm_veri` = ".$this->_state['pass']." ";
		if($type == 0){
			$where .= " AND TO_DAYS(`jobfairmsg`.`jm_opentime`)  =  TO_DAYS('".$date."')";
		}elseif($type == 1){
			$where .= " AND TO_DAYS(`jobfairmsg`.`jm_opentime`) - TO_DAYS( '".$date."') = 1";
		}else{
			$where .= " AND TO_DAYS(`jobfairmsg`.`jm_opentime`) - TO_DAYS( '".$date."') <= 7 AND TO_DAYS(`jobfairmsg`.`jm_opentime`) - TO_DAYS( '".$date."') >= 0";
		}

		$order = " ORDER BY `jm_opentime` ASC";
		//echo $sql.$where.$order;
		return $this->fetchAll($sql.$where.$order);
	}

	/**
	 * 根据企业获取最近招聘会
	 * @param unknown_type $fuId
	 * @param $num 数量
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getRecentByCompanyId($fuId,$num=5){

		//echo $today;
		$sql = "SELECT `jobfairmsg`.* FROM `jobfairmsg` "
			 . "WHERE `jm_veri` = ".$this->_state['pass']." AND `jobfairmsg`.`jm_publish`='".$fuId."' "
			 . "ORDER BY   `jobfairmsg`.`jm_opentime` ASC LIMIT 0,".$num;
		//echo $sql;
		return $this->fetchAll($sql);
	}

	/**
	 * 审核信息
	 * @param unknown_type $infoid
	 * @param unknown_type $time
	 * @param unknown_type $address
	 */
	public function passinfo($infoid, $time, $address){
		$sql = "UPDATE `jobfairmsg`
				SET `jm_opentime` = '".$time."',
					`jm_addr` = '".$address."',
					`jm_veri` = ".$this->_state['pass']."
				WHERE `jm_id` = " . $infoid ;
		//echo $sql;
		return $this->update($sql);
	}


	public function rejectreason($infoid, $reason){
		$sql = "UPDATE `jobfairmsg`
				SET `jm_reason` = '".$reason."',
				    `jm_veri` = ".$this->_state['refuse']."
				WHERE `jm_id` = " .$infoid;
		return $this->update($sql);
	}




}

?>