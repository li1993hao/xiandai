<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:09:50
         compiled from "admin/tpl/index/main.htm" */ ?>
<?php /*%%SmartyHeaderCode:79841963541e87ce1a4477-89231038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b281598d5022ac1dd647525dba4bb675daebade1' => 
    array (
      0 => 'admin/tpl/index/main.htm',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79841963541e87ce1a4477-89231038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'roleid' => 0,
    'corpmsg' => 0,
    'jobmsg' => 0,
    'commsg' => 0,
    'calendar' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e87ce2d71e8_42181261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e87ce2d71e8_42181261')) {function content_541e87ce2d71e8_42181261($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:首页 </TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
<center><h1>欢迎进入管理系统！</h1></center>
<?php if ($_smarty_tpl->tpl_vars['roleid']->value==1){?>
<h3 style="border-bottom:2px solid #000000;margin:10px;color:red">待办事项</h3>
<?php if ($_smarty_tpl->tpl_vars['corpmsg']->value!=0){?>
	<div style="margin-left:15px">您有<font color="red"><?php echo $_smarty_tpl->tpl_vars['corpmsg']->value;?>
</font>条未审核的招聘信息 &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/verifyinfo"><font color="red">查看</font></a></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jobmsg']->value!=0){?>
	<div style="margin-left:15px">您有<font color="red"><?php echo $_smarty_tpl->tpl_vars['jobmsg']->value;?>
</font>条未审核的招聘会信息 &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/verifyinfo"><font color="red">查看</font></a></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['commsg']->value!=0){?>
	<div style="margin-left:15px">当前有<font color="red"><?php echo $_smarty_tpl->tpl_vars['commsg']->value;?>
</font>家新注册的企业需要审核&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/getcompanyuser"><font color="red">查看</font></a></div>
<?php }?>

<div style="width:100%;height:auto;float:left">
<?php if ($_smarty_tpl->tpl_vars['calendar']->value[0]!=''){?>
<h3 style="border-bottom:2px solid #000000;margin:10px;color:red">今日工作</h3>

<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calendar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;background-color:white;width:200px;height:150px; float:left">
	<div style="background-color:#FFC1C1;width:200px;height:130px;">
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			<div style="width:200px;">标题:<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/calendar/calendar"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['cal_name'],12,'');?>
</a></div>
			<div style="width:200px;">时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['cal_opentime'];?>
</div>
			<div style="width:200px;">地点:<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['cal_addr'],12,'');?>
</div>
			<div style="width:200px;">联系人:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['re']->value['cal_contact'])===null||$tmp==='' ? "未填写" : $tmp);?>
</div>
			<div style="width:200px;">联系人电话:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['re']->value['cal_tel'])===null||$tmp==='' ? "未填写" : $tmp);?>
</div>
			<div style="width:200px;">学生助理:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['re']->value['cal_stu'])===null||$tmp==='' ? "未填写" : $tmp);?>
</div>
			<div style="width:200px;">学生助理电话:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['re']->value['cal_assis_tel'])===null||$tmp==='' ? "未填写" : $tmp);?>
</div>
		</div>
	</div>
</div>
<?php } ?>
<?php }?>
</div>
<?php }?>

<h3 style="border-bottom:2px solid #000000;margin:20px 10px 10px;color:red">系统信息</h3>
<div style="margin-left:15px">当前版本：1.6.2</div><br/>
<div style="margin-left:15px">系统更新记录：</div>
<div style="margin-left:15px">2013-12-04:系统统计中的用户反馈增加了平均得分的统计，增加对用户ip的统计，并限制每个ip一天只能提交一次。</div>
<div style="margin-left:15px">2013-12-18:增加了工作日历，可以将招聘会信息添加到工作日历中，最高权限可编辑查看；可以为学生就业简报添加附件；添加完招聘信息后可以将其推送给客户端</div>
<div style="margin-left:15px">2014-02-28:增加前台企业用户系统：企业可发招聘信息，企业可以查看学生的信息</div>
<div style="margin-left:15px">2014-02-28:增加前台学生用户系统：学生可以收藏招聘信息，并设置是否允许企业查看自己的信息。</div>
<div style="margin-left:15px">2014-02-28:发布一套全新的针对手机等小屏设备的前台ui，当用户使用手机访问网站时，网站会自适应调整ui。</div>
<div style="margin-left:15px">2014-02-28:后台加入了前台用户的管理审核，以及招聘信息的审核功能。</div>
</BODY></HTML><?php }} ?>