<?php
class StudentjobinfoController extends Controller
{
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	protected function _dosomething($studentjobinfomsg){
		if( $do = $this->getRequest()->get('do') ){
			//echo $do;
	
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($studentjobinfomsg->delmsg($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "up"){
				if($this->getRequest()->get('id')){
					if($studentjobinfomsg->updateIsup($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "cancelup"){
				if($this->getRequest()->get('id')){
					if($studentjobinfomsg->cancelup($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else if($do == "delqi"){
				if($this->getRequest()->get('id')){
					$result = $studentjobinfomsg->delqi($this->getRequest()->get('id'));
					if( $result > 0 ){
						return $this->_lang->shanchuchenggong;
					}else if($result < 0 ){
						return ($this->_lang->neirongbuweikong).",".($this->_lang->shanchushibai);
					}else{
						return $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			}else if($do == "delban"){
				if($this->getRequest()->get('id')){
					$result = $studentjobinfomsg->delban($this->getRequest()->get('id'));
					if( $result > 0 ){
						return $this->_lang->shanchuchenggong;
					}else if($result < 0 ){
						return ($this->_lang->neirongbuweikong).",".($this->_lang->shanchushibai);
					}else{
						return $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			}
			else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	
	}
	//添加学生就业通讯
	public function Newstudentjobcomm()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$period=new periodicals();
		$peridslist=$period->getPerIdList();
		//$date=date('Y-m-d H:i:s',time());
		$this->view->perid=$peridslist;
		if ($_POST)
		{
			//$userinfo = $this->getData('userinfo');
			//$userid=$period->getuserid($_POST['username']);
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['periods'] == NULL)
			{
				$this->view->result = $this->_lang->qikanhaobunengweikong;
			}
			elseif ($_POST['banmian'] == "0")
			{
				$this->view->result = $this->_lang->banmianhaobunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else 
			{
				$result=$period->addarticle($_POST['periods'],$_POST['title'], $_POST['banmian'],$_POST['picid'],addslashes($_POST['content']),$userinfo['user_id']);
				$this->view->result=$result;
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
			

		}
		echo $this->view->render("newstudentjobcomm.htm");
	}
	//管理学生就业通讯
	public function Getstudentjobcomsglist()
	{
		$amsg = new periodicals();
		$this->view->result = $this->_dosomething($amsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$aList = $amsg->getsjcPageModel($page,$pageSize);
		//print_r($aList);
		$this->view->alist = $aList;
	
		echo $this->view->render("studentjobcomsg.htm");
	}
	//修改学生就业通讯
	public function editstujcomsg()
	{
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$stujcomsg = new periodicals();
	
		if($_POST){
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['periods'] == NULL)
			{
				$this->view->result = $this->_lang->qikanhaobunengweikong;
			}
			elseif ($_POST['banmian'] == "0")
			{
				$this->view->result = $this->_lang->banmianhaobunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else{
				//$stujcomsg = new periodicals();
				//print_r($_POST);
				//$userid = $corpmsg->getuserid($_POST['username']
				//echo $id;
				$result=$stujcomsg->updatearticle( $id, $_POST['periods'],$_POST['banmian'], $_POST['title'],$_POST['picid'], addslashes($_POST['content']),$userinfo['user_id']);
				$this->view->result=$result;
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		
		
		if($id)
		{
			$stujcomsg = new periodicals();
			$stujcoinfo = $stujcomsg->getDetailInfoFromId($id);
			//print_r($corpinfo);
			
			$qi  = $stujcoinfo["p_id"];
			$layoutidlist = $stujcomsg->getLayout($qi);
			$peridslist=$stujcomsg->getPerIdList();
			$this->view->id = $id;
			
			$this->view->layoutid=$layoutidlist;
			
			//$date=date('Y-m-d H:i:s',time());
			$this->view->perid=$peridslist;
			
			$this->view->detail = $stujcoinfo;
			echo $this->view->render("editstujcomsg.htm");
		}else{
			$this->error404($this->_lang->wenzhangyijingshanchu);
		}
		
		
	
	}
	//添加就业工作简报
	public function Newjobbulletin()
	{
      //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$periodicals=new activityjobbulletin();
		$peridlist=$periodicals->getPerIdList();
		//$date=date('Y-m-d H:i:s',time());
		//$addpiclink = new picture();
		$this->view->perid=$peridlist;
		if($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['periodicals'] == "0")
			{
				$this->view->result = $this->_lang->qikanhaobunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
			{
				$result=$periodicals->addbulletin($_POST['periodicals'],$_POST['title'], addslashes($_POST['content']),$_POST['source'],$userinfo['user_id'], $_POST['picid'],$_POST['fileid'],$_POST['filetitle']);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
	  }
	
		echo $this->view->render("newjobbulletin.htm");
	}
	//管理就业活动工作简报
	public function Getjobbulletinlist()
	{
		$jbmsg = new activityjobbulletin();
		$this->view->result = $this->_dosomething($jbmsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		//$id = $this->getRequest()->get('id');
		$jbList = $jbmsg->getJbPageModel($page,$pageSize);
		//print_r($jbList);
		$this->view->jblist = $jbList;
	
		echo $this->view->render("jobbulletinmsg.htm");
	}

	//修改活动工作简报
	public function editjbmsg()
	{
        //生成随机数
       $mm=rand(100,1000);
       $this->view->mm=$mm;
		$jbmsg=new activityjobbulletin();
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		
		if($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['periodicals'] == "0")
			{
				$this->view->result = $this->_lang->qikanhaobunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}else{
			
				$result = $jbmsg->updatejbmsg($id, $_POST['title'],$_POST['periodicals'],$_POST['source'], $_POST['picid'], $userinfo['user_id'], addslashes($_POST['content']),$_POST['fileid'],$_POST['filetitle']);
				////print_r($_POST);
				$this->view->result=$result;
					
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		
		
		
		
		
		if($id)
		{
			$peridlist=$jbmsg->getPerIdList();
			$this->view->perid=$peridlist;
			$this->view->id = $id;
			
			$jbinfo = $jbmsg->getDetailInfoFromId($id);
			//print_r($corpinfo);
			$this->view->detail = $jbinfo;
			echo $this->view->render("editjbmsg.htm");
			
		}else{
			$this->error404($this->_lang->wenzhangyijingshanchu);
		}
		
		
	}
	//添加新的访谈记录
	public function Newalumuns()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$alumunsreport=new professionpersontalk();
		//$date=date('Y-m-d H:i:s',time());
		//$this->view->alumunid=$alumunlist;
		if ($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['alumunname'] == NULL)
			{
				$this->view->result = $this->_lang->xiaoyouxingmingbunengweikong;
			}
			elseif ($_POST['graduateyear'] == NULL)
			{
				$this->view->result = $this->_lang->biyeniandubunengweikong;
			}
			elseif ($_POST['mail'] == NULL)
			{
				$this->view->result = $this->_lang->lianxifangshibunengweikong;
			}
			elseif ($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->fangtanrenxingmingbunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
		 	{
			//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : 0;
			//$userinfo = $this->getData('userinfo');
			$aiid=$alumunsreport->addalumsallinfo($_POST['alumunname'], $_POST['graduateyear'],$_POST['time'],$_POST['disciplline'], $_POST['where'],$_POST['position'],$_POST['mail']);
			$reid=$alumunsreport->addinterviewersallinfo($_POST['name'], $_POST['grade'],$_POST['discipline']);
			$result=$alumunsreport->addalumunreport($aiid,$reid,$_POST['title'], $_POST['vtime'],$_POST['city'],addslashes($_POST['content']),$userinfo['user_id'],$_POST['picid']);
			$this->view->result=$result;
			if($result>0){
				$this->view->result = $this->_lang->tianjiachenggong;
			}else{
				$this->view->result = $this->_lang->tianjiashibai;
			}
		  }
		}
		echo $this->view->render("newalumuns.htm");
	}
	//管理校友寻访信息
	public function Getprofessionpersontalkmsglist()
	{
		$pptmsg = new professionpersontalk();
		$id = $this->getRequest()->get('id');
		$ppt = $pptmsg->getTalkDetail($id);
		$aiid = $ppt["ai_id"];
		$reid = $ppt["re_id"];
		if( $do = $this->getRequest()->get('do') ){
			if($do == "del"){
				if($this->getRequest()->get('id')){
					$result = $pptmsg->delmsg($id,$aiid,$reid);
					if($result){
					
						$this->view->result =  $this->_lang->shanchuchenggong;
					}
					else{
						$this->view->result = $this->_lang->shanchushibai;
					}					
				}
			}else{
				$this->view->result = $this->_dosomething($pptmsg);
			}
		}
		//$this->view->result = $this->_dosomething($pptmsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$pptList = $pptmsg->getAlumunsPageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->pptlist = $pptList;
	
		echo $this->view->render("professionpersontalkmsg.htm");
	}
	//修改校友访谈
	public function editpptmsg()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		//$this->view->id = $id;		
		if($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['alumunname'] == NULL)
			{
				$this->view->result = $this->_lang->xiaoyouxingmingbunengweikong;
			}
			elseif ($_POST['graduateyear'] == NULL)
			{
				$this->view->result = $this->_lang->biyeniandubunengweikong;
			}
			elseif ($_POST['mail'] == NULL)
			{
				$this->view->result = $this->_lang->lianxifangshibunengweikong;
			}
			elseif ($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->fangtanrenxingmingbunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else{
				$pptmsg = new professionpersontalk();
				$aiid=$pptmsg->getAiidFromid($id);
				$reid=$pptmsg->getReidFromid($id);				
				$aiidmsg=$pptmsg->updateaimsg($aiid["ai_id"],$_POST['alumunname'], $_POST['graduateyear'],$_POST['time'],$_POST['disciplline'], $_POST['where'],$_POST['position'],$_POST['mail']);
				$reidmsg=$pptmsg->updateremsg($reid['re_id'],$_POST['name'], $_POST['grade'],$_POST['discipline']);
				$result=$pptmsg->updatepptmsg($id,$_POST['title'],$_POST['vtime'],$_POST['city'],addslashes($_POST['content']),$_POST['picid']);
					
				//print_r($_POST);
					
				$this->view->result=$result;
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
		  	}
		}
		if($id)
		{
			$pptmsg = new professionpersontalk();
			$pptinfo = $pptmsg->getDetailInfoFromId($id);
			////print_r($corpinfo);
			$this->view->detail = $pptinfo;
			echo $this->view->render("editpptmsg.htm");
		
		}else{
			$this->error404($this->_lang->wenzhangyijingshanchu);
		}
		
		
	}
	
	//添加职业起航
	public function Newprofessionsail()
	{
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$pro=new professionsail();
		//$date=date('Y-m-d H:i:s',time());
		$addpiclink = new picture();
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
			
				$result=$pro->addprofessionsail($_POST['title'], addslashes($_POST['content']),$_POST['picid'],$userinfo['user_id']);
				$this->view->result=$result;
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
				
			}
		}
		echo $this->view->render("newprofessionsail.htm");
	}
	//管理职业起航
	public function Getprofessionsailmsglist()
	{
		$psmsg = new professionsail();
		$this->view->result = $this->_dosomething($psmsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$psList = $psmsg->getSailPageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->pslist = $psList;
	
		echo $this->view->render("professionsailmsg.htm");
	}
	
	//修改职业起航
	public function editpsmsg()
	{
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;	
		$psmsg = new professionsail();
		$id = $this->getRequest()->get("id");
		//$this->view->id = $id;
		//$addpiclink = new picture();
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
			else{
				
				//$this->view->result=$result;
				$result = $psmsg->updatepsmsg($id, $_POST['title'], $_POST['picid'], $userinfo['user_id'],addslashes($_POST['content']));
				////print_r($_POST);
				$this->view->result=$result;
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
		  	}
		}
		
		if($id)
		{
			
			$psinfo = $psmsg->getDetailInfoFromId($id);
			////print_r($corpinfo);
			$this->view->detail = $psinfo;
			echo $this->view->render("editpsmsg.htm");
		}else{
			$this->error404($this->_lang->wenzhangyijingshanchu);
		}
		
		
	}
	
	
	
	/**
	 * 添加一期
	 */
	public function addperidos(){
		
		$period=new periodicals();
		
		$result = $period->addperiodicals();
		echo json_encode($result);
		
	}
	
	public function getlayoutlist(){
		if($_POST){
			if(array_key_exists("pid", $_POST)){
				$id = $_POST["pid"];
				$period=new periodicals();
				$result = $period->getLayout($id);
				if($result){
					$array = array("result"=>1,'data'=>$result,'pid'=>$id);
				}else{
					$array = array("result"=>1,'data'=>array(),'pid'=>$id);
				}
				echo json_encode($array);
			}
		}else{
			$array = array("result"=>0,'data'=>"no pid");
			echo json_encode($array);
		}
		
	}
	
	public function addlayout(){
		if($_POST){
			//print_r($_POST);
			if(array_key_exists("pid", $_POST)){
				$pid = $_POST["pid"];
				$period=new periodicals();
				$result = $period->addlayout($pid);
				echo json_encode($result);
			}
		}else{
			$array = array("result"=>0);
			echo json_encode($array);
		}
	}
	
	public function addbullentinperidos(){
		
		$ap = new activityjobbulletin();
		$result = $ap->addperiodicals();
		echo json_encode($result);
	}
	
}

?>