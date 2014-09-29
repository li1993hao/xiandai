<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 20:32:15
         compiled from "admin/tpl/othermanagement/editlink.html" */ ?>
<?php /*%%SmartyHeaderCode:12633685225429514f3e4fa4-96256774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c8431bb4df6df696741656cb1528054faf8210' => 
    array (
      0 => 'admin/tpl/othermanagement/editlink.html',
      1 => 1411993235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12633685225429514f3e4fa4-96256774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'id' => 0,
    'result' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5429514f4452f9_57470765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429514f4452f9_57470765')) {function content_5429514f4452f9_57470765($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>修改友情链接</title>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/xheditor-1.2.1/xheditor-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/xheditor-1.2.1/xheditor_lang/zh-cn.js"></script>
<script type="text/javascript">
$(function() {
	$("#form1").submit( function () {
		
		
		//return false;
		if($("#title").val() == ""){
			$("#result").text("标题不能为空！");
			$("#title").focus();
			return false;
		} 
		//alert($("#newssort").val());
		if($("#url").val() == ""){
			$("#result").text("请填写链接！");
			$("#url").focus();
			return false;
		}
		
		if($("#picstate").val()==1){
			alert("文件上传中，请稍后！");
			return false;
		}
		return true;
	} );
	
});
</script>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:修改友情链接</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
  	
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                              
                                <form id="form1" enctype="multipart/form-data"  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Editlink/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
                                   <tr>
									<td width="107" height="30"><div align="right"></div></td>
									<td height="40" colspan="2">
										<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
									</td>
								  </tr>
                                   
                                  <tr>
                                    <td width="107" height="30"><div align="center">友情链接标题:</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input id="title" type="text" name="title" size="35" id="title" class="inputcss" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['fl_title'];?>
"/><font style="color:red;size:20px">(必填)</font></td>
                                  </tr>
                                  <tr>
                                    <td width="107" height="30"><div align="center">链接地址:</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input id="url" type="text" name="url" id="url" size="35" class="inputcss" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['fl_url'];?>
"/><font style="color:red;size:20px">(必填)</font></td>
                                  </tr>
                              	 
						
						
                                 <tr>
                            <td height="40" colspan="3">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="提交" style="width:60px;" />

                            </td>
                          </tr>
                                 </form>
                             
                            </table>


</body>
</html><?php }} ?>