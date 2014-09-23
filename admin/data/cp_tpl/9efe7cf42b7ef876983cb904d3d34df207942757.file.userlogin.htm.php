<?php /* Smarty version Smarty-3.1.14, created on 2014-09-22 11:01:17
         compiled from "admin/tpl/stat/userlogin.htm" */ ?>
<?php /*%%SmartyHeaderCode:1207914855541f90fd50dd65-35463573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9efe7cf42b7ef876983cb904d3d34df207942757' => 
    array (
      0 => 'admin/tpl/stat/userlogin.htm',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1207914855541f90fd50dd65-35463573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'userList' => 0,
    'result' => 0,
    'logList' => 0,
    'userid' => 0,
    'start' => 0,
    'end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541f90fd5bc453_62822606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541f90fd5bc453_62822606')) {function content_541f90fd5bc453_62822606($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
	$(function() {
		
		$("#start").focus(function(){
			
			WdatePicker({
					dateFmt:'yyyy-MM-dd',
					maxDate:'#F{$dp.$D(\'end\')||\'2099-01-01\'}'
			});
		});
		$("#end").focus(function(){
			
				WdatePicker({
					dateFmt:'yyyy-MM-dd',
					minDate:'#F{$dp.$D(\'start\')}',
					maxDate:'2099-01-01'	
				});
		});
		
		
		
		$("#form1").submit( function () {
			$("#result").val("");
			
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
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:用户登录信息统计</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div id="stat" style="margin-left:20px;">
	<form id="form1"   target="_self" name="form1" method="post" action="" >
		用户名:
		<select name="user" id="user"> 
		<option value="0" selected="selected" >不限</option>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ul'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['name'] = 'ul';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ul']['total']);
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ul']['index']]['user_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ul']['index']]['user_name'];?>
[<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ul']['index']]['user_realname'];?>
]</option>
		<?php endfor; endif; ?>
		</select>
		
		&nbsp;
		时间段:<input id="start" name="start" class="Wdate" type="text"  />
		&nbsp;至&nbsp;
		<input id="end" name="end" class="Wdate" type="text"  />
		&nbsp;
		<input name="submit" type="submit" value="查询" />
		&nbsp;
	</form>
	<font color="#CC0000" id="result"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font>
</div>
<div id="info" style=" margin-top:20px; margin-left:10px;">
	
		<?php if (isset($_smarty_tpl->tpl_vars['logList']->value)){?>
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
		   	
		    <td style="border-left:1px solid #adceff;" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['logList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ll']['index']]['user_name'])===null||$tmp==='' ? "已删除" : $tmp);?>
[<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ll']['index']]['user_realname'])===null||$tmp==='' ? '' : $tmp);?>
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
		<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userid']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['start']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['end']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['logList']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/stat/userlogin/userid/".$_tmp1."/start/".$_tmp2."/end/".$_tmp3),$_smarty_tpl);?>

		<?php }?>
</div>
</body>
</html>
<?php }} ?>