<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:40:16
         compiled from "admin/tpl/version/addversion.html" */ ?>
<?php /*%%SmartyHeaderCode:1138186073541e8ef0e35d93-36712689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c8b1e21738bdad117eb2ac03073ccc4078e270' => 
    array (
      0 => 'admin/tpl/version/addversion.html',
      1 => 1401075526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138186073541e8ef0e35d93-36712689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'plist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8ef0eae9b0_88649158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8ef0eae9b0_88649158')) {function content_541e8ef0eae9b0_88649158($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>修改版本信息</title>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.css">
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:添加新版本</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
<script type="text/javascript">
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
				},
				'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
				'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Version/upload/filetype/apk',
				'queueSizeLimit': 1 , 
				'multi':false,
				'auto':true,
				'fileTypeDesc':"请选择文件", 
				'fileTypeExts':'*.apk',
				'fileSizeLimit': '10240KB', 
				'buttonText':"选择文件",
				'width' : 100, 
				'height':20, 
				'cancelImg' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify-cancel.png',
				'onUploadError' : function(file, errorCode, errorMsg, errorString) {
			            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
			    },
			    'onUploadStart' : function(file) {
			    	$("#filestate").val("1"); 
		        },
		        'onCancel' : function(file) {
		        	$("#filestate").val("0"); 
		        },
			    'onUploadSuccess' : function(file, data, response) {
		            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
		           // alert(data);//size
		            var myObject = eval('(' + data + ')');
		           // alert(myObject.result);
		           //alert(myObject.msg);
		           
		            if(myObject.result == '0'){
		            	$("#file").html("上传失败！");
			            $("#filetate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
		            }else{
		            	$("#hidFileID").attr("value",myObject.result);
		            	$("#size").val(myObject.size);
		            	$("#filetitle").val(file.name);
		            	$("#file").html("<a href='"+myObject.msg+"'>"+myObject.name+"</a>");
		            	$("#url").val(myObject.msg);
			            $("#filestate").val("2");
		            }
		            
			    }
			});
			
			
			$("#form1").submit( function () {
				$("#result").val("");
				$('#content').val(editor.getSource());//加上这句防止提交数据为空
				
				//return false;
				if($("#platform").val() == ""){
					$("#result").text("平台名称不能为空！");
					$("#platform").focus();
					return false;
				} 
				//alert($("#newssort").val());
				if($("#versionnum").val() == ""){
					$("#result").text("版本号不能为空！");
					$("#versionnum").focus();
					return false;
				}
				
				
				if($("#type").val() == ""){
					$("#result").text("升级类型不能为空！");
					$("#type").focus();
					return false;
				} 
				if($("#flag").val() == ""){
					$("#result").text("发布状态不能为空！");
					$("#flag").focus();
					return false;
				} 
				if($("#url").val() == ""){
					$("#result").text("下载链接地址不能为空！");
					$("#url").focus();
					return false;
				} 
				if($("#filestate").val()==1){
					alert("文件上传中，请稍后！");
					return false;
				}
				return true;
			} );
 
			//var order = $("#order").val();
			$("#date").focus(function(){
				
					WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
				
				
			});
			
		}); 
</script>
			<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                              
                                <form id="form1" target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/addversion">
                                  <tr>
									<td width="107" height="30"><div align="right"></div></td>
									<td height="40" colspan="2">
										<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
									</td>
								  </tr>
                                  <tr>
                                    <td height="40"><div align="right">平台名称：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <select name="platform" class="inputcss" id="platform">
                                        <option selected="selected" value="">请选择</option>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ns'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ns']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['name'] = 'ns';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ns']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
												<option value="<?php echo $_smarty_tpl->tpl_vars['plist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ns']['index']]['CODE_PLATFORM'];?>
" >
												<?php echo $_smarty_tpl->tpl_vars['plist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ns']['index']]['NAME_PLATFORM'];?>
</option>
											<?php endfor; endif; ?>
                                      </select>&nbsp;&nbsp;<font color="#ff0000">必选</font></td>
                                  </tr>
                                  <tr>
                                  <tr>
                                    <td height="40"><div align="right">版本号：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="versionnum" id="versionnum" size="35"  class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">升级类型：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="type" size="35" id="type"  class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填(0-不需要升级，1-有版本更新，2-强制升级)</font></td>
                                  </tr>
                                   <tr>
                                    <td height="40"><div align="right">发布状态：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="flag" size="35" id="flag"  class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填(0-未发布，1-已发布)</font></td>
                                  </tr>
                                    <tr>
                                    <td height="40"><div align="right">下载链接地址：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="url" size="35" id="url"  class="inputcss" />
                                        &nbsp;&nbsp;<font color="#ff0000">必填(如果是andorid平台，上传apk文件后会自动填写；如果是iphone平台，请填写下载链接地址)</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">版本描述：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="desc" size="35" id="desc" class="inputcss" />
                                        &nbsp;&nbsp;<font color="0000ff">可选</font></td>
                                  </tr>
								   <tr>
                                    <td height="40"><div align="right">APP大小：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="size" size="35" id="size"  class="inputcss" />
                                        &nbsp;&nbsp;<font color="#0000ff">可选(如果是android平台，上传apk文件后自动填写)</font></td>
                                  </tr>
								   <tr>
                                    <td height="40"><div align="right">发布时间：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="time"  size="25" class="Wdate" id="date" />
                                      &nbsp;&nbsp;<font color="#0000ff">可选</font></td>
                                  </tr>
								   <tr>
                                    <td height="40"><div align="right">APP名称：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="appname" size="25" id="appname"  class="inputcss" />
                                        &nbsp;&nbsp;<font color="#0000ff">可选</font></td>
                                  </tr>
                                 
                                 <!--  -->
                                 
                                 <tr>
						              <td height="50"><div align="right">安装文件名称:</div></td>
						              <td height="50" colspan="2">&nbsp;<input id="filetitle" type="text" size="60" name="filetitle"  />&nbsp;&nbsp;<font color="#0000FF">
						              可选(如果是android平台，上传apk文件后自动填写)</font></td>
						        </tr>
						        <tr>
						            <td><div align="right"></div></td>
						           	<td colspan="2" >
										<div id="file">
										</div>
						            </td>
						        </tr>
						        <tr>
						            <td height="40"><div align="right">上传附件：</div></td>
						           	<td height="40"width="110px;">
										<input id="file_upload" name="file_upload" type="file" multiple >
										<input type="hidden" name="fileid" id="hidFileID"  />
										<input type="hidden" name="filestate" id="filestate" value="0" />
						            </td>
						            <td>可选，文件大小不能超过10M</td>
						        </tr>
                                 
                                 <!--  -->
 
                                
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