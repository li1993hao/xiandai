<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:39:01
         compiled from "admin/tpl/othermanagement/editdown.html" */ ?>
<?php /*%%SmartyHeaderCode:1793787057541e8ea5c798d0-52165443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e54c2ff500889ea4956da1ed1cf13f72dfad14' => 
    array (
      0 => 'admin/tpl/othermanagement/editdown.html',
      1 => 1396603432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1793787057541e8ea5c798d0-52165443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'id' => 0,
    'result' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8ea5cf0044_26562288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8ea5cf0044_26562288')) {function content_541e8ea5cf0044_26562288($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>修改学习软件</title>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.css">

<script type="text/javascript">
$(function() {
	$('#file_upload').uploadify({
		'formData'     : {
		},
		'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
		'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/upload/filetype/file',
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
            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
           // alert(data);//size
            var myObject = eval('(' + data + ')');
           // alert(myObject.result);
           //alert(myObject.msg);
            if(myObject.result == '0'){
            	$("#img").html("上传失败！");
	            $("#filetate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
            }else{
            	$("#hidFileID").attr("value",myObject.result);
            	$("#fsize").val(myObject.size);
            	$("#img").html("<a href='"+myObject.msg+"'>"+myObject.name+"</a>");
	            $("#filestate").val("2");
            }
            
	    }
	});
	

	
	$("#form1").submit( function () {
		//alert("ss");
		$("#result").val("");
		//return false;
		if( $("#title").val() == ""){
			$("#result").text("标题不能为空！");
			$("#title").focus();
			return false;
		} 
		
		if($("#filestate").val()==1){
			alert("文件上传中，请稍后！");
			return false;
		}
		if($("#hidFileID").val()==""){
			$("#result").text("请选择文件");
			return false;
		}
		return true;
		});
	});
	</script>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:修改就业动态</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
  	
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                              
                                <form id="form1" enctype="multipart/form-data"  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Editdown/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
                                   <tr>
									<td width="107" height="30"><div align="right"></div></td>
									<td height="40" colspan="2">
										<div align="left"><font id="result" color="#0000FF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
									</td>
								  </tr>
                                   
                                  <tr>
                                    <td width="107" height="30"><div align="center">标题:</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="title" size="35" class="inputcss" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['dc_title'];?>
"/><font style="color:red;size:20px">(必填)</font></td>
                                  </tr>
                                  <tr>
                                    <td width="107" height="30"><div align="center">文件大小:</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="size" id="fsize" size="35" class="inputcss" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['dc_size'];?>
" />&nbsp;
                                       	 上传后会自动填写
                                        </td>
                                  </tr>
                              	  <tr>
                                    <td height="40"><div align="center">文件:</div></td>
                                    <td height="40" colspan="2">&nbsp;
               							<div id="img"><?php echo $_smarty_tpl->tpl_vars['detail']->value['file_link'];?>

										</div>
									<input id="file_upload" name="file_upload" type="file" multiple >
									<input type="hidden" name="fileid" id="hidFileID" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['file_id'];?>
" />
									<input type="hidden" name="filestate" id="filestate" value="<?php if ($_smarty_tpl->tpl_vars['detail']->value['file_id']!=''){?>2<?php }?>" />
									<font style="color:red;size:20px">如果更换文件，文件大小不能超过10M</font>							
                                     </td>
                                  </tr>
						
								
                                
                                 <tr>
                            <td height="40" colspan="3">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="提交" style="width:60px;" />

                            </td>
                          </tr>
                                 </form>
                             
                            </table>


</body>
</html><?php }} ?>