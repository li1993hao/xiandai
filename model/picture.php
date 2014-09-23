<?php
class picture extends Model
{
	public function addpic($piclink, $pictype)
	{
		$sql = "INSERT INTO `picture`(`pic_type`,`pic_link`) VALUES ('".$piclink."','".$pictype."')";
		//echo $sql;
		return $this->insert($sql);
	}
	
	public function delPic($picID){
		$sql = "DELETE FROM `picture` WHERE `picture`.`pic_id` = '".$picID."'";
		return $this->del($sql);
	}
	
	public function getPic($picIds){
		if(is_array($picIds)){
			//
			if( is_array($picIds) && ( ($total=count($picIds) ) > 0 ) ){
				$value = $picIds[0];
				for($i = 1; $i < $total; $i++ ){
					$value .= " ,".$picIds[$i]." ";
				}
				$sql = "SELECT * FROM  `picture` WHERE  `pic_id` IN ( ".$value." ) ";
				return $this->fetchAll($sql);
			}else{
				return false;
			}
			
		}else{
			$sql = "SELECT * FROM  `picture` WHERE  `pic_id` = $picIds ";
			return $this->fetchRow($sql);
		}
		
		
	}
}