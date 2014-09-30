<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 14:36:55
         compiled from "app/tpl/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:508932121542a4f871042a0-52621829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0f70dfbcc919341cfdf4cc22d53ede3e7fca5a' => 
    array (
      0 => 'app/tpl/header.htm',
      1 => 1412042840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508932121542a4f871042a0-52621829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__userinfo__' => 0,
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a4f87144a61_87391700',
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
                            <li><?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['com_name'];?>
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