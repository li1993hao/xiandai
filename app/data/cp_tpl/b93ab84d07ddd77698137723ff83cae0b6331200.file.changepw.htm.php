<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 18:11:42
         compiled from "app/tpl/company/changepw.htm" */ ?>
<?php /*%%SmartyHeaderCode:93759838254292d67324f22-57304593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93ab84d07ddd77698137723ff83cae0b6331200' => 
    array (
      0 => 'app/tpl/company/changepw.htm',
      1 => 1411985237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93759838254292d67324f22-57304593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54292d673ad548_47025946',
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54292d673ad548_47025946')) {function content_54292d673ad548_47025946($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php echo $_smarty_tpl->getSubTemplate ('commcss.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/content.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/cor_drop.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/myinfo.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->
    <title>企业基本信息</title>
    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心/</a>
        </dt>
        <dt><a href="#">修改密码</a></dt>
    </dl>
</div>
<div class ="middle" style="padding: 0">
		
		<div id="middle_left" style="padding-top: 0px">
            <div id="title">
                <p>功能菜单</p>
            </div>
           <div class="title" style="margin-top: 8px">
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo'" >企业基本信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair'">招聘会预定</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmycorpmsg'">招聘信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/studentinterestme'">学生信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw'"  style="background-color:#344a5d;color: #ffffff">修改密码</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/index#feedback'">满意度调查</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message'">我的消息</p>
           </div>

       </div>
		
		<div class="middle_right">
			<div id="myinfo_left">
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw">

				<div class="content-info">
    	   			<span class="input-title"> 原密码：</span><input class="inputpw" type="password" name="old" size="15" placeholder="原始密码" />
    	   		</div>
    	   		<div class="content-info">
    	   			<span class="input-title"> 新密码：</span><input class="inputpw" type="password" name="new" size="15" placeholder="新密码" />
    	   		</div>
    	   		<div class="content-info">
    	   			<span class="input-title"> 请重复：</span><input class="inputpw" type="password" name="renew" size="15" placeholder="重复输入新密码" />
    	   		</div>
    	   		<div class="content-info">
    	   			<input id="submit" class="submit" name="submit" type="submit" value="更改"/>
                    <span id="result" style="color:red;font-size:13px;margin-left: 30px"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</span>
    	   		</div>

            </form>
			</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>