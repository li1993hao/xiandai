<?php
/**
*  file:frontuser.php  encoding:UTF-8
*  Create On 2014-1-15����10:01:29
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
class frontuser extends Model {
	protected $_companyCode = 1;
	protected $_studentCode = 0;
	protected $_teacherCode = 2;
	protected $roleArr = array (
			"学生",
			"企业",
			"教师" 
	);
	protected $isable = array (
			"able" => 1,
			"disable" => 0 
	); // 冻结状态
	protected $gender = array (
			"男",
			"女" 
	); // 性别
	protected $education = array (
			"本科",
			"硕士",
			"博士" 
	); // 学历
	protected $usermodel = null;
	
	/**
	 * 将数据库中的数据转换成用户模型
	 *
	 * @param unknown_type $entity        	
	 */
	protected function entity2model($entity) {
		$this->usermodel ["id"] = $entity ["fu_id"];
		$this->usermodel ["email"] = $entity ["fu_email"];
		$this->usermodel ["code"] = $entity ["fu_number"];
		$this->usermodel ["type"] = $entity ["fu_type"];
		$this->usermodel ["typename"] = $this->roleArr [$entity ["fu_type"]];
		$this->usermodel ["state"] = $entity ["fu_state"];
		$this->usermodel ["statename"] = ($entity ["fu_state"] == 1) ? "审核通过" : (($entity ["fu_state"] == 2) ? "审核未通过" : "未审核");
		$this->usermodel ["isable"] = $entity ["fu_isable"];
		$this->usermodel ["isablename"] = ($entity ["fu_isable"] == 1) ? "激活" : "冻结";
		$this->usermodel ["outdate"] = $entity ["fu_outdate"];
		$this->usermodel ["reason"] = $entity ["fu_reason"];
		$this->usermodel ["regtime"] = $entity ["fu_register_time"];
		$this->usermodel ["name"] = "";
		if ($entity ["fu_type"] == 0) {
			$sql = "SELECT `student`.*, `picture`.* ,`file`.* FROM  `student` 
					LEFT JOIN `picture` ON `picture`.`pic_id` = `student`.`pic_id`
					LEFT JOIN `file` ON `file`.`file_id` = `student`.`file_id`
					WHERE  `fu_id` =" . $entity ["fu_id"] . " LIMIT 1";
			//echo $sql;
			if ($result = $this->fetchRow ( $sql )) {
				// stu_id fu_id stu_name stu_gender 性别，0-表示男，1-表示女 stu_birth
				// stu_education 学历，0-表示本科，1-表示硕士，2-表示博士 stu_college stu_pro stu_grade stu_source stu_home
				// stu_politic 政治面貌，0-表示群众，1-表示共青团员，2-党员 pic_id file_id file_name stu_intro
				$this->usermodel ["name"] = $result ["stu_name"];
				$this->usermodel ["gender"] = $result ["stu_gender"];
				// $this->usermodel["gendername"] = $result["stu_gender"];
				$this->usermodel ["education"] = $result ["stu_education"];
				$this->usermodel ["birth"] = $result ["stu_birth"];
				$this->usermodel ["pro"] = $result ["stu_pro"];
				$this->usermodel ["grade"] = $result ["stu_grade"];
				$this->usermodel ["college"] = $result ["stu_college"];
				$this->usermodel ["source"] = $result ["stu_source"];
				$this->usermodel ["home"] = $result ["stu_home"];
				$this->usermodel ["politic"] = $result ["stu_politic"];
				$this->usermodel ["picid"] = $result ["pic_id"];
				$this->usermodel ["piclink"] = $result ["pic_link"];
				$this->usermodel ["fileid"] = $result ["file_id"];
				$this->usermodel ["filename"] = $result ["file_name"];
				$this->usermodel ["filelink"] = $result ["file_link"];
				$this->usermodel ["intro"] = $result ["stu_intro"];
			}
			
			$this->usermodel ["stuindustry"] = null;
			$sql = "SELECT `studentindustry`.* , `industry`.* FROM  `studentindustry` 
					LEFT JOIN `industry` ON `studentindustry`.`ind_id`=  `industry`.`ind_id` 
					WHERE `studentindustry`.`fu_id`=" . $entity ["fu_id"] . " ";
			if ($inds = $this->fetchAll ( $sql )) {
				// si_id fu_id ind_id ind_id ind_type
				foreach ( $inds as $item ) {
					$this->usermodel ["stuindustry"] [] = array (
							"id" => $item ["si_id"],
							"indId" => $item ["ind_id"],
							"indType" => $item ["ind_type"] 
					);
				}
			}
		} else if ($entity ["fu_type"] == 1) { // 企业
			$sql = "SELECT `company`.*, `industry`.`ind_type`, `corptype`.`ct_type`, `area`.`area_name`,`area`.`p_id` ,`picture`.* " . "FROM `company` " . "LEFT JOIN `picture` ON `picture`.`pic_id` = `company`.`pic_id` " . "LEFT JOIN `industry` ON `industry`.`ind_id` = `company`.`ind_id` " . "LEFT JOIN `corptype` ON `corptype`.`ct_id` = `company`.`ct_id` " . "LEFT JOIN `area` ON `area`.`area_id` = `company`.`area_id` " . "WHERE `company`.`fu_id` = '" . $entity ["fu_id"] . "'";
			// echo $sql;
			
			if ($result = $this->fetchRow ( $sql )) {
				$this->usermodel ["comId"] = $result ["com_id"];
				$this->usermodel ["name"] = $result ["com_name"];
				$this->usermodel ["intro"] = $result ["com_intro"];
				$this->usermodel ['degree'] = $result ['da_degree'];
				$this->usermodel ['capital'] = $result ['com_capital'];
				$this->usermodel ['contacter'] = $result ['com_contact'];
				$this->usermodel ['phone'] = $result ['com_phone'];
				$this->usermodel ['fax'] = $result ['com_fax'];
				$this->usermodel ['mobile'] = $result ['com_mobile'];
				$this->usermodel ['post'] = $result ['com_post'];
				$this->usermodel ['comEmail'] = $result ['com_email'];
				$this->usermodel ['website'] = $result ['com_website'];
				$this->usermodel ['areaId'] = $result ['area_id'];
				$this->usermodel ['location'] = $result ['area_name'];
				$this->usermodel ['areaParentId'] = $result ['p_id'];
				$this->usermodel ['indId'] = $result ['ind_id'];
				$this->usermodel ['industry'] = $result ['ind_type'];
				$this->usermodel ['corpId'] = $result ['ct_id'];
				$this->usermodel ['corptype'] = $result ['ct_type'];
				$this->usermodel ['address'] = $result ['com_address'];
				$this->usermodel ['picId'] = $result ['pic_id'];
				$this->usermodel ['picUrl'] = $result ['pic_link'];
				
				$this->usermodel ['license'] = null;
				// 资质认证//-------------------------------------------------
				$sql = "SELECT `companypicture`.*,`picture`.* FROM  `companypicture` 
						LEFT JOIN `picture` ON `companypicture`.`pic_id` = `picture`.`pic_id` 
						WHERE  `com_id` = " . $this->usermodel ["comId"] . ".";
				if ($zzs = $this->fetchAll ( $sql )) {
					// cp_id com_id pic_id
					foreach ( $zzs as $item ) {
						$this->usermodel ['license'] [] = array (
								'id' => $item ['cp_id'],
								'picId' => $item ['pic_id'],
								'picUrl' => $item ['pic_link'] 
						);
					}
				}
			}
		}
		return $this->usermodel;
	}
	public function isEmail($val) {
		$reg = '/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/';
		
		return preg_match ( $reg, $val );
	}
	public function isPhone($val) {
		return preg_match ( '/^1[3458][0-9]{9}$/', $val );
	}
	
	/**
	 * 根据用户的学号或者邮箱号或者id
	 * return false / array()
	 */
	public function getUserFromAccount($username, $isId = false) {
		if ($this->haveBadTag ( $username )) {
			// echo "bad word";
			return false;
		}
		if ($isId) {
			if ($result = $this->_getUserFromUserid ( $username )) {
				return $this->entity2model ( $result );
			}
		} else if ($this->isEmail ( $username )) {
			if ($result = $this->_getUserFromEmail ( $username )) {
				return $this->entity2model ( $result );
			}
		} else {
			if ($result = $this->_getUserFromCode ( $username )) {
				return $this->entity2model ( $result );
			}
		}
		
		return false;
	}
	protected function _getUserFromEmail($email) {
		$sql = "SELECT * FROM  `frontuser` WHERE  `fu_email` = '" . $email . "' LIMIT 1";
		return $this->fetchRow ( $sql );
	}
	protected function _getUserFromCode($code) {
		$sql = "SELECT * FROM  `frontuser` WHERE  `fu_number` =  '" . $code . "' LIMIT 1";
		return $this->fetchRow ( $sql );
	}
	
	/**
	 * 根据用户id获取用户信息
	 *
	 * @param unknown_type $userid        	
	 * @return Ambigous <boolean, multitype:>
	 */
	protected function _getUserFromUserid($userid) {
		$sql = "SELECT * FROM  `frontuser` WHERE  `fu_id` =  '" . $userid . "' LIMIT 1";
		return $this->fetchRow ( $sql );
	}
	
	/**
	 * 验证用户名密码
	 *
	 * @param unknown_type $username        	
	 * @param unknown_type $password        	
	 * @param int $isName
	 *        	1 用户名 ， 0 id
	 * @return Ambigous <>|boolean
	 */
	public function authUser($user, $password, $isId = false) {
		
		$result = array ();
		if ($this->haveBadTag ( $user )) {
			$result ['result'] = - 3;
			$result ['userinfo'] = null;
			$result ['msg'] = "非法的用户名";
			return $result;
		}
		
		if ($isId) {
			$userinfo = $this->_getUserFromUserid ( $user );
		} else {
			if ($this->isEmail ( $user )) {
				$userinfo = $this->_getUserFromEmail ( $user );
			} else {
				$userinfo = $this->_getUserFromCode ( $user );
			}
		}
			
		//var_dump($userinfo);
		if ($userinfo) {
			//echo $this->generatePw($password, $userinfo['user_salt']);
			if ($userinfo ['fu_password'] == $this->generatePw ( $password, $userinfo ['fu_salt'] )) {
				if ($userinfo ['fu_isable'] == $this->isable ["disable"]) {
					$result ['result'] = - 3;
					$result ['userinfo'] = null;
					$result ['msg'] = "该账号已被冻结";
				} else {
					$result ['result'] = $userinfo ['fu_id'];
					$result ['userinfo'] = $this->entity2model ( $userinfo );
					$result ['msg'] = "验证成功";
				}
			} else {
				$result ['result'] = - 1;
				$result ['userinfo'] = null;
				$result ['msg'] = "密码错误";
			}
		} else {
			$result ['result'] = - 2;
			$result ['userinfo'] = null;
			$result ['msg'] = "用户名不存在";
		}
		return $result;
	}
	
	/**
	 *
	 * @param unknown_type $email        	
	 * @return 0不存在 -1格式错误 大于0是存在的id
	 */
	public function chenckEmailExists($email) {
		if ($this->haveBadTag ( $email )) {
			return - 1;
		}
		if ($this->isEmail ( $email )) {
			if ($userinfo = $this->_getUserFromEmail ( $email )) {
				return $userinfo ["fu_id"];
			} else {
				return 0;
			}
		} else {
			return - 1;
		}
	}
	
	/**
	 * 添加企业用户
	 *
	 * @param unknown_type $email        	
	 * @param unknown_type $pw        	
	 * @return array(state=>bool,code int 0 失败 ，-1 email格式错误， 大于0 用户的id )
	 */
	public function addCorpUser($email, $pw) {
		if (($code = $this->chenckEmailExists ( $email )) == 0) {
			if ($result = $this->_addUser ( $email, $pw, $this->_companyCode )) {
				
				return array (
						"state" => true,
						"code" => $result 
				);
			} else {
				return array (
						"state" => false,
						"code" => 0 
				);
			}
		} else {
			return array (
					"state" => false,
					"code" => $code 
			);
		}
	}
	
	/**
	 * 设置公司用户信息
	 *
	 * @param unknown_type $dataArr        	
	 * @return Ambigous <boolean, number>
	 */
	public function setCorpUserInfo($dataArr) {
		$sql = "INSERT INTO `company` 
				(`com_id`, `fu_id`, `com_name`, `da_degree`, `ind_id`, `ct_id`, `com_capital`, `com_contact`, `com_phone`, `com_fax`, `com_mobile`, `com_post`, `com_email`, `com_website`, `area_id`, `com_address`, `com_intro`, `pic_id`) 
				VALUES 
				(NULL, '" . $dataArr ["id"] . "', '" . $dataArr ["name"] . "', '0', '" . $dataArr ["indId"] . "', '" . $dataArr ["corpId"] . "', '" . $dataArr ["capital"] . "', '" . $dataArr ["contacter"] . "', '" . $dataArr ["phone"] . "', '" . $dataArr ["fax"] . "', '" . $dataArr ["mobile"] . "', '" . $dataArr ["post"] . "', '" . $dataArr ["email"] . "', '" . $dataArr ["website"] . "', '" . $dataArr ["areaId"] . "', '" . $dataArr ["address"] . "', '" . $dataArr ["intro"] . "', '" . $dataArr ["picId"] . "')";
		// echo $sql;
		return $this->insert ( $sql );
	}
	/**
	 * 设置公司的认证资质
	 */
	public function setCorpZzh($id, $pics) {
		// (NULL, '1', '1'), (NULL, '1', '2');
		$sql = "INSERT INTO `companypicture` (`cp_id`, `com_id`, `pic_id`) ";
		$value = " VALUES ";
		if (is_array ( $pics ) && (($total = count ( $pics )) > 0)) {
			$value .= " (NULL, '" . $id . "', '" . $pics [0] . "') ";
			for($i = 1; $i < $total; $i ++) {
				$value .= ", (NULL, '" . $id . "', '" . $pics [$i] . "') ";
			}
		} else {
			$value .= " (NULL, '" . $id . "', '" . $pics . "') ";
		}
		$sql .= $value;
		// echo $sql;
		return $this->insert ( $sql );
	}
	
	/**
	 *
	 * @param unknown_type $username        	
	 * @param unknown_type $userrealname        	
	 * @param unknown_type $pw        	
	 * @param unknown_type $salt        	
	 */
	public function _addUser($username, $pw, $roleCode) {
		$salt = $this->_getSalt ( $username );
		$passWord = $this->generatePw ( $pw, $salt );
		if ($roleCode == $this->_companyCode) {
			$sql = "INSERT INTO `frontuser`
				(`fu_id`, `fu_email`, `fu_number`, `fu_type`, `fu_password`, `fu_salt`, `fu_state`, `fu_isable`, `fu_outdate`, `fu_reason`, `fu_register_time`)
				VALUES
				(NULL, '" . $username . "', NULL, '" . $roleCode . "', '" . $passWord . "', '" . $salt . "', '0', '1', NULL, NULL, NOW()) ";
		} else {
			$sql = "INSERT INTO `frontuser`
				(`fu_id`, `fu_email`, `fu_number`, `fu_type`, `fu_password`, `fu_salt`, `fu_state`, `fu_isable`, `fu_outdate`, `fu_reason`, `fu_register_time`)
				VALUES
				(NULL, NULL, '" . $username . "', '" . $roleCode . "', '" . $passWord . "', '" . $salt . "', '0', '1', NULL, NULL, NOW()) ";
		}
	    //echo $sql."<br/>";
		return $this->insert ( $sql );
		//echo $zz_test;
		//return $zz_test;
	}
	
	/**
	 * 生成加密后的密码
	 *
	 * @param unknown_type $pw        	
	 * @param unknown_type $salt        	
	 * @return string
	 */
	public function generatePw($pw, $salt) {
		return md5 ( md5 ( $pw . $salt ) );
	}
	
	/**
	 * 获取一个随机生成的字符串
	 *
	 * @param unknown_type $username        	
	 */
	protected function _getSalt($str = "") {
		return substr ( md5 ( $str . time () ), 2, 16 );
	}
	
	/**
	 * 修改用户资料
	 *
	 * @param $userId用户id ,$arr[key]
	 *        	= value
	 * @return bool
	 */
	public function modUserInfo($userId, $arr, $usertype = null) {
		if ($arr) {
			reset ( $arr );
			list ( $key, $val ) = each ( $arr );
			$str = " `" . $key . "` = '" . $val . "' ";
			while ( list ( $key, $val ) = each ( $arr ) ) {
				// echo "$key => $val\n";
				if ($val) {
					$str .= " , `" . $key . "` = '" . $val . "' ";
				} else {
					$str .= " , `" . $key . "` = NULL ";
				}
			}
			if ($usertype == null) {
				$sql = "UPDATE `student` SET " . $str . "
					WHERE `fu_id` =" . $userId . "  LIMIT 1";
			} else {
				$sql = "UPDATE `company` SET " . $str . "
					WHERE `fu_id` =" . $userId . "  LIMIT 1";
			}
			// echo $sql;
			return $this->update ( $sql );
		} else {
			return false;
		}
	}
	
	/**
	 * 修改密码
	 *
	 * @param unknown_type $uid        	
	 * @param unknown_type $pw        	
	 * @param unknown_type $newpw        	
	 * @return multitype:number string |multitype:string Ambigous <string, number, NULL, unknown, Ambigous <Ambigous, boolean, multitype:>>
	 */
	public function changePw($uid, $pw, $newpw) {
		$result = $this->authUser ( $uid, $pw, true );
		// print_r($result);
		if ($result ['result'] > 0) {
			$salt = $this->_getSalt ( $result ['userinfo'] ['name'] );
			$passWord = $this->generatePw ( $newpw, $salt );
			if ($this->moduserpw ( $uid, $passWord, $salt )) {
				return array (
						'result' => 1,
						'newPw' => $passWord 
				);
			} else {
				return array (
						'result' => 0,
						'newPw' => $passWord 
				);
			}
		} else {
			return array (
					'result' => $result ['result'],
					'newPw' => "" 
			);
		}
	}
	public function moduserpw($id, $password, $salt) {
		$sql = "UPDATE `frontuser` SET `fu_password` = '" . $password . "' , `fu_salt` = '" . $salt . "' WHERE `fu_id` = " . $id . " LIMIT 1";
		return $this->update ( $sql );
	}
	
	/**
	 *
	 * @param unknown_type $uid        	
	 * @param unknown_type $pw        	
	 * @return string boolean
	 */
	public function setPw($uid, $pw) {
		$salt = $this->_getSalt ( $uid );
		$passWord = $this->generatePw ( $pw, $salt );
		if ($this->moduserpw ( $uid, $passWord, $salt )) {
			return $passWord;
		} else {
			return false;
		}
	}
	public function enable($id) {
		$sql = "UPDATE `frontuser`
				SET `fu_isable` = 1
				WHERE `fu_id` = " . $id;
		return $this->update ( $sql );
	}
	public function disable($id) {
		$sql = "UPDATE `frontuser`
				SET `fu_isable` = 0
				WHERE `fu_id` = " . $id;
		return $this->update ( $sql );
	}
	public function getunverifiedcompany() {
		$sql = "SELECT * FROM `frontuser`
				WHERE `fu_type` = 1 AND `fu_state` = 0";
		return $this->fetchAll ();
	}
	
	// -------------------
	
	/**
	 * 删除用户
	 *
	 * @param unknown_type $userid        	
	 */
	public function delUser($userid) {
		$sql = "DELETE FROM `user` WHERE `user_id` = " . $userid . "  LIMIT 1";
		return $this->del ( $sql );
	}
	
	/**
	 * 获取用户列表 默认返回所有
	 *
	 * @param array $filter        	
	 * @param int $page        	
	 * @param int $num        	
	 */
	public function getUsersList($filter = null, $page = 1, $num = null) {
		$sql = " SELECT `user`.*,`role`.* FROM `user` LEFT JOIN `role` ON `user`.`role_id` = `role`.`role_id` ";
		$limit = "";
		if ($filter) {
			reset ( $filter );
			list ( $key, $val ) = each ( $filter );
			$str = " WHERE `" . $key . "` = '" . $val . "' ";
			while ( list ( $key, $val ) = each ( $filter ) ) {
				// echo "$key => $val\n";
				$str .= " AND `" . $key . "` = '" . $val . "' ";
			}
			$sql .= $str;
		}
		
		if ($num) {
			$limit = " LIMIT " . ($page - 1) * $num . " , " . $num;
		}
		$sql .= $limit;
		// echo $sql;
		return $this->fetchAll ( $sql );
	}
	public function getUserShell($id, $username, $pw) {
		return md5 ( $id . md5 ( $username . md5 ( $pw ) ) );
	}
	public function Getcompanyuserlist($verifyState, $activeState, $page = 1, $num = 10) {
		$select = "SELECT `frontuser`.*, `company`.`com_name`, `company`.`da_degree` FROM `frontuser` " 
				. "LEFT JOIN `company` ON `company`.`fu_id` = `frontuser`.`fu_id` ";
		$where = " WHERE ";
		$filter = " `fu_type` = 1 ";
		if ($verifyState != 3) {
			$filter .= "AND `frontuser`.`fu_state` = '" . $verifyState . "' ";
		}
		if ($activeState != 2) {
			$filter .= "AND `frontuser`.`fu_isable` = '" . $activeState . "' ";
		}
		$where .= $filter;
		$order = "ORDER BY `frontuser`.`fu_register_time` DESC ";
		$limit = "LIMIT " . ($page - 1) * $num . "," . $num . "";
		$sql = $select . $where . $order . $limit;
		//echo $sql;
		$list = $this->fetchAll ( $sql );
		$total = $this->getTotal("frontuser",$filter);
		$totalPage = ceil ( $total / $num );
		return array (
				'page' => $page,
				'list' => $list,
				'total' => $total,
				'totalPage' => $totalPage 
		);
	}
	public function changeStaus($fuId, $able) {
		$sql = "UPDATE `frontuser` SET `fu_isable` = '" . $able . "' WHERE `frontuser`.`fu_id` = '" . $fuId . "';";
		return $this->update ( $sql );
	}


    public function resetCompanyStaus($fuId) {
        $sql = "UPDATE `frontuser` SET `fu_state` = 0 WHERE `frontuser`.`fu_id` = '" . $fuId . "';";
        return $this->update ( $sql );
    }

	public function delCompanyByFuId($fuId) {
		$sql = "DELETE FROM `frontuser` " . "WHERE `frontuser`.`fu_id` = '" . $fuId . "'";
		// echo $sql;
		return $this->del ( $sql );
	}
	public function verifyCompany($fuId, $type, $outdate = 0, $reson = 0) {
		// $sql = "UPDATE `frontuser` SET `fu_state` = \'2\', `fu_outdate` = \'2016-07-21 11:36:15\', `fu_reason` = \'shibai\' WHERE `frontuser`.`fu_id` = 3;";
		if ($type == 0) {
			$sql = "UPDATE `frontuser` SET `fu_state` = '2', `fu_reason` = '" . $reson . "' WHERE `frontuser`.`fu_id` = '" . $fuId . "';";
		} else {
			$sql = "UPDATE `frontuser` SET `fu_state` = '1', `fu_outdate` = '" . $outdate . "' WHERE `frontuser`.`fu_id` = '" . $fuId . "';";
		}
		return $this->update ( $sql );
	}
	public function getTokenByFuId($fuId = 0) {
		if ($fuId) {
			$sql = "SELECT `frontuser`.`fu_token` FROM `frontuser` WHERE `fu_id` = '" . $fuId . "' ";
			return $this->fetchRow ( $sql );
		} else {
			$sql = "SELECT `frontuser`.`fu_token` FROM `frontuser`";
			return $this->fetchAll ( $sql );
		}
	}
	/**
	 * 添加用户的手机设备信息
	 *
	 * @param unknown_type $userid        	
	 * @param unknown_type $osType        	
	 * @param unknown_type $token        	
	 * @return boolean resource
	 */
	public function setPhoneInfo($userid, $osType, $token) {
// 		echo 1;
		if (strtolower ( $osType ) == "android") {
			$osid = 1;
		} else if (strtolower ( $osType ) == "ios") {
			$osid = 2;
		} else {
			$osid = $osType;
		}
// 		$sql = "SELECT * FROM `frontuser` WHERE `code_platform` =" . $osid . " AND `fu_token` = '" . $token . "' ";
// 		echo 123;
// 		if ($result = $this->fetchRow ( $sql )) {
// 			echo a;
// 			print_r($result);
// 			if ($result ["user_id"] != $userid) {
				
// 				$this->delPhoneInfo ( $result ["user_id"] );
				
// 				$sql = "UPDATE `frontuser` SET `code_platform` = '" . $osid . "',`fu_token` = '" . $token . "' WHERE `frontuser`.`fu_id` =" . $userid . " ";
// 				return $this->update ( $sql );
// 			}
// 		} else {
		$sql = "UPDATE `frontuser` SET `code_platform` = '" . $osid . "',`fu_token` = '" . $token . "' WHERE `frontuser`.`fu_id` =" . $userid . " ";
// 		echo $sql;
		return $this->update ( $sql );
// 		}
	}
	
	public function upldatexvzhi($title,$content,$fileid,$filename){
		$sql = "update xvzhi set title = '".$title."', content = '".$content."',file_id = '".$fileid."',filename = '".$filename."' where id = 1";
		return $this->update($sql);
		//return $sql;
	}
	
	public function selectxvzhi(){
		$sql = "select * from xvzhi left join file on xvzhi.file_id = file.file_id where id = 1";
		return $this->fetchRow($sql);
	}

    /** APP赫建武
     *$usertype   0学生 1企业
     *  */
    public function AppAuthUser($username,$password,$usertype,$salt){
        $password=md5 ( md5 ( $password . $salt ) );
        if($usertype==0){
            $sql="select f.fu_number,s.stu_name fu_name from frontuser f left join student s on f.fu_id=s.fu_id where f.fu_number=$username and f.fu_password='".$password."' and f.fu_type=$usertype";
        }elseif($usertype==1){
            $sql="select f.fu_number,c.com_name fu_name from frontuser f left join company c on f.fu_id=c.fu_id where f.fu_number=$username and f.fu_password='".$password."' and f.fu_type=$usertype";
        }
        return $this->fetchRow($sql);
    }
    /** 根据学生学号获取对应ID */
    public function getappuserinfo($num){
        if ($this->isEmail ( $num )) {
            $sql="select fu_id from frontuser where fu_email='".$num."'";
        } else {
            $sql="select f.fu_id,s.stu_name fu_name,f.fu_salt from frontuser f left join student s on f.fu_id=s.fu_id   where f.fu_number='".$num."'";
        }

        return $this->fetchRow($sql);
    }
    /** 根据用户ID获取用户信息 */
    public function getappuserinfobyid($id){
        $sql="select * from frontuser where fu_id=$id";
        return $this->fetchRow($sql);
    }
    /** 根据用户ID获取用户详细信息 */
    public function getappuserinfobyuserid($id){
        $sql="select * from student where fu_id=$id";
        return $this->fetchRow($sql);
    }

}
