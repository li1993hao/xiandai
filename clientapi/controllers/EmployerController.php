<?php
class EmployerController extends Controller
{
	public function __construct(){
	
		parent::__construct();
		$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Getcenterintroduction()
	{
		$center = new centerintroduction();
		$addb = $center->addBrowseNum(2);
		$ci = $center->getCenter();
		$this->view->page = $ci;
		echo $this->view->render("center.html");
	}
	public function Getcollegeintroductioninfolist()
	{
		$array=array();
		$data = array();
		$college = new collegeintroduction();
		$colleageList = $college->getList();
		if($colleageList)
		{
			for($i = 0; $i < count($colleageList); $i++)
			{
				$data[$i]["id"] = $colleageList[$i]['cci_id'];
				
				$data[$i]["time"]=$colleageList[$i]['cci_time'];
				$data[$i]["url"]=$this->view->web_url."/clientapi.php/employer/collegedetail/id/".$colleageList[$i]['cci_id'];
				if ($colleageList[$i]['cci_top'] == "" or $colleageList[$i]['cci_top'] == "0000-00-00 00:00:00")
				{
					$data[$i]["title"]=$colleageList[$i]['cci_title'];
					$data[$i]['istop']=0;
				}
				else 
				{
					$data[$i]['title'] = "[置顶]".$colleageList[$i]['cci_title'];
					$data[$i]['istop']=1;
				}
			}
			$array["json"]["state"]=1;
			$array["json"]["data"]=	array("list"=>$data);
			$array["json"]["Msg"]="获取院系介绍列表成功！";
		}
		else
		{
			$array["json"]["state"]=1;
			$array["json"]["data"]=	array("list"=>$data);
			$array["json"]["Msg"]="获取院系介绍列表失败！";
		}
		echo json_encode($array);
	}
	public function Collegedetail()
	{
		$id = $this->getRequest()->get('id');
		if($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				exit();
			}
			$college = new collegeintroduction();
			$detail = $college->getDetail($id);
			if($detail)
			{
				$college->addreadnum($id);
				$this->view->detail = $detail;
				echo $this->view->render("collegedetail.html");
			}
		}
		else
		{
			$this->error404("");
		}
	}
	public function GetenrollintroductioninfoList()
	{
		$pagetype = $this->getRequest()->get('pageType');
		$pagenum = $this->getRequest()->get('pageNum') ? (strtolower($this->getRequest()->get("pageNum")) == "null" ? 1 : $this->getRequest()->get("pageNum")) : 1;
		$num = $this->getRequest()->get("pageSize") ? (strtolower( $this->getRequest()->get("pageSize")) == "null" ? 10 : $this->getRequest()->get("pageSize")) : 10 ;
		//echo $pagenum;
		$array = array();
		$data = array();
		if($pagetype == "pre")
		{
			$page = $pagenum - 1;
		}
		else  if ($pagetype =="next")
		{
			//$pagenum = 1;
			$page = $pagenum + 1;
		}
		else
		{
			$page = 1;
		}
		
		if($page <= 0)
		{
			$array["json"]["state"]= 1;
			$array["json"]["data"]=array("list"=>(array("id"=>"","title"=>"","url"=>"","time"=>"","timestamp"=>"","istop"=>"")),"totalCount"=>0,"pageNum"=>$page);
			$array["json"]["Msg"]="获取生源信息列表成功！";
		}
		$sourceinfo = new sourceinformation();
		$sourceinfolist = $sourceinfo->getSourcePageModel($page,$num);
		if($sourceinfolist['list'])
		{
			for($i = 0; $i < count($sourceinfolist['list']); $i++)
			{
				$data[$i]['id']=$sourceinfolist['list'][$i]['si_id'];
				$data[$i]['title'] = $sourceinfolist['list'][$i]['si_title'];
				$data[$i]['url'] = $this->view->web_url."/clientapi.php/employer/sourcedetail/id/".$sourceinfolist['list'][$i]['si_id'];
				$data[$i]['time'] = $sourceinfolist['list'][$i]['si_time'];
				if($sourceinfolist['list'][$i]['si_top'] == "" or $sourceinfolist['list'][$i]['si_top'] == "0000-00-00 00:00:00")
				{
					$data[$i]['istop'] = 0;
				}
				else
				{
					$data[$i]['istop'] = 1;
				}
			}
			$array["json"]["state"]=1;
			$array["json"]["data"]=	array("list"=>$data,"totalCount"=>count($sourceinfolist['list']),"pageNum"=>$page);
			$array["json"]["Msg"]="获取生源信息列表成功！";
			}
		else 
		{
			if($page > 1)
			{
				$array["json"]["state"]=1;
				$array["json"]["data"]=	array("list"=>$data,"totalCount"=>0,"pageNum"=>$page);
				$array["json"]["Msg"]="暂时没有更多信息！";
			}
		}
		echo json_encode($array);
	}
	public function Sourcedetail()
	{
		$id = $this->getRequest()->get('id');
		if($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				exit();
			}
			$source = new sourceinformation();
			$detail = $source->getDetailInfoFromId($id);
			if($detail)
			{
				$source->addreadnum($id);
				$this->view->detail = $detail;
				echo $this->view->render("sourcedetail.html");
			}
		}
		else
		{
			$this->error404("");
		}
	}
	public function Getemployguide()
	{
		$employguide = new recruitmentmanagement();
		$employguideinfo = $employguide->getRecruitment();
		$employguide->addBrowseNum(1);
		$this->view->page = $employguideinfo;
		echo $this->view->render("employguide.html");
	}
	
	public function getRecruitDetail()
	{
		$id = $this->getRequest()->get('id');
		if($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				exit();
			}
			$source = new sourceinformation();
			$detail = $source->getDetailInfoFromId($id);
			if($detail)
			{
				$source->addreadnum($id);
				$this->view->detail = $detail;
// 				echo $this->view->render("sourcedetail.html");
				echo "暂无数据";
			} else {
				echo "暂无数据";
			}
		}
		else
		{
			$this->error404("");
		}
	}
	
	public function getRecruitFairDetail()
	{
		$id = $this->getRequest()->get('id');
		if($id)
		{
			if( !preg_match("/^[0-9]*[1-9][0-9]*$/", $id)){
				$this->error404();
				exit();
			}
			$source = new sourceinformation();
			$detail = $source->getDetailInfoFromId($id);
			if($detail)
			{

				$source->addreadnum($id);
				$this->view->detail = $detail;
// 				echo $this->view->render("sourcedetail.html");
				echo "暂无数据";
			} else {
				echo "暂无数据";
			}
		}
		else
		{
			$this->error404("");
		}
	}
}
