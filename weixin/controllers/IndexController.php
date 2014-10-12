<?php
/**
*  Create On 2010-7-12
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
class IndexController extends Controller{
	public function __construct(){
		
		parent::__construct();
		//print_r($this->getRequest());
		//$this->view->web_url=$this->getRequest()->hostUrl;
		
		
	}
	public function Index(){
		define("TOKEN", "nkjob");//自己定义的token 就是个通信的私钥
		//$wechatObj = new nkjobwechatplatform();
		//$wechatObj->valid();
		$this->responseMsg();
	}
	
	
	public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }
    public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        if (!empty($postStr)){
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
	    	$form_MsgType = $postObj->MsgType;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[%s]]></MsgType>
            <Content><![CDATA[%s]]></Content>
            <FuncFlag>1<FuncFlag>
            </xml>";
            if($form_MsgType == "event") 
            {
            	
            	$form_Event = $postObj->Event;
            	if($form_Event == "subscribe"){
            		$return_str = "感谢您关注天津外国语大学就业就业指导中心，请输入数字查询相应信息\n\n";
            		//echo $return_str;
            		$return_arr = array("1.招聘信息\n","2.招聘会信息\n","3.实习信息\n","4.基层信息\n","5.活动预告\n","6.联系我们");
            		//var_dump($return_arr);
            		$return_str.= implode("", $return_arr);
            		$msgType = "text";
            		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $return_str);
            		echo $resultStr;
            		//var_dump($resultStr);
            		exit;
            	}
            }
            
            else if($form_MsgType == "text"){
            	
            	$form_Content = trim($postObj->Content);
            	
            	if($form_Content == "1"){
            		$corpmsg = new corpinternmsg();
            		$newsList = $corpmsg->getCorpPageModel(1,10,null,"pass");
            		//$url = $this->getRequest()->hostUrl;
            		$resultStr = "<xml>  
            			<ToUserName><![CDATA[".$fromUsername."]]></ToUserName> 
            			<FromUserName><![CDATA[".$toUsername."]]></FromUserName> 
            			<CreateTime>".time()."</CreateTime> 
            			<MsgType><![CDATA[news]]></MsgType> 
            			<ArticleCount>".count($newsList["list"])."</ArticleCount>
            			<Articles>";
            		
            		for ($i = 0; $i<count($newsList["list"]) ; $i++){
            			$resultStr.="<item>  
            					<Title><![CDATA[".$newsList["list"][$i]["cim_name"]."]]></Title>  
            					<Discription><![CDATA[]]></Discription>
            					<PicUrl><![CDATA[]]></PicUrl>
            					<Url><![CDATA[http://career.nankai.edu.cn/clientapi.php/student/getrecruinfodetail/id/".$newsList["list"][$i]["cim_id"]."]]></Url> 
            					</item>";
            		}
            		
         			$resultStr.="</Articles>  
         						
         						</xml>";
         			echo $resultStr;
         			exit;
            	}
            	
            	
            	
            	elseif($form_Content == "2"){
            		$jobmsg = new jobfairmsg();
            		$newsList = $jobmsg->getRecentCorpMsg(10);
            		//$url = $this->getRequest()->hostUrl;
            		
            		$resultStr = "<xml>  
            			<ToUserName><![CDATA[".$fromUsername."]]></ToUserName> 
            			<FromUserName><![CDATA[".$toUsername."]]></FromUserName> 
            			<CreateTime>".time()."</CreateTime> 
            			<MsgType><![CDATA[news]]></MsgType> 
            			<ArticleCount>".count($newsList)."</ArticleCount>
            			<Articles>";
            		for ($i = 0; $i<count($newsList) ; $i++){
            			$PicUrl = $newsList[$i]["pic_id"]=="" ? "" : "http://career.nankai.edu.cn/common/upload/".$newsList[$i]["pic_link"];
            			$resultStr.="<item>  
            					<Title><![CDATA[【".date("m-d H:i",strtotime($newsList[$i]["jm_opentime"]))."】".$newsList[$i]["jm_name"]."]]></Title>
            					<Description><![CDATA[".$newsList[$i]["jm_opentime"]."]]></Description>
            					<PicUrl><![CDATA[".$PicUrl."]]></PicUrl>
            					<Url><![CDATA[http://career.nankai.edu.cn/clientapi.php/student/getjobfairinfodetail/id/".$newsList[$i]["jm_id"]."]]></Url> 
            					</item>";
            		}
         			$resultStr.="</Articles>  
         						
         						</xml>";
         			echo $resultStr;
         			exit;
            	}
            	
            	elseif($form_Content == "3"){
            		$corpmsg = new corpinternmsg();
            		$newsList = $corpmsg->getInternPageModel(1,10,null,"pass");
            		//$url = $this->getRequest()->hostUrl;
            		$resultStr = "<xml>  
            			<ToUserName><![CDATA[".$fromUsername."]]></ToUserName> 
            			<FromUserName><![CDATA[".$toUsername."]]></FromUserName> 
            			<CreateTime>".time()."</CreateTime> 
            			<MsgType><![CDATA[news]]></MsgType> 
            			<ArticleCount>".count($newsList["list"])."</ArticleCount>
            			<Articles>";
            		
            		for ($i = 0; $i<count($newsList["list"]) ; $i++){
            			$resultStr.="<item>  
            					<Title><![CDATA[".$newsList["list"][$i]["cim_name"]."]]></Title>  
            					<Discription><![CDATA[]]></Discription>
            					<PicUrl><![CDATA[]]></PicUrl>
            					<Url><![CDATA[http://career.nankai.edu.cn/clientapi.php/student/getrecruinfodetail/id/".$newsList["list"][$i]["cim_id"]."]]></Url> 
            					</item>";
            		}
            		
         			$resultStr.="</Articles>  
         						
         						</xml>";
         			echo $resultStr;
         			exit;
            	}
            	
            	elseif($form_Content == "4"){
            		$corpmsg = new corpinternmsg();
            		$newsList = $corpmsg->getBasePageModel(1,10,null,"pass");
            		//$url = $this->getRequest()->hostUrl;
            		$resultStr = "<xml>  
            			<ToUserName><![CDATA[".$fromUsername."]]></ToUserName> 
            			<FromUserName><![CDATA[".$toUsername."]]></FromUserName> 
            			<CreateTime>".time()."</CreateTime> 
            			<MsgType><![CDATA[news]]></MsgType> 
            			<ArticleCount>".count($newsList["list"])."</ArticleCount>
            			<Articles>";
            		
            		for ($i = 0; $i<count($newsList["list"]) ; $i++){
            			$resultStr.="<item>  
            					<Title><![CDATA[".$newsList["list"][$i]["cim_title"]."]]></Title>  
            					<Discription><![CDATA[]]></Discription>
            					<PicUrl><![CDATA[]]></PicUrl>
            					<Url><![CDATA[http://career.nankai.edu.cn/clientapi.php/student/getbaseinfodetail/id/".$newsList["list"][$i]["cim_id"]."]]></Url> 
            					</item>";
            		}
            		
         			$resultStr.="</Articles>  
         						
         						</xml>";
         			echo $resultStr;
         			exit;
            	}
            	
            	elseif($form_Content == "5"){
            		$corpmsg = new jobinfo();
            		$newsList = $corpmsg->getActPageModel(1,10);
            		//$url = $this->getRequest()->hostUrl;
            		
            		$resultStr = "<xml>  
            			<ToUserName><![CDATA[".$fromUsername."]]></ToUserName> 
            			<FromUserName><![CDATA[".$toUsername."]]></FromUserName> 
            			<CreateTime>".time()."</CreateTime> 
            			<MsgType><![CDATA[news]]></MsgType> 
            			<ArticleCount>".count($newsList["list"])."</ArticleCount>
            			<Articles>";
            		for ($i = 0; $i<count($newsList["list"]) ; $i++){
            			$PicUrl = $newsList["list"][$i]["pic_id"]=="" ? "" : "http://career.nankai.edu.cn/common/upload/images/".$newsList["list"][$i]["pic_link"];
            			$resultStr.="<item>  
            					<Title><![CDATA[".$newsList["list"][$i]["ji_title"]."]]></Title>  
            					<Discription><![CDATA[]]></Discription>
            					<PicUrl><![CDATA[".$PicUrl."]]></PicUrl>
            					<Url><![CDATA[http://career.nankai.edu.cn/clientapi.php/student/getnoticeinfodetail/id/".$newsList["list"][$i]["ji_id"]."]]></Url> 
            					</item>";
            		}
         			$resultStr.="</Articles>  
         						
         						</xml>";
         			echo $resultStr;
         			exit;
            	}
            	
            	elseif($form_Content == "6"){
            		$msgType = "text";
            		$returnStr = array( "网址\n",
            							"http://career.nankai.edu.cn\n\n",
										"用人单位服务\n",
										"邮箱：nkuc@163.com\n",
										"电话：022-23509949      23500075\n",
										"传真：022-23500075\n\n",
										"就业政策咨询\n",
										"电话：022-23509721\n",
										"传真：022-23509721\n\n",
										"职业生涯辅导\n",
										"电话：022-23508992\n",
										"传真：022-23508992\n",
 			           		);
            		$contentStr.= implode("" , $returnStr);
            		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
            		echo $resultStr;
            	}
            	
            	
            	
            	
            	else
            	{
            		$return_str = "请输入数字查询相应信息\n\n";
            		$return_arr = array("1.招聘信息\n","2.招聘会信息\n","3.实习信息\n","4.基层信息\n","5.活动预告\n","6.联系我们");
            		$return_str.= implode("", $return_arr);
            		$msgType = "text";
            		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $return_str);
            		echo $resultStr;
            		exit;
            		}
            }
            
           
        }else {
            echo 'Data error!';
            exit;
        }
    }
 
    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token =TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
 
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }
    
   
}