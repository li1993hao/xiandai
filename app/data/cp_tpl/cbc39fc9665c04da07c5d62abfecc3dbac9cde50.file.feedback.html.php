<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:57:42
         compiled from "app/tpl/index/feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:176114314541e4cb63e9234-99430527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc39fc9665c04da07c5d62abfecc3dbac9cde50' => 
    array (
      0 => 'app/tpl/index/feedback.html',
      1 => 1400914014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176114314541e4cb63e9234-99430527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4cb64532d4_48574272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4cb64532d4_48574272')) {function content_541e4cb64532d4_48574272($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable("feedback", null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("留言板&nbsp;M<em>essage&nbsp;Board</em>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable("留言板&nbsp;M<em>essage&nbsp;Board</em>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
<?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>

<style>
#middle{
	width:1000px;
	min-height:460px;
	height:auto;
	margin:0 auto;
	padding:0 95px;
} 
#middle_left{
	width:723px;
	height:auto;
	float:right;
	display:inline;
	margin-top:20px;
}
.content-right-container{float:left;margin-top:17px;	padding-left: 100px;}
.feedback-start-container{height:35px;}
.feedback-start-title{display:block;float:left; line-height:23px; padding-top:2px;margin:5px 0px 0px 0px;font-size:large;}
.feedback-start-item{
	background-image:url("<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/star.png");background-position: -0px -0px; display:block;float:left;
	width:25px;height:25px;margin:5px 2px 0px 0px;cursor:pointer;
}
.feedback-start-item-selected{background-position: -50px -0px;}
#feedback .feedback-title{border:1px solid #929292;margin-bottom:10px;color:#5F5F5F;font-size:24px;}
#feedback .feedback-content{border:1px solid #929292;margin-bottom:10px;color:#5F5F5F;	font-size:24px;}
#feedback .feedback-btn{color:#5F5F5F;width:40px;height:25px;line-height:25px;border:1px solid #929292;	cursor:pointer;	text-align:center;}

#feedback .feedback-btn:hover{background-color:#788ac6;	color:#FFFFFF;}
#feedback .feedback-result{font-size:12px;color:#415497;}
</style> 
<script>
$(function(){	
$(".feedback-start-item").click(function(){
	var point = $(this).attr("data");
	var parent = $(this).parent();
	parent.attr("data",point);
	parent.children(".feedback-start-item").each(function(index,item){
		//alert(index);
		if(index+1 <= point){
			$(item).attr("class","feedback-start-item feedback-start-item-selected");
		}else{
			$(item).attr("class","feedback-start-item");
		}
	});
});
var haveSubmitfeedback = false;
//提交反馈建议
$("#feedback-btn").click(function(){
	var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
	if(haveSubmitfeedback){
		alert("您已经提交过意见~");
		return false;
	}
	haveSubmitfeedback = true;
	$("#feedback-result").html("正在提交您的信息，请稍后。。。");
	var title = $("#feedback-title").val();
	if( title == ""){
		$("#feedback-result").html("标题不能为空！");
		$("#feedback-title").focus();
		haveSubmitfeedback = false;
		return false;
	}
	var content = $("#feedback-content").val();
	if( content == ""){
		$("#feedback-result").html("详情不能为空！");
		$("#feedback-result").focus();
		haveSubmitfeedback = false;
		return false;
	}
	var point_ui = $("#feedback-ui").attr("data");
	if( point_ui == 0){
		$("#feedback-result").html("打分不完整！");
		haveSubmitfeedback = false;
		return false;
	}
	var point_info = $("#feedback-info").attr("data");
	if(point_info == 0){
		$("#feedback-result").html("打分不完整！");
		haveSubmitfeedback = false;
		return false;
	}
	var point_fun = $("#feedback-function").attr("data");
	if( point_fun == 0){
		$("#feedback-result").html("打分不完整！");
		haveSubmitfeedback = false;
		return false;
	}
	
	//alert(window.location.host);
	//alert(web_url);
	$.ajax({
		type:"POST",
		url:web_url+"/index.php/index/feedback",
		data: "ui="+point_ui+"&info="+point_info+"&fun="+point_fun+"&title="+title+"&content="+content,
		success:function(msg){
			//console.log(msg);
			//alert(msg);
			var obj = eval('(' + msg + ')');
			if (obj.json.state == 1) {
				
				$("#feedback-result").html("发布成功，感谢您的宝贵意见！");
				//alert("发布成功，感谢您的宝贵意见！");
			}else{
				haveSubmitfeedback = false;
				$("#feedback-result").html("发布失败！(原因："+obj.json.msg+")");
			}
			//alert("将为您连接到苹果商店下载");	
		},
		error:function(o){
			haveSubmitfeedback = false;
			$("#feedback-result").html("发布失败网络不稳定，请重试！");
		}
	});
  });
});

</script>
    <div id="middle">
    <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<div id="middle_left">
    		<div id="feedback" class="content-right-container" >
            	<div class="content-right-container-title">
            		<span><h1>留言板&nbsp;&nbsp;&nbsp;&nbsp;Message board</h1></span>
            	</div>
            	<div><hr/></div>
            	<div  class="content-right-container-info">
            		<div id="feedback-ui" class="feedback-start-container" data="0">
            			<div class="feedback-start-title">界面友好性：</div>
            			<div id="feedback-ui-item1" title="1分" data="1" class="feedback-start-item" ></div>
            			<div id="feedback-ui-item2" title="2分" data="2" class="feedback-start-item" ></div>
            			<div id="feedback-ui-item3" title="3分" data="3" class="feedback-start-item" ></div>
            			<div id="feedback-ui-item4" title="4分" data="4" class="feedback-start-item" ></div>
            			<div id="feedback-ui-item5" title="5分" data="5" class="feedback-start-item" ></div>
            		</div>
            		<div id="feedback-info" class="feedback-start-container" >
            			<div class="feedback-start-title" data="0">信息有效性：</div>
            			<div id="feedback-info-item1" title="1分" data="1" class="feedback-start-item" ></div>
            			<div id="feedback-info-item2" title="2分" data="2" class="feedback-start-item" ></div>
            			<div id="feedback-info-item3" title="3分" data="3" class="feedback-start-item" ></div>
            			<div id="feedback-info-item4" title="4分" data="4" class="feedback-start-item" ></div>
            			<div id="feedback-info-item5" title="5分" data="5" class="feedback-start-item" ></div>
            		</div>
            		
            		<div id="feedback-function" class="feedback-start-container" data="0" >
            			<div class="feedback-start-title">功能实用性：</div>
            			<div id="feedback-function-item1" title="1分" data="1" class="feedback-start-item" ></div>
            			<div id="feedback-function-item2" title="2分" data="2" class="feedback-start-item" ></div>
            			<div id="feedback-function-item3" title="3分" data="3" class="feedback-start-item" ></div>
            			<div id="feedback-function-item4" title="4分" data="4" class="feedback-start-item" ></div>
            			<div id="feedback-function-item5" title="5分" data="5" class="feedback-start-item" ></div>
            		</div>
            		<br/>
            		<font size="4">留言标题：</font><br/>
            		<input type="text" name="feedback_title" id="feedback-title" class="feedback-title" value="" /><br/>
            		<font size="4">留言详情：</font><br/>
            		<textarea name="feedback_content" id="feedback-content" class="feedback-content" rows="4"></textarea><br/>
            		<input type="button" value="提交" id="feedback-btn" class="feedback-btn" />
            		<span id="feedback-result" class="feedback-result"></span>
            	</div>
            </div>

        </div>    
    </div>
    
 <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
        
</body>
</html>
<?php }} ?>