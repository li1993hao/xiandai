<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 17:58:42
         compiled from "app/tpl/company/error.htm" */ ?>
<?php /*%%SmartyHeaderCode:199014040554292d3699bbc9-61295065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbfe9718b497389a9d2341e0a3f4ce82cc5dbef1' => 
    array (
      0 => 'app/tpl/company/error.htm',
      1 => 1411984721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199014040554292d3699bbc9-61295065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54292d369fc482_99740704',
  'variables' => 
  array (
    'web_url' => 0,
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54292d369fc482_99740704')) {function content_54292d369fc482_99740704($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php echo $_smarty_tpl->getSubTemplate ('commcss.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/content.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/cor_drop.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/myinfo.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
    <title>企业基本信息</title>
    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<div class="nav" style="text-align: center;line-height: 33px; margin-bottom: 500px">
    <span class="error-info" style="color:red"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorInfo']->value)===null||$tmp==='' ? " " : $tmp);?>
</span>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html>










<?php }} ?>