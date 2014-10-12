<?php
class MessageController extends Controller {
	public function __construct() {
		parent::__construct ();
// 		$this->view->url_path = $this->getRequest ()->appPath;
		$this->view->web_url = $this->getRequest ()->hostUrl;
	}
	public function GetpublishList() {
		$type = $this->getRequest ()->get ( "type" );
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		if ($pageType == "pre") {
			$page = $pageNow - 1;
		} else if ($pageType == "next") {
			$page = $pageNow + 1;
		} else {
			$page = 1;
		}
		$m = new message ();
		$resultArray = array ();
		$resultArray ['json'] ['state'] = 0;
		$resultArray ['json'] ['status'] = 0;
		$resultArray ['json'] ['data'] ['totalCount'] = 0;
		$resultArray ['json'] ['data'] ['pageNum'] = $pageNow;
		$resultArray ['json'] ['data'] ['list'] = array ();
		$userinfo = $this->getData ( 'userinfo' );
		$userId = $userinfo ['id'];
// 		var_dump($userinfo);
// 		$userId = 1;
		if ($userId == null) {
			$resultArray ['json'] ['msg'] = "未登录";
		} else {
			$resultArray ['json'] ['status'] = 1;
			if ($page <= 0) {
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "成功";
			} else {
				if ($type == 1 || $type == 0 || $type == 2) {
					// 通过审核
					$resultArray ["json"] ["state"] = "1";
					$list = $m->getPublishList ( $userId, $page, $pageSize, $type );
					if ($list) {
						for($i = 0; $i < count ( $list ); $i ++) {
							$t = strip_tags ( $list [$i] ['content'] );
							$t = str_replace ( "&nbsp;", " ", $t );
							$list [$i] ['content'] = mb_substr ( $t, 0, 200 );
							
							if ($list [$i] ['msgType'] == 1) {
								$list [$i] ['url'] = $this->view->web_url."/clientapi.php/student/getrecruinfodetail/id/".$list [$i] ['id'];
								if ($list [$i] ['flag'] == 1) {
									$list [$i] ['msg'] = "招聘信息" . $list [$i] ['name'] . "通过审核";
								} else if ($list [$i] ['flag'] == 2) {
									$list [$i] ['msg'] = "招聘信息" . $list [$i] ['name'] . "未通过审核";
								}
							} else {
								$list [$i] ['url'] = $this->view->web_url."/clientapi.php/student/getjobfairinfodetail/id/".$list [$i] ['id'];
								if ($list [$i] ['flag'] == 1) {
									$list [$i] ['msg'] = "招聘会信息" . $list [$i] ['name'] . "通过审核\n时间:" . $list [$i] ['openTime'] . "\n地点:" . $list [$i] ['location'];
								} else if ($list [$i] ['flag'] == 2) {
									$list [$i] ['msg'] = "招聘会信息" . $list [$i] ['name'] . "未通过审核";
								}
							}
						}
						$resultArray ["json"] ["msg"] = "成功";
						$resultArray ['json'] ['data'] ['list'] = $list;
						$resultArray ['json'] ['data'] ['totalCount'] = count ( $list );
					} else {
						$resultArray ["json"] ["msg"] = "暂无消息";
					}
				} else {
					$resultArray ["json"] ["msg"] = "参数缺失";
				}
			}
		}
		echo json_encode ( $resultArray );
	}
	public function getMessageList() {
		$msgType = $this->getRequest ()->get ( "msgType" );
		$pageType = $this->getRequest ()->get ( "pageType" );
		$pageNow = $this->getRequest ()->get ( "pageNum" ) ? (strtolower ( $this->getRequest ()->get ( "pageNum" ) ) == "null" ? 1 : $this->getRequest ()->get ( "pageNum" )) : 1;
		$pageSize = $this->getRequest ()->get ( "pageSize" ) ? (strtolower ( $this->getRequest ()->get ( "pageSize" ) ) == "null" ? 10 : $this->getRequest ()->get ( "pageSize" )) : 10;
		if ($pageType == "pre") {
			$page = $pageNow - 1;
		} else if ($pageType == "next") {
			$page = $pageNow + 1;
		} else {
			$page = 1;
		}
		$m = new message ();
		$resultArray = array ();
		$resultArray ['json'] ['state'] = 0;
		$resultArray ['json'] ['status'] = 0;
		$resultArray ['json'] ['data'] ['totalCount'] = 0;
		$resultArray ['json'] ['data'] ['pageNum'] = $pageNow;
		$resultArray ['json'] ['data'] ['list'] = array ();
		$userinfo = $this->getData ( 'userinfo' );
		$userId = $userinfo ['id'];
		// $userId = 1;
		if ($userId == null) {
			$resultArray ['json'] ['msg'] = "未登录";
		} else {
			$resultArray ['json'] ['status'] = 1;
			if ($page <= 0) {
				$resultArray ["json"] ["state"] = "1";
				$resultArray ["json"] ["msg"] = "成功";
			} else {
				$resultArray ["json"] ["state"] = "1";
				if ($msgType == 1) {
					// 学生收藏消息
					$list = $m->getFavMessageList ( $userId, $page, $pageSize );
					if ($list) {
						for($i = 0; $i < count ( $list ); $i ++) {
							$list [$i] ['msg'] = $list [$i] ['name'] . "收藏了您的信息";
						}
						$resultArray ["json"] ["msg"] = "成功";
						$resultArray ['json'] ['data'] ['list'] = $list;
						$resultArray ['json'] ['data'] ['totalCount'] = count ( $list );
					} else {
						$resultArray ["json"] ["msg"] = "暂无消息";
					}
				} else if ($msgType == 2) {
					// 企业资质消息
					$list = $m->getCompanyMessageList ( $userId, $page, $pageSize );
					if ($list) {
						for($i = 0; $i < count ( $list ); $i ++) {
							if ($list [$i] ['flag'] == 1) {
								$list [$i] ['msg'] = "您的企业通过审核";
							} else if ($list [$i] ['flag'] == 2) {
								$list [$i] ['msg'] = "您的企业未通过审核";
							} else if ($list [$i] ['flag'] == 3) {
								$list [$i] ['msg'] = "您的企业认证过期";
							}
						}
						$resultArray ["json"] ["msg"] = "成功";
						$resultArray ['json'] ['data'] ['list'] = $list;
						$resultArray ['json'] ['data'] ['totalCount'] = count ( $list );
					} else {
						$resultArray ["json"] ["msg"] = "暂无消息";
					}
				} else if ($msgType == 3) {
					// 审核消息
					$list = $m->getRecruitMessageList ( $userId, $page, $pageSize );
					if ($list) {
						// var_dump($list);
						for($i = 0; $i < count ( $list ); $i ++) {
							// var_dump($list[$i]['msgType']);
							if ($list [$i] ['msgType'] == 1) {
								$list [$i] ['url'] = $this->view->web_url."/clientapi.php/student/getrecruinfodetail/id/".$list [$i] ['id'];
								if ($list [$i] ['flag'] == 1) {
									$list [$i] ['msg'] = "招聘信息" . $list [$i] ['name'] . "通过审核";
								} else if ($list [$i] ['flag'] == 2) {
									$list [$i] ['msg'] = "招聘信息" . $list [$i] ['name'] . "未通过审核";
								}
							} else {
								$list [$i] ['url'] = $this->view->web_url."/clientapi.php/student/getjobfairinfodetail/id/".$list [$i] ['id'];
								if ($list [$i] ['flag'] == 1) {
									$list [$i] ['msg'] = "招聘会信息" . $list [$i] ['name'] . "通过审核\n时间:" . $list [$i] ['openTime'] . "\n地点:" . $list [$i] ['location'];
								} else if ($list [$i] ['flag'] == 2) {
									$list [$i] ['msg'] = "招聘会信息" . $list [$i] ['name'] . "未通过审核";
								}
							}
						}
						$resultArray ["json"] ["msg"] = "成功";
						$resultArray ['json'] ['data'] ['list'] = $list;
						$resultArray ['json'] ['data'] ['totalCount'] = count ( $list );
					} else {
						$resultArray ["json"] ["msg"] = "暂无消息";
					}
				} else {
					$resultArray ["json"] ["state"] = "0";
					$resultArray ["json"] ["msg"] = "参数有误";
				}
			}
		}
		
		echo json_encode ( $resultArray );
	}
	
	public function Testpush(){
		$this->getApp()->getPush()->pushVerifyMsg("4820240d4c7e3cecf7f36d5c43821f5a8edab81873965170e8da7b1eab2f0251","test","guanzhu","16","12");
	}
}
