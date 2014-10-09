<?php
class OthermanagementController extends Controller
{
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	public function Centerintroduction()
	{
		$centerint = new centerintroduction();
		$center = $centerint->getCenter();
		$this->view->center = $center;
		echo $this->view->render("center.html");
	}


	public function Editcenterintroduction()
	{
			$center = new centerintroduction();
			if($_POST)
			{
				if(trim($_POST['content'])== "")
				{
					$this->view->result = $this->_lang->zhengwenbunengweikong;
				}
				else {
					$edit = $center->updateContent(2, addslashes($_POST['content']));
				//$time = $center->updateTime(2);
					if($edit){
						$this->view->result=$this->_lang->xiugaichenggong;
					}else{
					$this->view->result=$this->_lang->xiugaishibai;}
				}
			}
			$editcenter = $center->getCenter();
			$this->view->editcent = $editcenter;
			echo $this->view->render("editcenter.html");
	}
	public function Sendservices()
	{
		$sendser = new sendservices();
		$sendList = $sendser->getSend();
		$this->view->send = $sendList;
		echo $this->view->render("send.html");
	}
	public function Editsend()
	{
		//print_r ($_POST);
		$send = new sendservices();
		if($_POST)
		{

			if(trim($_POST['content']) == "")
			{
				$this->view->result = $this->_lang->zhengwenbunengweikong;
			}else {
				$edit = $send->updateContent(3, addslashes($_POST['content']));
				if($edit){
					$this->view->result=$this->_lang->xiugaichenggong;
				}else{
					$this->view->result=$this->_lang->xiugaishibai;
				}
			}
		}
		$editsend = $send->getSend();
		$this->view->editsend = $editsend;
		echo $this->view->render("editsend.html");
	}
	public function Friendlink()
	{
		$friendlink = new friendlink();
		$linkList = $friendlink->getLinkList();
		$this->view->link = $linkList;
		echo  $this->view->render("link.html");
	}
	public function Download()
	{
		$downcenter = new downloadcenter();
		$downList = $downcenter->getdownList();
		$this->view->download = $downList;
		echo $this->view->render("down.html");
	}
	public function Propaganda()
	{
		$propaganda = new propaganda();
		$pmlist = $propaganda->getPropagandaList();
		$this->view->propaganda = $pmlist;
		echo $this->view->render("propaganda.html");
	}
	public function Dropzone()
	{
		$dropzone = new dropzone();
		$droplist = $dropzone->getDropzoneList();
		$this->view->drop = $droplist;
		echo $this->view->render("drop.html");
	}
	protected function _dosomething($soft){
		if( $do = $this->getRequest()->get('do') ){
	
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($soft->delSoft($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "top"){
				if($this->getRequest()->get('id')){
					if($soft->setSoftIstop($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "canceltop"){
				if($this->getRequest()->get('id')){
					if($soft->cancelTop($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	
	}

    public function  Publicitycolumn(){
      // var_dump($_POST);
        $soft = new studysoft();
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
        if($_POST){
            $pic_id= $_POST['picstate']==2?$_POST['picid']:-1;
            $pc_title= $_POST['title'];
            $pc_id= $_POST['pc_id'];
            $pc_url= $_POST['url'];
            $stop= $_POST['stop']?1:0;
            $soft->setPublicitycolumn($pc_id,$pic_id,$pc_title,$pc_url,$stop);
        }
        $this->view->detail = $soft->getPublicitycolumn();
        //var_dump($this->view->detail);
        echo $this->view->render("publicitycolumn.html");
    }


    public function Getsoftlist()
	{
		$soft = new studysoft();
		$this->view->result = $this->_dosomething($soft);
		$softlist = $soft->getSoftList();
		$this->view->softlist = $softlist;
		echo $this->view->render("soft.html");
	}
	public function EditSoft()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$soft = new studysoft();
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		
		if($_POST){
			$url = trim($_POST['url']);
			if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else if($_POST['title']== NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['picid']==NULL)
			{
				$this->view->result = $this->_lang->tupianbunengweikong;
			}
			else 
			{
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				$result = $soft->modifyinfo($id, $_POST['title'], $url,$_POST['picid']);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		if($id)
		{
				
			$softinfo = $soft->getInfofromId($id);
			$this->view->detail = $softinfo;
				
		}
		echo $this->view->render("editsoft.html");
	}
	protected  function _doLink($link)
	{
		if( $do = $this->getRequest()->get('do') ){
			if($do == "del")
			{
				if($this->getRequest()->get('id'))
				{
					if($link->delLink($this->getRequest()->get('id')))
					{
						return  $this->_lang->shanchuchenggong;
					}
					else{
						return  $this->_lang->shanchushibai;
					}
				}
				else{
					return $this->_lang->shanchushibai;
				}
			}
		}
	}
	public function Getlinklist()
	{
		$link = new friendlink();
		$this->view->result = $this->_doLink($link);
		$schoollink = $link->getLinkList(0);
		$this->view->school = $schoollink;
		$outlink = $link->getLinkList(1);
		$this->view->out = $outlink;
		echo $this->view->render("link.html");
	}
	public function Editlink()
	{
		$link = new friendlink();
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		
		if($_POST){
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else 
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url="http://".$url;
				}
				$result = $link->modifyinfo($id, $_POST['title'], $url);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
			
		}
		if($id)
		{
		
			$linkinfo = $link->getInfoById($id);
			$this->view->detail = $linkinfo;
		
		}
		echo $this->view->render("editlink.html");
	}
	public function Addlink()
	{
		$link = new friendlink();
		if($_POST)
		{	
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			
			else 
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				$result = $link->insertLink($url, $_POST['title'], $_POST['flag']);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
		}
		echo $this->view->render("addlink.html");
	}
	public function Addsoft()
	{
        //生成随机数
        $mm=rand(100,1000);
        $this->view->mm=$mm;
		$soft = new studysoft();
		$addpiclink = new picture();
		if($_POST)
		{
			if($_POST['title']== NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else if($_POST['picid']==NULL)
			{
				$this->view->result = $this->_lang->tupianbunengweikong;
			}
			else 
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				$result = $soft->insertSoft($_POST['picid'],$url, $_POST['title']);
				//print_r($_POST);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}	
			}
			
		}
		echo $this->view->render("addsoft.html");
	}
	protected  function _doDown($down)
	{
		if( $do = $this->getRequest()->get('do') ){
		
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($down->deleteDown($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "top"){
				if($this->getRequest()->get('id')){
					if($down->setDownIstop($this->getRequest()->get('id'))){
						return  $this->_lang->zhidingchenggong;
					}else{
						return  $this->_lang->zhidingshibai;
					}
				}else{
					return $this->_lang->zhidingshibai;
				}
			}else if($do == "canceltop"){
				if($this->getRequest()->get('id')){
					if($down->cancelTop($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	}
	public function Getdownlist()
	{
		$down = new downloadcenter();
		$this->view->result = $this->_doDown($down);
		$pageSize = 8;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$downList = $down->getDownPageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->downlist = $downList;
		echo $this->view->render("down.html");
	}
	public function Editdown()
	{
		$down = new downloadcenter();
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		if($_POST){
			if($_POST['title']==NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
				
			}
			else if($_POST['size']== NULL)
			{
				$this->view->result = $this->_lang->wenjiandaxiaobunengweikong;
			}
			else if($_POST['fileid']==NULL)
			{
				$this->view->result = $this->_lang->wenjianbunengweikong;
			}
			else 
			{
				$result = $down->updateInfo($id, $_POST['title'],$_POST['fileid'],$_POST['size']);
					
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		if($id)
		{
		
			$downinfo = $down->getInfofromId($id);
			$this->view->detail = $downinfo;
		
		}
		echo $this->view->render("editdown.html");
		
	}
	public function Adddown()
	{
		$down = new downloadcenter();
		$file = new file();
		if ($_POST)
		{
		if($_POST['title']==NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
				
			}
			else if($_POST['size']== NULL)
			{
				$this->view->result = $this->_lang->wenjiandaxiaobunengweikong;
			}
			else if($_POST['fileid']==NULL)
			{
				$this->view->result = $this->_lang->wenjianbunengweikong;
			}
			else
			{
				$result = $down->insertDownfile($_POST['fileid'],$_POST['title'],$_POST['size']);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
		}
		
		echo $this->view->render("adddown.html");
	}
	protected  function _doPro($pro)
	{
		if( $do = $this->getRequest()->get('do') ){
	
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($pro->deletePropaganda($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "top"){
				if($this->getRequest()->get('id')){
					if($pro->setProIstop($this->getRequest()->get('id'))){
						return  $this->_lang->qiyongchenggong;
					}else{
						return  $this->_lang->qiyongshibai;
					}
				}else{
					return $this->_lang->qiyongshibai;
				}
			}else if($do == "canceltop"){
				if($this->getRequest()->get('id')){
					if($pro->cancelTop($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	}
	public function Getprolist()
	{
		$pro = new propaganda();
		$this->view->result = $this->_doPro($pro);
		$pageSize = 8;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		$proList = $pro->getPropagandaPageModel($page,$pageSize);
		$this->view->prolist = $proList;
		echo $this->view->render("propaganda.html");
	}
	public function Addpro()
	{
		$pro = new propaganda();
		$addpiclink = new picture();
		if ($_POST)
		{
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else if($_POST['picid'] == NULL)
			{
				$this->view->result = $this->_lang->tupianbunengweikong;
			}
			else if($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else 
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url="http://".$url;
				}
				$result = $pro->insertPropaganda($_POST['picid'],$url,addslashes($_POST['content']),$_POST['title']);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
		}
		echo $this->view->render("addpro.html");
	}
	public function Editpro()
	{
		$pro = new propaganda();
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		
		if($_POST){
			if($_POST['title'] == NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else if($_POST['picid'] == NULL)
			{
				$this->view->result = $this->_lang->tupianbunengweikong;
			}
			else if($_POST['content'] == NULL)
			{
				$this->view->result = $this->_lang->neirongbunengweikong;
			}
			else
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url="http://".$url;
				}
				$result = $pro->modifyinfo($id,$url,$_POST['picid'],addslashes($_POST['content']),$_POST['title']);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		if($id)
		{
		
			$proinfo = $pro->getInfofromId($id);
			$this->view->detail = $proinfo;
		
		}
		echo $this->view->render("editpro.html");
	}
	public function Getdroplist()
	{
		$drop = new dropzone();
		$this->view->result = $this->_doDrop($drop);
		$pageSize = 8;
		$page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
		//echo $page;
		$dropList = $drop->getDropPageModel($page,$pageSize);
		//print_r($jobList);
		$this->view->droplist = $dropList;
		echo $this->view->render("drop.html");
	}
	protected  function _doDrop($drop)
	{
		if( $do = $this->getRequest()->get('do') ){
	
			if($do == "del"){
				if($this->getRequest()->get('id')){
					if($drop->delDrop($this->getRequest()->get('id'))){
						return  $this->_lang->shanchuchenggong;
					}else{
						return  $this->_lang->shanchushibai;
					}
				}else{
					return $this->_lang->shanchushibai;
				}
			} else if($do == "top"){
				if($this->getRequest()->get('id')){
					if($drop->setDropIstop($this->getRequest()->get('id'))){
						return  $this->_lang->qiyongchenggong;
					}else{
						return  $this->_lang->qiyongshibai;
					}
				}else{
					return $this->_lang->qiyongshibai;
				}
			}else if($do == "canceltop"){
				if($this->getRequest()->get('id')){
					if($drop->cancelTop($this->getRequest()->get('id'))){
						return $this->_lang->quxiaochenggong;
					}else{
						return $this->_lang->quxiaoshibai;
					}
				}else{
					return $this->_lang->quxiaoshibai;
				}
			}else{
				return $this->_lang->buzhichicixiangcaozuo;
			}
		}else{
			return "";
		}
	}
	public function Adddrop()
	{
		$drop = new dropzone();
		$addpiclink = new picture();
		if ($_POST)
		{
			if($_POST['title']==NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				$result = $drop->insertDrop($_POST['picid'],$_POST['title'],$url,$_POST['content']);
				//print_r($_POST);
				//print_r($result);
				if($result>0){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
			
		}
		
		echo $this->view->render("adddrop.html");
	}
	public function Editdrop()
	{
		$drop = new dropzone();
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		
		if($_POST){
			if($_POST['title']==NULL)
			{
				$this->view->result = $this->_lang->biaotibunengweikong;
			
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->lianjiebunengweikong;
			}
			else
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				//print_r($_POST);
				$result = $drop->modifyinfo($id,$url,$_POST['picid'],$_POST['title'],$_POST['content']);
				//print_r($result);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		
		}
		if($id){
			$dropinfo = $drop->getInfofromId($id);
			$this->view->detail = $dropinfo;
		}
		echo $this->view->render("editdrop.html");
	}
}