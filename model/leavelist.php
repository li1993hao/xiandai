<?php

class leavelist extends Model{
	
	public function getItem($type){
		$sql = "SELECT * FROM `leavelist` LEFT JOIN `file` 
				ON `leavelist`.f_id = `file`.file_id
				WHERE id=".$type;
		return $this->fetchRow($sql);
	}
	
	public function modifyItem($title,$content,$filetitle,$f_id,$type){
		$sql = "UPDATE `leavelist` SET `title`='".$title."',`content`='".$content."',`filetitle`='".$filetitle."',`f_id`='".$f_id."' ,`last_modify_time`=NOW() WHERE id=".$type;
		//echo $sql;
		return $this->update ($sql);
	}
}
