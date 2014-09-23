<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:39:46
         compiled from "admin/tpl/stat/sitevisit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1621752911541e8ed2eed091-68071096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf56735b7682c30d50ed1163ad4b13a2f2526df' => 
    array (
      0 => 'admin/tpl/stat/sitevisit.htm',
      1 => 1396319296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621752911541e8ed2eed091-68071096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'visitList' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8ed3043054_62404891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8ed3043054_62404891')) {function content_541e8ed3043054_62404891($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.gvChart-0.1.min.js"></script>
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
<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['visitList']->value)){?>
		gvChartInit();
<?php }?>
		$(function() {
			var order = $("#order").val();
			$("#start").focus(function(){
				if(order == 1){//月
					WdatePicker({
						dateFmt:'yyyy-MM',
						maxDate:'#F{$dp.$D(\'end\')||\'2099-01\'}'
					});
				}else if(order == 2){//年
					WdatePicker({
						dateFmt:'yyyy',
						maxDate:'#F{$dp.$D(\'end\')||\'2099\'}'
					});
					
				}else{//天
					WdatePicker({
						dateFmt:'yyyy-MM-dd',
						maxDate:'#F{$dp.$D(\'end\')||\'2099-01-01\'}'
					});
					
				}
				
			});
			$("#end").focus(function(){
				if(order == 1){//月
					WdatePicker({
						dateFmt:'yyyy-MM',
						minDate:'#F{$dp.$D(\'start\')}',
						maxDate:'2099-01'	
					});
				}else if(order == 2){//日
					WdatePicker({
						dateFmt:'yyyy',
						minDate:'#F{$dp.$D(\'start\')}',
						maxDate:'2099'
					});
				}else{//天
					WdatePicker({
						dateFmt:'yyyy-MM-dd',
						minDate:'#F{$dp.$D(\'start\')}',
						maxDate:'2099-01-01'	
					});
				}
			});
			$("#order").change(function(){
				order = $("#order").val();
				$("#start").val("");
				$("#end").val("");
				
			});
			$("#form1").submit(function(){
				if($("#start").val()==""){
					$("#start").focus();
					$("#result").text("请选择开始日期！");
					return false;
				}
				if($("#end").val()==""){
					
					$("#end").focus();
					$("#result").text("请选择结束日期！");
					return false;
				}
			
			});
			<?php if (isset($_smarty_tpl->tpl_vars['visitList']->value)){?>
	
			if($('#lineChartTable').size() > 0){
				
				$('#lineChartTable').gvChart({
					chartType: 'LineChart',
					gvSettings: {
						vAxis: {title: '访问量'},
						hAxis: {title: '日期'},
						width: 800,
						height: 400,
					}
				});
			}
			<?php }?>
		}); 
</script>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:站点访问统计</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div id="stat" style="margin-left:20px;">
	<form id="form1"   target="_self" name="form1" method="post" action="" >
		查询方式:
		<select name="order" id="order"> 
		<option value="0" selected="selected" >日</option>
		<option value="1" >月</option>
		<option value="2" >年</option>
		</select>
		&nbsp;
		终端类型：
		<select name="terminal" id="terminal"> 
		<option value="5" selected="selected" >全部</option>
		<option value="0" >Web端</option>
		<option value="3" >Android客户端</option>
		<option value="4" >iOS客户端</option>
		</select>
		&nbsp;
		开始时间:<input id="start" name="start" class="Wdate" type="text"  />
		&nbsp;
		结束时间:<input id="end" name="end" class="Wdate" type="text"  />
		&nbsp;
		<input name="submit" type="submit" value="查询" />
		&nbsp;
	</form>
</div>
</br>
<font color="#CC0000" id="result"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font>
</br>
<div id="info" style=" margin-left:10px;">
	
	<?php if (isset($_smarty_tpl->tpl_vars['visitList']->value)){?>
	<table id="mytable" cellspacing="0" style="display:block;float:left;margin-top:20px;">  
	  <tr>  
	    <th scope="col" width="150px" style="border-left:1px solid #adceff;" >时间</th>  
	    <th scope="col" width="150px" >访问量</th> 
	  </tr>  
	  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['vl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['name'] = 'vl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['visitList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['vl']['total']);
?>
	  <tr >
	   	
	    <td style="border-left:1px solid #adceff;" ><?php echo $_smarty_tpl->tpl_vars['visitList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vl']['index']]['date'];?>
</td>
	    <td><?php echo $_smarty_tpl->tpl_vars['visitList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vl']['index']]['result'];?>
</td>
	  </tr>  
	  <?php endfor; else: ?>
	  <tr >
	    <th class="spec" colspan="2">没有结果</td>
	  </tr>
	  <?php endif; ?>
	</table> 
	<div style="float:left; margin-left:20px;">
		
			<table id='lineChartTable'>
				<caption>折线图</caption>
				<thead>
					<tr>
						<th></th>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['name'] = 'vl1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['visitList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['vl1']['total']);
?>
						<th><?php echo $_smarty_tpl->tpl_vars['visitList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vl1']['index']]['date'];?>
</td>
						<?php endfor; endif; ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>曲线</th>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['name'] = 'vl2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['visitList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['vl2']['total']);
?>
						<td><?php echo $_smarty_tpl->tpl_vars['visitList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['vl2']['index']]['result'];?>
</td>
						<?php endfor; endif; ?>
					</tr>
				</tbody>
			</table>
	</div>
	<?php }?>
</div>


</body>
</html>
<?php }} ?>