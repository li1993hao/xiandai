<?php
class AccountController extends Controller {
	public function __construct() {
		parent::__construct ();
		$this->view->web_host = $this->getRequest ()->hostUrl;
		$this->view->web_app_url = $this->getRequest ()->hostUrl . "/index.php";
        $this->view->images_app_url = $this->getRequest ()->hostUrl . "/common/upload/images/";
        $this->view->files_app_url = $this->getRequest ()->hostUrl . "/common/upload/files/";
	}
	
	/**
	 * 登录
	 */
	public function Login() {

		$username = $this->getRequest ()->get ( "userName" );
		$password = $this->getRequest ()->get ( "password" );
		$osType = $this->getRequest ()->get ( "platform" ); // 2-代表Android,3-代iOS
		$token = $this->getRequest ()->get ( "userToken" );
		$userType = $this->getRequest ()->get ( "userType" ); // 0学生 1 企业
		if ($username && $password && $osType  && ($userType == 0 || $userType == 1)) {

			$user = new frontuser ();
			$userinfo = $user->authUser ( $username, $password, 0 );

			if ($userinfo ["result"] > 0) {
                $data ["userID"] = $userinfo ["result"];
				$data ["userType"] = $userinfo ["userinfo"] ["type"] == 1 ? "1" : "0";
				$url = $this->getRequest ()->hostUrl;
				// 判断企业还是学生
				if ($data ["userType"]) {
					// 1-企业
                    //var_dump($userinfo);
					$com = new company ();
					$info = $com->getCompanyDetailByFuId2 ( $data ["userID"] );
					$data ['fu_name'] = $info ['com_name'];
                    $data["fu_number"]=$userinfo ["userinfo"]["email"];
				} else {
					// 0-学生
                    //var_dump($userinfo);
					$student = new student ();
					$info = $student->getstudetail ( $data ["userID"] );
					$data ['fu_name'] = $info ['stu_name'];
                    $data["fu_number"]=$userinfo ["userinfo"]["code"];
				}
				// echo 2;
				$data ["pic"] = $info ["pic_link"] == null ? "" : "$url/common/upload/images/" . $info ["pic_link"];
				//$session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
				//$session->set ( "session_userid", $userinfo ["result"] );
				$user->setPhoneInfo ( $userinfo ["result"], $osType, $token == "null" ? "" : $token );
				// echo 3;
				// var_dump($session->get("session_id"));
				// $userdata=$user->getUserFromAccount($session->get("session_id"),true);
				// $this->getApp()->putData('userinfo', $userdata );
				// $userinfo = $this->getData ( 'userinfo' );
				// $userId = $userinfo ['id'];
				// var_dump($userId);

				//$this->view->setState ( "1" );
				$this->view->setAppStatus ( "1" );
				$this->view->setAppMsg ( "登录成功!" );
				$this->view->setAppData ( $data );
				$this->view->appdisplay ( "json" );
			} else {
				//$this->view->setState ( "0" );
				$this->view->setAppStatus ( "0" );
				$this->view->setAppData ( ( object ) null );
				$this->view->setAppMsg ( $userinfo ['msg'] );
				$this->view->appdisplay ( "json" );
			}
		} else {
			//$this->view->setState ( "0" );
			$this->view->setAppMsg ( "参数缺失!" );
			$this->view->setAppStatus ( "0" );
			$this->view->setAppData ( ( object ) null );
			$this->view->appdisplay ( "json" );
		}
	}

//	/**
//	 * 注销
//	 */
//	public function Logout() {
//		$session = $this->getApp ()->loadUtilClass ( "SessionUtil" );
//		$session->clear ();
//		$this->view->setAppMsg ( "注销成功!" );
//		$this->view->setState ( "1" );
//		$this->view->setAppStatus ( "0" );
//		$this->view->setAppData ( ( object ) null );
//		$this->view->appdisplay ( "json" );
//	}
    /** 登陆APP */
    public function Applogin(){

        $username = $this->getRequest ()->get ( "username" );
        $password = $this->getRequest ()->get ( "password" );
        $usertype = $this->getRequest ()->get ( "usertype" ); // 0学生 1 企业
        $user=new frontuser();
        $fu_arr=$user->getappuserinfo($username);
        if($fu_arr){
            $salt=$fu_arr[fu_salt];
            $userinfo=$user->AppAuthUser($username,$password,$usertype,$salt);
            if($userinfo){
                $data["fu_number"]=$userinfo["fu_number"];
                $data["fu_name"]=$userinfo["fu_name"];
                $this->view->setAppStatus ( "1" );
                $this->view->setAppMsg ( "登录成功!" );
                $this->view->setAppData ( $data );
            }else{
                $this->view->setAppStatus ( "0" );
                $this->view->setAppMsg ( "用户名/密码错误!" );
            }
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "无此用户！" );
        }

        $this->view->appdisplay ( "json" );
    }
    /** 获取招聘信息 */
    public function Zpinfo(){
        $state=1;
        $rit_id=1;
        $num = $this->getRequest ()->get ( "num" );
        $msg = new corpinternmsg();
        $collect=new collect();
        $zp_info=$msg->getappfrontmsg($num,$state,$rit_id);
        if($zp_info){
            for($i=0;$i<count($zp_info);$i++){
                $data[$i]["cim_id"]=$zp_info[$i]["cim_id"];
                $data[$i]["cim_name"]=$zp_info[$i]["cim_name"];
                $data[$i]["cim_date"]=$zp_info[$i]["cim_date"];
                $data[$i]["cim_content"]=substr(strip_tags($zp_info[$i]["cim_content"]), 0, 300);
                $data[$i]["cim_good"]=$zp_info[$i]["cim_good"];
                /**判断是否为置顶信息**/
                if($zp_info[$i]["cim_isup"]){
                    $data[$i]["is_up"]=1;
                }else{
                    $data[$i]["is_up"]=0;
                }
                /** 得到信息收藏的数目 */
               // $count_num=$collect->getAppCollectNum($zp_info[$i]["cim_id"],1);
                $data[$i]["cim_read"]=$zp_info[$i]["cim_read"];
            }

            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询招聘信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无招聘信息" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 获取实习信息 */
    public function Sxinfo(){
        $state=1;
        $rit_id=2;
        $num = $this->getRequest ()->get ( "num" );
        $msg = new corpinternmsg();
        $collect=new collect();
        $zp_info=$msg->getappfrontmsg($num,$state,$rit_id);
        if($zp_info){
            for($i=0;$i<count($zp_info);$i++){
                $data[$i]["cim_id"]=$zp_info[$i]["cim_id"];
                $data[$i]["cim_name"]=$zp_info[$i]["cim_name"];
                $data[$i]["cim_date"]=$zp_info[$i]["cim_date"];
                $data[$i]["cim_content"]=substr(strip_tags($zp_info[$i]["cim_content"]), 0, 300);
                $data[$i]["cim_good"]=$zp_info[$i]["cim_good"];
                /**判断是否为置顶信息**/
                if($zp_info[$i]["cim_isup"]){
                    $data[$i]["is_up"]=1;
                }else{
                    $data[$i]["is_up"]=0;
                }
                /** 得到信息收藏的数目 */
               // $count_num=$collect->getAppCollectNum($zp_info[$i]["cim_id"],2);
                $data[$i]["cim_read"]=$zp_info[$i]["cim_read"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询招聘信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无招聘信息" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 获取招聘会信息 */
    public function Zphinfo(){
        $state=1;
        $num = $this->getRequest ()->get ( "num" );
        $jobfair=new jobfairmsg();
        $collect=new collect();
        $zph_info=$jobfair->getappzphinfo($num,$state);
        if($zph_info){
            for($i=0;$i<count($zph_info);$i++){
                $data[$i]["jm_id"]=$zph_info[$i]["jm_id"];
                $data[$i]["jm_name"]=$zph_info[$i]["jm_name"];
                $data[$i]["jm_opentime"]=$zph_info[$i]["jm_opentime"];
                $data[$i]["jm_addr"]=$zph_info[$i]["jm_addr"];
                /**获取图片路径**/
                if($zph_info[$i]["pic_link"]!=null){
                    $data[$i]["pic_link"]=$this->view->images_app_url.$zph_info[$i]["pic_link"];
                }else{
                    $data[$i]["pic_link"]=$zph_info[$i]["pic_link"];
                }

                $data[$i]["jm_good"]=$zph_info[$i]["jm_good"];
                /**判断是否为置顶信息**/
                if($zph_info[$i]["jm_isup"]){
                    $data[$i]["is_up"]=1;
                }else{
                    $data[$i]["is_up"]=0;
                }
                /** 得到信息收藏的数目 */
               // $count_num=$collect->getAppCollectNum($zph_info[$i]["jm_id"],0);
                $data[$i]["jm_read"]=$zph_info[$i]["jm_read"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询招聘信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无招聘信息" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 点赞 */
    public function  Do_good(){
        /** userId  游客为0   */
        $userId=$this->getRequest ()->get ( "userId" );
        $msg_id = $this->getRequest ()->get ( "msg_id" );
        $type=$this->getRequest ()->get ( "type" );
        $collect=new collect();
        if($userId==0){
            $if_sucess=$collect->do_app_good($userId,$msg_id,$type);

            if($if_sucess){
                $this->view->setAppStatus ( "1" );
                $this->view->setAppMsg ( "点赞成功" );
            }else{
                $this->view->setAppStatus ( "0" );
                $this->view->setAppMsg ( "点赞失败" );
            }
        }else{
//            判断是否存在点赞

            if($collect->getifgood($userId,$msg_id,$type)){

                $this->view->setAppStatus ( "0" );
                $this->view->setAppMsg ( "不能重复点赞" );
            }else{
                $if_sucess=$collect->do_app_good($userId,$msg_id,$type);
                if($if_sucess){
                    $this->view->setAppStatus ( "1" );
                    $this->view->setAppMsg ( "点赞成功" );
                }else{
                    $this->view->setAppStatus ( "0" );
                    $this->view->setAppMsg ( "点赞失败" );
                }
            }
        }

        $this->view->appdisplay ( "json" );
    }
    /**
        * 获取单个招聘,实习,招聘会,就业政策 详细信息
    */
    public function Zponeinfo(){
        /** userId  游客为0   */
        $userId=$this->getRequest ()->get ( "userId" );
        $cim_id = $this->getRequest ()->get ( "cim_id" );
        $type = $this->getRequest ()->get ( "type" );
        /** 查询单条招聘信息 */
        $msg = new corpinternmsg();
        $zp_content=$msg->getappzpcon
        tent($userId,$cim_id,$type);

        $file_link=$this->view->files_app_url.$zp_content[file_link];
        if($zp_content[file_name]){
            echo "

        <html>
        <head>
        <style type='text/css' >
        *{
            margin: 0;
            padding: 0;
            font-family: 'Hiragino Sans GB', 'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', sans-serif;
        }

        </style>
        </head>
        <body style='background-image: url(http://localhost/xiandai/common/upload/images/bg.jpg);width: 98%;height: 100%;'>
        <div style='width: 98%;height: 100%;'>
            <div style='text-align: center;padding-top: 15px;font-size: 24px'>$zp_content[title]  </div>
            <div style='text-align: center;margin-top: 10px;font-size: 8px'><span style='text-decoration:none'>发布时间：$zp_content[fb_date]</span><span style='margin-left: 40px;text-decoration:none'>浏览量：$zp_content[read_num]</span></div>
            <div style='width: 100%' >
                <div style='line-height:31px;margin: 0 auto;width:98%;margin-left: 15px;font-size: 16px;margin-top: 18px'>
                    $zp_content[content]
                </div>
                <div style='margin-top: 150px;margin-left: 15px'>
                    <span>相关附件：</span><span style='margin-left: 10px;'><a href='$file_link' style='color: red;text-decoration: none'>$zp_content[file_name]</a></span>
                </div>
            </div>

        </div>
        </body>
        </html>
        ";
        }else{
            echo "

        <html>
        <head>
        <style type='text/css' >
        *{
            margin: 0;
            padding: 0;
            font-family: 'Hiragino Sans GB', 'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', sans-serif;
        }

        </style>
        </head>
        <body style='background-image: url(http://localhost/xiandai/common/upload/images/bg.jpg);width: 98%;height: 100%;'>
        <div style='width: 98%;height: 100%;'>
            <div style='text-align: center;padding-top: 15px;font-size: 24px'>$zp_content[title]  </div>
            <div style='text-align: center;margin-top: 10px;font-size: 8px'><span style='text-decoration:none'>发布时间：$zp_content[fb_date]</span><span style='margin-left: 40px;text-decoration:none'>浏览量：$zp_content[read_num]</span></div>
            <div style='width: 100%' >
                <div style='line-height:31px;margin: 0 auto;width:98%;margin-left: 15px;font-size: 16px;margin-top: 18px'>
                    $zp_content[content]
                </div>
                <div style='margin-top: 150px;margin-left: 15px'>
                    <span>相关附件：</span><span style='margin-left: 10px;'>暂无附件！</span>
                </div>
            </div>

        </div>
        </body>
        </html>
        ";
        }

    }
    /** 就业政策列表 employmentpolicy*/
    public function Epinfo(){
        $num = $this->getRequest ()->get ( "num" );
        $ep=new employmentpolicy();
        $ep_info=$ep->getappepinfo($num);
        if($ep_info){
            for($i=0;$i<count($ep_info);$i++){
                $data[$i]["ep_id"]=$ep_info[$i]["ep_id"];
                $data[$i]["ep_title"]=$ep_info[$i]["ep_title"];
                $data[$i]["ep_create"]=$ep_info[$i]["ep_create"];
                $data[$i]["ep_content"]=substr(strip_tags($ep_info[$i]["ep_content"]), 0, 300);
                $data[$i]["ep_browse"]=$ep_info[$i]["ep_browse"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询就业政策信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无就业政策信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 就业,创业,职业生涯规划,通知公告 指导列表 jobinfo */
    public function Jobinfo(){
        $type = $this->getRequest ()->get ( "type" );
        $num = $this->getRequest ()->get ( "num" );
        $jobinfo=new jobinfo();
        $info_arr=$jobinfo->getappjobinfolist($num, $type);
        if($info_arr){
            for($i=0;$i<count($info_arr);$i++){
                $data[$i]["ji_id"]=$info_arr[$i]["ji_id"];
                $data[$i]["ji_title"]=$info_arr[$i]["ji_title"];
                $data[$i]["ji_create"]=$info_arr[$i]["ji_date"];
                $data[$i]["ji_content"]=substr(strip_tags($info_arr[$i]["ji_content"]), 0, 300);
                /**判断是否为置顶信息**/
                if($info_arr[$i]["ji_isup"]){
                    $data[$i]["is_up"]=1;
                }else{
                    $data[$i]["is_up"]=0;
                }
                /**获取图片路径**/
                if($info_arr[$i]["pic_link"]!=null){
                    $data[$i]["pic_link"]=$this->view->images_app_url.$info_arr[$i]["pic_link"];
                }else{
                    $data[$i]["pic_link"]=$info_arr[$i]["pic_link"];
                }
                $data[$i]["ji_good"]=$info_arr[$i]["ji_good"];
                $data[$i]["ji_read"]=$info_arr[$i]["ji_read"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 获取院校介绍列表信息 */
    public function Collegeinfo(){
        $num=$this->getRequest()->get("num");
        $col_intro=new collegeintroduction();
        $info_arr=$col_intro->getappcolledgeinfolist($num);

        if($info_arr){
            for($i=0;$i<count($info_arr);$i++){
                $data[$i]["cci_id"]=$info_arr[$i]["cci_id"];
                $data[$i]["cci_title"]=$info_arr[$i]["cci_title"];
                $data[$i]["cci_time"]=$info_arr[$i]["cci_time"];
            }
             $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 获取生源信息列表 */
    public function Sourceinfo(){
        $num=$this->getRequest()->get("num");
        $sour_infor = new sourceinformation();
        $info_arr=$sour_infor->getappsourinfolist($num);

        if($info_arr){
            for($i=0;$i<count($info_arr);$i++){
                $data[$i]["si_id"]=$info_arr[$i]["si_id"];
                $data[$i]["si_title"]=$info_arr[$i]["si_title"];
                $data[$i]["si_time"]=$info_arr[$i]["si_time"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 收藏信息  如果已收藏则提醒！并推送消息给企业用户！type   0-表示招聘会信息，1-表示招聘，2-实习  */
    public function Collectinfo(){
        $fu_num=$this->getRequest()->get("fu_num");
        $info_id=$this->getRequest()->get("info_id");
        $type=$this->getRequest()->get("type");
        $if_scan=$this->getRequest()->get("open_num");
        $frontuser=new frontuser();
        $collect=new collect();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        $fu_name=$fu_arr[fu_name];
        /** 验证是否已经被收藏过！ */
        $if_col=$collect->valid_if_col($fu_id,$info_id,$type);
        if($if_col){
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "已收藏过该条信息！" );
        }else{
            $time=date('Y-m-d H:i:s',time());
            $if_suc=$collect->sub_col_info($fu_id,$info_id,$type,$if_scan,$time);
            if($if_suc){
                /** 推送测试 */
                if($if_scan==1){
                    $company_arr=$collect->getAppCompanyNum($info_id,$type);
                    $company_id=$company_arr["fu_id"];
                    //var_dump($fu_name);
                    $platform = 'android,ios'; // 接受此信息的系统
                    $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>"$fu_name.'收藏了您的信息，并对您公布了TA的信息'",'n_extras'=>array('type'=>1)));
                    //var_dump($msg_content);
                    $j=new jpush();
                    $j->send(18,3,$company_id,1,$msg_content,$platform);
                    //$j->send(18,4,"",1,$msg_content,$platform);
                }
                $this->view->setAppStatus ( "1" );
                $this->view->setAppMsg ( "收藏成功！" );
            }else{
                $this->view->setAppStatus ( "0" );
                $this->view->setAppMsg ( "收藏失败！" );
            }
        }

        $this->view->appdisplay ( "json" );
    }
    /** 查看学生收藏的信息 */
    public function Show_stu_collect(){
        $num=$this->getRequest()->get("num");
        $fu_num=$this->getRequest()->get("fu_num");
        $coll_type=$this->getRequest()->get("type");
        $frontuser=new frontuser();
        $collect=new collect();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        $info_arr=$collect->getappcolinfo($fu_id,$coll_type,$num);
        if($info_arr){
            for($i=0;$i<count($info_arr);$i++){
                $data[$i]["coll_id"]=$info_arr[$i]["coll_id"];
                $data[$i]["cim_name"]=$info_arr[$i]["cim_name"];
                $data[$i]["coll_time"]=$info_arr[$i]["coll_time"];
                $data[$i]["cim_id"]=$info_arr[$i]["coll_info_id"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );

    }
    /** 企业招聘信息查询（0-未审核，1-审核通过，2-未通过审核） */
    public function Fetchqymsg(){
        $num=$this->getRequest()->get("num");
        $fu_num=$this->getRequest()->get("fu_num");
        $state=$this->getRequest()->get("state");
        $frontuser=new frontuser();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        $cor_msg=new corpinternmsg();
        $msg_lists=$cor_msg->getappmsg($fu_id,$state);

        foreach($msg_lists as $v){
            $t[]=$v['cim_date'];
        }
        array_multisort($t,SORT_DESC,$msg_lists);
        array_slice($msg_lists,$num,10);
        if($msg_lists){

            for($i=0;$i<count($msg_lists);$i++){
                $msg_lists[$i]["cim_content"]=substr(strip_tags($msg_lists[$i]["cim_content"]), 0, 300);
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $msg_lists );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 查看学生个人信息 */
    public function Stu_info(){
        $type=$this->getRequest()->get("type");
        if($type==1){
            $fu_id=$this->getRequest()->get("fu_num");
        }else{
            $fu_num=$this->getRequest()->get("fu_num");
            $frontuser=new frontuser();
            $fu_arr=$frontuser->getappuserinfo($fu_num);
            $fu_id=$fu_arr[fu_id];
        }
        $student=new student();
        $stu_info=$student->getappstudetail($fu_id);

        if($stu_info){
            if($stu_info[pic_link]!=null){
                $data[pic_link]=$this->view->images_app_url.$stu_info[pic_link];
            }else{
                $data[pic_link]=$stu_info[pic_link];
            }
            $data[stu_name]=$stu_info[stu_name];
            $data[stu_gender]=$stu_info[stu_gender];
            $data[stu_birth]=$stu_info[stu_birth];
            $data[stu_college]=$stu_info[stu_college];
            $data[stu_pro]=$stu_info[stu_pro];
            $data[stu_education]=$stu_info[stu_education];
            $data[stu_grade]=$stu_info[stu_grade];
            $data[stu_source]=$stu_info[stu_source];
            $data[stu_home]=$stu_info[stu_home];
            $data[stu_politic]=$stu_info[stu_politic];
            $data[ind_name]=$stu_info[ind_name];
            $data[stu_intro]=$stu_info[stu_intro];
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询用户信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "无此用户信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 查询企业详细信息 */
    public function Company_info(){
        $fu_num=$this->getRequest()->get("fu_num");
        $frontuser=new frontuser();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        $company=new company();
        $company_info=$company->getAppCompanyDetailByFuId($fu_id);
        //var_dump($company_info);
        if($company_info){
            if($company_info[pic_link]!=null){
                $data[pic_link]=$this->view->images_app_url.$company_info[pic_link];
            }else{
                $data[pic_link]="";
            }

            $data[com_name]=$company_info[com_name];
            $data[da_degree]=$company_info[da_degree];
            $data[ind_type]=$company_info[ind_type];
            $data[com_contact]=$company_info[com_contact];
            $data[com_phone]=$company_info[com_phone];
            $data[com_post]=$company_info[com_post];
            $data[com_email]=$company_info[com_email];
            $data[com_phone]=$company_info[com_phone];
            $data[area_name]=$company_info[area_name];
            $data[com_address]=$company_info[com_address];
            /**资质证明获得**/
            $zz_arr=$frontuser->getappzzzm($fu_id);
            for($i=0;$i<count($zz_arr);$i++){
                $data["zz_pic"][]=$this->view->images_app_url.$zz_arr[$i]["pic_link"];
            }
            /** 结束 */
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询公司信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "无此公司信息！" );
        }
        $this->view->appdisplay ( "json" );
    }

     /** 招聘指南管理，中心简介管理 */
     public function Zpzm(){
        $ci_type=$this->getRequest()->get("ci_type");
        $ci_introduction=new centerintroduction();
        $ci_info=$ci_introduction->getappcenter($ci_type);

         echo "

<html>
<head>
    <style type='text/css' >
        *{
            margin: 0;
            padding: 0;
            font-family: 'Hiragino Sans GB', 'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', sans-serif;
        }

    </style>
</head>
<body style='background-image: url(http://localhost/xiandai/common/upload/images/bg.jpg);width: 98%;height: 100%;'>
<div style='width: 98%;height: 100%;'>
    <div style='text-align: center;padding-top: 15px;font-size: 24px'>现代职业技术学院招聘指南  </div>
    <div style='text-align: center;margin-top: 10px;font-size: 8px'><span style='text-decoration:none'>修改时间：$ci_info[ci_modify]</span><span style='margin-left: 40px;text-decoration:none'>浏览次数：$ci_info[ci_browse]</span><span style='margin-left: 40px;text-decoration:none'>分享次数：$ci_info[ci_share]</span></div>
    <div style='width: 100%' >
        <div style='line-height:31px;margin: 0 auto;width:98%;margin-left: 15px;font-size: 16px;margin-top: 18px'>
            $ci_info[ci_content]
        </div>

    </div>
</body>
</html>
        ";

     }
     /** 用户反馈提交  安卓提交2 ios提交3 */
    public function Feedback(){
        $fb_ui=$this->getRequest()->get("fb_ui");
        $fb_info=$this->getRequest()->get("fb_info");
        $fb_fun=$this->getRequest()->get("fb_fun");
        $fb_title=$this->getRequest()->get("fb_title");
        $fb_content=$this->getRequest()->get("fb_content");
        $fb_platform=$this->getRequest()->get("fb_platform");
        $fb_time=date('Y-m-d H:i:s',time());
        $fb_version_num=$this->getRequest()->get("fb_version_num");
        $feedback=new feedback();
        $num=$feedback->addappfeedback($fb_platform,$fb_title,$fb_content,$fb_ui,$fb_info,$fb_fun,$fb_time,$fb_version_num);
        if($num==1){
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "反馈信息提交成功！" );
        }elseif($num==-1){
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "含有非法字符！" );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "提交反馈信息失败！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 感兴趣的学生 */
    public function Favstudentlist(){
        $fu_num=$this->getRequest()->get("fu_num");
        $num=$this->getRequest()->get("num");
        $frontuser=new frontuser();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        //var_dump($fu_id);
        $collect=new collect();
        $fav_students=$collect->getappfavstudentlist($fu_id,$num);
        if($fav_students){
            for($i=0;$i<count($fav_students);$i++){
            $data[$i][fu_id]=$fav_students[$i][fu_id];
            $data[$i][stu_id]=$fav_students[$i][stu_id];
            $data[$i][stu_name]=$fav_students[$i][stu_name];
            $data[$i][stu_gender]=$fav_students[$i][stu_gender];
            $data[$i][stu_birth]=$fav_students[$i][stu_birth];
            $data[$i][stu_college]=$fav_students[$i][stu_college];
            $data[$i][stu_pro]=$fav_students[$i][stu_pro];
            $data[$i][stu_education]=$fav_students[$i][stu_education];
            }
            /**资质证明**/
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 收藏删除 */
    public function Del_collect(){
        $collect_id=$this->getRequest()->get("collect_id");
        $type=$this->getRequest()->get("type");
        /** 0表示招聘会信息  1表示招聘 2 实习信息 */
        $fu_num=$this->getRequest()->get("fu_num");
        $frontuser=new frontuser();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        $collect=new collect();
        $if_suc=$collect->app_delete_collect($fu_id,$collect_id,$type);
        if($if_suc){
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "删除成功！" );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "删除失败！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /**热点按照点击量排行，按照点赞排行  0表示招聘会信息  1表示招聘 2 实习信息   最近一周的排行 */
    public function Hot_news(){
        $type_num=$this->getRequest()->get("type");
        $num=$this->getRequest()->get("num");
        $info_class=$this->getRequest()->get("class");
        $now_time=date('Y-m-d H:i:s',time());
        /**一星期前的时间*/
        $past_time=date('Y-m-d H:i:s',time()-3600*24*7);
        $msg=new corpinternmsg();
        /** 为0表示按照点击量排行 为1表示按照点赞排行 */
        if($info_class==0){
            $hot_news=$msg->gethotnews1($type_num,$num,$now_time,$past_time);

        }elseif($info_class==1){
            $hot_news=$msg->gethotnews2($type_num,$num,$now_time,$past_time);
        }
        for($i=0;$i<count($hot_news);$i++){
            $hot_news[$i]["info_content"]=substr(strip_tags($hot_news[$i]["info_content"]), 0, 300);
            $hot_news[$i]["info_content"]=str_replace("&nbsp;","",$hot_news[$i]["info_content"]);
        }


        if($hot_news){
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $hot_news );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 首页统计当天新信息数量  0表示招聘会信息  1表示招聘 2 实习信息   焦点图信息  */
    public function Count_num(){
        $start_time=date('Y-m-d',time());
        $end_time=date('Y-m-d',time()+3600*24*1);
        $msg=new corpinternmsg();
        $num_arr=$msg->getcountnum($start_time,$end_time);
        /** 将一维数组变成二维数组 */
        //var_dump($num_arr);
        /** 首页获取焦点图信息 */
        $jobinfo=new jobinfo();
        $rec_arr=$jobinfo->getAppRecNews();
        for($i=0;$i<count($rec_arr);$i++){
            if($rec_arr[$i]["pic_link"]!=null){
                $rec_arr[$i]["pic_link"]=$this->view->images_app_url.$rec_arr[$i]["pic_link"];
            }else{
                $rec_arr[$i]["pic_link"]=$rec_arr[$i]["pic_link"];
            }
        }
        //var_dump($rec_arr);
        $num_arr['news'] = $rec_arr;
        //var_dump($num_arr);
        if($num_arr){
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $num_arr );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "统计失败！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /**学生收藏信息提醒  */
    public function Collect_info(){
        $fu_num=$this->getRequest()->get("fu_num");
        $num=$this->getRequest()->get("num");
        $frontuser=new frontuser();
        $fu_arr=$frontuser->getappuserinfo($fu_num);
        $fu_id=$fu_arr[fu_id];
        //var_dump($fu_id);
        $collect=new collect();
        $stu_arr=$collect->getAppStuColl($fu_id,$num);
//        /** 推送测试 */
//        $platform = 'android,ios'; // 接受此信息的系统
//        $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>'消息提醒', 'n_content'=>'测试信息!','n_extras'=>array('ex'=>'这是附加的字段!')));
//        $j=new jpush();
//        $j->send(18,4,"",1,$msg_content,$platform);

        if($stu_arr){
            for($i=0;$i<count($stu_arr);$i++){
                $data[$i]["fu_id"]=$stu_arr[$i]["fu_id"];
                $data[$i]["stu_name"]=$stu_arr[$i]["stu_name"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 企业资质信息显示 */
    public function Qyzz_msg(){
        $userId=$this->getRequest()->get("userId");
        $num=$this->getRequest()->get("num");
        $message=new message();
        $msg_arr=$message->getAppCompanyMessageList($userId,$num);
        //var_dump($msg_arr);
        if($msg_arr){
            for($i=0;$i<count($msg_arr);$i++){
                if($msg_arr[$i]["flag"]==0){
                    $data[$i]["message"]="您的企业未通过审核";
                }else{
                    $data[$i]["message"]="您的企业通过审核";
                }
                $data[$i]["pub_time"]=$msg_arr[$i]["msgTime"];
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ( $data );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 招聘信息和招聘会信息审核 */
    public function Zp_msg(){
        $userId=$this->getRequest()->get("userId");
        $num=$this->getRequest()->get("num");
        $message=new message();
        $msg_arr=$message->getAppRecruitMessageList($userId, $num);
        if($msg_arr){
            for($i=0;$i<count($msg_arr);$i++){
                if($msg_arr[$i]["flag"]==0){
                    if($msg_arr[$i]["msgType"]==1){
                        $msg_arr[$i]["message"]=$msg_arr[$i]["title"]."(招聘信息）未通过审核";
                    }elseif($msg_arr[$i]["msgType"]==4){
                        $msg_arr[$i]["message"]=$msg_arr[$i]["title"]."(招聘会信息）未通过审核";
                    }
                }elseif($msg_arr[$i]["flag"]==1){
                    if($msg_arr[$i]["msgType"]==1){
                        $msg_arr[$i]["message"]="招聘信息".$msg_arr[$i]["title"]."通过审核";
                        $msg_arr[$i]["reason"]="";
                    }elseif($msg_arr[$i]["msgType"]==4){
                        $msg_arr[$i]["message"]="招聘会信息".$msg_arr[$i]["title"]."通过审核";
                        $msg_arr[$i]["reason"]="";
                    }
                }
            }
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "查询信息成功!" );
            $this->view->setAppData ($msg_arr );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "暂无信息！" );
        }
        $this->view->appdisplay ( "json" );
    }
    /** 统计登陆数 */
    public function Login_num(){
        $frontuser=new frontuser();
        if($frontuser->addloginnum()){
            $this->view->setAppStatus ( "1" );
            $this->view->setAppMsg ( "访问数添加成功" );
        }else{
            $this->view->setAppStatus ( "0" );
            $this->view->setAppMsg ( "访问数添加失败" );
        }
        $this->view->appdisplay ( "json" );
    }


}