<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 16:43:57
         compiled from "admin/tpl/frontuser/company.html" */ ?>
<?php /*%%SmartyHeaderCode:176658395541e8fcd3beb87-47689697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8affb65f90d66fea5afa94be44b26dbac64e19' => 
    array (
      0 => 'admin/tpl/frontuser/company.html',
      1 => 1399535650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176658395541e8fcd3beb87-47689697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e8fcd4298e6_75174580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e8fcd4298e6_75174580')) {function content_541e8fcd4298e6_75174580($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<style>
ul,ol{list-style:none; display:block;margin:0;padding:0;}
li{margin:0;padding:0; display: inline-block;}
.search-container{ padding:5px 0px; margin:5px 10px;border-bottom: 1px dotted #DDD;}
.all-search-container{ width:760px;left:40px; top:240px;margin-top:10px; margin-left:10px; border-top:#F50 solid 2px; border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC; background:#F0F5FB;} 
.search-title{ font-size:12px; line-height:22px; color:#000; text-align:center; width:100px; float:left;}
.search-list{ font-size:12px; color:#000; text-align:left; width:600px; min-height:20px;  float:left;}
.search-item{cursor:pointer; font-size:12px; height:20px; line-height:18px; padding:0px 8px 0px 8px; background-color:#3FF; border: #666 solid 1px; margin:0px 3px;position: relative;}
.search-item-selected{font-size:12px; height:20px;  line-height:18px; padding:0px 8px 0px 8px; background-color:#FCF1CA; border:#F00 solid 1px; margin: 3px;position: relative;}

.company-container{margin:20px;width:300px;height:200px; float:left;background-color:#E8F1FA; border-top:#F50 solid 2px;border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC;}
.company-disable-item{width:300px;height:200px;}
.company-disable-item:hover{background:#FCF1CA;}
.company-enable-item{width:300px;height:200px; background-color:#5CDAC5;}
.company-enable-item:hover{background:#FCF1CA;}
.company-opition{height:20px; width:300px; text-align: right; border-bottom:1px solid #CCC;}
.company-href{line-height:20px; height: 20px;}
.company-all-content{height:160px; margin:10px; width:220; text-align:left; }
.company-content{width:270px;height:30px;}

.mask{height:100%; width:100%; position:fixed; _position:absolute; top:0; z-index:1000;  opacity:0.5; filter: alpha(opacity=50); background-color:#000; display:none;}
.all-setpw-container{width:500px;position:absolute;  left:40px; top:100px;margin-top:10px; margin-left:10px; border-top:#F50 solid 2px; border-left:1px solid #CCC; border-right:1px solid #CCC; border-bottom:1px solid #CCC; background:#F0F5FB;z-index:1001; display:none;}
.company-setpw-item{padding:5px 0px; margin:5px 10px;}
.company-setpw-item-title{display:inline-block;width:130px;text-align:right;padding:5px 5px;}
.company-setpw-item-info{display:inline-block;width:300px;padding:5px 5px;}
.company-setpw-form-header{ width:500px; border-bottom:solid #999 1px;}
.company-setpw-form-title{float:left;text-align:left; padding:2px 5px; width:400px; }
.setpw-closebtn{ float:right; text-align:right; padding:2px 5px;width:30px;cursor:pointer;  font-size:11px; line-height:20px; color:#000; background:#DBEAF9; border:1px solid #CCC;}
.setpw-closebtn:hover{background:#FCF1CA;}
.meau-container{ padding:5px 0px; margin:5px 10px;border-bottom: 1px dotted #DDD;width:480px;height:40px;}
.setpw-meau{ font-size:12px; color:#000; text-align:left; width:600px; height:40px;min-height:20px;  float:left;}
.setpw-meau-btnok{cursor:pointer;font-size:11px;background:#DBEAF9; border:1px solid #CCC; text-align:center; width:88px;height:20px;float:left;}
.setpw-meau-btnok:hover{background:#FCF1CA;}

.act-page{ width:650px; margin:20px; text-align:left; height:30px;}
.small-btn{ padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#D2E0E5; cursor:pointer;}
.small-btn:hover{background:#A56B8A;}
.small-btn-noclick{ padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#A56B8A; cursor:none;}	
</style>
<script type="text/javascript">
	var verifyState = 3;
	var activeState = 2;
	var cur_page = 1;
	$(document).ready(function(){
		$("#span-state-all").parent().addClass("search-item-selected");
		$("#span-staus-all").parent().addClass("search-item-selected")
		companylist(1);
		$(".search-state-item").click(function(){
			verifyState = $(this).parent().attr("data");
			$(this).parent().siblings(".search-item-selected").removeClass("search-item-selected");
			$(this).parent().addClass("search-item-selected");
			companylist(1);
		});
		
		$(".search-staus-item").click(function(){
			activeState = $(this).parent().attr("data");
			$(this).parent().siblings(".search-item-selected").removeClass("search-item-selected");
			$(this).parent().addClass("search-item-selected");
			companylist(1);
		});
		
		$("#setpw-closebtn").click(function(){
			$("#mask").hide();
			$("#all-setpw-container").hide();
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
		companylist(destpage);
	}
	
	function companylist(page){
		//var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Getcompanyuserlist/state/"+verifyState+"/active/"+activeState+"/page/"+page;
		//alert(url);
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Getcompanylist",
			data:{state:verifyState,active:activeState,page:page},
			type:"POST",
			dataType:"json",
			async:false,
			success:function(data){
				if (data.json.state == 1){
					var str ="";
					$.each(data.json.data.list, function(i,item){
						str +="<div class=\"company-container\" id=\"company-container"+item.fu_id+"\">";
						if(item.fu_isable == 1){
							str +="<div class=\"company-enable-item\" id=\"company-item"+item.fu_id+"\" >";
						}else{
							str +="<div class=\"company-disable-item\" id=\"company-item"+item.fu_id+"\" >";
						}
						str +="<div class=\"company-opition\">";
						str +="<a class=\"company-href\" href=\"#\" onclick=\"setpw("+item.fu_id+");\">重置密码</a>";
						str +="&nbsp;&nbsp;";
						if (item.fu_state == 0){
							str +="<a class=\"company-href\" href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/verifycompany/id/"+item.fu_id+"\">查看并审核</a>";
						}else{
							str +="<a class=\"company-href\" href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/"+item.fu_id+"\">查看用户</a>";
						}
						str +="&nbsp;&nbsp;";
						if(item.fu_isable == 1){
							str +="<a id=\"status"+item.fu_id+"\" class=\"exercise-href\" href=\"#\" onclick=\"changestatus("+item.fu_id+");\" return false;>设为冻结</a>";
						}else{
							str +="<a id=\"status"+item.fu_id+"\" class=\"exercise-href\" href=\"#\" onclick=\"changestatus("+item.fu_id+");\" return false;>设为激活</a>";
						}
						str +="&nbsp;&nbsp;";
						str +="<a class=\"company-href\" href=\"#\" onclick=\"delcompany("+item.fu_id+");\" return false;>删除</a>";
						str +="</div>";
						str +="<div class=\"company-all-content\">";
						if(item.com_name==null||item.com_name.length<30)
						     {var nameone=item.com_name;}	
						else  nameone=item.com_name.substring(0,30)+"...";
						
						str +="<div  class=\"company-content\" title=\""+item.com_name+"\" >公司名称："+nameone+"</div>";
						
						if (item.fu_state == 0){
							str +="<div class=\"company-content\">状态：未审核</div>";
						}else if (item.fu_state == 1){
							str +="<div class=\"company-content\">状态：审核已通过</div>";
							str +="<div class=\"company-content\">到期时间："+item.fu_outdate+"</div>";
						}else {
							str +="<div class=\"company-content\">状态：审核未通过</div>";
							var reason =""+ item.fu_reason;
							if (reason.length > 12){
								reason = reason.substring(0,12);
								reason +="…";
							}
							str +="<div class=\"company-content\" title=\""+item.fu_reason+"\">原因："+reason+"</div>";
						}
						str +="<div class=\"company-content\">信用等级："+item.da_degree+"星</div>";
						str +="<div class=\"company-content\">申请时间："+item.fu_register_time+"</div>";
						str +="</div>";
						str +="</div>";
						str +="<div style=\"clear: both;\"></div>";
						str +="</div>";
						//alert(str);
					});
					str +="<div style=\"clear: both;\"></div>";
					$("#company-all-container").html(str);
					var pagestr= getPage(data.json.data.page,data.json.data.totalPage);
					//alert(str);
					$("#page-item").html(pagestr);
				}else {
					$("#company-all-container").html("");
					$("#page-item").html("");
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}
	
	function setpw(id){
		//alert(id);
		$("#mask").show();
		$("#all-setpw-container").show();
		$("#setpw-meau-btnok").click(function(){
			if(!confirm("确定要重置密码？")){
				return false;
			}
			var password = $("#password").val();
			if (password == ""){
				alert("新密码不能为空！");
			}else{
				$.ajax({
					url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Setpassword",
					data:{id:id,pw:password},
					type:"POST",
					async:false,
					dataType:"json",
					success:function(data){
						if (data.json.state == 1){
							alert("重置密码成功！");
							$("#mask").hide();
							$("#all-setpw-container").hide();
						}else{
							alert("重置密码失败！");
						}
					},
					error:function(msg){
						alert("网络出现问题！");
					}
				});
			}
		});
	}
	
	function changestatus(id){
		if(!confirm("确定要改变激活状态吗？")){
			return false;
		}
		var url= "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Changestaus/id/"+id;
		alert(url);
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Changestaus/id/"+id,
			type:"POST",
			async:false,
			dataType:"json",
			success:function(data){
				if (data.json.state == 1){
					if($("#company-item"+id).attr("class") == "company-enable-item"){
						$("#company-item"+id).attr("class","company-disable-item");	
						$("#status"+id).html("设为激活");
					}else{
						$("#company-item"+id).attr("class","company-enable-item");
						$("#status"+id).html("设为冻结");
					}
					alert("改变激活状态成功！");
				}else{
					alert("改变激活状态失败！");
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}
	
	function delcompany(id){
		if(!confirm("确定要删除吗？")){
			return false;
		}
		var url= "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Delcompany/id/"+id;
		alert(url);
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Delcompany/id/"+id,
			type:"POST",
			async:false,
			dataType:"json",
			success:function(data){
				if (data.json.state == 1){
					alert("删除成功！");
					$("#company-container"+id).remove();
				}else{
					alert("删除失败！");
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}
</script>
<title>企业用户管理</title>
</head>
<body>
	<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  		<TR height=28>
  			<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/title_bg1.jpg">
  			当前位置:企业用户管理
  			</TD>
  		</TR>
  		<TR><TD bgColor=#b1ceef height=1></TD></TR>
  		<TR height=20>
    		<TD background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/shadow_bg.jpg"></TD>
		</TR>
	</TABLE>
	<div class="all-search-container">
		<div id ="search-type-container" class="search-container">
			<div class="search-title">审核状态</div>
			<div class ="search-list" id="search-type-list">
				<ul id="search-state">
					<li id= "state-all"  class="search-item" data="3">
						<span id="span-state-all" class="search-state-item">所有</span>
					</li>
					<li id= "state-not"  class="search-item" data="0">
						<span id="span-state-not" class="search-state-item">未审核</span>
					</li>
					<li id= "state-pass"  class="search-item" data="1">
						<span id="span-state-pass" class="search-state-item">审核通过</span>
					</li>
					<li id= "state-not-pass"  class="search-item" data="2">
						<span id="span-state-not-pass" class="search-state-item">审核未通过</span>
					</li>
				</ul>
			</div>
			<div style="clear:both"></div>
		</div>
		<div id="search-state-container" class="search-container">
		<div class="search-title">账号状态</div>
			<div class ="search-list" id="search-state-list">
				<ul id="search-staus">
					<li id= "staus-all"  class="search-item" data="2">
						<span id="span-staus-all" class="search-staus-item">所有</span>
					</li>
					<li id= "staus-enable"  class="search-item" data="0">
						<span id="span-staus-enable" class="search-staus-item" >冻结</span>
					</li>
					<li id= "staus-disable"  class="search-item" data="1">
						<span id="span-staus-disable" class="search-staus-item">激活</span>
					</li>
				</ul>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
	<div id="company-all-container" class="company-all-container" ></div>
	<div id="page-item" class="page-item"></div>
	<div id ="mask" class="mask"></div>
	<div id="all-setpw-container" class="all-setpw-container" >
		<div class="company-setpw-form-header">
			<div class="company-setpw-form-title" >
				重置密码
			</div>
			<div class="setpw-closebtn" id="setpw-closebtn">
    		关闭
    		</div>
    		<div style="clear:both;"></div>
    	</div>
		<div class="company-setpw-item">
       		<div class="company-setpw-item-title"">新密码：</div>
       		<div class="company-setpw-item-info">
				<input id="password" type="text" name="password" style="width:180px;height:30px;" value="" />
			</div>
       </div>
       <div class ="meau-container">
      	 <div class="know-meau">
       		<div style="margin:10px 0px 0px 150px;height:20px; float:left;">
       			<div class="setpw-meau-btnok" id="setpw-meau-btnok">
       				确定
       			</div>
       		</div>
       	</div>
      </div>
 	</div>
</body>
</html><?php }} ?>