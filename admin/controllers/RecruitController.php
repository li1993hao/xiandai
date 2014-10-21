<?php

//namespace admin\controllers;

class RecruitController extends Controller {
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	protected function _dosomething($jobinfo){
		if( $do = $this->getRequest()->get('do') ){
			//echo $do;
			
			if($do == "del"){
				if($this->getRequest()->get('id')){
					$isdel = $jobinfo->delmsg($this->getRequest()->get('id'));
					if($isdel){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "up"){
				if($this->getRequest()->get('id')){
					if($jobinfo->updateIsup($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "cancelup"){
				if($this->getRequest()->get('id')){
					if($jobinfo->cancelup($this->getRequest()->get('id'))){
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
	//添加企业招聘信息
	public function addCorpmsg()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;

		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$corpmsg=new corpinternmsg();
		$corplist=$corpmsg->getList();
		$this->view->ctlist = $corpmsg->getcttypelist();
		$this->view->provlist = $corpmsg->getprovlist();
		//$date=date("y-m-d");
		//$this->view->corplist=$corplist;
		if ($_POST)
		{
			//print_r($_POST);
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['cttype'] == NULL)
			{
				$this->view->result = $this->_lang->danweileixingbunengweikong;
			}
			elseif ($_POST['prov'] == NULL)
			{
				$this->view->result = $this->_lang->shengfenbunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else{
		  		//print_r($_POST);
		  		//exit();
				$userinfo = $this->getData('userinfo');
				$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
				$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
				$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
				$content = addslashes($_POST['content']);
				//[filetitle] => 就业移动端UI最小集合.rar [fileid] => 49
				$result=$corpmsg->addmsg( $_POST['name'], 1,$_POST['cttype'], $_POST['prov'], $_POST['addr'], $_POST['contact'], $_POST['tel'], $_POST['email'], 
						$_POST['fax'], $_POST['web'], $userinfo['user_id'], $_POST['src'], $content, $news, $notice, $_POST['filetitle'],$_POST['fileid'],0,0,$_POST['isopen']);
				//print_r($_POST);
                //var_dump($result);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
					$officelist = explode("**",$_POST['officeidlist']);
					//print_r($officelist);
					
					$officenamelist = explode("__", $officelist["0"]);
					$officeotlist = explode("__", $officelist["1"]);
					$officereqlist = explode("__", $officelist["2"]);
					//print_r($officereqlist);
					for($i=0;$i<count($officenamelist)-1;$i++){
						$corpmsg->insertoffice($officenamelist[$i], $officereqlist[$i], $officeotlist[$i], $result);
					}
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
				if($news == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 1, null, $userinfo['user_id'], $content);
					//print_r($jobinfo);
				}
				if($notice == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 2, NULL, $userinfo['user_id'], $content);
				}
				if ($result > 0 && $push == 1){
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){

//								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getrecruinfodetail/id/".$result;
//								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'],$_POST['name'],"有新的企业招聘信息", "1", $url);
							}
						}
                        $platform = 'android,ios'; // 接受此信息的系统
                        $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"有新的企业招聘信息",'n_extras'=>array('type'=>0,'if_url'=>0,'msg_type'=>1,'msg_id'=>$result)));
                        //var_dump($msg_content);
                        $j=new jpush();
                        //$j->send(18,3,$company_id,1,$msg_content,$platform);
                        $j->send(18,4,"",1,$msg_content,$platform);
					}
					
				}
		  	}			
		}
	
		echo $this->view->render("addcorpmsg.htm");
	}
	
	
	//管理企业招聘信息
	public function getcorpmsglist()
	{
		$corpmsg = new corpinternmsg();
		$this->view->result = $this->_dosomething($corpmsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		
		if( $key = trim( str_replace("/", " ",  urldecode( $this->getRequest()->get("keyword") ) ) ) ){
			$corpList = $corpmsg->getCorpPageModel($page,$pageSize,$key,"pass");
			$this->view->keyword = $key;
		}else{
			$corpList = $corpmsg->getCorpPageModel($page,$pageSize,NULL,"pass");
		}
		//print_r($jobList);
		if($corpList["list"][0]){
			for($i = 0 ; $i < count($corpList["list"]) ; $i++){
				$corpList["list"][$i]["office"] = $corpmsg->getofficeinfo($corpList["list"][$i]["cim_id"]);
			}
		}
		
		$this->view->corplist = $corpList;
		//print_r($_GET);
		$this->view->display("corpmsg.htm");
	}	
	
	//修改企业招聘信息
	public function editcorpmsg()
	{
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		//echo $id;
		$corpmsg = new corpinternmsg();
		if($_POST){
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['cttype'] == NULL)
			{
				$this->view->result = $this->_lang->danweileixingbunengweikong;
			}
			elseif ($_POST['prov'] == NULL)
			{
				$this->view->result = $this->_lang->shengfenbunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
		  	{
			
			
			$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
			$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
			$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
			$content = addslashes($_POST['content']);
			$result=$corpmsg->updatemsg( $id, $_POST['name'],$_POST['cttype'], $_POST['prov'], $_POST['addr'], $_POST['contact'], $_POST['tel'],
					$_POST['email'], $_POST['fax'], $_POST['web'], $userinfo['user_id'], $_POST['src'], $content, $news, $notice, $_POST['filetitle'],$_POST['fileid'],0,$_POST['isopen']);
				
			if($result){
				$this->view->result = $this->_lang->xiugaichenggong;
				$corpmsg->deloffice($id);
				
				$officelist = explode("**",$_POST['officeidlist']);
				//print_r($officelist);
					
				$officenamelist = explode("__", $officelist["0"]);
				$officeotlist = explode("__", $officelist["1"]);
				$officereqlist = explode("__", $officelist["2"]);
				//print_r($officereqlist);
				for($i=0;$i<count($officenamelist)-1;$i++){
					$corpmsg->insertoffice($officenamelist[$i], $officereqlist[$i], $officeotlist[$i], $id);
				}
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
			
			if($news == 1)
			{
				$jobinfo = new jobinfo();
				$jobinfo->addjobinfo($_POST['name'], 1, null, $userinfo['user_id'], $content);
				//print_r($jobinfo);
			}
			if($notice == 1)
			{
				$jobinfo = new jobinfo();
				$jobinfo->addjobinfo($_POST['name'], 2, NULL, $userinfo['user_id'], $content);
			}
			if ($result  && $push == 1){
				$fu = new frontuser();
				$tokenList = $fu->getTokenByFuId();
				if ($tokenList){
					for ($i = 0; $i < count($tokenList); $i++){
						if ($tokenList[$i]['fu_token']){

//							$url = $this->getRequest()->hostUrl."/clientapi.php/student/getrecruinfodetail/id/".$id;
//							$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['name'],"此企业招聘信息有修改", "1", $url);
						}
					}
                    $platform = 'android,ios'; // 接受此信息的系统
                    $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>$_POST['name']."此企业招聘信息有修改",'n_extras'=>array('type'=>0,'if_url'=>0,'msg_type'=>1,'msg_id'=>$result)));
                    //var_dump($msg_content);
                    $j=new jpush();
                    //$j->send(18,3,$company_id,1,$msg_content,$platform);
                    $j->send(18,4,"",1,$msg_content,$platform);
				}
				
			}
		  }
		}
		$this->view->cttypelist = $corpmsg->getcttypelist();
		$this->view->provlist = $corpmsg->getprovlist();
		if($id)
		{
			//$corpmsg = new corpinternmsg();
			$corpinfo = $corpmsg->getDetailInfoFromId($id);
			$this->view->detail = $corpinfo;
			$office = $corpmsg->getofficeinfo($id);
			$this->view->office = $office;
			//$corpmsg->insertcomid($id);
			
		}
		
		echo $this->view->render("editcorpmsg.htm");
		
	}
	//添加实习招聘信息
	public function addInternmsg()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;

		//print_r($_POST);
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$internmsg=new corpinternmsg();
		$this->view->ctlist = $internmsg->getcttypelist();
		$this->view->provlist = $internmsg->getprovlist();
		$internlist=$internmsg->getList();
		if ($_POST)
		{
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['cttype'] == NULL)
			{
				$this->view->result = $this->_lang->danweileixingbunengweikong;
			}
			elseif ($_POST['prov'] == NULL)
			{
				$this->view->result = $this->_lang->shengfenbunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
		  {
			//$userid=$internmsg->getuserid($_POST['username']);
			//$ctid = $internmsg->getctid($_POST['cttype']);
			//$provid = $internmsg->getprovid($_POST['prov']);
			//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : 0;
			$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
			$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
			$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
			$content = addslashes($_POST['content']);
			$result=$internmsg->addmsg( $_POST['name'], 2,$_POST['cttype'], $_POST['prov'], $_POST['addr'], $_POST['contact'], $_POST['tel'], $_POST['email'], 
					$_POST['fax'], $_POST['web'], $userinfo['user_id'], $_POST['src'], $content, $news, $notice,$_POST['filetitle'],$_POST['fileid'],0,0,$_POST['isopen']);
			//print_r($_POST);
			if($result>0){
				$this->view->result = $this->_lang->tianjiachenggong;
				$officelist = explode("**",$_POST['officeidlist']);
				//print_r($officelist);
					
				$officenamelist = explode("__", $officelist["0"]);
				$officeotlist = explode("__", $officelist["1"]);
				$officereqlist = explode("__", $officelist["2"]);
				//print_r($officereqlist);
				for($i=0;$i<count($officenamelist)-1;$i++){
					$internmsg->insertoffice($officenamelist[$i], $officereqlist[$i], $officeotlist[$i], $result);
				}
			}else{
				$this->view->result = $this->_lang->tianjiashibai;
			}
			if($news == 1)
			{
				$jobinfo = new jobinfo();
				$jobinfo->addjobinfo($_POST['name'], 1, NULL, $userinfo['user_id'], $content);
				//print_r($jobinfo);
			}
			if($notice == 1)
			{
				$jobinfo = new jobinfo();
				$jobinfo->addjobinfo($_POST['name'], 2, NULL, $userinfo['user_id'], $content);
			}
			if ($result > 0 && $push == 1){
				$fu = new frontuser();
				$tokenList = $fu->getTokenByFuId();
				if ($tokenList){
					for ($i = 0; $i < count($tokenList); $i++){
						if ($tokenList[$i]['fu_token']){

//							$url = $this->getRequest()->hostUrl."/clientapi.php/student/getrecruinfodetail/id/".$result;
//							$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['name'],"有新的实习信息", "3", $url);
						}
					}
                    $platform = 'android,ios'; // 接受此信息的系统
                    $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"有新的实习信息",'n_extras'=>array('type'=>0,'if_url'=>0,'msg_type'=>2,'msg_id'=>$result)));
                    //var_dump($msg_content);
                    $j=new jpush();
                    //$j->send(18,3,$company_id,1,$msg_content,$platform);
                    $j->send(18,4,"",1,$msg_content,$platform);
				}
				
			}
		  }
		}
	
		echo $this->view->render("addinternmsg.htm");
	}
	//管理实习招聘信息
	public function getinternmsglist()
	{
		$internmsg = new corpinternmsg();
		$this->view->result = $this->_dosomething($internmsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		if( $key = trim( str_replace("/", " ",  urldecode($this->getRequest()->get("keyword") ) ) ) ){
				
			$corpList = $internmsg->getInternPageModel($page,$pageSize,$key,"pass");
			$this->view->keyword = $key;
		}else{
			$corpList = $internmsg->getInternPageModel($page,$pageSize,NULL,"pass");
		}
		
		if($corpList["list"][0]){
			for($i = 0 ; $i < count($corpList["list"]) ; $i++){
				$corpList["list"][$i]["office"] = $internmsg->getofficeinfo($corpList["list"][$i]["cim_id"]);
			}
		}
		
		$this->view->corplist = $corpList;
		
		echo $this->view->render("internmsg.htm");
	}
	//修改实习招聘信息
	public function editinternmsg()
	{
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		$corpmsg = new corpinternmsg();
		if($_POST){
			if($_POST['name'] == NULL){
				$this->view->result = $this->_lang->biaotibunengweikong;
			}elseif ($_POST['cttype'] == NULL){
				$this->view->result = $this->_lang->danweileixingbunengweikong;
			}elseif ($_POST['prov'] == NULL){
				$this->view->result = $this->_lang->shengfenbunengweikong;
			}elseif ($_POST['content'] == NULL){
				$this->view->result = $this->_lang->neirongbunengweikong;
			}else{
				$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
				$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
				$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
				$content = addslashes($_POST['content']);
				$result=$corpmsg->updatemsg( $id, $_POST['name'],$_POST['cttype'], $_POST['cttype'], $_POST['addr'], $_POST['contact'], $_POST['tel'],
					$_POST['email'], $_POST['fax'], $_POST['web'], $userinfo['user_id'], $_POST['src'], $content, $news, $notice, $_POST['filetitle'],$_POST['fileid'],0,$_POST['isopen']);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
					$officelist = explode(",",$_POST['officeidlist']);
					for($i=0;$i<count($officelist)-1;$i++){
						$corpmsg->insertreoff($officelist[$i], $id);
					}
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
				if($news == 1){
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 1, NULL, $userinfo['user_id'], $content);
					//print_r($jobinfo);
				}
				if($notice == 1){
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 2, NULL, $userinfo['user_id'], $content);
				}
				if ($result  && $push == 1){
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){
								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getrecruinfodetail/id/".$id;
								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['name'],"此实习信息有修改", "3", $url);
							}
						}
                        $platform = 'android,ios'; // 接受此信息的系统
                        $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>$_POST['name']."此企业招聘信息有修改",'n_extras'=>array('type'=>0,'if_url'=>0,'msg_type'=>2,'msg_id'=>$result)));
                        //var_dump($msg_content);
                        $j=new jpush();
                        //$j->send(18,3,$company_id,1,$msg_content,$platform);
                        $j->send(18,4,"",1,$msg_content,$platform);
					}
					
				}
		  	}
		}
		$this->view->cttypelist = $corpmsg->getcttypelist();
		$this->view->provlist = $corpmsg->getprovlist();
		if($id){
			$corpinfo = $corpmsg->getDetailInfoFromId($id);
			$this->view->detail = $corpinfo;
			$office = $corpmsg->getofficeinfo($id);
			$this->view->office = $office;
			$corpmsg->insertcomid($id);
		}
		echo $this->view->render("editinternmsg.htm");
	}
	//添加基层就业信息
	public function addBasemsg()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;

		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$corpmsg=new corpinternmsg();
		$corplist=$corpmsg->getList();
		//$this->view->ctlist = $corpmsg->getcttypelist();
		//$this->view->provlist = $corpmsg->getprovlist();
		//$date=date("y-m-d");
		//$this->view->corplist=$corplist;
		if ($_POST)
		{
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else{
		  		//print_r($_POST);
		  		//exit();
				$userinfo = $this->getData('userinfo');
				//$userid=$corpmsg->getuserid($_POST['username']);
				//$ctid = $corpmsg->getctid($_POST['cttype']);
				//$provid = $corpmsg->getprovid($_POST['prov']);
				//$isup = ($_POST['isup'] == 1) ? date("y-m-d") : null;
				$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
				$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
				$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
				$content = addslashes($_POST['content']);
				//[filetitle] => 就业移动端UI最小集合.rar [fileid] => 49
				$result=$corpmsg->addmsg( $_POST['name'], 3 ,NULL, NULL, NULL, NULL, NULL, NULL, 
						NULL, NULL, $userinfo['user_id'], $_POST['src'], $content, $news, $notice, $_POST['filetitle'],$_POST['fileid'],0,0,$_POST['isopen']);
				//print_r($_POST);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
					$officelist = explode("**",$_POST['officeidlist']);
					//print_r($officelist);
					
					$officenamelist = explode("__", $officelist["0"]);
					$officeotlist = explode("__", $officelist["1"]);
					$officereqlist = explode("__", $officelist["2"]);
					//print_r($officereqlist);
					for($i=0;$i<count($officenamelist)-1;$i++){
						$corpmsg->insertoffice($officenamelist[$i], $officereqlist[$i], $officeotlist[$i], $result);
					}
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
				if($news == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 1, null, $userinfo['user_id'], $content);
					//print_r($jobinfo);
				}
				if($notice == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 2, NULL, $userinfo['user_id'], $content);
				}
				if ($result > 0 && $push == 1){
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){
								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getrecruinfodetail/id/".$result;
								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['name'],"有新的企业招聘信息", "4", $url);
							}
						}
					}
					
				}
		  	}			
		}
	
		echo $this->view->render("addbasemsg.htm");
	}
	//管理基层招聘信息
	public function getbasemsglist()
	{
		$corpmsg = new corpinternmsg();
		$this->view->result = $this->_dosomething($corpmsg);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		if( $key = trim( str_replace("/", " ",  urldecode($this->getRequest()->get("keyword") ) ) ) ){
			
			$corpList = $corpmsg->getBasePageModel($page,$pageSize,$key,"pass");
			$this->view->keyword = $key;
		}else{
			$corpList = $corpmsg->getBasePageModel($page,$pageSize,NULL,"pass");
		}
		
		if($corpList["list"][0]){
			for($i = 0 ; $i < count($corpList["list"]) ; $i++){
				$corpList["list"][$i]["office"] = $corpmsg->getofficeinfo($corpList["list"][$i]["cim_id"]);
			}
		}
		
		$this->view->baselist = $corpList;
		$this->view->display("basemsg.htm");
	}
	//修改基层招聘信息
	public function editbasemsg()
	{
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		//echo $id;
		$corpmsg = new corpinternmsg();
		if($_POST){
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
		  	{
			
			$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
			$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
			$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
			$content = addslashes($_POST['content']);
			$result=$corpmsg->updatemsg( $id, $_POST['name'],NULL, NULL, NULL, NULL, NULL,
					NULL, NULL,NULL, $userinfo['user_id'], $_POST['src'], $content, $news, $notice, $_POST['filetitle'],$_POST['fileid'],0,$_POST['isopen'] );
				
			if($result){
				$this->view->result = $this->_lang->xiugaichenggong;
				$officelist = explode(",",$_POST['officeidlist']);
				for($i=0;$i<count($officelist)-1;$i++){
					$corpmsg->insertreoff($officelist[$i], $id);
				}
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
			
			if($news == 1)
			{
				$jobinfo = new jobinfo();
				$jobinfo->addjobinfo($_POST['name'], 1, null, $userinfo['user_id'], $content);
				//print_r($jobinfo);
			}
			if($notice == 1)
			{
				$jobinfo = new jobinfo();
				$jobinfo->addjobinfo($_POST['name'], 2, NULL, $userinfo['user_id'], $content);
			}
			if ($result  && $push == 1){
				$fu = new frontuser();
				$tokenList = $fu->getTokenByFuId();
				if ($tokenList){
					for ($i = 0; $i < count($tokenList); $i++){
						if ($tokenList[$i]['fu_token']){
							$url = $this->getRequest()->hostUrl."/clientapi.php/student/getrecruinfodetail/id/".$id;
							$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['name'],"此基层招聘信息有修改", "4", $url);
						}
					}
				}
				
			}
		  }
		}
		
		if($id)
		{
			//$corpmsg = new corpinternmsg();
			$corpinfo = $corpmsg->getDetailInfoFromId($id);
			$this->view->detail = $corpinfo;
			$office = $corpmsg->getofficeinfo($id);
			//print_r($office);
			$this->view->office = $office;
			$corpmsg->insertcomid($id);
		}
		
		echo $this->view->render("editbasemsg.htm");
		
	}
	
	public function insertoffice(){
		$officename = $this->getRequest()->get('officename');
		$officereq = $this->getRequest()->get('officereq');
		$otid = $this->getRequest()->get('otid');
		$corpinternmsg = new corpinternmsg();
		$lastid = $corpinternmsg->insertoffice($officename, $officereq, $otid);
		if($lastid){
			$this->view->setState(1);
			$this->view->setData($lastid);
		}else{
			$this->view->setState(0);
		}
		$this->view->display("json");
	}
	
	public function getoffice(){
		$id = $this->getRequest()->get('officeid');
		$corpinternmsg = new corpinternmsg();
		if($office = $corpinternmsg->getoffice($id))
		{
			$this->view->setState(1);
			$this->view->setData($office);
		}else{
			$this->view->setState(0);
		}
		
		$this->view->display("json");
	}
	
	public function editoffice(){
		$id = $this->getRequest()->get('offid');
		$officename = $this->getRequest()->get('officename');
		$officeintro = $this->getRequest()->get('officeintro');
		$otid = $this->getRequest()->get('otid');
		$corpinternmsg = new corpinternmsg();
		if($corpinternmsg->modoffice($id, $officename, $officeintro, $otid)){
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display("json");
	}
	
	public function getalloffice(){
		$infoid = $this->getRequest()->get('infoid');
		$corpinternmsg = new corpinternmsg();
		if($officeinfo = $corpinternmsg->getofficeinfo($infoid)){
			$this->view->setState(1);
		/*	$data = array();
			for($i = 0; $i < count($officeinfo); $i++){
				$data[$i]["name"] = $officeinfo[$i]["office_name"];
				$data[$i]["otid"] = $officeinfo[$i]["ot_id"];
				$data[$i]["req"] = $officeinfo[$i]["office_intro"];
			}
		*/
			$this->view->setData($officeinfo);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
		
	}
	
	
	public function verifyinfo(){
		$type = $this->getRequest()->get('type') ? $this->getRequest()->get('type') : 0 ;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$corpinternmsg = new corpinternmsg();
		//echo $type;
		if($_POST){
			$type = $_POST['select-info'];	
		}
		if($do = $this->getRequest()->get('do')){
			$id = $this->getRequest()->get('id');
			if($do == "del"){
				$corpinternmsg->delmsg($id);
			}
		}
		$corplist = $corpinternmsg->verifyinfo($type, $page, 12);
		if($corplist["list"][0]){
			for($i = 0 ; $i < count($corplist["list"]) ; $i++){
				$corplist["list"][$i]["office"] = $corpinternmsg->getofficeinfo($corplist["list"][$i]["cim_id"]);
			}
		}
		
		$this->view->corplist = $corplist;
		$this->view->type = $type;
		//print_r($corplist);
		echo $this->view->render("verifyinfo.html");
	}
	
	public function infodetail(){
		$infoid = $this->getRequest()->get('infoid');
		$corpinternmsg = new corpinternmsg();
		$company = new company();
		$info = $corpinternmsg->getDetailInfoFromId($infoid);
		$cominfo = $company->getCompanyDetailByFuId($info["cim_publish"]);
		$officeinfo = $corpinternmsg->getofficeinfo($infoid);
		//print_r($cominfo);
		//$this->view->setData($officeinfo);
		$cominfo['location'] = $cominfo['area_name'];
		if($cominfo['area_id'] != 0){
			$area = new area();
			$parentArea = $area->getParentAreaByParentId($cominfo['area_id']);
			
			if ($parentArea['p_id'] != 0){
				$grandArea = $area->getParentAreaByParentId($parentArea['p_id']);
				$cominfo['location'] = $grandArea['area_name']."-".$parentArea['area_name']."-".$cominfo['location'];
			}else{
				$cominfo['location'] = $parentArea['area_name']."-".$cominfo['location'];
			}
		}else{
			$cominfo['location'] = $cominfo['location'];
		}
		
		if($officeinfo){
			$allinfo = array("info"=>$info,"cominfo"=>$cominfo,"office"=>$officeinfo);
			//print_r($allinfo);
			$this->view->setData($allinfo);
			//$this->view->setData(array_merge($info,$cominfo,$officeinfo));
		}else{
			$allinfo = array("info"=>$info,"cominfo"=>$cominfo);
			$this->view->setData($allinfo);
		}
		$this->view->display('json');
		
	}
	
	public function passinfo(){
		$infoid = $this->getRequest()->get('infoid');
		$id = $this->getRequest()->get('comid');
		$state = $this->getRequest()->get('state');
		$corpinternmsg = new corpinternmsg();
		if($corpinternmsg->infopassed($infoid)){
            /** 推送功能 */
            $collect=new collect();
            $msg_arr=$collect->getAppCompanyNum($infoid,1);
            $msg_title=$msg_arr["msg_title"];
            $company_id=$msg_arr["fu_id"];
            //var_dump($company_arr);
            $platform = 'android,ios'; // 接受此信息的系统
            $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"'招聘信息'.$msg_title.'通过审核'",'n_extras'=>array('type'=>3)));
            //var_dump($msg_content);
            $j=new jpush();
            $j->send(18,3,$company_id,1,$msg_content,$platform);
            /** 推送结束 */
			$mes = new message();
			$mes->addMes("", $infoid, 1, $state, $id);
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
	public function rejectreason(){
		$infoid = $this->getRequest()->get('infoid');
		$reason = $this->getRequest()->get('reason');
		$id = $this->getRequest()->get('comid');
		$state = $this->getRequest()->get('state');
		$corpinternmsg = new corpinternmsg();
		if($corpinternmsg->rejectreason($infoid, $reason)){
            /** 推送功能 */
            $collect=new collect();
            $msg_arr=$collect->getAppCompanyNum($infoid,1);
            $msg_title=$msg_arr["msg_title"];
            $company_id=$msg_arr["fu_id"];
            //var_dump($company_arr);
            $platform = 'android,ios'; // 接受此信息的系统
            $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"$msg_title.'（招聘信息）未通过审核'",'n_extras'=>array('type'=>3)));
            //var_dump($msg_content);
            $j=new jpush();
            $j->send(18,3,$company_id,1,$msg_content,$platform);
            /** 推送结束 */
			$mes = new message();
			$mes->addMes("", $infoid, 0, $state, $id);
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
}

?>