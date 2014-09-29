<?php

class CompanyController extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->web_url = $this->getRequest()->hostUrl;
    }

    public function myinfo(){
        $userinfo = $this->getData("userinfo");
        // var_dump($userinfo['location']);
        //$company = new company();
        //$companyInfo = $company->getCompanyDetailByFuId($userinfo['id']);
        if($userinfo['areaParentId'] != 0){
            $area = new area();
            $parentArea = $area->getParentAreaByParentId($userinfo['areaParentId'] );
            if ($parentArea['p_id'] != 0){
                $grandArea = $area->getParentAreaByParentId($parentArea['p_id']);
                $userinfo['location'] = $grandArea['area_name']."-".$parentArea['area_name']."-".$userinfo['location'];
            }else{
                $userinfo['location'] = $parentArea['area_name']."-".$userinfo['location'];
            }
        }else{
            $userinfo['location'] = $userinfo['location'];
        }
        $this->view->detail = $userinfo;
        $comPics = new companypicture();
        $pics = $comPics->getPicByCompanyId($userinfo['comId']);
        $this->view->pics = $pics;
        $corp = new corpinternmsg();
        $corplist = $corp->getRecentByCompanyId($userinfo['id']);
        //var_dump($corplist);
        $this->view->corplist = $corplist;
        $jobfair = new jobfairmsg();
        $jobfairlist = $jobfair->getRecentByCompanyId($userinfo['id']);
        $this->view->jobfairlist = $jobfairlist;
        echo $this->view->render("myinfo.htm");
    }

    public function Getstudentinfo(){
        $userinfo = $this->getData("userinfo");
        $flag = $this->getRequest()->get("flag") ? $this->getRequest()->get("flag") : 0;
        $type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 0;
        $infoId = $this->getRequest()->get("infoid") ? $this->getRequest()->get("infoid") : 0;
        $pro = $this->getRequest()->get("major") ? $this->getRequest()->get("major") : 0;
        if ($pro == "null"){
            $pro = 0;
        }
        $time = $this->getRequest()->get("time") ? $this->getRequest()->get("time") : 0;
        $page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1;
        $pageNum = 10;
        $collect = new collect();
        $collectList = $collect->getInterestedstudentsByFuId($userinfo["id"], $type, $flag, $infoId, $pro, $time, $page, $pageNum);
        if ($collectList){
            if ($flag == 0){
                $this->view->setState("1");
                $this->view->setData($collectList);
                $this->view->setMsg("success");
            }else if ($flag == 1){
                $infoArr = array();
                $infoArr = $collect->getInterestedstudentsByFuId($userinfo["id"], $type, $flag, $infoId, $pro, $time, $page, $pageNum);
                $this->view->setState("1");
                $this->view->setData($infoArr);
                $this->view->setMsg("success");
            }else{
                $proArr = array();
                $proArr = $collect->getInterestedstudentsByFuId($userinfo["id"], $type, $flag, $infoId, $pro, $time, $page, $pageNum);
                $this->view->setState("1");
                $this->view->setData($proArr);
                $this->view->setMsg("success");
            }
        }else{
            $this->view->setState("0");
            $this->view->setMsg("failed");
        }
        $this->view->display("json");
    }

    public function getmyjobfair(){
        $userinfo=$this->getData("userinfo");
        //var_dump($userinfo);
        $pageSize = 10;
        $page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
        $type = $this->getRequest()->get('type') ? $this->getRequest()->get('type') : 1 ;
        $this->view->type = $type;
        $this->view->page = $page;
        $publish = $userinfo['id'];
        //var_dump($publish);
        $jobfair = new jobfairmsg();

        $jobfairlist = $jobfair->getJobfairPageModel($page,$pageSize,null,$type,$publish);
        $this->view->jobfair = $jobfairlist;

        echo $this->view->render("myjobfair.htm");
    }

// 招聘信息
    public function getmycorpmsg(){
        $userinfo=$this->getData("userinfo");
        //var_dump($userinfo);
        $pageSize = 5;
        $page = $this->getRequest()->get('page') ? $this->getRequest()->get('page') : 1 ;
        $type = $this->getRequest()->get('type') ? $this->getRequest()->get('type') : 1 ;
        $this->view->type = $type;
        $this->view->page = $page;
        $publish = $userinfo['id'];
        //var_dump($publish);
        $corpmsg = new corpinternmsg();
        $collect = new collect();

        $jobfairlist = $corpmsg->getPageModel(null,$page,$pageSize,null,$type,$publish);

        if($jobfairlist['list']){
            for( $i=0; $i < count( $jobfairlist['list'] ); $i++ ){
                if( $jobfairlist['list'][$i]['cim_veri'] == 1 ){
                    $num = $collect->getCollectNum($jobfairlist['list'][$i]['cim_id'], $jobfairlist['list'][$i]['rit_id']);
                    $jobfairlist['list'][$i]['interest'] = $num['COUNT(`collect`.`coll_id`)'];
                }
            }
        }
        //var_dump($alljobfair);
        $this->view->jobfair = $jobfairlist;

        $this->view->righttype = 1;
        echo $this->view->render("mycorpmsg.htm");
    }

    /**
     * 删除招聘信息
     */
    public function deletecorpmsg(){
        $userinfo = $this->getData("userinfo");
        $corpmsgid = $this->getRequest()->get("id");
        $corpmsg = new corpinternmsg();
        $delresult = $corpmsg->delmsg($corpmsgid,$userinfo["id"]);
        $deleteoffice = $corpmsg->deloffice($corpmsgid);
        if($corpmsgid&&$deleteoffice){
            if($delresult){
                $this->view->setMsg("删除成功");
                $this->view->setState(1);
            }else{
                $this->view->setMsg("删除失败");
                $this->view->setState(0);
            }
        }else{
            $this->view->setMsg("参数缺失,删除失败");
        }

        $this->view->display("json");
    }

    public function Studentinterestme(){
        echo $this->view->render("studentinterstme.htm");
    }

//  所有学生
    public function Studentall(){
        $userinfo = $this->getData("userinfo");
        $degree = $userinfo['degree'];

        $drTable = $this->getData("drTable");//这个值是在appFilter。php中set的，不了解可以去那看一下
//		if($degree < $drTable[ "allStudentinfo" ]["limit"] ){
//			$this->_error("您还不能查看所有学生的信息【原因：等级不够！】");
//			exit();
//		}

        echo $this->view->render("studentall.htm");
    }
    /**

     * 修改招聘会
     */
    public function editjobfair(){
        $userinfo = $this->getData("userinfo");
        //var_dump($userinfo);
        $this->view->company = $userinfo;
        $jobfairid = $this->getRequest()->get('id');
        $jobfair = new jobfairmsg();
        $area = new area();
        if($_POST){
            if ($_POST['fileid']){
                $editjobfair = $jobfair->editjobfairmsg($jobfairid, $_POST['jobfairtitle'], null, null, null, null, $userinfo['id'], $_POST['content'], null, null,$_POST['filetitle'],$_POST['fileid'],$_POST['require'],$_POST['county'],$userinfo['id'],$_POST['isopen']);
            }else{
                $editjobfair = $jobfair->editjobfairmsg($jobfairid, $_POST['jobfairtitle'], null, null, null, null, $userinfo['id'], $_POST['content'], null, null,null,null,$_POST['require'],$_POST['county'],$userinfo['id'],$_POST['isopen']);
            }
            if($editjobfair){
                $this->view->result = $this->_lang->xiugaichenggong;
            }else{
                $this->view->result = $this->_lang->xiugaishibai;
            }

        }
        $jobfairinfo = $jobfair->getsomeDetailInfoFromId($jobfairid);
        //var_dump($jobfairinfo);

        $areainfo = $area->getInfoById($jobfairinfo['area_id']);
        //var_dump($areainfo);
        $cityinfo = $area->getInfoById($areainfo['p_id']);
        $provinfo = $area->getInfoById($cityinfo['p_id']);
        //var_dump($areainfo);
        $this->view->areainfo = $areainfo;
        $this->view->cityinfo = $cityinfo;
        $this->view->provinfo = $provinfo;
        //var_dump($provinfo);
        //var_dump($cityinfo);
        //var_dump($areainfo);
        $this->view->jobfairinfo = $jobfairinfo;
        echo $this->view->render("editjobfair.htm");
    }

    /**
     * 修改招聘信息
     */
    public function editcorpmsg(){
        $userinfo = $this->getData("userinfo");
        $this->view->company = $userinfo;
        $corpmsgid = $this->getRequest()->get('id');
        $corpmsg = new corpinternmsg();
        if($_POST){
            $editresult = $corpmsg->updatemsg($corpmsgid, $_POST['jobfairtitle'], $_POST['jobfairtype'], $_POST['prov'], null, null, $userinfo['phone'],$userinfo['comEmail'], $userinfo['fax'], $userinfo['website'], $userinfo['id'], null,$_POST['content'], 0, 0,$_POST['filetitle'],$_POST['fileid'],$userinfo["id"],$_POST['isopen']);
            if($_POST['officenamelist']){
                $deleteresult = $corpmsg->deloffice($corpmsgid);
                if($deleteresult){
                    $officenamelist = $_POST['officenamelist'];
                    $officetypelist = $_POST['officejobtype'];
                    $officereqlist = $_POST['officecontent'];
                    //var_dump($_POST['officenamelist']);
                    for($i = 0;$i<count($officenamelist);$i++){
                        $officename = $officenamelist[$i];
                        $officetype = $officetypelist[$i];
                        $officereq = $officereqlist[$i];
                        $addoffice = $corpmsg->insertoffice($officename, $officereq,$officetype,$corpmsgid);
                    }
                }
            }
            //var_dump($_POST['officenamelist']);
            if($editresult){
                $this->view->result = $this->_lang->xiugaichenggong;
            }else{
                $this->view->result = $this->_lang->xiugaishibai;
            }
        }
        $corpmsginfo = $corpmsg->getDetailInfoFromId($corpmsgid);
        //var_dump($corpmsginfo);
        $this->view->corpmsginfo = $corpmsginfo;
        $officelist = $corpmsg->getofficeinfo($corpmsgid);
        //var_dump($officelist);
        if($officelist){
            for($i=0;$i<count($officelist);$i++){
                $officetype1 = $corpmsg->getofficetype($officelist[$i]['parent_id']);
                $officelist[$i]['officetype1'] = $officetype1['parent_id'];
                $officelist[$i]['officetype2'] = $officelist[$i]['parent_id'];
            }
        }


        $this->view->officelist = $officelist;


        echo $this->view->render("editcorpmsg.htm");
    }
// 修改企业信息
    public function modifyinfo(){
        $userinfo = $this->getData("userinfo");
        $frountid = $userinfo['id'];
        $company = new company();
        $area = new area();
//		var_dump($area);
        $companyid = $company->getCompanyDetailByFuId($frountid);
        $beforefilelist = $company->getfilelist($companyid['com_id']);
        for($i=0;$i<count($beforefilelist);$i++){
            $fileList[$i] = $beforefilelist[$i]['pic_id'];
        }
        //var_dump($fileList);
        //var_dump($beforefilelist);
        if($_POST){
            $dwxz = $this->getRequest()->get("form_dwxz");
            $hy = $this->getRequest()->get("form_hy");
            $zczb = $this->getRequest()->get("form_zczb");
            $yzbm = $this->getRequest()->get("form_yzbm");
            $xian = $this->getRequest()->get("county");
            $xxdz = $this->getRequest()->get("form_xxdz");
            $lxr = $this->getRequest()->get("form_lxr");
            $gddh = $this->getRequest()->get("form_gddh");
            $phone = $this->getRequest()->get("form_phone");
            $chz = $this->getRequest()->get("form_chz");
            $gsjj = $this->getRequest()->get("gsjj");//公司简介
            $commail = $this->getRequest()->get("form_commail");
            $comweb = $this->getRequest()->get("form_comweb");
            $filestate = $this->getRequest()->get("filestate");



            $dataArr["id"] = $companyid['com_id'];
            //$dataArr["name"] = $name;
            $dataArr["indId"] = $hy;
            $dataArr["corpId"] = $dwxz;
            $dataArr["capital"] = $zczb;
            $dataArr["contacter"] = $lxr;
            $dataArr["phone"] = $gddh;
            $dataArr["fax"] = $chz;
            $dataArr["mobile"] = $phone;
            $dataArr["post"] = $yzbm;
            $dataArr["areaId"] = $xian;
            $dataArr["address"] = $xxdz;
            $dataArr["intro"] = $gsjj;
            $dataArr["commail"] = $commail;
            $dataArr["comweb"] = $comweb;
            $beforefilelist = $company->getfilelist($companyid['com_id']);

            if($filestate==2){
               $fileList = explode(",", trim($this->getRequest()->get("fileid"),  "," ) ) ;
               $company->setCorpZzh($companyid['com_id'], $fileList);
            }

            $updateresult = $company->updateCcompanyInfo($dataArr);

            if ($updateresult === false){
                $this->view->result = $this->_lang->xiugaishibai;
            }else{
                $this->view->result = $this->_lang->xiugaichenggong;
            }
            //var_dump($updateresult);
        }
        $pic = new picture();
        $zzhlist = $pic->getPic($fileList);
        //var_dump($zzhlist);
        $this->getView()->zzhList = $zzhlist;


        $corptype = new corptype();
        $list = $corptype->getcorptype();
        $this->view->dwxzList = $list;

        //行业列表
        $ind = new industry();
        $list = $ind->get_industry();
        $this->view->hyList = $list;
        $list = $area->getAreaByParentId(0);
        $this->getView()->provinceList = $list;
        unset($list);


        $companyInfo = $company->getCompanyDetailByFuId2($frountid);
        //var_dump($companyInfo);
        $this->view->companydetail=$companyInfo;
        //echo "<pre>";
        // print_r($companyInfo);


        $areainfo = $area->getInfoById($userinfo['areaId']);
        //var_dump($areainfo);
        $cityinfo = $area->getInfoById($areainfo['p_id']);
        $provinfo = $area->getInfoById($cityinfo['p_id']);
        //var_dump($areainfo);
        $this->view->areainfo = $areainfo;
        $this->view->cityinfo = $cityinfo;
        $this->view->provinfo = $provinfo;

        $userinfo = $this->getData("userinfo");
        $this->view->companyinfo = $userinfo;
        echo $this->view->render("modifycominfo.htm");
    }

    /**
     * 修改密码
     */
    public function changepw(){
        $userinfo = $this->getData("userinfo");	//登录信息
        // var_dump($userinfo);
        $fuser = new frontuser();
        if($_POST){
            // echo $_POST['old'];
            if($_POST['old'] && $_POST['new'] && $_POST['renew']){
                if($_POST['new'] != $_POST['renew']) $result = $this->_lang->liangcimimabuyizhi;
                else{
                    $userinfo = $fuser->getUserFromAccount($userinfo['id'],true);
                    // var_dump($userinfo);
                    $result = $fuser -> changePw( $userinfo['id'], $_POST['old'], $_POST['new'] ); //修改密码
                    // var_dump($result);
                    $reCode = $result['result'];
                    if( $reCode == 1){

                        $this->setcookie("cookie_Uid",$userinfo['id'])
                            ->setcookie("cookie_shell",$fuser->getUserShell($userinfo['id'],$userinfo['name'],$result['newPw']) );
                        $result = $this->_lang->xiugaichenggong;
                    }else if( $reCode == -1 ){
                        $result = $this->_lang->mimashurucuowu;
                    }else{
                        $result = $this->_lang->xiugaishibai;
                    }
                }
            }else{
                $result = $this->_lang->xinxishurubuwanzheng;
            }
        }else{
            $result="";
        }

        $this->view->comdetail = $fuser->getUserFromAccount($userinfo['id'],true);
        $this->view->result=$result;
        echo $this->view->render("changepw.htm");

    }

    // 我的消息
    public function Message(){
        $userinfo = $this->getData("userinfo");
        // echo $userinfo['id'];
        $type = $this->getRequest()->get("all") ? $this->getRequest()->get("all") : 0;
        $page = $this->getRequest()->get('page') ? $this->getRequest()->get("page") : 1;
        $pageNum = 10;
        $mes = new message();
        $mesList = $mes->getComMesByFuId($userinfo['id'], $type, $page, $pageNum);
        $this->view->mes = $mesList;
        $this->view->page = $page;
        $this->view->type = $type;

        echo $this->view->render("message.htm");
    }
    /**
     * 预定招聘会
     */
    public function Pubjobfairinfo(){
        $userinfo = $this->getData("userinfo");
        //print_r($userinfo);
        //用户的等级
        $degree = $userinfo['degree'];

        $drTable = $this->getData("drTable");//这个值是在appFilter。php中set的，不了解可以去哪看一下
        //print_r($drTable);
        if($degree < $drTable[ "reserveJobfair" ]["limit"] ){
            $this->_error("您还不能自助预定招聘会【原因：等级不够！】");
            exit();

        }
        $jobfair = new jobfairmsg();
        //var_dump($_POST);
        if ($_POST){
            //var_dump($_POST);
            if ($_POST['jobfairtitle'] == ""){
                $this->view->result = $this->_lang->biaotibunengweikong;
            }else if ($_POST['county'] == ""){
                $this->view->result = $this->_lang->dizhibunengweikong;
            }else{
                if ($_POST['fileid']){
                    $addJobfair = $jobfair->addjobfairmsg($_POST['jobfairtitle'], NULL, NULL, NULL, NULL, NULL, $_POST['require'], $_POST['content'], $userinfo['id'], NULL, NULL,$_POST['fileid'],$_POST['filetitle'],$_POST['county'],$_POST['isopen']);
                    //var_dump($addJobfair);
                }else{
                    $addJobfair = $jobfair->addjobfairmsg($_POST['jobfairtitle'], NULL, NULL, NULL, NULL, NULL, $_POST['require'], $_POST['content'], $userinfo['id'], NULL, NULL,null,null,$_POST['county'],$_POST['isopen']);
                    //var_dump($addJobfair);
                }
                //var_dump($addJobfair);
                if ($addJobfair){
                    //$str = $this->gotoUrl("company", "getmyjobfair", 3, $this->_lang->tianjiachenggong);
                    $this->view->result = $this->_lang->tianjiachenggong;
                }else{
                    $this->view->result = $this->_lang->tianjiashibai;
                }
            }
        }
        $this->view->company = $userinfo;
        echo $this->view->render("pubjobfairinfo.htm");
    }

    /**
     * 发布招聘信息
     */
    public function Pubcorpmsg(){

        $userinfo = $this->getData("userinfo");
        //print_r($userinfo);
        //用户的等级
        $degree = $userinfo['degree'];
        //判断是否级别足够
        $drTable = $this->getData("drTable");//这个值是在appFilter。php中set的，不了解可以去哪看一下
        if($degree < $drTable[ "publishRecruit" ]["limit"] ){
            $this->_error("您还不能发布招聘信息【原因：等级不够！】");
            exit();
        }


        $corpmsg = new corpinternmsg();
        //$degreeresource = new degreeresource();
        //var_dump($userinfo);
        if ($_POST){
            //var_dump($_POST);
            if ($_POST['jobfairtitle'] == ""){
                $this->view->result = $this->_lang->biaotibunengweikong;
            }else if ($_POST['prov'] == 0){
                $this->view->result = $this->_lang->shengfenbunengweikong;
            }else if($_POST['jobfairtype'] == "" || $_POST['jobfairtype'] == 0){
                $this->view->result = $this->_lang->zhaopinxinxileixingbunengweikong;
            }else if($_POST['officename'] == null || $_POST['officejobtype'] == null || $_POST['officecontent'] == null){
                $this->view->result = $this->_lang->zhiweixinxibunengweikong;
            }else{

                if($degree < $drTable[ "recruitAuditFree" ]["limit"]){
                    $veri = 0;
                }else{
                    $veri = 1;
                }
                $addcorpmsg = $corpmsg->addmsg($_POST['jobfairtitle'], $_POST['jobfairtype'], $userinfo['corptype'], $_POST['prov'], null, null,$userinfo['phone'], $userinfo['comEmail'], $userinfo['fax'], $userinfo['website'], $userinfo['id'], null, $_POST['content'],0, 0,$_POST['filetitle'],$_POST['fileid'],$userinfo['id'],$veri,$_POST['isopen']);
                if($addcorpmsg){
                    $officenamelist = $_POST['officenamelist'];
                    $officetypelist = $_POST['officejobtype'];
                    $officereqlist = $_POST['officecontent'];
                    for($i = 0;$i<count($officenamelist);$i++){
                        $officename = $officenamelist[$i];
                        $officetype = $officetypelist[$i];
                        $officereq = $officereqlist[$i];
                        $addoffice = $corpmsg->insertoffice($officename, $officereq,$officetype,$addcorpmsg);
                    }
                    $this->view->result = $this->_lang->tianjiachenggong;
                }else{
                    $this->view->result = $this->_lang->tianjiashibai;
                }
            }
        }
        $this->view->company = $userinfo;
        $this->view->righttype = 2;

        echo $this->view->render("pubcorpmsg.htm");
    }

    //我的消息标注为已读
    public function Operatemessage(){
        $do = $this->getRequest()->get("do");
        $id = $this->getRequest()->get("id");
        $message = new message();
        if ($do == "del"){
            $delmes = array();
            $delmes = explode(",", $id);
            for ($i = 0; $i < count($delmes); $i++){
                $isDel = $message->delMes($delmes[$i]);
            }
            if ($isDel){
                $this->view->setState("1");
                $this->view->setMsg("success");
            }else{
                $this->view->setState("0");
                $this->view->setMsg("failed");
            }
        }else if ($do == "setread"){
            $isSet = $message->setRead($id);
            if ($isSet){
                $this->view->setState("1");
                $this->view->setMsg("success");
            }else{
                $this->view->setState("0");
                $this->view->setMsg("failed");
            }
        }else {
            $this->view->setState("0");
            $this->view->setMsg("no action");
        }
        $this->view->display("json");
    }

    protected function _error($info){
        $this->view->errorInfo = $info;
        echo $this->view->render("error.htm");
        exit();
    }


    /**
     * 获取学生信息
     */
    public function Getallstudentinfo(){


        $userinfo = $this->getData("userinfo");
        $degree = $userinfo['degree'];
        //判断是否级别足够
        $drTable = $this->getData("drTable");//这个值是在appFilter。php中set的，不了解可以去那看一下
        if($degree < $drTable[ "allStudentinfo" ]["limit"] ){
            //$this->gotoUrl("company","index",3,"您还不能查看所有学生的信息【原因：等级不够！】");
            $this->view->setState("0");
            $this->view->setMsg("等级不够！");
            $this->view->display("json");
            exit();
        }


        $type = $this->getRequest()->get("type") ? $this->getRequest()->get("type") : 0;
        $college = $this->getRequest()->get("college") ? $this->getRequest()->get("college") : 0;
        if ($college == "null"){
            $college = 0;
        }
        $grade = $this->getRequest()->get("grade") ? $this->getRequest()->get("grade") : 0;
        //echo $grade;
        $studegree = $this->getRequest()->get("degree");
        if ($studegree == ""){
            $studegree = 3;
        }
        //echo $degree;
        $pro = $this->getRequest()->get("major") ? $this->getRequest()->get("major") : 0;
        if ($pro == "null"){
            $pro = 0;
        }
        $page = $this->getRequest()->get("page") ? $this->getRequest()->get("page") : 1;
        $pageNum = 10;
        $stu = new student();
        $stuList = $stu->getAllStudentInfo($type, $college, $grade, $studegree, $pro, $page, $pageNum);

        if ($stuList){
            if ($type == 0){
                if ($stuList['list']){
                    $this->view->setState("1");
                    $this->view->setData($stuList);
                    $this->view->setMsg("success");
                }else{
                    $this->view->setState("0");
                    $this->view->setMsg("暂无记录!");
                }
            }else if ($type == 1){

                $proArr = $stu->getAllStudentInfo($type, $college, $grade, $studegree, $pro, $page, $pageNum);
                $this->view->setState("1");
                $this->view->setData($proArr);
                $this->view->setMsg("success");
            }else if($type == 2){

                $gradeArr = $stu->getAllStudentInfo($type, $college, $grade, $studegree, $pro, $page, $pageNum);
                $this->view->setState("1");
                $this->view->setData($gradeArr);
                $this->view->setMsg("success");
            }else if ($type == 3){
                $collegeArr = $stu->getAllStudentInfo($type, $college, $grade, $studegree, $pro, $page, $pageNum);

                $this->view->setState("1");
                $this->view->setData($collegeArr);
                $this->view->setMsg("success");
            }else{
                $degreeArr = $stu->getAllStudentInfo($type, $college, $grade, $studegree, $pro, $page, $pageNum);
                if ($degreeArr){
                    for($i = 0; $i < count($degreeArr); $i++){
                        if ($degreeArr[$i]['stu_education'] == 0){
                            $degreeArr[$i]['education'] = "本科";
                        }else if($degreeArr[$i]['stu_education'] == 1){
                            $degreeArr[$i]['education'] = "研究生";
                        }else{
                            $degreeArr[$i]['education'] = "博士";
                        }
                    }
                }
                $this->view->setState("1");
                $this->view->setData($degreeArr);
                $this->view->setMsg("success");
            }
        }else{
            $this->view->setState("0");
            $this->view->setMsg("failed");
        }
        $this->view->display("json");

    }

}
