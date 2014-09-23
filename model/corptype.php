<?php
/**
*  file:corptype.php  encoding:UTF-8
*  Create On 2014-1-19����10:06:32
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
class corptype extends Model{
	
	public function getcorptype(){
		$sql = "SELECT * FROM  `corptype` ";
		$result = $this->fetchAll($sql);
		if( $result ){
			$list = array();
			foreach($result as $item){
				$list[]=array("id"=>$item["ct_id"],"name"=>$item["ct_type"]);
			}
			return $list;
		}
		return false;
		
	}
	
}