<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:37:05
         compiled from "admin/tpl/recruit/addcorpmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:1406959440541e8e31e90a53-81726204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7c55c3f0109b808868a996bd5eba69a71768d0' => 
    array (
      0 => 'admin/tpl/recruit/addcorpmsg.htm',
      1 => 1401443636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406959440541e8e31e90a53-81726204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'ctlist' => 0,
    'provlist' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8e31f3d256_92144270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8e31f3d256_92144270')) {function content_541e8e31f3d256_92144270($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<title>添加企业招聘信息</title>
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
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.css" rel="Stylesheet" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.js"></script>

<script type="text/javascript">
var parentId = 0;	
		$(function() {
			$("#zz_del").click(function(){
				$("#hidFileID").val('');
				$("#filetitle").val('');
				$("#file").hide();
			})
			
			
			var flag = 1;
			var officeid;
			var temp = 1;
			
			$("#btnclick").live("click",function(){
				//alert("aa");
				$("#dialog").show();
			});
			
			$("#chosen-ok").live("click",function(){
				//alert(flag);
				if(flag == 1){	
				
					if($("#officename").val() == ""){
						alert("请填写职位名称");
						$("#officename").focus();
						return false;
					} 
					if($("#officereq").val() == ""){
						alert("请填写职位要求");
						$("#officereq").focus();
						return false;
					}
					if($("#jobtype1").val() == 0){
						alert("请选择职位类别");
						$("#jobtype1").focus();
						return false;
					} 
					
					var officename = $("#officename").val();
					var officereq = $("#officereq").val();
					var otid = $("#jobtype3").val() != 0 ? $("#jobtype3").val() : ( $("#jobtype2").val() != 0 ? $("#jobtype2").val() : $("#jobtype1").val());
					var str = "<div id=\"position-list-item" + temp + "\" data=\"" + temp + "\"  officename=\"" + officename + "\" otid=\"" + otid + "\"  officereq=\""+ removeHTMLTag(officereq) +"\" class=\"position-list-item\">";
					str += "<div id=\"del-office" + temp + "\" data=\""+ temp +"\" style=\"overflow:auto\"><div id=\"office-name" + temp + "\" style=\"width:100px;float:left\" >&nbsp;"+ officename +"</div><div style=\"margin-right:10px;float:right\"><a id=\"edit-office"+temp+"\" class=\"edit-office\" data=\"" + temp + "\" officename=\"" + removeHTMLTag(officename) + "\" otid=\"" + otid + "\"  officereq=\""+ officereq +"\" href=\"javascript:void(0)\">编辑</a>&nbsp;<a   class=\"del-office\" data=\"" + temp +"\" href=\"javascript:void(0)\">删除</a></div></div>";
					$("#office-position").append(str);
					flag = 1; 
					$("#dialog").hide();
					$("#officename").val("");
					$("#officereq").val("");
					temp++;	
						
				}
				else{
					
					//alert(officeid);
					var officename = $("#officename").val();
					var officeintro = $("#officereq").val();
					var otid = $("#jobtype3").val() != 0 ? $("#jobtype3").val() : ( $("#jobtype2").val() != 0 ? $("#jobtype2").val() : $("#jobtype1").val());
					//officeid; 
					var i = 1;
					while($("#del-office" + i).attr("data") != officeid)
					{
						i++;
					}
					//alert(i);
					$("#position-list-item" + i).attr("officename",officename);
					$("#edit-office" + i).attr("officename",officename);
					$("#position-list-item" + i).attr("otid",otid);
					$("#position-list-item" + i).attr("officereq",officeintro);
					$("#edit-office" + i).attr("officereq",officeintro);
					$("#office-name" + i ).html("&nbsp;"+officename);
					
					//alert($("#position-list-item" + i).attr("officereq"));
					alert("修改成功");
					flag = 1;
					$("#dialog").hide();
					$("#officename").val("");
					$("#officereq").val("");
					
				}
			});
			
			$(".edit-office").live("click",function(){
				officeid = $(this).attr("data") ;
				//alert(officeid);
				flag = 2;
				//var obj = eval("("+ msg +")");
				$("#dialog").show();
				$("#officename").val($(this).attr("officename"));
				$("#officereq").val($(this).attr("officereq"));
			});
			
			
			$(".del-office").live("click", function(){
				var offid = $(this).attr("data");
				//alert(offid);
				$("#del-office"+offid).remove();
				$("#position-list-item"+offid).remove();
				
			});
			
			
			$("#close").live("click",function(){
				$("#dialog").hide();
				flag = 1;
				$("#officename").val("");
				$("#officereq").val("");
			});
			
			
			$('#file_upload').uploadify({
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
		            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
		          	//alert(data);//size
		            var myObject = eval('(' + data + ')');
		           // alert(myObject.result);
		           //alert(myObject.msg);
		            if(myObject.result == '0'){
		            	$("#file").html("上传失败！");
			            $("#filetate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
		            }else{
		            	$("#hidFileID").attr("value",myObject.result);
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
				
				if($("#name").val() == ""){
					$("#result").text("标题不能为空！");
					$("#name").focus();
					return false;
				} 
				//alert($("#newssort").val());
				if($("#cttype").val() == ""){
					$("#result").text("请选择单位类型！");
					$("#cttype").focus();
					return false;
				}
				if($("#prov").val() == ""){
					$("#result").text("请选择省份！");
					$("#prov").focus();
					return false;
				}
				
				
				if($("#content").val() == ""){
					$("#result").text("内容不能为空！");
					$("#content").focus();
					return false;
				} 
				//return false;
				
				if($("#filestate").val()==1){
					alert("文件上传中，请稍后！");
					return false;
				}
				return true;
			
			});
			
			
			getJobtype("jobtype1",parentId);
			
			$("#jobtype1").change(function(){
				parentId = $("#jobtype1").val();
				getJobtype("jobtype2",parentId);
				$("#jobtype2").change(function(){
					parentId = $("#jobtype2").val();
					getJobtype("jobtype3",parentId);
				});
			});
		
		});	
		
		function getJobtype(htmlId,pId){
			$.ajax({
				url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/jobtype/parentid/"+pId,
				type:"POST",
				async:false,
				dataType:"json",
				success:function(data){
					var str = "";
					if(htmlId == "jobtype1"){
						str += "<option value=\"0\" selected=\"selected\">选择类别</option>";
					}else if(htmlId == "jobtype2"){
						str += "<option value=\"0\" selected=\"selected\" disabled=\"disabled\">选择类别</option>";
					}else{
						str += "<option value=\"0\" selected=\"selected\" disabled=\"disabled\">选择类别</option>";
					}
					//var str="";
					if(data.json.state == 1){
						$.each(data.json.data.list,function(index,item){
							str +="<option value=\""+item.ot_id+"\">"+item.ot_name+"</option>";
						});
						//alert(str);
						//alert(htmlId);
						$("#"+htmlId).html(str);
					}else{
						$("#"+htmlId).html(str);
					}
				},
				error:function(msg){
					alert("网络出现问题！");
				}
			});
		}
		
		function getofficelist(){
			var namestr = "";
			var otstr = "";
			var reqstr = "";
			$(".position-list-item").each(function(i){
				  var officename = $(this).attr("officename");
				  namestr += officename+"__";//双下划线
				  var otid = $(this).attr("otid");
				  otstr += otid+"__";
				  var officereq = $(this).attr("officereq");
				  reqstr += officereq + "__"; 
			});
			$("#officeidlist").val(namestr+"**"+otstr+"**"+reqstr);//
		}
		
		function removeHTMLTag(str) {
		    str = str.replace(/&/g,'&amp;')
            .replace(/</g,'&lt;')
            .replace(/>/g,'&gt;')
            .replace(/\\/g,'&#92;')
            .replace(/"/g,'&quot;')
            .replace(/'/g,'&#39;');
		    return str;
		}
		
	</script>


</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:添加企业招聘信息</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>


<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                              
                                <form id="form1" target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/addcorpmsg" >
                                    <tr>
									<td width="107" height="30"><div align="right"></div></td>
									<td height="40" colspan="2">
										<div align="left"><font id="result" color="#ff0000"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font></div>
									</td>
								  </tr>
                                  
                                  <tr>
                                    <td width="107" height="30"><div align="right">信息标题：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="name" id="name" size="40" class="inputcss" />&nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">单位性质：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <select name="cttype" class="inputcss" id="cttype">
                                          <option selected="selected" value="">请选择</option>
                                          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ctlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>			 
				 								   <option value="<?php echo $_smarty_tpl->tpl_vars['ctlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ct_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ctlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ct_type'];?>
</option>
										  <?php endfor; endif; ?>

                                      </select>&nbsp;&nbsp;<font color="#ff0000">必选</font></td>
                                  </tr>
                                  <tr>

                                    <td height="40"><div align="right">省份：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <select name="prov" id="prov">
                                          <option value="" selected="selected">请选择</option>
                                         <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['provlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>			 
				 								   <option value="<?php echo $_smarty_tpl->tpl_vars['provlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['prov_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['provlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['prov_cont'];?>
</option>
										  <?php endfor; endif; ?>
                                      	</select>&nbsp;&nbsp;<font color="#ff0000">必选</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">单位地址：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="addr" id="addr" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font>
                                     </td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">联系人：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="contact" id="contact" size="35" class="inputcss" />
                                        &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">联系电话：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="tel" id="tel" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">电子邮箱：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="email" id="email" size="35" class="inputcss" />
                                     &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">传真号码：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="fax" size="35" id="fax" class="inputcss" />
                                        &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
								   <tr>
                                    <td height="40"><div align="right">公司网址：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="web" size="35" id="web" class="inputcss" />
                                        &nbsp;&nbsp;<font color="#ff0000">必填</font></td>
                                  </tr>
                                  <tr>
                                    <td height="40"><div align="right">公开方式：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <select name="isopen">
                                        <option value="1">对所有人公开</option>
                                        <option value="0">仅对本校学生公开</option>
                                        </select><font color="#ff0000">必填</font></td>
                                  </tr>
								   <tr>
                                    <td height="40"><div align="right">录入者：</div></td>
                                    <td height="40" colspan="2">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
                                      
                                  </tr>
								  <tr>
                                    <td height="40"><div align="right">信息来源：</div></td>
                                    <td height="40" colspan="2">&nbsp;
                                        <input type="text" name="src" size="25" id="src" class="inputcss" />
                                        &nbsp;&nbsp;<font color="#0000ff">来自nkuc@163.com邮箱或者XX大学就业信息网</font></td>
                                  </tr>
                                  
                                  <tr>
                                    <td height="40"><div align="right">职位：</div></td>
                                    <td height="auto " colspan="2">&nbsp;
                                        <a href="javascript:void(0)" id="btnclick">添加职位</a>
                                        <input id="officeidlist" type="hidden" name = "officeidlist"/>
                                        <div id="office-position" style="border:1px solid;width:300px">
                                        	
                                        </div>
                                        
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
											<input id="file_upload" name="file_upload" type="file" multiple >
											<input type="hidden" name="fileid" id="hidFileID" value="" />
											<input type="hidden" name="filestate" id="filestate" value="0" />可选，文件大小不能超过10M
							            </td>
							            
							        </tr>
							        
									<!-- 附件 -->			        
							        
							        
								  <tr>
									
									 <td height="130"><div align="right">介&nbsp;&nbsp;绍：</div></td>
									<td height="40" colspan="2"><textarea id="content" name="content" rows="24" cols="120" style="width: 58%"></textarea>
									</td>
							   	</tr>
								 <tr>
                                    <td height="40"></td>
                                    <td height="40" colspan="2">
                                        <input type="checkbox" name="push" value="1"/>推送给客户端用户&nbsp;&nbsp;
                                        <input type="checkbox" name="news" value="1"/>发布动态&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="notice" value="1"/>发布通知
                                    </td>
                                  </tr>
                                
         							<tr>
									<td><div align="right"></div></td>
										<td height="40" colspan="2">
										<div align="left">
											<input name="submit" type="submit" value="提交" onclick = "getofficelist();" />&nbsp;&nbsp;
										</div>
									</td>
								</tr>
                                 </form>
                             
                            </table>
                            
    
    <div class="jqmWindow" id="dialog">
	<div><p style="font-size:16px">职位名称</p> 
		
	<hr/></div>
		<div><input id="officename" name="officename"  size="50" /></div>
		
		<div class="add-position-window-line">
			<div class="add-position-window-content-title"><p style="font-size:16px">类别</p> <hr/></div>
			<select id="jobtype1" name="jobtype1">
				<option value="0" selected="selected" disabled="disabled">选择分类</option>
			</select>
			<select id="jobtype2" name="jobtype2">
				<option value="0" selected="selected" disabled="disabled">选择分类</option>
			</select>
			<select id="jobtype3" name="jobtype3">
				<option value="0" selected="selected" disabled="disabled">选择分类</option>
			</select>
		</div>	
		
	<div id="chosen-industry" style="float:left;width:500px;">
		<div><p style="font-size:16px">职位要求</p><hr/></div>
		
	</div>
		<div>
		<textarea id="officereq" rows="12" cols="80"></textarea>
		</div>
	<div id="chosen-ok" style="cursor:pointer;font-size:16px;float:left">
		确定
	</div>
	
	<div id="close" style="cursor:pointer;font-size:16px;float:left;margin-left:10px">
		取消
	</div>
	</div>


</body>
</html><?php }} ?>