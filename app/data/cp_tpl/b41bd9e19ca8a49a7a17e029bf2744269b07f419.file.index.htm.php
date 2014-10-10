<?php /* Smarty version Smarty-3.1.14, created on 2014-10-10 11:04:55
         compiled from "app/tpl/west/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1885648567543536bdca8fb7-98357660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41bd9e19ca8a49a7a17e029bf2744269b07f419' => 
    array (
      0 => 'app/tpl/west/index.htm',
      1 => 1412910292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885648567543536bdca8fb7-98357660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543536bdec7fc7_23468809',
  'variables' => 
  array (
    'web_url' => 0,
    'news' => 0,
    'policy' => 0,
    'persons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543536bdec7fc7_23468809')) {function content_543536bdec7fc7_23468809($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php echo $_smarty_tpl->getSubTemplate ('commcss.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/list.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/rec.css" />
    <title>渤海轻工业集团</title>
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

<!--导航栏-->
<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="#">渤海轻工业集团</a>
        </dt>
    </dl>
</div>
<div class="middle">

    <div class="middle_left">
        <!--就业动态-->
        <div style="text-align: right;border-bottom: 3px solid #5f5f5f;margin:0 10px; line-height: 30px;"><div style=" float: left; font-size: 20px;font-weight: bolder; ">工作动态</div>
            <a style="color: #3598db;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/news">更多>></a>
        </div>
        <div style="margin-left: 10px;width: 77px; height: 3px; background: #3598db;margin-top: -3px;"></div>
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
        <div class="news_item2_wrap">
            <div><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" /></div>
            <div class="news_item2">
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_isup']==''){?>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                    <?php }else{ ?>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" style="color:red">[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                    <?php }?>
                    <span><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_time'];?>
</span>
                </div>
                <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_content'])),130,'…',true);?>
</p>
                <ul>
                    <li style="display:none"></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_read'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_share'];?>
</li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">查看详情>></a>
                    </li>
                </ul>
            </div>
        </div>
        <?php }else{ ?>
        <div class="news_item">
            <div>
                <?php if ($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_isup']==''){?>
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                <?php }else{ ?>
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" style="color:red">[顶]<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                <?php }?>
                <span><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_time'];?>
</span>
            </div>
            <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_content'])),130,'…',true);?>
</p>
            <ul>
                <li style="display:none"></li>
                <li><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_read'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_share'];?>
</li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">查看详情>></a>
                </li>
            </ul>
        </div>
        <?php }?>
        <?php endfor; endif; ?>

            <!--就业动态end-->

        <!--<h2>相关政策</h2>-->
        <div style="text-align: right;border-bottom: 3px solid #5f5f5f;margin:0 10px;margin-top:30px; line-height: 30px;"><div style=" float: left; font-size: 20px;font-weight: bolder; ">就业政策</div>
            <a style="color: #3598db;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/policy">更多>></a>
        </div>
        <div style="margin-left: 10px;width: 77px; height: 3px; background: #3598db;margin-top: -3px;"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['policy']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <?php if ($_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_id']!=''){?>
        <div class="news_item2_wrap">
            <div><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" /></div>
            <div class="news_item2">
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_isup']==''){?>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                    <?php }else{ ?>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" style="color:red">[顶]<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                    <?php }?>
                    <span><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_time'];?>
</span>
                </div>
                <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_content'])),130,'…',true);?>
</p>
                <ul>
                    <li style="display:none"></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_read'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_share'];?>
</li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">查看详情>></a>
                    </li>
                </ul>
            </div>
        </div>
        <?php }else{ ?>
        <div class="news_item">
            <div>
                <?php if ($_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_isup']==''){?>
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                <?php }else{ ?>
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
" style="color:red">[顶]<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_title'];?>
</a></div>
                <?php }?>
                <span><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_time'];?>
</span>
            </div>
            <p><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_content'])),130,'…',true);?>
</p>
            <ul>
                <li style="display:none"></li>
                <li><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_read'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_share'];?>
</li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['policy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ww_id'];?>
">查看详情>></a>
                </li>
            </ul>
        </div>
        <?php }?>
        <?php endfor; endif; ?>

        <!--相关政策end-->


    </div>

    <div class="middle_right">
        <div class="rec">
            <div style="text-align: right"><div style="float: left">典型人物</div><a style="color: #ffffff;font-size: 16px; margin-right: 10px;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/person">MORE</a></div>
            <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['persons']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li style="text-align: center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">
                    <div style="text-align: center; height: 160px; width: 262px; border: 1px solid #b2b2b2;background-color: #F4F4F4; margin: 10px auto;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pic_link'];?>
" width="219px" height="127px" alt="<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pic_link'];?>
" />
                        <p>
                            <?php if ($_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_isup']==''){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'],14,'…');?>

                            </a>
                            <?php }else{ ?>
                            <a style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_id'];?>
">
                                [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['persons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['ww_title'],12,'…');?>

                            </a>
                            <?php }?>
                        </p>
                    </div>
                 </a>

        </li>
        <?php endfor; endif; ?>
        </ul>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script>
    $(".middle").css("height",$(".middle_left").css("height"));
</script>
</body>

</html><?php }} ?>