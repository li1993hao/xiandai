<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:49:50
         compiled from "app/tpl/right_corpmsg.html" */ ?>
<?php /*%%SmartyHeaderCode:775754697541e4ade924748-18624869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29c5d9689f417836a020073f6811076dcb36b61' => 
    array (
      0 => 'app/tpl/right_corpmsg.html',
      1 => 1401088224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775754697541e4ade924748-18624869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontlist' => 0,
    'web_url' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4ade956c81_21698479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4ade956c81_21698479')) {function content_541e4ade956c81_21698479($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
/index.php/corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['cim_name'],17);?>
</a>
                		</p>
                	</li>
                    <li>浏览：<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_read'];?>
&nbsp;<span style="float:right;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['cim_date'],"%Y-%m-%d");?>
</span></li>
					<!-- <li>浏览：<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_read'];?>
&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['re']->value['cim_share'];?>
&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['cim_date'],"%Y-%m-%d");?>
</li> -->
                </ul>    
            </div>
        <?php } ?><?php }} ?>