<?php
class FrontuserController extends Controller{

	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}

	public function Student(){
		echo $this->view->render("student.html");
	}

	public function Getallstudentinfo(){
		$type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 0;
		$college = $this->getRequest()->get("college") ? $this->getRequest()->get("college") : 0;
		if ($college == "null"){
			$college = 0;
		}
		$grade = $this->getRequest()->get("grade") ? $this->getRequest()->get("grade") : 0;
		//echo $grade;
		$degree = $this->getRequest()->get("degree");
		if ($degree == ""){
			$degree = 3;
		}
		//echo $degree;
		$pro = $this->getRequest()->get("major") ? $this->getRequest()->get("major") : 0;
		if ($pro == "null"){
			$pro = 0;
		}
		$page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1;
		$gender = $this->getRequest()->get('gender');
		$stuname = $this->getRequest()->get('stuname');
		$number = $this->getRequest()->get('number');
		$state = $this->getRequest()->get('state');

		$pageNum = 8;
		$stu = new student();
		$stuList = $stu->getAllStudentInfo($type, $college, $grade, $degree, $pro, $page, $pageNum, $gender, $stuname, $number, $state);
		//var_dump($stuList);
		if ($stuList){
			if ($type == 0){
				if ($stuList['list']){
					$this->view->setState("1");
					$this->view->setData($stuList);
					$this->view->setMsg("success");
				}else{
					$this->view->setState("0");
					$this->view->setMsg("failed");
				}
			}else if ($type == 1){
				$temp = -1;
				$proArr = array();
				$proArr[0]['pro']= $stuList[0]['stu_pro'];
				for($i = 0; $i < count($stuList); $i++){
					$flag = -1;
					$temp = $temp + 1;
					for ($j = 0; $j < $i; $j++){
						if ($proArr[$j]['pro'] == $stuList[$i]['stu_pro']){
							$flag = $j;
							$temp -= 1;
							break;
						}else {
							continue;
						}
					}
					if ($flag == -1){
						$proArr[$temp]['pro']= $stuList[$i]['stu_pro'];
						//var_dump($proArr);
						//echo $i;
					}
				}
				$this->view->setState("1");
				$this->view->setData($proArr);
				$this->view->setMsg("success");
			}else if($type == 2){
				$temp = -1;
				$gradeArr = array();
				$gradeArr[0]['grade']= $stuList[0]['stu_grade'];
				for($i = 0; $i < count($stuList); $i++){
					$flag = -1;
					$temp = $temp + 1;
					for ($j = 0; $j < $i; $j++){
						if ($gradeArr[$j]['grade'] == $stuList[$i]['stu_grade']){
							$flag = $j;
							$temp -= 1;
							break;
						}else {
							continue;
						}
					}
					if ($flag == -1){
						$gradeArr[$temp]['grade']= $stuList[$i]['stu_grade'];
						//var_dump($proArr);
						//echo $i;
					}
				}
				$this->view->setState("1");
				$this->view->setData($gradeArr);
				$this->view->setMsg("success");
			}else{
				$temp = -1;
				$collegeArr = array();
				$collegeArr[0]['college']= $stuList[0]['stu_college'];
				for($i = 0; $i < count($stuList); $i++){
					$flag = -1;
					$temp = $temp + 1;
					for ($j = 0; $j < $i; $j++){
						if ($collegeArr[$j]['college'] == $stuList[$i]['stu_college']){
							$flag = $j;
							$temp -= 1;
							break;
						}else {
							continue;
						}
					}
					if ($flag == -1){
						$collegeArr[$temp]['college']= $stuList[$i]['stu_college'];
						//var_dump($proArr);
						//echo $i;
					}
				}
				$this->view->setState("1");
				$this->view->setData($collegeArr);
				$this->view->setMsg("success");
			}
		}else{
			$this->view->setState("0");
			$this->view->setMsg("failed");
		}
		$this->view->display("json");
	}


	public function getstudetail(){

		$id = $this->getRequest()->get('infoid');
		$student = new student();
		$fuser = new frontuser();
		$studetail = $fuser->getUserFromAccount($id,true);
		$this->view->setData($studetail);
		$this->view->display('json');
	}

	public function Getcompanyuser(){
		echo $this->view->render("company.html");
	}
	public function resetpw(){
		$stuid = $this->getRequest()->get('stuid');
		$pw = $this->getRequest()->get('pw');
		$fuser = new frontuser();
		if($fuser->setPw($stuid, $pw)){
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}


	public function enablestu(){
		$stuid = $this->getRequest()->get('id');
		$fuser = new frontuser();
		if($fuser->enable($stuid)){
			$this->gotoUrl("frontuser","student");
		}else{
			echo "error";
		}

	}

	public function disablestu(){
		$stuid = $this->getRequest()->get('id');
		$fuser = new frontuser();
		if($fuser->disable($stuid)){
			$this->gotoUrl("frontuser","student");
		}else{
			echo "error";
		}

	}

	public function Getcompanylist(){
		$verifyState = $this->getRequest()->get("state");
		$activeState = $this->getRequest()->get("active");
		$page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1;
		$pageNum = 10;
		$frontuser = new frontuser();
		$comList = $frontuser->Getcompanyuserlist($verifyState, $activeState, $page, $pageNum);
		if ($comList['list']){
			$this->view->setState("1");
			$this->view->setData($comList);
			$this->view->setMsg("success");
		}else {
			$this->view->setState("0");
			$this->view->setMsg("failed");
		}
		$this->view->display("json");
	}

	public function Setpassword(){
		$fuId = $this->getRequest()->get("id");
		$password = $this->getRequest()->get("pw");
		$frontuser = new frontuser();
		$isSuccess = $frontuser->setPw($fuId, $password);
		if ($isSuccess) {
			$this->view->setState("1");
			$this->view->setMsg("success!");
		}else {
			$this->view->setState("0");
			$this->view->setMsg("failed!");
		}
		$this->view->display("json");
	}

	public function Changestaus(){
		$frontuser = new frontuser();
		if ($this->getRequest()->get("id")){
			$info = $frontuser->getUserFromAccount($this->getRequest()->get("id"),$this->getRequest()->get("id"));
			if ($info['isable'] == 0){
				$isChange = $frontuser->changeStaus($this->getRequest()->get("id"), 1);
			}else{
				$isChange = $frontuser->changeStaus($this->getRequest()->get("id"), 0);
			}
			if ($isChange){
				$this->view->setState("1");
				$this->view->setMsg("success!");
			}else{
				$this->view->setState("0");
				$this->view->setMsg("failed!");
			}

		}else {
			$this->view->setState("0");
			$this->view->setMsg("missing id!");
		}
		$this->view->display("json");
	}

	public function Delcompany(){
		$frontuser = new frontuser();
		$company = new company();
		if ($this->getRequest()->get("id")){
			$isDel = $frontuser->delCompanyByFuId($this->getRequest()->get("id"));
			if ($isDel){
				$isDelCom = $company->delCompanyByFuId($this->getRequest()->get("id"));
				$this->view->setState("1");
				$this->view->setMsg("success!");
			}else{
				$this->view->setState("0");
				$this->view->setMsg("failed!");
			}
		}else{
			$this->view->setState("0");
			$this->view->setMsg("missing id!");
		}
		$this->view->display("json");
	}

	public function Verifycompany(){
		$frontuser = new frontuser();
		$companyInfo = $frontuser->getUserFromAccount($this->getRequest()->get("id"),$this->getRequest()->get("id"));
		$this->view->detail = $companyInfo;
		//echo "<pre>";
		//print_r($companyInfo);
		echo $this->view->render("verifycompany.html");
	}

	public function Verifyresult(){
		$id = $this->getRequest()->get("id");
		$type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 0;
		$frontuser = new frontuser();
		$token = $frontuser->getTokenByFuId($id);
		$company = new company();
		$mes = new message();
		if ($type == 0){
			//$this->getApp()->getPush()->pushQualificationMsg($token['fu_token'], "资质审核", "资质审核不通过", "15");
			$reason = $this->getRequest()->get("reason");
			$isUpdate = $frontuser->verifyCompany($id, 0, 0, $reason);
			if ($isUpdate){
				$mes ->addMes("", "", 0, 0, $id);
				$this->view->setState("1");
				$this->view->setMsg("success!");
			}else{
				$this->view->setState("0");
				$this->view->setMsg("failed!");
			}
		}else if ($type == 1){
			//$this->getApp()->getPush()->pushQualificationMsg($token['fu_token'], "资质审核", "资质审核通过", "15");
			$outdate =$this->getRequest()->get("outdate");
			$degree = $this->getRequest()->get("degree");
			$isUpdate = $frontuser->verifyCompany($id, 1, $outdate);
			$isSet = $company->setDegree($id, $degree);
			if ($isUpdate && $isSet){
				$mes->addMes("", "", 1, 0, $id);
				$this->view->setState("1");
				$this->view->setMsg("success!");
			}else{
				$this->view->setState("0");
				$this->view->setMsg("failed!");
			}
		}else {
			$this->view->setState("0");
			$this->view->setMsg("no this type!");
		}
		$this->view->display("json");
	}

	public function Companydegree(){
		$ds = new degreeresource();
		if ($_POST){
			$ds->serLimit("allStudentinfo", $_POST['student']);
			$ds->serLimit("publishRecruit", $_POST['recruit']);
			$ds->serLimit("reserveJobfair", $_POST['jobfair']);
			$ds->serLimit("recruitAuditFree", $_POST['recruitfree']);
		}
		$degree = array();
		$dsList = $ds->getAllDegreeSource();
		for ($i = 0; $i < count($dsList); $i++){
			if ($dsList[$i]['dr_en_name'] == "allStudentinfo"){
				$degree['ds']['allStudentinfo'] = $dsList[$i]['dr_limit'];
			}else if ($dsList[$i]['dr_en_name'] == "publishRecruit"){
				$degree['ds']['publishRecruit'] = $dsList[$i]['dr_limit'];
			}else if ($dsList[$i]['dr_en_name'] == "reserveJobfair"){
				$degree['ds']['reserveJobfair'] = $dsList[$i]['dr_limit'];
			}else {
				$degree['ds']['recruitAuditFree'] = $dsList[$i]['dr_limit'];
			}
		}
		$this->view->detail = $degree;
		echo $this->view->render("companydegree.html");
	}
	
	public function xvzhi(){
		$db = new frontuser();
		$mod= $this->getRequest()->get("mod");
		switch($mod){
			case "select";
			$row = $db->selectxvzhi();
			//var_dump($row);
			if($row){
				$this->view->info = $row;
			}
			echo $this->view->render("jiuyexvzhi.html");
			break;
			
			case "upload";
			$title =$this->getRequest()->get("title");
			$content =$this->getRequest()->get("content");
			$fileid =$this->getRequest()->get("fileid");
			$filename =$this->getRequest()->get("filename");
			$result = $db->upldatexvzhi($title,$content,$fileid,$filename);
			if($result){
				echo "成功";
			}else{
				echo "失败";
			}
			break;
		}
	}
}