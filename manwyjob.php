<?php
/**
*  Create On 2010-8-21
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
header("Content-type: text/html; charset=utf-8");
//error_reporting(0);
date_default_timezone_set('Asia/Shanghai');
define("DIR",dirname(__FILE__));
define("APPNAME","admin");
ini_set("include_path", ini_get("include_path").PATH_SEPARATOR.DIR."/been");//设置框架所在目录为目录为include_path

include_once 'App.class.php';
include_once 'Db.php';
include_once 'View.class.php';
include_once 'Lang.class.php';
include_once DIR.'/'.APPNAME.'/filter/adminFilter.php';

//include_once './setting/push.php';

$app=App::getInstance();
$app->setConfPath(DIR."/setting");

$app->setDb(new Db($app->loadConf("db")));
$app->setView(new View($app->loadConf("view")));



$lang = include_once DIR.'/'.APPNAME.'/lang/langConf.php';
//print_r($lang);
$app->setLang(new Lang($lang));
//print_r($app);
$app->setFilter(new adminFilter());

include_once DIR.'/push/PushMessage.php';
//print_r($app->loadConf("push"));
$app->setPush(new PushMessage($app->loadConf("push")));

$app->run(DIR.'/'.APPNAME.'/controllers');
//print_r($_SERVER);
