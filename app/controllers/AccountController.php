<?php 


class AccountController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->view->web_url = $this->getRequest()->hostUrl; 
	}
// Company 注册
	public function register(){
		
		$this->view->reg_flag = "register";
		if($_POST){
                $email = $this->getRequest()->get("form_email");
                $name = $this->getRequest()->get("form_name");
                $password = $this->getRequest()->get("form_password");
                $dwxz = $this->getRequest()->get("form_dwxz");
                $hy = $this->getRequest()->get("form_hy");
                $zczb = $this->getRequest()->get("form_zczb");
                $yzbm = $this->getRequest()->get("form_yzbm");
                $xian = $this->getRequest()->get("form_xian");
                $xxdz = $this->getRequest()->get("form_xxdz");
                $lxr = $this->getRequest()->get("form_lxr");
                $gddh = $this->getRequest()->get("form_gddh");
                $phone = $this->getRequest()->get("form_phone");
                $chz = $this->getRequest()->get("form_chz");
                $gsjj = $this->getRequest()->get("gsjj");//公司简介

		$f_user = new frontuser();
		$result = $f_user->addCorpUser($email, $password);
		// var_dump($result);

		if($result["state"] ){
				$id = $result["code"];
				//
				$dataArr["id"] = $id;
				$dataArr["name"] = $name;
				$dataArr["indId"] = $hy;
				$dataArr["corpId"] = $dwxz;
				$dataArr["capital"] = $zczb;
				$dataArr["contacter"] = $lxr;
				$dataArr["phone"] = $gddh;
				$dataArr["fax"] = $chz;
				$dataArr["mobile"] = $phone;
				$dataArr["post"] = $yzbm;
				$dataArr["email"] = "";
				$dataArr["website"] = "";
				$dataArr["areaId"] = $xian;
				$dataArr["address"] = $xxdz;
				$dataArr["intro"] = $gsjj;
				$dataArr["picId"] = "";//logo

				$r1 = $f_user->setCorpUserInfo($dataArr);
				//$r2 = $f_user->setCorpZzh($id, $fileList);
				// $r2 = $f_user->setCorpZzh($r1, $fileList);//返回的结果r1是com_id
				$this->dataCheck();

				$this->view->reg_flag = "succeed";

			}else{
				if( $result["code"] > 0 ){
					$this->view->reg_result = "注册失败，该邮箱已被占用！";
				}else{
					$this->view->reg_result = "注册失败，邮箱格式不正确！";
				}
				// $this->view->reg_flag = "succeed";
				// $pic = new picture();
				// $zzhlist = $pic->getPic($fileList);
				// $this->getView()->zzhList = $zzhlist;
				// $this->getView()->form_userinfo = $_POST; 
			}
	//获取单位性质列表
 }
		$corptype = new corptype();
		$list = $corptype->getcorptype();
		$this->getView()->dwxzList = $list;
		unset($list);
	// $corpModal = new corpinternmsg();
	 // $corpTye = $corpModal->getcttypelist();
	 // $this->view->corpTye = $corpTye;

	//获取行业列表
		$ind = new industry();
		$list = $ind->get_industry();
		$this->getView()->hyList = $list;
		unset($list);
	//获取地区列表
		$area = new area();
		$list = $area->getAreaByParentId(0);
		$this->getView()->provinceList = $list;
		unset($list);

        $this->view->display("register.htm");


	}
// 上传资质证书
	public function dataCheck() {
		if (!empty($_FILES)) {
			$tempFile = $_FILES['file_upload']['tmp_name'];
			$targetPath = "common/upload/images/";
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$adder = 'img';

			$fileParts = pathinfo($_FILES['file_upload']['name']);
			// var_dump($fileParts);

			$newfilename = strtolower($this->getRequest()->cName."/companyZzh")."/".$adder.time().".".strtolower($fileParts["extension"]);
			//print_r(pathinfo( $_FILES['Filedata']['name'] ));
			// echo $newfilename;
			//exit();
			$targetFile = rtrim($targetPath,'/') . '/' . $newfilename;
			// echo $targetFile;
			// Validate the file type
			// $file = $this->getRequest()->get("filetype");
			// var_dump($file);
			if (in_array(strtolower($fileParts['extension']),$fileTypes)) {
				// echo "ok";
				// var_dump(dirname($targetFile));
				$this->createDir(dirname($targetFile));
				move_uploaded_file($tempFile,$targetFile);
				
				if($adder == "img"){
					$pic = new picture();
					$id = $pic->addpic($fileParts['extension'],$newfilename);
					// echo "ok";
				}else{
					$file = new file();
					$id = $file->addfile($newfilename, $fileParts['extension'] );
				}

				$re['result'] = $id ? $id : 0;
				$re['name'] = $_FILES['file_upload']['name'];
				$re['size'] = $_FILES['file_upload']['size'];//kb
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
				// var_dump($re);
			}else {
				$re['result'] = 0;
				$re['msg'] ='Invalid file type【filed  not exists】.';
			}
			$jsonstr = json_encode($re);
		}else{
			$re['result'] = 0;
			$re['msg'] ='no file.';
			$jsonstr = json_encode($re);
		}
		// echo $jsonstr;
	}
	public function createDir($path) {
		if(!file_exists($path)){
			$this->createDir(dirname($path));
			mkdir($path, 0777);
		}
	}
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
