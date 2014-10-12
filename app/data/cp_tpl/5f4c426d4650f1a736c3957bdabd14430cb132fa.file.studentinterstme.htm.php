<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 15:26:54
         compiled from "app/tpl/company/studentinterstme.htm" */ ?>
<?php /*%%SmartyHeaderCode:1326897288542a5b3e19ff60-65724668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4c426d4650f1a736c3957bdabd14430cb132fa' => 
    array (
      0 => 'app/tpl/company/studentinterstme.htm',
      1 => 1412042840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1326897288542a5b3e19ff60-65724668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a5b3e230085_23434710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a5b3e230085_23434710')) {function content_542a5b3e230085_23434710($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php echo $_smarty_tpl->getSubTemplate ('commcss.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/content.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/cor_drop.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/myinfo.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
    <title>企业基本信息</title>
    <style>
        <style>
        .act-page{ width:610px; margin-top:20px; text-align:left; height:30px;float:left;}
        .small-btn{  padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#E8F1FA; cursor:pointer;}
        .small-btn:hover{background:#FCF1CA;}
        .small-btn-noclick{ padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#666; cursor:none;}
    </style>
   <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
</head>
<script type="text/javascript">
    var infoType = 0;
	var infoId = 0;
	var pro = "null";
	var timeRange = 0;
	var cur_page = 1;
	$(document).ready(function(){
		getInfo(0,1);
		getProList(2);
		getInfoList(1);
		$("#type").change(function(){
			infoType = $("#type").val();
			infoId = 0;
			pro = "null";
			timeRange = 0;
			getInfo(0,1);
			getProList(2);
			getInfoList(1);
		});
		$("#zhuanye").change(function(){
			pro = $("#zhuanye").val();
			getInfo(0,1);
		});
		$("#insterested").change(function(){
			infoId = $("#insterested").val();
			getInfo(0,1);
		});
		$("#shijian").change(function(){
			timeRange = $("#shijian").val();
			getInfo(0,1);
		});
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
		$("#mytable").html("正在载入，请稍后。。。");
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getstudentinfo/",
			data:{flag:flag,type:infoType,infoid:infoId,major:pro,time:timeRange,page:page},
			type:"POST",
			async:false,
			dataType:"json",
			success:function(data){
                //alert(data);
				var str = "<tr>";
				str += "<th scope=\"col\" width=\"80px\" style=\"border-left:1px solid #adceff;text-align:center;\" >姓名</th>";
				str += "<th scope=\"col\" width=\"130px\" style=\"text-align:center;\">专业</th>";
				str += "<th scope=\"col\" width=\"160px\" style=\"text-align:center;\">感兴趣的信息</th>  ";
				str += "<th scope=\"col\" width=\"140px\" style=\"text-align:center;\">时间</th>";
				str += "<th scope=\"col\" width=\"160px\" style=\"text-align:center;\">操作</th>";
				str += "</tr>";
				if(data.json.state == 1){
					$.each(data.json.data.list,function(index,item){
						str += "<tr>";
						str += "<td style=\"border-left:1px solid #adceff;text-align:center;\">"+item.stu_name+"</td>";
		 			 	str += "<td style=\"text-align:center;\">"+item.stu_pro+"</td>";
		 			 	str += "<td style=\"text-align:center;\">"+item.info_name+"</td>";
		 			 	str += "<td style=\"text-align:center;\">"+item.coll_time+"</td>";
		 			 	str += "<td style=\"text-align:center;\"><a href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/"+item.fu_id+"\">详细资料</a></td>";
						str += "</tr>";
					});
					$("#mytable").html(str);
					//alert(str);
					var pagestr= getPage(data.json.data.page,data.json.data.totalPage);
					//alert(str);
					$("#page-item").html(pagestr);
				}else{
					str +="<th class=\"spec\" colspan=\"5\">暂无记录</th>";
					$("#mytable").html(str);
				}
			},
			error:function(msg){
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
/index.php/company/Getstudentinfo/",
			data:{flag:flag,type:infoType},
			type:"POST",
			async:false,
			dataType:"json",
			success:function(data){
				var str = "";
				if(data.json.state == 1){
					str += "<option value=\"0\" selected=\"selected\">不限</option>";
					$.each(data.json.data,function(index,item){
						str += "<option value=\""+item.stu_pro+"\">"+item.stu_pro+"</option>";
					});
					$("#zhuanye").html(str);
				}else{
					$("#zhuanye").html(str);
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}
	
	function getInfoList(flag){
		//var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getstudentinfo/flag/"+flag+"/type/"+infoType+"/infoid/"+infoId+"/major/"+pro+"/time/"+timeRange;
		//alert(url);
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getstudentinfo/",
			data:{flag:flag,type:infoType},
			type:"POST",
			async:false,
			dataType:"json",
			success:function(data){
				var str = "";
				if(data.json.state == 1){
					str += "<option value=\"0\" selected=\"selected\">不限</option>";
					$.each(data.json.data,function(index,item){
						var infoName = "";
						if (item.info_name != null){
							if (item.info_name.length > 20){
			 			 		infoName = item.info_name.substring(0,20);
			 			 		infoName += "...";
			 			 	}else{
			 			 		infoName = item.info_name;
			 			 	}
						}
						str += "<option value=\""+item.coll_info_id+"\">"+infoName+"</option>";
					});
					$("#insterested").html(str);
				}else{
					$("#insterested").html(str);
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}
</script>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心/</a>
        </dt>
        <dt><a href="#">学生信息</a></dt>
    </dl>
</div>
<div class ="middle" style="padding: 0">
		<div id="middle_left" style="padding-top: 0px">
            <div id="title">
                <p>功能菜单</p>
            </div>
           <div class="title" style="margin-top: 8px">
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo'">企业基本信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair'">招聘会预定</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmycorpmsg'">招聘信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/studentinterestme'"  style="background-color:#344a5d;color: #ffffff" >学生信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw'">修改密码</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/index#feedback'">满意度调查</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message'">我的消息</p>
           </div>

       </div>
	<div class="middle_right">
			
		<div id="middle-left">
		<div class="myinfo_left_top">
			<div class="getjobfair-result"></div>
			<div id="xuanxiang-table" >
				<div style="width:128px" id="jobfair-button2" class="cursor-hand jobfair-table jobfair-button-selected" data=2>
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Studentinterestme">对我感兴趣的学生</a>
			     </div>
			     <div style="width:128px" id="jobfair-button3" class="cursor-hand jobfair-table ">
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/studentall">所有学生</a>
				</div>
			</div>
		</div>
		
		<div class="student-search">
				<table> 
				<tbody>
				  <tr class="student-search-item">
				  <td class="student-search-item-title">类型</td>
				  <td>
					<select id="type" name="type">
						<option value="0" selected="selected">招聘会</option>
						<option value="1">企业招聘</option>
						<option value="2">实习招聘</option>
					</select>
				</td>
				</tr>
				<tr class="student-search-item">
					<td class="student-search-item-title">感兴趣的信息</td>
					<td>
					<select id="insterested" name="insterested">
						 <option value="0" selected="selected">不限</option>
					</select>
					</td>
				</tr>
				<tr class="student-search-item">
					<td class="student-search-item-title">专业</td>
					<td>
					<select id="zhuanye" name="zhuanye">
						<option value="0" selected="selected">不限</option>
					</select>
					</td>
					<td class="student-search-item-title">时间</td>
					<td>
					<select id="shijian" name="shijian">
						<option value="0" selected="selected">不限</option>
						<option value="7">最近一个星期</option>
						<option value="30">最近一个月</option>
						<option value="90">最近三个月</option>
						<option value="365">最近一年</option>
					</select>
				   </td>
				</tr>
				</tbody>
				</table>
		</div>
		<div id="student-interested-info">
			<table id="mytable" cellspacing="0" >  
		 	</table>  
		</div>
		<div id="page-item" class="page-item"></div>
     </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
]
</body>

</html><?php }} ?>