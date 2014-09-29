<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 15:23:54
         compiled from "app/tpl/company/left_function.html" */ ?>
<?php /*%%SmartyHeaderCode:15838864455429090a3f6a51-43579969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b963a50634e21ac2be6c5e4850b372f49f85c7' => 
    array (
      0 => 'app/tpl/company/left_function.html',
      1 => 1397109454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15838864455429090a3f6a51-43579969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'pageid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5429090a455af9_60611165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429090a455af9_60611165')) {function content_5429090a455af9_60611165($_smarty_tpl) {?><style>
#myinfo-right{	border:#d9d9d9 1px solid;float:left;display:block;	width:198px;background:#FFF;position:relative;top:-20px;margin-right:40px;}
#myinfo-right>p{height: 10px;}
.myinfo-right-title{background: #F1EEEF;height: 35px;border-bottom: #d9d9d9 solid 1px;}
.myinfo-right-title>img{display:block;float:left;width: 30px;height: 25px;
	padding:7px 4px 3px 10px;background:#ffd189;}
.myinfo-right-title>span{display:block;float:left;margin:5px 10px 5px;margin-top: 6px;color: #446976;font-size: 20px;}

.menu-list{	text-align:left;height:35px;font-size:15px;color:#446976; border-bottom:#d9d9d9 dotted 1px;background:#F1EEEF;}
.menu-list-item{display:block; height:35px; font-size:15px;color:#788ac6; }
.menu-list-item>img{display:block;float:left;width: 30px;height: 25px;padding:7px 4px 3px 10px;background:#788ac6;}
.menu-list-item>span{display:block;float:left;margin:5px 10px 5px;font-weight: 700;}
.menu-list-item:hover{background:#788ac6;color:#fff;}
.item-selected{background:#788ac6;color:#fff;}

</style>
<div id="myinfo-right">
 	<div class="myinfo-right-title">
       	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu-logo.png" /><span>功能菜单</span>
    </div>
    <p ></p>
    <div class="menu-list">
		<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==1){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_1.png"/><span>企业基本信息</span>
		</a>
	</div>
	<p ></p>
	<div class="menu-list">
		<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==2){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair">
			<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_2.png"/><span>招聘会预订</span>
		</a>
	</div>
	<p></p>
    <div class="menu-list">
    	<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==3){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmycorpmsg">
    		<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_3.png"/><span>招聘信息</span>
    	</a>	
	</div>
	<p></p>	
	<div class="menu-list">			
		<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==4){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Studentinterestme">
		    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_4.png"/><span>学生信息</span>
		</a>
	</div>
	<p></p>
	<div class="menu-list">
		<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==5){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw">
		    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_5.png"/><span>修改密码</span>
		</a>
	</div>
	<p></p>
	<div class="menu-list">
		<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==6){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Index/liuyan">
			<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_6.png"/><span>满意度调查</span>
		</a>
	</div>
	<p></p>
	<div class="menu-list">
		<a class="menu-list-item <?php if ($_smarty_tpl->tpl_vars['pageid']->value==7){?>item-selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Message">
    		<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/menu_7.png"/><span>我的消息</span>
    	</a>
	</div>
</div><?php }} ?>