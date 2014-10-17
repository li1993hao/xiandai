<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 13:59:21
         compiled from "admin\tpl\page.htm" */ ?>
<?php /*%%SmartyHeaderCode:24863543f5eb9bafac0-35469807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe1e1242e5729e7a09a1983f90e58d5d409be225' => 
    array (
      0 => 'admin\\tpl\\page.htm',
      1 => 1413191798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24863543f5eb9bafac0-35469807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'news' => 0,
    'url' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f5eb9d72403_60961221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f5eb9d72403_60961221')) {function content_543f5eb9d72403_60961221($_smarty_tpl) {?><LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/page.css" type="text/css" rel="stylesheet">
<div id="Paging">
	<div class="paging_show">
		<ul>
    		<?php if ($_smarty_tpl->tpl_vars['news']->value['page']=="1"){?>
    		<li class="Paging_now">1</li>
    		<?php }else{ ?>
    		<li class="Paging_pre"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['news']->value['page']-1;?>
">&nbsp;</a></li>
    		<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/1">1</a></li>
     		<?php if ($_smarty_tpl->tpl_vars['news']->value['page']-1>5){?>
     			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (2) : 2-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     	<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>	    
     			<?php }} ?>
     	<li >...</li>
     			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['news']->value['page']-1+1 - ($_smarty_tpl->tpl_vars['news']->value['page']-2) : $_smarty_tpl->tpl_vars['news']->value['page']-2-($_smarty_tpl->tpl_vars['news']->value['page']-1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['news']->value['page']-2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     	<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>	    
     			<?php }} ?>
     		<?php }else{ ?>
     			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['news']->value['page']-1+1 - (2) : 2-($_smarty_tpl->tpl_vars['news']->value['page']-1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     	<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>	    
     			<?php }} ?>
     			
     		<?php }?>
     	<li class="Paging_now"><?php echo $_smarty_tpl->tpl_vars['news']->value['page'];?>
</li>
    		<?php }?>
    		
    		<?php if ($_smarty_tpl->tpl_vars['news']->value['page']!=$_smarty_tpl->tpl_vars['news']->value['totalPage']){?>
    			<?php if ($_smarty_tpl->tpl_vars['news']->value['totalPage']-$_smarty_tpl->tpl_vars['news']->value['page']>5){?>
    				<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['news']->value['page']+2+1 - ($_smarty_tpl->tpl_vars['news']->value['page']+1) : $_smarty_tpl->tpl_vars['news']->value['page']+1-($_smarty_tpl->tpl_vars['news']->value['page']+2)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['news']->value['page']+1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     	<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>	    
     			<?php }} ?>
     			<li >...</li>
     			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['news']->value['totalPage']-1+1 - ($_smarty_tpl->tpl_vars['news']->value['totalPage']-2) : $_smarty_tpl->tpl_vars['news']->value['totalPage']-2-($_smarty_tpl->tpl_vars['news']->value['totalPage']-1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['news']->value['totalPage']-2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     	<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>	    
     			<?php }} ?>
     		<?php }else{ ?>
     			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['news']->value['totalPage']-1+1 - ($_smarty_tpl->tpl_vars['news']->value['page']+1) : $_smarty_tpl->tpl_vars['news']->value['page']+1-($_smarty_tpl->tpl_vars['news']->value['totalPage']-1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['news']->value['page']+1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     	<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>	    
     			<?php }} ?>
    			<?php }?>
    		<li class="Paging_btn"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['news']->value['totalPage'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['totalPage'];?>
</a></li>	
    		<li class="Paging_next"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['news']->value['page']+1;?>
">&nbsp;</a></li>
    		
    		
    		<?php }?>
        	
    	</ul>
	</div>    
</div><?php }} ?>