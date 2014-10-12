<?php
class LeavelistController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	
	public function daylqd(){
		$model = new leavelist();
		$dangan = $model->getItem(1);
		$this->view->dangan = $dangan;
		echo $this->view->render("daylqd.html");
	}
	
	public function xwzylqd(){
		$model = new leavelist();
		$xuewei = $model->getItem(2);
		$this->view->xuewei = $xuewei;
		echo $this->view->render("xwzylqd.html");
	}
	
	public function bdzylqd(){
		$model = new leavelist();
		$baodao = $model->getItem(3);
		$this->view->baodao = $baodao;
		echo $this->view->render("bdzylqd.html");
	}
}