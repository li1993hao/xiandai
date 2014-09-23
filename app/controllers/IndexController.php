<?php 


class IndexController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->view->web_url = $this->getRequest()->hostUrl; 
	}

	public function Index(){
		$this->view->test = "lihao";

		$this->view->display("index.htm");
	}

	public function Go(){
		$this->view->display("test.htm");
	}
}