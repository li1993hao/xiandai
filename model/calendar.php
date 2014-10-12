<?php
class calendar extends Model{
	
	public function getcalendar($start, $end){
		$sql = "SELECT `cal_id`, `cal_name`, `cal_addr`, UNIX_TIMESTAMP(`cal_opentime`) AS `cal_opentimestamp` ,`cal_tel`,`cal_assis_tel`,`cal_content`,`cal_contact`,`cal_stu`
				FROM `calendar` WHERE `cal_opentime`>='".$start."' AND `cal_opentime`<='".$end."' ";
		return $this->fetchAll($sql);
	}
	
	public function addcalendar($name,$opentime,$addr, $contact,$tel,$student, $assis_tel,$content){
		if($this->calendarexist($name)){
			return -1;
		}else{
			$sql = "INSERT INTO `calendar` (`cal_name`,`cal_opentime`,`cal_addr`,`cal_contact`,`cal_tel`,`cal_stu`,`cal_assis_tel`,`cal_content`)
					VALUES('".$name."', '".$opentime."', '".$addr."','".$contact."', '".$tel."','".$student."', '".$assis_tel."', '".$content."')";
			//echo $sql;
			return $this->insert($sql);
		}
	}
	
	public function delcalendar($id){
		$sql = "DELETE FROM `calendar` WHERE `cal_id` =" .$id;
		return $this->del($sql);
	}
	
	public function calendarexist($name){
		$sql = "SELECT * FROM `calendar` WHERE `cal_name`=" .$name;
		return $this->fetchRow($sql);
	}
	
	public function gettodaycalendar(){
		$sql = "SELECT * FROM `calendar` WHERE to_days(`cal_opentime`) = to_days(now())";
		return $this->fetchAll($sql);
	}
	
	
}