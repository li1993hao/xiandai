<?php
class ProfessionpersontalkController extends Controller{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Index()
	{
		$jobfairmsg = new jobfairmsg();
		$uplist = $jobfairmsg->getfrontjobfair(4);
		$this->view->jobFair = $uplist;
		$professionpersontalk=new professionpersontalk();


		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$sailList = $professionpersontalk->getAlumunsPageModel($page,5);
		//print_r($sailList);
		$this->view->sail=$sailList;

		echo $this->view->render("index.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
	}
	
	public function Talkdetail()
	{
		$id = $this->getRequest()->get('id');
		if ($id)
		{
			$professionpersontalk = new professionpersontalk();
			$talkdetail = $professionpersontalk->getTalkDetail($id);
			//print_r($talkdetail);
			//$piclick=$professionpersontalk->getsailpic($saildetail["pic_id"]);
		
			if ($talkdetail)
			{
				$professionpersontalk->addreadnum($id);
				$this->view->pretalk =$professionpersontalk->getPretalk($talkdetail['ppt_id']);
				$this->view->nexttalk =$professionpersontalk->getNexttalk($talkdetail['ppt_id']);
				$this->view->detail = $talkdetail;
				//$this->view->pic = $piclick;
				echo $this->view->render("talkdetail.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
			}
			else
			{
				$this->error404("");
				$this->gotoUrl('professionpersontalk','index',1,"没有这篇文章");
			}
		
		}
		else
		{
			$this->error404("");
			$this->gotoUrl('professionpersontalk','index',0);
		}
		

		
	}
	public function Alumunsinfodetail()
	{
		$id = $this->getRequest()->get('id');
		$professionpersontalk = new professionpersontalk();
		$alumnusdetail = $professionpersontalk->getAlumnusInfo($id);
		//$piclick=$professionpersontalk->getsailpic($saildetail["pic_id"]);
		if ($id)
		{
			$westWork = new westWork();
			$westPersonList = $westWork->getPersons(1,6);
			$this->view->persons = $westPersonList;
			if ($alumnusdetail)
			{
				$professionpersontalk->addalureadnum($id);
				$this->view->detail = $alumnusdetail;
				echo $this->view->render("alumunsinfodetail.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
			}
			else
			{
				$this->error404("");
				$this->gotoUrl('professionpersontalk','index',1,"没有这篇文章");
			}
		
		}
		else
		{
			$this->error404("");
			$this->gotoUrl('professionpersontalk','index',0);
		}
	
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$professionpersontalk = new professionpersontalk();
			if($professionpersontalk->addShareNum($id)){
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