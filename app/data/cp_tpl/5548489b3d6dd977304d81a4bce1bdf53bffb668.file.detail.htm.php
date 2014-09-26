<?php /* Smarty version Smarty-3.1.14, created on 2014-09-27 02:28:39
         compiled from "app/tpl/periodicals/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:2368538005425979a864175-69292985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5548489b3d6dd977304d81a4bce1bdf53bffb668' => 
    array (
      0 => 'app/tpl/periodicals/detail.htm',
      1 => 1411756117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2368538005425979a864175-69292985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5425979a9b4304_19110478',
  'variables' => 
  array (
    'web_url' => 0,
    'idid' => 0,
    'detail' => 0,
    'prearticle' => 0,
    'nextarticle' => 0,
    'jobFair' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5425979a9b4304_19110478')) {function content_5425979a9b4304_19110478($_smarty_tpl) {?><?php if (!is_callable('smarty_function_getdate')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.getdate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
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
/common/app/css/rec.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
    <title>学生就业通讯——<?php echo $_smarty_tpl->tpl_vars['idid']->value['p_number'];?>
期<?php echo $_smarty_tpl->tpl_vars['idid']->value['l_number'];?>
版-$detail.a_title</title>
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
/index.php/periodicals/index/id/<?php echo $_smarty_tpl->tpl_vars['idid']->value['p_id'];?>
">学生就业通讯—第<?php echo $_smarty_tpl->tpl_vars['idid']->value['p_number'];?>
期<?php echo $_smarty_tpl->tpl_vars['idid']->value['l_number'];?>
版/</a>
        </dt>
        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['detail']->value['a_title'];?>
</a></dt>
    </dl>
</div>
<div class="middle">

    <div class="middle_left">
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['a_title'];?>
</p>
        </div>
        <div>
            发布时间：<?php echo $_smarty_tpl->tpl_vars['detail']->value['a_time'];?>

            &nbsp; 阅读次数：<?php echo $_smarty_tpl->tpl_vars['detail']->value['a_scan'];?>

            &nbsp;分享数：<?php echo $_smarty_tpl->tpl_vars['detail']->value['a_share'];?>

        </div>
        <div></div>
        <div  class="content">
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
            <div id="middle_img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
            </div>
            <?php }?>
            <div style="clear: both"></div>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['a_content'];?>

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
        <div class="zandiv" id="zandiv" style="display: none">
            <img class="zan"   src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png" />
            <div class="zannum" ><?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_good'];?>
</div>
        </div>
        <hr></hr>
        <div id="middle_leftprenext" class="m-l-footer">
            <p>
                上一条：

                <?php if ($_smarty_tpl->tpl_vars['prearticle']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['prearticle']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['prearticle']->value['a_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
            <p>
                <?php if ($_smarty_tpl->tpl_vars['nextarticle']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextarticle']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextarticle']->value['a_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
        </div>
    </div>

    <div class="middle_right">
        <div class="rec">
            <div>推荐招聘会信息</div>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['name'] = 'calendar';
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobFair']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['calendar']['total']);
?>
            <div class="rec_item">
                <div>
                    <div> <?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime']),$_smarty_tpl);?>
</div>
                    <div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%Y.%m.%d");?>
</div>
                </div>
                <div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendardetail/id/<?php echo $_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_id'];?>
"> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_name'],15,'…',true);?>
</a>
                    </div>
                    <div> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%Y.%m.%d  %H:%M");?>
</div>
                    <div> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_addr'],15,'…',true);?>
</div>
                </div>
            </div>
            <?php endfor; endif; ?>
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