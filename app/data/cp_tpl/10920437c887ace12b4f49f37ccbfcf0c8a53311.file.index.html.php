<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 15:52:36
         compiled from "app/tpl/friendlink/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1904298504541e83c41c3bf1-83616920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10920437c887ace12b4f49f37ccbfcf0c8a53311' => 
    array (
      0 => 'app/tpl/friendlink/index.html',
      1 => 1396319296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904298504541e83c41c3bf1-83616920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'page' => 0,
    're' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e83c4254337_44317794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e83c4254337_44317794')) {function content_541e83c4254337_44317794($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('Friendlink/Getlink', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("友情链接", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/link/link.css" />   
  <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/middle-right5.css" />  
    <div id="middle">
    	<div id="middle_left">
            <div id="work">
            	<h2>校内链接</h2>
            	<?php if ($_smarty_tpl->tpl_vars['page']->value=="0"){?>没有数据
				<?php }else{ ?>
				<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
				<div style ="padding-left:5px;padding-top:10px;width:280px;height:30px;float:left;" >
				<div style ="width:280px;height:30px;"><a href="<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['re']->value['fl_title'];?>
</a></div>
                </div>
                 <?php } ?>
                 <?php }?>
             </div>
             <div style="clear:both;" ></div>
             <div id="policy">
             
            	<h2>校外链接</h2>
            	<?php if ($_smarty_tpl->tpl_vars['link']->value=="0"){?>没有数据
				<?php }else{ ?>
          		<?php  $_smarty_tpl->tpl_vars['re'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['re']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['re']->key => $_smarty_tpl->tpl_vars['re']->value){
$_smarty_tpl->tpl_vars['re']->_loop = true;
?>
				<div style ="padding-left:5px;padding-top:10px;width:280px;height:30px;float:left;" >
				<div style ="width:280px;height:30px;"><a href="<?php echo $_smarty_tpl->tpl_vars['re']->value['fl_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['re']->value['fl_title'];?>
</a></div>
                </div>
                <?php } ?>
                <?php }?>
             </div>
        </div>  
            <?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>
		  <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>