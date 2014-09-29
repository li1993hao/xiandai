<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 20:31:10
         compiled from "admin/tpl/index/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:811359880541e87ce079566-56092346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a18624a5170234a38d3aaf39952db3608e44415' => 
    array (
      0 => 'admin/tpl/index/index.htm',
      1 => 1411993235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811359880541e87ce079566-56092346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e87ce0bddf4_99193804',
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e87ce0bddf4_99193804')) {function content_541e87ce0bddf4_99193804($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN">
<HTML>
<HEAD>
<TITLE>后台管理系统</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META http-equiv=Pragma content=no-cache>
<META http-equiv=Cache-Control content=no-cache>
<META http-equiv=Expires content=-1000>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<FRAMESET border=0 frameSpacing=0 rows="60, *" frameBorder=0>
<FRAME name=header src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/index/header" frameBorder=0 noResize scrolling=no>
<FRAMESET cols="170, *">
<FRAME name=menu src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/index/menu" frameBorder=0 noResize>
<FRAME name=main src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/index/main" frameBorder=0 noResize scrolling=yes>
</FRAMESET>
</FRAMESET>
<noframes>
</noframes>
</HTML>
<?php }} ?>