<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:38:34
         compiled from "admin/tpl/jobfair/addjobfairmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:100503151541e8e8a1e5171-82004160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c85fadcc08fc10131ad030c3572da98ebcf4725' => 
    array (
      0 => 'admin/tpl/jobfair/addjobfairmsg.htm',
      1 => 1401443636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100503151541e8e8a1e5171-82004160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8e8a273e33_74261956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8e8a273e33_74261956')) {function content_541e8e8a273e33_74261956($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>添加招聘会信息</title>
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
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
		$(function() {
			
			$("#zz_del").click(function(){
				$("#attrID").val('');
				$("#filetitle").val('');
				$("#file").hide();
			})
			
			$("#addcalendar").change(function(){
				$(".calendar").show('fast');
			});
			
			$('#file_upload').uploadify({
				'formData'     : {
				},
				'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
				'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/upload/',
				'queueSizeLimit': 1 , 
				'multi':false,
				'auto':true,
				'fileTypeDesc':"请选择图片文件",
				'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif;*.bmp',
				'fileSizeLimit': 1024*1024, 
				'buttonText':"选择图片", 
				'width' : 100, 
				'height':20, 
				'cancelImg' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify-cancel.png',
				'onUploadError' : function(file, errorCode, errorMsg, errorString) {
			            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
			    },
			    //'onUploadStart' : function(file) {
			    //	$("#picstate").val("1"); 
		        //},
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
			
			
			$('#attr_upload').uploadify({
				'formData'     : {
				},
				'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
				'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/upload/filetype/file',
				'queueSizeLimit': 1 , 
				'multi':false,
				'auto':true,
				'fileTypeDesc':"请选择文件", 
				'fileTypeExts':'*.txt;*.pdf;*.doc;*.docx;*.xls;*.xslx;*.rar;*.zip;*.ppt;*.pptx',
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
		           // alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
		          	//alert(data);//size
		            var myObject = eval('(' + data + ')');
		           // alert(myObject.result);
		           //alert(myObject.msg);
		            if(myObject.result == '0'){
		            	$("#file").html("上传失败！");
			            $("#filestate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
		            }else{
		            	$("#attrID").attr("value",myObject.result);
		            	//$("#fsize").val(myObject.size);
		            	$("#filetitle").val(myObject.name);
		            	$("#file").html("<a href='"+myObject.msg+"'>"+myObject.name+"</a>");
			            $("#filestate").val("2");
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
				internalScript:false,
				inlineScript:false,
				internalStyle:false,
				inlineStyle:false
			});
			
			$("#form1").submit( function () {
				$("#result").val("");
				$('#content').val(editor.getSource());//加上这句防止提交数据为空
				
				//return false;
				if($("#name").val() == ""){
					$("#result").text("标题不能为空！");
					$("#name").focus();
					return false;
				} 
				//alert($("#newssort").val());
				if($("#addr").val() == ""){
					$("#result").text("召开地址不能为空！");
					$("#addr").focus();
					return false;
				}
				if($("#date").val() == ""){
					$("#result").text("召开时间不能为空！");
					$("#date").focus();
					return false;
				}
			
				//alert($("#newssort").val());
				
				if($("#content").val() == ""){
					$("#result").text("内容不能为空！");
					$("#content").focus();
					return false;
				}    
				if($("#picstate").val()==1){
					alert("图片上传中，请稍后！");
					return false;
				}
				if($("#filestate").val()==1){
					alert("文件上传中，请稍后！");
					return false;
				}
				return true;
			} );
		});
	</script>
<script type="text/javascript">
		$(function() {
			//var order = $("#order").val();
			$("#date").focus(function(){
				
					WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
				
				
			});
			
		}); 
</script>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:添加招聘会信息</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
 <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                              
                                <form id="form1"  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/addjobfairmsg" >
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
                                        <input type="text" name="name" id="name" size="40" class="inputcss" />
										&nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                              
                                  <tr>
                                    <td height="40"><div align="right">召开地址：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="addr" id="addr" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">链接：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="link" id="link" size="35" class="inputcss" />
                                        &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">召开时间：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="opentime"  size="25" class="Wdate" id="date"/>
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">公开方式：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <select name="isopen">
                                        <option value="1">对所有人公开</option>
                                        <option value="0">仅对校内学生公开</option>
                                        </select><font color="#ff0000">必填</font></td>
                                  </tr>
                                <tr>
								<td height="40"><div align="right">图片：</div></td>
                                    <td height="40" colspan="2">&nbsp;                
											<div id="img"></div>
												<input id="file_upload" name="file_upload" type="file" multiple >
												<input type="hidden" name="picid" id="hidFileID" value="" />
												<input type="hidden" name="picstate" id="picstate" value="0" />图片大小不能超过10M	
									</td>
								</tr>
								
								
								 <!-- 附件 -->                         
                                  
                                	<tr>
							              <td height="50"><div align="right">附件名称:</div></td>
							              <td height="50" colspan="2">&nbsp;
							              <input id="filetitle" type="text" size="60" name="filetitle" />
							              &nbsp;&nbsp;
							              <a style="color:#f00; cursor:pointer" id="zz_del">删除</a>
							              <font color="#0000FF"></font>
							              </td>
							        </tr>
							        <tr>
							            <td><div align="right"></div></td>
							           	<td colspan="2" >
											<div id="file"></div>
							            </td>
							        
							        </tr>
							        <tr>
							            <td height="40"><div align="right">上传附件：</div></td>
							           	<td height="40"width="110px;">
											<input id="attr_upload" name="attr_upload" type="file" multiple >
											<input type="hidden" name="fileid" id="attrID" value="" />
											<input type="hidden" name="filestate" id="filestate" value="0" />可选，文件大小不能超过10M
							            </td>
							            
							        </tr>
							        
						<!-- 附件 -->	
							
								  <tr >
                                    <td height="40"><div align="right">录入者：</div></td>
                                    <td height="40" colspan="2">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>

                                        </td>
                                  </tr>
                                  
                                 
								  
								  <tr>
                                    <td height="40"><div align="right">联系人：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="contact" id="contact" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  
                                  <tr>
                                    <td height="40"><div align="right">联系人电话：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="tel" id="tel" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  
                                  <tr>
                                    <td height="40"><div align="right">学生助理：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="student" id="student" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  
                                  <tr>
                                    <td height="40"><div align="right">学生助理电话：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="assis-tel" id="assis-tel" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
							
                                  
								  <tr>
									
									 <td height="130"><div align="right">介&nbsp;&nbsp;绍：</div></td>
									<td height="40" colspan="2">
									<textarea id="content" name="content" rows="24" cols="120" style="width: 58%">请有意向的同学携带简历及学生证准时参加！</textarea>
									</td>
							   	</tr>
								 <tr>
								 	<td height="40"></td>
                                    <td height="40" colspan="2">
                                        <input type="checkbox" name="push" value="1"/>推送给客户端用户&nbsp;&nbsp;
                                        <input type="checkbox" name="news" value="1"/>发布动态&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="notice" value="1"/>发布通知 &nbsp;&nbsp;&nbsp;
                                       
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