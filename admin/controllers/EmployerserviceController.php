<?php

class EmployerserviceController extends Controller
{
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	protected function _dosomething($employerservicemsg){
		if( $do = $this->getRequest()->get('do') ){
			//echo $do;
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($employerservicemsg->delmsg($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "up"){
				if($this->getRequest()->get('id')){
					if($employerservicemsg->updateIsup($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "cancelup"){
				if($this->getRequest()->get('id')){
					if($employerservicemsg->cancelup($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	
	}
	//添加院系介绍
	public function Addcollegeintro()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$collegeintro=new collegeintroduction();
		$date=date('Y-m-d H:i:s',time());
		if ($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
			//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : 0;
		  {
			$result=$collegeintro->addcollegeintro($_POST['title'], $date,addslashes($_POST['content']),$userinfo['user_id']);
			
			$this->view->result=$result;
			if($result>0){
				$this->view->result = $this->_lang->tianjiachenggong;
			}else{
				$this->view->result = $this->_lang->tianjiashibai;
			}
		  }
		}
		echo $this->view->render("addcollegeintro.htm");
	}
	//管理院系介绍
	public function Getcollegeintromsglist()
	{
		$ccimsg = new collegeintroduction();
		$this->view->result = $this->_dosomething($ccimsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$cciList = $ccimsg->getCollegePageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->ccilist = $cciList;
	
		echo $this->view->render("collegeintromsg.htm");
	}
	//修改生源信息
	public function editccimsg()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		if($_POST){
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
		 {
			$ccimsg = new collegeintroduction();
			//print_r($_POST);
			//$id = $this->getRequest()->get("id");
			//$userid=$corpmsg->getuserid($_POST['username']);
		
			$result=$ccimsg->updateccimsg( $id, $_POST['title'], $userinfo['user_id'], $_POST['content']);
			if($result){
				$this->view->result = $this->_lang->xiugaichenggong;
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
		  }
		}
		if($id)
		{
			$ccimsg = new collegeintroduction();
			$cciinfo = $ccimsg->getDetailInfoFromId($id);
			//print_r($corpinfo);
			$this->view->detail = $cciinfo;
		}
		
		echo $this->view->render("editccimsg.htm");
	}
	//添加生源信息
	public function Addsourceinfo()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$sourceinfo=new sourceinformation();
		$date=date('Y-m-d H:i:s',time());
		if ($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
		 {
			//print_r($_POST);
		//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : 0;
			if($_POST['fileid']> 0){
				$result=$sourceinfo->addsourceinfo($_POST['title'], $date,$_POST['content'],$userinfo['user_id'],$_POST['filetitle'],$_POST['fileid']);
			}else{
				$result=$sourceinfo->addsourceinfo($_POST['title'], $date,$_POST['content'],$userinfo['user_id']);
			}
			$this->view->result=$result;
			if($result>0){
				$this->view->result = $this->_lang->tianjiachenggong;
			}else{
				$this->view->result = $this->_lang->tianjiashibai;
			}
		  }
		}
		echo $this->view->render("addsourceinfo.htm");
	}
	//管理院系介绍
	public function Getsourceinfomsglist()
	{
		$simsg = new sourceinformation();
		$this->view->result = $this->_dosomething($simsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$siList = $simsg->getSourcePageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->silist = $siList;
	
		echo $this->view->render("sourceinfomsg.htm");
	}
	//修改生源信息
	public function editsimsg()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		if($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
			{
			$simsg = new sourceinformation();
			//print_r($_POST);
			//$id = $this->getRequest()->get("id");
			//$userid=$corpmsg->getuserid($_POST['username']);
			//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : null;
			if($_POST['fileid']>0){
				$result=$simsg->updatesimsg( $id, $_POST['title'], $userinfo['user_id'],$_POST['content'],$_POST['filetitle'],$_POST['fileid']);
			}else{
				$result=$simsg->updatesimsg( $id, $_POST['title'], $userinfo['user_id'],$_POST['content']);
			}
			if($result){
				$this->view->result = $this->_lang->xiugaichenggong;
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
			}
		}
		if($id)
		{
			$simsg = new sourceinformation();
			$siinfo = $simsg->getDetailInfoFromId($id);
			//print_r($corpinfo);
			$this->view->detail = $siinfo;
		}
		
		echo $this->view->render("editsimsg.htm");
	}
	public function Recruitment()
	{
		$recruitment = new recruitmentmanagement();
		$rec = $recruitment->getRecruitment();
		$this->view->recruitment = $rec;
		echo $this->view->render("recruitment.html");
	}
	public function Editrecruitment()
	{
		$recruitment = new recruitmentmanagement();
		if($_POST)
		{
			if($_POST['content']== NULL)
			{
				$this->view->result = $this->_lang->zhengwenbunengweikong;
			}
			else {
				$edit = $recruitment->updateContent(1, addslashes($_POST['content']));
				if($edit){
					$this->view->result=$this->_lang->xiugaichenggong;
				}else{
				$this->view->result = $this->_lang->xiugaishibai;}			
			}
		}
		$rec = $recruitment->getRecruitment();
		$this->view->editrecruitment = $rec;
		echo $this->view->render("editrecruitment.html");
	}
	public function Getteamlist()
	{
		$teaminfo= new employmentteam();
		$this->view->result = $this->_doteam($teaminfo);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$teamList = $teaminfo->getTeamPageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->teamlist = $teamList;
		
		echo $this->view->render("team.html");
	}
	public function Addemploymentteam()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$employmentteaminfo = new employmentteam();
		if ($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
				//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : 0;
			{
				$result=$employmentteaminfo->AddeEploymentteam($_POST['title'],addslashes($_POST['content']),$userinfo['user_id']);
					
				$this->view->result=$result;
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
		}
		echo $this->view->render("addemploymentteam.html");
	}
	public function Editteam()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		$employmentteaminfo = new employmentteam();
		if($_POST){
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
			{
		
				$result=$employmentteaminfo->EditEmploymentteam($id, $_POST['title'], $_POST['content'],$userinfo['user_id']);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		if($id)
		{
			$detailinfo = $employmentteaminfo->GetInfo($id);
			$this->view->detail = $detailinfo;
		}
		
		echo $this->view->render("editteam.html");
	}
	protected function _doteam($teaminfo)
	{
		if( $do = $this->getRequest()->get('do') ){
			//echo $do;
		
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($teaminfo->Delteam($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "top"){
				if($this->getRequest()->get('id')){
					if($teaminfo->setTop($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "canceltop"){
				if($this->getRequest()->get('id')){
					if($teaminfo->cancalTop($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	}
}	
