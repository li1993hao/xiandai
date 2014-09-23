<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:48:26
         compiled from "app/tpl/right_recommend.htm" */ ?>
<?php /*%%SmartyHeaderCode:112774652541e4a8a5d4af4-21982825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26749c5b0a1ca9c90bacef12ddc86f5805130042' => 
    array (
      0 => 'app/tpl/right_recommend.htm',
      1 => 1396322546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112774652541e4a8a5d4af4-21982825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'recommend' => 0,
    'color' => 0,
    're' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4a8a62a833_29088797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4a8a62a833_29088797')) {function content_541e4a8a62a833_29088797($_smarty_tpl) {?><?php if (!is_callable('smarty_function_getdate')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.getdate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?> <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/right-recommend.css" />
 <?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
  <div class="will">
  	<div class="date">
  	
  	<ul>
  		<?php if ($_smarty_tpl->tpl_vars['color']->value=="green"){?>
      	<li style="background-color:#9ecea9;"  class="willone"><?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['re']->value['jm_opentime']),$_smarty_tpl);?>
</li>
        <li style="background-color:#9ecea9;" class="willtwo"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['jm_opentime'],"%Y-%m-%d");?>
</li>
      	<?php }else{ ?>
      	<li  class="willone"><?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['re']->value['jm_opentime']),$_smarty_tpl);?>
</li>
        <li  class="willtwo"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['jm_opentime'],"%Y-%m-%d");?>
</li>
      	<?php }?>
      </ul>
      </div>
      <ul class="teacher">
      	<li><a title="<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['jm_name'],10,'…');?>
</a></li>
          <li><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['re']->value['jm_opentime'],"%H:%M");?>
</li>
          <li title="<?php echo $_smarty_tpl->tpl_vars['re']->value['jm_addr'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['re']->value['jm_addr'],10,'…');?>
</li>
      </ul>
  </div>
<?php } ?><?php }} ?>