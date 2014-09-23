<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:09
         compiled from "app/tpl/right_hot.html" */ ?>
<?php /*%%SmartyHeaderCode:1458942828541e4af185fc23-44734101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60277fda873bec4c67999bd268a7d5f1c1998b49' => 
    array (
      0 => 'app/tpl/right_hot.html',
      1 => 1396319296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458942828541e4af185fc23-44734101',
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
  'unifunc' => 'content_541e4af18851e2_45283682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4af18851e2_45283682')) {function content_541e4af18851e2_45283682($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?> <?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['uplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
 	<div class="will">  	
    	<ul class="teacher">
        	<li><p><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/corpinternmsg/littlearrow.png" alt="employ" /><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['ji_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['ji_title'],17,'…');?>
</a></p></li>
            <li><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['re']->value['ji_content'])),120,'…',true);?>
</li> 
         </ul>
     </div>
<?php } ?><?php }} ?>