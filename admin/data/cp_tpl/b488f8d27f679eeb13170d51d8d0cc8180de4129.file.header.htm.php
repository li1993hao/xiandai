<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 12:56:09
         compiled from "admin\tpl\index\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:23616543f4fe9414522-41277776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b488f8d27f679eeb13170d51d8d0cc8180de4129' => 
    array (
      0 => 'admin\\tpl\\index\\header.htm',
      1 => 1413103351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23616543f4fe9414522-41277776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'user' => 0,
    'roleid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f4fe94d9422_77052119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f4fe94d9422_77052119')) {function content_543f4fe94d9422_77052119($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/header_bg.jpg" border=0>
  	<TR height=56>
    	<TD width=260><IMG height=56 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/header_left.jpg" width=260></TD>
    	<TD style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px" align=middle>
			当前用户：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value)===null||$tmp==='' ? "admin" : $tmp);?>
 &nbsp;&nbsp; 
			<?php if ($_smarty_tpl->tpl_vars['roleid']->value==1){?>
			<A style="COLOR: #fff" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/calendar/calendar" target=main>工作日历</A> &nbsp;&nbsp;
			<?php }?>
			<A style="COLOR: #fff" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Account/Changepw" target=main>修改密码</A> &nbsp;&nbsp;
            <A style="COLOR: #fff" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/index/main" target=main>返回首页</A> &nbsp;&nbsp;
	  		<A style="COLOR: #fff" onClick="if (confirm('确认要退出吗？')) return true; else return false;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Account/logout" target=_top>退出系统</A>
    	</TD>
   	 	<TD align=right width=268>
			<IMG height=56 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/header_right.jpg" width=268>
		</TD>
	</TR>
</TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
	<TR bgColor=#1c5db6 height=4><TD></TD></TR>
</TABLE>
</BODY>
</HTML>
<?php }} ?>