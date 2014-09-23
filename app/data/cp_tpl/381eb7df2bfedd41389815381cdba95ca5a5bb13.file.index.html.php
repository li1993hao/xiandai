<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:30
         compiled from "app/tpl/center/index.html" */ ?>
<?php /*%%SmartyHeaderCode:697503404541e4b068e2720-64756818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381eb7df2bfedd41389815381cdba95ca5a5bb13' => 
    array (
      0 => 'app/tpl/center/index.html',
      1 => 1396493908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '697503404541e4b068e2720-64756818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'color' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4b069881e5_57121551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4b069881e5_57121551')) {function content_541e4b069881e5_57121551($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('center', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('中心简介&nbsp;C<em>enter&nbsp;Introduction&nbsp;&nbsp;&nbsp;&nbsp;</em>', null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" rel="stylesheet" type="text/css"></link>
    <div id="middle">
    	<div id="middle_left">
    		<div class="m-l-header">
	        	<div class="m-l-header-left">
		            <div class="note-title middle-color-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>">
		    			<center>中心简介</center>
			    	</div>
			    	<div class="note-attr"><center>
			    		<!--发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['ci_modify'],"%Y-%m-%d");?>
 -->
			    		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['ci_modify'],"%Y 年 %m 月 %d 日");?>
 
    					&nbsp; &nbsp; 阅读次数：<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_browse'];?>
 次
    					&nbsp; &nbsp; 分享次数：<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_share'];?>
 次
			    	</center></div>
		    	</div>
		    	<div style="clear:both;"></div>
	         </div>
	         <div class="m-l-content">	
        		<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_content'];?>

        		<div style="clear:both;"></div>
        	 </div>
        </div>    
        <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value['ci_content']),130,"…"), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/center/addshare/id/".((string)$_smarty_tpl->tpl_vars['page']->value['ci_id']), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['xinxifenxiang'] = new Smarty_variable(1, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    
 <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
        
<?php }} ?>