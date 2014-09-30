<?php
class CalendarController extends Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function calendar(){
		echo $this->view->render("calendar.html");
	}
	
	public function Getjsondata(){
		//echo $_POST["start"];
		//echo $_POST["end"];
		$start = date("Y-m-d H:i:s",@$_POST["start"]/1000);
		$end = date("Y-m-d H:i:s",(@$_POST["end"]/1000)-1);
		$calendar = new calendar();
		$list = $calendar->getcalendar($start, $end);
		echo json_encode($list);
		//print_r($list);
	}
	
	
	public function addjsondata(){
		$calendar = new calendar();
		if($_POST){
			$addcalendar = $calendar->addcalendar($_POST['title'], $_POST['time'], $_POST['addr'], $_POST['contact'],$_POST['tel'], $_POST['student'],$_POST['assistel'], $_POST['content']);
			if($addcalendar != -1){
				$this->view->setState(1);
				$this->view->display('json');
			}else{
				$this->view->setState(0);
				$this->view->display('json');
			}
		}else{
			$this->view->setState(0);
			$this->view->display('json');
		}
	}
	
	public function delcalendar(){
		$id = $this->getRequest()->get('id');
		$calendar = new calendar();
		$calendar->delcalendar($id);
	
		echo $this->view->render("calendar.html");
	}
	
	
	
}