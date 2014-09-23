<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:53:16
         compiled from "app/tpl/send/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1422830668541e4bac02dc69-32581726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46617cd23fd21ce1a5e5d8e5ed25a52df5d5dbf1' => 
    array (
      0 => 'app/tpl/send/index.html',
      1 => 1399970326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1422830668541e4bac02dc69-32581726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4bac0b0fd2_52301650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4bac0b0fd2_52301650')) {function content_541e4bac0b0fd2_52301650($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable("send", null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("派遣服务&nbsp;S<em>end&nbsp;Service</em>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable("派遣服务", null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/send/send.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" /> 
<script>
$(function(){

		   })
</script>   
    <div id="middle">
    	<div id="middle_left">
    		<div id="middle_title">
    			天津外国语大学派遣服务简介
    		</div>
    		<div id="middle_attr">
    			发布时间:<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_modify'];?>
 
    			&nbsp; &nbsp; 阅读次数：<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_browse'];?>
 
    			&nbsp; &nbsp; 分享次数：<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_share'];?>
 
    		</div>
        	<div id="middle_leftone">
        		<p>
        			<?php echo $_smarty_tpl->tpl_vars['page']->value['ci_content'];?>

        		</p>
            </div>
            <div id="middle_leftprenext">
            </div>
        </div>    
         <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value['ci_content'])),130,'…',true), null, 0);?>
		 <?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/send/addshare/id/".((string)$_smarty_tpl->tpl_vars['page']->value['ci_id']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['xinxifenxiang'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    

 <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
        
</body>
</html>
<?php }} ?>