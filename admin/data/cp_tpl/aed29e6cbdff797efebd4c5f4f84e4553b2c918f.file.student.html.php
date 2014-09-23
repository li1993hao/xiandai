<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:42:18
         compiled from "admin/tpl/frontuser/student.html" */ ?>
<?php /*%%SmartyHeaderCode:1491768254541e8f6ae06ec7-10670080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed29e6cbdff797efebd4c5f4f84e4553b2c918f' => 
    array (
      0 => 'admin/tpl/frontuser/student.html',
      1 => 1400905108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491768254541e8f6ae06ec7-10670080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8f6ae95a43_76145270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8f6ae95a43_76145270')) {function content_541e8f6ae95a43_76145270($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/recruit/style.css" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/corpinternmsg/calendar.css" />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.print.css' media='print' />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.min.js'></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.css" rel="Stylesheet" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.js"></script>
<script type="text/javascript">
var collegeName = "null";
var grade = 0;
var pro = "null";
var degree = 3;
var cur_page = 1;
var stugender = 3;
var stuname = "null";
var stunumber = "null";
var stustate = 2;

$(document).ready(function(){
	getInfo(0,1);
	getProList(1);
	getGrade(2);
	getCollege(3);

});
function getPage(nowpage,totalpage){
	//alert(nowpage+"/"+totalpage);
	if(totalpage < 1){
		return "";
	}
	var page = "<div class=\"act-page\">";
	if(nowpage==1){
		page += "<input class=\"small-btn-noclick\"  type=\"button\" value=\"1\" />";
	}else{
		page += "<input class=\"small-btn\"  type=\"button\" value=\"上页\" onclick=\"prepage("+nowpage+","+totalpage+")\" />";
		page += "<input class=\"small-btn\"  type=\"button\" value=\"1\" onclick=\"gopage(1,"+totalpage+")\" />";
		
		if(nowpage-1 > 5){
			var i;
			
			for(i=2;i<=3;i++){
				//alert("i1:"+i);
				page += "<input class=\"small-btn\"  type=\"button\" value=\""+i+"\" onclick=\"gopage("+i+","+totalpage+")\" />";	
				
			}	
			page += "...";
			for(i= nowpage - 2 ; i < nowpage;i++){
				//alert("i2:"+i);
				page += "<input class=\"small-btn\"  type=\"button\" value=\""+i+"\" onclick=\"gopage("+i+","+totalpage+")\" />";	
			}
		}else{
			var i;
			for(i=2;i<nowpage;i++){
				//alert("i3:"+i);
				page += "<input class=\"small-btn\"  type=\"button\" value=\""+i+"\" onclick=\"gopage("+i+","+totalpage+")\" />";
			}	
		}
		page += "<input class=\"small-btn-noclick\"  type=\"button\" value=\""+nowpage+"\" />";
		
	}
	if(nowpage != totalpage){
		//alert("total-now:"+(totalpage-nowpage));
		if( (totalpage-nowpage) > 5){
			var j;
			for(j= parseInt(nowpage)+1;j<= parseInt(nowpage)+2;j++){
				//alert("j1:"+j);
				page += "<input class=\"small-btn\"  type=\"button\" value=\""+j+"\" onclick=\"gopage("+j+","+totalpage+")\" />";	
				
			}	
			page += "...";
			for(j=totalpage-2;j<totalpage;j++){
				//alert("j2:"+j);
				page += "<input class=\"small-btn\"  type=\"button\" value=\""+j+"\" onclick=\"gopage("+j+","+totalpage+")\" />";	
			}
			
		}else{
			//alert(nowpage);
			var k = parseInt(nowpage)+1;
			for(k ; k < totalpage; k++){
				//alert("k:"+k);
				page += "<input class=\"small-btn\"  type=\"button\" value=\""+k+"\" onclick=\"gopage("+k+","+totalpage+")\" />";	
			}
		}
		page += "<input class=\"small-btn\"  type=\"button\" value=\""+totalpage+"\" onclick=\"gopage("+totalpage+","+totalpage+")\" />";
		page += "<input class=\"small-btn\"  type=\"button\" value=\"下页\" onclick=\"nextpage("+nowpage+","+totalpage+")\" />";
	}
	
	
	page += "</div>";
	return page;
}
//上一页
function prepage(nowpage,totalpage){
	if( nowpage <=1 ){return false;}
	page = nowpage - 1;
	gopage(page,totalpage);

}

//下一页
function nextpage(nowpage,totalpage){
	if( nowpage == totalpage ){return false;}
	page = nowpage + 1;
	gopage(page,totalpage);

}
function gopage(destpage,totalpage){
	if( destpage > totalpage ){return false;}
	if( destpage <1 ){return false;}
	cur_page = destpage;
	getInfo(0,destpage);
}
function getInfo(flag,page){
	//var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag+"/college/"+collegeName+"/grade/"+grade+"/major/"+pro+"/degree/"+degree;
	//alert(url);
	collegeName = $("#college").val();
	grade = $("#nianji").val();
	pro = $("#major").val();
	degree = $("#eduction").val();
	//alert(collegeName);
	gender = $("#stugender").val();
	stuname = $("#stuname").attr("value");
	number = $("#stunumber").attr("value");
	state = $("#stustate").val();
	
	//alert("");
	$("#mytable").html("正在载入，请稍后。。。");
	$.ajax({
		url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/getallstudentinfo/",
		data:{type:flag,college:collegeName,grade:grade,major:pro,degree:degree,page:page,gender:gender,stuname:stuname,number:number,state:state},
		type:"POST",
		async:false,
		dataType:"json",
		success:function(data){
			//alert(data.json.data.list.stu_gender);
			var str = "";
			if(data.json.state == 1){
				$.each(data.json.data.list,function(index,item){
					//alert(item.stu_gender);
					str += "<div style=\"padding-left:20px;padding-top:10px;background-color:white;width:400px;height:150px;float:left\">";
					//alert(item.fu_isable);
					if(item.fu_isable == 1){
						str += "<div class=\"disable\">";
					}else{
						str += "<div class=\"enable\">";
					}
					str += "<div style=\"height:20px; width:400px; text-align: right; \">";
	 			 	str += "<a style=\"line-height:30px; height: 30px;\" id=\"studetail"+ item.fu_id +"\" class=\"studetail\" data=\""+item.fu_id+"\" href=\"javascript:void(0)\">详情</a>&nbsp;&nbsp;";
	 			 	str += "<a style=\"line-height:30px; height: 30px;\" class=\"resetpw\" data=\""+ item.fu_id +"\"  href=\"javascript:void(0)\">重置密码</a>&nbsp;&nbsp;";
	 			 	if(item.fu_isable == 1){
	 			 		str += "<a style=\"line-height:30px; height: 20px;\"  href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/disablestu/id/"+ item.fu_id +"\">冻结</a>&nbsp;&nbsp;";
	 			 	}else{
	 			 		str += "<a style=\"line-height:30px; height: 20px;\"  href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/enablestu/id/"+ item.fu_id +"\">激活</a>&nbsp;&nbsp;";
	 			 	}
	 			 	str += "&nbsp;&nbsp;</div>";
	 			 	str += "<div style=\"height:110px; margin:10px; width:380; text-align:left;\" >";
	 			 	str += "<div style=\"width:33%;float:left\">学号:"+item.fu_number+"</div>";
	 			 	str += "<div style=\"width:33%;float:left\">姓名:"+item.stu_name+"</div>";
	 			 	if(item.stu_gender == 0){
	 			 		str += "<div style=\"width:33%;float:left\">性别:男</div>";
	 			 	}else{
	 			 		str += "<div style=\"width:33%;float:left\">性别:女</div>";
	 			 	}
	 			 	
	 			 	str += "<div style=\"width:33%;float:left\">所属学院:"+item.stu_college+"</div>";
	 			 	str += "<div style=\"width:66%;float:left\">专业:"+item.stu_pro+"</div>";
	 			 
					
	 			 	if(item.stu_education == 0){
	 			 		str += "<div style=\"width:33%;float:left\">学历:本科</div>";
	 			 	}else if (item.stu_education == 1){
	 			 		str += "<div style=\"width:33%;float:left\">学历:硕士</div>";
	 			 	}else{
	 			 		str += "<div style=\"width:33%;float:left\">学历:博士</div>";
	 			 	}
	 			 	str += "<div style=\"width:66%;float:left\">年级:"+item.stu_grade+"</div>";
	 			 	
	 			 	str += "</div></div></div>";
	 			 	
				});
				$("#mytable").html(str);
				//alert(str);
				var pagestr= getPage(data.json.data.page,data.json.data.totalPage);
				//alert(str);
				$("#page-item").html(pagestr);
			}else{
				str +="<th class=\"spec\" colspan=\"7\">暂无记录</th>";
				$("#mytable").html(str);
				$("#page-item").html("");
			}
		},
		error:function(msg){
			//alert(str);
			alert("网络出现问题！");
		}
	});
}

function getProList(flag){
	//var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getstudentinfo/flag/"+flag+"/type/"+infoType+"/infoid/"+infoId+"/major/"+pro+"/time/"+timeRange;
	//alert(url);
	$.ajax({
		url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/getallstudentinfo/",
		data:{type:flag},
		type:"POST",
		async:false,
		dataType:"json",
		success:function(data){
			var str = "";
			if(data.json.state == 1){
				str += "<option value=\"0\" selected=\"selected\">不限</option>";
				$.each(data.json.data,function(index,item){
					str += "<option value=\""+item.pro+"\">"+item.pro+"</option>";
				});
				$("#major").html(str);
			}else{
				$("#major").html(str);
			}
		},
		error:function(msg){
			alert("网络出现问题！");
		}
	});
}

function getGrade(flag){
	//var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag;
	//alert(url);
	$.ajax({
		url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/getallstudentinfo/",
		data:{type:flag},
		type:"POST",
		async:false,
		dataType:"json",
		success:function(jsondata){
			var str = "";
			if(jsondata.json.state == 1){
				//alert(jsondata.json.data);
				str += "<option value=\"0\" selected=\"selected\">不限</option>";
				$.each(jsondata.json.data,function(index,item){
					//alert(item.grade);
					str += "<option value=\""+item.grade+"\">"+item.grade+"级</option>";
				});
				//alert(str);
				$("#nianji").html(str);
			}else{
				$("#nianji").html(str);
			}
		},
		error:function(msg){
			alert("网络出现问题！");
		}
	});
}

function getCollege(flag){
	//var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag;
	//alert(url);
	$.ajax({
		url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/getallstudentinfo/",
		data:{type:flag},
		type:"POST",
		async:false,
		dataType:"json",
		success:function(jsondata){
			var str = "";
			if(jsondata.json.state == 1){
				//alert(jsondata.json.data);
				str += "<option value=\"0\" selected=\"selected\">不限</option>";
				$.each(jsondata.json.data,function(index,item){
					//alert(item.college);
					str += "<option value=\""+item.college+"\">"+item.college+"</option>";
				});
				//alert(str);
				$("#college").html(str);
			}else{
				$("#college").html(str);
			}
		},
		error:function(msg){
			alert("网络出现问题！");
		}
	});
}

$(function(){
	$(".studetail").live("click",function(){
		var infoid = $(this).attr("data");
		//alert(infoid);
		$("#dialog").fadeIn("fast");
		$("#stu-name").text("姓名：未填写");
		$("#gender").text("性别：未填写");
		$("#education").text("学历：未填写");
		$("#grade").text("年级：未填写");
		$("#source").text("生源地：未填写");
		$("#birth").text("生日：未填写");
		$("#college2").text("学院：未填写");
		$("#pro").text("专业：未填写");
		$("#home").text("籍贯：未填写");
		$("#politic").text("政治面貌：未填写");
		//$("#resume").html(str);
		$("#intro").text("个人简介：未填写");
		$("#content-right").text("未上传图片");
		
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/getstudetail/infoid/"+infoid,
			type:"post",
			success:function(msg){
				var obj = eval('(' + msg + ')');
				//alert(obj.json.data.name);
				$("#stu-name").text(obj.json.data.name);
				
				if(obj.json.data.gender == 0){
					$("#gender").text("性别：男");
				}else{
					$("#gender").text("性别：女");
				}
				
				if(obj.json.data.education == 0){
					$("#education").text("学历：本科");
				}else if(obj.json.data.education == 1){
					$("#education").text("学历：硕士");
				}else{
					$("#education").text("学历：博士");
				}
				
				$("#grade").text("年级："+obj.json.data.grade);
				$("#source").text("生源地："+obj.json.data.source);
				var birth = (obj.json.data.birth).substr(0,10);
				$("#birth").text("生源："+birth);
				$("#college2").text("学院："+obj.json.data.college);
				$("#pro").text("专业："+obj.json.data.pro);
				$("#home").text("籍贯："+obj.json.data.home);
				$("#politic").text("政治面貌："+obj.json.data.politic);
				var str = "简历：<a href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/"+ obj.json.data.filelink +"\">"+ obj.json.data.filename +"<a>"
				$("#resume").html(str);
				var industry = "";
				$.each(obj.json.data.stuindustry,function(i, item){
					industry += item.indType + "&nbsp;";
				});
				$("#insterest").append(industry);
				$("#intro").text("个人简介："+ obj.json.data.intro);
				//alert(obj.json.data.intro);
				var image = "<img style=\"margin-left:10px;max-height:100px;max-width:100px\" src=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/"+obj.json.data.piclink+"\" />";
				//alert(image);
				$("#content-right").html(image);
			}
			
			
		});
	});
	
	$("#chosen-ok").live("click", function(){
		
		$("#dialog").fadeOut("fast");
	});
	
	var stuid
	
	$(".resetpw").live("click", function(){
		stuid = $(this).attr("data");
		//alert(fuid);
		$("#mask").fadeIn("fast");
		$("#pop-container-add").fadeIn("fast");
		$("#resetpw").attr("value","");
		

	});
	
	$("#pop-setpw-menu-btnok-add").live("click", function(){
		
		var pw = $("#resetpw").attr("value");
		//alert(stuid);
		
		$.ajax({
			type:"post",
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/resetpw",
			data:"stuid="+stuid+"&pw="+pw,
			success:function(msg){
				//alert(msg);
				var obj = eval('(' + msg + ')');
				if(obj.json.state == 1){
					alert("重置成功");
					$("#mask").fadeOut("fast");
					$("#pop-container-add").fadeOut("fast");
				}
			}
		});
	});
	
	
	$("#pop-setpw-closebtn-add").live("click", function(){
		$("#mask").fadeOut("fast");
		$("#pop-container-add").fadeOut("fast");
	});
	
	$("#search").live("click",function(){
		getInfo(0,1);
	});
	
	
});



</script>
<style>
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
.student-search-item{width:700px; margin:5px 10px;}
.student-search-item-title{display:inline-block;width:auto;text-align:right;margin:5px 5px 5px 20px;}
.student-search-button{cursor:pointer;background:#404038; border:1px solid #CCC; text-align:center;color:white;width:80px;margin:5px 5px 0px 20px;}
.act-page{ width:650px; margin:20px; text-align:left; height:30px;}
.small-btn{  padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#E8F1FA; cursor:pointer;}
.small-btn:hover{background:#FCF1CA;}
.small-btn-noclick{ padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#666; cursor:none;}
#content-left{font-size:16px;width:35%;float:left;}
#content-middle{font-size:16px;width:35%;float:left;}
#content-right{	font-size:16px;width:30%;float:left;}
#content-down{font-size:16px;width:100%;float:left;}
.mask{height:100%; width:100%; position:fixed; _position:absolute; top:0; z-index:1000;  opacity:0.5; filter: alpha(opacity=50); background-color:#000; display:none;}
.setpw-href{line-height:20px; height: 20px;}
.setpw-container{margin:10px;background-color:#E8F1FA;width:250px;height:130px; float:left;border-top:#F50 solid 2px;border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;}
.setpw-container:hover{background:#FCF1CA;}
.setpw-container-header{height:20px; width:250px; text-align: right; border-bottom:1px solid #CCC; }
.setpw-container-item{height:110px; margin:10px; width:250px; text-align:left;}
.setpw-container-item-row{width:250px;height:20px;}
.setpw-container-nothing{margin:10px;}
.pop-container{width:400px;position:absolute;left:40px; top:240px;margin-top:10px; margin-left:10px; border-top:#F50 solid 2px; border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC; background:#F0F5FB;z-index:1001;display:none} 
.pop-setpw-form-header{ width:400px; border-bottom:solid #999 1px;}
.pop-setpw-form-title{float:left;text-align:left; padding:2px 5px; width:200px; }
.pop-setpw-closebtn{ float:right; text-align:right; padding:2px 5px;width:30px;cursor:pointer;  font-size:11px; line-height:20px; color:#000; background:#DBEAF9; border:1px solid #CCC;}
.pop-setpw-closebtn:hover{background:#FCF1CA;}
.pop-setpw-menu-btnok{cursor:pointer;font-size:11px;background:#DBEAF9; border:1px solid #CCC; text-align:center; width:88px;height:20px;float:left;}
.pop-setpw-menu-btnok:hover{background:#FCF1CA;}
.pop-setpw-container{padding:5px 0px; margin:5px 10px;border-bottom: 1px dotted #DDD;}
.pop-setpw-title{ font-size:12px; line-height:22px; color:#000; text-align:right; width:40px; float:left;}
.pop-setpw-text{ font-size:12px; color:#000; text-align:left; width:340px; height:20px;min-height:20px;  float:left;}
.menu-container{ padding:5px 0px; margin:40px 10px;border-bottom: 1px dotted #DDD;width:340px;height:40px;}
.setpw-menu{ font-size:12px; color:#000; text-align:left; width:340px; height:40px;min-height:20px;  float:left;}
</style>
<title>学生管理</title>

</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:学生管理</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>

  	<div id="middle_left" style="margin-left:20px;width:auto">
      
      		<div class="student-search">
			<div class="student-search-item">
				<div class="student-search-item-title">学院</div>
				<select id="college" name="college">
					<option value="0" selected="selected">不限</option>
				</select>
				<div class="student-search-item-title">年级</div>
				<select id="nianji" name="nianji">
					<option value="0" selected="selected">不限</option>
				</select>
				<div class="student-search-item-title">学历</div>
				<select id="eduction" name="eduction">
					<option value="3" selected="selected">不限</option>
					<option value="0">本科</option>
					<option value="1">硕士</option>
					<option value="2">博士</option>
				</select>
				<div class="student-search-item-title">专业</div>
				<select id="major" name="major">
					<option value="0" selected="selected">不限</option>
				</select>
				<br/>
				<div class="student-search-item-title">性别</div>
				<select id="stugender" name="stugender">
					<option value="3" selected="selected">不限</option>
					<option value="2">男</option>
					<option value="1">女</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="student-search-item-title">学号</div>
				<input type="text" id="stunumber" size="8">
				<div class="student-search-item-title">姓名</div>
				<input type="text" id="stuname" size="5">
				<div class="student-search-item-title">状态</div>
				<select id="stustate" name="stustate">
					<option value="3" selected="selected">不限</option>
					<option value="2">已激活</option>
					<option value="1">未激活</option>
				</select>
				<div class="student-search-item-title" id="search" style="color:red;cursor:pointer">筛选</div>
			</div>
			
		</div>
	
			<div id="mytable" style="height:auto;width:auto">  
		 	
		 	</div>  
	
      
    </div>   
     
    <div id="page-item" class="page-item" style="margin-top:20px"></div>
    
  <div class="jqmWindow" id="dialog">
	<div id="stu-name" style="font-size:16px">
	</div><hr/>
	    		<div id="content-left">
    			<div id="gender" class="content-info">
    				
				</div>
				<div id="education" class="content-info">
    				
				</div>
				<div id="grade" class="content-info">
    				
				</div>
				<div id="source" class="content-info">
    				
				</div>
				
    		</div>
            
			<div id="content-middle">
    			<div id="birth" class="content-info">
    			
				</div>
				<div id="college2" class="content-info">
    				
				</div>
				<div id="pro" class="content-info">
    				专业：未填写
				</div>
				<div id="home" class="content-info">
    				籍贯：未填写
				</div>
			</div>
           
            <div id="content-right" >
    		
    		</div>
    		
    		<div id="content-down">
    		   <div id="politic" class="content-info">
    				政治面貌：未填写
				</div>
				<div id="resume" class="content-info">
    				简历：<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/">啊</a>
				</div>
				<div id="insterest" class="content-info" style="height:auto">
    				感兴趣的领域：
    					
				</div>
				<div id="intro" class="content-info">
    				个人简介：未填写
				</div><br/>
    		</div> 
	<div id="chosen-ok" style="cursor:pointer;font-size:16px;float:left">
		确定
	</div>
	
</div>

<div id="mask" class="mask"></div>

<div id="pop-container-add" class="pop-container" data="">
	<div class="pop-setpw-form-header">
		<div class="pop-setpw-form-title" >
				重置密码
		</div>
		<div id="pop-setpw-closebtn-add" class="pop-setpw-closebtn">
    		关闭
    	</div>
    	<div style="clear:both;"></div>
    </div>
    <div class="pop-setpw-container">

        <div class="pop-setpw-title">密码：</div>
       	<div class="pop-setpw-text">
       		<input type="text" name="resetpw" id="resetpw" size="20"  />
        </div>
        <div style="clear:both"></div>
    </div>
    <div class ="menu-container">
    	<div class="setpw-menu">
       		<div style="padding-left:80px;padding-top:10px;height:20px; float:left;">
       			<div id="pop-setpw-menu-btnok-add" class="pop-setpw-menu-btnok">
       			确认
      			</div>
       		</div>
     	</div>
     </div>
</div>
         
</body>
</html><?php }} ?>