<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 17:36:46
         compiled from "app/tpl/student/myinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:323704215542549947964e9-18107682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9dfd76013c6aceb6195d8db07fd08e8a1855426' => 
    array (
      0 => 'app/tpl/student/myinfo.html',
      1 => 1411896999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323704215542549947964e9-18107682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542549948094f5_35026734',
  'variables' => 
  array (
    'web_url' => 0,
    'studetail' => 0,
    'stuindustry' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542549948094f5_35026734')) {function content_542549948094f5_35026734($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE HTML>
<html>
<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <title>个人中心-我得信息</title>
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
    <style type="text/css">
        .nav dt {
            float: left;
            margin-top: 5px;
        }
        .nav dt:first-child {
            margin-left: 30px;
        }
        .nav dt a {
            color: white;
        }

        #middle_left, #middle_right{
            float: left;
        }

        #middle_left{
            width: 250px;
            height: 400px;
            background-color: #ecf0f1;
            margin-right: 10px;
        }

        #middle_right{
            width: 721px;
        }

        #middle_main{
            margin-top: 10px;
        }

        #middle_left >div{
            font-size: 16px;
            padding: 6px 10px;
            margin: 0 10px;
            border-bottom: 1px solid #000000;
        }
        #middle_left li:first-child{
            margin-top: 10px;
        }


        #middle_left li a{
            line-height: 25px;
            font-size: 14px;
            padding-left: 40px;
        }

        #middle_right >div:first-child div{
            float: left;
        }

        #middle_right >div:first-child a{
            color: firebrick;
        }


        #middle_right >div:first-child{
            text-align: right;
        }

        #middle_right ,#middle_right  a{
            font-size: 14px;

            line-height: 30px;
        }

        #middle_right >div:nth-child(2) >div{
            float: left;
        }

        #middle_right >div:nth-child(3) >div{
            height: 100px;
            width: 100px;
        }
        #middle_right >div:nth-child(1){
            height: 30px;

        }
        #middle_right >div:nth-child(1) >div{
            font-size: 16px;
            color: #3598db;
        }

        #middle_right >div:nth-child(2){
            height: 160px;
        }
        #middle_right >div:nth-child(2) >div:first-child{
            width: 280px;
        }
        /*头像*/
        #middle_right >div:nth-child(2) >div:nth-child(3) img{
            width: 130px;
            height: 150px;
            margin-left: 100px;
        }

        #middle_right >div:nth-child(3){
            height: 30px;
        }


    </style>


</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="middle">
    <!-- 导航栏-->
    <div class="nav">
        <dl>
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
            </dt>
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo">个人中心/</a>
            </dt>
            <dt><a href="#">基本信息</a>
            </dt>

        </dl>
    </div>

    <div id="middle_main">
        <div id="middle_left">
            <div >功能菜单</div>
            <ul>
                <li style="background-color: #33495e"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo}>" style="color: #ffffff">学生基本信息</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo">我的招聘</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/changepw">修改密码</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index#feedback">满意度调查</a></li>
            </ul>
        </div>
        <div id="middle_right">
            <div>
                <div><?php echo $_smarty_tpl->tpl_vars['studetail']->value['name'];?>
</div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/modifyinfo">修改</a>
            </div>
            <div>
                <div>
                    <ul>
                        <li>性别：<?php if ($_smarty_tpl->tpl_vars['studetail']->value['gender']==0){?>
                            男
                            <?php }else{ ?>
                            女
                            <?php }?>	</li>
                        <li>学历：<?php if ($_smarty_tpl->tpl_vars['studetail']->value['education']==0){?>
                            本科
                            <?php }elseif($_smarty_tpl->tpl_vars['studetail']->value['education']==1){?>
                            硕士
                            <?php }else{ ?>
                            博士
                            <?php }?>	</li>
                        <li>年纪：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['grade'];?>
</li>
                        <li>生源地：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['source'];?>
</li>
                        <li>政治面貌：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['politic'];?>
</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>出生年月：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['studetail']->value['birth'],10,'');?>
</li>
                        <li>学院：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['college'];?>
</li>
                        <li>专业：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['pro'];?>
</li>
                        <li>籍贯：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['home'];?>
</li>
                        <li><?php if ($_smarty_tpl->tpl_vars['studetail']->value['filelink']!=''){?>
                            简历：<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['studetail']->value['filelink'];?>
"><?php echo $_smarty_tpl->tpl_vars['studetail']->value['filename'];?>
</a>
                            <?php }else{ ?>
                            简历：还未上传！
                            <?php }?></li>
                    </ul>
                </div>
                <div>	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['studetail']->value['piclink'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" /></div>

            </div>
            <div>感兴趣的领域：<?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stuindustry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['si']->value['ind_type'];?>
&nbsp;
                <?php } ?></div>
            <div>
                <p style="word-wrap:break-word ">个人简介:<br/><?php echo $_smarty_tpl->tpl_vars['studetail']->value['intro'];?>
</p>
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