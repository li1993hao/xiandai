<?php

//namespace admin\controllers;

class JobinfoController extends Controller{
	
	private $__typeinfo = array(
        "jobAct"=> array("type_code"=>1,"type_name"=>"工作动态","type_color"=>"red"),
        "jobNotice"=>array("type_code"=>2,"type_name"=>"通知公告","type_color"=>"red"),
        "jobPlan"=>array("type_code"=>3,"type_name"=>"职业生涯规划","type_color"=>"blue"),
        "jobGuid"=> array("type_code"=>4,"type_name"=>"就业指导","type_color"=>"blue"),
        "entreGuid"=> array("type_code"=>5,"type_name"=>"创业指导","type_color"=>"blue"),
        "empPolicy"=> array("type_code"=>6,"type_name"=>"就业政策","type_color"=>"blue"),
        "empStar"=> array("type_code"=>9,"type_name"=>"创就业明星","type_color"=>"blue")
	);
	
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
			}else if($do == "recom"){
				if($this->getRequest()->get('id')){
					if($jobinfo->updaterecom($this->getRequest()->get('id'))){
						return $this->_lang->tuijianchenggong;
					}else{
						return $this->_lang->tuijianshibai;
					}
				}else{
					return $this->_lang->tuijianshibai;
				}
			}else if($do == "cancelrecom"){
				if($this->getRequest()->get('id')){
					if($jobinfo->cancelrecom($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}
			else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	
	}
	
	
	private function _typecode2info($type_code){
		reset($this->__typeinfo);
		foreach( $this->__typeinfo as $key => $val ){
			if($val["type_code"] == $type_code){
				return $this->__typeinfo[$key];
			}
		}
		return null;
	}
	
	/**
	 * 新闻列表
	 */
	public function Infolist(){
		$type = $this->getRequest()->get("infotype") ? $this->getRequest()->get("infotype") : 1;
		if($typeinfo = $this->_typecode2info($type)){
			$jobmsg = new jobinfo();
			$this->view->result = $this->_dosomething($jobmsg);
	
			$pageSize = 9;
			$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
    		if( $key = trim( str_replace("/", " ",  $this->getRequest()->get("keyword")  ) ) ){
				$jobList = $jobmsg->get_news_page_model($type,$page,$pageSize,$key,TRUE);
				$this->view->keyword = $key;
			}else{
				$jobList = $jobmsg->get_news_page_model($type,$page,$pageSize,null,TRUE);
			}
			$this->getView()->typeinfo = $typeinfo;
			$this->view->joblist = $jobList;	
			echo $this->view->render("infolist.htm");
		}else{
			$this->error404();
		}
	}
	

	
	/**
	 * 修改信息
	 */
	public function Editinfo(){
        //生成随机数
        $mm= rand(100,1000);
        $this->view->mm=$mm;
		if($id = $this->getRequest()->get("id")){
			$this->view->id = $id;
		
			$type = $this->getRequest()->get("infotype") ? $this->getRequest()->get("infotype") : 1;
			if($typeinfo = $this->_typecode2info($type)){
				
				$userinfo = $this->getData("userinfo");
				//$this->view->user = $userinfo;
			
				if($_POST)
				{
					if ( $_POST['title'] == NULL ){
						
						$this->view->result = $this->_lang->biaotibunengweikong;
					
					} elseif ( $_POST['content'] == NULL ){
						$this->view->result = $this->_lang->neirongbunengweikong;
					} else {
						//print_r($_POST);
						$jobmsg = new jobinfo();
						//$recom = ($_POST['recom'] == 1) ? date("y-m-d") : 0;
						
						$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
						$content = addslashes($_POST['content']);
						$result = $jobmsg->updatemsg($id, $_POST['title'], $_POST['picid'], $userinfo['user_id'], $content,$_POST["jobinfoattrid"],$_POST["fileid"],$_POST["filetitle"]);
						////
						if($result){
							$this->view->result = $this->_lang->xiugaichenggong;
						}else{
							$this->view->result = $this->_lang->xiugaishibai;
						}
						
						//推送
						if($result && $push == 1){
							$fu = new frontuser();
							$tokenList = $fu->getTokenByFuId();
							if ($tokenList){
								for ($i = 0; $i < count($tokenList); $i++){
									if ($tokenList[$i]['fu_token']){
										$url = $this->getRequest()->hostUrl."/clientapi.php/student/getjobinfodetail/id/".$id;
										$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'],"此条信息有修改", "6", $url);//这个 6 是指什么？
									}
								}
							}
						}
						
					}
				}
				
				$this->getView()->typeinfo = $typeinfo;
				$jobmsg = new jobinfo();
				$corpinfo = $jobmsg->getDetailInfoFromId($id);
				////print_r($corpinfo);
				$this->view->detail = $corpinfo;
				echo $this->view->render("editinfo.htm");
				
			}else{
				$this->error404();
			}
		}else{
			$this->error404();
		}
	}
	
	/**
	 * 添加信息
	 */
	public function Addinfo(){
		$type = $this->getRequest()->get("infotype") ? $this->getRequest()->get("infotype") : 1;
       //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		if($typeinfo = $this->_typecode2info($type)){
			
			$userinfo = $this->getData("userinfo");
			$this->view->user = $userinfo;
			$jobmsg = new jobinfo();
			$addpiclink = new picture();
			//$corplist=$jobmsg->getList();
			//$date=date("y-m-d");
			//$this->view->corplist=$corplist;
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
					//$recom = ($_POST['recom'] == 1) ? date("y-m-d") : 0;
					$content = addslashes($_POST['content']);
					$result = $jobmsg->addjobinfo($_POST['title'], $type, $_POST['picid'], $userinfo['user_id'], $content,$_POST['fileid'],$_POST['filetitle']);
					if($result>0){
						$this->view->result = $this->_lang->tianjiachenggong;
					}else{
						$this->view->result = $this->_lang->tianjiashibai;
					}
				}
			}
			$this->getView()->typeinfo = $typeinfo;
			echo $this->view->render("addinfo.htm");
			
		}else{
			$this->error404();
		}
		
	}
	
	
	//--------------------------------------
	
	//就业政策管理
	public function Getemploylist()
	{
		/*
		$_GET["infotype"] = 7;
		$this->Infolist();
		*/
		$employ = new employmentpolicy();
		$this->view->result = $this->_doemploy($employ);
		$pageSize = 9;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
	
		if( $key = trim( str_replace("/", " ",  $this->getRequest()->get("keyword")  ) ) ){
			$employList = $employ->getEmployPageModel($page,$pageSize,$key,true);
			$this->view->keyword = $key;
		}else{
			$employList = $employ->getEmployPageModel($page,$pageSize,null,true);
		}
	
		$this->view->employlist = $employList;
		echo $this->view->render("employ.html");
	
	}
	

	protected function _doemploy($employ){
		if( $do = $this->getRequest()->get('do') ){
		
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($employ->delInfo($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "top"){
				if($this->getRequest()->get('id')){
					if($employ->setTop($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "canceltop"){
				if($this->getRequest()->get('id')){
					if($employ->cancalTop($this->getRequest()->get('id'))){
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
	
	
	
	public function Editemploy()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		$employ = new employmentpolicy();
		if($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['content'] == NULL)
		    {
			  $this->view->result = $this->_lang->neirongbunengweikong;
		    }
		    else {	
		    	$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
		    	if($_POST['fileid']){
		    		$edit = $employ->modifyInfo($id, $_POST['title'], addslashes($_POST['content']), $_POST['fileid'], $_POST['filetitle']);
		    	}else{
		    		$edit = $employ->modifyInfo($id, $_POST['title'], addslashes($_POST['content']));
		    	}
				//$edit = $employ->modifyInfo($id, $_POST['title'], addslashes($_POST['content']));
				if($edit){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
				if ($edit && $push == 1){
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){
								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getpolicyinfodetail/id/".$id;
								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'],"此就业政策信息有修改", "5", $url);
							}
						}
					}
					
				}
		   }
		}
	if($id)
		{
		
			$employinfo = $employ->getInfofromId($id);
			$this->view->detail = $employinfo;
		
		}
		echo $this->view->render("editemploy.html");
	}
	public function Addemploy()
	{
        //生成随机数
        $mm=rand(100,1000);
       $this->view->mm=$mm;
		$employ = new employmentpolicy();
		if($_POST)
		{
			if($_POST['title']==NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else {
				$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
				if ($_POST['fileid'] == NULL){
					$result = $employ->addEmploy($_POST['title'], addslashes($_POST['content']));
				}else {
					$result = $employ->addEmploy($_POST['title'], addslashes($_POST['content']), $_POST['fileid'], $_POST['filetitle']);
				}
				if($result > 0 ){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
				if ($result > 0 && $push == 1){
					$fu = new frontuser();
					$tokenList = $fu->getTokenByFuId();
					if ($tokenList){
						for ($i = 0; $i < count($tokenList); $i++){
							if ($tokenList[$i]['fu_token']){
								$url = $this->getRequest()->hostUrl."/clientapi.php/student/getpolicyinfodetail/id/".$result;
								$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'],"有新的就业政策信息", "5", $url);
							}
						}
					}
					
				}
			}
		}
		echo $this->view->render("addemploy.html");
	}
	
	

	
}

?>