<?php
/**
*  
*  Create On 2013-8-7����11:35:13
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
class UserController extends Controller{

	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}

	public function Index(){
		//$this->login();
		$this->Userlist();
	}
	
	public function Userlist(){
		$user = new user();
		if($do = $this->getRequest()->get("do") ){
			//echo $do;
			if($do = "del"){
				if($id = $this->getRequest()->get("id")){
					$result = $user->delUser($id);
					if($result){
						$this->view->result = $this->_lang->shanchuchenggong;
					}else{
						$this->view->result = $this->_lang->shanchushibai;
					}
				}
			}
		}
		$userList = $user->getUsersList();
		//print_r($userList);
		
		$this->view->userlist = $userList;
		echo $this->view->render("userlist.htm");
	}
	
	public function Rolelist(){
		$role = new role();
		if($do = $this->getRequest()->get("do") ){
			if($do == "del"){
				if( $id = $this->getRequest()->get("id") ){
					if( $id > 1 ){//只允许对id大于1的角色进行操作
						if($role->delRole($id)){
							$this->view->result = $this->_lang->shanchuchenggong;
						}else{
							$this->view->result = $this->_lang->shanchushibai;
						}
					}else {
						$this->view->result = $this->_lang->jinzhicaozuo;
					}
				}
			}
		}
		
		$roleList = $role->getRolesList();
		
		if($roleList){
			for($i=0; $i < count($roleList) ; $i++ ){
				$id = $roleList[$i]["role_id"];
				$userlist = $role->getUserByRoleId($id);
				if ($userlist){
					$roleList[$i]['is_use'] = 1;
				}else{
					$roleList[$i]['is_use'] = 0;
				}
				$roleList[$i]['res'] = $role->getResourceOfRole($id);	
			}
		}
		//print_r($roleList);
		$this->view->rolelist = $roleList;
		echo $this->view->render("rolelist.htm");
	}
	
	/**
	 * 添加角色
	 */
	public function Addrole(){
		$role = new role();
		if($_POST){
			//Array ( [rolename] => 水电费 [res] => Array ( [0] => 1 [1] => 2 ) [Submit] => 提交 )
			//print_r($_POST);
			if (isset($_POST['res'])){
				$id = $role->addRole($_POST['rolename']);
				if( $id >0 ){
					foreach ($_POST['res'] as $resId){
						$role->addResourceToRole($id, $resId);
					}
					$this->view->result = $this->_lang->tianjiachenggong;
				}else if( $id == -1 ){
					$this->view->result = $this->_lang->juesemingyicunzai;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}else{
				$this->view->result = $this->_lang->xuanzejuese;
			}
			
		}
		$res = $role->getResourceList();
		//print_r($res);
		$this->view->resList = $res;
		echo $this->view->render("addrole.htm");
	}
	
	/**
	 * 修改角色
	 */
	public function Modifyrole(){
		
		if( $id = $this->getRequest()->get("id") ){
			$role = new role();
			
			if($_POST){
				if($_POST["rolename"] != ""){
					$result = $role->changeRolename($id,$_POST["rolename"]);
					if($result == 1){
						$role ->delResourceToRole($id);
						if (isset($_POST['res'])){
							foreach ($_POST['res'] as $resId){
								$role->addResourceToRole($id, $resId);
							}
							$this->view->result = $this->_lang->xiugaichenggong;
						}else{
							$this->view->result = $this->_lang->xuanzejuese;
						}
					}else if($result == -1){
						$this->view->result = $this->_lang->juesemingyicunzai;
					}else{
						$this->view->result = $this->_lang->xiugaishibai;
					}
				
				}else{
					$this->view->result = $this->_lang->juesemingbunengweikong;
				}
			}
			
			
			
			$roleInfo = $role->getRoleFromRoleId($id);
			if($roleInfo){
				
				$id = $roleInfo["role_id"];
				$roleInfo['res'] = $role->getResourceOfRole($id);
				//print_r($roleInfo['res']);
				$resarr=array();
				if ($roleInfo['res']){
					foreach ($roleInfo['res'] as $res){
						$resarr[] = $res['rs_id'];
					}
					$res = $role->getResourceList();
					foreach($res as &$item){
						if( in_array( $item['rs_id'], $resarr ) ){
							$item['selected'] = 1;
						}else{
							$item['selected'] = 0;
						}
					}
				}else{
					$res = $role->getResourceList();
					foreach($res as &$item){
						$item['selected'] = 0;
					}
				}
				//print_r($res);
				$this->view->rolename = $roleInfo["role_name"];
				$this->view->resList = $res;
				
				echo $this->view->render("modifyrole.htm");
			}
		}else{
			
			$this->Rolelist();
		}
		
		
		
	}
	
	public function Adduser(){
		if($_POST){
			//Array ( [user] => dsfd [pw] => fdsfsd [repw] => dfsfds [role] => 1 [Submit] => 提交 )
			//print_r($_POST);
			if($_POST['pw'] != $_POST['repw']){
				
				$this->view->user = $_POST['user'];
				$this->view->realname = $_POST['realname'];
				$this->view->result = $this->_lang->liangcimimabuyizhi;
				
			}else{
				
				$user = new user();
				$userCanUse = $user->userCanUse($_POST['user']);
				if( $userCanUse == -1 ){
					$this->view->result = $this->_lang->yonghumingbukeyong;
				}else if($userCanUse == 0 ){
					$this->view->result = $this->_lang->yonghumingyicunzai;
				}else{
					$result = $user->addUser($_POST['user'], $_POST['realname'], $_POST['pw'], $_POST['role']);
					if($result>0){
						$this->view->result = $this->_lang->gongxinin."[".$_POST['user']."]".$this->_lang->tianjiachenggong;
					}else{
						$this->view->result = $this->_lang->tianjiashibai;
					}
				}
			}
			
			
		}
		$role = new role();
		$rolelist = $role->getRolesList();
		$this->view->role = $rolelist;
		echo $this->view->render("adduser.htm");
	}
	
	public function Modifyuser(){
		
		
		
		if( $id = $this->getRequest()->get("id") ){
			$user = new user();
			if($_POST){
				$changePw = true;
				//print_r($_POST);
				if( $_POST['pw'] != "" && $_POST['pw'] == $_POST['repw'] ){
					//echo $_POST['pw'];
					$changePw = $user->setPw($id, $_POST['pw']);
				}
				
				if($changePw){
					$result = $user->modUserInfo($id, array("user_realname"=>$_POST["realname"],"role_id"=>$_POST['role']));
					if($result){
						$this->view->result = $this->_lang->xiugaichenggong;
					}else{
						$this->view->result = $this->_lang->xiugaibufenshibai;
					}
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
					
			}
			
			$userinfo = $user->getUserFromUserid($id);
			if($userinfo){
				$this->view->userInfo = $userinfo;
			}
			$role = new role();
			$rolelist = $role->getRolesList();
			$this->view->role = $rolelist;
			echo $this->view->render("modifyuser.htm");
		}else{
			$this->Userlist();
		}
		
		
	}

}
