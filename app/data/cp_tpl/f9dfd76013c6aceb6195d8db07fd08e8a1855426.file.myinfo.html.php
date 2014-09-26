<?php /* Smarty version Smarty-3.1.14, created on 2014-09-26 19:10:12
         compiled from "app/tpl/student/myinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:323704215542549947964e9-18107682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9dfd76013c6aceb6195d8db07fd08e8a1855426' => 
    array (
      0 => 'app/tpl/student/myinfo.html',
      1 => 1411729782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323704215542549947964e9-18107682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542549948094f5_35026734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542549948094f5_35026734')) {function content_542549948094f5_35026734($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/student/myinfo.css" />
    <title><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</title>
    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->

</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   <div id="middle">
       <!-- 导航栏-->
       <div class="middle_top">
           <p><a id="toStart" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php"> 首页</a>/个人中心/学生基本信息</p>
       </div>
       <!-- 中间左部-->
       <div id="middle_left">
            <div id="title">
                <p>功能菜单</p>
            </div>
           <div id="xuanxiang">
               <p id="xuanzhong">学生基本信息</p>
               <p>我的招聘</p>
               <p>修改密码</p>
               <p>满意度调查</p>
           </div>

       </div>
       <!-- 中间右部-->
       <div id="middle_right">
           <div id="middle_right_name">
               小爱同学
              <div id="xiugai">
                <p><a href="#"> 修改</a></p>
              </div>
               <div id="middle_right_sex">
                   性别;女
               </div>
               <div id="middle_right_birthday">
                   出生年月;1992-01-01
               </div>
               <div id="middle_right_photo">
                  个人照片：
               </div>
               <div id="middle_right_img">
                   <div id="touxiang">

                   </div>
               </div>
               <div id="middle_right_gerenpingjia">
                   个人评价：
                   <div id="middle_right_gerenpingjia_content">
                       &nbsp; &nbsp; &nbsp;XXXXX014年天津市科2市市2014年天津市2014年天津年天津市2014年天津市2014年天津014年天津市科2市市2014年天津市2014年天津年天津市2014年天津市2014年天津014年天津市科2市市2014年天津市2014年天津年天津市2014年天津市2014年天津
                   </div>
               </div>

           </div>

       </div>
   </div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script>
    $(".middle").css("height",$(".middle_left").css("height"));
</script>
</body>

</html><?php }} ?>