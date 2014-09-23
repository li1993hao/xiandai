<?php

//namespace admin\controllers;

class LeavelistController extends Controller{
	public function __construct(){
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
	
	public function daylqdAction(){
		if($_POST['title'] == NULL){
			$this->view->result = $this->_lang->biaotibunengweikong;
		}elseif ($_POST['content'] == NULL){
			$this->view->result = $this->_lang->neirongbunengweikong;
		}else{
			$title = $_POST['title'];
			$content = $_POST['content'];
			$type= 1;
			$model = new leavelist();
			$filetitle = $_POST['filetitle'];
			$f_id = $_POST['fileid'];
			$result = $model->modifyItem($title, $content, $filetitle,$f_id,$type);
			$this->view->result=$result;
			if($result>0){
				$this->view->result = $this->_lang->xiugaichenggong;
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
		}
		$dangan = $model->getItem(1);
		$this->view->dangan = $dangan;
		echo $this->view->render("daylqd.html");
	}
	
	public function xwzylqdAction(){
		if($_POST['title'] == NULL){
			$this->view->result = $this->_lang->biaotibunengweikong;
		}elseif ($_POST['content'] == NULL){
			$this->view->result = $this->_lang->neirongbunengweikong;
		}else{
			$title = $_POST['title'];
			$content = $_POST['content'];
			$type= 2;
			$model = new leavelist();
			$filetitle = $_POST['filetitle'];
			$f_id = $_POST['fileid'];
			$result = $model->modifyItem($title, $content, $filetitle,$f_id,$type);
			$this->view->result=$result;
			if($result>0){
				$this->view->result = $this->_lang->xiugaichenggong;
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
		}
		$xuewei = $model->getItem(2);
		$this->view->xuewei = $xuewei;
		echo $this->view->render("xwzylqd.html");
	}
	
	public function bdzylqdAction(){
		if($_POST['title'] == NULL){
			$this->view->result = $this->_lang->biaotibunengweikong;
		}elseif ($_POST['content'] == NULL){
			$this->view->result = $this->_lang->neirongbunengweikong;
		}else{
			$title = $_POST['title'];
			$content = $_POST['content'];
			$type= 3;
			$model = new leavelist();
			$filetitle = $_POST['filetitle'];
			$f_id = $_POST['fileid'];
			$result = $model->modifyItem($title, $content, $filetitle,$f_id,$type);
			$this->view->result=$result;
			if($result>0){
				$this->view->result = $this->_lang->xiugaichenggong;
			}else{
				$this->view->result = $this->_lang->xiugaishibai;
			}
		}
		$baodao = $model->getItem(3);
		$this->view->baodao = $baodao;
		echo $this->view->render("bdzylqd.html");
	}
}

?>