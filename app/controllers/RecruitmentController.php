<?php
class RecruitmentController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Index()
	{
		$re = new recruitmentmanagement();
		$addb = $re->addBrowseNum(1);
		$repage = $re->getRecruitment();
		$this->view->page = $repage;
		$corpinternmsg = new corpinternmsg();
		$frontlist = $corpinternmsg->getfrontmsg(6);
		$this->view->frontlist = $frontlist;
		echo $this->view->render("index.htm");
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$re = new recruitmentmanagement();
			if($re->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
		
		}else{
			echo 0;
		}
	}
}