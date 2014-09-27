<?php
class EmploymentpolicyController extends Controller
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

		$pageSize = 10;
		$employ = new employmentpolicy();
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$employlist = $employ->getEmployPageModel($page,$pageSize);
		$this->view->employlist = $employlist;
		echo $this->view->render("index.htm");
	}
	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		$employ = new employmentpolicy();
		if($id)
		{
			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id))
			{
				$employdetail = $employ->getInfofromId($id);
				if($employdetail)
				{
                    $corpinternmsg = new corpinternmsg();
                    $frontlist = $corpinternmsg->getfrontmsg(4);
                    $this->view->frontlist = $frontlist;

					$employ->addBrowseNum($id);
					$this->view->pre = $employ->getPre($employdetail['ep_id']);
					$this->view->next = $employ->getNext($employdetail['ep_id']);
					$this->view->detail = $employdetail;
					echo $this->view->render("detail.htm");
				}
				else
				{
					$this->gotoUrl('employmentpolicy','index',1,"没有这篇文章");
				}
			}
			else
			{
				$this->error404();
				$this->gotoUrl('employmentpolicy','index',1,"没有这篇文章");
			}
		}
		else
		{
			$this->gotoUrl('employmentpolicy','index',0);
		}
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$employ = new employmentpolicy();
			if($employ->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}
	
}