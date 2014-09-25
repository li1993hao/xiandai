<?php 
//jobGuid 就业指导
//jobPlan 职业生涯规划
//entreGuid 创业指导

class IndexController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->view->web_url = $this->getRequest()->hostUrl; 
	}

	public function Index(){
		$userinfo = $this->getData("userinfo");

		$jobInfoDao  = new jobinfo();	
		$this->view->jobAct =  $jobInfoDao->getCM("jobAct",1,4); 	  //工作动态
		$this->view->jobNotice = $jobInfoDao->getCM("jobNotice",1,4); //通知公告	
		$this->view->jobGuid = $jobInfoDao->getCM("jobGuid",1,4); //就业指导	
		$this->view->jobPlan = $jobInfoDao->getCM("jobPlan",1,4); //职业生涯规划	
		$this->view->entreGuid = $jobInfoDao->getCM("entreGuid",1,4); //创业指导	


		$this->view->fellowVisited = $jobInfoDao->getCM("fellowVisited",1,4); //校友寻访 8
		$this->view->empStar = $jobInfoDao->getCM("empStar",1,4); //创就业明星	 9
		$this->view->bulletin = $jobInfoDao->getCM("bulletin",1,4); //就业工作简报	 12
		$this->view->stuNotice = $jobInfoDao->getCM("stuNotice",1,4); //学生就业通知	 13

		//招聘会日历
		$job = new jobfairmsg();
		if($userinfo){
			$jobFair = $job->getRecentCorpMsg(6,1);
		}else{
			$jobFair = $job->getRecentCorpMsg(6,0);
		}
		$this->view->jobFair = $jobFair;
		$tempArray =  array();
		if(count($jobFair) < 5){
			$tempCount = 5 - count($jobFair);
			for($i =0; $i<$tempCount; $i++){
				$tempArray[$i] = $i;
			}
		}
		$this->view->tempCalendar = $tempArray;

		//招聘会信息
		if($userinfo){
			$jobFairMsg = $job->getJobfairPageModel(1,9,null,3,null,1);
		}else{
			$jobFairMsg = $job->getJobfairPageModel(1,9,null,3,null,0);
		}
		$this->view->jobFairMsg = $jobFairMsg['list'];
		
		//招聘和实习信息
		$jobcim =  new  corpinternmsg();
		if($userinfo){
			$corpMsg = $jobcim->getCorpPageModel(1,6,null,"pass");
		}else{
			$corpMsg = $jobcim->getCorpPageModel(1,6,null,"pass",false);
		}
		if($userinfo){
			$interMsg = $jobcim->getInternPageModel(1,6,null,"pass");
		}else{
			$interMsg = $jobcim->getInternPageModel(1,6,null,"pass",true);
		}
		$this->view->corpMsg = $corpMsg["list"]; //招聘信息
		$this->view->interMsg = $interMsg["list"]; //实习信息

		$friendlink = new friendlink();
		$this->view->friendlink = $friendlink->getLinkList();


		if( !isset($_COOKIE['hasvisited']) ){
			$log = new log();
			if( $log->addSiteVisite() ){
				$this->setcookie("hasvisited",1,3600);
			}
		}

		$this->view->display("index.htm");
	}


	public function feedback(){
		$title = "无";
		$content = $this->getRequest()->get("content");
		$ui = $this->getRequest()->get("ui");
		$info = $this->getRequest()->get("info");
		$fun = $this->getRequest()->get("fun");
		if($title && $content && $ui && $info && $fun){
			$ip = $this->getRequest()->getClientIp();
			$feedback = new feedback();
			if( ($lastInfo = $feedback->getLastFeedbackFromIp($ip) ) && ( ( strtotime( $lastInfo["fb_time"] ) - strtotime("today") ) > 0 ) ){
				$this->view->setMsg("您今天已经做出过了反馈~");
				$this->view->setState(0);
			}else{
				if( ($result =  $feedback -> addfeedback( 1, $title, $content, $ui, $info, $fun,$ip,VERSION )) == 1 ){
					$this->view->setMsg();
					$this->view->setState(1);
				}else if($result == -1){
					$this->view->setMsg("含有非法字符！");
					$this->view->setState(0);
				}else{
					$this->view->setMsg("发布失败！");
					$this->view->setState(0);
				}
			}

		}else{
			$this->view->setMsg("信息不完整");
			$this->view->setState(0);
		}
		$this->view->display("json");
	}







}