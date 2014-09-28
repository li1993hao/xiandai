<?php
class CollegeintroductionController extends Controller{
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
		$collegeintroduction=new collegeintroduction();
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		
		
		$collegeList = $collegeintroduction->getCollegePageModel($page,$pageSize);
		
		//print_r($collegeList);
		$this->view->news = $collegeList;
		
		//$this->view->exist = $corpinfolist;
		
		echo $this->view->render("index.htm");//自动加载tpl下的west文件夹下的index。htm模板
		
		
		//$collegeintroduction=new collegeintroduction();
		//$collegeintroductionlist = $collegeintroduction->getList();
		//$this->view->test="院系介绍";
		//$this->view->emp=$collegeintroductionlist;
		//print_r($collegeintroductionlist);
		//echo $this->view->render("index.htm");//自动加载tpl下的collegeintroduction文件夹下的index。htm模板
	}
	
	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		//$piclick=$collegeintroduction->getsailpic($saildetail["pic_id"]);
		if ($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				$this->gotoUrl('collegeintroduction','index',1,"没有这篇文章");
				exit();
			}
			$collegeintroduction = new collegeintroduction();
			$collegeintroductioncontent = $collegeintroduction->getDetail($id);
			if ($collegeintroductioncontent)
			{
                $corpinternmsg = new corpinternmsg();
                $frontlist = $corpinternmsg->getfrontmsg(4);
                $this->view->frontlist = $frontlist;

				$collegeintroduction->addreadnum($id);
				$this->view->pre =$collegeintroduction->getPre($collegeintroductioncontent['cci_id']);
				$this->view->next =$collegeintroduction->getNext($collegeintroductioncontent['cci_id']);
				$this->view->detail = $collegeintroductioncontent;
				//$this->view->pic = $piclick;
				echo $this->view->render("detail.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
			}
			else
			{
				$this->error404("");
				$this->gotoUrl('collegeintroduction','index',1,"没有这篇文章");
			}
		
		}
		else
		{
			$this->error404("");
			$this->gotoUrl('collegeintroduction','index',0);
		}
		
	}
	
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$collegeintroduction = new collegeintroduction();
			if($collegeintroduction->addSharetimes($id)){
				echo 1;
			}else{
				echo 0;
			}
				
		}else{
			echo 0;
		}
	}
}
?>