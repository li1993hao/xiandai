<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:47:46
         compiled from "admin/tpl/calendar/calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:1899605294541e90b28bf4c8-74320800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411c2cf3999f5e838d6b08058d08a32522e26c29' => 
    array (
      0 => 'admin/tpl/calendar/calendar.html',
      1 => 1397443490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899605294541e90b28bf4c8-74320800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e90b2927d57_13151071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e90b2927d57_13151071')) {function content_541e90b2927d57_13151071($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<script type="text/javascript">
$(function(){
	//alert("aa");
	var canlendar = new calendar_view("#middle_left","<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
");
	canlendar.generateCalendar();

	$(".event-info").mouseleave(function(event){

		//fc-event-inner
		if($(event.relatedTarget).attr("class") != "fc-event-inner fc-event-skin" && $(event.relatedTarget).attr("class") != "fc-event-title"){
			$(".event-info").hide("fast");
		}
		
	});
	
	$("#add-opentime").focus(function(){
		WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'});
	});
	
	
	$("#pop-calendar-closebtn-add").click(function(){
		$("#mask").hide();
		$("#pop-container-add").hide();
	});
	
	$("#pop-calendar-menu-btnok-add").click(function(){
		if( $("#add-title").val() == ""){
			//$("#result").text("标题不能为空！");
			alert("标题不能为空！");
			$("#add-title").focus();
			//return false;
		}else if($("#add-opentime").val() == ""){
			alert("时间不能为空！");
			//$("#add-opentime").focus();
			//return false;
		}else if ($("#add-addr").val() == ""){
			alert("地点不能为空！");
			$("#add-addr").focus();
			//return false;
		}else{
			var title = $("#add-title").val();
			//alert(title);
			var time = $("#add-opentime").val();
			var addr = $("#add-addr").val();
			var contact = $("#add-contact").val();
			var tel = $("#add-tel").val();
			var student = $("#add-student").val();
			var assistel = $("#add-assistel").val();
			var content = $("#content").val();
			//alert(content);
			$.ajax({
				type:"POST",
				url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/calendar/addjsondata",
				data:"title="+title+"&time="+time+"&addr="+addr+"&contact="+contact+"&tel="+tel+"&student="+student+"&assistel="+assistel+"&content="+content,
				success:function(msg){
					var obj = eval('(' + msg + ')');
					if(obj.json.state == 1){
						alert("添加成功");
						$("#pop-calendar-closebtn-add").click();
						window.location.reload();
					}else{
						alert("添加失败");
					}
				}
					
			});
		}
	});
		
});
	

function add(){
	$("#mask").show();
	$("#pop-container-add").show();
}

function calendar_view(containerid,basePath) {
	var container = $(containerid);
	this.generateCalendar = function() {

		var viewsets = {
			defaultView : 'month',
			header : {
				
				left : 'month,agendaWeek,agendaDay prevYear,nextYear',
				center : 'title',
				right : ' prev,next today'
			},
			weekends : true,
			weekMode : 'liquid',
			editable : false,

			disableResizing : false,
			// event ajax
			lazyFetching : true,
			startParam : 'start',
			endParam : 'end',

			isRTL : false,
			firstDay : 1,
			monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月',
					'九月', '十月', '十一月', '十二月' ],
			monthNamesShort : [ '一月', '二月', '三月', '四月', '五月', '六月', '七月',
					'八月', '九月', '十月', '十一月', '十二月' ],
			dayNames : [ '周日', '周一', '周二', '周三', '周四', '周五', '周六'  ],
			dayNamesShort : [ '周日','周一', '周二', '周三', '周四', '周五', '周六'],
			buttonText : {
				prev : '&#9668;',
				next : '&#9658;',
				prevYear : '&lt;&lt;上一年',
				nextYear : '下一年&gt;&gt;',
				today : '今天',
				month : '月',
				week : '周',
				day : '天'
				
			},
			agenda: 'HH:mm{ - HH:mm}', 
		    '': 'HH:mm',
		    timeFormat: 'HH:mm',
		    allDayText:"全天",
		    axisFormat: 'HH:mm',
		    slotMinutes:60,
		    firstHour:6,
		    slotEventOverlap:false,
		    
			dayClick: function(date, allDay, jsEvent, view) {

		        // change the day's background color just for fun
		        //$(this).css('background-color', 'red');
		        container.fullCalendar( 'changeView', "agendaDay" );
		        container.fullCalendar( 'gotoDate', date.getFullYear(),date.getMonth(),date.getDate() );

		    },
	 		  eventMouseover:function( event, jsEvent, view ){
		    	$(".event-info").html("标题："+event.title+"&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/calendar/delcalendar/id/"+event.id+"\">【删除此条信息】</a><br/>地点："+event.addr+"<br/>联系人姓名："+event.contact+"<br/>联系人电话："+event.tel+"<br/>学生助理姓名："+event.student+"<br/>学生助理电话："+event.assistel+"<br/>时间："+event.start.getFullYear()+"-"+(event.start.getMonth()+1)+"-"+event.start.getDate()+"&nbsp;"+event.start.toLocaleTimeString()+"<br/>内容："+event.content);
		    	//alert("jsEvent"+jsEvent.pageX+"..."+jsEvent.pageY);
		    	$(".event-info").css("left",$(jsEvent.target).offset().left+"px");
		    	$(".event-info").css("top",$(jsEvent.target).offset().top+$(jsEvent.target).height()+"px");
		    	//$(".event-info").clearQueue();
		    	$(".event-info").css("width","auto");
		    	$(".event-info").css("max-width","500px");
		    	$(".event-info").stop(true,true);
		    	$(".event-info").show("fast");
		    	//alert(event+"...."+jsEvent+"...."+view);
		    	
		    },
		    eventMouseout:function( event, jsEvent, view ){
		 
		    	if($(jsEvent.relatedTarget).attr("class")!="event-info"){
		    		$(".event-info").hide("fast");
		    	}
		    	
		    	
		    },
			events : function(start, end, callback) {	
				
				var events = [];
				var goUrl = basePath+"/manwyjob.php/calendar/Getjsondata";
				
				$.ajax({
				   	type: "POST",
				   	data:"start="+start.getTime()+"&end="+end.getTime()+"",
				   	url: goUrl,
				   	success: function(msg){
				  		//alert( msg );
				  		var myObject = eval('(' + msg + ')');
				  		//jm_opentimestamp":"1380816000
				  		
				  		$.each(myObject, function(idx, iteminfo) {
						
							events.push({
								id:iteminfo.cal_id,
								title : iteminfo.cal_name,
								start :new Date(iteminfo.cal_opentimestamp*1000),
								allDay: false,
								addr:iteminfo.cal_addr,
								contact:iteminfo.cal_contact,
								tel:iteminfo.cal_tel,
								student:iteminfo.cal_stu,
								assistel:iteminfo.cal_assis_tel,
								content:iteminfo.cal_content,
								//url : basePath+"/index.php/jobfairmsg/calendardetail/id/"+iteminfo.jm_id,
								color: '#99CC33'
								// will be parsed
							});
						});
						callback(events);
					},
					error:function(msg){
						alert("网络出现故障请重试");
					}
				});
				
			},
			eventColor: '#378006'
		};
		container.fullCalendar(viewsets);
	};// generateCalendar
	
	this.refetchEvents = function() {
		container.fullCalendar('refetchEvents');
	};
	
};// function calendar_view


function ShowObjProperty ( obj ) { 
	// 用来保存所有的属性名称和值 
	var props = "" ; 
	// 开始遍历 
	for ( var p in obj ){ 
		// 方法 
		if ( typeof ( obj [p]) == "function" ){ 
				//obj [p]() ; 
			props += p + " = function \t " ; 
		} else { 
			// p 为属性名称，obj[p]为对应属性的值 
			props += p + " = " + obj [ p ] + " \t " ; 
			//props += p + "  \t " ; 
		} 
	} 
	// 最后显示所有的属性 
	alert ( props ) ; 
} 
</script>
<style>
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
.menu-container{ padding:5px 0px; margin:70px 10px;border-bottom: 1px dotted #DDD;width:340px;height:40px;}
.calendar-menu{ font-size:12px; color:#000; text-align:left; width:340px; height:40px;min-height:20px;  float:left;}
</style>
<title>工作日历</title>

</head>
<body>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  	<TR height=28><TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">当前位置:工作日历</TD></TR>
  	<TR><TD bgColor=#b1ceef height=1></TD></TR>
  	<TR height=20>
    	<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
	</TR>
</TABLE>
	<div id="addcalendar" onclick="add();" style="margin:20px">
	<button>添加工作日历</button>
	</div>
	
  	<div id="middle_left" style="margin-left:20px;">
      </div>   
         
       <div class="event-info">   	
      </div> 
  	
<div id="mask" class="mask"></div>
<div id="pop-container-add" class="pop-container" data="">
	<div class="pop-calendar-form-header">
		<div class="pop-calendar-form-title" >
				添加工作日历
		</div>
		<div id="pop-calendar-closebtn-add" class="pop-calendar-closebtn">
    		关闭
    	</div>
    	<div style="clear:both;"></div>
    </div>
    <div class="pop-calendar-container">
    	<div class="pop-calendar-title">标题：</div>
       	<div class="pop-calendar-text">
       		<input id="add-title" type="text" name="add-title" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
        <div style="clear:both"></div>
        <div class="pop-calendar-title">时间：</div>
       	<div class="pop-calendar-text">
       		<input id="add-opentime" type="text" name="add-opentime" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
        <div style="clear:both"></div>
        <div class="pop-calendar-title">地点：</div>
       	<div class="pop-calendar-text">
       		<input id="add-addr" type="text" name="add-addr" size="30" value="" /><font style="color:red;size:20px">(必填)</font>
        </div>
        <div style="clear:both"></div>
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
        <div style="clear:both"></div>
        <div class="pop-calendar-title">内容：</div>
       	<div class="pop-calendar-text">
       		<textarea id="content" name="content" rows="5" cols="40" style="width: 65%"></textarea>
        </div>
        <div style="clear:both"></div>
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



</body>
</html><?php }} ?>