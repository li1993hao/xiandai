<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 12:56:09
         compiled from "admin\tpl\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2930543f4fe9272677-96072894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e846ded48b1b077140bc7e126bf51ddc6d08b39e' => 
    array (
      0 => 'admin\\tpl\\index\\index.htm',
      1 => 1413103351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2930543f4fe9272677-96072894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f4fe930ec84_11447236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f4fe930ec84_11447236')) {function content_543f4fe930ec84_11447236($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN">
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
/manxiandai.php/index/header" frameBorder=0 noResize scrolling=no>
<FRAMESET cols="170, *">
<FRAME name=menu src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/index/menu" frameBorder=0 noResize>
<FRAME name=main src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/index/main" frameBorder=0 noResize scrolling=yes>
</FRAMESET>
</FRAMESET>
<noframes>
</noframes>
</HTML>
<?php }} ?>