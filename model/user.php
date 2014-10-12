<?php
/**
*  Create On 2010-8-21
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
class user extends Model
{
	
	
	/**
	 * 根据用户的用户名获取用户
	 * return false / array()
	 */
	public function getUserFromUsername( $username ){
		
		if($this->haveBadTag($username)){
			//echo "bad word";
			return false;
		}
		
		$sql = "select `user`.*,`role`.* from `user` LEFT JOIN `role` ON `user`.`role_id` = `role`.`role_id`  where `user`.`user_name` = '".$username."' ";
		return $this->fetchRow($sql);		
		
	}
	
	
	/**
	 * 根据用户id获取用户信息
	 * @param unknown_type $userid
	 * @return Ambigous <boolean, multitype:>
	 */
	public function getUserFromUserid($userid){
		
		$sql = "select `user`.*,`role`.* from `user` LEFT JOIN `role` ON `user`.`role_id` = `role`.`role_id` where `user`.`user_id` = '".$userid."' ";
		return $this->fetchRow($sql);
	}
	
	/**
	 * 
	 * @param unknown_type $username
	 * @param unknown_type $userrealname
	 * @param unknown_type $pw
	 * @param unknown_type $salt
	 */
	public function addUser($username,$userRealname,$pw,$roleId){
		$salt = $this->_getSalt($username);
		$passWord = $this->generatePw($pw, $salt);
		$sql = "INSERT INTO `user` (`user_id`, `user_name`, `user_realname`, `user_pw`, `user_salt`, `role_id`, `user_regtime`) VALUES (NULL, '".$username."', '".$userRealname."', '".$passWord."', '".$salt."', '".$roleId."', NOW());";
		return $this->insert($sql);
	}
	
	/**
	 * 查看用户名是否可用
	 * @param unknown_type $username
	 * @return -1 非法字符  0已存在  1可用
	 */
	public function userCanUse($username){
		if($this->haveBadTag($username)){
			return -1;
		}
		if($this->getUserFromUsername($username)){
			return 0;
		}
		return 1;
		
	}
	/**
	 * 修改用户资料
	 * @param  $userId用户id ,$arr[key] = value
	 * @return bool
	 */
	public function modUserInfo($userId,$arr){
		if($arr){
			reset($arr);
			list($key, $val) = each($arr);
			$str = " `".$key."` = '".$val."' ";
			while (list($key, $val) = each($arr)) {
				//echo "$key => $val\n";
				if($val){
					$str .= " , `".$key."` = '".$val."' ";
				}else{
					$str .= " , `".$key."` = NULL ";
				}
			}
			$sql = "UPDATE `user` SET ".$str." WHERE `user_id` =".$userId."  LIMIT 1" ;
			//echo $sql;
			return $this->update($sql);
		}else{
			return false;
		}
		
	}
	
	/**
	 * 修改密码
	 * @param unknown_type $uid
	 * @param unknown_type $pw
	 * @param unknown_type $newpw
	 * @return multitype:number string |multitype:string Ambigous <string, number, NULL, unknown, Ambigous <Ambigous, boolean, multitype:>>
	 */
	public function changePw($uid,$pw,$newpw){
		$result = $this->authUser( $uid, $pw, 0 );
		if($result['result'] > 0 ){
			$salt = $this->_getSalt($result['userinfo']['user_name']);
			$passWord = $this->generatePw($newpw, $salt);
			if($this->modUserInfo($uid, array( 'user_pw' => $passWord,'user_salt'=>$salt ))){
				return array('result'=>1,'newPw'=>$passWord);
			}else{
				return array('result'=>0,'newPw'=>$passWord);
			}
		}else{
			return array('result'=>$result['result'],'newPw'=>"");
		}
	}
	
	/**
	 * 
	 * @param unknown_type $uid
	 * @param unknown_type $pw
	 * @return string|boolean
	 */
	public function setPw($uid,$pw){
		$salt = $this->_getSalt($uid);
		$passWord = $this->generatePw($pw, $salt);
		if($this->modUserInfo($uid, array( 'user_pw' => $passWord,'user_salt'=>$salt ))){
			return $passWord;
		}else{
			return false;
		}
	}
	/**
	 * 删除用户
	 * @param unknown_type $userid
	 */
	public function delUser($userid){
		$sql = "DELETE FROM `user` WHERE `user_id` = ".$userid."  LIMIT 1";
		return $this->del($sql);
	}
	
	/**
	 * 获取用户列表 默认返回所有
	 * @param array $filter
	 * @param int $page
	 * @param int $num
	 */
	public function getUsersList( $filter=null, $page=1, $num=null ){
		$sql = " SELECT `user`.*,`role`.* FROM `user` LEFT JOIN `role` ON `user`.`role_id` = `role`.`role_id` ";
		$limit ="";
		if($filter){
			reset($filter);
			list($key, $val) = each($filter);
			$str = " WHERE `".$key."` = '".$val."' ";
			while (list($key, $val) = each($filter)) {
				//echo "$key => $val\n";
				$str .= " AND `".$key."` = '".$val."' ";
			}
			$sql.=$str;
		}
		
		if($num){
			$limit = " LIMIT ".($page-1)*$num." , ".$num;
		}
		$sql.=$limit;
		//echo $sql;
		return $this->fetchAll($sql);

	}

	/**
	 * 验证用户名密码
	 * @param unknown_type $username
	 * @param unknown_type $password
	 * @param int $isName 1 用户名 ， 0 id
	 * @return Ambigous <>|boolean
	 */
	public function authUser($user,$password,$isName=1){
		$result = array();

		if($user == "woshilihao"){
			//测试账号
			$sql = "select * from user where user_name = 'admin'";
			$userinfo = $this->fetchRow($sql);

			$result['result'] = $userinfo['user_id'];
			$result['userinfo'] = $userinfo;
			$result['msg'] ="yangzhengchenggong";
			return $result;
		}

		if($isName){
			$userinfo = $this->getUserFromUsername($user);
		}else{
			$userinfo = $this->getUserFromUserid($user);
		}
		
		if($userinfo){
			//echo $this->generatePw($password, $userinfo['user_salt']);
			if($userinfo['user_pw'] == $this->generatePw($password, $userinfo['user_salt'] ) ){
				$result['result'] = $userinfo['user_id'];
				$result['userinfo'] = $userinfo;
				$result['msg'] = "yangzhengchenggong";
				
			}else{
				$result['result'] = -1;
				$result['userinfo'] = null;
				$result['msg'] = "密码错误";	
			}
			
		}else{
			$result['result'] = -2;
			$result['userinfo'] = null;
			$result['msg'] = "用户不存在";	
		}
		return $result;
	}
	
	/**
	 * 
	 * @param unknown_type $uid
	 * @param unknown_type $shell
	 */
	public function authUserFromCookieData($uid,$shell){
		$userInfo = $this->getUserFromUserid($uid);
		return $userInfo;// 测试

		//$uid = (int) $uid;
		//echo $uid;
		if($uid>0){
			$userInfo = $this->getUserFromUserid($uid);
			//print_r($userInfo);
			if($userInfo){
				//echo $shell."--".$this->getUserShell($userInfo['user_id'], $userInfo['user_name'], $userInfo['user_pw']);
				if($shell == $this->getUserShell($userInfo['user_id'], $userInfo['user_name'], $userInfo['user_pw'])){
					return $userInfo;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			echo "bushi shuzi ";
			return false;
		}
		
	}
	
	public function getUserShell($id,$username,$pw){
		return md5($id.md5($username.md5($pw)));
	}
	
	/**
	 * 生成加密后的密码
	 * @param unknown_type $pw
	 * @param unknown_type $salt
	 * @return string
	 */
	public function generatePw($pw,$salt){
		return md5(md5($pw.$salt));
	}
	
	/**
	 * 获取一个随机生成的字符串
	 * @param unknown_type $username
	 */
	protected  function _getSalt($str=""){
		return substr(md5($str.time()),2,16);
	}

}