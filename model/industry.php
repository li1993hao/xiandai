<?php
/**
*  file:corptype.php  encoding:UTF-8
*  Create On 2014-1-19����10:06:32
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
class industry extends Model{
	
	public function get_industry(){
		$sql = "SELECT * FROM  `industry` ";
		$result = $this->fetchAll($sql);
		if( $result){
			$list = array();
			foreach($result as $item){
				$list[]=array("id"=>$item["ind_id"],"name"=>$item["ind_type"]);
			}
			return $list;
		}
		return false;
		
	}
	
}