<?php /* Smarty version Smarty-3.1.14, created on 2014-10-08 14:43:40
         compiled from "admin/tpl/othermanagement/soft.html" */ ?>
<?php /*%%SmartyHeaderCode:4014095775434dd1ca22b82-68875417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28eb71e1d5eca6360f0adc6e2880e11f3ff59744' => 
    array (
      0 => 'admin/tpl/othermanagement/soft.html',
      1 => 1412750553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4014095775434dd1ca22b82-68875417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'softlist' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5434dd1cafdec8_32528429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5434dd1cafdec8_32528429')) {function content_5434dd1cafdec8_32528429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/other/other.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>快速通道管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:快速通道管理</TD></TR>
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
<div style="padding-left:30px;padding-top:0px;background-color:white;width:100px;height:30px; ">
<a href ="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Addsoft" >添加快速通道</a>
</div>
<div>
<?php if ($_smarty_tpl->tpl_vars['softlist']->value=="0"){?>没有数据
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['softlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:20px;background-color:white;width:400px;height:150px; float:left">
	<div class = "<?php if ($_smarty_tpl->tpl_vars['re']->value['sm_istop']==''||$_smarty_tpl->tpl_vars['re']->value['sm_istop']=="0000-00-00 00:00:00"){?> disable <?php }else{ ?> enable <?php }?>">
		<div style="height:20px; width:400px; text-align: right; ">
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Editsoft/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['sm_id'];?>
">编辑</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这个学习软件吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Getsoftlist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['sm_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['sm_istop']==''||$_smarty_tpl->tpl_vars['re']->value['sm_istop']=="0000-00-00 00:00:00"){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Getsoftlist/do/top/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['sm_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/Othermanagement/Getsoftlist/do/canceltop/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['sm_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			<?php if ($_smarty_tpl->tpl_vars['re']->value['pic_id']==''){?>
				<div style="width:370px;height:30px;"><?php echo $_smarty_tpl->tpl_vars['re']->value['sm_title'];?>
</div>
				<div style="width:370px; height:30px;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['sm_url'],30,'..',true,true);?>
</a></div>
			<?php }else{ ?>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<img style="max-width:100px;max-height:110px;" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['re']->value['pic_link'];?>
" />
				</div>
				<div style="float:left;width:220px;height:110px;margin:10px;">
					<div style="width:200px;height:30px;"><?php echo $_smarty_tpl->tpl_vars['re']->value['sm_title'];?>
</div>
					<div style="width:200px; height:30px;"><a href="<?php echo $_smarty_tpl->tpl_vars['re']->value['sm_url'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['sm_url'],30,'..',true,true);?>
</div>
				</div>
			<?php }?>
		</div>

	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>
</div>
</body>
</html><?php }} ?>