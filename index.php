<?php
/**
*  Create On 2010-7-12
*  Author Been
*  QQ:281443751
*  Email:binbin1129@126.com
**/
error_reporting(1);


header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('Asia/Shanghai');
define("DIR",dirname(__FILE__));
define("APPNAME","app");
define("VERSION","1.6.2");
//echo DIR;
ini_set("include_path", ini_get("include_path").PATH_SEPARATOR.DIR."/been");//设置框架所在目录为目录为include_path


include_once 'App.class.php';
include_once 'Db.php';
include_once 'View.class.php';
include_once 'Lang.class.php';
include_once './app/filter/appFilter.php';
//include_once './setting/app_config.php';

$app=App::getInstance();
$app->setConfPath(DIR."/setting")->setVersion(VERSION);

$app->setDb(new Db($app->loadConf("db"))); //实例化Dao对象，
$app->setView(new View($app->loadConf("view"))); //实例化view引擎
$lang = include_once DIR.'/'.APPNAME.'/lang/langConf.php'; //语言
//print_r($lang);
$app->setLang(new Lang($lang));
$app->setFilter(new appFilter()); //设置过滤器
$app->run(DIR.'/'.APPNAME.'/controllers');
