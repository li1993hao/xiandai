<?php /* Smarty version Smarty-3.1.14, created on 2014-09-25 18:12:45
         compiled from "app\tpl\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:262025423ea9da47561-56745367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ba3ff2f51dd3565f01300af6d7d71bf4bd2558' => 
    array (
      0 => 'app\\tpl\\header.htm',
      1 => 1411639959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262025423ea9da47561-56745367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    '__userinfo__' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5423ea9daccb95_15976995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423ea9daccb95_15976995')) {function content_5423ea9daccb95_15976995($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
    <script type="text/javascript">
    var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <title>天津现代职业技术学院就业指导中心</title>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->


</head>

<body>
    <div class="container">
        <div class="top_login">
            <p id="login_error" class="error"><p>
            <div>
                <div>
                    <span>账号:</span>
                    <input type="text" name="user_name" id="user_name" placeholder="学号或邮箱" />
                </div>
                <div>
                    <span>密码:</span>
                    <input type="password" name="user_pswd" id="user_pswd"/>
                </div>
                <div id="login_submit">登录</div>
            </div>
            <div>
                <p>>学生可以使用学号登录,初始密码为身份证后六位</p>
                <p>>企业可以使用您的注册邮箱进行登录</p>
                <p>>如果忘记密码请联系天津现代职业技术学院就业指导中心</p>
            </div>
        </div>
        <div class="header" id="header">
            <div class="header_top">
                <?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
                <ul class="header_unlogin">
                    <li><a href="javascript:void(0)">用户登录</a>
                    </li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Account/Register">企业注册</a> 
                    </li>
                    <li><a href="javascript:void(0)">校友注册</a>
                    </li>
                </ul>
                <?php }else{ ?>
                    <ul class="header_login">
                        <li><a id ="user_pic" href="javascript:void(0)">></a>
                        </li>
                        <li><a id="person_center" href="javascript:void(0)">个人中心</a>
                        </li>
                        <li><a id="login_out" href="javascript:void(0)">注销</a>
                    </li>
                </ul>
                <?php }?>
                <div class="search">
                        <input type="text" placeholder="请输入关键字"></input>
                        <a href="javascript:void(0)">搜索</a>
                </div>
            </div>
            <div class="banner"></div>
        </div><?php }} ?>