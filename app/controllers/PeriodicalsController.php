<?php
class PeriodicalsController extends Controller{
	public function __construct()
	{
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Index()
	{
			$id = $this->getRequest()->get('id');
			if($id && !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				$this->gotoUrl('Periodicals','index',1,"");
				exit();
			}
			$do = $this->getRequest()->get('do');
			
			$periodicals = new periodicals();
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
				//$bulletinperiodicalsid=$bulletin->getBulletinPeriodicalsId($id,$do);
				$periodicalsid=$periodicals->getPeriodicals($id,$do);
				if(!$periodicalsid){
					$periodicalsid=$periodicals->getPeriodicals($id);
				}
					
			}else{
				$periodicalsid=$periodicals->getPeriodicals($id);
			}
			
		
			if($periodicalsid){
				$id = $periodicalsid["p_id"];
				
				$hasPre = $periodicals->hasPre($id);
				$hasNext = $periodicals->hasNext($id);
				
				$layout=$periodicals->getLayout($id);
				
				//$periodicalslist = $periodicals->getPeriodicalsList($id);
				$css=array("work_one","work_two");
				//print_r($artnumber);
				if($layout){
					foreach ($layout as $layid)
					{
						$artnum[]=array("layoutnum"=>$layid["l_number"],
									"articletotal"=>$periodicals->getArticleNum($layid["l_id"]),
									"article"=>$periodicals->getArticleFromLayoutId($layid["l_id"]),
									"cssid"=>$css
								);
					}
					
					
					//$this->view->layout=$layout;
					$this->view->artnum=$artnum;
				}

                //推荐招聘会
                $jobfairmsg = new jobfairmsg();
                $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);

				$this->view->haspre = $hasPre;
				$this->view->hasnext = $hasNext;
				$this->view->perid=$periodicalsid;
				//$this->view->list = $periodicalslist;
				echo $this->view->render("index.htm");
			
			}else{
				$this->error404("");
				$this->gotoUrl('periodicals','index',1,"没有这一期");
				
			}
			
		
	}

	public function Detail()
	{
		$id = $this->getRequest()->get('id');
		if ($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				$this->gotoUrl('periodicals','index',1,"");
				exit();
			}
			$periodicals = new periodicals();
			$periodicalsdetail = $periodicals->getPeriodicalsDetail($id);	
			
			if ($periodicalsdetail)
			{

                //推荐招聘会
                $jobfairmsg = new jobfairmsg();
                $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);

				$per_lay_id=$periodicals->getPer_lay_id($periodicalsdetail['l_id']);
				$this->view->idid = $per_lay_id;
				$periodicals->addreadnum($id);
				$abc=$periodicals->getPrearticle($periodicalsdetail['a_id'],$periodicalsdetail['l_id']);
				$bcd=$periodicals->getNextarticle($periodicalsdetail['a_id'],$periodicalsdetail['l_id']);
				$this->view->prearticle = $abc;
				$this->view->nextarticle = $bcd;
				$this->view->detail = $periodicalsdetail;
				echo $this->view->render("detail.htm");
			}
			else 
			{
				$this->error404("");
				$this->gotoUrl('periodicals','index',1,"没有这篇文章");
			}
			
			
		}
		else 
		{
			$this->error404("");
			$this->gotoUrl('periodicals','index',0);
		}
		
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$periodicals = new periodicals();
			if($periodicals->addShareNum($id)){
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
