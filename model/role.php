<?php
class role extends Model
{

	/**
	 * 
	 * @param  $rolename
	 * @return Ambigous <boolean, number> -1 角色名存在 0添加失败  正常返回角色id
	 * 
	 */
	public function addRole($rolename){
		if($this->getRoleFromRolename($rolename)){
			return -1;
		}
		$sql = "INSERT INTO `role` (`role_id` ,`role_name`)VALUES ('', '".$rolename."'); ";
		return $this->insert($sql);
	}
	
	/**
	 * 
	 * @param unknown_type $rolename
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getRoleFromRolename($rolename){
		$sql = "SELECT * FROM `role` WHERE `role`.`role_name` = '".$rolename."' ";
		return $this->fetchRow($sql);
	}
	
	/**
	 * 
	 * @param unknown_type $roleId
	 */
	public function getRoleFromRoleid($roleId){
		$sql = "SELECT * FROM `role` WHERE `role`.`role_id` = '".$roleId."' ";
		return $this->fetchRow($sql);
	}
	/**
	 * 
	 * @param unknown_type $id
	 * @param unknown_type $rolename
	 * @return number -1 角色名存在  1修改成功 0修改失败
	 */
	public function changeRolename($id,$rolename){
		$userinfo = $this->getRoleFromRolename($rolename);
		if($userinfo){
			if($userinfo["role_id"] != $id){
				return -1;
			}else{
				return 1;
			}
		}
		
		$sql =  "UPDATE `role` SET `role_name` = '".$rolename."' WHERE `role`.`role_id` =".$id.";";
		return $this->update($sql) ? 1 : 0 ;
	}
	
	/**
	 * 给指定的角色增加权限
	 * @param unknown_type $roleId
	 * @param unknown_type $rsId
	 * @return Ambigous <boolean, number>
	 */
	public function addResourceToRole($roleId,$rsId){
		$sql = "INSERT INTO `acl` (`role_id` ,`rs_id`)VALUES ('".$roleId."', '".$rsId."'); ";
		return $this->insert($sql);
	}
	
	/**
	 * 删除用户的某项权限
	 * @param unknown_type $roleId
	 * @param unknown_type $rsId
	 * @return resource
	 */
	public function delResourceToRole($roleId,$rsId=NULL){
		if($rsId){
			$sql = "DELETE FROM `acl` WHERE `role_id` = ".$roleId." AND `rs_id` = ".$rsId."  LIMIT 1";
		}else{
			$sql = "DELETE FROM `acl` WHERE `role_id` = ".$roleId;
		}
		return $this->del($sql);
	}
	
	/**
	 * 删除角色，并删除为其分配的权限
	 * @param unknown_type $roleId
	 */
	public function delRole($roleId){
		$this->delResourceToRole($roleId);
		$sql = "DELETE FROM `role` WHERE `role_id` = ".$roleId;
		return $this->del($sql);
	}
	
	/**
	 * 获取用户的所有权限
	 * @param unknown_type $roleId
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getResourceOfRole($roleId){
		$sql = "SELECT `acl`.`rs_id`,`acl`.`role_id`, `resource`.`rs_name`,`resource`.`rs_class` FROM `acl`,`resource` WHERE `acl`.`rs_id` = `resource`.`rs_id` AND  `acl`.`role_id` = ".$roleId.";";
		return $this->fetchAll($sql);
	}
	
	public function getRolesList(){
		$sql = "SELECT * FROM  `role` ";
		return $this->fetchAll($sql);
	}
	
	public function getResourceList(){
		$sql = "SELECT * FROM `resource` ";
		return $this->fetchAll($sql);
	}
	public function getUserByRoleId($roleId){
		$sql = "SELECT `user_id` FROM `user` WHERE `role_id` = '".$roleId."'";
		return $this->fetchAll($sql);
	}
}
?>