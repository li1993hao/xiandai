<?php
require "StrMaker.class.php";
class UserinfoController extends Controller {
	public function __construct() {
		parent::__construct ();
		$this->view->web_url = $this->getRequest ()->hostUrl;
		$this->view->url_path = $this->getRequest ()->appPath;
	}
	
	/**
	 * 收藏/取消收藏信息（仅针对学生）
	 *
	 * @author lsq
	 */
	public function favRecruInfo() {
		$id = $this->getRequest ()->get ( 'id' );
		$oType = $this->getRequest ()->get ( 'operationType' );
		$flag = $this->getRequest ()->get ( 'openInfoFlag' );
		$type = $this->getRequest ()->get ( 'type' );
		$userId = $this->getRequest ()->get ( 'userId' );
		if (! $userId) {
			$userinfo = $this->getData ( 'userinfo' );
			$userId = $userinfo ['id'];
		}
		if ($id) {
			$collect = new collect ();
			if ($oType) {
				$list = $collect->delete ( $userId, $id, $type );
				// var_dump($list);
				if ($list) {
					$data ['id'] = "" . $id;
					$data ['favnum'] = "" . $list ['COUNT(`collect`.`coll_id`)'];
					$this->view->setMsg ( "取消收藏成功~" );
					$this->view->setState ( "1" );
				} else {
					$data = ( object ) null;
					$this->view->setMsg ( "取消收藏失败~" );
					$this->view->setState ( "0" );
				}
			} else {
				$list = $collect->add ( $userId, $id, $flag, $type );
				if ($list == - 1) {
					$data = ( object ) null;
					$this->view->setMsg ( "已收藏~" );
					$this->view->setState ( "0" );
				} else if ($list) {
					$data ['id'] = "" . $id;
					$data ['favnum'] = "" . $list ['COUNT(`collect`.`coll_id`)'];
					$this->view->setMsg ( "收藏成功~" );
					$this->view->setState ( "1" );
					
					$user = new frontuser ();
// 					$sql = "SELECT * FROM  `frontuser` WHERE  `fu_id` =  '".$userId."' LIMIT 1";
// 	 				$ret = $user->fetchRow($sql);
					if ($type == 0) {
						$sql = "SELECT user_id FROM corpinternmsg WHERE cim_id = $id";
						$ret = $user->fetchRow($sql);
						// 					print_r($ret);
						$sql = "SELECT * FROM  `frontuser` WHERE  `fu_id` =  '".$ret['user_id']."' LIMIT 1";
						$ret = $user->fetchRow($sql);
						// 					print_r($ret);
						$sql = "SELECT * FROM  `student` WHERE  `fu_id` =  '".$userId."' LIMIT 1";
						$ret2 = $user->fetchRow($sql);
						// 	 				print_r($ret2);
						$this->getApp()->getPush()->pushAttentionMsg($ret['fu_token'], "收藏消息", "有用户收藏了您发布的消息", "14", $id, $ret2['stu_name']);
						$m = new message ();
						$m->addFavMessage($userId, $id);
					} else if ($type == 1) {
						$sql = "SELECT user_id FROM jobfairmsg WHERE jm_id = $id";
						$ret = $user->fetchRow($sql);
						$sql = "SELECT * FROM  `frontuser` WHERE  `fu_id` =  '".$ret['user_id']."' LIMIT 1";
						$ret = $user->fetchRow($sql);
						$sql = "SELECT * FROM  `student` WHERE  `fu_id` =  '".$userId."' LIMIT 1";
						$ret2 = $user->fetchRow($sql);
						$this->getApp()->getPush()->pushAttentionMsg($ret['fu_token'], "收藏消息", "有用户收藏了您发布的消息", "14", $id, $ret2['stu_name']);
						$m = new message ();
						$m->addFavMessage($userId, $id);
					}
				} else {
					$data = ( object ) null;
					$this->view->setMsg ( "收藏失败~" );
					$this->view->setState ( "0" );
				}
			}
		} else {
			$data = ( object ) null;
			$this->view->setMsg ( "参数错误~" );
			$this->view->setState ( "0" );
		}
		$this->view->setStatus ( "1" );
		$this->view->setData ( $data );
		$this->view->display ( 'json' );
	}
	
	/**
	 * 获得收藏的招聘信息列表（仅针对学生）
	 *
	 * @author lsq
	 */
	public function getFavRecruInfoList() {
		$pageType = $this->getRequest ()->get ( 'pageType' );
		$pageNum = $this->getRequest ()->get ( 'pageNum' );
		$pageSize = $this->getRequest ()->get ( 'pageSize' );
		$typeid = $this->getRequest ()->get ( 'typeid' ); // 1 招聘 ;2 实习; 3 基层招聘;     0招聘会;
		$userId = $this->getRequest ()->get ( 'userId' );
		if (! $userId) {
			$userinfo = $this->getData ( 'userinfo' );
			$userId = $userinfo ['id'];
		} // 学生ID
		  // echo $userId;
		if ($pageType == "pre") {
			$page = $pageNum - 1;
		} else if ($pageType == "next") {
			$page = $pageNum + 1;
		} else {
			$page = 1;
		}
		if ($page <= 0) {
			// $data ["list"] = array ();
			// $data ["totalCount"] = 0;
			// $data ["pageNum"] = "1";
			// $resultArray ["json"] ["state"] = "1";
			// $resultArray ["json"] ["msg"] = "succeed!";
			// $resultArray ["json"] ["data"] = $data;
			$page = 1;
		}
		$rList = array ();
		$collect = new collect ();
		$list = $collect->getCollectList ( $userId, $typeid, $page, $pageSize );
		$url = $this->getRequest ()->hostUrl;
		//print_r($list);
		if ($list) {
			for($i = 0; $i < count ( $list ); $i ++) {
				if ($typeid == 0) {
					$rList [$i] ['id'] = "" . $list [$i] ['jm_id'];
					$rList [$i] ['title'] = "" . $list [$i] ['jm_name'];
					$rList [$i] ['url'] = "$url/clientapi.php/student/getjobfairinfodetail/id/" . $list [$i] ["jm_id"];
					$rList [$i] ['content'] = StrMarker::cut_str_utf ( strip_tags ( $list [$i] ["jm_content"] ), 100 );
					$rList [$i] ['favtime'] = "" . $list [$i] ['coll_time'];
					$rList [$i] ['istop'] = "" . $list [$i] ['jm_isup'] ? "1" : "0";
					// $rList [$i] ['pic'] = "" . $list [$i] ['pic_link'] ? "$url/common/upload/images/" . $list [$i] ['pic_link'] : "";
				} else {
					$rList [$i] ['id'] = "" . $list [$i] ['cim_id'];
					$rList [$i] ['title'] = "" . $list [$i] ['cim_name'];
					$rList [$i] ['url'] = "$url/clientapi.php/student/getrecruinfodetail/id/" . $list [$i] ["cim_id"];
					$rList [$i] ["content"] = StrMarker::cut_str_utf ( strip_tags ( $list [$i] ["cim_content"] ), 100 );
					$rList [$i] ['favtime'] = "" . $list [$i] ['coll_time'];
					$rList [$i] ['istop'] = "" . $list [$i] ['cim_isup'] ? "1" : "0";
					// $rList [$i] ['pic'] = "" . $list [$i] ['pic_link'] ? "$url/common/upload/images/" . $list [$i] ['pic_link'] : "";
				}
			}
			$this->view->setState ( "1" );
			$this->view->setMsg ( "获取收藏成功~" );
		} else {
			$this->view->setState ( "1" );
			$this->view->setMsg ( "暂无数据~" );
		}
		$data ['list'] = $rList;
		$data ['totalCount'] = "" . count ( $rList );
		$data ['pageNum'] = $page;
		$this->view->setData ( $data );
		$this->view->setStatus ( "1" );
		$this->view->display ( 'json' );
	}
	/**
	 * 获得学生个人信息
	 *
	 * @author linkai
	 */
	public function Getstudentuserinfo() {
		$userId = $this->getRequest ()->get ( 'userId' );
		if (! $userId) {
			$userinfo = $this->getData ( 'userinfo' );
			$userId = $userinfo ['id'];
		}
		// var_dump ( $userId );
		$student = new student ();
		$info = $student->getstudetail2 ( $userId );
		$url = $this->getRequest ()->hostUrl;
		
		if ($info) {
			$data ['userId'] = $userId;
			$data ['userName'] = $info['stu_name'] ? $info['stu_name'] : "";
				$data ['userSex'] = $info['stu_gender'];
				$data ['userBirth'] = date ( 'Y-m-d', strtotime ( $info['stu_birth'] ) );
				$data ['userCollege'] = $info['stu_college'] ? $info['stu_college'] : "";
				$data ['userMajor'] = $info['stu_pro'] ? $info['stu_pro'] : "";
				$data ['userGrade'] = $info['stu_grade'] ? $info['stu_grade'] : "";
				$data ['userRecord'] = $info['stu_education'] ? $info['stu_education'] : "";
				$data ['userSource'] = $info['stu_source'] ? $info['stu_source'] : "";
				$data ['userHome'] = $info['stu_home'] ? $info['stu_home'] : "";
				$data ['userPolitic'] = $info['stu_politic'] ? $info['stu_politic'] : "";
				
				
				$data ['ind_id'] = $info["ind_id"];
				$data ['ind_name'] = $info["ind_name"];
				$data ['userInd'] = $info["ind_name"];
				
				
				
				$data ['userInfo'] = $info['stu_intro'] ? $info['stu_intro'] : "";
				$data ['pic'] = $info['pic_link'] ? "$url/common/upload/images/" . $info['pic_link'] : "";
				// $data ['pic'] = "http://img2.cache.netease.com/cnews/2013/5/23/20130523111549936c2.jpg";
			
			
			
			
			$this->view->setMsg ( "获取信息成功~" );
			$this->view->setState ( "1" );
		} else {
			$data = ( object ) null;
			$this->view->setMsg ( "获取信息失败~" );
			$this->view->setState ( "1" );
		}
		$this->view->setStatus ( "1" );
		$this->view->setData ( $data );
		$this->view->display ( 'json' );
	}
	/**
	 * 获得企业信息
	 *
	 * @author linkai
	 */
	public function getEnterpriseUserinfo() {
		$userId = $this->getRequest ()->get ( 'userId' );
		if (! $userId) {
			$userinfo = $this->getData ( 'userinfo' );
			$userId = $userinfo ['id'];
		}
		$company = new company ();
		$info = $company->getCompanyDetailByFuId2 ( $userId );
		$url = $this->getRequest ()->hostUrl;
		if ($info) {
			$data ['enterpriseId'] = $userId;
			$data ['enterpriseName'] = $info ['com_name'] ? $info ['com_name'] : "";
			$data ['enterpriseLevel'] = $info ['ct_type'] ? $info ['ct_type'] : "";
			$data ['enterpriseContact'] = $info ['com_contact'] ? $info ['com_contact'] : "";
			$data ['enterpriseIndustry'] = $info ['ind_type'] ? $info ['ind_type'] : "";
			$data ['enterprisePhone'] = $info ['com_phone'] ? $info ['com_phone'] : "";
			$data ['enterpriseCode'] = $info ['com_post'] ? $info ['com_post'] : "";
			$data ['enterpriseEmail'] = $info ['com_email'] ? $info ['com_email'] : "";
			$data ['enterpriseAddress'] = $info ['area_name'] ? $info ['area_name'] : "";
			$data ['enterpriseDetailAddress'] = $info ['com_address'] ? $info ['com_address'] : "";
			$data ['enterpriseImg'] = $info ['pic_link'] ? "$url/common/upload/images/" . $info ['pic_link'] : "";
			
			// $data ['enterpriseImg'] = "http://img2.cache.netease.com/cnews/2013/5/23/20130523111549936c2.jpg";
			
			$info1 = $company->getCompanyPic ( $info ['com_id'] );
			if ($info1) {
				$links = "";
				for($i = 0; $i < count ( $info1 ); $i ++) {
					$links .= "," . "$url/common/upload/images/" . $info1 [$i] ['pic_link'];
				}
				$links = substr ( $links, 1, strlen ( $links ) ) ? substr ( $links, 1, strlen ( $links ) ) : "";
				$data ['enterpriseZizhiList'] = $links;
			}
			// $data ['enterpriseZizhiList']="http://img2.cache.netease.com/cnews/2013/5/23/20130523111549936c2.jpg,http://img4.cache.netease.com/cnews/2013/5/22/2013052216560920f7f.jpg";
			$this->view->setMsg ( "获取信息成功~" );
			$this->view->setState ( "1" );
		} else {
			$data = ( object ) null;
			$this->view->setMsg ( "获取信息失败~" );
			$this->view->setState ( "0" );
		}
		$this->view->setStatus ( "1" );
		$this->view->setData ( $data );
		$this->view->display ( 'json' );
	}
	/**
	 * 获得对我感兴趣的学生列表
	 *
	 * @author linkai
	 */
	public function getFavStudentList() {
		$pageType = $this->getRequest ()->get ( 'pageType' );
		$pageNum = $this->getRequest ()->get ( 'pageNum' );
		$pageSize = $this->getRequest ()->get ( 'pageSize' );
		$userId = $this->getRequest ()->get ( 'userId' );
		if (! $userId) {
			$userinfo = $this->getData ( 'userinfo' );
			$userId = $userinfo ['id'];
		}
		if ($pageType == "pre") {
			$page = $pageNum - 1;
		} else if ($pageType == "next") {
			$page = $pageNum + 1;
		} else {
			$page = 1;
		}
		
		if ($page <= 0) {
			$page = 1;
		}
		$rList = array ();
		$collect = new collect ();
		$list = $collect->getFavStudentList ( $userId, $page, $pageSize );
		$url = $this->getRequest ()->hostUrl;
		if ($list) {
			for($i = 0; $i < count ( $list ); $i ++) {
				$rList [$i] ['userId'] = "" . $list [$i] ['fu_id'];
				$rList [$i] ['userName'] = "" . $list [$i] ['stu_name'];
				$rList [$i] ['userSex'] = "" . $list [$i] ['stu_gender'];
				$rList [$i] ['userBirth'] = "" . date ( 'Y-m-d', strtotime ( $list [$i] ['stu_birth'] ) );
				$rList [$i] ['userCollege'] = "" . $list [$i] ['stu_college'];
				$rList [$i] ['userMajor'] = "" . $list [$i] ['stu_pro'];
			}
			$this->view->setState ( "1" );
			$this->view->setMsg ( "获取成功~" );
		} else {
			$this->view->setState ( "1" );
			$this->view->setMsg ( "暂无数据~" );
		}
		$data ['list'] = $rList;
		$data ['totalCount'] = "" . count ( $rList );
		$data ['pageNum'] = $page;
		$this->view->setData ( $data );
		$this->view->setStatus ( "1" );
		$this->view->display ( 'json' );
	}
}