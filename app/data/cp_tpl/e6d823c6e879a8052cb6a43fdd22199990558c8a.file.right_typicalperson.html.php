<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 15:48:06
         compiled from "app/tpl/right_typicalperson.html" */ ?>
<?php /*%%SmartyHeaderCode:1616452352541e82b6137c70-19499095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6d823c6e879a8052cb6a43fdd22199990558c8a' => 
    array (
      0 => 'app/tpl/right_typicalperson.html',
      1 => 1396319296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616452352541e82b6137c70-19499095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'persons' => 0,
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e82b6195ee4_40978487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e82b6195ee4_40978487')) {function content_541e82b6195ee4_40978487($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['persons']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">
			<div style="width:219px; height:127px;"">
				<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pic_link'];?>
" width="219px" height="127px" alt="<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pic_link'];?>
" />
			</div>
		</a>
		<p>
			<?php if ($_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_isup']==''){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'],14,'…');?>

				</a>
				<?php }else{ ?>
				<a style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">
					[顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'],12,'…');?>
 
				</a>
			<?php }?>
		</p>
	</li>
<?php endfor; endif; ?><?php }} ?>