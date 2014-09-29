<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 20:40:52
         compiled from "admin/tpl/jobfair/jobfairmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:1825231786541e8e88157ac4-95054373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1391e0faca05e87b4bdaee9ae1b8312707b9af' => 
    array (
      0 => 'admin/tpl/jobfair/jobfairmsg.htm',
      1 => 1411993235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825231786541e8e88157ac4-95054373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8e882772d2_69385502',
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
    'keyword' => 0,
    'joblist' => 0,
    're' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8e882772d2_69385502')) {function content_541e8e882772d2_69385502($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.page.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.4.4.min.js"></script>
<title>招聘会管理</title>
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
.calendar-href{line-height:20px; height: 20px;}
.calendar-container{margin:10px;background-color:#E8F1FA;width:250px;height:130px; float:left;border-top:#F50 solid 2px;border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;}
.calendar-container:hover{background:#FCF1CA;}
.calendar-container-header{height:20px; width:250px; text-align: right; border-bottom:1px solid #CCC; }
.calendar-container-item{height:110px; margin:10px; width:250px; text-align:left;}
.calendar-container-item-row{width:250px;height:20px;}
.calendar-container-nothing{margin:10px;}
.pop-container{width:500px;position:absolute;left:40px; top:240px;margin-top:10px; margin-left:10px; border-top:#F50 solid 2px; border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC; background:#F0F5FB;z-index:1001;display:none} 
.pop-calendar-form-header{ width:500px; border-bottom:solid #999 1px;}
.pop-calendar-form-title{float:left;text-align:left; padding:2px 5px; width:200px; }
.pop-calendar-closebtn{ float:right; text-align:right; padding:2px 5px;width:30px;cursor:pointer;  font-size:11px; line-height:20px; color:#000; background:#DBEAF9; border:1px solid #CCC;}
.pop-calendar-closebtn:hover{background:#FCF1CA;}
.pop-calendar-menu-btnok{cursor:pointer;font-size:11px;background:#DBEAF9; border:1px solid #CCC; text-align:center; width:88px;height:20px;float:left;}
.pop-calendar-menu-btnok:hover{background:#FCF1CA;}
.pop-calendar-container{padding:5px 0px; margin:5px 10px;border-bottom: 1px dotted #DDD;}
.pop-calendar-title{ font-size:12px; line-height:22px; color:#000; text-align:right; width:100px; float:left;}
.pop-calendar-text{ font-size:12px; color:#000; text-align:left; width:340px; height:20px;min-height:20px;  float:left;}
.menu-container{ padding:5px 0px; margin:20px 10px;border-bottom: 1px dotted #DDD;width:340px;height:40px;}
.calendar-menu{ font-size:12px; color:#000; text-align:left; width:340px; height:40px;min-height:20px;  float:left;}

</style>

<script type="text/javascript">
$(function(){
	$(".addcalendar").click(function(){
		$("#mask").show();
		$("#pop-container-add").show();
		var title = $(this).attr("var1");
		//alert(title);
		var addr = $(this).attr("var2");
		var time = $(this).attr("var3");
		//var tel = $(this).attr("var4");
		//var assistel =  $(this).attr("var5");
		var content = $(this).attr("var6");
	
		$("#pop-calendar-menu-btnok-add").click(function(){
			//alert("aa");
			var contact = $("#add-contact").val();
			var tel = $("#add-tel").val();
			var student = $("#add-student").val();
			var assistel = $("#add-assistel").val();
			$.ajax({
				type:"POST",
				url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/calendar/addjsondata",
				data:"title="+title+"&time="+time+"&addr="+addr+"&contact="+contact+"&tel="+tel+"&student="+student+"&assistel="+assistel+"&content="+content,
				success:function(msg){
					alert(msg);
					var obj = eval('(' + msg + ')');
					if(obj.json.state == 1){
						alert("添加成功");
						$("#pop-calendar-closebtn-add").click();
						window.location.reload();
					}else{
						alert("该记录已存在不能重复添加！");
					}
				}
					
			});
			
		});
		
	});
	
	$("#pop-calendar-closebtn-add").click(function(){
		$("#mask").hide();
		$("#pop-container-add").hide();
	});
	
	//alert("aa");
});



</script>
</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:招聘会管理</TD></TR>
  	
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

<div style="padding-left:30px;" >
	<font color="#CC0000"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</font>
</div>
<div>

	<div style="padding-left:30px;padding-top:20px;">
		<form  target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/getjobfairmsglist">
			<input type="text" name="keyword" id="keyword" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['keyword']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
			<input type="submit" value="搜索" />
			<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?>
			关键字："<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
",
			<?php }?>
			查询到<?php echo $_smarty_tpl->tpl_vars['joblist']->value['total'];?>
条数据！
		</form>
	</div>
<?php if ($_smarty_tpl->tpl_vars['joblist']->value['total']=="0"){?>
	<div style="padding-left:30px;padding-top:20px;">	
		没有数据
	</div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['joblist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
<div style="padding-left:30px;padding-top:20px;background-color:white;width:400px;height:150px; float:left">
	<div <?php if ($_smarty_tpl->tpl_vars['re']->value['jm_isup']==''||$_smarty_tpl->tpl_vars['re']->value['jm_isup']=="0000-00-00 00:00:00"){?>class="disable"<?php }else{ ?>class="enable"<?php }?> >
		<div style="heig  ht:20px; width:400px; text-align: right; ">
    		<a target="top" style="line-height:20px; height: 20px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_id'];?>
">查看详情</a>
			&nbsp;&nbsp;
    		<a style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/editjobfairmsg/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_id'];?>
">修改</a>
			&nbsp;&nbsp;
		   	<a onclick="return confirm('确认删除这条招聘信息吗？');" style="line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/getjobfairmsglist/do/del/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_id'];?>
">删除</a>
			&nbsp;&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['re']->value['jm_isup']==''||$_smarty_tpl->tpl_vars['re']->value['jm_isup']=="0000-00-00 00:00:00"){?>
	    	 <a  style="width: 60px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/getjobfairmsglist/do/up/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_id'];?>
">置顶</a>
			<?php }else{ ?>
			<a  style="width: 80px; line-height:20px; height: 20px;"  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/getjobfairmsglist/do/cancelup/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_id'];?>
">取消置顶</a>
			<?php }?>
			&nbsp;&nbsp;
		</div>
		<div style="height:110px; margin:10px; width:380; text-align:left;" >
			<?php if ($_smarty_tpl->tpl_vars['re']->value['pic_id']==''){?>
				<div style="width:370px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_name'];?>
</div>
				<div style="width:370px; height:30px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_date'];?>
</div>
				<div style="width:370px; height:30px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_read'];?>
</div>
				<!-- 
				<div class="addcalendar" style="width:220px;cursor:pointer;" var1="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_name']);?>
" var2="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_addr']);?>
" var3="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_opentime']);?>
"
				var6="<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_content']),1024);?>
">将此招聘会信息添加到工作日历中+</div>
			 -->	
			<?php }else{ ?>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<img style="max-width:100px;max-height:110px;" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['re']->value['pic_link'];?>
" />
				</div>
				<div style="float:left;width:100px;height:110px;margin:10px;">
					<div style="width:220px;">标题:<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_name'];?>
</div>
					<div style="width:220px; height:20px;">发布时间:<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_date'];?>
</div>
					<div style="width:220px; height:20px;">浏览次数:<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_read'];?>
</div>
					<!-- 
					<div class="addcalendar" style="width:220px;cursor:pointer;" var1="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_name']);?>
" var2="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_addr']);?>
" var3="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_opentime']);?>
"
					 var6="<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['jm_content']),1024);?>
">将此招聘会信息添加到工作日历中+</div>
				 -->
				</div>
			<?php }?>
		</div>


	</div>
</div>
<?php } ?>
<?php }?>
<div style="clear: both;"></div>

</div>

<div id="mask" class="mask"></div>
<div id="pop-container-add" class="pop-container" data="">
	<div class="pop-calendar-form-header">
		<div class="pop-calendar-form-title" >
				添加到工作日历请先填写单位联系人及学生助理信息
		</div>
		<div id="pop-calendar-closebtn-add" class="pop-calendar-closebtn">
    		关闭
    	</div>
    	<div style="clear:both;"></div>
    </div>
    <div class="pop-calendar-container">
    	<div class="pop-calendar-title">联系人姓名：</div>
       	<div class="pop-calendar-text">
       		<input id="add-contact" type="text" name="add-contact" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
        <div style="clear:both"></div>
        <div class="pop-calendar-title">联系人电话：</div>
       	<div class="pop-calendar-text">
       		<input id="add-tel" type="text" name="add-tel" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
        <div style="clear:both"></div>
        <div class="pop-calendar-title">学生助理姓名：</div>
       	<div class="pop-calendar-text">
       		<input id="add-student" type="text" name="add-student" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
        <div style="clear:both"></div>
        <div class="pop-calendar-title">学生助理电话：</div>
       	<div class="pop-calendar-text">
       		<input id="add-assistel" type="text" name="add-assistel" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
       
    </div>
    <div class ="menu-container">
    	<div class="calendar-menu">
       		<div style="padding-left:180px;padding-top:10px;height:20px; float:left;">
       			<div id="pop-calendar-menu-btnok-add" class="pop-calendar-menu-btnok">
       			确定
      			</div>
       		</div>
     	</div>
     </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)){?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("/manwyjob.php/jobfair/getjobfairmsglist/keyword/".((string)$_smarty_tpl->tpl_vars['keyword']->value), null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("/manwyjob.php/jobfair/getjobfairmsglist", null, 0);?> 
<?php }?>
<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['joblist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>


</body>
</html><?php }} ?>