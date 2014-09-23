<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:40:28
         compiled from "admin/tpl/leavelist/bdzylqd.html" */ ?>
<?php /*%%SmartyHeaderCode:1503781524541e8efc1c94f1-46343521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593b85739057ce0aadb5486f5eff2836d089f8ec' => 
    array (
      0 => 'admin/tpl/leavelist/bdzylqd.html',
      1 => 1401433738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1503781524541e8efc1c94f1-46343521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'baodao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8efc264801_39277862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8efc264801_39277862')) {function content_541e8efc264801_39277862($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>档案遗留清单</title>
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
			$("#zz_del").click(function(){
				$("#attrID").val('');
				$("#filetitle").val('');
				$("#file").hide();
			})
			
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
				if($("#title").val() == ""){
					$("#result").text("标题不能为空！");
					$("#title").focus();
					return false;
				} 
				
				if($("#content").val() == ""){
					$("#result").text("请填写内容！");
					$("#content").focus();
					return false;
				}
				if($("#filestate").val()==1){
					alert("文件上传中，请稍后！");
					return false;
				}
				return true;
			} );
			$("#addperidos").click(function(){
				//alert("aaa");
				$("#addresult").html("正在添加...");
				$.ajax({
				   	type: "POST",
				   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/addbullentinperidos",
				   	success: function(msg){
				  		//alert( msg );
				  		var myObject = eval('(' + msg + ')');
				  		//alert(myObject.result);
				  		if(myObject.result > 0){
				  			$("#firstperiods").after("<option value='"+myObject.result+"'>第"+myObject.number+"期</option>");
				  			$("#addresult").html("添加成功！");
				  		}else{
				  			$("#addresult").html("添加失败！");
				  		}
				  		 
					},
					error:function(msg){
						$("#addresult").html("添加失败！");
					}
				});
			});
	});
</script>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:档案遗留清单</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
	</TABLE>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
<form id="form1" enctype="multipart/form-data" target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Leavelist/bdzylqdAction">
   			<tr>
			<td width="107" height="30"><div align="right"></div></td>
			<td height="40" colspan="2">
				<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
			</td>
			</tr>
		    <tr>
                <td height="40"><div align="right">文章标题：</div></td>
                <td height="40" colspan="2">&nbsp;<input id="title" type="text" size="60" name="title" value="<?php if (isset($_smarty_tpl->tpl_vars['baodao']->value)){?><?php echo $_smarty_tpl->tpl_vars['baodao']->value['title'];?>
<?php }?>"/> &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
            </tr>
    <tr>
   	<td height="40"><div align="right">上传附件：</div></td>
       <td height="40"width="100px;">
		<input id="attr_upload" name="attr_upload" type="file" multiple >
		<input type="hidden" name="fileid" id="attrID" value="" />
		<input type="hidden" name="filestate" id="filestate" value="0" />可选，文件大小不能超过10M
        </td>
      
   </tr>
   <tr>
          <td height="50"><div align="right">附件名称:</div></td>
          <td height="50" colspan="2">&nbsp;
          <input id="filetitle" type="text" size="60" name="filetitle" value="<?php if (isset($_smarty_tpl->tpl_vars['baodao']->value)){?><?php echo $_smarty_tpl->tpl_vars['baodao']->value['filetitle'];?>
<?php }?>"/>
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
   <br />
   <br />
<td><div align="right">内容：</div></td>
<td   colspan="2">
<textarea id="content" name="content" rows="24" cols="120" style="width: 60%">
 <?php if (isset($_smarty_tpl->tpl_vars['baodao']->value)){?><?php echo $_smarty_tpl->tpl_vars['baodao']->value['content'];?>
<?php }?>
</textarea>
</td>
</tr>
          <tr>
			<td><div align="right"></div></td>
			<td height="40" colspan="2">
				<div align="left">
					<input name="submit" type="submit" value="提交修改" />&nbsp;&nbsp;
				</div>
			</td>
		</tr>
</form>
</table>
</body>
</html>
<?php }} ?>