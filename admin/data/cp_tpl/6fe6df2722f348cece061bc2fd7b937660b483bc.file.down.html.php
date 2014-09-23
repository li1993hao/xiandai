<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:38:58
         compiled from "admin/tpl/othermanagement/down.html" */ ?>
<?php /*%%SmartyHeaderCode:1360485872541e8ea2b12386-17984093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe6df2722f348cece061bc2fd7b937660b483bc' => 
    array (
      0 => 'admin/tpl/othermanagement/down.html',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1360485872541e8ea2b12386-17984093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'downlist' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8ea2bd2c45_43427196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8ea2bd2c45_43427196')) {function content_541e8ea2bd2c45_43427196($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/other/other.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>下载管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:下载管理</TD></TR>
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
<div style="padding-left:40px;background-color:white;width:100px;height:30px; ">
<a href ="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Adddown" >
添加新文件</a>
</div>
<div>
<?php if ($_smarty_tpl->tpl_vars['downlist']->value['list']=="0"){?>没有数据
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['downlist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:20px;background-color:white;width:400px;height:150px; float:left">
	<div class = "<?php if ($_smarty_tpl->tpl_vars['re']->value['dc_istop']==''||$_smarty_tpl->tpl_vars['re']->value['dc_istop']=="0000-00-00 00:00:00"){?> disable <?php }else{ ?> enable <?php }?>">
		<div style="height:20px; width:400px; text-align: right; ">
    		<a  style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Editdown/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_id'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这个文件吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Getdownlist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['dc_istop']==''||$_smarty_tpl->tpl_vars['re']->value['dc_istop']=="0000-00-00 00:00:00"){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Getdownlist/do/top/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Getdownlist/do/canceltop/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
				<div style="width:370px;height:30px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_title'];?>
（<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_size'];?>
）</div>
				<div style="width:370px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_create'];?>
</div>
				<div style="width:370px; height:30px;">浏览:<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_browse'];?>
&nbsp;&nbsp;下载:<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_download'];?>
 &nbsp;&nbsp;分享:<?php echo $_smarty_tpl->tpl_vars['re']->value['dc_share'];?>
</div>
		</div>

	</div>
</div>
<?php } ?>
<?php }?>

<div style="clear: both;"></div>
</div>
<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['downlist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/Othermanagement/Getdownlist/"),$_smarty_tpl);?>


</body>
</html><?php }} ?>