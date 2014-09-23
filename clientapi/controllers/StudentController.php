<?php
require "StrMaker.class.php";
class StudentController extends Controller {
	public function __construct() {
		parent::__construct ();
		// $this->view->url_path = $this->getRequest ()->appPath;
		$this->view->web_url = $this->getRequest ()->hostUrl;
	}
	public function Getrecruinfolist() {
		$typeArr = array (
				"1" => "getCorpPageModel",
				"2" => "getInternPageModel",
				"3" => "getBasePageModel" 
		);
		
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		$typeid = $this->getRequest ()->get ( "typeid" );
		$resultArray = array ();
		if (! $typeid || ! array_key_exists ( $typeid, $typeArr )) {
			$resultArray ["json"] ["state"] = "0";
			$resultArray ["json"] ["msg"] = "invaild typeid!";
		} else {
			if ($typeid == 1 || $typeid == 2 || $typeid == 3) {
				$corp = new corpinternmsg ();
				$data = array ();
				if ($pageType == "pre") {
					$page = $pageNow - 1;
				} else if ($pageType == "next") {
					$page = $pageNow + 1;
				} else {
					$page = 1;
				}
				
				if ($page <= 0) {
					$data ["list"] = array ();
					$data ["totalCount"] = 0;
					$data ["pageNum"] = "1";
					$resultArray ["json"] ["state"] = "1";
					$resultArray ["json"] ["msg"] = "succeed!";
					$resultArray ["json"] ["data"] = $data;
				}
				$result = $corp->$typeArr [$typeid] ( $page, $pageSize, null, 'pass' );
				// print_r($result);
				if ($result ["list"]) {
					$list = array ();
					for($i = 0; $i < count ( $result ["list"] ); $i ++) {
						$list [$i] ["id"] = $result ["list"] [$i] ["cim_id"];
						$list [$i] ["title"] = $result ["list"] [$i] ["cim_name"];
						$list [$i] ["time"] = $result ["list"] [$i] ["cim_date"];
						if ($result ["list"] [$i] ["cim_isup"]) {
							$list [$i] ["istop"] = 1;
						} else {
							$list [$i] ["istop"] = 0;
						}
						$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["cim_content"] ), 100 );
						// $list[$i]["pageNum"] = $result["page"];
						$url = $this->getRequest ()->hostUrl;
						$list [$i] ["url"] = "$url/clientapi.php/student/getrecruinfodetail/id/" . $result ["list"] [$i] ["cim_id"];
					}
					$data ["list"] = $list;
					$data ["pageNum"] = $result ["page"];
					$data ["totalCount"] = count ( $result ["list"] );
					$resultArray ["json"] ["state"] = "1";
					$resultArray ["json"] ["msg"] = "succeed!";
					$resultArray ["json"] ["data"] = $data;
				} else {
					$data ["list"] = array ();
					$data ["totalCount"] = 0;
					$data ["pageNum"] = $page;
					$resultArray ["json"] ["state"] = "1";
					$resultArray ["json"] ["msg"] = "succeed!";
					$resultArray ["json"] ["data"] = $data;
				}
			} 

			else {
				$base = new baserecrumsg ();
				$data = array ();
				if ($pageType == "pre") {
					$page = $pageNow - 1;
				} else if ($pageType == "next") {
					$page = $pageNow + 1;
				} else {
					$page = 1;
				}
				
				if ($page <= 0) {
					$data ["list"] = array ();
					$data ["totalCount"] = 0;
					$data ["pageNum"] = "1";
					$resultArray ["json"] ["state"] = "1";
					$resultArray ["json"] ["msg"] = "succeed!";
					$resultArray ["json"] ["data"] = $data;
				}
				$result = $base->getBasePageModel ( $page, $pageSize );
				// print_r($result);
				if ($result ["list"]) {
					$list = array ();
					for($i = 0; $i < count ( $result ["list"] ); $i ++) {
						$list [$i] ["id"] = $result ["list"] [$i] ["brm_id"];
						$list [$i] ["title"] = $result ["list"] [$i] ["brm_title"];
						$list [$i] ["time"] = $result ["list"] [$i] ["brm_date"];
						if ($result ["list"] [$i] ["brm_isup"]) {
							$list [$i] ["istop"] = 1;
						} else {
							$list [$i] ["istop"] = 0;
						}
						$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["brm_content"] ), 100 );
						// $list[$i]["pageNum"] = $result["page"];
						$url = $this->getRequest ()->hostUrl;
						$list [$i] ["url"] = "$url/clientapi.php/student/getbaseinfodetail/id/" . $result ["list"] [$i] ["brm_id"];
					}
					$data ["list"] = $list;
					$data ["totalCount"] = count ( $result ["list"] );
					$data ["pageNum"] = $result ["page"];
					$resultArray ["json"] ["state"] = "1";
					$resultArray ["json"] ["msg"] = "succeed!";
					$resultArray ["json"] ["data"] = $data;
				} else {
					$data ["list"] = array ();
					$data ["totalCount"] = 0;
					$data ["pageNum"] = $page;
					$resultArray ["json"] ["state"] = "1";
					$resultArray ["json"] ["msg"] = "succeed!";
					$resultArray ["json"] ["data"] = $data;
				}
			}
		}
		echo json_encode ( $resultArray );
	}
	public function Getjobfairinfolist() {
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		$resultArray = array ();
		
		$jobfair = new jobfairmsg ();
		$data = array ();
		if ($pageType == "pre") {
			$page = $pageNow - 1;
		} else if ($pageType == "next") {
			$page = $pageNow + 1;
		} else {
			$page = 1;
		}
		
		if ($page <= 0) {
			$data ["list"] = array ();
			$data ["totalCount"] = 0;
			$data ["pageNum"] = "1";
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		}
		
		$result = $jobfair->getJobfairPageModel ( $page, $pageSize );
		// print_r($result);
		if ($result ["list"]) {
			$list = array ();
			for($i = 0; $i < count ( $result ["list"] ); $i ++) {
				$list [$i] ["id"] = $result ["list"] [$i] ["jm_id"];
				$list [$i] ["title"] = $result ["list"] [$i] ["jm_name"];
				$list [$i] ["opentime"] = $result ["list"] [$i] ["jm_opentime"];
				$list [$i] ["addr"] = $result ["list"] [$i] ["jm_addr"];
				if ($result ["list"] [$i] ["jm_isup"]) {
					$list [$i] ["istop"] = 1;
				} else {
					$list [$i] ["istop"] = 0;
				}
				
				$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["jm_content"] ), 100 );
				// $list[$i]["pageNum"] = $result["page"];
				$url = $this->getRequest ()->hostUrl;
				if ($result ["list"] [$i] ["pic_id"]) {
					$list [$i] ["piclink"] = "$url/common/upload/images/" . $result ["list"] [$i] ["pic_link"];
				} else {
					$list [$i] ["piclink"] = "";
				}
				$list [$i] ["url"] = "$url/clientapi.php/student/getjobfairinfodetail/id/" . $result ["list"] [$i] ["jm_id"];
			}
			$data ["list"] = $list;
			$data ["totalCount"] = count ( $result ["list"] );
			$data ["pageNum"] = $result ["page"];
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		} else {
			$data ["list"] = array ();
			$data ["totalCount"] = 0;
			$data ["pageNum"] = $page;
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		}
		echo json_encode ( $resultArray );
	}
	public function Getpolicyinfolist() {
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		$resultArray = array ();
		
		$employpolicy = new employmentpolicy ();
		$data = array ();
		if ($pageType == "pre") {
			$page = $pageNow - 1;
		} else if ($pageType == "next") {
			$page = $pageNow + 1;
		} else {
			$page = 1;
		}
		
		if ($page <= 0) {
			$data ["list"] = array ();
			$data ["totalCount"] = 0;
			$data ["pageNum"] = "1";
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		}
		$result = $employpolicy->getEmployPageModel ( $page, $pageSize );
		// print_r($result);
		if ($result ["list"]) {
			$list = array ();
			for($i = 0; $i < count ( $result ["list"] ); $i ++) {
				$list [$i] ["id"] = $result ["list"] [$i] ["ep_id"];
				$list [$i] ["title"] = $result ["list"] [$i] ["ep_title"];
				$list [$i] ["time"] = $result ["list"] [$i] ["ep_create"];
				
				if ($result ["list"] [$i] ["ep_istop"]) {
					$list [$i] ["istop"] = 1;
				} else {
					$list [$i] ["istop"] = 0;
				}
				
				$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["ep_content"] ), 100 );
				// $list[$i]["pageNum"] = $result["page"];
				$url = $this->getRequest ()->hostUrl;
				// $list[$i]["piclink"] = "$url/common/upload/images/".$result["list"][$i]["pic_link"];
				$list [$i] ["url"] = "$url/clientapi.php/student/getpolicyinfodetail/id/" . $result ["list"] [$i] ["ep_id"];
			}
			$data ["list"] = $list;
			$data ["totalCount"] = count ( $result ["list"] );
			$data ["pageNum"] = $result ["page"];
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		} else {
			$data ["list"] = array ();
			$data ["totalCount"] = 0;
			$data ["pageNum"] = $page;
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		}
		echo json_encode ( $resultArray );
	}
	public function Getnoticeinfolist() {
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		$resultArray = array ();
		
		$notice = new jobinfo ();
		$data = array ();
		if ($pageType == "pre") {
			$page = $pageNow - 1;
		} else if ($pageType == "next") {
			$page = $pageNow + 1;
		} else {
			$page = 1;
		}
		
		if ($page <= 0) {
			$data ["list"] = array ();
			$data ["totalCount"] = 0;
			$data ["pageNum"] = "1";
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		}
		$result = $notice->getActPageModel ( $page, $pageSize );
		// print_r($result);
		if ($result ["list"]) {
			$list = array ();
			for($i = 0; $i < count ( $result ["list"] ); $i ++) {
				$list [$i] ["id"] = $result ["list"] [$i] ["ji_id"];
				$list [$i] ["title"] = $result ["list"] [$i] ["ji_title"];
				$list [$i] ["time"] = $result ["list"] [$i] ["ji_date"];
				
				if ($result ["list"] [$i] ["ji_isup"] || $result ["list"] [$i] ["ji_recom"]) {
					$list [$i] ["istop"] = 1;
				} else {
					$list [$i] ["istop"] = 0;
				}
				
				$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["ji_content"] ), 100 );
				// $list[$i]["pageNum"] = $result["page"];
				$url = $this->getRequest ()->hostUrl;
				if ($result ["list"] [$i] ["pic_id"]) {
					$list [$i] ["piclink"] = "$url/common/upload/images/" . $result ["list"] [$i] ["pic_link"];
				} else {
					$list [$i] ["piclink"] = "";
				}
				$list [$i] ["url"] = "$url/clientapi.php/student/getnoticeinfodetail/id/" . $result ["list"] [$i] ["ji_id"];
			}
			$data ["list"] = $list;
			$data ["totalCount"] = count ( $result ["list"] );
			$data ["pageNum"] = $result ["page"];
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		} else {
			$data ["list"] = array ();
			$data ["totalCount"] = 0;
			$data ["pageNum"] = $page;
			$resultArray ["json"] ["state"] = "1";
			$resultArray ["json"] ["msg"] = "succeed!";
			$resultArray ["json"] ["data"] = $data;
		}
		echo json_encode ( $resultArray );
	}
	public function Getjobinfolist() {
		$typeArr = array (
				"1" => "getPlanPageModel",
				"2" => "getSearchPageModel",
				"3" => "getStartPageModel",
				"4" => "getProcessPageModel" 
		);
		
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		$typeid = $this->getRequest ()->get ( "typeid" );
		$resultArray = array ();
		if (! $typeid || ! array_key_exists ( $typeid, $typeArr )) {
			$resultArray ["json"] ["state"] = "0";
			$resultArray ["json"] ["msg"] = "invaild typeid!";
		} else {
			
			$jobinfo = new jobinfo ();
			$data = array ();
			if ($pageType == "pre") {
				$page = $pageNow - 1;
			} else if ($pageType == "next") {
				$page = $pageNow + 1;
			} else {
				$page = 1;
			}
			
			if ($page <= 0) {
				$data ["list"] = array ();
				$data ["totalCount"] = 0;
				$data ["pageNum"] = "1";
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "succeed!";
				$resultArray ["json"] ["data"] = $data;
			}
			$result = $jobinfo->$typeArr [$typeid] ( $page, $pageSize, null, 3 );
			// print_r($result);
			if ($result ["list"]) {
				$list = array ();
				for($i = 0; $i < count ( $result ["list"] ); $i ++) {
					$list [$i] ["id"] = $result ["list"] [$i] ["ji_id"];
					$list [$i] ["title"] = $result ["list"] [$i] ["ji_title"];
					$list [$i] ["time"] = $result ["list"] [$i] ["ji_date"];
					if ($result ["list"] [$i] ["ji_isup"] || $result ["list"] [$i] ["ji_recom"]) {
						$list [$i] ["istop"] = 1;
					} else {
						$list [$i] ["istop"] = 0;
					}
					$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["ji_content"] ), 100 );
					// echo $list[$i]["content"];
					// $list[$i]["pageNum"] = $result["page"];
					$url = $this->getRequest ()->hostUrl;
					if ($result ["list"] [$i] ["pic_id"]) {
						$list [$i] ["piclink"] = "$url/common/upload/images/" . $result ["list"] [$i] ["pic_link"];
					} else {
						$list [$i] ["piclink"] = "";
					}
					$list [$i] ["url"] = "$url/clientapi.php/student/getjobinfodetail/id/" . $result ["list"] [$i] ["ji_id"];
				}
				$data ["list"] = $list;
				$data ["totalCount"] = count ( $result ["list"] );
				$data ["pageNum"] = $result ["page"];
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "succeed!";
				$resultArray ["json"] ["data"] = $data;
			} else {
				// echo $page;
				$data ["list"] = array ();
				$data ["totalCount"] = 0;
				$data ["pageNum"] = $page;
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "succeed!";
				$resultArray ["json"] ["data"] = $data;
			}
		}
		echo json_encode ( $resultArray );
	}
	public function Getrecruinfodetail() {
		$id = $this->getRequest ()->get ( 'id' );
		$corpinternmsg = new corpinternmsg ();
		if ($id) {
			$corpinterndetail = $corpinternmsg->getDetailInfoFromId ( $id );
			if ($corpinterndetail) {
				$corpinternmsg->addReadnum ( $id );
				
				$this->view->corpinternmsg = $corpinterndetail;
				echo $this->view->render ( "getrecruinfodetail.html" );
			}
		}
	}
	public function Getjobfairinfodetail() {
		$id = $this->getRequest ()->get ( 'id' );
		$jobfairmsg = new jobfairmsg ();
		if ($id) {
			$jobfairdetail = $jobfairmsg->getDetailInfoFromId ( $id );
			if ($jobfairdetail) {
				$jobfairmsg->addReadnum ( $id );
				
				$this->view->jobfairmsg = $jobfairdetail;
				// var_dump($jobfairdetail);
				// var_dump($this->view);
				// jjjj
				echo $this->view->render ( "getjobfairinfodetail.html" );
			}
		}
	}
	public function Getbaseinfodetail() {
		$id = $this->getRequest ()->get ( 'id' );
		$baserecrumsg = new baserecrumsg ();
		if ($id) {
			$baserecrudetail = $baserecrumsg->getDetailInfoFromId ( $id );
			if ($baserecrudetail) {
				$baserecrumsg->addReadnum ( $id );
				
				$this->view->baserecrumsg = $baserecrudetail;
				echo $this->view->render ( "getbaseinfodetail.html" );
			}
		}
	}
	public function Getpolicyinfodetail() {
		$id = $this->getRequest ()->get ( 'id' );
		$employmentpolicy = new employmentpolicy ();
		if ($id) {
			$employmentpolicydetail = $employmentpolicy->getInfofromId ( $id );
			if ($employmentpolicydetail) {
				$employmentpolicy->addBrowseNum ( $id );
				// print_r($employmentpolicydetail);
				$this->view->employmentpolicy = $employmentpolicydetail;
				echo $this->view->render ( "getpolicyinfodetail.html" );
			}
		}
	}
	public function Getnoticeinfodetail() {
		$id = $this->getRequest ()->get ( 'id' );
		$jobinfo = new jobinfo ();
		if ($id) {
			$jobinfodetail = $jobinfo->getDetailInfoFromId ( $id );
			if ($jobinfodetail) {
				$jobinfo->addReadnum ( $id );
				
				$this->view->jobinfo = $jobinfodetail;
				echo $this->view->render ( "getnoticeinfodetail.html" );
			}
		}
	}
	public function Getjobinfodetail() {
		$id = $this->getRequest ()->get ( 'id' );
		$jobinfo = new jobinfo ();
		if ($id) {
			$jobinfodetail = $jobinfo->getDetailInfoFromId ( $id );
			if ($jobinfodetail) {
				$jobinfo->addReadnum ( $id );
				
				$this->view->jobinfo = $jobinfodetail;
				echo $this->view->render ( "getjobinfodetail.html" );
			}
		}
	}
	public function corpinfolist() {
		$corpmsg = new corpinternmsg ();
		$page = $this->getRequest ()->get ( 'page' ) ? $this->getRequest ()->get ( 'page' ) : 1;
		$news = $corpmsg->getCorpPageModel ( $page, 20 );
		$this->view->news = $news;
		echo $this->view->render ( "corplist.html" );
	}
	public function interninfolist() {
		$corpmsg = new corpinternmsg ();
		$page = $this->getRequest ()->get ( 'page' ) ? $this->getRequest ()->get ( 'page' ) : 1;
		$news = $corpmsg->getInternPageModel ( $page, 20 );
		$this->view->news = $news;
		echo $this->view->render ( "corplist.html" );
	}
	public function baseinfolist() {
		$corpmsg = new baserecrumsg ();
		$page = $this->getRequest ()->get ( 'page' ) ? $this->getRequest ()->get ( 'page' ) : 1;
		$news = $corpmsg->getBasePageModel ( $page, 20 );
		$this->view->news = $news;
		
		echo $this->view->render ( "baselist.html" );
	}
	
	/**
	 * 获取西部就业信息列表
	 * pageType:pre/loadmore
	 * pageNum:标识当前这组数据的标志
	 * pageSize: 每页的数量
	 * typeid:1(就业动态)/2(就业政策)/3(就业人物)
	 */
	public function Getwestinfolist() {
		$typeArr = array (
				"1" => "getNewsPageModel",
				"2" => "getPolicyPageModel",
				"3" => "getPersonPageModel" 
		);
		
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		$typeid = $this->getRequest ()->get ( "typeid" );
		
		$resultArray = array ();
		if (! $typeid || ! array_key_exists ( $typeid, $typeArr )) {
			$resultArray ["json"] ["state"] = "0";
			$resultArray ["json"] ["msg"] = "invaild typeid!";
		} else {
			
			$west = new westWork ();
			$data = array ();
			if ($pageType == "pre") {
				$page = $pageNow - 1;
			} else if ($pageType == "next") {
				$page = $pageNow + 1;
			} else {
				$page = 1;
			}
			
			if ($page <= 0) {
				$data ["list"] = array ();
				$data ["totalCount"] = 0;
				$data ["pageNum"] = "1";
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "succeed!";
				$resultArray ["json"] ["data"] = $data;
			}
			
			$result = $west->$typeArr [$typeid] ( $page, $pageSize, null, 3 );
			if ($result ["list"]) {
				$list = array ();
				for($i = 0; $i < count ( $result ["list"] ); $i ++) {
					$list [$i] ["id"] = $result ["list"] [$i] ["ww_id"];
					$list [$i] ["title"] = $result ["list"] [$i] ["ww_title"];
					$list [$i] ["time"] = $result ["list"] [$i] ["ww_time"];
					$list [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $result ["list"] [$i] ["ww_content"] ), 100 );
					// echo "--".$result["list"][$i]["ww_isup"]."--<br/>";
					$list [$i] ["istop"] = ($result ["list"] [$i] ["ww_isup"] == "" || $result ["list"] [$i] ["ww_isup"] == "0000-00-00 00:00:00") ? 0 : 1;
					
					$list [$i] ["url"] = $this->view->web_url . "/clientapi.php/Student/Getwestdetail/id/" . $result ["list"] [$i] ["ww_id"];
					$list [$i] ["piclink"] = $result ["list"] [$i] ["pic_id"] == "" ? "" : $this->view->web_url . "/common/upload/" . $result ["list"] [$i] ["pic_link"];
				}
				// print_r($list);
				$data ["list"] = $list;
				$data ["totalCount"] = count ( $result ["list"] );
				$data ["pageNum"] = $result ["page"];
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "succeed!";
				$resultArray ["json"] ["data"] = $data;
			} else {
				$data ["list"] = array ();
				$data ["totalCount"] = 0;
				$data ["pageNum"] = $page;
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "succeed!";
				$resultArray ["json"] ["data"] = $data;
			}
		}
		
		echo json_encode ( $resultArray );
	}
	
	/**
	 * 获取西部就业详情
	 */
	public function Getwestdetail() {
		// echo "sss";
		$id = $this->getRequest ()->get ( "id" );
		$west = new westWork ();
		$detail = $west->getDetailInfoFromId ( $id );
		if ($detail) {
			
			$west->addReadnum ( $id );
			$this->view->detail = $detail;
			$this->view->display ( "westdetail.html" );
		} else {
			$this->error404 ( $this->_lang->wenzhangbucunzaihuoyijingshanchu );
		}
	}
	
	/**
	 * 获取赞信息
	 */
	public function goodinfo() {
		$id = $this->getRequest ()->get ( "id" );
		$type = $this->getRequest ()->get ( "type" );
		$corpmsg = new corpinternmsg ();
		$nowgood = $corpmsg->getGood ( $id, $type );
		$data = array ();
		if ($nowgood) {
			$this->view->setMsg ( "success!" );
			$this->view->setState ( "1" );
			$data ["id"] = $id;
			$data ["goodnum"] = $nowgood ['good'] == null ? "0" : $nowgood ['good'];
		} else {
			$this->view->setMsg ( "文章不存在~" );
			$this->view->setState ( "0" );
		}
		$this->view->setData ( $data );
		$this->view->display ( "json" );
	}
	
	/**
	 * 点赞
	 */
	public function isgood() {
		$id = $this->getRequest ()->get ( "id" );
		$type = $this->getRequest ()->get ( "type" );
		$corpmsg = new corpinternmsg ();
		if ($corpmsg->addgoodnum ( $id, $type )) {
			$data ['isgood'] = '1';
			$this->view->setState ( "1" );
			$this->view->setMsg ( "成功!" );
		} else {
			$data ['isgood'] = '0';
			$this->view->setState ( "1" );
			$this->view->setMsg ( "失败!" );
		}
		$this->view->setData ( $data );
		$this->view->display ( "json" );
	}
	
	/**
	 * 是否收藏
	 */
	public function isFav() {
		$userId = $this->getRequest ()->get ( "userId" );
		$type = $this->getRequest ()->get ( "type" );
		$id = $this->getRequest ()->get ( "id" );
		if (! userId) {
			$data ['isFav'] = '0';
			$this->view->setState ( "0" );
			$this->view->setMsg ( "操作失败请登录~" );
		} else {
			$col = new collect ();
			if ($col->haveCollect ( $userId, $id, $type )) {
				$data ['isFav'] = '1';
				$this->view->setMsg ( "已收藏!" );
			} else {
				$data ['isFav'] = '0';
				$this->view->setMsg ( "尚未收藏!" );
			}
			$this->view->setState ( "1" );
		}
		$this->view->setData ( $data );
		$this->view->display ( "json" );
	}
	public function getcalendarbymonth() {
		$date = $this->getRequest ()->get ( "date" );
		$jobfair = new jobfairmsg ();
		$joblist = $jobfair->getcalendarbymonth ( $date );
		// echo $date;
		$data = array (
				"list" => array (),
				"totalCount" => 0 
		);
		if ($joblist) {
			$this->view->setMsg ( "success!" );
			$this->view->setState ( "1" );
			$i = 0;
			$j = - 1;
			while ( array_key_exists ( $i, $joblist ) ) {
				if (@$data ['list'] [$j] ['date'] == substr ( $joblist [$i] ["jm_opentime"], 0, 10 )) {
					$data ['list'] [$j] ['amount'] += 1;
				} else {
					$data ['list'] [++ $j] ['date'] = substr ( $joblist [$i] ["jm_opentime"], 0, 10 );
					$data ['list'] [$j] ['amount'] = 1;
				}
				$data ['totalCount'] += 1;
				$i ++;
			}
			
			$this->view->setData ( $data );
		} else {
			$this->view->setMsg ( "invalid date!" );
			$this->view->setState ( 0 );
		}
		$this->view->display ( "json" );
	}
	public function getcalendarbyday() {
		$date = $this->getRequest ()->get ( 'date' );
		$type = $this->getRequest ()->get ( 'type' );
		$jobmsg = new jobfairmsg ();
		$infolist = $jobmsg->getcalendarbymonth ( $date, $type );
		
		if ($infolist) {
			$this->view->setState ( "1" );
			$this->view->setMsg ( "success!" );
			
			$list = array ();
			$j = 0;
			for($i = 0; $i < count ( $infolist ); $i ++) {
				$list [$j] ['id'] = $infolist [$i] ['jm_id'];
				$list [$j] ['time'] = substr ( $infolist [$i] ['jm_opentime'], 0, 16 );
				$list [$j] ['title'] = $infolist [$i] ['jm_name'];
				$list [$j] ['address'] = $infolist [$i] ['jm_addr'];
				$list [$j] ['url'] = $this->view->web_url . "/clientapi.php/student/getjobfairinfodetail/id/" . $list [$i] ['id'];
				$j ++;
			}
			$data ['list'] = $list ? $list : null;
			$data ['totalcount'] = "" . count ( $infolist ) . "";
			$this->view->setData ( $data );
			$this->view->display ( "json" );
		} else {
			$this->view->setState ( "1" );
			$this->view->setMsg ( "No data!" );
			$data ['list'] = null;
			$data ['totalcount'] = 0;
			$this->view->setData ( $data );
			$this->view->display ( "json" );
		}
	}
}