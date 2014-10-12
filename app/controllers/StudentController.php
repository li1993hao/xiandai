<?php
class StudentController extends Controller{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}


	/**
	 * 显示学生详情
	 */
	public function myinfo(){
		
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		$student = new student();
		$fuser = new frontuser();
		$studetail = $fuser->getUserFromAccount($id,true);
		$stuindustry = $student->getstuindustry($id);
		$this->view->studetail = $studetail;
		$this->view->stuindustry = $stuindustry;
		//print_r($stuindustry);
		echo $this->view->render("myinfo.html");
	}
	
	/**
	 * 修改学生信息
	 */
	public function modifyinfo(){
		
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		$student = new student();
		$fuser = new frontuser();
		if($_POST){
			//print_r($_POST);
			$inds = explode("," , trim($this->getRequest()->get("stu_in_ind") , ",") );
			$student->delstuindustry($id);
			$student->insertstuindistry($id, $inds);
			
			$modifystu = $fuser->modUserInfo($id, array("stu_gender"=>$_POST["gender"], "stu_birth"=>$_POST['birth'],
					"stu_education"=>$_POST["education"], "stu_college"=>$_POST["college"], "stu_pro"=>$_POST["pro"],
					"stu_grade"=>$_POST["grade"], "stu_source"=>$_POST["source"], "stu_home"=>$_POST["home"],
					"stu_politic"=>$_POST["politic"], "pic_id"=>$_POST["picid"], "file_id"=>$_POST["fileid"],
					"file_name"=>$_POST["filename"], "stu_intro"=>$_POST["intro"]));
			if($modifystu){
				$this->gotoUrl("student","myinfo");
				exit();
			}
		}
		
		$studetail = $fuser->getUserFromAccount($id,true);
		$stuindustry = $student->getstuindustry($id);
		//print_r($studetail);
		$this->view->studetail = $studetail;
		$this->view->stuindustry = $stuindustry;
		$this->view->id = $id; 		//学生id
		$this->view->prov = $student->provlist();
		//print_r($studetail);
		echo $this->view->render("modifyinfo.html");
		
	}
	
	/**
	 * 获取感兴趣的领域
	 */
	public function getindustry(){
		
		$id = $this->getRequest()->get("id");
		$student = new student();
		$industry = $student->getstuindustry($id);
		$this->view->setState(1);
		$this->view->setData($industry);
		$this->view->display('json');
	}
	
	
	public function delallindustry(){
		
		$userinfo = $this->getData("userinfo");
		$id = $userinfo["id"];			//获取学生id
		$student = new student();
		if($student->delstuindustry($id)){
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
	public function deloneindustry(){
		
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		$indid = $this->getRequest()->get('indid');
		$student = new student();
		if($student->delstuindustry($id, $indid)){
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
	public function insertindustry(){
		
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		$indid = $this->getRequest()->get('indid');
		$student = new student();
		if($student->insertstuindistry($id, $indid)){
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
	public function favorjobfair(){
		
		echo $this->view->render("calendar.html");
	}
	
	
	public function Getjsondata(){
		//echo $_POST["start"];
		//echo $_POST["end"];
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		$start = date("Y-m-d H:i:s",@$_POST["start"]/1000);
		$end = date("Y-m-d H:i:s",(@$_POST["end"]/1000)-1);
		//$start = "1970-01-01 08:00:00";
		//$end = "2015-01-01 08:00:00";
 		$student = new student();
		$list = $student->getmyjobfair($id, $start, $end);
		echo json_encode($list);
		//echo $start;
		//print_r($list);
	}
	
	public function canceljobfair(){
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];		//获取id
		$infoid = $this->getRequest()->get('infoid');
		
		$student = new student();
		if($student->canceljobfair($id, $infoid))
			$this->gotoUrl("student","favorjobfair");
	}
	
	
	/**
	 * 操作我收藏的信息
	 */
	public function favorjobinfo(){
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1;
		$type = $this->getRequest()->get('type') ? $this->getRequest()->get('type') : 0;
		
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		
 		$student = new student();
		if($_POST){
			$type = $_POST["select"];
		}
		if($do = $this->getRequest()->get('do'))
		{
			$infoid = $this->getRequest()->get('infoid');
			if($do == "del"){
				$student->delcollect($id, $infoid);
				$this->gotoUrl("student","favorjobinfo");
				exit();
			}elseif($do == "open"){
				$student->openmyinfo($id, $infoid);
				$this->gotoUrl("student","favorjobinfo");
				exit();
			}elseif($do == "close"){
				$student->closemyinfo($id, $infoid);
				$this->gotoUrl("student","favorjobinfo");
				exit();
			}
		}
		
		$favorjoblist = $student->getmyrecruinfo($id, $type, $page, 10);
		//print_r($favorjoblist);
		if($favorjoblist["list"][0]){
			for($i = 0; $i < count($favorjoblist["list"]); $i++){
				$favorjoblist["list"][$i]["publishname"]= $student->getcibpublishname($favorjoblist["list"][$i]["cim_publish"] );
			}
		}
		//print_r($favorjoblist);
		$this->view->type = $type;
		$this->view->joblist = $favorjoblist;
		echo $this->view->render("favorjobinfo.htm");
		
	}
	
	public function delcollect(){
		$infoid = $this->getRequest()->get('infoid');
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];
		$student = new student();
		if($student->delcollect($id, $infoid)){
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display("json");
	}
	
	/**
	 * 收藏信息
	 */
	public function collect(){
		if( ($type = $this->getRequest()->get("type")) === null || ($infoId = $this->getRequest()->get("id")) === null){
			$this->getView()->setMsg("参数提交错误！");
			$this->getView()->setState("0");
		}
		$flag = $this->getRequest()->get("openmyinfo");
		$userinfo = $this->getData("userinfo");
		
		$collect = new collect();
		//$type = 1;
		//id = $infoId;
		//$userinfo['id] = 6;
		
		if( ($code=$collect->add($userinfo["id"], $infoId, $flag, $type))>0 ){
			$this->getView()->setState("1");
			$this->getView()->setMsg("收藏成功！");
		}else{
			$this->getView()->setState("0");
			$this->getView()->setMsg("收藏失败！");
			
			//$this->getView()->setMsg($userinfo["id"].'|'.$infoId.'|'.$flag.'|'.$type);
		}
		
		$this->getView()->display("json");
	}
	/**
	 * 取消收藏的信息
	 * 
	 */
	public function cancelcollect(){
		if( ($type = $this->getRequest()->get("type")) === null || ($infoId = $this->getRequest()->get("id")) === null){
			$this->getView()->setMsg("参数提交错误！");
			$this->getView()->setState("0");
		}
		$userinfo = $this->getData("userinfo");
	
		$collect = new collect();
		if( ($code=$collect->delete( $userinfo["id"], $infoId,  $type) ) !== false ){
			$this->getView()->setState("1");
			$this->getView()->setMsg("取消收藏成功！");
		}else{
			$this->getView()->setState("0");
			$this->getView()->setMsg("取消收藏失败！");
		}
	
		$this->getView()->display("json");
	}
	
	
	public function changepw(){
		$userinfo = $this->getData("userinfo");
 		$id = $userinfo["id"];	//登录信息
		$fuser = new frontuser();
		
		if($_POST){
			if($_POST['old'] && $_POST['new'] && $_POST['renew']){
				if($_POST['new'] != $_POST['renew']) $result = $this->_lang->liangcimimabuyizhi;
				else{
					
					
					$userinfo = $fuser->getUserFromAccount($id,true);
					$result = $fuser -> changePw( $userinfo['id'], $_POST['old'], $_POST['new'] ); //修改密码
					$reCode = $result['result'];
					if( $reCode == 1){
		
						$this->setcookie("cookie_Uid",$userinfo['id'])
						->setcookie("cookie_shell",$fuser->getUserShell($userinfo['id'],$userinfo['name'],$result['newPw']) );
						$result = $this->_lang->xiugaichenggong;
					}else if( $reCode == -1 ){
						$result = $this->_lang->mimashurucuowu;
					}else{
						$result = $this->_lang->xiugaishibai;
					}
				}
			}else{
				$result = $this->_lang->xinxishurubuwanzheng;
			}
		}else{
			$result="";
		}
		
		$this->view->studetail = $fuser->getUserFromAccount($id,true);
		$this->view->result=$result;
		echo $this->view->render("changepw.html");
		
	}
	
	
	
}