<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:13
         compiled from "app/tpl/jobinfo/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:1328489795541e4af5f409a7-83914057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0fde38724693f414aae6cea56a68597d5407780' => 
    array (
      0 => 'app/tpl/jobinfo/detail.htm',
      1 => 1399970326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328489795541e4af5f409a7-83914057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typeinfo' => 0,
    'detail' => 0,
    'web_url' => 0,
    'color' => 0,
    'preNews' => 0,
    'nextNews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4af6164104_22920591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4af6164104_22920591')) {function content_541e4af6164104_22920591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable("jobinfo/index/type/".((string)$_smarty_tpl->tpl_vars['typeinfo']->value['type_code']), null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_title'];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['titleSecond'] = new Smarty_variable($_tmp3, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_color'];?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable($_tmp4, null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('jobinfo_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('jobinfo_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css"/>

<script type="text/javascript">

$(function(){
	var flag = false;
	$("#zandiv").click(function(){
		if(!flag){
			$.ajax({
			   	type: "POST",
			   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/addgood/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_id'];?>
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
			  			//alert("shibai");	
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
<script>
$(function(){
		   $("#middle_img").click(function(){
										   $("#zz_big2").show();
										    $("#zz_big3").show();					
										   })
		   $("#zz_close").click(function(){
										 $("#zz_big2").hide();
										    $("#zz_big3").hide();	
										})
		   })
</script>
    <div id="middle">
    	<div id="middle_left">
   
    		<div class="m-l-header">
            	<div class="m-l-header-left">
	            	<div class="note-title middle-color-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>">
	    				<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_title'];?>

		    		</div>
		    		<div class="note-attr">
		    			<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_date'];?>
&nbsp;
		    			浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_read'];?>
&nbsp;
		    			分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_share'];?>
&nbsp;
		    		</div>
	    		</div>
	    		<!-- 收藏按钮 -->
	    		<div class="m-l-header-right">
	    			
	    		</div>
	    		<!-- 收藏按钮 -->
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
        		<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_content'];?>

        		<div style="clear:both;"></div>
        	</div>
    	
        	<div class="m-l-other">
        		<div id="middle_left_file" >
            		<?php if (isset($_smarty_tpl->tpl_vars['detail']->value['file_id'])){?>
        			相关附件：<a target="blank" style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
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
           		
        		<div class="zandiv zan-background-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" id="zandiv">
        			<img class="zan" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png" />
        			<div class="zannum"><?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_good'];?>
</div>
        		</div>
            </div>
        	
          <div id="middle_leftprenext" class="m-l-footer">
            	<p>
        			上一条：
        			
        			<?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['ji_title'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
        		<p>
        			下一条：
        			<?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ji_title'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
           </div>
        </div>    
         
        <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['ji_content']),130,"…"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/jobinfo/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['ji_id']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['xinxifenxiang'] = new Smarty_variable(1, null, 0);?> 
        <?php $_smarty_tpl->tpl_vars['tongzhigonggao'] = new Smarty_variable(1, null, 0);?> 
        <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
    </div>
    
     <div id="zz_big2" style="position:absolute; top:0px; height:1800px;width:100%;z-index:22;filter:alpha(opacity=35);-moz-opacity:0.35;opacity:0.35;background-color: #000;display:none;color: #000;border:1px solid #000;display:none;"></div>
 <div id="zz_big3" style="position: absolute; top:200px; z-index:23; display:none;  width:; left:25%; height:680px; ">
 <div id="zz_close" style=" position: relative; color:#F00; cursor:pointer; font-size:18px;"><span style=" float:right;">关闭</span></div>
<img  style="width:800px; height:650px;border:5px solid #000;"  src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
 </div>
   <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>