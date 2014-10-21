<?php
/**
* Create On 2013-12-9 下午5:03:19
* Author: jiangyuchao
* E-mail: jiangyuchao@iwind-tech.com
*/

class PushController extends Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->view->url_path=$this->getRequest()->appPath;
		$this->view->web_url=$this->getRequest()->hostUrl;
	}
	
	public function Pushmobile(){
		//$pushTitle = $this->getRequest()->get('title');
		//$pushContent = $this->getRequest()->get('content');

//		if ($_POST){
//			if ($_POST['title'] == NULL){
//				$this->view->result = $this->_lang->tuisongbiaotibunengweikong;
//			}else if ($_POST['content'] == NULL) {
//				$this->view->result = $this->_lang->tuisongneirongbunengweikong;
//			}else {
//				if($_POST['url'] == NULL){
//					$url = "";
//				}else{
//					$url = trim($_POST['url']);
//					if ($url){
//						if (substr($url,0,7) != "http://"){
//							$url="http://".$url;
//						}
//					}
//				}
//				$fu = new frontuser();
//				$tokenList = $fu->getTokenByFuId();
//				if ($tokenList){
//					for ($i = 0; $i < count($tokenList); $i++){
//						if ($tokenList[$i]['fu_token']){
//							$this->getApp()->getPush()->pushMsg($tokenList[$i]['fu_token'], $_POST['title'], $_POST['content'], "13", $url);
//						}
//					}
//					$this->view->result = $this->_lang->tuisongchenggong;
//				}
//			}
//		}
        if ($_POST){
            if ($_POST['title'] == NULL){
                $this->view->result = $this->_lang->tuisongbiaotibunengweikong;
            }else if ($_POST['content'] == NULL) {
                $this->view->result = $this->_lang->tuisongneirongbunengweikong;
            }else {
                if($_POST['url'] == NULL){
                    $platform = 'android,ios'; // 接受此信息的系统
                    $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>$_POST['title'], 'n_content'=>$_POST['content'],'n_extras'=>array('type'=>0,'if_url'=>2)));
                    //var_dump($msg_content);
                    $j=new jpush();
                    $j->send(18,4,"",1,$msg_content,$platform);
                }else{
                    $platform = 'android,ios'; // 接受此信息的系统
                    $msg_content = json_encode(array('n_builder_id'=>0,'n_title'=>$_POST['title'], 'n_content'=>$_POST['content'],'n_extras'=>array('type'=>0,'if_url'=>1,'url'=>$_POST['url'])));
                    //var_dump($msg_content);
                    $j=new jpush();
                    $j->send(18,4,"",1,$msg_content,$platform);
                }

                $this->view->result = $this->_lang->tuisongchenggong;
            }
        }
		echo $this->view->render("push.html");
	}
}
