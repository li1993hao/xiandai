<?php

/**
 * 推荐系统记录一些数据
 * @author aifeng-06
 *
 */
class tj extends Model
{
	/**
	 * 记录赞的人
	 */	
	public function add_zan($post_id, $post_type, $user_id , $ip){
		$sql = "INSERT INTO 
				`tj_zan` (`zan_id`, `user_id`, `post_id`, `post_type`, `zan_time`, `zan_ip`) 
				VALUES (NULL, '".$user_id."', '".$post_id."', '".$post_type."', NOW(), '".$ip."') ";
		return $this->insert($sql);
	}
	
	/**
	 * 记录浏览
	 */
	public function add_view($post_id, $post_type, $user_id , $ip){
		$sql = "INSERT INTO 
				`tj_view` (`view_id`, `user_id`, `post_id`, `post_type`, `view_time`, `view_ip`) 
				VALUES (NULL, '".$user_id."', '".$post_id."', '".$post_type."', NOW(), '".$ip."') ";
		return $this->insert($sql);
	}
	
	/**
	 * 记录浏览
	 */
	public function add_share($post_id, $post_type, $user_id , $ip){
		$sql = "INSERT INTO 
				`tj_share` (`share_id`, `user_id`, `post_id`, `post_type`, `share_time`, `share_ip`) 
				VALUES (NULL, '".$user_id."', '".$post_id."', '".$post_type."', NOW(), '".$ip."') ";
		return $this->insert($sql);
	}
}