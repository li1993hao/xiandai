<?php
class ProfessionsailController extends Controller{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Index()
	{
		
		$pageSize = 6;
		$professionsail=new professionsail();
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$sailList = $professionsail->getSailPageModel($page,$pageSize);
		
		//print_r($sailList);
		$this->view->sail=$sailList;
		echo $this->view->render("index.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
	}
	
	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		$professionsail = new professionsail();
		$saildetail = $professionsail->getSailDetail($id);
		$piclick=$professionsail->getsailpic($saildetail["pic_id"]);
		if ($id)
		{
		
			if ($saildetail)
			{
				$professionsail->addreadnum($id);
				$this->view->presail =$professionsail->getPresail($saildetail['ps_id']);
				$this->view->nextsail =$professionsail->getNextsail($saildetail['ps_id']);
				$this->view->detail = $saildetail;
				$this->view->pic = $piclick;
				echo $this->view->render("detail.htm");//自动加载tpl下的professionpersontalk文件夹下的index。htm模板
			}
			else 
			{
				$this->error404("");
				$this->gotoUrl('professionsail','index',1,"没有这篇文章");
			}

		}
		else 
		{
			$this->error404("");
			$this->gotoUrl('professionsail','index',0);
		}
		
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$professionsail = new professionsail();
			if($professionsail->addShareNum($id)){
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