<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 19:41:23
         compiled from "app/tpl/west/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:9219661515425e313739b79-52387790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0748a986cc581b765659e104c311774856b677' => 
    array (
      0 => 'app/tpl/west/detail.htm',
      1 => 1411904482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9219661515425e313739b79-52387790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5425e313839904_02408440',
  'variables' => 
  array (
    'web_url' => 0,
    'detail' => 0,
    'preNews' => 0,
    'nextNews' => 0,
    'persons' => 0,
    'share_content' => 0,
    'addShareUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5425e313839904_02408440')) {function content_5425e313839904_02408440($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE HTML>
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
/common/app/css/common/detail-360.css" />
    <title>院系介绍-</title>
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
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/index">渤海轻工业集团/</a>
        </dt>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/<?php echo $_smarty_tpl->tpl_vars['detail']->value['wc_action'];?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['wc_name'];?>
/</a>
        </dt>
        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_title'];?>
</a></dt>
    </dl>
</div>
<div class="middle">

    <div class="middle_left">
        <div >
            <p style="float: none; color: #000000; font-size: 18px; text-align: center"><?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_title'];?>
</p>
        </div>
        <div>
            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail']->value['ww_time'],"%Y-%m-%d");?>

            &nbsp; &nbsp; 阅读次数：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_read'];?>
 次
            &nbsp; &nbsp; 分享次数：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_share'];?>
 次
            <?php echo $_smarty_tpl->getSubTemplate ('share.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div>
        </div>
        <div  class="content">
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
            <div id="middle_img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
            </div>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['ww_content'];?>

        </div>
        <div id="middle_leftprenext" class="m-l-footer">
            <p>
                上一条：

                <?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['ww_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
            <p>
                下一条：
                <?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ww_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ww_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
        </div>
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

<?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['ww_content'])),130,'…',true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/west/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['ww_id']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1782349" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script>
    var bds_config = {
        'bdDesc':'<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['share_content']->value),130,"...");?>
'
    };
    $(function(){
        $("#bdshare>a").click(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['addShareUrl']->value;?>
"
            });
        });
    });
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>>
</body>

</html><?php }} ?>