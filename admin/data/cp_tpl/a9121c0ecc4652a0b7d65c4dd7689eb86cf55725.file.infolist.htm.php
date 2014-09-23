<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:38:38
         compiled from "admin/tpl/jobinfo/infolist.htm" */ ?>
<?php /*%%SmartyHeaderCode:1234207185541e8e8ee24bb5-55303475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9121c0ecc4652a0b7d65c4dd7689eb86cf55725' => 
    array (
      0 => 'admin/tpl/jobinfo/infolist.htm',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234207185541e8e8ee24bb5-55303475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'typeinfo' => 0,
    'result' => 0,
    'keyword' => 0,
    'joblist' => 0,
    're' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8e8f0135e5_28636639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8e8f0135e5_28636639')) {function content_541e8e8f0135e5_28636639($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title><?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
管理</title>
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
.recomenable{
	background-color:#E3EFFB;
	width:400px;
	height:150px;	
}

-->

</style>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
管理</TD></TR>
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
<div style="padding:10px 30px;"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/addinfo/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
">+添加<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
</a></div>
<div style="padding-left:30px;"><font color="#0000FF">推荐：将新闻推荐到首页大图</font></div>
<div>
	<div style="padding-left:30px;padding-top:20px;">
		<form  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
">
			<input type="text" name="keyword" id="keyword" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['keyword']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
			<input type="submit" value="搜索" />
			<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?>
			关键字："<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
",
			<?php }?>
			查询到<?php echo $_smarty_tpl->tpl_vars['joblist']->value['total'];?>
条数据！
		</form>
	</div>
<?php if ($_smarty_tpl->tpl_vars['joblist']->value['total']=="0"){?>
	<div style="padding-left:30px;padding-top:20px;">	
		没有数据
	</div>
<?php }else{ ?>

<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joblist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:20px;background-color:white;width:400px;height:150px; float:left">
	 
	<div <?php if ($_smarty_tpl->tpl_vars['re']->value['ji_isup']==''){?>class="disable"<?php }else{ ?>class="enable"<?php }?> >
		<div <?php if ($_smarty_tpl->tpl_vars['re']->value['ji_recom']!=''){?>class="recomenable"<?php }?> >
		<div style="heig  ht:20px; width:400px; text-align: right; ">
    		<a target="top" style="line-height:20px; height: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">查看详情</a>
			&nbsp;&nbsp;
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/editinfo/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这条招聘信息吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['ji_isup']==''){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
/do/up/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
/do/cancelup/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['ji_recom']==''){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
/do/recom/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">推荐</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
/do/cancelrecom/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
">取消推荐</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			<?php if ($_smarty_tpl->tpl_vars['re']->value['pic_id']==''){?>
				<div style="width:370px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_title'];?>
</div>
				<div style="width:370px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_date'];?>
</div>
				<div style="width:370px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_read'];?>
</div>
			<?php }else{ ?>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<img style="max-width:100px;max-height:110px;" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['re']->value['pic_link'];?>
" />
				</div>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<div style="width:220px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_title'];?>
</div>
					<div style="width:220px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_date'];?>
</div>
					<div style="width:220px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_read'];?>
</div>
				</div>
			<?php }?>
		</div>

	</div>
	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("/manwyjob.php/jobinfo/infolist/infotype/".((string)$_smarty_tpl->tpl_vars['typeinfo']->value['type_code'])."/keyword/".((string)$_smarty_tpl->tpl_vars['keyword']->value), null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("/manwyjob.php/jobinfo/infolist/infotype/".((string)$_smarty_tpl->tpl_vars['typeinfo']->value['type_code']), null, 0);?> 
<?php }?>
<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['joblist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>


</body>
</html><?php }} ?>