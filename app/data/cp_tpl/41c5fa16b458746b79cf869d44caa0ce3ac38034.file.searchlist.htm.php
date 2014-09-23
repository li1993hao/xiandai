<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:23
         compiled from "app/tpl/corpinternmsg/searchlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:2126384660541e4affeeec18-56358221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41c5fa16b458746b79cf869d44caa0ce3ac38034' => 
    array (
      0 => 'app/tpl/corpinternmsg/searchlist.htm',
      1 => 1396319296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126384660541e4affeeec18-56358221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'key' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4b0008d3e7_99800897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4b0008d3e7_99800897')) {function content_541e4b0008d3e7_99800897($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('corpinternmsg/getsearchlist#', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('招聘搜索', null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable('招聘搜索', null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('blue', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('jobinfo_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('jobinfo_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 
     <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/content.css" />
    

    <div id="middle">
    	<div id="middle_left">
        	<?php if ($_smarty_tpl->tpl_vars['key']->value==''){?>
        	<div style="text-align:left;"><font color="#0000FF"><br>关键字不存在</font></div>
    		<?php }else{ ?>
     		<div style="text-align:left;"><font color="#0000FF"><br>关键字:"<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
",搜索出 <?php echo $_smarty_tpl->tpl_vars['news']->value['total'];?>
篇文章！</font></div>
            <div id="work"> 
            	
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
                		<p>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_id'];?>
">
                				<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_name'];?>

                			</a>
                		</p>
                		<em><?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_date'];?>
</em>
 	
                    </div>
                    <div class="concentone">
                        <p>
                        	<?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_content'])),130,'…',true);?>

                        </p>
                    </div>
                    <div class="work_readone">
                   		<div class="work_read_left">阅读次数：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_read'];?>

                      		&nbsp;&nbsp;分享次数：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_share'];?>

                    	</div>
                        <div class="work_read_right" >
                          		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['cim_id'];?>
">查看详情>></a>
                      		</div>
                      		<div style="clear:both;" ></div>
                   	</div>
                   	<div style="clear:both;" ></div>
                </div>
     
					
				<?php endfor; endif; ?>
                
             </div>
             
           	<?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['news']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/corpinternmsg/getsearchlist/key/".((string)$_smarty_tpl->tpl_vars['key']->value)),$_smarty_tpl);?>

			<?php }?>
        </div>    
         
        <?php $_smarty_tpl->tpl_vars['xinwensousuo'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['newssearchcoin'] = new Smarty_variable(($_smarty_tpl->tpl_vars['web_url']->value).('/common/app/images/jobinfo/lanse1.png'), null, 0);?>
         <?php $_smarty_tpl->tpl_vars['searchgocoin'] = new Smarty_variable(($_smarty_tpl->tpl_vars['web_url']->value).('/common/app/images/corpinternmsg/glass3.png'), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['redianpaihang'] = new Smarty_variable(1, null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </div>
   
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>