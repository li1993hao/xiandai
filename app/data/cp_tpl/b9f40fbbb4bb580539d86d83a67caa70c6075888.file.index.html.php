<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:57:13
         compiled from "app/tpl/downservice/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1289992466541e4c99cc9dc2-01008642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f40fbbb4bb580539d86d83a67caa70c6075888' => 
    array (
      0 => 'app/tpl/downservice/index.html',
      1 => 1399622958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1289992466541e4c99cc9dc2-01008642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'downlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4c99d94928_70999255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4c99d94928_70999255')) {function content_541e4c99d94928_70999255($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('Downservice', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('文件下载&nbsp;F<em>ile&nbsp;Download</em>', null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/content.css" />

    <div id="middle">
    	<div id="middle_left">
        
        <div class="work">
      		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['downlist']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
      			<div class="work_two">
                	<div class="work_titleone">
                	
                		<p><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Downservice/dodown/id/<?php echo $_smarty_tpl->tpl_vars['downlist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dc_id'];?>
">
                			<?php if ($_smarty_tpl->tpl_vars['downlist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dc_istop']!=''){?>
                			<font color="#ff0000">[顶]<?php echo $_smarty_tpl->tpl_vars['downlist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dc_title'];?>
</font>
                			
                			<?php }else{ ?>
                			<?php echo $_smarty_tpl->tpl_vars['downlist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dc_title'];?>

                			<?php }?>
                		</a></p>
                		<em></em>
                    </div>
                    <!-- 
                    <div class="concentone">    
                           	
                    </div>
                     -->
               
                    <div class="work_readone">
                   		<div class="work_read_left">
            				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['downlist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dc_create'],"%Y-%m-%d");?>

                   			&nbsp;下载：<?php echo $_smarty_tpl->tpl_vars['downlist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['dc_download'];?>

                 
                    	</div>
                        <div class="work_read_right" >
                          	
                      	</div>
                      	<div style="clear:both;" ></div>
                   	</div>
                   	<div style="clear:both;" ></div>
                </div>
      		<?php endfor; endif; ?>
      		</div>
    
    	<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['downlist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/Downservice/index/"),$_smarty_tpl);?>

        </div>
        
      <?php $_smarty_tpl->tpl_vars['zhaopinxinxi'] = new Smarty_variable(1, null, 0);?>
      <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    
  <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
<?php }} ?>