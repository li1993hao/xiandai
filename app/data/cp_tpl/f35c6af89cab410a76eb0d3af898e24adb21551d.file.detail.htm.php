<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 12:01:22
         compiled from "app/tpl/sourceinformation/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:1036436028541e4d92d50997-73088785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35c6af89cab410a76eb0d3af898e24adb21551d' => 
    array (
      0 => 'app/tpl/sourceinformation/detail.htm',
      1 => 1397188814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036436028541e4d92d50997-73088785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
    'web_url' => 0,
    'pre' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4d92e2fc39_32136906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4d92e2fc39_32136906')) {function content_541e4d92e2fc39_32136906($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('Sourceinformation/index', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("生源信息&nbsp;E<em>nrollment&nbsp;Information</em>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable("生源信息", null, 0);?>
<?php $_smarty_tpl->tpl_vars['titleSecond'] = new Smarty_variable($_smarty_tpl->tpl_vars['detail']->value['si_title'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" rel="stylesheet" type="text/css"></link>
    <div id="middle">
    	<div id="middle_left">
    		<div id="middle_title" class="m-l-header">
    			<h2><center><font color="#677bc0"><?php echo $_smarty_tpl->tpl_vars['detail']->value['si_title'];?>
</font></center></h2>
    		</div>
    		<div id="middle_attr" class="note-attr"><center>
    			发布时间：<?php echo $_smarty_tpl->tpl_vars['detail']->value['si_time'];?>
 
    			&nbsp; &nbsp; 阅读次数：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['si_scan'])===null||$tmp==='' ? "0" : $tmp);?>
 
    			&nbsp; &nbsp; 分享次数：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['si_share'])===null||$tmp==='' ? "0" : $tmp);?>
 
    		</center></div>
    		<hr/>
        	<div id="middle_leftone">
        		<div class="middle_left_content">
        			<?php echo $_smarty_tpl->tpl_vars['detail']->value['si_content'];?>

        		</div>
        		 <div id="middle_left_file">
            	<?php if ($_smarty_tpl->tpl_vars['detail']->value['file_id']!=''){?>
        		相关附件：<a target="top" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
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
            </div>
           
             <div id="middle_leftprenext" class="m-l-footer">
            	<p>
        			上一条：
        			
        			<?php if ($_smarty_tpl->tpl_vars['pre']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/sourceinformation/detail/id/<?php echo $_smarty_tpl->tpl_vars['pre']->value['si_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pre']->value['si_title'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
        		<p>
        			下一条：
        			<?php if ($_smarty_tpl->tpl_vars['next']->value!=''){?>
        			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/sourceinformation/detail/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['si_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['si_title'];?>
</a>
        			<?php }else{ ?>
        			没有了！
        			<?php }?>
        		</p>
            </div>
        </div>    
             <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['si_content'])),130,'…',true), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/sourceinformation/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['si_id']), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['xinxifenxiang'] = new Smarty_variable(1, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['tuijianzhaopinhui'] = new Smarty_variable(1, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>    
        
        
    
    
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>