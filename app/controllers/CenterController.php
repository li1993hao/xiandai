<?php
class CenterController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Index()
	{
		$center = new centerintroduction();
		$addb = $center->addBrowseNum(2);
		//$adds = $center->addShareNum(2);
		$ci = $center->getCenter();
		$this->view->page = $ci;
		$corpinternmsg = new corpinternmsg();
		$frontlist = $corpinternmsg->getfrontmsg(6);
		$this->view->frontlist = $frontlist;
		echo $this->view->render("index.htm");
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$center = new centerintroduction();
			if($center->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
		
		}else{
			echo 0;
		}
	}
}
