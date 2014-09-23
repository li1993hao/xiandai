<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:41:13
         compiled from "admin/tpl/west/newslist.htm" */ ?>
<?php /*%%SmartyHeaderCode:1001196465541e8f29eb11e0-94281494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28e3dc56828e3e323fa16528017c8b82064e3c77' => 
    array (
      0 => 'admin/tpl/west/newslist.htm',
      1 => 1399962642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001196465541e8f29eb11e0-94281494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'infoList' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8f2a0362a8_01453097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8f2a0362a8_01453097')) {function content_541e8f2a0362a8_01453097($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>基层就业动态</title>
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
/common/admin/images/title_bg1.jpg">当前位置: 基层就业动态</TD></TR>
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

<?php if ($_smarty_tpl->tpl_vars['infoList']->value['list']=="0"){?>没有数据
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infoList']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:20px;background-color:white;width:400px;height:150px; float:left">
	<div <?php if ($_smarty_tpl->tpl_vars['re']->value['ww_isup']==''){?> class="disable" <?php }else{ ?> class="enable" <?php }?> >
		<div style="height:20px; width:400px; text-align: right; ">
    		<a target="top" style="line-height:20px; height: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_id'];?>
">查看详情</a>
			&nbsp;&nbsp;
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/modify/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_id'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这条信息吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/newslist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['ww_isup']==''){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/newslist/do/up/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/newslist/do/cancelup/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			<?php if ($_smarty_tpl->tpl_vars['re']->value['pic_id']==''){?>
				<div style="width:370px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_title'];?>
</div>
				<div style="width:370px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_time'];?>
</div>
				<div style="width:370px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_read'];?>
&nbsp;&nbsp; 分享次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_share'];?>
</div>
			<?php }else{ ?>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<img style="max-width:100px;max-height:110px;" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['re']->value['pic_link'];?>
" />
				</div>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<div style="width:220px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_title'];?>
</div>
					<div style="width:220px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_time'];?>
</div>
					<div style="width:220px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_read'];?>
&nbsp;&nbsp; 分享次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['ww_share'];?>
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
<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['infoList']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/west/newslist/"),$_smarty_tpl);?>


</body>
</html><?php }} ?>