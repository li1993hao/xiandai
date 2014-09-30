<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 14:28:13
         compiled from "app/tpl/index/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:134366591542a4d7d94d490-08981546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d96596228835892b3bed878e3661c8ddfa8116' => 
    array (
      0 => 'app/tpl/index/index.htm',
      1 => 1412042840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134366591542a4d7d94d490-08981546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'recNews' => 0,
    'jobFair' => 0,
    'tempCalendar' => 0,
    'corpMsg' => 0,
    'jobFairMsg' => 0,
    'interMsg' => 0,
    'jobPlan' => 0,
    'jobGuid' => 0,
    'entreGuid' => 0,
    'fellowVisited' => 0,
    'empStar' => 0,
    'bulletin' => 0,
    'stuNotice' => 0,
    'wwPersons' => 0,
    'jobNotice' => 0,
    'jobAct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a4d7de562a3_80183838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a4d7de562a3_80183838')) {function content_542a4d7de562a3_80183838($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_getdate')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.getdate.php';
?><!DOCTYPE HTML>
<html>
<!-- <![endif]-->


<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/index/index.css" />

    <title>天津现代职业技术学院就业指导中心</title>

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
            <ul>
                <li><a href="#">首页</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/center/index">中心简介</a>
                </li>
                <li class="drop"><a href="#">招聘查询</a>
                    <div class="drop_down">
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/index">招聘会信息</a>
                        </div>
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">招聘信息</a>
                        </div>
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendar">招聘日历</a>
                        </div>
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/internindex">实习招聘</a>
                        </div>
                    </div>
                </li>
                <li class="drop"><a href="#">用人单位服务</a>
                    <div class="drop_down">
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Collegeintroduction/index">院系介绍</a>
                        </div>
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Sourceinformation/index">生源信息</a>
                        </div>
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Recruitment/index">招聘指南</a>
                        </div>
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentteam/index">就业专员</a>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobGuid">就业指导</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entreGuid">创业指导</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/employmentpolicy/index">就业政策</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobNotice">通知公告</a>
                </li>
                <li><a href="#footer">联系我们</a>
                </li>
            </ul>
        </div>

        <div class="middle">
            <!--轮播控件-->
            <div class="carousel">
                <div class="carousel_scroll_wrap">
                    <div class="carousel_content">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['name'] = 'recnews';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total']);
?>
                        <div>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_id'];?>
">
                               <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['pic_link'])===null||$tmp==='' ? 'noimg.jpg' : $tmp);?>
"/></a>
                        </div>
                        <?php endfor; endif; ?>
                    </div>
                </div>

                <div class="carousel_info">
                    <div class="carousel_left"></div>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['name'] = 'recnews';
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['recnews']['total']);
?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']==0){?>
                            <div class="carousel_mid">
                                <div>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_title'];?>
</a>
                                </div>
                                <div><?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_content'])),50,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>
</div>
                            </div>
                        <?php }else{ ?>
                            <div class="carousel_mid" style="display: none">
                                <div>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_title'];?>
</a>
                                </div>
                                <div><?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['recnews']['index']]['ji_content'])),50,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>
</div>
                            </div>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['recnews']['last']){?>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recNews']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
                                <div class="carousel_mid" style="display: none">
                                    <div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ji_title'];?>
</a>
                                    </div>
                                    <div><?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['recNews']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ji_content'])),50,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>
</div>
                                </div>
                                <?php endfor; endif; ?>
                            <?php }?>

                        <?php }?>
                    <?php endfor; endif; ?>
                    <div class="carousel_right"></div>
                </div>
            </div>

            <!--信息展示区-->
            <div class="middle_main">

                <!--左边-->
                <div class="middle_left">
                    <!--快速导航-->
                    <div class="nav_fast block_style">
                        <div>
                            <div></div>
                            <div class="nav_fast_title">
                                <span>我是学生</span>
                            </div>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">招聘信息</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg">招聘会信息</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendar">招聘日历</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/index/type/2">实习信息</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobPlan">职业生涯规划</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobGuid">就业指导</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentpolicy/index">就业政策</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entreGuid">创业指导</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div></div>
                            <div class="nav_fast_title">
                                <span>我是企业</span>
                            </div>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentteam/index">就业专员</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Center/index">中心简介</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Sourceinformation/index">生源信息</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Recruitment/index">招聘指南</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Collegeintroduction/index">院系介绍</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div></div>
                            <div class="nav_fast_title">
                                <span>我是校友</span>
                            </div>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/professionpersontalk/index">校友寻访</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/empStar">创就业明星</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Activityjobbulletin/index">就业工作简报</a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/index">渤海轻工业集团</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--招聘日历-->
                    <div class="rec_clendar block_style">
                        <div class="rec_clendar_title">
                            <div>招聘日历 Recuitment calendar</div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendar">更多>></a>
                        </div>
                        <div class="rec_clendar_info">
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
                                <div>
                                    <!--日期-->
                                    <div>
                                        <!--日历mask-->
                                        <div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%Y-%m-%d");?>

                                        </div>
                                        <div>
                                            <?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime']),$_smarty_tpl);?>

                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%H:%M");?>

                                        </div>
                                    </div>
                                    <!--招聘会名称-->
                                    <div>
                                        <span>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendardetail/id/<?php echo $_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_id'];?>
">
                                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_name'],15,'…',true);?>

                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <?php endfor; endif; ?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tempCalendar']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                        <div>
                                            <!--日期-->
                                            <div>
                                                <!--日历mask-->
                                                <div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <!--招聘会名称-->
                                            <div>
                                                <span>
                                                </span>
                                            </div>
                                        </div>
                                        <?php endfor; endif; ?>
                        </div>
                    </div>

                    <!--栏目导航信息列表-->
                    <div class="category_info">
                        <div class="category_nav">
                            <ul>
                                <li>
                                    <a class="category_nav_active" href="javascript:void(0)">招聘信息</a>
                                </li>
                                <li>
                                    <a class="category_nav_normal" href="javascript:void(0)">招聘会信息</a>
                                </li>
                                <li>
                                    <a class="category_nav_normal" href="javascript:void(0)">实习信息</a>
                                </li>
                                <li>
                                    <a class="category_nav_normal" href="javascript:void(0)">职业生涯规划</a>
                                </li>
                                <li>
                                    <a class="category_nav_normal" href="javascript:void(0)">就业指导</a>
                                </li>
                                <li>
                                    <a class="category_nav_normal" href="javascript:void(0)">创业指导</a>
                                </li>
                            </ul>
                        </div>
                        <div class="category_list">
                            <!--招聘信息-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['corpMsg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_isup']!=''){?>
                                                <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                                                    [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                                                </a>
                                                <?php }else{ ?>
                                                <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                                                </a>
                                                <?php }?>

                                            </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_date'],"%Y-%m-%d");?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['corpMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_content'])),110,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">更多>></a>
                                        </div>
                            </ul>
                            <!--招聘会信息-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobFairMsg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_isup']!=''){?>
                                                    <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_id'];?>
">
                                                        [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_name'],24,'…',true);?>

                                                    </a>
                                                <?php }else{ ?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_id'];?>
">
                                                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_name'],24,'…',true);?>

                                                    </a>
                                                <?php }?>

                                            </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_opentime'],"%Y-%m-%d %H:%M");?>

                                                    <?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_opentime']),$_smarty_tpl);?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFairMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['jm_addr'],28,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/index">更多>></a>
                                        </div>
                            </ul>
                            <!--实习信息-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['interMsg']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_isup']!=''){?>
                                                <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/interndetail/id/<?php echo $_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                                                    [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                                                </a>
                                                <?php }else{ ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/interndetail/id/<?php echo $_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],35,'…',true);?>

                                                </a>
                                                <?php }?>

                                            </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_date'],"%Y-%m-%d");?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['interMsg']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_content'])),110,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/internindex">更多>></a>
                                        </div>
                            </ul>
                            <!--职业生涯规划-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobPlan']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                                                <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                    [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                </a>
                                                <?php }else{ ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                </a>
                                                <?php }?>

                                            </div>
                                            <span>
                                                <?php echo $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobPlan']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),110,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobPlan">更多>></a>
                                        </div>
                            </ul>
                            <!--就业指导-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobGuid']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                                                <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                   [顶] <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                </a>
                                                <?php }else{ ?>
                                                <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                </a>
                                                <?php }?>

                                            </div>
                                            <span>
                                                <?php echo $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),110,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobGuid">更多>></a>
                                        </div>
                            </ul>
                            <!--创业指导-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['entreGuid']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                                                    <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                       [顶] <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                    </a>
                                                <?php }else{ ?>
                                                    <a  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                    </a>
                                                <?php }?>

                                            </div>
                                            <span>
                                                <?php echo $_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entreGuid']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),110,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/entreGuid">更多>></a>
                                        </div>
                            </ul>
                        </div>
                    </div>

                    <div class="focus_map">
                    </div>

                    <div class="category_info2">
                        <div class="category_nav2">
                            <ul>
                                <li>
                                    <a class="category_nav2_active" href="javascript:void(0)">校友寻访</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">创就业明星</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">就业工作简报</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">学生就业通讯</a>
                                </li>
                            </ul>
                        </div>
                        <div class="category_list">
                            <!--校友寻访-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fellowVisited']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/professionpersontalk/Talkdetail/id/<?php echo $_smarty_tpl->tpl_vars['fellowVisited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ppt_id'];?>
">
                                                   <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['fellowVisited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ppt_title'],35,'…',true);?>

                                                </a>
                                            </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fellowVisited']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ppt_pubtime'],"%Y-%m-%d");?>

                                            </span>
                                        </div>
                                        <div>
                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                            </ul>
                            <!--创就业明星-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['empStar']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                                                <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                    [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                </a>
                                                <?php }else{ ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],35,'…',true);?>

                                                </a>
                                                <?php }?>
                                            </div>
                                            <span>
                                                <?php echo $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['empStar']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),110,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                            </ul>
                            <!--就业工作简报-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bulletin']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Activityjobbulletin/detail/id/<?php echo $_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_title'],35,'…',true);?>

                                                </a>
                                            </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_time'],"%Y-%m-%d");?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bulletin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aa_content'])),110,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                            </ul>
                            <!--学生就业通讯-->
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stuNotice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <div>
                                            <div>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/periodicals/detail/id/<?php echo $_smarty_tpl->tpl_vars['stuNotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['a_id'];?>
">
                                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['stuNotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['a_title'],35,'…',true);?>

                                                </a>
                                            </div>
                                            <span>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['stuNotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['a_time'],"%Y-%m-%d");?>

                                            </span>
                                        </div>
                                        <div>
                                            <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['stuNotice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['a_content'])),110,'…',true);?>

                                        </div>
                                    </li>
                                    <?php endfor; endif; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="bohai_info block_style">
                        <div>
                            <div>渤海轻工业集团</div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/index">更多>></a>
                        </div>
                        <div>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['name'] = 'wwperson';
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wwPersons']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['wwperson']['total']);
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/detail/id/<?php echo $_smarty_tpl->tpl_vars['wwPersons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['wwperson']['index']]['ww_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['wwPersons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['wwperson']['index']]['pic_link'])===null||$tmp==='' ? 'noimg.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['wwPersons']->value[$_smarty_tpl->getVariable('smarty')->value['section']['wwperson']['index']]['ww_title'];?>
" /></a>
                                <?php endfor; endif; ?>
                            </a>
                        </div>
                        <div>
                            <div>心怀梦想 自由翱翔</div>
                            <div>心怀梦想 自由翱翔</div>
                        </div>
                    </div>
                </div>

                <!--右边-->
                <div class="middle_right">
                    <div class="right_top block_style">
                        <div class="right_top_nav">
                            <div class="category_nav2_active">通知公告</div>
                            <div>工作动态</div>
                        </div>
                        <!--通知公告-->
                        <ul>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobNotice']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                <!--item-->
                                <li>
                                    <!--title-->
                                    <div>
                                        <?php if ($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                                        <a  style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                                            [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                                        </a>
                                        <?php }else{ ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                                        </a>
                                        <?php }?>

                                    </div>
                                    <!--time-->
                                    <div>
                                        <?php echo $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                                    </div>
                                    <!--info-->
                                    <div>&nbsp&nbsp&nbsp&nbsp
                                        <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobNotice']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),40,'…',true);?>

                                    </div>
                                </li>
                                <?php endfor; endif; ?>

                                <div style="margin-top: 5px;border-bottom: none;text-align: right;"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobNotice" target="_blank">更多>></a>
                                </div>
                        </ul>
                        <!--工作动态-->
                        <ul>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobAct']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                <!--item-->
                                <!--item-->
                                <li>
                                    <!--title-->
                                    <div>
                                        <?php if ($_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_isup']!=''){?>
                                        <a style="color: #ff0000" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                                           [顶] <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                                        </a>
                                        <?php }else{ ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
" target="_blank">
                                             <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],20,'…',true);?>

                                        </a>
                                        <?php }?>

                                    </div>
                                    <!--time-->
                                    <div>
                                        <?php echo $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'];?>

                                    </div>
                                    <!--info-->
                                    <div>&nbsp&nbsp&nbsp&nbsp
                                        <?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['jobAct']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),40,'…',true);?>

                                    </div>
                                </li>
                                <?php endfor; endif; ?>
                                <div style="margin-top: 5px;border-bottom: none;text-align: right;"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/jobAct" target="_blank">更多>></a>
                                </div>
                        </ul>

                    </div>
                    <div class="right_map block_style">
                        <div>出行路线 Travel Routers</div>
                        <div id="baidu_map">
                        </div>
                    </div>
                    <div class="right_mid block_style">
                        <div></div>
                        <!--登录-->
                        <div>
                            <div>学生登录</div>
                            <div>企业登录</div>
                        </div>
                        <div><a href="#">学生指导手册</a>
                        </div>
                        <div><a href="#">用人单位指导手册</a>
                        </div>
                        <div>
                            <div>
                                <a href="#">毕业生就业管理系统</a>
                            </div>
                            <div>
                                <a href="#">自助创业证的申请</a>
                            </div>
                        </div>
                    </div>
                    <div id="feedback" class="right_feedback block_style">
                        <div>意见反馈 Suggestions</div>
                        <div id="friendly">
                            <div>界面友好性：</div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_off"></div>
                            <div class="star star_off"></div>
                            <span>还行</span>
                        </div>
                        <div id="effective">
                            <div>信息有效性：</div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_off"></div>
                            <div class="star star_off"></div>
                            <span>还行</span>
                        </div>
                        <div id="helpful">
                            <div>功能实用性：</div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_off"></div>
                            <div class="star star_off"></div>
                            <span>还行</span>
                        </div>
                        <div>
                            <div>您的建议:</div>
                        </div>
                        <div>
                            <textarea id="feedback_text" name="feedback_text" placeholder="请输入您的建议..."></textarea>
                        </div>
                        <div id="feed_submit">提交</div>
                    </div>
                </div>
            </div>

        </div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/am.min.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/index/index.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
     <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=A03339d9c32ed4f0920276cd3d9b0474"></script>
</body>

</html><?php }} ?>