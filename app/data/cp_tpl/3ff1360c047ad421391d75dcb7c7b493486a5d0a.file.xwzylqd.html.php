<?php /* Smarty version Smarty-3.1.14, created on 2014-09-22 11:06:24
         compiled from "app/tpl/leavelist/xwzylqd.html" */ ?>
<?php /*%%SmartyHeaderCode:1669871638541f9230730664-89180247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ff1360c047ad421391d75dcb7c7b493486a5d0a' => 
    array (
      0 => 'app/tpl/leavelist/xwzylqd.html',
      1 => 1400905108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669871638541f9230730664-89180247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'xuewei' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541f92307c15a7_18632860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541f92307c15a7_18632860')) {function content_541f92307c15a7_18632860($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("毕业证、学位证遗留清单", null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable("毕业证、学位证遗留清单", null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/send/send.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />    
    <div id="middle">
    	<div id="middle_left">
    		<div id="middle_title">
    			天津外国语大学毕业证、学位证遗留清单
    		</div>
    		<div id="middle_attr">
    			发布时间:<?php echo $_smarty_tpl->tpl_vars['xuewei']->value['last_modify_time'];?>
 
    		</div>
        	<div id="middle_leftone">
        		<h3><center><?php echo $_smarty_tpl->tpl_vars['xuewei']->value['title'];?>
</center></h3>
        		<p>
        			<?php echo $_smarty_tpl->tpl_vars['xuewei']->value['content'];?>

        		</p>
            </div>
            <div id="middle_leftprenext">
            </div>
            <?php if ($_smarty_tpl->tpl_vars['xuewei']->value['f_id']!=''){?>
        		相关附件：<a target="top" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['xuewei']->value['file_link'];?>
">
        		    <?php if ($_smarty_tpl->tpl_vars['xuewei']->value['filetitle']==''){?>
        			<?php echo $_smarty_tpl->tpl_vars['xuewei']->value['file_link'];?>

        			<?php }else{ ?>
        			<?php echo $_smarty_tpl->tpl_vars['xuewei']->value['filetitle'];?>

        			<?php }?>
        			</a>
        			
        		<?php }?>
        </div>    
        <?php $_smarty_tpl->tpl_vars['xinxifenxiang'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    
 <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
        
</body>
</html>
<?php }} ?>