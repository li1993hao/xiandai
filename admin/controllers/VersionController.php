<?php
class VersionController extends Controller
{
	public function __construct(){
	
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	protected function _doplatform($pf)
	{
		if( $do = $this->getRequest()->get('do') )
		{
			if($do == "del")
			{
				
				if($this->getRequest()->get('id'))
				{
					
					if($pf->delPlatform($this->getRequest()->get('id')))
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
	public function Getplatform()
	{
		$pf = new platform();
		$this->view->result = $this->_doplatform($pf);
		$pflist = $pf->getPlatformList();
		$this->view->list = $pflist;
		echo $this->view->render("platform.html");
	}
	public function Editplatform()
	{
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		$pl = new platform();
		if($_POST)
		{
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->pingtaimingchengbunengweikong;
			}
			else
			{
				$result = $pl->modifyPlatform($id, $_POST['name'],$_POST['key']);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		if($id)
		{
		
			$info = $pl->getDetailById($id);
			$this->view->detail = $info;
		
		}
		echo $this->view->render("editplatform.html");
	}
	public function Addplatform()
	{
		$pl = new platform();
	
		if($_POST)
		{
			if($_POST['name'] == NULL)
			{
				$this->view->result = $this->_lang->pingtaimingchengbunengweikong;
			}
			else if( $pl->get_platform_from_name($_POST['name']) ){
				$this->view->result = $this->_lang->gaipingtaiyijingcunzai;
				
			}
			else
			{
				$result = $pl->addPlatform($_POST['name'],$_POST['key']);
				if($result){
					$this->view->result = $this->_lang->tianjiachenggong;
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
		}
		echo $this->view->render("addplatform.html");
	}
	protected function _doversion($version)
	{
		if( $do = $this->getRequest()->get('do') )
		{
			if($do == "del")
			{
		
				if($this->getRequest()->get('id'))
				{
						
					if($version->delVersion($this->getRequest()->get('id')))
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
	public function Getversion()
	{
		$version = new version();
		$this->view->result = $this->_doversion($version);
		$versionList = $version->getVersion();
		$this->view->list = $versionList;
		$this->view->display("version.html");
	}
	public function Editversion()
	{
		$id = $this->getRequest()->get("id");
		$this->view->id = $id;
		$version= new version();
		if($_POST)
		{
			if($_POST['platform'] == NULL)
			{
				$this->view->result = $this->_lang->pingtaimingchengbunengweikong;
			}
			else if($_POST['versionnum']==NULL)
			{
				$this->view->result = $this->_lang->banbenhaobunengweikong;
			}
			else if($_POST['type']==NULL)
			{
				$this->view->result = $this->_lang->shengjileixingbunengweikong;
			}
			else if ($_POST['flag']==NULL)
			{
				$this->view->result = $this->_lang->fabuzhuangtaibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->xiazailianjiedizhibunengweikong;
			}
			else 
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				$result = $version->modifyVersion($id, $_POST['platform'], $_POST['versionnum'], $_POST['desc'], $_POST['type'], $_POST['size'], $_POST['flag'], $_POST['time'], $_POST['url'], $_POST['appname'],$_POST['fileid'],$_POST['filetitle']);
				if($result){
					$this->view->result = $this->_lang->xiugaichenggong;
				}else{
					$this->view->result = $this->_lang->xiugaishibai;
				}
			}
		}
		$plaform = new platform();
		$platformlist = $plaform->getPlatformList();
		$this->view->plist = $platformlist;
		if($id)
		{
			$info = $version->getDetailById($id);
			$this->view->detail = $info;
		}
		echo $this->view->render("editversion.html");
	}
	public function Addversion()
	{
		//$this->getApp()->getPush()->pushMsg("ece22c166154185e17cc27c9e9e70e6e484d1e642a6189c448709dd44cde8ff6","jiuye","test","2");
		$version= new version();
		$pl = new platform();
		$plist = $pl->getPlatformList();
		$this->view->plist = $plist;
		if($_POST)
		{
			if($_POST['platform'] == NULL)
			{
				$this->view->result = $this->_lang->pingtaimingchengbunengweikong;
			}
			else if($_POST['versionnum']==NULL)
			{
				$this->view->result = $this->_lang->banbenhaobunengweikong;
			}
			else if($_POST['type']==NULL)
			{
				$this->view->result = $this->_lang->shengjileixingbunengweikong;
			}
			else if ($_POST['flag']==NULL)
			{
				$this->view->result = $this->_lang->fabuzhuangtaibunengweikong;
			}
			else if($_POST['url']==NULL)
			{
				$this->view->result = $this->_lang->xiazailianjiedizhibunengweikong;
			}
			else
			{
				$url = trim($_POST['url']);
				if( substr($url,0,7) != "http://"){
					$url ="http://".$url;
				}
				$result = $version->addVersion($_POST['platform'], $_POST['versionnum'], $_POST['desc'], $_POST['type'], $_POST['size'], $_POST['flag'], $_POST['time'], $_POST['url'], $_POST['appname'],$_POST['fileid'],$_POST['filetitle']);
				if($result){
					$this->view->result = $this->_lang->tianjiachenggong;
					echo "$result";
				}else{
					$this->view->result = $this->_lang->tianjiashibai;
				}
			}
		}
		echo $this->view->render("addversion.html");
	}
	
	public function test(){
		$this->getApp()->getPush()->pushMsg("ece22c166154185e17cc27c9e9e70e6e484d1e642a6189c448709dd44cde8ff6","jiuye22","test","2");
	}
}