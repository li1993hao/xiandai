<?php
class SettingController extends Controller
{
	public function __construct(){
	
		parent::__construct();
		$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Check()
	{
		$platForm = $this->getRequest()->get('platform');
		$versionNum= $this->getRequest()->get('versionnum');
		$version = new version();
		$array = array();
		if($platForm)
		{
			if($versionNum)
			{
				$versionInfo = $version->checkVersion($platForm, $versionNum);
				if($versionInfo)
				{
					$data = array();
					$data[0]['upgradeType']=$versionInfo[0]['TYPE_UPGRADE'];
					$data[0]['versionName']=$versionInfo[0]['NUM_VERSION'];
					$data[0]['apkSize']=$versionInfo[0]['SIZE_VERSION'];
					$data[0]['upgradeURI']=$versionInfo[0]['NAME_FILE'];
					$data[0]['upgradeDesc'] = $versionInfo[0]['DESC_VERSION'];
					$array["json"]["State"]=1;
					$array["json"]["data"]=	array("upgradeType"=>$versionInfo[0]['TYPE_UPGRADE'],
											"versionName"=>$versionInfo[0]['NUM_VERSION'],
											"apkSize"=>$versionInfo[0]['SIZE_VERSION'],
											"upgradeURI"=>$versionInfo[0]['NAME_FILE'],
											"upgradeDesc"=>$versionInfo[0]['DESC_VERSION']);
					$array["json"]["Msg"]="获取版本更新功！";
				}
				else
				{
					$array["json"]["State"]=1;
					$array["json"]["data"]=	array("upgradeType"=>"0",
											"versionName"=>"",
											"apkSize"=>"",
											"upgradeURI"=>"",
											"upgradeDesc"=>"");
					$array["json"]["Msg"]="你已经是最新版本！";
				}
			}
			else 
			{
				$array["json"]["State"]=0;
				$array["json"]["Msg"]="未提交版本号！";
			}
			
		}
		else
		{
			$array["json"]["State"]=0;
			$array["json"]["Msg"]="未提交平台号！";
		}
		echo json_encode($array);
	}
	
	public function Feedback(){
		$platform = $this->getRequest()->get("platform");
		$versionNum = $this->getRequest()->get("versionnum");
		$uiScore = $this->getRequest()->get('uiscore') ;
		$infoScore = $this->getRequest()->get('infoscore');
		$functionScore = $this->getRequest()->get("functionscore");
		$suggestedTitle = $this->getRequest()->get('title');
		$suggestedContent = $this->getRequest()->get('content');
		if ($platform && $versionNum && $uiScore && $infoScore && $functionScore && $suggestedTitle && $suggestedContent) {
			$ip = $this->getRequest()->getClientIp();
			$feedback = new feedback();
			$lastFeedbackInfo = $feedback->getLastFeedbackFromIp($ip);
			if ($lastFeedbackInfo && ( (strtotime($lastFeedbackInfo["fb_time"] ) - strtotime("today") ) > 0 )){
				$this->view->setState("0");
				$this->view->setMsg("你已经今天做出了反馈！");
			}else {
				$result = $feedback->addfeedback($platform, $suggestedTitle, $suggestedContent, $uiScore, $infoScore, $functionScore, $ip, $versionNum);
				if ($result == 1){
					$this->view->setMsg("反馈成功！");
					$this->view->setState("1");
				}elseif ($result == 0){
					$this->view->setMsg("反馈失败！");
					$this->view->setState("0");
				}else {
					$this->view->setMsg("含有非法字符！");
					$this->view->setState("0");
				}
			}
		}else{
			$this->view->setState("0");
			$this->view->setMsg("提交缺少参数！");
		}
		$this->view->display("json");
	}
}