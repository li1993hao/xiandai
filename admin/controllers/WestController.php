<?php
/**
*  
*  Create On 2013-7-29 4:51:22
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
class WestController extends Controller{

	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}

	public function Index(){
		//$this->login();
		$this->Newslist();
	}
	/**
	 * 西部就业人物列表
	 */
	public function Personlist(){
		$west = new westWork();
		
		$this->view->result = $this->_dosomething($west);
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$pageSize = 9;
		$westList = $west->getPersonPageModel($page,$pageSize);
		//print_r($westList); 
		$this->view->infoList = $westList;
		
		echo $this->view->render("personlist.htm");
	}
	
	public function Newslist(){
		$west = new westWork();
		
		$this->view->result = $this->_dosomething($west);
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$pageSize = 9;
		$westList = $west->getNewsPageModel($page,$pageSize);
		//print_r($westList);
		$this->view->infoList = $westList;
		echo $this->view->render("newslist.htm");
	}
	
	public function policylist(){
		$west = new westWork();
		
		$this->view->result = $this->_dosomething($west);
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$pageSize = 9;
		$westList = $west->getPolicyPageModel($page,$pageSize);
		//print_r($westList);
		$this->view->infoList = $westList;
		echo $this->view->render("policylist.htm");
	}
	
	public function Modify(){
		$west = new westWork();
		$id = $this->getRequest()->get("id");
		if($_POST){
			if($id){
				//print_r($_POST);
				//Array ( [title] => 倒萨倒萨 [newssort] => 1 [picid] => 70 [picstate] => 2 [content] => [submit] => 提交 )
				if(trim($_POST['title']) == "" || trim($_POST['content']) == "" || $_POST['newssort'] == "" ){
					$this->view->result = $this->_lang->neirongbuwanzheng;
				}else{
					//echo $_POST['content'];
					$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
					$result = $west->modifyinfo($id, array('ww_title' => $_POST['title'], 'wc_id'=>$_POST['newssort'] , 'pic_id'=>$_POST['picid'], 'ww_content'=> addslashes($_POST['content']) ) );
					if($result){
						$this->view->result = $this->_lang->xiugaichenggong;
					}else{
						$this->view->result = $this->_lang->xiugaishibai;
					}
					if ($result && $push == 1){
						if ($_POST['newssort'] == 1){
							$url = $this->getRequest()->hostUrl."/clientapi.php/Student/Getwestdetail/id/".$id;
							$this->getApp()->getPush()->pushMsg($_POST['title'],"此工作动态信息有修改", "10", $url);
						}else if ($_POST['newssort'] == 2){
							$url = $this->getRequest()->hostUrl."/clientapi.php/Student/Getwestdetail/id/".$id;
							$this->getApp()->getPush()->pushMsg($_POST['title'],"此相关政策信息有修改", "11", $url);
						}else{
							$url = $this->getRequest()->hostUrl."/clientapi.php/Student/Getwestdetail/id/".$id;
							$this->getApp()->getPush()->pushMsg($_POST['title'],"此典型人物消息有修改", "12", $url);
						}
					}
				}
			}
		}
		$this->view->newssort = $west->getSortList();
		if($id){
			$info = $west->getDetailInfoFromId($id);
			$this->view->info = $info;
			$user = new user();
			$userinfo = $user->getUserFromUserid($info['user_id']);
			$this->view->userinfo = $userinfo;
		}
		
		echo $this->view->render("modifyinfo.htm");
	}
	
	/**
	 * 添加新闻
	 */
	public function Addinfo(){
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$west = new westWork();
		if($_POST){
			//print_r($_POST);
			//Array ( [title] => sad [newssort] => 1 [picid] => 55 [username] => admin [content] => sadadsa [submit] => 提交 )
			$user = $this->getData("userinfo");
			$user_id = $user['user_id'];
			if(trim($_POST['title']) == "" || trim($_POST['content']) == "" || $_POST['newssort'] == "" ){
				$this->view->result = $this->_lang->neirongbuwanzheng;
			}else{
				$push = array_key_exists('push', $_POST) ? $_POST['push'] : 0;
				$result = $west->addinfo($_POST['title'], $_POST['newssort'], $_POST['picid'], $user_id, addslashes($_POST['content']));
				if($result > 0){
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
								if ($_POST['newssort'] == 1){
									$url = $this->getRequest()->hostUrl."/clientapi.php/Student/Getwestdetail/id/".$result;
									$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'],"有新的工作动态信息", "10", $url);
								}else if ($_POST['newssort'] == 2){
									$url = $this->getRequest()->hostUrl."/clientapi.php/Student/Getwestdetail/id/".$result;
									$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'],"有新的相关政策信息", "11", $url);
								}else{
									$url = $this->getRequest()->hostUrl."/clientapi.php/Student/Getwestdetail/id/".$result;
									$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'],"有新的典型人物消息", "12", $url);
								}
							}
						}
					}
				}
			}
		}
		$this->view->newssort = $west->getSortList();
		$this->view->user = $this->getData("userinfo");
		echo $this->view->render("addinfo.htm");
	}
	
	/**
	 * 做一些操作
	 * @param unknown_type $west
	 * @return string
	 */
	protected function _dosomething($west){
		if( $do = $this->getRequest()->get('do') ){
			//echo $do;
			
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($west->delinfo($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "up"){
				if($this->getRequest()->get('id')){
					if($west->upinfo($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "cancelup"){
				if($this->getRequest()->get('id')){
					if($west->cancelupinfo($this->getRequest()->get('id'))){
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

?>