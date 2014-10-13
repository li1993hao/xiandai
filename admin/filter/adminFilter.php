<?php
include_once "Filter.class.php";
class adminFilter extends Filter{
	public function doFilter(){		
		if( time()>strtotime("2017-5-1") ){
			exit("您的软件使用期限已到！系统已变为只读状态，请与软件服务提供商联系！");
		}
		if($this->getAName() == "Upload"){
			return true;
		}
		if(isset($_COOKIE['cookie_Uid']) && isset($_COOKIE['cookie_Uname']) && isset($_COOKIE['cookie_shell'])){
			$user=new user();
			//print_r($_COOKIE);
			$userdata=$user->authUserFromCookieData($_COOKIE['cookie_Uid'],$_COOKIE['cookie_shell']);
			if($userdata){

				if($this->getCName() == "Account" ){
					if($this->getAName() == "Login"){				
						$this->getApp()->gotoUrl("Index","Index");
						exit();
					}

				}
				//设置用户的信息
				$this->getApp()->putData('userinfo', $userdata );
				//设置用户的可用资源列表
				$role = new role();
				$resList = $role->getResourceOfRole($userdata["role_id"]);
				$resarr=array("index","account");
				//if(is_array($resList)) {
				foreach ($resList as $res){
					$resarr[] = strtolower($res['rs_class']);
				}
				//}
                $mm=rand(100,1000);
                $this->getApp()->getView()->mm=$mm;
				$this->getApp()->putData('resource', $resarr );
				
			}else{
				
				if( !($this->getCName() == "Account" && $this->getAName() == "Login") ){
						$this->getApp()->gotoUrl("Account","login");
						exit();
				}
				
			}
		}else{
			if( !($this->getCName() == "Account" && $this->getAName() == "Login") ){
					$this->getApp()->gotoUrl("Account","login");
					exit();
				
			}
		}
		
		if(! $this->canViste( $this->getCName() ) ){//判断用户是否有权限访问
			$this->getApp()->gotoUrl("Index","index");
			exit();
		}
		//echo "adminFilter->doFilter";
	}
	
	//检查是否可以访问
	public function canViste($cName){
		$resource = $this->getApp()->getData("resource") ? $this->getApp()->getData("resource") : array("index","account");
		if(in_array( strtolower($cName) , $resource ) ){
			return true;
		}else{
			return false;
		}
	}
	
}

?>