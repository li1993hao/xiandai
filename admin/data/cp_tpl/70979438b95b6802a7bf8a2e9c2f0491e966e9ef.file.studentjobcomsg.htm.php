<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:41:54
         compiled from "admin/tpl/studentjobinfo/studentjobcomsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:612970074541e8f5287ed26-16298817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70979438b95b6802a7bf8a2e9c2f0491e966e9ef' => 
    array (
      0 => 'admin/tpl/studentjobinfo/studentjobcomsg.htm',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612970074541e8f5287ed26-16298817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'alist' => 0,
    'qi' => 0,
    're' => 0,
    'ban' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8f52999249_71276023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8f52999249_71276023')) {function content_541e8f52999249_71276023($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>学生就业通讯管理</title>
<style type="text/css">
<!--
.enable{
	background-color:#FFC1C1;
	width:400px;
	height:150px;
}
.disable{
	background-color:#E3E0D5;
	width:400px;
	height:150px;
}

-->

</style>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:学生就业通讯管理</TD></TR>
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
<?php $_smarty_tpl->tpl_vars["qi"] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars["ban"] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>

<?php if ($_smarty_tpl->tpl_vars['qi']->value!=$_smarty_tpl->tpl_vars['re']->value['id']){?>
<?php $_smarty_tpl->tpl_vars["qi"] = new Smarty_variable($_smarty_tpl->tpl_vars['re']->value['id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["ban"] = new Smarty_variable(0, null, 0);?>
<div style="clear:both"></div>
<div style=" margin:20px; height:30px; line-height:30px; border-bottom:2px solid;">
	<div style = " width:50px; height:30px; line-height:30px; padding: 0 10px; border-bottom:2px solid red; color:red; float:left;" >
		第<?php echo $_smarty_tpl->tpl_vars['re']->value['p_number'];?>
期
	</div>
	<div style="float:right; margin-right:20px;">
		<a href = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getstudentjobcomsglist/do/delqi/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['id'];?>
">删除</a>
	</div>
	
</div>
	<?php if ($_smarty_tpl->tpl_vars['re']->value['layoutid']==''){?>
	<div style=" margin-left:30px;">
		没有版面~
	</div>
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ban']->value!=$_smarty_tpl->tpl_vars['re']->value['layoutid']){?>
<?php $_smarty_tpl->tpl_vars["ban"] = new Smarty_variable($_smarty_tpl->tpl_vars['re']->value['layoutid'], null, 0);?>
<div style="clear:both"></div>
<div style=" margin:10px 25px; height:25px; line-height:25px; border-bottom:1px dotted #333333; ">
	<div style = " width:40px; height:25px; line-height:25px; padding: 0 10px;  color:red; float:left;" >
	第<?php echo $_smarty_tpl->tpl_vars['re']->value['l_number'];?>
版
	</div>
	<div style="float:right; width:40px;">
		<a href = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getstudentjobcomsglist/do/delban/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['layoutid'];?>
">删除</a>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['re']->value['a_id']==''){?>
	<div style=" margin-left:35px;">
		此版面没有文章~
	</div>
	
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['re']->value['a_id']!=''){?>
<div style="  padding-left:30px;padding-top:20px;background-color:white;width:400px;height:150px; float:left">
	<div <?php if ($_smarty_tpl->tpl_vars['re']->value['a_top']==''||$_smarty_tpl->tpl_vars['re']->value['a_top']=="0000-00-00 00:00:00"){?>class="disable"<?php }else{ ?>class="enable"<?php }?> >
		<div style="heig  ht:20px; width:400px; text-align: right; ">
    		<a target="top" style="line-height:20px; height: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/periodicals/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['a_id'];?>
">查看详情</a>
			&nbsp;&nbsp;
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/editstujcomsg/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['a_id'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这条学生就业通讯吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getstudentjobcomsglist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['a_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['a_top']==''){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getstudentjobcomsglist/do/up/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['a_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getstudentjobcomsglist/do/cancelup/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['a_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380px; text-align:left;" >
			<?php if ($_smarty_tpl->tpl_vars['re']->value['pic_id']==''){?>
				<div style="width:370px;">标题:<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['a_title'],20);?>
</div>
				<div style="width:370px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['a_time'];?>
</div>
				<div style="width:370px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['a_scan'];?>
&nbsp;&nbsp; 分享次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['a_share'];?>
</div>
			<?php }else{ ?>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<img style="max-width:100px;max-height:110px;" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['re']->value['pic_link'];?>
" />
				</div>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<div style="width:220px;">标题:<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['a_title'],20);?>
</div>
					<div style="width:220px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['a_time'];?>
</div>
					<div style="width:220px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['a_scan'];?>
&nbsp;&nbsp; 分享次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['a_share'];?>
</div>
				</div>
			<?php }?>
		</div>

	</div>
</div>
<?php }?>
<?php } ?>
<div style="clear: both;"></div>

<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['alist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/studentjobinfo/Getstudentjobcomsglist/"),$_smarty_tpl);?>

</body>
</html><?php }} ?>