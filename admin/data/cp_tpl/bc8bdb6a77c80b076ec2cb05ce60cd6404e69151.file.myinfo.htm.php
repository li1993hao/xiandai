<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:09:54
         compiled from "admin/tpl/account/myinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:2037205760541e87d2a80376-24997733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc8bdb6a77c80b076ec2cb05ce60cd6404e69151' => 
    array (
      0 => 'admin/tpl/account/myinfo.htm',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037205760541e87d2a80376-24997733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'userInfo' => 0,
    'result' => 0,
    'logList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e87d2b0c236_39974864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e87d2b0c236_39974864')) {function content_541e87d2b0c236_39974864($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript">
	$(function() {
		$("#form1").submit( function () {
			$("#result").val("");
			if($("#user").val() == ""){
				$("#user").focus();
				$("#result").text("标题不能为空！");
				return false;
			}
			
			if($("#pw").val() != $("#repw").val()){
				$("#pw").focus();
				$("#result").text("两次密码不一致！");
				return false;
			}
			//alert($("#newssort").val());
			if($("#realname").val() == ""){
				$("#realname").focus();
				$("#result").text("真实姓名不能为空！");
				return false;
			}
			
			
			if($("#role").val()==""){
				$("#role").focus();
				$("#result").text("请选择用户角色！");
				return false;
			}
			return true;
		} );		
	});
</script>
</head>
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
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background=images/title_bg1.jpg>当前位置:用户信息</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
<div id="info" style=" margin-left:10px;">

  <p>
  	<label>
  		用户账号：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userInfo']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>

  	</label>
  </p>
  <br />
   
  
  <p>
  <form id="form1" target="_self" name="form1" method="post" action="">
  <label>真实姓名：
  	<input type="text" name="realname" id="realname" style="width:150px" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userInfo']->value['user_realname'])===null||$tmp==='' ? '' : $tmp);?>
"  />
  	<input type="submit" name="Submit" value="提交" />
	<font id="result" color="#CC0000"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font>
  </label>
  </form>
  </p>
  <br />
  <p>
    <label>用户角色：	
	<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['role_name'];?>

    </label>
  </p>
  <br />
	<hr />

	近期登陆情况：	
		<table id="mytable" cellspacing="0" >  
		  <tr>  
		    <th scope="col" width="200px" style="border-left:1px solid #adceff;" >用户名[真实姓名]</th>  
		    <th scope="col" width="200px" >登陆时间</th> 
		    <th scope="col" width="200px" >登陆ip</th>   
		  </tr>  
		  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ll'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['name'] = 'll';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['logList']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ll']['total']);
?>
		  <tr >  
		   	
		    <td style="border-left:1px solid #adceff;" ><?php echo $_smarty_tpl->tpl_vars['logList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ll']['index']]['user_name'];?>
[<?php echo $_smarty_tpl->tpl_vars['logList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ll']['index']]['user_realname'];?>
]</td>
		    <td><?php echo $_smarty_tpl->tpl_vars['logList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ll']['index']]['log_time'];?>
</td>
		    <td>
		    	<?php echo $_smarty_tpl->tpl_vars['logList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ll']['index']]['log_ip'];?>

		    </td>
		  </tr>  
		  <?php endfor; else: ?>
		  <tr >
		    <th class="spec" colspan="3">暂无记录</td>
		  </tr>
		  <?php endif; ?>
		</table>  
		<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['logList']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/account/myinfo/"),$_smarty_tpl);?>

</div>
</body>
</html>
<?php }} ?>