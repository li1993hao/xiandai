<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:40:11
         compiled from "admin/tpl/version/version.html" */ ?>
<?php /*%%SmartyHeaderCode:1625557011541e8eeb5ada08-71949422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88af27d6b7e5911e3f8db8db566fcf9610535a68' => 
    array (
      0 => 'admin/tpl/version/version.html',
      1 => 1399624304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1625557011541e8eeb5ada08-71949422',
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
  'unifunc' => 'content_541e8eeb64ba19_33279944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8eeb64ba19_33279944')) {function content_541e8eeb64ba19_33279944($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/other/other.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>版本管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:版本管理</TD></TR>
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
<div style="padding-left:30px;padding-top:20px;background-color:white;width:300px;height:330px; float:left;">
	<div style="background-color:#FFC1C1;width:300px;height:330px;">
		<div style="height:20px; width:300px; text-align: right; ">
    		<a  style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Editversion/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ID_VERSION'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确定删除这个版本吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Getversion/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ID_VERSION'];?>
">删除</a>
			&nbsp;&nbsp;
		</div>
		<div style="height:210px; margin:10px; width:280; text-align:left;" >
				<div style="width:270px;height:30px;">平台号:<?php echo $_smarty_tpl->tpl_vars['re']->value['NAME_PLATFORM'];?>
</div>
				<div style="width:270px;height:30px;">平台号:<?php echo $_smarty_tpl->tpl_vars['re']->value['NAME_DISP'];?>
</div>
				<div style="width:270px; height:30px;">版本号:<?php echo $_smarty_tpl->tpl_vars['re']->value['NUM_VERSION'];?>
</div>
				<div style="width:270px; height:30px;">版本描述:<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['DESC_VERSION'],30,'..',true,true);?>
</div>
				<div style="width:270px; height:30px;">升级类型:<?php echo $_smarty_tpl->tpl_vars['re']->value['TYPE_UPGRADE'];?>
</div>
				<div style="width:270px; height:30px;">发布状态:
				<?php if ($_smarty_tpl->tpl_vars['re']->value['FLAG_PUBLISH']==1){?>发布
				<?php }else{ ?>未发布
				<?php }?>
				</div>
				<div style="width:270px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['TIME_PUBLISH'];?>
</div>
				<div style="width:270px; height:30px;">下载次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['download_num'];?>
</div>
				<div style="width:270px; height:30px;">APP大小:<?php echo $_smarty_tpl->tpl_vars['re']->value['SIZE_VERSION'];?>
</div>
				<div style="width:270px; height:30px;">下载链接地址:<a href="<?php echo $_smarty_tpl->tpl_vars['re']->value['NAME_FILE'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['NAME_FILE'],20,'..',true,true);?>
</a></div>
		</div>
</div>
<div style="clear: both;"></div>
</div>
<?php } ?>
<?php }?>
</body>
</html><?php }} ?>