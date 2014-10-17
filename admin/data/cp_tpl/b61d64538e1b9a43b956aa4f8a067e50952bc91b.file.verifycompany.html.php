<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 12:56:27
         compiled from "admin\tpl\frontuser\verifycompany.html" */ ?>
<?php /*%%SmartyHeaderCode:14274543f4ffb680315-49724728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b61d64538e1b9a43b956aa4f8a067e50952bc91b' => 
    array (
      0 => 'admin\\tpl\\frontuser\\verifycompany.html',
      1 => 1413394850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14274543f4ffb680315-49724728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'detail' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f4ffb8168c6_73604622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f4ffb8168c6_73604622')) {function content_543f4ffb8168c6_73604622($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/lightbox/css/lightbox.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/lightbox/js/lightbox-2.6.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
<style>
.company-verify-btn{margin:0px 20px;cursor:pointer;font-size:11px;background:#DBEAF9; border:1px solid #CCC; text-align:center; width:88px;height:20px;float:left;}
.company-verify-btn:hover{background:#FCF1CA;}

.mask{height:100%; width:100%; position:fixed; _position:absolute; top:0; z-index:1000;  opacity:0.5; filter: alpha(opacity=50); background-color:#000; display:none;}
.all-pop-container{width:500px;position:absolute;  left:40px; top:100px;margin-top:10px; margin-left:10px; border-top:#F50 solid 2px; border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC; background:#F0F5FB;z-index:1001; display:none;}
.pop-item{padding:5px 0px; margin:5px 10px;}
.pop-item-title{display:inline-block;width:130px;text-align:right;padding:5px 5px;}
.pop-item-info{display:inline-block;width:300px;padding:5px 5px;}
.pop-form-header{ width:500px; border-bottom:solid #999 1px;}
.pop-form-title{float:left;text-align:left; padding:2px 5px; width:400px; }
.pop-closebtn{ float:right; text-align:right; padding:2px 5px;width:30px;cursor:pointer;  font-size:11px; line-height:20px; color:#000; background:#DBEAF9; border:1px solid #CCC;}
.pop-closebtn:hover{background:#FCF1CA;}
.meau-container{ padding:5px 0px; margin:5px 10px;border-bottom: 1px dotted #DDD;width:480px;height:40px;}
.pop-meau{ font-size:12px; color:#000; text-align:left; width:600px; height:40px;min-height:20px;  float:left;}
.pop-meau-btnok{cursor:pointer;font-size:11px;background:#DBEAF9; border:1px solid #CCC; text-align:center; width:88px;height:20px;float:left;}
.pop-meau-btnok:hover{background:#FCF1CA;}

</style>
	
<script type="text/javascript">
	$(document).ready(function(){
		$("#outdate").focus(function(){
			WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
		});
		$("#verify-pass").click(function(){
			$("#mask").show();
			$("#all-pass-container").show();
		});
		
		$("#verify-not-pass").click(function(){
			$("#mask").show();
			$("#all-not-container").show();
		});
		
		$(".pop-closebtn").click(function(){
			$("#mask").hide();
			$(".all-pop-container").hide();
		});
		
		$("#pop-meau-notok").click(function(){
			var reasontxt = $("#reason").val();
			$.ajax({
				url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/frontuser/Verifyresult",
				data:{id:<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
, type:0, reason:reasontxt},
				type:"POST",
				async:false,
				dataType:"json",
				success:function(data){
					if (data.json.state == 1){
						alert("成功");
						$("#mask").hide();
						$("#all-not-container").hide();
					}else{
						alert("失败");
					}
				},
				error:function(msg){
                    console.info(JSON.stringify(msg));
					alert("网络出现问题");
				}
			});
		});
		
		$("#pop-meau-btnok").click(function(){
			var outdate = $("#outdate").val();
			var degree = $("#degree").val();
			$.ajax({
				url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manxiandai.php/frontuser/Verifyresult",
				data:{id:<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
, type:1, degree:degree, outdate:outdate},
				type:"POST",
				async:false,
				dataType:"json",
				success:function(data){
					if (data.json.state == 1){
						alert("审核成功");
						$("#mask").hide();
						$("#all-pass-container").hide();
					}else{
						alert("审核失败");
					}
				},
				error:function(msg){
                    console.info(JSON.stringify(msg));
					alert("网络出现问题");
				}
			});
		});
	});
</script>
<title>企业资质审核</title>
</head>
<body>
	<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  		<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:添加宣传栏</TD></TR>
  		<TR><TD bgColor=#b1ceef height=1></TD></TR>
  		<TR height=20>
    		<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
		</TR>
	</TABLE>
	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="107" height="30"><div align="right"></div></td>
			<td height="30" colspan="2">
				<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
			</td>
		</tr>
		
		<tr>
        	<td width="107" height="30"><div align="right">公司名称：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">所属行业：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['industry'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">单位性质：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['corptype'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">注册资本：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['capital'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">联系人：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['contacter'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">固定电话：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['phone'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">手机：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">传真：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['fax'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">邮政编码：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['post'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">邮箱：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['comEmail'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">网址：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['website'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">所在地：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['location'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">详细地址：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['address'];?>

            </td>
        </tr>
        
        <tr>
        	<td width="107" height="30"><div align="right">企业资质：</div></td>
            <td height="30" colspan="2">&nbsp;
            	<div id="img">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['name'] = 'pl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['detail']->value['license']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total']);
?>
					<div id="imagcontent<?php echo $_smarty_tpl->tpl_vars['detail']->value['license'][$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['id'];?>
" style="margin:5px; position: relative;width:100px; height:100px;display:inline-block;background:RGB(225,225,225);border:5px solid #FFF; text-align: center;vertical-align: middle;display:table-cell;">
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['license'][$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['picUrl'];?>
" data-lightbox="<?php echo $_smarty_tpl->tpl_vars['detail']->value['license'][$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['picUrl'];?>
"><img id="img<?php echo $_smarty_tpl->tpl_vars['detail']->value['license'][$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['id'];?>
" style="max-width:100px; max-height:100px;"  src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['license'][$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['picUrl'];?>
"/></a>
					</div>		
				<?php endfor; endif; ?>
				</div>
            </td>
        </tr>
        
        <tr>
        	<td width="107" ><div align="right">公司简介：</div></td>
        	<td colspan="2">&nbsp;
            	<?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>

            </td>
        </tr>
        
          <tr>
        	<td width="107" height="50"><div align="right"></div></td>
        	<td colspan="2">&nbsp;
            	<div id="verify-pass" class="company-verify-btn" >审核通过</div>
            	<div id="verify-not-pass" class="company-verify-btn" >审核不通过</div>
            </td>
        </tr>
	</table>
	
	<div id ="mask" class="mask"></div>
	<div id="all-pass-container" class="all-pop-container" >
		<div class="pop-form-header">
			<div class="pop-form-title" >
				选择信用等级
			</div>
			<div class="pop-closebtn" id="pop-closebtn">
    		关闭
    		</div>
    		<div style="clear:both;"></div>
    	</div>
		<div class="pop-item">
       		<div class="pop-item-title"">信用等级：</div>
       		<div class="pop-item-info">
				<select id="degree" name="degree">
					<option value="0" selected="selected" disabled="disabled">请选择</option>
					<option value="1">1星</option>
					<option value="2">2星</option>
					<option value="3">3星</option>
					<option value="4">4星</option>
					<option value="5">5星</option>
				</select>
			</div>
			<div class="pop-item-title"">到期时间：</div>
       		<div class="pop-item-info">
				<input id="outdate" name="outdate" class="Wdate" type="text"  />
			</div>
       </div>
       <div class ="meau-container">
      	 <div class="pop-meau">
       		<div style="margin:10px 0px 0px 150px;height:20px; float:left;">
       			<div class="pop-meau-btnok" id="pop-meau-btnok">
       				确定
       			</div>
       		</div>
       	</div>
      </div>
 	</div>
 	
 	<div id="all-not-container" class="all-pop-container" >
		<div class="pop-form-header">
			<div class="pop-form-title" >
				原因
			</div>
			<div class="pop-closebtn" id="pop-not-closebtn">
    		关闭
    		</div>
    		<div style="clear:both;"></div>
    	</div>
		<div class="pop-item">
       		<div class="pop-item-title"">原因：</div>
       		<div class="pop-item-info">
				<textarea id="reason" name="reason" rows="8" cols="10" style="width: 80%"></textarea>
			</div>
       </div>
       <div class ="meau-container">
      	 <div class="pop-meau">
       		<div style="margin:10px 0px 0px 150px;height:20px; float:left;">
       			<div class="pop-meau-btnok" id="pop-meau-notok">
       				确定
       			</div>
       		</div>
       	</div>
      </div>
 	</div>
 	
</body>
</html><?php }} ?>