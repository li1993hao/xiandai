<?php /* Smarty version Smarty-3.1.14, created on 2014-09-22 11:01:21
         compiled from "admin/tpl/stat/feedback.htm" */ ?>
<?php /*%%SmartyHeaderCode:1930737460541f91014e5ad2-17115552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af529e56c2470ab7500b306e41eb7f990209ff19' => 
    array (
      0 => 'admin/tpl/stat/feedback.htm',
      1 => 1401075526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1930737460541f91014e5ad2-17115552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'avg' => 0,
    'feedbackList' => 0,
    'platform' => 0,
    'start' => 0,
    'end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541f91015da357_24301624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541f91015da357_24301624')) {function content_541f91015da357_24301624($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>意见反馈</title>
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
/common/admin/images/title_bg1.jpg">当前位置:意见反馈</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div id="stat" style="margin-left:20px;">
	<form id="form1"   target="_self" name="form1" method="post" action="" >
		用户名:
		<select name="platform" id="platform"> 
		<option value="0" selected="selected" >不限</option>
		<option value="1" >web</option>
		<option value="2" >android</option>
		<option value="3" >ios</option>
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
		<p>
		反馈人数：<?php echo $_smarty_tpl->tpl_vars['avg']->value['total'];?>
 &nbsp; <br/>平均得分(界面/信息/功能)： <?php echo $_smarty_tpl->tpl_vars['avg']->value['fb_ui_avg'];?>
 / <?php echo $_smarty_tpl->tpl_vars['avg']->value['fb_info_avg'];?>
 / <?php echo $_smarty_tpl->tpl_vars['avg']->value['fb_fun_avg'];?>
 <br/><br/>
		</p>
		
		<?php if (isset($_smarty_tpl->tpl_vars['feedbackList']->value)){?>
		<table id="mytable" cellspacing="0" >  
		  <tr>  
		    <th scope="col" width="30px" style="border-left:1px solid #adceff;" >序号</th>  
		    <th scope="col" width="50px" >平台</th>
		    <th scope="col" width="50px" >版本</th>  
		    <th scope="col" width="170px" >评分(界面/信息/功能)</th>
		    <th scope="col" width="400px" >用户评价</th>
		    <th scope="col" width="150px" >评价者IP</th>  
		    <th scope="col" width="150px" >评价时间</th>     
		  </tr>  
		  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['name'] = 'fbl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['feedbackList']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fbl']['total']);
?>
		  <tr>  
		    <td style="border-left:1px solid #adceff;" ><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['fbl']['iteration'];?>
</td>
		    <td>
		    	<?php if ($_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_platform']==1){?>
		    	web
		    	<?php }elseif($_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_platform']==2){?>
		    	android
		    	<?php }elseif($_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_platform']==3){?>
		    	ios
		    	<?php }?>
		    </td>
		    <td>
		    	<?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_version_num'];?>

		    </td>
		    <td>
		    	<span <?php if ($_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_ui']<3){?>style="color:red;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_ui'];?>
分</span>/
		    	<span <?php if ($_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_info']<3){?>style="color:red;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_info'];?>
分</span>/
		    	<span <?php if ($_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_fun']<3){?>style="color:red;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_fun'];?>
分</span>
		    </td>
		    <td>
		    	标题：<?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_title'];?>

		    	<br/>
		    	详情：<?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_content'];?>

		    </td>
		    <td>
		    	<?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_ip'];?>

		    </td>
		    <td>
		    	<?php echo $_smarty_tpl->tpl_vars['feedbackList']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['fbl']['index']]['fb_time'];?>

		    </td>
		  </tr>  
		  <?php endfor; else: ?>
		  <tr >
		    <th class="spec" colspan="6">暂无记录</td>
		  </tr>
		  <?php endif; ?>
		</table>  
		<br/>
		<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['platform']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['start']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['end']->value)===null||$tmp==='' ? "0" : $tmp);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['feedbackList']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/stat/feedback/platform/".$_tmp1."/start/".$_tmp2."/end/".$_tmp3),$_smarty_tpl);?>

		<?php }?>
</div>
</body>
</html>
<?php }} ?>