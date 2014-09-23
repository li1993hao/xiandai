<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:40:05
         compiled from "admin/tpl/version/platform.html" */ ?>
<?php /*%%SmartyHeaderCode:1175711406541e8ee5071854-34591542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d2bccad211a7a684baaa6662fa189542aaca76' => 
    array (
      0 => 'admin/tpl/version/platform.html',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175711406541e8ee5071854-34591542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'list' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8ee50e3cb4_23331887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8ee50e3cb4_23331887')) {function content_541e8ee50e3cb4_23331887($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/other/other.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>平台管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:平台管理</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div style="padding-left:30px;" >
	<font color="#CC0000"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font>
</div>
<?php if ($_smarty_tpl->tpl_vars['list']->value=="0"){?>没有数据
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:20px;background-color:white;width:300px;height:100px; float:left;">
	<div style="background-color:#FFC1C1;width:300px;height:100px;">
		<div style="height:20px; width:300px; text-align: right; ">
    		<a  style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Editplatform/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['CODE_PLATFORM'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('如果版本更新数据库已经有此平台的版本，请勿删除！');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Getplatform/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['CODE_PLATFORM'];?>
">删除</a>
			&nbsp;&nbsp;
		</div>
		<div style="height:60px; margin:10px; width:280; text-align:left;" >
				<div style="width:270px;height:30px;">平台号:<?php echo $_smarty_tpl->tpl_vars['re']->value['NAME_PLATFORM'];?>
</div>
				<div style="width:270px; height:30px;">关键字:<?php echo $_smarty_tpl->tpl_vars['re']->value['KEYWORD'];?>
</div>
		</div>
</div>
<div style="clear: both;"></div>
</div>
<?php } ?>
<?php }?>
</body>
</html><?php }} ?>