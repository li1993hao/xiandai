<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:40:57
         compiled from "admin/tpl/othermanagement/center.html" */ ?>
<?php /*%%SmartyHeaderCode:1353684531541e8f19b13314-79408748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5056ea2dc14d84b586fb49bbbeb580294ad2db' => 
    array (
      0 => 'admin/tpl/othermanagement/center.html',
      1 => 1398740014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353684531541e8f19b13314-79408748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'center' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8f19b60913_70108183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8f19b60913_70108183')) {function content_541e8f19b60913_70108183($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>中心简介管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:中心简介管理</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
<div style="padding-left:30px;border-bottom:2px #333333 solid;height:30px; ">
	<div style="color:red;font-size:25px;height:30px;border-bottom:2px red solid; line-height:30px; float:left;">
		天津外国语大学就业指导中心简介
	</div>
	<div style="float:right;height:26px;width:80px; padding:2px 20px;">
		<a href ="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Editcenterintroduction" >
			编辑
		</a>
	</div>
</div>

<div style="padding:10px 30px;height:20px;font-size:14px;">
	修改时间:<?php echo $_smarty_tpl->tpl_vars['center']->value['ci_modify'];?>
&nbsp;&nbsp;
	浏览次数:<?php echo $_smarty_tpl->tpl_vars['center']->value['ci_browse'];?>
&nbsp;&nbsp;
	分享次数:<?php echo $_smarty_tpl->tpl_vars['center']->value['ci_share'];?>
&nbsp;&nbsp;
</div>
<div style="padding:10px 30px;font-size:14px;">
	<p>
		<?php echo $_smarty_tpl->tpl_vars['center']->value['ci_content'];?>

	</p>
</div>
</body>
</html><?php }} ?>