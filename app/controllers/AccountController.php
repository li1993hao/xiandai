<?php
/**
 *  file:CommonController.php  encoding:UTF-8
 *  Create On 2014-1-14����3:24:58
 *  Author lidianbin
 *  QQ: 281443751
 *  Email: lidianbin@iwind-tech.com
 **/

class AccountController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->view->php_url=$this->getRequest()->phpUrl;
        $this->view->web_url=$this->getRequest()->hostUrl;
    }

    /**
     * 登录
     */
    public function Login(){
        $username = $this->getRequest()->get("username");
        $password = $this->getRequest()->get("password");
        $f_user = new frontuser();
        $result = $f_user->authUser( $username, $password );
        if($result["result"] > 0){
            //验证通过
            $this->getView()->setState("1");
            $this->getView()->setMsg($result["msg"]);
            $this->getView()->setStatus("1");
            $this->getView()->setData(array("userType"=>$result["userinfo"]["type"],"userTypeName"=>$result["userinfo"]["typename"],"userName"=>$result["userinfo"]["name"],"userState"=>$result["userinfo"]["state"],"userStateName"=>$result["userinfo"]["statename"]));
            $sessionUtil = $this->getApp()->loadUtilClass("SessionUtil");
            $sessionUtil->set ( "session_userid", $result["result"] );


        }else{
            $this->getView()->setState("0");
            $this->getView()->setMsg($result["msg"]);
        }
        $this->view->display ( "json" );
    }

    /**
     * 注册
     */
    public function Register(){

        $this->getView()->reg_flag = "register";
        $this->getView()->zzhList = array();
        $this->getView()->form_userinfo = array();
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

            $fileList = explode(",", trim($this->getRequest()->get("fileid"),  "," ) ) ;

            $f_user = new frontuser();
            $result = $f_user->addCorpUser($email, $password);

            if($result["state"] ){
                $id = $result["code"];
                //
                //echo $id."<br/>TTTTTTTTTTTTTTTTTt";
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
                $r2 = $f_user->setCorpZzh($r1, $fileList);//返回的结果r1是com_id

                $this->getView()->reg_flag = "succeed";
            }else{
                if( $result["code"] > 0 ){
                    $this->getView()->reg_result = "注册失败，该邮箱已被占用！";
                }else{
                    $this->getView()->reg_result = "注册失败，邮箱格式不正确！";
                }
                $pic = new picture();
                $zzhlist = $pic->getPic($fileList);
                $this->getView()->zzhList = $zzhlist;
                $this->getView()->form_userinfo = $_POST;
            }

        }
        $corptype = new corptype();
        $list = $corptype->getcorptype();
        $this->getView()->dwxzList = $list;
        unset($list);

        //行业列表
        $ind = new industry();
        $list = $ind->get_industry();
        $this->getView()->hyList = $list;
        unset($list);

        //省
        $area = new area();
        $list = $area->getAreaByParentId(0);
        $this->getView()->provinceList = $list;
        unset($list);

        $this->getView()->display("register.htm");
    }

    /**
     * 注销登录
     */
    public function Logout() {
        $session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
        $session->clear ();
        $this->gotoUrl("index","index");
    }

}