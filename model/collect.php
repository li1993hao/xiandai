<?php
class collect extends Model {
	/**
	 *
	 * @name 插入收藏 如果已经插入过返回 -1
	 * @author lsq
	 * @return 已经插入过：-1 插入失败：0 插入成功：总数
	 */
    /** 根据用户ID获取用户详细信息 */
    public function getappuserinfobyuserid($id){
        $sql="select * from student where fu_id=$id";
        return $this->fetchRow($sql);
    }
	public function add($userId, $id, $flag, $type) {
		//6/218/1/1
		if ($this->haveCollect ( $userId, $id, $type )) {
			
			return - 1;
		}
        /** @var 推送 $frontuser */

        $front_arr=$this->getappuserinfobyuserid($userId);
        $stu_name=$front_arr[stu_name];
        if($type==0){
            $sql="select f.fu_id from frontuser f left join jobfairmsg  jm on f.fu_id=jm.user_id where jm.jm_id=$id";
            $com_arr=$this->fetchrow($sql);
            $fu_id=$com_arr[fu_id];
        }else{
            $sql="select f.fu_id from frontuser f left join corpinternmsg  cm on f.fu_id=cm.cim_publish where cm.cim_id=$id ";
            $com_arr=$this->fetchrow($sql);
            $fu_id=$com_arr[fu_id];

        }
        $platform = 'android,ios'; // 接受此信息的系统
        $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"$stu_name.'收藏了您的信息，并对您公布了TA的信息'",'n_extras'=>array('type'=>$type)));
        //var_dump($msg_content);
        $j=new jpush();
        //$j->send(18,3,$company_num,1,$msg_content,$platform);
        $j->send(18,3,$fu_id,1,$msg_content,$platform);
		/** @var 推送结束 $sql */
		$sql = "INSERT INTO `collect`
				(`fu_id`, `coll_info_id`, `coll_type`, `coll_open_myinfo`, `coll_time`)
				VALUES 
				('" . $userId . "', '" . $id . "', '" . $type . "', '" . $flag . "', NOW())";
		//echo $sql;
		return $this->insert ( $sql ) ? $this->getCollectNum ( $id, $type ) : 0;
	}
	public function haveCollect($userId, $id, $type=null) {
		if($type == null){
		$type = '';
		}else{
		$type = " AND  `coll_type` =" . $type ;
		}
		//$sql = "SELECT * FROM  `collect` WHERE  `fu_id` =" . $userId . " AND  `coll_info_id` =" . $id . " AND  `coll_type` =" . $type . " LIMIT 1";
		$sql = "SELECT * FROM  `collect` WHERE  `fu_id` =" . $userId . " AND  `coll_info_id` =" . $id . $type. " LIMIT 1";
		//echo $sql;
		return $this->fetchRow ( $sql );
	}
	
	/**
	 *
	 * @name 删除收藏
	 * @author lsq
	 * @return 失败：false 成功：收藏数
	 */
	public function delete($userId, $id, $type) {
		$sql = "DELETE FROM `collect` 
				WHERE `fu_id` = '" . $userId . "' 
				  And `coll_info_id` = '" . $id . "'
				  And `coll_type` = '" . $type . "'";
// 		echo  $sql;
		return $this->del ( $sql ) ? $this->getCollectNum ( $id, $type ) : false;
	}
	
	/**
	 *
	 * @name 根据招聘类型与id获取收藏数量
	 * @author lsq
	 * @return boolean
	 */
	public function getCollectNum($id, $type) {
		$sql = "select COUNT(`collect`.`coll_id`)
				from `collect`
				where `collect`.`coll_info_id`='" . $id . "'
				  and `collect`.`coll_type`='" . $type . "'";
		// echo $sql;
		return $this->fetchRow ( $sql );
	}
	
	/**
	 *
	 * @name 根据userid获取收藏列表
	 * @typeud  0招聘会信息  1 招聘信息 2 实习信息 3 基层招聘信息
	 * @author lsq
	 * @return array
	 */
	public function getCollectList($userid, $typeid, $page = 1, $num = 10) {
		$sql = "select `collect`.`coll_time`,`c`.* 
				from `collect` ";
		if ($typeid == 0) { // 招聘会
			$sql .= "left join `jobfairmsg` as `c` on `collect`.`coll_info_id`=`c`.`jm_id` 
				where `collect`.`coll_type`='0'
				  and `collect`.`fu_id`='" . $userid . "' AND `c`.`jm_id` = `collect`.`coll_info_id`
				ORDER BY  `c`.`jm_isup` DESC , `c`.`jm_date` DESC ";
		} else {
			$sql .= "left join `corpinternmsg` as `c` on `collect`.`coll_info_id`=`c`.`cim_id`
				where `collect`.`coll_type`='" . $typeid . "'
				  and `collect`.`fu_id`='" . $userid . "'
				ORDER BY  `c`.`cim_isup` DESC , `c`.`cim_date` DESC ";
		}
// 				  and `c`.`rit_id`='" . $typeid . "'
		$sql .= "Limit " . ($page - 1) * $num . "," . $num;
		//echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 *
	 * @name 根据userid获取感兴趣学生列表
	 * @author linkai
	 * @return array
	 */
	public function getFavStudentList($userid, $page = 1, $num = 10) {
		$sql = "SELECT DISTINCT `student`.* FROM `collect`
			LEFT JOIN `corpinternmsg` ON (`corpinternmsg`.`cim_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=0)
			LEFT JOIN `jobfairmsg` ON (`jobfairmsg`.`jm_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=1)
			LEFT JOIN `student` ON (`student`.`fu_id`=`collect`.`fu_id` )
			WHERE `corpinternmsg`.`cim_publish`=$userid OR `jobfairmsg`.`jm_publish`=$userid
			ORDER BY  `collect`.`coll_time` DESC  "; // TODO
		$sql .= "Limit " . ($page - 1) * $num . "," . $num;
// 		echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 * 筛选对我感兴趣的学生
	 *
	 * @param unknown_type $fuId        	
	 * @param unknown_type $type        	
	 * @param unknown_type $page        	
	 * @param unknown_type $num        	
	 * @param unknown_type $infoId        	
	 * @param unknown_type $pro        	
	 * @param unknown_type $time        	
	 * @return multitype:unknown number
	 */
	public function getInterestedstudentsByFuId($fuId, $type, $flag = 0, $infoId = 0, $pro = 0, $time = 0, $page = 1, $num = 10) {
		$today = strtotime ( date ( 'Y-m-d', time () ) );
		$timeRange = $today - (3600 * $time * 24);
		if($flag == 0){
			if ($type == 0) {
				$select = "SELECT `collect`.*, `jobfairmsg`.`jm_name` AS info_name, `student`.*
								FROM `collect` "
						. "LEFT JOIN `jobfairmsg` ON `collect`.`coll_info_id` = `jobfairmsg`.`jm_id` "
								. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter = " WHERE `jobfairmsg`.`jm_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			} else {
				$select = "SELECT `collect`.*, `corpinternmsg`.`cim_name` AS info_name, `student`.* FROM `collect` "
						. "LEFT JOIN `corpinternmsg` ON `collect`.`coll_info_id` = `corpinternmsg`.`cim_id` "
								. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter =  " WHERE `corpinternmsg`.`cim_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			}
		}else if ($flag == 1){
			if ($type == 0) {
				$select = "SELECT DISTINCT `collect`.`coll_info_id`, `jobfairmsg`.`jm_name` AS info_name FROM `collect` "
						. "LEFT JOIN `jobfairmsg` ON `collect`.`coll_info_id` = `jobfairmsg`.`jm_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter = " WHERE `jobfairmsg`.`jm_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			} else {
				$select = "SELECT DISTINCT `collect`.`coll_info_id`, `corpinternmsg`.`cim_name` AS info_name FROM `collect` "
						. "LEFT JOIN `corpinternmsg` ON `collect`.`coll_info_id` = `corpinternmsg`.`cim_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter =  " WHERE `corpinternmsg`.`cim_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			}
		}else{
			if ($type == 0) {
				$select = "SELECT DISTINCT `student`.`stu_pro` FROM `collect` "
						. "LEFT JOIN `jobfairmsg` ON `collect`.`coll_info_id` = `jobfairmsg`.`jm_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter = " WHERE `jobfairmsg`.`jm_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			} else {
				$select = "SELECT DISTINCT DISTINCT `student`.`stu_pro` FROM `collect` "
						. "LEFT JOIN `corpinternmsg` ON `collect`.`coll_info_id` = `corpinternmsg`.`cim_id` "
						. "LEFT JOIN `student` ON `collect`.`fu_id` = `student`.`fu_id` ";
				$filter =  " WHERE `corpinternmsg`.`cim_publish`=".$fuId." AND `collect`.`coll_type` = '" . $type . "' AND `collect`.`coll_open_myinfo` = '1' ";
			}
		}
		
		if ($infoId) {
			$filter .= "AND `collect`.`coll_info_id` = '" . $infoId . "' ";
		}
		if ($pro) {
			$filter .= "AND `student`.`stu_pro` = '" . $pro . "' ";
		}
		if ($time) {
			$filter .= "AND UNIX_TIMESTAMP(`collect`.`coll_time`) >= " . $timeRange . " ";
		}
		$order = "ORDER BY `collect`.`coll_time` DESC ";
		$limit = "LIMIT " . ($page - 1) * $num . "," . $num . " ";
		$sql = $select . $filter . $order . $limit;
		// echo $sql;
		$sqlTotal = $select . $filter . $order;
		if ($flag == 0) {
			$list = $this->fetchAll ( $sql );
			$total = count ( $this->fetchAll ( $sqlTotal ) );
			$totalPage = ceil ( $total / $num );
			return array (
					'page' => $page,
					'list' => $list,
					'total' => $total,
					'totalPage' => $totalPage 
			);
		} else {
			// echo $sqlTotal;
			return $this->fetchAll ( $sqlTotal );
		}
	}

    /** 点赞提交
     * 赫建武APP
     * type=0表示招聘会，为其他表示招聘信息和实习信息。
     */
    public function do_app_good($userId=0,$msg_id,$type){
        if($type==0){
            $sql="update jobfairmsg set jm_good=jm_good+1 where jm_id=$msg_id";

        }else{
            $sql="update corpinternmsg set cim_good=cim_good+1 where cim_id=$msg_id";

        }
        $sql1="insert into tj_zan (user_id,post_id,post_type,zan_time) values ('".$userId."','".$msg_id."','".$type."','".date('Y-m-d H:i:s',time())."')";
        $this->insert($sql1);
        return $this->update($sql);
    }
    /** 统计信息收藏数目 */
    public function getAppCollectNum($id, $type) {
        $sql = "select COUNT(`collect`.`coll_id`) num
				from `collect`
				where `collect`.`coll_info_id`='" . $id . "'
				  and `collect`.`coll_type`='" . $type . "'";
        // echo $sql;
        return $this->fetchRow ( $sql );
    }
    /** 验证是否已经收藏！ */
    public function valid_if_col($fu_id,$info_id,$type){
        $sql="select * from collect where fu_id=$fu_id and coll_info_id='".$info_id."' and coll_type='".$type."'";
        return $this->fetchRow($sql);
    }
    /** 提交收藏信息 */
    public function sub_col_info($fu_id,$info_id,$type,$if_scan,$time){
        $sql="insert into collect (fu_id,coll_info_id,coll_type,coll_open_myinfo,coll_time) values ('".$fu_id."','".$info_id."','".$type."','".$if_scan."','".$time."')";
        return $this->insert($sql);
    }
    /** 获取学生收藏信息，0-招聘会信息，1-表示企业，2-实习 */
    public function getappcolinfo($fu_id,$coll_type,$num){
        if($coll_type==0){
            $sql="select collect.*,jobfairmsg.jm_name cim_name  from collect left join jobfairmsg on collect.coll_info_id=jobfairmsg.jm_id where collect.fu_id=$fu_id and collect.coll_type=$coll_type limit $num ,10";
        }else{
            $sql="select collect.*,corpinternmsg.cim_name from collect left join corpinternmsg on collect.coll_info_id=corpinternmsg.cim_id where collect.fu_id=$fu_id and collect.coll_type=$coll_type limit $num ,10";
        }
        return $this->fetchAll($sql);
    }
    /** 感兴趣的学生列表 */
    public function getappfavstudentlist($userid, $num = 10) {
        $sql = "SELECT DISTINCT `student`.* FROM `collect`
			LEFT JOIN `corpinternmsg` ON (`corpinternmsg`.`cim_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=1)
			LEFT JOIN `jobfairmsg` ON (`jobfairmsg`.`jm_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=0)
			LEFT JOIN `student` ON (`student`.`fu_id`=`collect`.`fu_id` )
			WHERE `corpinternmsg`.`cim_publish`=$userid OR `jobfairmsg`.`jm_publish`=$userid
			ORDER BY  `collect`.`coll_time` DESC  "; // TODO
        $sql .= "Limit " . $num . "," . 10;

// 		echo $sql;
        return $this->fetchAll ( $sql );
    }
    /** 删除收藏的信息 */
    public function app_delete_collect($userId, $id, $type) {

        $sql = "DELETE FROM `collect`
				WHERE `fu_id` = '" . $userId . "'
				  And `coll_id` = '" . $id . "'
				  And `coll_type` = '" . $type . "'";
        //echo  $sql;
        return $this->del($sql);
    }
    /** 信息提醒  学生收藏招聘消息 */
    public function getAppStuColl($userid,$num){
        $sql = "SELECT DISTINCT `student`.* FROM `collect`
			LEFT JOIN `corpinternmsg` ON (`corpinternmsg`.`cim_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=1)
			LEFT JOIN `jobfairmsg` ON (`jobfairmsg`.`jm_id`=`collect`.`coll_info_id` AND `collect`.`coll_type`=0)
			LEFT JOIN `student` ON (`student`.`fu_id`=`collect`.`fu_id` )
			WHERE `corpinternmsg`.`cim_publish`=$userid OR `jobfairmsg`.`jm_publish`=$userid
			ORDER BY  `collect`.`coll_time` DESC  "; // TODO
        $sql .= "Limit " . $num . "," . 10;
        return $this->fetchAll ( $sql );
    }
    /** 根据信息ID和类型得到企业用户的num */
    public function getAppCompanyNum($info_id,$type){
        if($type==0){
            $sql="select f.fu_id,f.fu_number,jm.jm_name msg_title from jobfairmsg jm left join frontuser f on jm.jm_publish=f.fu_id where jm_id=$info_id";
        }else{
            $sql="select f.fu_id,f.fu_number,cm.cim_name msg_title from corpinternmsg cm left join frontuser f on cm.cim_publish=f.fu_id where cim_id=$info_id";
        }
        return $this->fetchRow($sql);
    }
    public function  getifgood($userId,$msg_id,$type){
        $sql="select * from tj_zan where user_id=$userId and post_id=$msg_id and post_type=$type 	";
        return $this->fetchAll($sql);
    }
}