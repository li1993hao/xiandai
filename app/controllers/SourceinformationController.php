<?php
class SourceinformationController extends Controller{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Index()
	{
		$pageSize = 20;
		$sourceinformation=new sourceinformation();
		
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		
		
		$collegeList = $sourceinformation->getSourcePageModel($page,$pageSize);
		
		$this->view->news = $collegeList;
		
		//$this->view->exist = $corpinfolist;
		
		echo $this->view->render("index.htm");
	}
	
	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		
		if($id){
			$sourceinformation = new sourceinformation();
			$sourcedetail = $sourceinformation->getSourceDetail($id);
			$sourceinformation->addreadnum($id);
			//print_r($sourcedetail);
			$this->view->pre =$sourceinformation->getPre($id);
			$this->view->next =$sourceinformation->getNext($id);
			
			$this->view->detail = $sourcedetail;
			echo $this->view->render("detail.htm");
			
			
		}else {
			$this->error404("");
			$this->gotoUrl('sourceinformation','index',0);
		}
		
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$sourceinformation = new sourceinformation();
			if($sourceinformation->addShareNum($id)){
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