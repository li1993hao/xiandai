<?php
/**
*  Create On 2010-8-21
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
/**
 * 自动加载机制。自动加载model类
 * @param  [type] $classname [description]
 * @return [type]            [description]
 */
function __autoload($classname){
	require_once (DIR."/model/".$classname. ".php");
}