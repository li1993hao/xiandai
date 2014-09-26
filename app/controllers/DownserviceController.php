<?php
class DownserviceController extends Controller
{
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function  Index()
	{
		$pageSize = 20;
		$down = new downloadcenter();
		//$this->view->result = $this->_doDown($down);
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$downlist = $down->getDownPageModel($page,$pageSize);
		$this->view->downlist = $downlist;
		$corpinternmsg = new corpinternmsg();
		$frontlist = $corpinternmsg->getfrontmsg(6);
		$this->view->frontlist = $frontlist;
		echo $this->view->render("index.html");
	}
	public  function Dodown()
	{
		$id = $this->getRequest()->get('id');
		$down = new downloadcenter();
		$download = $down->addDownNum($id);
		$file = $down->getInfofromId($id);
		$filedown=$file["file_link"];
		$type = $file["file_type"];
		header('Content-type: application/$type');
		header("location:".$this->getRequest()->hostUrl."/common/upload/files/".$filedown);
		//print_r($filedown);
	}
	
	public function adddownloadnum()
	{
		$id = $this->getRequest()->get('id');
		$version = new version();
		$version->adddownloadnum($id);
		
	}
	
}
