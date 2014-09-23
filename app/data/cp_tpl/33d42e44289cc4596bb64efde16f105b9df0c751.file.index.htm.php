<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:50:09
         compiled from "app/tpl/jobinfo/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:98282672541e4af15d01e9-81225606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d42e44289cc4596bb64efde16f105b9df0c751' => 
    array (
      0 => 'app/tpl/jobinfo/index.htm',
      1 => 1396322546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98282672541e4af15d01e9-81225606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'typeinfo' => 0,
    'web_url' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4af1774792_17729425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4af1774792_17729425')) {function content_541e4af1774792_17729425($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.page.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable("jobinfo/index/type/".((string)$_smarty_tpl->tpl_vars['typeinfo']->value['type_code']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['typeinfo']->value['type_name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable($_smarty_tpl->tpl_vars['typeinfo']->value['type_name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable($_smarty_tpl->tpl_vars['typeinfo']->value['type_color'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('jobinfo_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('jobinfo_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/jobinfo/news.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/content.css" />
    <div id="middle">
    	<div id="middle_left">
        
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
				<?php if ($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_id']!=''){?>
				<div class="work_one">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" alt="picture" />
                    <div class="work_concent">
                		<div class="work_title">
                    			<p>
                    			<?php if ($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_recom']!=''&&$_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_isup']!=''){?>
                    			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<font color="#ff0000">[荐][顶]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
</font>
                    			</a>
                    			<?php }elseif($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_recom']!=''){?>
                    			    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<font color="#ff0000">[荐]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
</font>
                    				</a>
                    			<?php }elseif($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_isup']==''){?>
                    				<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>

                    				</a>
                    			<?php }else{ ?>
                    			    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<font color="#ff0000">[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
</font>
                    				</a>
                    			<?php }?>
                    			</p>
                    			<em><?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_date'];?>
</em>
                    			<div style="clear:both;"></div>
                    	</div>
                        <div class="concent">
                            <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_content'])),130,'…',true);?>

                            </p>
                         </div>
                    	<div class="work_read">
                    		
                        		<div class="work_read_left">阅读次数：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_read'];?>

                        		&nbsp;&nbsp;分享次数：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_share'];?>

                        		</div>
                            	<div class="work_read_right" >
                            		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">查看详情>></a>
                        		</div>
                        		<div style="clear:both;" ></div>
                   		</div>
                   </div>
                   <div style="clear:both;" ></div>
                </div>
			
				<?php }else{ ?>
					   
                
                <div class="work_two">
                	<div class="work_titleone">
                		<p>
                				<?php if ($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_recom']!=''&&$_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_isup']!=''){?>
                    			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<font color="#ff0000">[荐][顶]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
</font>
                    			</a>
                				<?php }elseif($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_recom']!=''){?>
                    			    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<font color="#ff0000">[荐]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
</font>
                    				</a>
                    			<?php }elseif($_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_isup']==''){?>
                    				<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>

                    				</a>
                    			<?php }else{ ?>
                    			    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">
                    					<font color="#ff0000">[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_title'];?>
</font>
                    				</a>
                    			<?php }?>
                    			</p>
                		<em><?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_date'];?>
</em>
                		<div style="clear:both;"></div>
 	
                    </div>
                    <div class="concentone">
                        <p>
                        	<?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_content'])),130,'…',true);?>

                        </p>
                    </div>
                    <div class="work_readone">
                   		<div class="work_read_left">阅读次数：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_read'];?>

                      	&nbsp;&nbsp;分享次数：<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_share'];?>

                    	</div>
                        <div class="work_read_right" >
                          		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ji_id'];?>
">查看详情>></a>
                      		</div>
                      		<div style="clear:both;" ></div>
                   	</div>
                   	<div style="clear:both;" ></div>
                </div>
                <?php }?>
					
				<?php endfor; endif; ?>
                
             </div>
             
             <?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['news']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/jobinfo/index/type/".((string)$_smarty_tpl->tpl_vars['typeinfo']->value['type_code'])),$_smarty_tpl);?>


        </div>    
         
         <?php $_smarty_tpl->tpl_vars['xinwensousuo'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['newssearchcoin'] = new Smarty_variable(($_smarty_tpl->tpl_vars['web_url']->value).('/common/app/images/jobinfo/sousuo.png'), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['redianpaihang'] = new Smarty_variable(1, null, 0);?>
   		<?php $_smarty_tpl->tpl_vars['humanid'] = new Smarty_variable('red_human', null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
        
    </div>
    
   <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>