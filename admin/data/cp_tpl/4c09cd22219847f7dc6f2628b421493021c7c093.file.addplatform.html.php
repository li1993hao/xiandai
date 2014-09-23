<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:40:09
         compiled from "admin/tpl/version/addplatform.html" */ ?>
<?php /*%%SmartyHeaderCode:631046286541e8ee94c67d5-51148079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c09cd22219847f7dc6f2628b421493021c7c093' => 
    array (
      0 => 'admin/tpl/version/addplatform.html',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '631046286541e8ee94c67d5-51148079',
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
  'unifunc' => 'content_541e8ee9517d29_35838588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8ee9517d29_35838588')) {function content_541e8ee9517d29_35838588($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>添加平台</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:添加平台</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
  	
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                              
                                <form id="form1" enctype="multipart/form-data"  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Addplatform" >
                                   <tr>
									<td width="107" height="30"><div align="right"></div></td>
									<td height="40" colspan="2">
										<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
									</td>
								  </tr>
                                   
                                  <tr>
                                    <td width="107" height="30"><div align="center">平台名称:</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input id="name" type="text" name="name" size="35" id="name" class="inputcss" /><font style="color:red;size:20px">(必填)</font></td>
                                  </tr>
                                  <tr>
                                    <td width="107" height="30"><div align="center">关键字:</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input id="key" type="text" name="key" id="key" size="35" class="inputcss" /><font style="color:red;size:20px">(可选)</font></td>
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