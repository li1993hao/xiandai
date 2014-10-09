<?php /* Smarty version Smarty-3.1.14, created on 2014-10-08 16:06:36
         compiled from "admin/tpl/othermanagement/link.html" */ ?>
<?php /*%%SmartyHeaderCode:4576748515434f08cefd8e1-56387427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fabaf132083debf9800e6d6cbf0de6b50acf21a2' => 
    array (
      0 => 'admin/tpl/othermanagement/link.html',
      1 => 1412750553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4576748515434f08cefd8e1-56387427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'school' => 0,
    're' => 0,
    'out' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5434f08d090f92_01972658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5434f08d090f92_01972658')) {function content_5434f08d090f92_01972658($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>学习软件管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:友情链接管理</TD></TR>
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
<div>
<div style="height:30px; margin:10px 20px; border-bottom:2px #333333 solid;" >
	<div style=" margin:0px 20px; font-size:20px; line-height:30px; height:30px;float:left; border-bottom:2px red solid; color:red;">
		校内链接
	</div>
	<div style="float:right;margin:5px 10px 0 ; height:25px; ">
		<a href ="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Addlink" >
			添加链接
		</a>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['school']->value=="0"){?>没有数据
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['school']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:10px;background-color:white;width:400px;height:120px; float:left">
	<div style ="width:400px; height:120px;background-color:#FFC1C1;">
		<div style="height:20px; width:400px; text-align: right; ">
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Editlink/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_id'];?>
">编辑</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这个友情链接吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Getlinklist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_id'];?>
">删除</a>
			&nbsp;&nbsp;
			&nbsp;&nbsp;
		</div>
		<div style="height:80px; margin:10px; width:380; text-align:left;" >
				<div style="float:left;width:360px;height:130px;margin:5px 10px 10px 10px;">
					<div style="width:360px;height:30px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_title'];?>
</div>
					<div style="width:360px; height:30px;">链接地址:<a href="<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['re']->value['fl_url'];?>
</a></div>
				</div>
		</div>

	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>
<div style="height:30px; margin:10px 20px; border-bottom:2px #333333 solid;" >
	<div style=" margin:0px 20px; font-size:20px; line-height:30px; height:30px;float:left; border-bottom:2px red solid; color:red;">
		校外链接
	</div>
</div>
<div >

<?php if ($_smarty_tpl->tpl_vars['out']->value=="0"){?>没有数据
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['out']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:10px;background-color:white;width:400px;height:120px; float:left">
	<div style ="width:400px; height:120px;background-color:#FFC1C1;">
		<div style="height:20px; width:400px; text-align: right; ">
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Editlink/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_id'];?>
">编辑</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这个友情链接吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Getlinklist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_id'];?>
">删除</a>
			&nbsp;&nbsp;
			&nbsp;&nbsp;
		</div>
		<div style="height:80px; margin:10px; width:380px; text-align:left;" >
				<div style="float:left;width:360px;height:110px;margin:5px 10px 10px 10px;">
					<div style="width:360px;height:30px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_title'];?>
</div>
					<div style="width:360px; height:30px;">链接地址:<a href="<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_url'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['fl_url'],30);?>
</a></div>
				</div>
		</div>

	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>
</div>
</body>
</html><?php }} ?>