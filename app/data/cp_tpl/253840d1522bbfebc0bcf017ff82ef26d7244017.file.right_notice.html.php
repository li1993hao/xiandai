<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:14
         compiled from "app/tpl/right_notice.html" */ ?>
<?php /*%%SmartyHeaderCode:1779120053541e4af617bab6-95629286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253840d1522bbfebc0bcf017ff82ef26d7244017' => 
    array (
      0 => 'app/tpl/right_notice.html',
      1 => 1396493756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1779120053541e4af617bab6-95629286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uplist' => 0,
    'web_url' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4af61c8e60_50460954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4af61c8e60_50460954')) {function content_541e4af61c8e60_50460954($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['uplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
 <div class="will"> 	
 	<ul class="teacher">
    	<li>
        	<p>
            	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/corpinternmsg/littlearrow.png" alt="employ" />
                	<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['ji_title'],17,'…');?>
</a>
            </p>
        </li>  
        <li>浏览：<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_read'];?>
&nbsp;<span style="float:right;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['ji_date'],"%Y-%m-%d");?>
</span></li>
		<!-- <li><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['ji_date'],"%Y-%m-%d");?>
&nbsp;浏览：<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_read'];?>
&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_share'];?>
</li> -->
 	</ul>
 </div>
<?php } ?><?php }} ?>