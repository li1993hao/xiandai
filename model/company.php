<?php
/**
* Create On 2014-1-14 3:31:52
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/
class company extends Model {
	
	/**
	 * 根据用户登录ID获取企业信息
	 * 
	 * @param unknown_type $fuId        	
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getCompanyDetailByFuId($fuId) {
		$sql = "SELECT `company`.*, `frontuser`.`fu_state`, `frontuser`.`fu_isable`,`frontuser`.`fu_outdate`, `industry`.`ind_type`, `corptype`.`ct_type`, `area`.`area_name`,`area`.`p_id` FROM `company` " . "LEFT JOIN `frontuser` ON `frontuser`.`fu_id` = `company`.`fu_id` " . "LEFT JOIN `industry` ON `industry`.`ind_id` = `company`.`ind_id` " . "LEFT JOIN `corptype` ON `corptype`.`ct_id` = `company`.`ct_id` " . "LEFT JOIN `area` ON `area`.`area_id` = `company`.`area_id` " . "WHERE `company`.`fu_id` = '" . $fuId . "'";
		// echo $sql;
		return $this->fetchRow ( $sql );
	}
	/**
	 * 根据用户登录ID获取企业信息(加图片)
	 * linkai
	 */
	public function getCompanyDetailByFuId2($fuId) {
		$sql = "SELECT `company`.*, `frontuser`.`fu_state`, `frontuser`.`fu_isable`,`frontuser`.`fu_outdate`, `industry`.`ind_type`, `corptype`.`ct_type`, `area`.`area_name`,`area`.`p_id`,`picture`.`pic_link`  
				FROM `company` " 
				. "LEFT JOIN `frontuser` ON `frontuser`.`fu_id` = `company`.`fu_id` " 
				. "LEFT JOIN `industry` ON `industry`.`ind_id` = `company`.`ind_id` " 
				. "LEFT JOIN `corptype` ON `corptype`.`ct_id` = `company`.`ct_id` " 
				. "LEFT JOIN `picture` ON `picture`.`pic_id` = `company`.`pic_id`" 
				. "LEFT JOIN `area` ON `area`.`area_id` = `company`.`area_id` " 
				. "WHERE `company`.`fu_id` = '" . $fuId . "'";
		// echo $sql;
		return $this->fetchRow( $sql );
	}
	/**
	 * 根据企业ID获取企业资质图片
	 * linkai
	 */
	public function getCompanyPic($comId) {
		$sql = "SELECT `picture`.`pic_link`  FROM `company` 
				LEFT JOIN `companypicture` ON `companypicture`.`com_id` = `company`.`com_id`
			 	LEFT JOIN `picture` ON `picture`.`pic_id` = `companypicture`.`pic_id`
				WHERE `company`.`com_id` = '" . $comId . "'";
		// echo $sql;
		return $this->fetchAll ( $sql );
	}
	
	/**
	 * 根据fuId删除企业信息
	 * @param unknown_type $fuId
	 * @return resource
	 */
	public function delCompanyByFuId($fuId){
		$sql = "DELETE FROM `company` WHERE `company`.`fu_id` = '".$fuId."'";
		return $this->del($sql);
	}
	
	public function setDegree($fuId, $degree){
		$sql = "UPDATE `company` SET `da_degree` = '".$degree."' WHERE `company`.`fu_id` = '".$fuId."';";
		return $this->update($sql);
	}
	/**
	 * 修改除了图片之外的公司信息
	 * @param unknown_type $dataArr
	 * @return Ambigous <boolean, number>
	 */
	public function updateCcompanyInfo($dataArr){
	
		$sql = "UPDATE `company`
				 SET `ind_id` = '".$dataArr["indId"]."',
				 	`ct_id` = '".$dataArr["corpId"]."',
				 	`com_capital` = '".$dataArr["capital"]."',
				 	`com_contact` = '".$dataArr["contacter"]."',
				 	`com_phone` = '".$dataArr["phone"]."',
				 	 `com_fax` = '".$dataArr["fax"]."',
				 	 `com_mobile` = '".$dataArr["mobile"]."',
				 	 `com_post` = '".$dataArr["post"]."',
				 	 `com_email` =  '".$dataArr["commail"]."',
				 	  `com_website` = '".$dataArr["comweb"]."',
				 	  `area_id` = '".$dataArr["areaId"]."',
				 	  `com_address` =  '".$dataArr["address"]."',
				 	  `com_intro` = '".$dataArr["intro"]."'
				WHERE `company`.`com_id` = '".$dataArr["id"]."'";
		//echo $sql;
		return $this->insert($sql);
	}
	/**
	 * 修改图片信息 资质认证
	 * @param unknown_type $id
	 * @param unknown_type $pics
	 * @return Ambigous <boolean, number>
	 */
	public function setCorpZzh($id,$pics){
		// (NULL, '1', '1'), (NULL, '1', '2');
		$sql = "INSERT INTO `companypicture` (`cp_id`, `com_id`, `pic_id`) ";
		$value = " VALUES ";
		if( is_array($pics) && ( ($total=count($pics) ) > 0 ) ){
			$value .= " (NULL, '".$id."', '".$pics[0]."') ";
			for($i = 1; $i < $total; $i++ ){
				$value .= ", (NULL, '".$id."', '".$pics[$i]."') ";
			}
		}else{
			$value .= " (NULL, '".$id."', '".$pics."') ";
		}
		$sql .= $value;
		//echo $sql;
		return $this->insert($sql);
	}
	/**
	 * 有公司id获取图片列表
	 * @param unknown_type $comid
	 * @return Ambigous <boolean, number>
	 */
	public function getfilelist($comid){
		$sql = "SELECT `companypicture`.`pic_id`  FROM `companypicture`
				WHERE `companypicture`.`com_id` = '" . $comid . "'";
		//echo $sql;
		return $this->fetchAll($sql);
	}
	/**
	 * 删除公司资质
	 * @param unknown_type $comid
	 * @param unknown_type $picid
	 * @return resource
	 */
	public function deletecompanyfile($comid,$picid){
		$sql = "DELETE FROM `companypicture` WHERE `companypicture`.`com_id` = '".$comid."' AND `companypicture`.`pic_id` = '".$picid."'";
		return $this->del($sql);
	}


    /**
     * APP赫建武查询公司详细信息
     */
    public function getAppCompanyDetailByFuId($fuId) {
        $sql = "SELECT `company`.*, `frontuser`.`fu_state`, `frontuser`.`fu_isable`,`frontuser`.`fu_outdate`, `industry`.`ind_type`, `corptype`.`ct_type`, `area`.`area_name`,`area`.`p_id`,`picture`.`pic_link`
				FROM `company` "
            . "LEFT JOIN `frontuser` ON `frontuser`.`fu_id` = `company`.`fu_id` "
            . "LEFT JOIN `industry` ON `industry`.`ind_id` = `company`.`ind_id` "
            . "LEFT JOIN `corptype` ON `corptype`.`ct_id` = `company`.`ct_id` "
            . "LEFT JOIN `picture` ON `picture`.`pic_id` = `company`.`pic_id`"
            . "LEFT JOIN `area` ON `area`.`area_id` = `company`.`area_id` "
            . "WHERE `company`.`fu_id` = '" . $fuId . "'";
        // echo $sql;
        return $this->fetchRow( $sql );
    }
}
