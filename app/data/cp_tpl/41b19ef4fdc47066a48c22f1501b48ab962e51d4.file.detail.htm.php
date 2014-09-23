<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:02
         compiled from "app/tpl/corpinternmsg/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:1088344077541e4aea580fa2-16748927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41b19ef4fdc47066a48c22f1501b48ab962e51d4' => 
    array (
      0 => 'app/tpl/corpinternmsg/detail.htm',
      1 => 1400905108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1088344077541e4aea580fa2-16748927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'corpInfo' => 0,
    'detail' => 0,
    'web_url' => 0,
    '__userinfo__' => 0,
    'collectFlag' => 0,
    'officelist' => 0,
    'preNews' => 0,
    'nextNews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4aea738b94_24767166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4aea738b94_24767166')) {function content_541e4aea738b94_24767166($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable("Corpinternmsg/index/type/".((string)$_smarty_tpl->tpl_vars['corpInfo']->value['type_code']), null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_name'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_name'];?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['titleSecond'] = new Smarty_variable($_tmp3, null, 0);?>
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
		var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/collect/type/<?php echo $_smarty_tpl->tpl_vars['detail']->value['rit_id'];?>
/id/"+id+"/openmyinfo/"+openmyinfo;
		//alert(url);
		//alert($("#openmyinfo").attr("checked"));
		$.ajax({
		   	type: "POST",
		   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/collect/type/<?php echo $_smarty_tpl->tpl_vars['detail']->value['rit_id'];?>
/id/"+id+"/openmyinfo/"+openmyinfo,
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
/index.php/student/cancelcollect/type/<?php echo $_smarty_tpl->tpl_vars['detail']->value['rit_id'];?>
/id/"+id,
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
		if(!flag){
			$.ajax({
			   	type: "POST",
			   	url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/addgood/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_id'];?>
/type/<?php echo $_smarty_tpl->tpl_vars['detail']->value['rit_id'];?>
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
    
    <div id="middle">
    	<div id="middle_left">
            <div class="m-l-header">
            	<div class="m-l-header-left">
	            	<div class="note-title middle-color-green">
	    				<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>

		    		</div>
		    		<div class="note-attr">
		    			<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_date'];?>
&nbsp;
		    			浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_read'];?>
&nbsp;
		    			分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_share'];?>
&nbsp;
		    			来源：<?php if ($_smarty_tpl->tpl_vars['detail']->value['cim_publish']==0){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['cim_src'])===null||$tmp==='' ? "就业中心" : $tmp);?>
<?php }else{ ?><a target="blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_publish'];?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['com_name'];?>
</a><?php }?>
		    		</div>
	    		</div>
	    		<!-- 收藏按钮 -->
	    		<div class="m-l-header-right">
	    			<?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
		    			<?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']==0){?>
		    			
		    			<span id="do-collect-btn" class="collect-btn" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value!="1"){?>style="display:none;"<?php }?> >收藏</span>
		    			<span id="cancel-collect-btn" class="collect-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value=="1"){?>style="display:none;"<?php }?> >取消收藏</span>
		    			<?php }?>
	    			<?php }?>
	    		</div>
	    		<!-- 收藏按钮 -->
	    		<div style="clear:both;"></div>
            </div>
          
        	<div class="m-l-attr">
        		<ul>
	        		<?php if ($_smarty_tpl->tpl_vars['detail']->value['cim_tel']!=''){?>
	        		<li>联系电话：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['cim_tel'])===null||$tmp==='' ? "不详" : $tmp);?>
</li>
	        		<?php }?>
	        		<?php if ($_smarty_tpl->tpl_vars['detail']->value['cim_email']!=''){?>
	        		<li>Email：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['cim_email'])===null||$tmp==='' ? "不详" : $tmp);?>
</li>
	        		<?php }?>
	        		<?php if ($_smarty_tpl->tpl_vars['detail']->value['cim_contact']!=''){?>
	        		<li>联系人：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['cim_contact'])===null||$tmp==='' ? "不详" : $tmp);?>
</li>
	        		<?php }?>
	        		<?php if ($_smarty_tpl->tpl_vars['detail']->value['cim_addr']!=''){?>
	        		<li>单位地址：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['cim_addr'])===null||$tmp==='' ? "不详" : $tmp);?>
</li>
	        		<?php }?>
	        		<?php if ($_smarty_tpl->tpl_vars['detail']->value['cim_web']!=''){?>
	        		<li>单位网址：<a target="blank" href="<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_web'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detail']->value['cim_web'],30,'...',true,true);?>
</a></li>
	        		<?php }?>
	        	</ul>
	        	<div style="clear:both;"></div>
        			
        	</div>
        	<?php if ($_smarty_tpl->tpl_vars['officelist']->value){?>
        	<div class="m-l-office">
           		<div class="m-l-office-header">
           			>>职位
           		</div>
           		<div class="m-l-office-main">
           			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ol'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['name'] = 'ol';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['officelist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total']);
?>
    				<div class="office-name">
    					<strong><?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ol']['index']]['office_name'];?>
</strong>
    				</div>    		
        			<div class="office-intro">
        				<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ol']['index']]['office_intro'];?>

        			</div>
        			<?php endfor; endif; ?>
           		</div>
        		
        	</div>
        	<?php }?>
        	<div class="m-l-content">
        		<div class="m-l-content-header">
           			>>说明
           		</div>
           		<div class="m-l-content-main">
        			<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_content'];?>

        		</div>
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
           		
        		<div class="zandiv zan-background-green" id="zandiv">
        			<img class="zan" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png" />
        			<div class="zannum"><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_good'];?>
</div>
        		</div>
            </div>
            
              <div  class="m-l-footer">
            	<p>
        			上一条：
        			<?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['cim_name'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
        		<p>
        			下一条：
        			<?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['cim_name'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
            </div>
            
          </div>
       <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['cim_content']),130,"…",'ture'), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/corpinternmsg/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['cim_id'])."/type/".((string)$_smarty_tpl->tpl_vars['detail']->value['rit_id']), null, 0);?>
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
   			<span class="collect-confirm-main-info"><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>
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
   				<span id="do-collect" class="confirm-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_id'];?>
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