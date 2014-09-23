<?php
/**
* Create On 2014-1-14 ����4:57:30
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/

class companypicture extends Model{
	
	/**
	 * 根据企业ID获取企业审核资质照片
	 * @param unknown_type $comId
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getPicByCompanyId($comId){
		$sql = "SELECT `companypicture`。*, `picture`.`pic_link` FROM `companypicture` "
			 . "LEFT JOIN `picture` ON `picture`.`pic_id` = `companypicture`。`pic_id` "
			 . "WHERE `companypicture`.`com_id` = '".$comId."' ";
		return $this->fetchAll($sql);
	}
}
