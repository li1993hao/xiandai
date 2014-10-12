<?php
/**
* Create On 2014-3-20 ����5:17:07
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/
class infotype extends Model{
	public function getInfotypeList(){
		$sql = "SELECT `infotype`.`it_id`, `infotype`.`it_type` FROM `infotype` ";
		return $this->fetchAll($sql);
	}
}
