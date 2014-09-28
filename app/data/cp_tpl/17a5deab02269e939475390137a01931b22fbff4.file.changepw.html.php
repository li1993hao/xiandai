<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 17:36:51
         compiled from "app/tpl/student/changepw.html" */ ?>
<?php /*%%SmartyHeaderCode:12218800955427c26880d950-66500670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a5deab02269e939475390137a01931b22fbff4' => 
    array (
      0 => 'app/tpl/student/changepw.html',
      1 => 1411896989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12218800955427c26880d950-66500670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5427c26886b921_17697867',
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5427c26886b921_17697867')) {function content_5427c26886b921_17697867($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <title>个人中心-修改密码</title>
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
    <style type="text/css">
        .nav dt {
            float: left;
            margin-top: 5px;
        }
        .nav dt:first-child {
            margin-left: 30px;
        }
        .nav dt a {
            color: white;
        }

        #middle_left, #middle_right{
            float: left;
        }

        #middle_left{
            width: 250px;
            height: 400px;
            background-color: #ecf0f1;
            margin-right: 10px;
        }

        #middle_right{
            width: 700px;
        }

        #middle_main{
            margin-top: 10px;
        }

        #middle_left >div{
            font-size: 16px;
            padding: 6px 10px;
            margin: 0 10px;
            border-bottom: 1px solid #000000;
        }
        #middle_left li:first-child{
            margin-top: 10px;
        }

        #middle_left li a{
            line-height: 25px;
            font-size: 14px;
            padding-left: 40px;
        }

        .content-info{margin:10px 0 0 0;font-size:15px;line-height:20px;color:#707070;}
        .input-title{width:100px;text-align:right; margin-left: 220px;}
        .inputpw{border:1px solid #3598db; height:20px; width:120px;}
        .submit-pw{height:20px; width:120px;background:#3598db;color:#FFF;cursor:pointer;}


    </style>


</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="middle">
    <!-- 导航栏-->
    <div class="nav">
        <dl>
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
            </dt>
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo">个人中心/</a>
            </dt>
            <dt><a href="#">修改密码</a>
            </dt>

        </dl>
    </div>

    <div id="middle_main">
        <div id="middle_left">
            <div >功能菜单</div>
            <ul>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo" >学生基本信息</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo">我的招聘</a></li>
                <li style="background-color: #33495e"><a href="#" style="color: #ffffff">修改密码</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index#feedback">满意度调查</a></li>
            </ul>
        </div>
        <div id="middle_right">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/changepw">

                <div class="content-info">
                    <span class="input-title">原密码：</span><input class="inputpw" type="password" name="old" size="15" placeholder="原始密码" />
                </div>
                <div class="content-info">
                    <span class="input-title">新密码：</span><input class="inputpw" type="password" name="new" size="15" placeholder="新密码" />
                </div>
                <div class="content-info">
                    <span class="input-title">重复新密码：</span><input class="inputpw" type="password" name="renew" size="15" placeholder="重复输入新密码" />
                </div>
                <div class="content-info">
                    <span class="input-title">&nbsp;</span><input class="submit-pw" type="submit" value="更改"><span class="result-info" ><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</span>
                </div>
            </form>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
</body>
</html><?php }} ?>