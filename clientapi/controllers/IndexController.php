<?php
/**
*  Create On 2010-7-12
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
class IndexController extends Controller{
	public function __construct(){
		
		parent::__construct();
		//print_r($this->getRequest());
		//$this->view->web_url=$this->getRequest()->hostUrl;
		
		
	}
	public function Index(){
		echo "Welcome to visit the clientapi!";
		//echo $this->view->render("index.htm");
	}
	
}