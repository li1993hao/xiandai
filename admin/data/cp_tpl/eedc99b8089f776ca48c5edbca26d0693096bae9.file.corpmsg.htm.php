<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 10:13:07
         compiled from "admin\tpl\recruit\corpmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:1512854407b33045d07-37284809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eedc99b8089f776ca48c5edbca26d0693096bae9' => 
    array (
      0 => 'admin\\tpl\\recruit\\corpmsg.htm',
      1 => 1413103351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1512854407b33045d07-37284809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'keyword' => 0,
    'corplist' => 0,
    're' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54407b331e1917_81545650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54407b331e1917_81545650')) {function content_54407b331e1917_81545650($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include 'E:\\wamp\\www\\xd\\xiandai\\been/View/plugins\\function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>企业招聘信息管理</title>
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
/common/admin/images/title_bg1.jpg">当前位置:企业招聘信息管理</TD></TR>
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
<div >
	<div style="padding-left:30px;padding-top:20px;">
		<form  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/recruit/getcorpmsglist">
			<input type="text" name="keyword" id="keyword" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['keyword']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
			<input type="submit" value="搜索" />
			<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?>
			关键字："<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
",
			<?php }?>
			查询到<?php echo $_smarty_tpl->tpl_vars['corplist']->value['total'];?>
条数据！
		</form>
	</div>
<?php if ($_smarty_tpl->tpl_vars['corplist']->value['total']=="0"){?>
	<div style="padding-left:30px;padding-top:20px;">	
		没有数据
	</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['corplist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:20px;padding-top:10px;background-color:white;width:400px;height:150px; float:left">
	<div <?php if ($_smarty_tpl->tpl_vars['re']->value['cim_isup']==''||$_smarty_tpl->tpl_vars['re']->value['cim_isup']=="0000-00-00 00:00:00"){?>class="disable"<?php }else{ ?>class="enable"<?php }?> >
		<div style="height:20px; width:400px; text-align: right; ">
    		<a target="top" style="line-height:20px; height: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">查看详情</a>
			&nbsp;&nbsp;
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/recruit/editcorpmsg/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这条招聘信息吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/recruit/getcorpmsglist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['cim_isup']==''||$_smarty_tpl->tpl_vars['re']->value['cim_isup']=="0000-00-00 00:00:00"){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/recruit/getcorpmsglist/do/up/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/recruit/getcorpmsglist/do/cancelup/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			
				<div style="width:370px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_name'];?>
</div>
				<div style="width:370px; height:auto;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_date'];?>
</div>
				<div style="width:370px; height:auto;">职位:
					<?php if ($_smarty_tpl->tpl_vars['re']->value['office']!=''){?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['off'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['off']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['name'] = 'off';
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['re']->value['office']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total']);
?>
							<?php echo $_smarty_tpl->tpl_vars['re']->value['office'][$_smarty_tpl->getVariable('smarty')->value['section']['off']['index']]['office_name'];?>
&nbsp;
						<?php endfor; endif; ?>
					<?php }else{ ?>
						未填写
					<?php }?>
				</div>
				
				<div style="width:370px; height:auto;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_read'];?>
</div>
			
		</div>

	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("/manxiandai.php/recruit/getcorpmsglist/keyword/".((string)$_smarty_tpl->tpl_vars['keyword']->value)."/", null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("/manxiandai.php/recruit/getcorpmsglist", null, 0);?>
<?php }?>
<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['corplist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>


</body>
</html><?php }} ?>