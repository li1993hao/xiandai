<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:49:50
         compiled from "app/tpl/jobfairmsg/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:98328860541e4ade7c3b95-38883767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c18108ae4ddfc118de39f43385ed15e6b435d75' => 
    array (
      0 => 'app/tpl/jobfairmsg/detail.htm',
      1 => 1396322546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98328860541e4ade7c3b95-38883767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'web_url' => 0,
    '__userinfo__' => 0,
    'collectFlag' => 0,
    'preNews' => 0,
    'nextNews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4ade8fae99_62672726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4ade8fae99_62672726')) {function content_541e4ade8fae99_62672726($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('jobfairmsg/index', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('招聘会信息', null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable('招聘会信息', null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_name'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['titleSecond'] = new Smarty_variable($_tmp1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
<script type="text/javascript">

$(function(){
	
	//收藏
	$("#do-collect-btn").click(function(){
		$(".collect-confirm").show();
	});
	
	$("#close-collect-confirm,#cancel-collect").click(function(){
		$(".collect-confirm").hide();
	});
	
	$("#do-collect").click(function(){
		var id = $(this).attr("data");
		var openmyinfo = '1';
		if(!$("#openmyinfo").attr("checked")){
			openmyinfo = '0';
		}
		
		//alert($("#openmyinfo").attr("checked"));
		$.ajax({
		   	type: "POST",
		   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/collect/type/0/id/"+id+"/openmyinfo/"+openmyinfo,
		   	success: function(msg){
		   		var obj = eval('(' + msg + ')');
				if (obj.json.state == 1) {
					$("#result-collect").html("");
					$("#do-collect-btn").hide();
					$("#cancel-collect-btn").show();
					$("#close-collect-confirm").click();
				}else{
					$("#result-collect").html(obj.json.msg);
				}
			},
			error:function(msg){
				$("#result-collect").html("网络连接错误！");
			}
		});
		
	});
	$("#cancel-collect-btn").click(function(){
		var id = $(this).attr("data");
		var openmyinfo = '1';
		if(!$("#openmyinfo").attr("checked")){
			openmyinfo = '0';
		}
		
		//alert($("#openmyinfo").attr("checked"));
		$.ajax({
		   	type: "POST",
		   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/cancelcollect/type/0/id/"+id,
		   	success: function(msg){
		   		var obj = eval('(' + msg + ')');
				if (obj.json.state == 1) {
					$("#cancel-collect-btn").hide();
					$("#do-collect-btn").show();
				}else{
					alert(obj.json.msg);
				}
			},
			error:function(msg){
				alert("网络连接错误！");
			}
		});
	});
	//收藏end 
	
	
	var flag = false;
	$("#zandiv").click(function(){
		//alert("sss");
		if(!flag){
			$.ajax({
			   	type: "POST",
			   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/addgood/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_id'];?>
",
			   	success: function(msg){
			  		//alert("chenggong");
			  		flag = true;
			   		//alert( msg );
			  		if(msg != "0"){
			  			//alert("谢谢~");
			  			$("#zandiv").css("background","#333333");
			  			$(".zannum").text(msg);
			  		}else{
			  			//alert("shibai1");	
			  		}
			   		
				},
				error:function(msg){
					//alert("shibai");
					//$("#addresult").html("添加失败！");
				}
			});
		}
		
	});
	
	
});


</script>     


    <div id="middle">
    	<div id="middle_left">
    	 	<div class="m-l-header">
            	<div class="m-l-header-left">
	            	<div class="note-title middle-color-green">
	    				<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_name'];?>

		    		</div>
		    		<div class="note-attr">
		    			<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_date'];?>
&nbsp;
		    			浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_read'];?>
&nbsp;
		    			分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_share'];?>
&nbsp;
		    			来源：<?php if ($_smarty_tpl->tpl_vars['detail']->value['jm_publish']==0){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['jm_src'])===null||$tmp==='' ? "就业中心" : $tmp);?>
<?php }else{ ?><a target="blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_publish'];?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['com_name'];?>
</a><?php }?>
		    		</div>
	    		</div>
	    		<div class="m-l-header-right">
	    			<?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
		    			<?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']==0){?>
		    			<span id="do-collect-btn" class="collect-btn" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value!="1"){?>style="display:none;"<?php }?> >收藏</span>
		    			<span id="cancel-collect-btn" class="collect-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value=="1"){?>style="display:none;"<?php }?> >取消收藏</span>
		    			<?php }?>
	    			<?php }?>
	    		</div>
	    		<div style="clear:both;"></div>
            </div>
          
        	<div class="m-l-attr">
        		<ul>
	        		<li>召开时间：<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_opentime'];?>
</li>
	        		<li>召开地点：<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_addr'];?>
</li>
	        	</ul>
	        	<div style="clear:both;"></div>	
        	</div>
        	<div class="m-l-content">
        		<?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
    			<div id="middle_img">
    				<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
    			</div>
    			<?php }?>	
        		<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_content'];?>

        		<div style="clear:both;"></div>
        	</div>
    
        	<div class="m-l-other">
        		<div id="middle_left_file" >	
            	<?php if ($_smarty_tpl->tpl_vars['detail']->value['file_id']!=''){?>
        		相关附件：<a target="top" style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['detail']->value['file_link'];?>
">
        		    <?php if ($_smarty_tpl->tpl_vars['detail']->value['file_name']==''){?>
        			<?php echo $_smarty_tpl->tpl_vars['detail']->value['file_link'];?>

        			<?php }else{ ?>
        			<?php echo $_smarty_tpl->tpl_vars['detail']->value['file_name'];?>

        			<?php }?>
        			</a>	
        		<?php }?>
           		</div>
           		
        		<div class="zandiv  zan-background-green" id="zandiv" >
        			<img class="zan"   src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png" />
        			<div class="zannum" ><?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_good'];?>
</div>
        		</div>
            </div>
            <div id="middle_leftprenext" class="m-l-footer">
            	<p>
        			上一条：
        			<?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['jm_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['jm_name'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
        		<p>
        			下一条：
        			<?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['jm_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['jm_name'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
            </div>
        </div>  
        <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['jm_content'])),130,'…',true), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/jobfairmsg/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['jm_id'])."/type/0", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['xinxifenxiang'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
    </div>
<!-- 收藏确认 -->
<div class="collect-confirm">
   	<div class="collect-confirm-header">
   		<div class="collect-confirm-header-left">
   			确认收藏信息？
   		</div>
   		<div class="collect-confirm-header-right">
   			<a id="close-collect-confirm" href="#" >关闭</a>
   		</div>	
   	</div>
   	<div class="collect-confirm-main">
   		<div class="collect-confirm-main-item">
   			<span class="collect-confirm-main-title">确认收藏：</span>
   			<span class="collect-confirm-main-info"><?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_name'];?>
</span>
   		</div>
   		<div class="collect-confirm-main-item" >
   			<span class="collect-confirm-main-title">&nbsp;</span>
   			<span class="collect-confirm-main-info">
   				<input id="openmyinfo" name="openmyinfo"  type="checkbox" checked value=1>公开我的信息给企业？
   			</span>
   		</div>
   		<div class="collect-confirm-main-item" >
   			<span class="collect-confirm-main-title">&nbsp;</span>
   			<span class="collect-confirm-main-info">
   				<span id="do-collect" class="confirm-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_id'];?>
">确认</span>
   				<span id="cancel-collect" class="confirm-btn">取消</span>
   			</span>
   		</div>
   		<div class="collect-confirm-main-item" >
   			<span class="collect-confirm-main-title">&nbsp;</span>
   			<span id="result-collect" class="collect-confirm-main-info"></span>
   		</div>
   	
   	</div>
</div> 
<!-- 收藏确认 end-->    
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>