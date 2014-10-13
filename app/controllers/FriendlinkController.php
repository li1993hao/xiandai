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

        for($i=0 ; $i<count($softlist); $i+=2){
            $arr[0] = $softlist[$i];
            if($i+1<count($softlist)){
                $arr[1] = $softlist[$i+1];
            }
            $fsoftlist[] = $arr;
        }
        $this->view->softList = $fsoftlist;
        $jobfairmsg = new jobfairmsg();
        $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
        echo $this->view->render("pm.html");
    }
}