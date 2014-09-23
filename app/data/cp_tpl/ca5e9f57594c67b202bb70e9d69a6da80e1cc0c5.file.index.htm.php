<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:53:31
         compiled from "app/tpl/corpinternmsg/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:309752223541e4bbb459bf7-11563594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5e9f57594c67b202bb70e9d69a6da80e1cc0c5' => 
    array (
      0 => 'app/tpl/corpinternmsg/index.htm',
      1 => 1396322546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309752223541e4bbb459bf7-11563594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'corpInfo' => 0,
    'web_url' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4bbb539c05_77777171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4bbb539c05_77777171')) {function content_541e4bbb539c05_77777171($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable("Corpinternmsg/index/type/".((string)$_smarty_tpl->tpl_vars['corpInfo']->value['type_code']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['corpInfo']->value['type_name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['corpInfo']->value['type_name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/content.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/middle-right2.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/corpinternmsg/list.js" type="text/javascript"></script>
    <div id="middle">
    	<div id="middle_left">

      		<div class="work">
      		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                	<?php if ($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_isup']==''){?>
                		<p><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_name'];?>
</a></p>
                		<em></em>
 					<?php }else{ ?>
 						<p><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_id'];?>
"><font color="#ff0000">[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_name'];?>
</font></a></p>
 						<em></em>
                    <?php }?>
                    </div>
                    <!--
                    <div class="concentone">
                        <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_content'])),130,'…',true);?>

                    </div>
                     -->

                    <div class="work_readone">
                   		<div class="work_read_left">
                   			<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_date'];?>

                   			&nbsp;阅读：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_read'];?>

                      		&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_share'];?>

                    	</div>
                        <div class="work_read_right" >
                          	<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_id'];?>
">查看详情>></a>
                      	</div>
                      	<div style="clear:both;" ></div>
                   	</div>
                   	<div style="clear:both;" ></div>
                </div>
      		<?php endfor; endif; ?>
      		</div>

       <?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['news']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/corpinternmsg/index/type/".((string)$_smarty_tpl->tpl_vars['corpInfo']->value['type_code'])),$_smarty_tpl);?>

        </div>

    	<?php $_smarty_tpl->tpl_vars['xinxishaixuan'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['searchaction'] = new Smarty_variable('getsearchlist2', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tuijianzhaopinhui'] = new Smarty_variable(1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>