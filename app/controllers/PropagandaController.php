<?php
class PropagandaController extends Controller
{
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		if($id)
		{
			if (preg_match("/^[0-9]*[1-9][0-9]*$/", $id))
			{
				$pro = new propaganda();
				$prodet = $pro->getInfofromId($id);
				$addb=$pro->addBrowseNum($id);
				$this->view->detail = $prodet;
				$corpinternmsg = new corpinternmsg();
				$frontlist = $corpinternmsg->getfrontmsg(6);
				$this->view->frontlist = $frontlist;
				echo $this->view->render("detail.html");
			}
			else 
			{
				$this->error404();
			}
		}
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$pro = new propaganda();
			if($pro->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}
}