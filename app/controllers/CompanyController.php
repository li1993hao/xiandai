<?php 

class CompanyController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->view->web_url = $this->getRequest()->hostUrl; 
	}

	public function Myinfo(){
		$this->view->test = "lihao";
      
   
		$this->view->display("myinfo.htm");
	}

	public function Go(){
		$this->view->display("test.htm");
	}
}
