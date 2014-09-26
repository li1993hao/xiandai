<?php
class EmploymentteamController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Index()
	{
        //推荐招聘会
        $jobfairmsg = new jobfairmsg();
        $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);
		$pageSize = 20;
		$team = new employmentteam();
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$teamList = $team->getTeamPageModel($page,$pageSize);
		$this->view->teams = $teamList;
		echo $this->view->render("index.htm");
	}
	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		if ($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				$this->gotoUrl('employmentteam','index',1,"没有这篇文章");
				exit();
			}
			$team = new employmentteam();
			$teaminfo = $team->GetInfo($id);
			//var_dump($teaminfo);
			if ($teaminfo)
			{
                $corpinternmsg = new corpinternmsg();
                $frontlist = $corpinternmsg->getfrontmsg(4);
                $this->view->frontlist = $frontlist;

				$team->addBrowseNum($id);
				$this->view->pre =$team->getPre($teaminfo['et_id']);
				$this->view->next =$team->getNext($teaminfo['et_id']);
				$this->view->detail = $teaminfo;
				//$this->view->pic = $piclick;
				echo $this->view->render("detail.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
			}
			else
			{
				$this->error404("");
				$this->gotoUrl('employmentteam','index',1,"没有这篇文章");
			}
		
		}
		else
		{
			$this->error404("");
			$this->gotoUrl('employmentteam','index',0);
		}
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$team = new employmentteam();
			if($team->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}
}