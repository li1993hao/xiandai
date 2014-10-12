<?php
class feedback extends Model
{
	/**
	 * 
	 * @param unknown_type $platform (1:web 2:android 3:ios)
	 * @param unknown_type $title
	 * @param unknown_type $content
	 * @param unknown_type $ui
	 * @param unknown_type $info
	 * @param unknown_type $fun
	 * @param unknown_type $ip
	 * @param unknown_type $versionNum
	 * @return number -1 含有非法字符 1成功 0失败
	 */
	public function addfeedback($platform,$title,$content,$ui,$info,$fun,$ip, $versionNum){
		if( !($this->haveInjectTag( $title )) && !($this->haveInjectTag($content))  ){
			$sql = "INSERT INTO `feedback` (`fb_id`, `fb_title`, `fb_content`, `fb_ui`, `fb_info`, `fb_fun`, `fb_platform`, `fb_version_num`, `fb_time`, `fb_ip`)
								VALUES (NULL, '".$this->filterSomeBadTag($title)."', '".$this->filterSomeBadTag($content)."', '".$ui."', '".$info."', '".$fun."', '".$platform."', '".$versionNum."', NOW(), '".$ip."' )";
			return $this->insert($sql) ? 1 : 0;
		}else{
			return -1;
		}
	}
	
	/**
	 * 获取这个ip的最后一条记录
	 * @param unknown_type $ip
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getLastFeedbackFromIp($ip){
		$sql = "SELECT * FROM  `feedback` WHERE  `fb_ip` =  '".$ip."' ORDER BY  `feedback`.`fb_time` DESC LIMIT 1 ";
		return $this->fetchRow($sql);
	}
	
	/**
	 * 
	 * @param unknown_type $platform
	 * @param unknown_type $page
	 * @param unknown_type $num
	 * @param unknown_type $start
	 * @param unknown_type $end
	 * @return multitype:unknown number Ambigous <boolean, multitype:>
	 */
	public function getFeedbackPageModel($platform=0, $page =1 , $num = 10 , $start = null,$end =null){
		$filter = " 1 ";
		if($platform){
			$filter .= " AND `feedback`.`fb_platform` = ".$platform." ";
		}
		if($start){
			$filter .= " AND `feedback`.`fb_time` > '".$start."' ";
		}
		if($end){
			$filter .= " AND `feedback`.`fb_time` < '".$end."' ";
		}
		$sql = "SELECT `feedback`.* FROM `feedback` WHERE ".$filter." ORDER BY `fb_time` DESC  Limit ".($page-1)*$num.",".$num." ";
		//echo $sql;
		$list = $this->fetchAll($sql);
		$total = $this->getTotal('feedback',$filter);
		$totalPage = ceil($total / $num);
		return array('page'=>$page,'list'=>$list,'total'=>$total,'totalPage'=>$totalPage);
	}
	
	public function getFeedbackAvgScore($platform=0, $start = null,$end =null){
		$filter = " 1 ";
		if($platform){
			$filter .= " AND `feedback`.`fb_platform` = ".$platform." ";
		}
		if($start){
			$filter .= " AND `feedback`.`fb_time` > '".$start."' ";
		}
		if($end){
			$filter .= " AND `feedback`.`fb_time` < '".$end."' ";
		}
		$sql = "SELECT AVG(fb_ui) AS fb_ui_avg ,AVG(fb_info) AS fb_info_avg ,AVG(fb_fun) AS fb_fun_avg , COUNT(*) AS total FROM `feedback` WHERE ".$filter." ";
		//echo $sql;
		$list = $this->fetchRow($sql);
		return $list;
	}

    /**
     * APP赫建武，反馈提交
     */
    public function addappfeedback($platform,$title,$content,$ui,$info,$fun,$time, $versionNum){
        if( !($this->haveInjectTag( $title )) && !($this->haveInjectTag($content))  ){
            $sql = "INSERT INTO `feedback` (`fb_id`, `fb_title`, `fb_content`, `fb_ui`, `fb_info`, `fb_fun`, `fb_platform`, `fb_version_num`, `fb_time`)
								VALUES (NULL, '".$this->filterSomeBadTag($title)."', '".$this->filterSomeBadTag($content)."', '".$ui."', '".$info."', '".$fun."', '".$platform."', '".$versionNum."','".$time."' )";

            return $this->insert($sql) ? 1 : 0;

        }else{
            return -1;
        }
    }
	
}

