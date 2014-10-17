<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 11:29:23
         compiled from "admin\tpl\frontuser\companydegree.html" */ ?>
<?php /*%%SmartyHeaderCode:2143254408d138a79a8-96307912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0def6d7593d21a6df39e209afe0b01ec7b0ba3e' => 
    array (
      0 => 'admin\\tpl\\frontuser\\companydegree.html',
      1 => 1413103351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2143254408d138a79a8-96307912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54408d13a27e66_26469751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54408d13a27e66_26469751')) {function content_54408d13a27e66_26469751($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<style type="text/css">/* CSS Document */   
#info th {  
 border-right: 1px solid #adceff;  
 border-bottom: 1px solid #adceff;  
 border-top: 1px solid #adceff;  
 letter-spacing: 2px;  
 text-transform: uppercase;  
 text-align: left;  
 padding: 6px 6px 6px 12px;  
 background: #f4f7fc;  
}  
#info td {  
 border-right: 1px solid #adceff;  
 border-bottom: 1px solid #adceff;  
 background: #fff;  
 font-size:11px;  
 padding: 6px 6px 6px 12px;  
 
}  
#info th.spec {  
 border-left: 1px solid #adceff;  
 border-top: 0;  
 background: #fff;   
}  
</style> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#form1").submit( function () {
			//alert("ss");
			$("#result").val("");
			//alert("22");
			//alert($("#student").val());
			if($("#student").val() == ""){
				//alert( $("#student").val());
				$("#result").text("请选择全部学生信息级别要求！");
				$("#student").focus();
				return false;
			} 
			//alert($("#recruit").val());
			if($("#recruit").val()== ""){
				$("#result").text("请选择发布招聘信息级别要求！");
				$("#recruit").focus();
				return false;
			}
			if($("#jobfair").val()== ""){
				$("#result").text("请选择预定招聘会级别要求！");
				$("#jobfair").focus();
				return false;
			}
			if($("#recruitfree").val()== ""){
				$("#result").text("请选择招聘信息免审核级别要求！");
				$("#recruitfree").focus();
				return false;
			}
			return true;
		});
	});
</script>
<title>企业信用等级管理</title>
</head>
<body>
	<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  		<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:企业信用等级管理</TD></TR>
  		<TR><TD bgColor=#b1ceef height=1></TD></TR>
  		<TR height=20>
    		<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
		</TR>
	</TABLE>
	<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
	<div id="info" style=" margin-top:20px; margin-left:10px;">
	<form id="form1" target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/frontuser/Companydegree">
		<table id="mytable" cellspacing="0" >
			<tr>  
		    	<th scope="col" width="50px" style="border-left:1px solid #adceff;text-align:center;" >权限</th>  
		    	<th scope="col" width="130px" style="text-align:center;">全部学生信息</th> 
		    	<th scope="col" width="130px" style="text-align:center;">发布招聘信息</th>   
		    	<th scope="col" width="130px" style="text-align:center;">预定招聘会</th>
		    	<th scope="col" width="130px" style="text-align:center;">招聘信息免审核</th>
		  </tr> 
		  <tr>
		  	<td style="border-left:1px solid #adceff; text-align:center;">
		  		级别要求
		  	</td>
		  	<td style="text-align:center;">
		  		<select id="student" name="student">
					<option value="" selected="selected">请选择</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['allStudentinfo']==1){?> selected="selected"<?php }?> >1星</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['allStudentinfo']==2){?> selected="selected"<?php }?>>2星</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['allStudentinfo']==3){?> selected="selected"<?php }?>>3星</option>
					<option value="4" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['allStudentinfo']==4){?> selected="selected"<?php }?>>4星</option>
					<option value="5" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['allStudentinfo']==5){?> selected="selected"<?php }?>>5星</option>
				</select>
		  	</td>
		  	<td style="text-align:center;">
		  		<select id="recruit" name="recruit">
					<option value="" selected="selected">请选择</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['publishRecruit']==1){?> selected="selected"<?php }?>>1星</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['publishRecruit']==2){?> selected="selected"<?php }?>>2星</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['publishRecruit']==3){?> selected="selected"<?php }?>>3星</option>
					<option value="4" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['publishRecruit']==4){?> selected="selected"<?php }?>>4星</option>
					<option value="5" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['publishRecruit']==5){?> selected="selected"<?php }?>>5星</option>
				</select>
		  	</td>
		  	<td style="text-align:center;">
		  		<select id="jobfair" name="jobfair">
					<option value="" selected="selected">请选择</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['reserveJobfair']==1){?> selected="selected"<?php }?>>1星</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['reserveJobfair']==2){?> selected="selected"<?php }?>>2星</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['reserveJobfair']==3){?> selected="selected"<?php }?>>3星</option>
					<option value="4" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['reserveJobfair']==4){?> selected="selected"<?php }?>>4星</option>
					<option value="5" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['reserveJobfair']==5){?> selected="selected"<?php }?>>5星</option>
				</select>
		  	</td>
		  	<td style="text-align:center;">
		  		<select id="recruitfree" name="recruitfree">
					<option value="" selected="selected">请选择</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['recruitAuditFree']==1){?> selected="selected"<?php }?>>1星</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['recruitAuditFree']==2){?> selected="selected"<?php }?>>2星</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['recruitAuditFree']==3){?> selected="selected"<?php }?>>3星</option>
					<option value="4" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['recruitAuditFree']==4){?> selected="selected"<?php }?>>4星</option>
					<option value="5" <?php if ($_smarty_tpl->tpl_vars['detail']->value['ds']['recruitAuditFree']==5){?> selected="selected"<?php }?>>5星</option>
				</select>
		  	</td>
		  </tr> 
		</table>
		<div style="margin:20px 0 20px 0px">
		  	<input id="submit" name="submit" type="submit" value="保存" />
		</div>
		</from>
	</div>
</body>
</html><?php }} ?>