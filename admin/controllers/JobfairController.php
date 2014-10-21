<?php
class JobfairController extends Controller{

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
					if($jobinfo->delmsg($this->getRequest()->get('id'))){
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
	
	//添加招聘会信息
	public function addjobfairmsg()
	{

        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$userinfo = $this->getData("userinfo");
		$this->view->user = $userinfo;
		$jobmsg = new jobfairmsg();
		//$addpiclink = new picture();
		if($_POST)
		{
			//print_r($_POST);
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['addr'] == NULL)
			{
				$this->view->result = $this->_lang->zhaokaidizhibunengweikong;
			}
			elseif ($_POST['opentime'] == NULL)
			{
				$this->view->result = $this->_lang->zhaokaishijianbunengweikong;
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
				
				$result = $jobmsg->addjobfairmsg($_POST['name'], $_POST['addr'],  $_POST['link'], $_POST['opentime'], $_POST['picid'] ,$userinfo['user_id'],"", $content, 0,$news, $notice,$_POST['filetitle'],$_POST['fileid'],null,$_POST['isopen']);
				
				//print_r($_POST);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
				
				$calendar = new calendar();
				$calendar->addcalendar($_POST['name'], $_POST['opentime'], $_POST['addr'], $_POST['contact'], $_POST['tel'], $_POST['student'], $_POST['assis-tel'], $_POST['content']);
				
				if($news == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 1, $_POST['picid'], $userinfo['user_id'], $content);
					//print_r($jobinfo);
				}
				if($notice == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 2, $_POST['picid'], $userinfo['user_id'], $content);
				}
				if ($result > 0 && $push == 1){
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){

//								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getjobfairinfodetail/id/".$result;
//								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['name'],"有新的招聘会信息", "2", $url);
							}
						}
                        $platform = 'android,ios'; // 接受此信息的系统
                        $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"有新的招聘会信息",'n_extras'=>array('type'=>0,'if_url'=>0,'msg_type'=>0,'msg_id'=>$result)));
                        //var_dump($msg_content);
                        $j=new jpush();
                        //$j->send(18,3,$company_id,1,$msg_content,$platform);
                        $j->send(18,4,"",1,$msg_content,$platform);
					}
				}
				/*if($_POST['calendar'] == 1){
					$calendar = new calendar();
					$calendar->addcalendar($_POST['name'], $_POST['opentime'], $_POST['addr'], $_POST['contact'], $_POST['tel'], $_POST['student'], $_POST['assis-tel'], $_POST['content']);
				
				}*/
				
			}
		}
		echo $this->view->render("addjobfairmsg.htm");
	}
	
	
	//管理招聘会信息
	public function getjobfairmsglist()
	{
		$jobfairmsg = new jobfairmsg();
		$this->view->result = $this->_dosomething($jobfairmsg);
		$pageSize = 10;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		
		if( $key = str_replace("/", " ", trim( urldecode($this->getRequest()->get("keyword") ) ) ) ){
			$jobList = $jobfairmsg->houtaigetJobfairPageModel($page,$pageSize,$key);
			$this->view->keyword = $key;
		}else{
			$jobList = $jobfairmsg->houtaigetJobfairPageModel($page,$pageSize);
		}
	
		$this->view->joblist = $jobList;
		echo $this->view->render("jobfairmsg.htm");
	}
	//修改招聘会信息
	public function editjobfairmsg()
	{
		$userinfo = $this->getData("userinfo");
		//$this->view->user = $userinfo;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		if($_POST)
		{
            //var_dump($_POST);
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			elseif ($_POST['addr'] == NULL)
			{
				$this->view->result = $this->_lang->zhaokaidizhibunengweikong;
			}
			elseif ($_POST['opentime'] == NULL)
			{
				$this->view->result = $this->_lang->zhaokaishijianbunengweikong;
			}
			elseif ($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
			{
				$jobmsg = new jobfairmsg();
				//print_r($_POST);
				$news = array_key_exists('news', $_POST) ? $_POST['news'] : 0;
				$notice = array_key_exists('notice', $_POST) ? $_POST['notice'] : 0;
				$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
				//echo $push;
				$content = addslashes($_POST['content']);
				//echo $_POST['fileid'];
				$result = $jobmsg->editjobfairmsg($id, $_POST['name'], $_POST['addr'],  $_POST['link'], $_POST['opentime'], $_POST['picid'], $userinfo['user_id'], $content, $news, $notice,$_POST['filetitle'],$_POST['fileid'],null,null,0,$_POST['isopen']);
				//var_dump($result);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
				if($news == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 1, $_POST['picid'], $userinfo['user_id'], $content);
					//print_r($jobinfo);
				}
				if($notice == 1)
				{
					$jobinfo = new jobinfo();
					$jobinfo->addjobinfo($_POST['name'], 2, $_POST['picid'], $userinfo['user_id'], $content);
				}
				if ($result && $push == 1){
					//echo "pudh";
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){
								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getjobfairinfodetail/id/".$id;
								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'],$_POST['name'],"招聘会信息有修改", "2", $url);
							}
						}
                        $platform = 'android,ios'; // 接受此信息的系统
                        $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>$_POST['name']."此企业招聘信息有修改",'n_extras'=>array('type'=>0,'if_url'=>0,'msg_type'=>0,'msg_id'=>$result)));
                        //var_dump($msg_content);
                        $j=new jpush();
                        //$j->send(18,3,$company_id,1,$msg_content,$platform);
                        $j->send(18,4,"",1,$msg_content,$platform);
					}
				
				}
			}
		}
		if($id)
		{
			$jobmsg = new jobfairmsg();
			$corpinfo = $jobmsg->getDetailInfoFromId($id);
			//echo "<pre>";
			//print_r($corpinfo);
			$this->view->detail = $corpinfo;
		}


		echo $this->view->render("editjobfairmsg.htm");
	}
	
	
	public function verifyinfo(){
		$type = $this->getRequest()->get('type') ? $this->getRequest()->get('type') : 2 ;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$jobfairmsg = new jobfairmsg();
		//echo $type;
		if($_POST){
			$type = $_POST['select-info'];
		}
		
		if($do = $this->getRequest()->get('do')){
			$id = $this->getRequest()->get('id');
			if($do == "del"){
				$jobfairmsg->delmsg($id);
			}
		}
		
		$corplist = $jobfairmsg->houtaigetJobfairPageModel($page, 10, NULL, $type, NULL);

		$this->view->corplist = $corplist;
		$this->view->type = $type;
		//print_r($corplist);
		echo $this->view->render("verifyinfo.html");
	}
	
	
	public function infodetail(){
		$infoid = $this->getRequest()->get('infoid');
		$jobfairmsg = new jobfairmsg();
		$company = new company();
		$info = $jobfairmsg->getDetailInfoFromId($infoid);
		$cominfo = $company->getCompanyDetailByFuId($info["jm_publish"]);
		
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
		$allinfo = array("info"=>$info,"cominfo"=>$cominfo);
		$this->view->setData($allinfo);
		$this->view->display('json');
	}
	
	
	public function passinfo(){
		$infoid = $this->getRequest()->get('infoid');
		$time = $this->getRequest()->get('time');
		$address = $this->getRequest()->get('address');
		$id = $this->getRequest()->get("comid");
		$jobfairmsg = new jobfairmsg();
		if($jobfairmsg->passinfo($infoid, $time, $address)){
            /** 推送功能 */
            $collect=new collect();
            $msg_arr=$collect->getAppCompanyNum($infoid,0);
            $msg_title=$msg_arr["msg_title"];
            $company_id=$msg_arr["fu_id"];
            //var_dump($company_arr);
            $platform = 'android,ios'; // 接受此信息的系统
            $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"$msg_title.'（招聘会信息）通过审核'",'n_extras'=>array('type'=>3)));
            //var_dump($msg_content);
            $j=new jpush();
            $j->send(18,3,$company_id,1,$msg_content,$platform);
            /** 推送结束 */
			$mes = new message();
			$mes->addMes("", $infoid, 1, 4, $id);
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
	
	public function rejectreason(){
		$infoid = $this->getRequest()->get('infoid');
		$reason = $this->getRequest()->get('reason');
		$id = $this->getRequest()->get("comid");
		$jobfairmsg = new jobfairmsg();
		if($jobfairmsg->rejectreason($infoid, $reason)){
            /** 推送功能 */
            $collect=new collect();
            $msg_arr=$collect->getAppCompanyNum($infoid,0);
            $msg_title=$msg_arr["msg_title"];
            $company_id=$msg_arr["fu_id"];
            //var_dump($company_arr);
            $platform = 'android,ios'; // 接受此信息的系统
            $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"$msg_title.'（招聘会信息）未通过审核'",'n_extras'=>array('type'=>3)));
            //var_dump($msg_content);
            $j=new jpush();
            $j->send(18,3,$company_id,1,$msg_content,$platform);
            /** 推送结束 */
			$mes = new message();
			$mes->addMes("", $infoid, 0, 4, $id);
			$this->view->setState(1);
		}else{
			$this->view->setState(0);
		}
		$this->view->display('json');
	}
	
	
}