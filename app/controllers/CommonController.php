<?php
/**
*  file:CommonController.php  encoding:UTF-8
*  Create On 2014-1-14����3:24:58
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/

class CommonController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->view->php_url=$this->getRequest()->phpUrl;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}

	/**
	 * 获取单位性质
	 */
	public function Companytype(){
		$corptype = new corptype();
		if($list = $corptype->getcorptype()){
			$ct_list = array();
			foreach($list as $item){
				$ct_list[]=array("id"=>$item["id"],"title"=>$item["title"]);
			}
			$this->getView()->setData( array( "list"=>$ct_list, "totalCount"=>count($ct_list) ) );
			$this->getView()->setState("1");
			$this->getView()->setMsg("获取单位性质成功！");
		}else{
			$this->getView()->setState("0");
			$this->getView()->setMsg("获取单位性质失败！");
		}
		$this->getView()->display("json");
		
	}
	
	/**
	 * 获取行业列表
	 */
	public function Companyindustry(){
		$ind = new industry();
		if( $list = $ind->get_industry() ){
			$ind_list = array();
			foreach($list as $item){
				$ind_list[]=array("id"=>$item["id"],"title"=>$item["title"]);
			}
			$this->getView()->setData( array( "list"=>$ind_list, "totalCount"=>count($ind_list) ) );
			$this->getView()->setState("1");
			$this->getView()->setMsg("获取单位性质成功！");
		}else{
			$this->getView()->setState("0");
			$this->getView()->setMsg("获取行业列表失败！");
		}
		$this->getView()->display("json");
	}
	
	/**
	 * 获取地区（省 市 县）
	 */
	public function Area(){
		$parentId = $this->getRequest()->get("parentid") ? $this->getRequest()->get("parentid") : 0;
		$area = new area();
		$areaList = $area->getAreaByParentId($parentId);
		if ($areaList){
			$this->view->setState("1");
			$this->view->setData( array("list"=>$areaList,"totalCount"=>count($areaList) ) );
			$this->view->setMsg("success!");
		}else{
			$this->view->setState("0");
			$this->view->setMsg("failed!");
		}
		$this->view->display("json");
	}
	
	/**
	 * 获取职位类别列表（三级）
	 */
	public function Jobtype(){
		$parentId = $this->getRequest()->get("parentid") ? $this->getRequest()->get("parentid") :0;
		$jobtype = new jobtype();
		$jobtypelist = $jobtype->getJobtypeByParentId($parentId);
		if($jobtypelist){
			$this->view->setState("1");
			$this->view->setData(array("list"=>$jobtypelist,"totalCount"=>count($jobtypelist)));
			$this->view->setMsg("success!");
		}else{
			$this->view->setState("0");
			$this->view->setMsg("failed!");
		}
		$this->view->display("json");
	}
	
	/**
	 * 文件上传（图片或文件）
	 */
	public function Fileupload(){
		if (!empty($_FILES)) {
			//print_r($_FILES);
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = "common/upload/images/";
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$adder = 'img';
			if($fileType = $this->getRequest()->get("filetype")){
				if(strtolower($fileType) == "file"){
					$targetPath = "common/upload/files/";
					$fileTypes = array('txt','rar','zip','doc','docx','ppt','pptx','pdf','xls','xlsx'); // File extensions
					$adder = 'file';
				}
				if((strtolower($fileType) == "apk"))
				{
					$targetPath = "common/upload/files/";
					$fileTypes = array('zip','rar','apk');
					$adder = 'apk';
				}
			}
				
			//echo $_FILES['Filedata']['name'];
			$fileParts = pathinfo( $_FILES['Filedata']['name'] );
			$newfilename = strtolower($this->getRequest()->cName)."/".$adder.time().".".$fileParts["extension"];
			//print_r(pathinfo( $_FILES['Filedata']['name'] ));
			//echo $newfilename;
			//exit();
			$targetFile = rtrim($targetPath,'/') . '/' . $newfilename;
			//echo $targetFile;
			// Validate the file type
				
		
			if (in_array(strtolower($fileParts['extension']),$fileTypes)) {
				$this->createDir(dirname($targetFile));
				move_uploaded_file($tempFile,$targetFile);
				@chmod($targetFile, 0755);
				if($adder == "img"){
					$pic = new picture();
					$id = $pic->addpic($fileParts['extension'],$newfilename);
				}else{
					$file = new file();
					$id = $file->addfile($newfilename, $fileParts['extension'] );
				}
		
				$re['result'] = $id ? $id : 0;
				$re['name'] = $_FILES['Filedata']['name'];
				$re['size'] = $_FILES['Filedata']['size'];//kb
				if($re['size']>1024){
					$re['size'] /= 1024;
					if($re['size']>1024){
						$re['size'] = sprintf("%.2f", ($re['size'] / 1024));
						$re['size'] .= "M";
					}else{
						$re['size'] = sprintf("%.2f", $re['size']);
						$re['size'] .= "KB";
					}
				}else{
					$re['size'] .= "B";
				}
				$re['msg'] = $this->getRequest()->hostUrl."/".$targetPath.$newfilename;
			} else {
				$re['result'] = 0;
				$re['msg'] ='Invalid file type【'+$fileTypes+'】.';
			}
			$jsonstr = json_encode($re);
		}else{
			$re['result'] = 0;
			$re['msg'] ='no file.';
			$jsonstr = json_encode($re);
		}
		echo $jsonstr;
	}
	
	/**
	 * 删除上传的文件
	 */
	public function Delfile(){
		$delType= $this->getRequest()->get("filetype");
		if ($delType == "img"){
			if ($this->getRequest()->get("id")){
				$pic = new picture();
				$isDel = $pic->delPic($this->getRequest()->get("id"));
				if ($isDel){
					$this->view->setState("1");
					$this->view->setMsg("success!");
				}else {
					$this->view->setState("0");
					$this->view->setMsg("failed!");
				}
			}else{
				$this->view->setState("0");
				$this->view->setMsg("missing id!");
			}
			
		}else if ($delType == "file" || $delType == "apk") {
			if ($this->getRequest()->get("id")){
				$file = new file();
				$isDel = $file->delFile($this->getRequest()->get("id"));
				if ($isDel){
					$this->view->setState("1");
					$this->view->setMsg("success!");
				}else{
					$this->view->setState("0");
					$this->view->setMsg("failed!");
				}
			}else{
				$this->view->setState("0");
				$this->view->setMsg("missing id!");
			}
		}else{
			$this->view->setState("0");
			$this->view->setMsg("no this action!");
		}
		$this->view->display("json");
	}
	
	/**
	 * (non-PHPdoc) 创建路径
	 * @see Controller::createDir()
	 */
	protected function createDir($path){
		if (!file_exists($path)){
			$this->createDir(dirname($path));
			mkdir($path, 0777);
		}
	}
	
	
	/**
	 * 查看用户的资料（学生教师企业）
	 */
	public function Userinfo(){
		$id = $this->getRequest()->get("id");
        //推荐招聘会
        $jobfairmsg = new jobfairmsg();
        $this->view->jobFair = $jobfairmsg->getfrontjobfair(5);


		$f_user = new frontuser();
		if( $userinfo = $f_user->getUserFromAccount($id,true) ){
			//print_r($userinfo);
			
			$this->getView()->userinfo = $userinfo;
			if($userinfo["type"]=="1"){
				$corp = new corpinternmsg();
				$corplist = $corp->getRecentByCompanyId($userinfo['id']);
				//var_dump($corplist);
				$this->view->corplist = $corplist;
				$jobfair = new jobfairmsg();
				$jobfairlist = $jobfair->getRecentByCompanyId($userinfo['id']);
				$this->view->jobfairlist = $jobfairlist;
			}
			$this->getView()->display("userinfo.html");
		}else{
			echo "没有这个用户";
		}
		
	}
	
	/**
	 * 检查邮箱是否存在
	 */
	public function Checkemail(){
		$email = $this->getRequest()->get("email");
		$f_user = new frontuser();
		$code = $f_user->chenckEmailExists($email);
		if( $code > 0 ){
			//已存在
			$this->getView()->setState("0");
			$this->getView()->setMsg("账号已经存在！");
			$this->getView()->setData( array("id"=>$code) );
		
		}else{
			if($code == 0){
				$this->getView()->setState("1");
				$this->getView()->setMsg("可以使用！");
			}else{
				$this->getView()->setState("0");
				$this->getView()->setMsg("邮箱格式错误！");
			}
		}
		$this->getView()->display("json");
	}
	
	
}