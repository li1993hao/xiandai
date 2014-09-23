<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:44:21
         compiled from "admin/tpl/user/rolelist.htm" */ ?>
<?php /*%%SmartyHeaderCode:342437292541e8fe599e233-16750162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cf6314341b922d935b18bcc3c7cc3143941de77' => 
    array (
      0 => 'admin/tpl/user/rolelist.htm',
      1 => 1397443490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342437292541e8fe599e233-16750162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'rolelist' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8fe5a45aa2_04694168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8fe5a45aa2_04694168')) {function content_541e8fe5a45aa2_04694168($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
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
  	<TR height=28><TD background=images/title_bg1.jpg>当前位置:角色管理</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div id="info" style=" margin-left:10px;">
<font color="#CC0000"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font>
<table id="mytable" cellspacing="0" >  
  <tr>  
    <th scope="col" width="50px" style="border-left:1px solid #adceff;" >角色id</th>  
    <th scope="col" width="150px" >用户名</th> 
    <th scope="col" width="400px" >可用权限</th>   
    <th scope="col" width="250px" >操作</th>
  </tr>  
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['name'] = 'rl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rolelist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total']);
?>
  <tr >  
   	
    <td style="border-left:1px solid #adceff;" ><?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_name'];?>
</td>
    <td>
    	<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
    	<?php echo $_smarty_tpl->tpl_vars['res']->value['rs_name'];?>
[<?php echo $_smarty_tpl->tpl_vars['res']->value['rs_class'];?>
]&nbsp;&nbsp;
    	<?php } ?>
    </td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_id']==1){?>
		不能对此角色进行操作
		<?php }else{ ?>
		&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['is_use']==1){?>
		[<a onClick="return confirm('确认要删除角色：<?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_name'];?>
有人使用？');" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/rolelist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_id'];?>
">删除</a>]
		<?php }else{ ?>
		[<a onClick="return confirm('确认要删除角色：<?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_name'];?>
？');" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/rolelist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_id'];?>
">删除</a>]
		<?php }?>
		&nbsp;&nbsp;
		[<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/modifyrole/id/<?php echo $_smarty_tpl->tpl_vars['rolelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_id'];?>
" >修改</a>]
		<?php }?>
	</td>
  </tr>  
  <?php endfor; else: ?>
  <tr >
    <th class="spec" colspan="5">暂无用户！</td>
  </tr>
  <?php endif; ?>
</table>  
</div>


</body>
</html>
<?php }} ?>