<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:41:16
         compiled from "admin/tpl/west/addinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:771032615541e8f2c64a127-20008888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89dd826372f114d90eebee6433ac702329bd4964' => 
    array (
      0 => 'admin/tpl/west/addinfo.htm',
      1 => 1401766674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '771032615541e8f2c64a127-20008888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'newssort' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8f2c6d11a8_01962572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8f2c6d11a8_01962572')) {function content_541e8f2c6d11a8_01962572($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>添加基层就业信息</title>
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
			$('#file_upload').uploadify({
				'formData'     : {
				},
				'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
				'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/upload/',
				'queueSizeLimit': 1 , 
				'multi':false,
				'auto':true,
				'fileTypeDesc':"请选择图片文件",
				'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif;*.bmp',
				'fileSizeLimit': '10240KB', 
				'buttonText':"选择图片", 
				'width' : 100, 
				'height':20, 
				'cancelImg' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify-cancel.png',
				'onUploadError' : function(file, errorCode, errorMsg, errorString) {
			            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
			    },
			    'onUploadStart' : function(file) {
			    	$("#picstate").val("1"); 
		        },
		        'onCancel' : function(file) {
		        	$("#picstate").val("0"); 
		        },
			    'onUploadSuccess' : function(file, data, response) {
		            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
		            var myObject = eval('(' + data + ')');
		            //alert(myObject.result);
		            //alert(myObject.msg);
		            if(myObject.result == '0'){
			            $("#img").html(myObject.msg);
			            $("#picstate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
		            }else{
		            	$("#hidFileID").attr("value",myObject.result);
			            $("#img").html("<img style=\" max-width:600px; max-height:200px;\" src='"+myObject.msg+"'/>");
			            $("#picstate").val("2");
		            }
		            
			    }
			});
			
			var editor = $('#content').xheditor({
				upLinkUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
				upLinkExt:"zip,rar,txt",
				upImgUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
				upImgExt:"jpg,jpeg,gif,png",
				upFlashUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
				upFlashExt:"swf",
				upMediaUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
				upMediaExt:"avi",
				remoteImgSaveUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
				cleanPaste:2,
				internalScript:false,
				inlineScript:false,
				internalStyle:false,
				inlineStyle:false
			});
			
			$("#form1").submit( function () {
				$("#result").val("");
				$('#content').val(editor.getSource());//加上这句防止提交数据为空
				
				
				//return false;
				if( $("#hidFileID").val() == "" ){
					if($("#newssort").val() == "3" ){
						$("#result").text("请上传基层就业人物图片！");
						return false;
					}
				}
				
				if($("#title").val() == ""){
					$("#result").text("标题不能为空！");
					$("#title").focus();
					return false;
				} 
				//alert($("#newssort").val());
				if($("#newssort").val() == ""){
					$("#result").text("请选择新闻类型！");
					$("#newssort").focus();
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
/common/admin/images/title_bg1.jpg">当前位置:添加基层就业信息</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
  	
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">        
	<form id="form1"   target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/addinfo" >
		<tr>
			<td width="107" height="30"><div align="right"></div></td>
			<td height="40" colspan="2">
				<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
			</td>
		</tr>
		<tr>
			<td width="107" height="30"><div align="right">信息标题：</div></td>
			<td height="40" colspan="2">&nbsp;
				<input id="title" type="text" name="title" size="60" class="inputcss" style="width:500px;" />&nbsp;<font color="#0000FF">必填</font>
			</td>
		</tr>
		<tr>
			<td height="40"><div align="right">新闻类型：</div></td>
			<td height="40" colspan="2">&nbsp;
				 <select name="newssort" id="newssort">
					<option value="" selected="selected" >选择新闻类型</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ns'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['name'] = 'ns';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newssort']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['total']);
?>			 
				    <option value="<?php echo $_smarty_tpl->tpl_vars['newssort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ns']['index']]['wc_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['newssort']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ns']['index']]['wc_name'];?>
</option>
				  	<?php endfor; endif; ?>
				  </select>
				  <font color="#0000FF">必选</font>
			</td>
		</tr>
		<tr>
			<td height="40"><div align="right">图片：</div></td>
			<td height="40" width="150px" style="display:table-cell; vertical-align:middle;">&nbsp;         
				<div id="img"></div>
				<input id="file_upload" name="file_upload" type="file" multiple >
				<input type="hidden" name="picid" id="hidFileID" value="" />
				<input type="hidden" name="picstate" id="picstate" value="0" />图片大小不能超过10M,如果是基层就业人物类型，必须选择此项
				
			</td>
			
		</tr>
		<tr>
			<td height="40"><div align="right">录入者：</div></td>
			<td height="40" colspan="2">&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>

			
			</td>
		</tr>
		
		
		<tr>
			<td><div align="right">内容：</div></td>
			<td   colspan="2">
				<textarea id="content" name="content" rows="24" cols="120" style="width: 720px;"></textarea>
			</td>
		</tr>
		<tr>
        	<td height="40"></td>
            <td height="40" colspan="2">
            	<input type="checkbox" name="push" value="1"/>推送给客户端用户
            </td>
        </tr>
		<tr>
			<td><div align="right"></div></td>
			<td height="40" colspan="2">
				<div align="left">
					<input name="submit" type="submit" value="提交" />&nbsp;&nbsp;
				</div>
			</td>
		</tr>
	</form>
</table>


</body>
</html><?php }} ?>