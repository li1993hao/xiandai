<?php
/**
*  
*  Create On 2013-8-6����9:52:09
*  Author lidianbin
*  QQ: 281443751
*  Email: lidianbin@iwind-tech.com
**/
function smarty_function_page($params, &$smarty)
{
	//print_r($params);
	if($params['info']['list']==""){
		return "";
	}
	$smarty->assign("news",$params['info']);
	$smarty->assign("web_url",trim($params['web_url'],"/"));
	$smarty->assign("url",trim(trim($params['web_url'],"/").$params['url'],"/"));
	//echo $params['web_url'].$params['url'];
	//echo $smarty->fetch("page.htm");
	return $smarty->fetch("page.htm");
}