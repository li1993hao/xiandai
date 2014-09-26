<?php /* Smarty version Smarty-3.1.14, created on 2014-09-27 02:07:00
         compiled from "app/tpl/activityjobbulletin/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:85856937354258bfa6e7652-83665214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b81a956dd7177c056cc65aeee2eed7bfae4a157' => 
    array (
      0 => 'app/tpl/activityjobbulletin/index.htm',
      1 => 1411750871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85856937354258bfa6e7652-83665214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54258bfa864e22_48919450',
  'variables' => 
  array (
    'web_url' => 0,
    'perid' => 0,
    'haspre' => 0,
    'hasnext' => 0,
    'bulletin' => 0,
    'sail' => 0,
    'jobFair' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54258bfa864e22_48919450')) {function content_54258bfa864e22_48919450($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_getdate')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.getdate.php';
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
    <title>就业工作简报-第<?php echo $_smarty_tpl->tpl_vars['perid']->value['ap_number'];?>
期</title>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->
    <style>
        .middle_left_title{
            height: 44px;
            border-bottom: 2px #3598db solid;
            margin: 0 10px;
        }
        .middle_left_title_left{
            float: left;
        }
        .middle_left_title_right{
            float: right;
        }

        .middle_left_title_left ,.middle_left_title_right a{
            font-size: 16px;
            color: #3598db;
            line-height: 30px;
        }


    </style>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--导航栏-->
<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="#">就业工作简报-第<?php echo $_smarty_tpl->tpl_vars['perid']->value['ap_number'];?>
期</a>
        </dt>
    </dl>
</div>
<div class="middle">

    <div class="middle_left">
        <div class="middle_left_title">
            <div class="middle_left_title_left">
                第<?php echo $_smarty_tpl->tpl_vars['perid']->value['ap_number'];?>
期
            </div>
            <div class="middle_left_title_right">
                <?php if ($_smarty_tpl->tpl_vars['haspre']->value){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/index/do/pre/id/<?php echo $_smarty_tpl->tpl_vars['perid']->value['ap_id'];?>
"  title = "上一期"><上一期</a>
                <?php }else{ ?>
                上一期
                <?php }?>
                |
                <?php if ($_smarty_tpl->tpl_vars['hasnext']->value){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/index/do/next/id/<?php echo $_smarty_tpl->tpl_vars['perid']->value['ap_id'];?>
"  title = "下一期" >下一期></a>
                <?php }else{ ?>
                下一期
                <?php }?>
            </div>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bulletin']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <?php if ($_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_id']!=''){?>
        <div class="news_item2_wrap">
            <div><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['sail']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['sail']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['pic_link'];?>
" /></div>
            <div class="news_item2">
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_top']!=''){?>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_title'];?>
</a></div>
                    <?php }else{ ?>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_id'];?>
" style="color:red">[顶]<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_title'];?>
</a></div>
                    <?php }?>
                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_time'],"%Y-%m-%d");?>
</span>
                </div>
                <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_content']),130,'…');?>
</p>
                <ul>
                    <li style="display:none"></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_scan'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_share'];?>
</li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_id'];?>
">查看详情>></a>
                    </li>
                </ul>
            </div>
        </div>
        <?php }?>
        <div class="news_item">
            <div>
                <?php if ($_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_top']!=''){?>
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_title'];?>
</a></div>
                <?php }else{ ?>
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_id'];?>
" style="color:red">[顶]<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_title'];?>
</a></div>
                <?php }?>
                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_time'],"%Y-%m-%d");?>
</span>
            </div>
            <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_content']),130,'…');?>
</p>
            <ul>
                <li style="display:none"></li>
                <li><?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_scan'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_share'];?>
</li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['aa_id'];?>
">查看详情>></a>
                </li>
            </ul>
        </div>
        <?php endfor; endif; ?>
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
<script>
    $(".middle").css("height",$(".middle_left").css("height"));
</script>
</body>

</html><?php }} ?>