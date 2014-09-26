<?php
class SendController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Index()
	{
		$send = new sendservices();
		$addb = $send->addBrowseNum(3);
		$sendser = $send->getSend();
		$this->view->page = $sendser;
		$corpinternmsg = new corpinternmsg();
		$frontlist = $corpinternmsg->getfrontmsg(6);
		$this->view->frontlist = $frontlist;
		echo $this->view->render("index.html");
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$send = new sendservices();
			if($send->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}
	
}