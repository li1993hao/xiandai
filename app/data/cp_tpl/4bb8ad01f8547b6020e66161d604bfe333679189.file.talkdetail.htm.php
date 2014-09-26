<?php /* Smarty version Smarty-3.1.14, created on 2014-09-27 02:33:35
         compiled from "app/tpl/professionpersontalk/talkdetail.htm" */ ?>
<?php /*%%SmartyHeaderCode:1238739852542580ea91cc77-03210760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb8ad01f8547b6020e66161d604bfe333679189' => 
    array (
      0 => 'app/tpl/professionpersontalk/talkdetail.htm',
      1 => 1411756414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238739852542580ea91cc77-03210760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542580eaa5edf0_27442347',
  'variables' => 
  array (
    'web_url' => 0,
    'detail' => 0,
    'pretalk' => 0,
    'nexttalk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542580eaa5edf0_27442347')) {function content_542580eaa5edf0_27442347($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
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
    <title>校友寻访-<?php echo $_smarty_tpl->tpl_vars['detail']->value['ppt_title'];?>
</title>
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
/index.php/professionpersontalk/index">校友寻访/</a>
        </dt>
        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['detail']->value['ppt_title'];?>
</a></dt>
    </dl>
</div>
<div class="middle">

    <div class="middle_left">
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['ppt_title'];?>
</p>
        </div>
        <div>
            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail']->value['ppt_pubtime'],"%Y-%m-%d");?>
&nbsp;
            浏览：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ppt_scan'])===null||$tmp==='' ? "0" : $tmp);?>
&nbsp;
            分享：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ppt_share'])===null||$tmp==='' ? "0" : $tmp);?>
&nbsp;
        </div>
        <div></div>
        <div class="content">
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
            <div id="middle_img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
            </div>
            <?php }?>
            <div style="clear: both"></div>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['ppt_content'];?>

        </div>
        <div id="middle_left_file">
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['file_id']!=''){?>
            相关附件：
            <a target="top" style="color:red;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['detail']->value['file_link'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['detail']->value['file_name']==''){?>
                <?php echo $_smarty_tpl->tpl_vars['detail']->value['file_link'];?>

                <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['detail']->value['file_name'];?>

                <?php }?>
            </a>
            <?php }?>
        </div>
        <div class="zandiv" id="zandiv" style="display: none" >
            <img class="zan"   src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png" />
            <div class="zannum" ></div>
        </div>
        <div id="middle_leftprenext" style="border-top: 1px dashed #b2b2b2; padding:10px 0; margin-top: 10px">
            <p>
                上一条：
                <?php if ($_smarty_tpl->tpl_vars['pretalk']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/professionpersontalk/talkdetail/id/<?php echo $_smarty_tpl->tpl_vars['pretalk']->value['ppt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pretalk']->value['ppt_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
            <p>
                下一条：
                <?php if ($_smarty_tpl->tpl_vars['nexttalk']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/professionpersontalk/talkdetail/id/<?php echo $_smarty_tpl->tpl_vars['nexttalk']->value['ppt_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nexttalk']->value['ppt_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
        </div>
    </div>

    <div class="middle_right">
        <div class="rec">
            <div>文章信息</div>
            <div style="margin-left: 20px;color: #000000;font-size: 14px;line-height: 30px;">
            校友姓名：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ai_name'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            毕业年度：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ai_year'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            寻访届数：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ai_times'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            校友专业：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ai_disciplline'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            就业去向：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ai_where'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            就业职位：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ai_position'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            <hr/>
            访谈人：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['re_name'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            年级：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['re_grade'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            专业：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['re_discipline'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            <hr/>
            访谈时间：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ppt_city'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            访谈时间：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['ppt_talktime'])===null||$tmp==='' ? "未知" : $tmp);?>
<br/>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
</body>

</html><?php }} ?>