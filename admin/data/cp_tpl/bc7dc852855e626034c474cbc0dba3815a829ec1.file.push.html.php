<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 15:47:59
         compiled from "admin\tpl\push\push.html" */ ?>
<?php /*%%SmartyHeaderCode:10114543f782f7a6641-43051596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7dc852855e626034c474cbc0dba3815a829ec1' => 
    array (
      0 => 'admin\\tpl\\push\\push.html',
      1 => 1413103351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10114543f782f7a6641-43051596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f782f84a155_14212215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f782f84a155_14212215')) {function content_543f782f84a155_14212215($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<script type="text/javascript">
	$(function(){
		var max = $("#content").attr('maxlength');
		var val = $("#content").val();
		var cur = val.length;
		if (cur > max){
			$(this).val(val.substring(0,max));
		}
		
		$("#form1").submit( function () {
			if($("#title").val() == ""){
				$("#result").text("标题不能为空！");
				$("#title").focus();
				return false;
			} 
			//alert($("#newssort").val());
			if($("#content").val() == ""){
				$("#result").text("内容不能为空！");
				$("#content").focus();
				return false;
			}
			return true;
		});
	});
</script>
<title>其他消息推送</title>
</head>
<body>
	<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  		<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:推送其他消息</TD></TR>
  		<TR><TD bgColor=#b1ceef height=1></TD></TR>
  		<TR height=20>
    		<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
		</TR>
	</TABLE>
	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
		 <form id="form1" enctype="multipart/form-data"  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/push/pushmobile" >
		 	<tr>
				<td width="107" height="30"><div align="right"></div></td>
				<td height="40" colspan="2">
					<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
				</td>
			</tr>
            <tr>
            	<td width="107" height="30"><div align="right">推送标题：</div></td>
                <td height="40" colspan="2">&nbsp;
                	<input type="text" name="title" id="title" size="35" class="inputcss" />&nbsp;&nbsp;<font color="#ff0000">必填</font></td>
            </tr>
      		<tr>
            	<td width="107" height="30"><div align="right">链接地址：</div></td>
                <td height="40" colspan="2">&nbsp;
                	http://<input type="text" name="url" id="url" size="35" class="inputcss" />&nbsp;&nbsp;<font color="#5085C5">可选</font></td>
            </tr>
            <tr>
            	<td width="107" height="30"><div align="right">推送内容：</div></td>
                <td height="40" colspan="2">&nbsp;
                	<textarea id="content" name="content" rows="5" cols="10" style="width: 57%" maxlength="100"></textarea>
                	<font color="#ff0000">必填(不能超过100个字符)</font>
                </td>
            </tr>
            <tr>
        		<td height="40" colspan="3">
            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	<input id ="submit" name="submit" type="submit" value="提交" style="width:80px;height:30px;"/>
            </td>
    		</tr>
		 </form>
	</table>
</body>
</html><?php }} ?>