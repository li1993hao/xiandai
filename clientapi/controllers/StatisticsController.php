<?php
/**
* Create On 2013-12-9 10:09:43
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/

class StatisticsController extends Controller{
	
	public function __construct(){
		parent::__construct();
		$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Count(){
		$platformName = $this->getRequest()->get('platform');
		if ($platformName){
			$log = new log();
			if ($platformName == "android"){
				$logId = $log->addAndroidVisite();
				if ($logId > 0){
					$this->view->setState("1");
					$this->view->setMsg("统计成功！");
				}else {
					$this->view->setState("0");
					$this->view->setMsg("统计失败！");
				}
			}elseif ($platformName == "ios"){
				$logId = $log->addiOSVisite();
				if ($logId > 0){
					$this->view->setState("1");
					$this->view->setMsg("统计成功！");
				}else {
					$this->view->setState("0");
					$this->view->setMsg("统计失败！");
				}
			}else{
				$this->view->setState("0");
				$this->view->setMsg("没有此客户端的统计！");
			}
		}else{
			$this->view->setState("0");
			$this->view->setMsg("缺少参数！");
		}
		$this->view->display("json");
	}
}
