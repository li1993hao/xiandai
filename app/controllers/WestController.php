
<?php
class WestController extends Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Index(){
		$westWork = new westWork();
		$westNewsList = $westWork->getNews(1,4);
		$westPersonList = $westWork->getPersons(1,4);
		$westPolicyList = $westWork->getPolicy(1,4);
		$this->view->persons = $westPersonList;
		$this->view->news = $westNewsList;
		$this->view->policy = $westPolicyList;
		//print_r($westNewsList);
		echo $this->view->render("index.htm");//自动加载tpl下的west文件夹下的index。htm模板


	}
	
	public function News(){
		//echo 999;
		
		$pageSize = 8;
		$westWork = new westWork();
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;

		$newsList = $westWork->getNewsPageModel($page,$pageSize);
		//print_r($newsList);
		//exit();

        $westPersonList = $westWork->getPersons(1,4);
        $this->view->persons = $westPersonList;

		$this->view->news = $newsList;
		
		echo $this->view->render("westnews.htm");
		
	}
	
	public function Policy(){
		$pageSize = 8;
		$westWork = new westWork();
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		
		$newsList = $westWork->getPolicyPageModel($page,$pageSize);
		//print_r($newsList);
		$this->view->news = $newsList;

        $westPersonList = $westWork->getPersons(1,4);
        $this->view->persons = $westPersonList;

		echo $this->view->render("policy.htm");
	}
	
	public function Person(){
		$pageSize = 8;
		$westWork = new westWork();
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
	
		$newsList = $westWork->getPersonPageModel($page,$pageSize);
		//print_r($newsList);
		$this->view->news = $newsList;

        $westPersonList = $westWork->getPersons(1,4);
        $this->view->persons = $westPersonList;
	
		echo $this->view->render("person.htm");
	}
	/**
	 * 查看信息的详情
	 */
	public function Detail(){
		$id = $this->getRequest()->get('id');
		if($id){
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				$this->gotoUrl('west','index',1,"没有这篇文章");
				exit();
			}
			$westWork = new westWork();
			$westNews = $westWork->getDetailInfoFromId($id);
			if($westNews){
				$westWork->addReadnum($id);
				//print_r($westNews);
				$this->view->preNews = $westWork->getPreNews($westNews['ww_id'], $westNews['wc_id']);
				$this->view->nextNews = $westWork->getNextNews($westNews['ww_id'], $westNews['wc_id']);
				$this->view->detail = $westNews;

                $westPersonList = $westWork->getPersons(1,4);
                $this->view->persons = $westPersonList;

				echo $this->view->render("detail.htm");//自动加载tpl下的west文件夹下的index。htm模板
			}else{
				$this->error404("");
				$this->gotoUrl('west','index',1,"没有这篇文章");
			}
		}else{//如果用户没有传id 跳转回西部就业列表中
			$this->error404("");
			$this->gotoUrl('west','index',0);
		}
	}
	public function Addshare(){
		$id = $this->getRequest()->get('id');
		if($id){
			$westWork = new westWork();
			if($westWork->addShareNum($id)){
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