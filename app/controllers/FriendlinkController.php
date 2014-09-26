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
		$uplist = $jobfairmsg->getfrontjobfair(4);
		$this->view->uplist = $uplist;
		$corpinternmsg = new corpinternmsg();
		$frontlist = $corpinternmsg->getfrontmsg(6);
		$this->view->frontlist = $frontlist;
		echo $this->view->render("index.html");
	}
}