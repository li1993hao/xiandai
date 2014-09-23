<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 15:48:05
         compiled from "app/tpl/west/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:1552888416541e82b5f316a4-50290371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0748a986cc581b765659e104c311774856b677' => 
    array (
      0 => 'app/tpl/west/detail.htm',
      1 => 1399975932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552888416541e82b5f316a4-50290371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'web_url' => 0,
    'preNews' => 0,
    'nextNews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e82b61260f5_61766035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e82b61260f5_61766035')) {function content_541e82b61260f5_61766035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable((($tmp = @'west')===null||$tmp==='' ? "index" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['action2'] = new Smarty_variable((($tmp = @('west/').($_smarty_tpl->tpl_vars['detail']->value['wc_action']))===null||$tmp==='' ? "index" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('基层就业', null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable('基层就业', null, 0);?>
<?php $_smarty_tpl->tpl_vars['titleSecond'] = new Smarty_variable($_smarty_tpl->tpl_vars['detail']->value['wc_name'], null, 0);?>

<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('orange', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('west_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('west_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
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
	            	<div class="note-title middle-color-orange">
	    				<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_title'];?>

		    		</div>
		    		<div class="note-attr">
		    			<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_time'];?>
&nbsp;
		    			浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_read'];?>
&nbsp;
		    			分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_share'];?>
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
        		<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_content'];?>

        		<div style="clear:both;"></div>
        	</div>
    		
    		<div class="m-l-other">
    		</div>
    	
    	
            <div id="middle_leftprenext" class="m-l-footer">
            	<p>
        			上一条：
        			
        			<?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['ww_title'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
        		<p>
        			下一条：
        			<?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ww_title'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
            </div>
        </div>   
         <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['ww_content'])),130,'…',true), null, 0);?>
		 <?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/west/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['ww_id']), null, 0);?>
		 <?php $_smarty_tpl->tpl_vars['xinwenfenxiang'] = new Smarty_variable(1, null, 0);?> 
         <?php $_smarty_tpl->tpl_vars['dianxingrenwu'] = new Smarty_variable(1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
         <div id="zz_big2" style="position:absolute; top:0px; height:1800px;width:100%;z-index:22;filter:alpha(opacity=35);-moz-opacity:0.35;opacity:0.35;background-color: #000;display:none;color: #000;border:1px solid #000;display:none;"></div>
 <div id="zz_big3" style="position: absolute; top:200px; z-index:23; display:none;  width:; left:25%; height:680px; ">
 <div id="zz_close" style=" position: relative; color:#F00; cursor:pointer; font-size:18px;"><span style=" float:right;">关闭</span></div>
<img  style="width:800px; height:650px;border:5px solid #000;" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
 </div>
   <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>