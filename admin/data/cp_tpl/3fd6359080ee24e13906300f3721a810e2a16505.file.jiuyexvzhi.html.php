<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:45:17
         compiled from "admin/tpl/frontuser/jiuyexvzhi.html" */ ?>
<?php /*%%SmartyHeaderCode:300867777541e901dad7266-24101120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fd6359080ee24e13906300f3721a810e2a16505' => 
    array (
      0 => 'admin/tpl/frontuser/jiuyexvzhi.html',
      1 => 1401433738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300867777541e901dad7266-24101120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e901db77b41_33343114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e901db77b41_33343114')) {function content_541e901db77b41_33343114($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
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

<style>

</style>
<script type="text/javascript">
$(function(){
	$("#zz_del").click(function(){

		
		 $("#hidFileID").val('');				
         $("#filename").val('');
         $("#show_filename").text('');
	})
	
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
	
	$('#file_upload').uploadify({
			'formData'     : {
			},
			'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
			'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/upload/filetype/file', 
			'multi':true,
			'auto':true,
			'fileTypeDesc':"请选择要上传的附件",
			'fileTypeExts':'*.txt;*.pdf;*.doc;*.docx;*.xls;*.xslx;*.rar;*.zip;*.ppt;*.pptx',
			'fileSizeLimit': '2048KB', 
			'buttonText':"选择文件", 
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
	            var myObject = eval('(' + data + ')');
	            if(myObject.result == '0'){
		            $("#img").html(myObject.msg);
		           // $("#picstate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
	            }else{
                    $("#hidFileID").val(myObject.result);				
                    $("#filename").val(file.name);
                    $("#show_filename").text(file.name);
	            }  
		    }
		});
	
	$("#re").click(function(){
		$("#re_title").val('');
		$("#content").val('');
	})
	})
</script>
<title>学生就业须知管理</title>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:前台须知管理</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
<form action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/xvzhi/mod/upload" method="post">
<table>
<tr><td>标题：</td><td><input id="re_title" name="title" type="text" value = "<?php if (isset($_smarty_tpl->tpl_vars['info']->value)){?><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
<?php }?>"/></td></tr>
<tr><td>内容：</td><td><textarea id="content" name = "content" cols="100" rows="20" style="resize:none;"><?php if (isset($_smarty_tpl->tpl_vars['info']->value)){?><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
<?php }?></textarea></td></tr>
<tr><td>附件：</td><td><div style="float:left;"><input id="file_upload" name="file_upload" type="file"/></div><div style="float:left; margin-left:20px;"><a style="color:#f00; cursor:pointer" id="zz_del">删除</a></div>
<input name="fileid" type="hidden" id="hidFileID"/>
<input type="hidden" id="picstate"/>
<input type="hidden" id="img"/>
</td></tr>
<tr><td>文件名称：</td><td id="show_filename"><?php if (isset($_smarty_tpl->tpl_vars['info']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['info']->value['file_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['filename'];?>
</a><?php }else{ ?><?php }?>&nbsp;&nbsp;&nbsp;</td><input name="filename"  type="hidden" id="filename" value="<?php if (isset($_smarty_tpl->tpl_vars['info']->value)){?><?php echo $_smarty_tpl->tpl_vars['info']->value['filename'];?>
<?php }else{ ?><?php }?>"/></tr>
</table>
<input class="btn" type="submit" value="提交"/>


</form>
</body>
</html><?php }} ?>