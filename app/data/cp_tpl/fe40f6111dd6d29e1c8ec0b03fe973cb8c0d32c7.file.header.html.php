<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:48:26
         compiled from "app/tpl/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1100210258541e4a8a3f3318-61830831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe40f6111dd6d29e1c8ec0b03fe973cb8c0d32c7' => 
    array (
      0 => 'app/tpl/header.html',
      1 => 1396938842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1100210258541e4a8a3f3318-61830831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'titleSecond' => 0,
    'title' => 0,
    'topid' => 0,
    'action' => 0,
    'titleThird' => 0,
    'action2' => 0,
    'westid' => 0,
    'color' => 0,
    'phonetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4a8a4bede9_24194167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4a8a4bede9_24194167')) {function content_541e4a8a4bede9_24194167($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta id="screen-view" name="viewport"  content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/header.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
<title><?php if (isset($_smarty_tpl->tpl_vars['titleSecond']->value)){?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['titleSecond']->value);?>
<?php }else{ ?><?php echo smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title']->value),' ','');?>
<?php }?></title>
</head>
<body>

	<?php echo $_smarty_tpl->getSubTemplate ('header_top.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div id="<?php echo $_smarty_tpl->tpl_vars['topid']->value;?>
">

    </div>
    <div id="west_one">
    		<div id="people">
    			<ul>
        			<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php">首页</a></li>
            		<?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?>
            		<li>/</li>
            		<li><a <?php if (isset($_smarty_tpl->tpl_vars['action']->value)){?>href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }else{ ?>href="#"<?php }?>><?php echo (($tmp = @smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title']->value),' ',''))===null||$tmp==='' ? "中心简介" : $tmp);?>
</a></li>
            		<?php }?>
            		<?php if (isset($_smarty_tpl->tpl_vars['titleSecond']->value)){?>
            		<li>/</li>
            		<li>
            		<?php if (isset($_smarty_tpl->tpl_vars['titleThird']->value)){?>
            		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/<?php echo $_smarty_tpl->tpl_vars['action2']->value;?>
"><span id="secondtitle"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['titleSecond']->value);?>
</span></a>
            		<?php }else{ ?>
            		<span id="secondtitle"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['titleSecond']->value);?>
</span>
            		<?php }?>
            		</li>
            		<li><span id="phone-secondtitle"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['titleSecond']->value),5,"…",true);?>
</span></li>
            		<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['titleThird']->value)){?>
            		<li>/</li>
            		<li><span id="thirdtitle"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['titleThird']->value);?>
</span></li>
            		<li><span id="phone-thirdtitle"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['titleThird']->value),5,"…",true);?>
</span></li>
            		<?php }?>

        		</ul>
        	</div>
        	<div id="<?php echo $_smarty_tpl->tpl_vars['westid']->value;?>
"  class="header-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>">
        		<div class="title-container">
	        		<p id="title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "中心简介" : $tmp);?>
&nbsp;&nbsp;&nbsp;&nbsp;</p>
	        	</div>
	        		<p id="phone-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['phonetitle']->value)===null||$tmp==='' ? "中心简介" : $tmp);?>
</p>
        	</div>
        </div><?php }} ?>