<?php
/**
* Create On 2013-12-16 ����9:22:37
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/

class UpgradeController extends Controller{
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
					$array["state"]=1;
					$array["data"]=	array("upgradeType"=>$versionInfo[0]['TYPE_UPGRADE'],
							"versionName"=>$versionInfo[0]['NUM_VERSION'],
							"apkSize"=>$versionInfo[0]['SIZE_VERSION'],
							"upgradeURI"=>$versionInfo[0]['NAME_FILE'],
							"upgradeDesc"=>$versionInfo[0]['DESC_VERSION']);
					$array["msg"]="获取版本更新功！";
				}
				else
				{
					$array["state"]=1;
					$array["data"]=	array("upgradeType"=>"0",
							"versionName"=>"",
							"apkSize"=>"",
							"upgradeURI"=>"",
							"upgradeDesc"=>"");
					$array["msg"]="你已经是最新版本！";
				}
			}
			else
			{
				$array["state"]=0;
				$array["msg"]="未提交版本号！";
			}
				
		}
		else
		{
			$array["state"]=0;
			$array["msg"]="未提交平台号！";
		}
		echo json_encode($array);
	}
}
