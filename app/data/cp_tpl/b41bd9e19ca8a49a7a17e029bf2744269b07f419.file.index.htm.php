<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 15:49:39
         compiled from "app/tpl/west/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:68463283541e83132b3481-44913613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41bd9e19ca8a49a7a17e029bf2744269b07f419' => 
    array (
      0 => 'app/tpl/west/index.htm',
      1 => 1399962618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68463283541e83132b3481-44913613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'news' => 0,
    'policy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e83134df812_53944628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e83134df812_53944628')) {function content_541e83134df812_53944628($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable((($tmp = @'west')===null||$tmp==='' ? "index" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("基层就业&nbsp;G<em>rassroots&nbsp;Employment</em>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('orange', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('west_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('west_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/content.css" />  

    <div id="middle">
    	<div id="middle_left">
        
        	<div id="middle_leftone">
            	<p>广大青年要牢记"空谈误国、实干兴邦"，立足本职、埋头苦干，从自身做起，从点滴做起，用勤劳的双手、一流的业绩成就属于自己的人生精彩。要不怕困难、攻坚克难，勇于到条件艰苦的基层、国家建设的一线、项目攻关的前沿，经受锻炼，增长才干。要勇于创业、敢闯敢干，努力在改革开放中闯新路、创新业，不断开辟事业发展新天地。</p>
                <p>青年朋友们，人的一生只有一次青春。现在，青春是用来奋斗的；将来，青春是用来回忆的。人生之路，有坦途也有陡坡，有平川也有险滩，有直道也有弯路。青年面临的选择很多，关键是要以正确的世界观、人生观、价值观来指导自己的选择。无数人生成功的事实表明，青年时代，选择吃苦也就选择了收获，选择奉献也就选择了高尚。青年时期多经历一点摔打、挫折、考验有利于走好一生的路。要历练宠辱不惊的心理素质，坚定百折不挠的进取意志，保持乐观向上的精神状态，变挫折为动力，用从挫折中吸取的教训启迪人生，使人生获得升华和超越。总之，只有进行了激情奋斗的青春，只有进行了顽强拼搏的青春，只有为人民作出了奉献的青春，才会留下充实、温暖、持久、无悔的青春回忆。</p>
                <div id="talk">————摘自习近平在同各界优秀青年代表座谈时的讲话</div>
            </div>
            
            <div id="work">
            	<h2>工作动态</h2>
            	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<?php if ($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_id']!=''){?>
				<div class="work_one">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" alt="picture" />
                    <div class="work_concent">
                		<div class="work_title">
                    		
                    		<p>
                    		<?php if ($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_isup']==''){?>
                    			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                    				<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>

                    			</a>
                    		<?php }else{ ?>
                    			<a style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                    				[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>

                    			</a>
                    		<?php }?>
                    		</p>
                    		<em><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_time'];?>
</em>
                    		<div style="clear:both;" ></div>
                    	</div>
                        <div class="concent">
                            <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_content'])),130,'…',true);?>

                            </p>
                         </div>
                    	<div class="work_read">
                    		
                        	<div class="work_read_left">
                   				阅读：<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_read'];?>

                      			&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_share'];?>

                   			</div>
                    		<div class="work_read_right" >
                       			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
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
                		<?php if ($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_isup']==''){?>
                    		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a>
                   		<?php }else{ ?>
                   			<a style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">
                   				[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>

                   			</a>
                   		<?php }?>
		
                		</p>
                		<em><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_time'];?>
</em>
 						<div style="clear:both;" ></div>
                    </div>
                    <div class="concentone">
                        <p>
                        	<?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_content'])),130,'…',true);?>

                        </p>
                    </div>
                    
                    <div class="work_readone">
                    	<div class="work_read_left">
                   			阅读：<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_read'];?>

                      		&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_share'];?>

                   		</div>
                    	<div class="work_read_right" >
                       		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">查看详情>></a>
                   		</div>
                   		<div style="clear:both;" ></div>
                   	</div>
                </div>
                <?php }?>
					
				<?php endfor; endif; ?>
				<diV style="text-align:right;"><a style="color: #585858;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/news">查看更多>></a></div>
                
             </div>
             
             <div id="policy">
             
            	<h2>相关政策</h2>
            	
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['policy']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<?php if ($_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pic_id']!=''){?>
				<div id="work_one">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pic_link'];?>
" alt="picture" />
                    <div id="work_concent">
                		<div id="work_title">
                    		<p>
                    		<?php if ($_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_isup']==''){?>
                    			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'];?>
</a>
                   			<?php }else{ ?>
                   				<a style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">[顶]<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'];?>
</a>
                   			<?php }?>
                    		</p><em><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_time'];?>
</em>
                    		<div style="clear:both;" ></div>
                    	</div>
                        <div class="concent">
                            <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_content'])),130,'…',true);?>

                            </p>
                         </div>
                    	<div class="work_read">
                    		<div class="work_read_left">
                   				阅读：<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_read'];?>

                      			&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_share'];?>

                    		</div>
                       		<div class="work_read_right" >
                          		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
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
						<?php if ($_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_isup']==''){?>
                   			<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'];?>
</a>
                 		<?php }else{ ?>
                  			<a style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">[顶]<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'];?>
</a>
                  		<?php }?>
						</p>
						<em><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_time'];?>
</em>
 						<div style="clear:both;" ></div>
                    </div>
                    <div class="concentone">
                        <p>
                        	<?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_content'])),130,'…',true);?>

                        </p>
                    </div>
                    <div class="work_readone">
                    	<div class="work_read_left">
                   			阅读：<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_read'];?>

                      		&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_share'];?>

                    	</div>
                       	<div class="work_read_right" >
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">查看详情>></a>
                      	</div>
                      	<div style="clear:both;" ></div>
                
                   	</div>
                </div>
                <?php }?>
					
				<?php endfor; endif; ?>
                <diV style="text-align:right;"><a style="color: #585858;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/policy">查看更多>></a></div>
                
             </div>
        </div>    
        <?php $_smarty_tpl->tpl_vars['dianxingrenwu'] = new Smarty_variable(1, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>