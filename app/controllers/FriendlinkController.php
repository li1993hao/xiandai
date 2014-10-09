<?php
class FriendlinkController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Getlink()
	{
		$friendlink = new friendlink();
		$schoollinklist = $friendlink->getLinkList(0);
		$this->view->page = $schoollinklist;
		$outlinklist = $friendlink->getLinkList(1);
		$this->view->link = $outlinklist;


        $jobfairmsg = new jobfairmsg();
        $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
		echo $this->view->render("index.html");
	}

    public  function  getpm(){
        //快速通道
        $soft = new studysoft();
        $softlist = $soft->getSoftList();
        $this->view->softList = $softlist;

        $jobfairmsg = new jobfairmsg();
        $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
        echo $this->view->render("pm.html");
    }
}