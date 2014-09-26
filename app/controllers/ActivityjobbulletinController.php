<?php
class ActivityjobbulletinController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
		$jobfairmsg = new jobfairmsg();
		$uplist = $jobfairmsg->getfrontjobfair(4);
		$this->view->uplist = $uplist;
	}
	
	public function Index()
	{
		
		$pageSize = 10;
		$id = $this->getRequest()->get('id');
		if($id && !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
			$this->error404();
			$this->gotoUrl('Activityjobbulletin','index',1,"");
			exit();
		}
		$do = $this->getRequest()->get('do');
		
		$hasPre = false;
		$hasNext = false;
		 
		$bulletin=new activityjobbulletin();
		
		if($do){
			if($do == "pre"){
				$do = 0;
			}else if($do == "next"){
				$do=2;
			}else{
				$do =1;
			}
			//$perid=$bulletin->getPerIdList();
			//print_r($perid);
			$bulletinperiodicalsid=$bulletin->getBulletinPeriodicalsId($id,$do);
			if(!$bulletinperiodicalsid){
				$bulletinperiodicalsid=$bulletin->getBulletinPeriodicalsId($id);
			}
			
		}else{
			$bulletinperiodicalsid=$bulletin->getBulletinPeriodicalsId($id);
		}
		
		
		
		
		if($bulletinperiodicalsid){
			//print_r($bulletinperiodicalsid);
			$id = $bulletinperiodicalsid['ap_id'];
			//echo "<br/>apid:".$id."<br/>";
			$hasPre = $bulletin->hasPre($id);
			$hasNext = $bulletin->hasNext($id);
			$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
			$bulletinlist = $bulletin->getBulletinPageModel($page,$pageSize,$id);
			//print_r($bulletinlist);
			$this->view->bulletin=$bulletinlist;
			$this->view->perid=$bulletinperiodicalsid;
			//$this->view->artbull=$bull;
			
		
			$this->view->haspre = $hasPre;
			$this->view->hasnext = $hasNext;
			
			echo $this->view->render("index.htm");//自动加载tpl下的activityjobbulletin文件夹下的index。htm模板
		}else{
			$this->error404();
			$this->gotoUrl('Activityjobbulletin','index',1,"");
			
		}
			
		
	
			
	}

	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		if ($id)
		{
		
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				$this->gotoUrl('Activityjobbulletin','index',1,"");
				exit();
			}
			$bulletin = new activityjobbulletin();
			$bulletindetail = $bulletin->getBulletinDetail($id);
			$piclink=$bulletin->getPicLink($bulletindetail["pic_id"]);
			if($bulletindetail)
			{
				$bulletin->addreadnum($id);
				$abc=$bulletin->getPrearticle($bulletindetail['aa_id'],$bulletindetail['ap_id']);
				$bcd=$bulletin->getNextarticle($bulletindetail['aa_id'],$bulletindetail['ap_id']);
				$this->view->prearticle = $abc;
				$this->view->nextarticle = $bcd;
				$this->view->detail = $bulletindetail;
				$this->view->pic = $piclink;
				echo $this->view->render("detail.htm");
			}
			else 
			{
				$this->error404("");
				$this->gotoUrl('Activityjobbulletin','index',1,"没有这篇文章");
			}
	
		}
		else
		{
			$this->error404("");
			$this->gotoUrl('Activityjobbulletin','index',0);
		}
	}
	
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$bulletin = new activityjobbulletin();
			if($bulletin->addShareNum($id)){
				echo 1;
			}else{
				echo 0;
			}
	
		}else{
			echo 0;
		}
	}
}