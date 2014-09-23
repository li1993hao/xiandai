<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:49:50
         compiled from "app/tpl/right_share.htm" */ ?>
<?php /*%%SmartyHeaderCode:1600610789541e4ade90b4e8-95785803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '641f2571843ea75fb7c3e31dab0cd3786a78cf5a' => 
    array (
      0 => 'app/tpl/right_share.htm',
      1 => 1396319296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600610789541e4ade90b4e8-95785803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'share_content' => 0,
    'addShareUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4ade91f920_17314716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4ade91f920_17314716')) {function content_541e4ade91f920_17314716($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><div id="shareinfo">
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
	<a class="bds_qzone"></a>
	<a class="bds_tsina"></a>
	<a class="bds_tqq"></a>
	<a class="bds_renren"></a>
	<a class="bds_t163"></a>
	<span class="bds_more"></span>
</div>

<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1782349" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config = {
		
		'bdDesc':'<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['share_content']->value),130,"...");?>
'
};

<?php if (isset($_smarty_tpl->tpl_vars['addShareUrl']->value)){?>
$(function(){
	$("#bdshare>a").click(function(){
		$.ajax({
		   	type: "POST",
		   	url: "<?php echo $_smarty_tpl->tpl_vars['addShareUrl']->value;?>
",
		   	success: function(msg){
		  		//alert("chenggong");
		   		//alert( msg );
		  		if(msg=="1"){
		  			//alert("chenggong");
		  		}else{
		  			//alert("shibai");	
		  		}
		   		/*
		  		var myObject = eval('(' + msg + ')');
		  		//alert(myObject.result);
		  		if(myObject.result > 0){
		  			$("#firstperiods").after("<option value='"+myObject.result+"'>第"+myObject.number+"期</option>");
		  			$("#addresult").html("添加成功！");
		  		}else{
		  			$("#addresult").html("添加失败！");
		  		}
		  		*/ 
			},
			error:function(msg){
				//alert("shibai");
				//$("#addresult").html("添加失败！");
			}
		});
	});
});
<?php }?>
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<div style="clear:both;"></div>
</div><?php }} ?>