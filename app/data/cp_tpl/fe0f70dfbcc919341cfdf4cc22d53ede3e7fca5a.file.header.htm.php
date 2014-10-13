<?php /* Smarty version Smarty-3.1.14, created on 2014-10-12 16:41:01
         compiled from "app/tpl/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:508932121542a4f871042a0-52621829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0f70dfbcc919341cfdf4cc22d53ede3e7fca5a' => 
    array (
      0 => 'app/tpl/header.htm',
      1 => 1413103106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508932121542a4f871042a0-52621829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a4f87144a61_87391700',
  'variables' => 
  array (
    '__userinfo__' => 0,
    'web_url' => 0,
    'isIndex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a4f87144a61_87391700')) {function content_542a4f87144a61_87391700($_smarty_tpl) {?><div class="container">
    <div class="top_login">
        <p id="login_error" class="error">
            </p>
                <div>
                    <div>
                        <span>账号:</span>
                        <input type="text" name="user_name" id="user_name" placeholder="学号或邮箱" />
                    </div>
                    <div>
                        <span>密码:</span>
                        <input type="password" name="user_pswd" id="user_pswd" />
                    </div>
                    <div id="login_submit">登录</div>
                </div>
                <div>
                    <p>>学生可以使用学号登录,初始密码为身份证后六位</p>
                    <p>>企业可以使用您的注册邮箱进行登录</p>
                    <p>>如果忘记密码请联系天津现代职业技术学院就业指导中心</p>
                </div>
    </div>
    <div class="header" id="header">
        <div class="header_top">
            <?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
                <ul class="header_login">

                    <?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']=="0"){?>
                        <li>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['piclink'];?>
"/>
                        </li>
                        <li>
                            <a style="text-decoration: none">
                                <?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['name'];?>

                            </a>
                        </li>
                        <li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo">个人中心</a> 
                        </li>
                        <?php }else{ ?>
                            <li style="margin-right: 10px;">
                                <a style="text-decoration: none">
                                    <?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['name'];?>

                                </a>
                            </li>
                            <li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心 </a>
                            </li>


                                <?php }?>
                                    <li><a id="login_out" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/logout">注销</a>
                                    </li>
                </ul>


                <?php }else{ ?>
                    <ul class="header_unlogin">
                        <li><a href="javascript:void(0)">用户登录</a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/account/register">企业注册</a>
                        </li>
                    </ul>
                    <?php }?>
                        </li>
                        </ul>

                    <?php if (!$_smarty_tpl->tpl_vars['isIndex']->value){?>
                    <ul class="menu">
                        <li><a href="#">学生</a>
                            <ul class="submenu">
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
                        </li>
                        <li class="active"><a href="#s2">企业</a>
                            <ul class="submenu">
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
                        </li>
                        <li><a href="#">校友</a>
                            <ul class="submenu">
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
                        </li>
                    </ul>
                    <?php }?>
                        <form id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/searchlist" method="post">
                        <div class="search">
                            <input type="text" id="key" name="key" placeholder="请输入关键字"/>
                            <a href="javascript:void(0)" id="search_submit">搜索</a>
                        </div>
                         </form>
        </div>
        <div class="banner"></div>
    </div><?php }} ?>