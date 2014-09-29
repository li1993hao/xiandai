<?php 
//jobGuid 就业指导
//jobPlan 职业生涯规划
//entreGuid 创业指导

class IndexController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->view->web_url = $this->getRequest()->hostUrl; 
	}


    public function  test(){
        $jobInfo = new jobinfo();
        $recNews = $jobInfo->getRecNews();
        print_r($recNews);
    }

	public function Index(){
		$userinfo = $this->getData("userinfo");

		$jobInfoDao  = new jobinfo();	
		$this->view->jobAct =  $jobInfoDao->getCM("jobAct",1,4); 	  //工作动态
		$this->view->jobNotice = $jobInfoDao->getCM("jobNotice",1,4); //通知公告	
		$this->view->jobGuid = $jobInfoDao->getCM("jobGuid",1,4); //就业指导	
		$this->view->jobPlan = $jobInfoDao->getCM("jobPlan",1,4); //职业生涯规划	
		$this->view->entreGuid = $jobInfoDao->getCM("entreGuid",1,4); //创业指导	

        //首页焦点图
        $recNews = $jobInfoDao->getRecNews();
        //print_r($recNews);
        $this->view->recNews = $recNews;

		//校友寻访 8
		$ppt = new professionpersontalk();
		$schoolFri = $ppt->getAlumunsPageModel(1,7);
		$this->view->fellowVisited = $schoolFri["list"];

		//就业工作简报
		$ajb = new activityjobbulletin();
		$ajbInfo = $ajb->getBulletinPageModel(1,4);
		$this->view->bulletin = $ajbInfo["list"];


		//就业通讯
		$jobpds = new periodicals();
		$pdsInfo = $jobpds->getArticalPageModel(1,4);
		$this->view->stuNotice = $pdsInfo["list"];

		//创就业明星
		$this->view->empStar =$jobInfoDao->getCM("empStar",1,4); //创业指导


		//渤海
		$westWork = new westWork();
		$wwPerson = $westWork->getPersons(1,2);
		//print_r($wwOtherNews);
		$this->view->wwPersons = $wwPerson;


		//招聘会日历
        $job = new jobfairmsg();
        if($userinfo){
            $jobFair = $job->getRecentCorpMsg(5,1);
        }else{
            $jobFair = $job->getRecentCorpMsg(5,0);
        }
        $this->view->jobFair = $jobFair;

        if(!$jobFair){
            $tempCount = 5;
        }else{
            $tempCount = 5 - count($jobFair);
        }
        $tempArray =  array();
        for($i =0; $i<$tempCount; $i++){
            $tempArray[$i] = $i;
        }
        $this->view->tempCalendar = $tempArray;

		//招聘会信息
		if($userinfo){
			$jobFairMsg = $job->getJobfairPageModel(1,5,null,3,null,1);
		}else{
			$jobFairMsg = $job->getJobfairPageModel(1,5,null,3,null,0);
		}
		$this->view->jobFairMsg = $jobFairMsg['list'];
		
		//招聘和实习信息
		$jobcim =  new  corpinternmsg();
		if($userinfo){
			$corpMsg = $jobcim->getCorpPageModel(1,5,null,"pass",true);
		}else{
			$corpMsg = $jobcim->getCorpPageModel(1,5,null,"pass",false);
		}
		if($userinfo){
			$interMsg = $jobcim->getInternPageModel(1,5,null,"pass",true);
		}else{
			$interMsg = $jobcim->getInternPageModel(1,5,null,"pass",false);
		}


		$this->view->corpMsg = $corpMsg["list"]; //招聘信息
		$this->view->interMsg = $interMsg["list"]; //实习信息

		$friendlink = new friendlink();
		$this->view->friendlink = $friendlink->geyAllLink();


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



	/**
	 * 登录
	 */
	public function login(){
		$username = $this->getRequest()->get("user_name");
		$password = $this->getRequest()->get("user_pswd");
		$f_user = new frontuser();
		$result = $f_user->authUser( $username, $password );
		if($result["result"] > 0){
			//验证通过
			$this->getView()->setState("1");
			$this->getView()->setMsg($result["msg"]);
			$this->getView()->setStatus("1");
			$sessionUtil = $this->getApp()->loadUtilClass("SessionUtil");
            $this->getView()->setData(array("userType"=>$result["userinfo"]["type"],"userTypeName"=>$result["userinfo"]["typename"],"userName"=>$result["userinfo"]["name"],"userState"=>$result["userinfo"]["state"],"userStateName"=>$result["userinfo"]["statename"]));
			$sessionUtil->set ( "session_userid", $result["result"] );
		}else{
			$this->getView()->setState("0");
			$this->getView()->setMsg($result["msg"]);
		}
		$this->view->display ( "json" );
	}



	public function logintest(){
		$userinfo = $this->getData("userinfo");
		var_dump($userinfo);
	}

	/**
	 * 注销登录
	 */
	public function logout() {
		$session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
		$session->clear ();
		$this->gotoUrl("index","index");
	}


}
