<?php /* Smarty version Smarty-3.1.14, created on 2014-09-26 19:10:50
         compiled from "app/tpl/student/favorjobinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:250716405542549bae2d125-06905061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31a7bfab2791f42b9c23430b6daff7950b2873d' => 
    array (
      0 => 'app/tpl/student/favorjobinfo.html',
      1 => 1411729621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250716405542549bae2d125-06905061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542549bae9ccc6_13193025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542549bae9ccc6_13193025')) {function content_542549bae9ccc6_13193025($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/student/favorjobinfo.css" />
    <title><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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

<div id="middle">
    <!-- 导航栏-->
    <div class="middle_top">
        <p><a id="toStart" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php"> 首页</a>/个人中心/我的招聘</p>
    </div>
    <!-- 中间左部-->
    <div id="middle_left">
        <div id="title">
            <p>功能菜单</p>
        </div>
        <div id="xuanxiang">
            <p>学生基本信息</p>
            <p id="xuanzhong">我的招聘</p>
            <p>修改密码</p>
            <p>满意度调查</p>
        </div>
        <!-- z中间右部-->
        <div id="middle_right">
            <div id="middle_right_top">
                <div class="middle_right_top_nav">
                    收藏的招聘会
                </div>
                <div class="middle_right_top_nav_checked">
                    收藏的招聘会
                </div>
                <div class="middle_right_top_nav">
                    收藏的招聘会
                </div>
            </div>
            <div id="ishixi">
                <div >
                    <p id="ishixi_checked">全部</p>
                    <p>实习</p>
                    <p>招聘</p>
                </div>
            </div>
            <div >
                <table id="biaoge">
                    <tr>
                        <td class="td1"></td> <td class="td2"><p>招聘信息</p></td> <td class="td2"><p>发布单位</p></td> <td class="td2"><p>收藏时间</p></td> <td class="td2"><p>操作</p></td>
                    </tr>
                    <tr>
                        <td class="td1"><div class="td1_xuanzhong"><input type="checkbox" class="td1_xuanzhong_checkbox"></div></td><td class="td2"><p></p></td><td class="td2"><p></p></td><td class="td2"><p></p></td><td class="td2"><p>
                            <div class="chankanxiangqing">查看详情</div>
                            <div><a href="" class="shanchu"> 删除</a></div>
                        </p></td>
                    </tr>
                    <tr>
                        <td class="td1"></td><td class="td2"><p></p></td><td class="td2"><p></p></td><td class="td2"><p></p></td><td class="td2"><p></p></td>
                    </tr>
                    <tr>
                        <td class="td1"></td><td class="td2"><p></p></td><td class="td2"><p></p></td><td class="td2"><p></p></td><td class="td2"><p></p></td>
                    </tr>
                </table>
                <input type="checkbox" class="td1_xuanzhong_checkbox_quanxuan"> <div id="quanxuan">全选</div> <div id="sahnchu_bottom"><a href=""> 删除</a></div>
            </div>
        </div>
        <!-- 底部分页-->
        <div id="fenye">
            <div id="fenye_left">

            </div>
            <div id="fenye_middle">
                <div class="fenye_middle_tuoyuan">
                    <p>1</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>2</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>3</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>4</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>5</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>6</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>7</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>8</p>
                </div>
                <div class="fenye_middle_tuoyuan">
                    <p>9</p>
                </div>
                <div class="fenye_middle_tuoyuan_nowPage">
                    <p>10</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>11</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>12</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>13</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>14</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>15</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>16</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>17</p>
                </div>
                <div class="fenye_middle_tuoyuan2">
                    <p>18</p>
                </div>
            </div>
            <div id="fenye_right">
            </div>
        </div>
        <div id="help">帮助;</div>
        <div id="help_content">帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助帮助</div>
    </div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>