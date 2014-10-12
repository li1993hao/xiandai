<?php
include_once "Filter.class.php";
class appFilter extends Filter{
	protected $_limitRS=array("student","company","teacher","account");

	public function doFilter(){
		$session = $this->getApp()->loadUtilClass("SessionUtil");

		if($userid = $session->get("session_userid") ){

			$f_user=new frontuser();
			$userdata=$f_user->getUserFromAccount($userid,true);
			//print_r($userdata);
			//exit();
			if( $userdata && $userdata['isable']== 1 ){//用户存在并且用户未被冻结
				
				$this->getApp()->getView()->setStatus(1);
				//$this->getApp()->getView()->userinfo=$userdata;
				//设置用户的信息
				
				//初始化一些信息
				if($userdata["type"] == 0){//学生
					
				}else if($userdata["type"] == 1){//企业
					//获取带有级别限制的功能的级别限制表
					$degreeresource = new degreeresource();
					$info = $degreeresource->getAllDegreeSource();
					
					$arr= array();
					foreach($info as $item){
						$arr[ $item["dr_en_name"] ] = array( "limit"=>$item["dr_limit"], "title"=>$item["dr_cn_name"] );
					}
					$this->getApp()->putData('drTable', $arr);
					

				}else if($userdata["type"] == 2){//教师
					
				}
				$this->getApp()->putData('userinfo', $userdata );
				$this->getApp()->getView()->__userinfo__=$userdata;

			}else{
				$session->clear();
				$this->getApp()->gotoUrl("Index","Index");
			}
			
		}else{
			$view = $this->getApp()->getView();
			if( $this->canViste( $this->getCName() ) ){
				//$this->getApp()->gotoUrl("Account","login");
				//echo "no login but can access!<br/>";
				//$view->setStatus("0");
			}else{
				echo "access deny!";
				$this->getApp()->gotoUrl("Index","Index","2");
				exit();
			
			}
		}
		
		if(! $this->canViste( $this->getCName() ) ){//判断用户是否有权限访问
			$this->getApp()->error404();
			$this->getApp()->gotoUrl("Index","index");
			exit();
		}
		//echo "adminFilter->doFilter";
	}
	
	//检查是否可以访问
	public function canViste($cName){
		$action = $this->getAName();
		if(in_array( strtolower( $cName ) , $this->_limitRS ) ){
			//判断用户的角色所拥有的权限神马的
			if( $userdata = $this->getApp()->getData('userinfo') ){
				
				if( strtolower( $cName ) == "account" ){
					if( strtolower( $action ) == "register" || strtolower( $action ) == "login" ){
						return false;
					}else{
						return true;
					}
				}
				if( $userdata["type"]==0 ){
					if(strtolower( $cName ) == "student") return true;
				}else if( $userdata["type"]==1 ){
					if(strtolower( $cName ) == "company") return true;
				}else if( $userdata["type"]==2 ){
					if(strtolower( $cName ) == "teacher") return true;
				}
			}
			if( strtolower( $cName ) == "account" ){
				return true;
			}
			return false;
		}else{
			return true;
		} 
		
	}
	
}

?>