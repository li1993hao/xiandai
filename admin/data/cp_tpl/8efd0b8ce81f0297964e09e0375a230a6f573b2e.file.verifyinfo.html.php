<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:36:09
         compiled from "admin/tpl/recruit/verifyinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2001866444541e8df91fdc27-89993952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8efd0b8ce81f0297964e09e0375a230a6f573b2e' => 
    array (
      0 => 'admin/tpl/recruit/verifyinfo.html',
      1 => 1401433738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2001866444541e8df91fdc27-89993952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'type' => 0,
    'corplist' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8df930d7c7_34630018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8df930d7c7_34630018')) {function content_541e8df930d7c7_34630018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.css" rel="Stylesheet" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.js"></script>
<title>待审核的招聘信息</title>
<script type="text/javascript">
$(function() {
	
	var infoid;
	
	$(".recruit-info").live("click", function(){
		infoid = $(this).attr("data");
		//alert(infoid);
		$("#office-info").html("");
		$("#info-attr").html("");
		$("#info-name").text("");
		$("#company-name").text("");
		$("#company-type").text("");
		$("#company-industry").text("");
		$("#company-address").text("");
		$("#company-contact").text("");
		$("#company-phone").text("");
		$("#company-email").text("");
		$("#company-website").text("");
		
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/infodetail/infoid/"+infoid,
			type:"post",
			success:function(msg){
				$("#dialog").fadeIn("fast");
				//alert(msg);
				var obj = eval('('+ msg +')');
				if(obj.json.data.info.cim_veri != 2){
					$("#reject").html("拒绝并填写原因  &nbsp;&nbsp;");
				}
				if(obj.json.data.info.rit_id == 1){
					var rit = "【企业招聘】";
				}else if(obj.json.data.info.rit_id == 2){
					var rit = "【实习招聘】";
				}else{
					var rit = "【基层招聘】";
				}
				var name = obj.json.data.info.cim_name.substr(0,14)
				$("#info-name").text(rit + name);
				$("#company-name").text("公司名称："+obj.json.data.cominfo.com_name);
				$("#company-type").text("公司类型："+obj.json.data.cominfo.ct_type);
				$("#company-industry").text("公司行业："+obj.json.data.cominfo.ind_type);
				$("#company-address").text("公司所在地："+obj.json.data.cominfo.location);
				$("#company-contact").text("联系人："+obj.json.data.cominfo.com_contact);
				$("#company-phone").text("联系电话："+obj.json.data.cominfo.com_phone);
				var email = obj.json.data.cominfo.com_email.substr(0,16);
				$("#company-email").text("公司邮箱："+email);
				$("#company-website").text("公司网址："+obj.json.data.cominfo.com_website);
				$("#com_id").val(obj.json.data.cominfo.fu_id)
				
				if(obj.json.data.office){
					var str = "";
					$.each(obj.json.data.office , function(i,item){
						//alert(item.office_name);
						str += "<div id=\"office"+item.office_id+"\">&nbsp;<b>"+item.office_name+"</b><div style=\"margin-right:10px;float:right\"><a id=\"check-office"+item.office_id+"\" class=\"check-office\" data=\""+item.office_id+"\" href=\"javascript:void(0)\">查看</a></div><hr/></div>";
						str += "<div id=\"officeinfo"+item.office_id+"\" data=\""+item.office_id+"\" style=\"width:95%;display:none;margin:0 auto\">"+item.office_intro+"<hr/></div>"
					});
					$("#office-info").html(str);
				}
				
				var content = removeHTMLTag(obj.json.data.info.cim_content).substr(0,200);
				$("#info-intro").text(content);
				if(obj.json.data.info.file_id != null){
					var str2 = "<a href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/"+obj.json.data.info.file_link+"\">"+obj.json.data.info.file_name+"</a>";
					$("#info-attr").html(str2);
				}else{
					$("#info-attr").text("未上传附件");
				}
			}
			
		});
		
	});
	
	$(".check-office").live("click", function(){
		var infoid = $(this).attr("data");
		var style=$("#officeinfo"+infoid).css("display");
		//alert(style);
		
		if(style == "none"){
			$("#officeinfo"+infoid).slideDown("normal");
			$("#check-office"+infoid).text("收起");
		}else{
			$("#officeinfo"+infoid).slideUp("normal");
			$("#check-office"+infoid).text("查看");
		}
		
	});
	
	$("#pass").live("click",function(){
		var com_id = $("#com_id").val();
		var state = $("#com_state_"+infoid).val();
		//alert(state);
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/passinfo/comid/"+com_id+"/infoid/"+infoid+"/state/"+state,
			type:"post",
			success:function(msg){
				var obj = eval('('+ msg +')');
				if(obj.json.state == 1){
					alert("审核成功！");
					document.location.reload();
				}
			}
		});
		
	});
	
	
	$("#cancel").live("click",function(){
		$("#dialog").fadeOut("fast");
	});
	
	$("#reject").live("click",function(){
		$("#mask").fadeIn("fast");
		$("#pop-container-add").fadeIn("fast");
		
	});
	
	$("#pop-reject-closebtn-add").live("click",function(){
		$("#mask").fadeOut("fast");
		$("#pop-container-add").fadeOut("fast");
	});
	
	$("#pop-reject-menu-btnok-add").live("click",function(){
		//alert(infoid);
	    var reason = $("#content2").attr("value");
		var state = $("#com_state_"+infoid).val();
		var com_id = $("#com_id").val();
		//alert(reason);
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/rejectreason",
			type:"post",
			data:"comid="+com_id+"&infoid="+infoid+"&reason="+reason+"&state="+state,
			success:function(msg){
				var obj = eval('('+ msg +')');
				if(obj.json.state == 1){
					alert("审核完成！");
					document.location.reload();
				}
			}
			
		});

	});
	

	function removeHTMLTag(str) {
	    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
	    str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
	    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
	    str=str.replace(/&nbsp;/ig,'');//去掉&nbsp;
	    return str;
	}
	
	$(".verify").click(function(){
		$("#verifyinfo").submit();
	});
	
});	

</script>


<style type="text/css">
<!--
.enable{
	background-color:#FFC1C1;
	width:400px;
	height:150px;
}
.disable{
	background-color:#E3E0D5;
	width:400px;
	height:150px;
}
-->
.mask{height:100%; width:100%; position:fixed; _position:absolute; top:0; z-index:1000;  opacity:0.5; filter: alpha(opacity=50); background-color:#000; display:none;}
.reject-href{line-height:20px; height: 20px;}
.reject-container{margin:10px;background-color:#E8F1FA;width:250px;height:130px; float:left;border-top:#F50 solid 2px;border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;}
.reject-container:hover{background:#FCF1CA;}
.reject-container-header{height:20px; width:250px; text-align: right; border-bottom:1px solid #CCC; }
.reject-container-item{height:110px; margin:10px; width:250px; text-align:left;}
.reject-container-item-row{width:250px;height:20px;}
.reject-container-nothing{margin:10px;}
.pop-container{width:350px;position:absolute;left:40px; top:240px;margin-top:10px; margin-left:10px; border-top:#F50 solid 2px; border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC; background:#F0F5FB;z-index:1001;display:none} 
.pop-reject-form-header{ width:350px; border-bottom:solid #999 1px;}
.pop-reject-form-title{float:left;text-align:left; padding:2px 5px; width:200px; }
.pop-reject-closebtn{ float:right; text-align:right; padding:2px 5px;width:30px;cursor:pointer;  font-size:11px; line-height:20px; color:#000; background:#DBEAF9; border:1px solid #CCC;}
.pop-reject-closebtn:hover{background:#FCF1CA;}
.pop-reject-menu-btnok{cursor:pointer;font-size:11px;background:#DBEAF9; border:1px solid #CCC; text-align:center; width:88px;height:20px;float:left;}
.pop-reject-menu-btnok:hover{background:#FCF1CA;}
.pop-reject-container{padding:5px 0px; margin:5px 10px;border-bottom: 1px dotted #DDD;}
.pop-reject-title{ font-size:12px; line-height:22px; color:#000; text-align:right; width:100px; float:left;}
.pop-reject-text{ font-size:12px; color:#000; text-align:left; width:340px; height:20px;min-height:20px;  float:left;}
.menu-container{ padding:5px 0px; margin:70px 10px;border-bottom: 1px dotted #DDD;width:340px;height:40px;}
.reject-menu{ font-size:12px; color:#000; text-align:left; width:240px; height:40px;min-height:20px;  float:left;}
</style>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:待审核的招聘信息</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div style="padding-left:30px;" >
 <form method="post" id="verifyinfo" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/verifyinfo">
	待审核：<input class="verify" name="select-info" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['type']->value==0){?> checked="checked" <?php }?> />
	&nbsp;&nbsp;全部信息：<input name="select-info" class="verify" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['type']->value==1){?> checked="checked" <?php }?> />
	&nbsp;&nbsp;已拒绝：<input name="select-info" class="verify" type="radio" value="2" <?php if ($_smarty_tpl->tpl_vars['type']->value==2){?> checked="checked" <?php }?> />
	
 </form>
</div>
<div >

<?php if ($_smarty_tpl->tpl_vars['corplist']->value['total']=="0"){?>
	<div style="padding-left:30px;padding-top:20px;">
		没有数据
	</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['corplist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div   style="padding-left:20px;padding-top:10px;background-color:white;width:400px;height:150px; float:left">
	<div <?php if ($_smarty_tpl->tpl_vars['re']->value['cim_veri']=="0"){?>class="disable"<?php }else{ ?>class="enable"<?php }?> >
		<div style="height:20px; width:400px; text-align: right; ">
    		<a id="info-id" class="recruit-info" data="<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
"  href="javascript:void(0)" style="line-height:20px; height: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">查看并审核</a>
			&nbsp;&nbsp;
    		<a onClick="return confirm('确认删除这条招聘信息吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/verifyinfo/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
">删除</a>
			&nbsp;&nbsp;
		   
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			
				<div style="width:370px;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['cim_name'],20,'');?>

				<?php if ($_smarty_tpl->tpl_vars['re']->value['rit_id']==1){?>
					【企业招聘】<input id="com_state_<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['rit_id'];?>
"/>
				<?php }elseif($_smarty_tpl->tpl_vars['re']->value['rit_id']==2){?>
					【实习招聘】<input class="com_state_<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['rit_id'];?>
"/>
				<?php }else{ ?>
					【基层招聘】<input id="com_state_<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['re']->value['rit_id'];?>
"/>
				<?php }?>
				
				</div>
				<div style="width:370px; height:20px;">状态:
					<?php if ($_smarty_tpl->tpl_vars['re']->value['cim_veri']==0){?>
						<font color="blue">未审核</font>
					<?php }else{ ?>
						<font color="red">已拒绝(原因：<?php echo (($tmp = @smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['cim_reason'],20))===null||$tmp==='' ? "未填写" : $tmp);?>
)</font>
					<?php }?>
				</div>
				
				<div style="width:370px; height:20px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_date'];?>
</div>
				
				<div style="width:370px; height:20px;">职位:
					<?php if ($_smarty_tpl->tpl_vars['re']->value['office']!=''){?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['off'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['off']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['name'] = 'off';
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['re']->value['office']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['off']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['off']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['off']['total']);
?>
							<?php echo $_smarty_tpl->tpl_vars['re']->value['office'][$_smarty_tpl->getVariable('smarty')->value['section']['off']['index']]['office_name'];?>
&nbsp;
						<?php endfor; endif; ?>
					<?php }else{ ?>
						未填写
					<?php }?>
				</div>
				
				<div style="width:370px; height:20px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_read'];?>
</div>
			
		</div>

	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>
</div>

<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 0 : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['corplist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/manwyjob.php/recruit/verifyinfo/type/".$_tmp1),$_smarty_tpl);?>


    <div class="jqmWindow" id="dialog">
	<div style="height:20px">
		<div id="info-name" style="font-size:16px;float:left"></div>
	
		<div id="cancel" style="cursor:pointer;float:right">取消</div>
		
		<div id="reject" style="cursor:pointer;float:right"></div>
		
		<div id="pass" style="cursor:pointer;float:right">审核通过&nbsp;&nbsp;</div>
	</div>
	<hr/>
		<div id="content">
			<div id="up-content" style="height:auto">
				<div id="company-name" style="text-align:left"></div>
			
				<div id="company-type" style="width:33%;float:left"></div>
				<div id="company-industry" style="width:33%;float:left"></div>
				<div id="company-address" style="width:33%;float:left"></div><br/>
				
				<div id="company-contact" style="width:33%;float:left"></div>
				<div id="company-phone" style="width:33%;float:left"></div>
				<div id="company-email" style="width:33%;float:left"></div><br/>
				
				<div id="company-website" style="text-align:left"></div>
				<input id="com_id" type="hidden" value=""></input>
                
			</div><br/>
		
			<div id="down-content" style="height:auto">
				<b>招聘职位</b>
				<div id="office-info" style="height:auto;width:98%;margin:0 auto;border:1px solid">
				 	
				 	
				</div><br/>
				
				<div >
					<b>招聘简介</b>
					<div id="info-intro" style="width:98%;margin:0 auto">
					
					</div>
				</div><br/>
				
				<div>
					<b>相关附件</b>
					<div id="info-attr" style="width:98%;margin:0 auto">
						
					</div>
				</div>
			</div>
		</div>
		
	</div>

<div id="mask" class="mask"></div>
<div id="pop-container-add" class="pop-container" data="">
	<div class="pop-reject-form-header">
		<div class="pop-reject-form-title" >
				填写拒绝原因
		</div>
		<div id="pop-reject-closebtn-add" class="pop-reject-closebtn">
    		关闭
    	</div>
    	<div style="clear:both;"></div>
    </div>
    <div class="pop-reject-container">

        <div class="pop-reject-title">原因：</div>
       	<div class="pop-reject-text">
       		<textarea id="content2" name="content2" rows="5" cols="40" style="width: 65%"></textarea>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class ="menu-container">
    	<div class="reject-menu">
       		<div style="padding-left:80px;padding-top:10px;height:20px; float:left;">
       			<div id="pop-reject-menu-btnok-add" class="pop-reject-menu-btnok">
       			确定
      			</div>
       		</div>
     	</div>
     </div>
</div>


</body>
</html><?php }} ?>