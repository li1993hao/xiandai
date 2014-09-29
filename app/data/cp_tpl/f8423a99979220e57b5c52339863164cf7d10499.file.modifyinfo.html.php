<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 19:44:18
         compiled from "app/tpl/student/modifyinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:18785496975427bd82814f38-44005400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8423a99979220e57b5c52339863164cf7d10499' => 
    array (
      0 => 'app/tpl/student/modifyinfo.html',
      1 => 1411896996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18785496975427bd82814f38-44005400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5427bd829ad479_36685801',
  'variables' => 
  array (
    'web_url' => 0,
    'studetail' => 0,
    'prov' => 0,
    'result' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5427bd829ad479_36685801')) {function content_5427bd829ad479_36685801($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE HTML>
<html>
<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.css">
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.css" rel="Stylesheet" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <title>个人中心-修改个人信息</title>
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
            width: 700px;
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
            background-color: #33495e;
            color: #ffffff;
        }





        #middle_left li a{
            line-height: 25px;
            font-size: 14px;
            padding-left: 40px;
        }

        /*标题那一排*/
        #myinfo_title{	text-align:left;width:750px;display:block; height:30px; }
        .myinfo-title-left{width:500px;float:left;display:block;height:30px;}
        .myinfo-span-username{line-height:30px;color:#778ac6;font-size:22px;font-weight:500;}
        .myinfo-title-right{width:80px;float:right;display:block;height:30px;}
        .myinfo-title-right img{height:17px;margin:6px 5px 7px;float:left;display:block;}
        .myinfo-span-edit{color:#778ac6;font-size:16px; height:17px;line-height:30px;height:30px;float:left;display:block;}
        /*标题那一排end*/

        #content-left{ margin-top:20px; margin-right:10px; width:250px; float:left;}
        #content-middle{margin-top:20px;margin-right:10px; width:290px; float:left;}
        #content-right{margin-top:20px;	width:100px; max-height:150px; float:left;}
        #content-right img{max-height:150px;max-width:150px;}
        #content-down{width:750px;float:left;}
        .content-info{margin:10px 0 0 0;font-size:15px;line-height:20px;color:#707070;}
        .content-info select{width: 150px;}
        .content-info input{width: 150px;}
        .upload-btn{display:block;width:50px;height:20px;float:right;}



        .choose-industry{
            font-size:14px;
            cursor:pointer;
            margin-right:10px;
        }
        /*提交*/
        .company-jobfair-item-info{display:inline-block;width:500px;padding:5px 0;}
        .submit{background:#09c6b2;height:30px;color:white;text-align:center;cursor:pointer;float:left;}
        .submit-img{background:#09c6b2; width:40px;padding:6px 2px;float:left;}


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
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo">基本信息/</a>
            </dt>
            <dt><a href="#">修改</a>
            </dt>
        </dl>
    </div>

    <div id="middle_main">
        <div id="middle_left">
            <div >功能菜单</div>
            <ul>
                <li class="menu_active"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo}>" style="color: #ffffff">学生基本信息</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo}>">我的招聘</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/changepw}>">修改密码</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index#feedback">满意度调查</a></li>
            </ul>
        </div>
        <div id="middle_right">
            <div id="myinfo_left">
                <div id="myinfo_title">
                    <div class="myinfo-title-left">
                        <span class="myinfo-span-username"><?php echo $_smarty_tpl->tpl_vars['studetail']->value['name'];?>
</span>
                    </div>
                </div>
                <form id="mod-form" name="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/modifyinfo">
                    <div id="content-left">
                        <div class="content-info">
                            &nbsp;&nbsp;性&nbsp;&nbsp;&nbsp;&nbsp;别&nbsp;&nbsp;：
                            <select name="gender">
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['gender']==0){?> selected <?php }?>>男</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['gender']==1){?> selected <?php }?>>女</option>
                            </select>
                        </div>
                        <div class="content-info">
                            &nbsp;&nbsp;学&nbsp;&nbsp;&nbsp;&nbsp;历&nbsp;&nbsp;：
                            <select name="education">
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['education']==0){?> selected <?php }?>>本科</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['education']==1){?> selected <?php }?>>硕士</option>
                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['education']==2){?> selected <?php }?>>博士</option>

                            </select>
                        </div>
                        <div class="content-info">
                            &nbsp;&nbsp;年&nbsp;&nbsp;&nbsp;&nbsp;级&nbsp;&nbsp;：
                            <select name="grade">
                                <option value="2010" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['grade']==2010){?> selected <?php }?>>2010级</option>
                                <option value="2011" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['grade']==2011){?> selected <?php }?>>2011级</option>
                                <option value="2012" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['grade']==2012){?> selected <?php }?>>2012级</option>

                            </select>
                        </div>
                        <div class="content-info">
                            &nbsp;生&nbsp;源&nbsp;地&nbsp;：
                            <select name="source">
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['prov']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['prov']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['prov_cont'];?>
" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['source']==$_smarty_tpl->tpl_vars['prov']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['prov_cont']){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['prov']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['prov_cont'];?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                        </div>
                        <div class="content-info">
                            政治面貌：
                            <select name="politic">
                                <option value="群众" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['politic']=="群众"){?> selected <?php }?>>群众</option>
                                <option value="共青团员" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['politic']=="共青团员"){?> selected <?php }?>>共青团员</option>
                                <option value="中共党员" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['politic']=="中共党员"){?> selected <?php }?>>中共党员</option>
                            </select>
                        </div>

                    </div>

                    <div id="content-middle">
                        <div class="content-info">
                            出生年月：
                            <input type="text" name="birth"  size="20" class="Wdate" id="date" value="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['studetail']->value['birth'],10,'');?>
"/>

                        </div>
                        <div class="content-info">
                            &nbsp;&nbsp;学&nbsp;&nbsp;&nbsp;&nbsp;院&nbsp;&nbsp;：
                            <select name="college">
                                <option value="计控学院" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['college']=="计控学院"){?> selected <?php }?>>计控学院</option>
                                <option value="电光学院" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['college']=="电光学院"){?> selected <?php }?>>电光学院</option>
                                <option value="软件学院" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['college']=="软件学院"){?> selected <?php }?>>软件学院</option>
                            </select>
                        </div>
                        <div class="content-info">
                            &nbsp;&nbsp;专&nbsp;&nbsp;&nbsp;&nbsp;业&nbsp;&nbsp;：
                            <select name="pro">
                                <option value="计算机应用技术" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['pro']=="计算机"){?> selected <?php }?>>计算机应用技术</option>
                                <option value="计算机软件理论" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['pro']=="计算机软件理论"){?> selected <?php }?>>计算机软件理论</option>
                                <option value="计算机系统结构" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['pro']=="计算机系统结构"){?> selected <?php }?>>计算机系统结构</option>
                            </select>

                        </div>
                        <div class="content-info">
                            &nbsp;&nbsp;籍&nbsp;&nbsp;&nbsp;&nbsp;贯&nbsp;&nbsp;：
                            <select name="home">
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['prov']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['prov']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['prov_cont'];?>
" <?php if ($_smarty_tpl->tpl_vars['studetail']->value['home']==$_smarty_tpl->tpl_vars['prov']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['prov_cont']){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['prov']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['prov_cont'];?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                        </div>
                        <div id="jianli-container" class="content-info" style="height:auto">
                            &nbsp;&nbsp;简&nbsp;&nbsp;&nbsp;&nbsp;历&nbsp;&nbsp;：	<?php if (isset($_smarty_tpl->tpl_vars['studetail']->value['fileid'])){?>
                            <a target="top" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['studetail']->value['filelink'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['studetail']->value['filename'];?>

                            </a>
                            <?php }?>
                        </div>
                        <div class="content-info">
                            <input style="border:1px solid" id="filename" type="hidden" size="30" name="filename" value="<?php if (isset($_smarty_tpl->tpl_vars['studetail']->value['fileid'])){?><?php echo $_smarty_tpl->tpl_vars['studetail']->value['filename'];?>
<?php }?>"/>
                            <input type="hidden" name="jobinfoattrid"  id="jobinfoattrid"  value="<?php if (isset($_smarty_tpl->tpl_vars['studetail']->value['fileid'])){?><?php echo $_smarty_tpl->tpl_vars['studetail']->value['fileid'];?>
<?php }?>" />
                            <input id="attr_upload" name="attr_upload" type="file" multiple >
                            <input type="hidden" name="fileid" id="attrID" value="<?php if (isset($_smarty_tpl->tpl_vars['studetail']->value['fileid'])){?><?php echo $_smarty_tpl->tpl_vars['studetail']->value['fileid'];?>
<?php }?>" />
                            <input type="hidden" name="filestate" id="filestate" value="0" />
                        </div>
                    </div>

                    <div id="content-right">
                        <div id="img">
                            <?php if ($_smarty_tpl->tpl_vars['studetail']->value['piclink']!=''){?>
                            <img  src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['studetail']->value['piclink'];?>
"/>
                            <?php }?>
                        </div>
                        <div class="content-info" >
                            <input id="file_upload" name="file_upload" type="file" multiple >
                            <input type="hidden" name="picid" id="hidFileID" value="<?php echo $_smarty_tpl->tpl_vars['studetail']->value['picid'];?>
" />
                            <input type="hidden" name="picstate" id="picstate" value="<?php if ($_smarty_tpl->tpl_vars['studetail']->value['picid']!=''){?>2<?php }?>" />
                        </div>

                    </div>

                    <div id="content-down">
                        <div class="content-info" id="stu-industry" style="height:auto">
                        </div>
                        <input id="stu_in_ind" name="stu_in_ind" type="hidden" value="" />
                        <div class="content-info">
                            个人简介：<br/>
                            <textarea id="intro" name="intro" rows="12" cols="100" style="width: 750px;border:1px solid"><?php echo $_smarty_tpl->tpl_vars['studetail']->value['intro'];?>
</textarea><br/><br/>
                        </div>
                        <div class="content-info">
                            <div class="company-jobfair-item-info">
                                <input id="submit" class="submit" name="submit" type="submit" value="提交信息"/>
                                <span id="result" style="color:red;font-size:13px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
    <div class="jqmWindow" id="dialog">
        <div><p style="font-size:16px">所有行业(点击添加)</p> <hr/></div>
        <div id="all-industry">

        </div>
        <div><p style="font-size:16px">已选行业(点击取消)</p><hr/></div>
        <div id="chosen-industry" style="float:left;width:500px;">

        </div><br/>
        <div id="chosen-ok" style="cursor:pointer;font-size:16px;float:left">
            确定
        </div>

        <div id="close" style="cursor:pointer;font-size:16px;float:left;margin-left:10px">
            取消
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jqmodal/jqmodal.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#file_upload').uploadify({
                'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
                'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/fileupload/filetype/img',
                'queueSizeLimit': 1 ,
                'multi':false,
                'auto':true,
                'fileTypeDesc':"请选择图片文件",
                'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif;*.bmp',
                'fileSizeLimit': '4096KB',
                'buttonText':"选择图片",
                'width' : 100,
                'height':20,
                'cancelImg' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify-cancel.png',
                'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                    alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                },
                'onUploadStart' : function(file) {
                    $("#picstate").val("1");
                },
                'onCancel' : function(file) {
                    $("#picstate").val("0");
                },
                'onUploadSuccess' : function(file, data, response) {
                    //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
                    var myObject = eval('(' + data + ')');
                    //alert(myObject.result);
                    //alert(myObject.msg);
                    if(myObject.result == '0'){
                        $("#img").html(myObject.msg);
                        $("#picstate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
                    }else{
                        $("#hidFileID").attr("value",myObject.result);
                        $("#img").html("<img style=\" max-width:190px; max-height:150px;\" src='"+myObject.msg+"'/>");
                        $("#picstate").val("2");
                    }
                }
            });
            $('#attr_upload').uploadify({

                'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
                'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/fileupload/filetype/file',
                'queueSizeLimit': 1 ,
                'multi':false,
                'auto':true,
                'buttonClass' : 'upload-btn',
                'buttonText':"选择简历",
                'fileTypeDesc':"请选择文件",
                'fileTypeExts':'*.txt;*.pdf;*.doc;*.docx;*.xls;*.xslx;*.rar;*.zip;*.ppt;*.pptx',
                'fileSizeLimit': '10240KB',
                'cancelImg' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify-cancel.png',
                'onUploadError' : function(file, errorCode, errorMsg, errorString) {
                    alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
                },
                'onUploadStart' : function(file) {
                    $("#filestate").val("1");
                },
                'onCancel' : function(file) {
                    $("#filestate").val("0");
                },
                'onUploadSuccess' : function(file, data, response) {
                    var myObject = eval('(' + data + ')');
                    if(myObject.result == '0'){
                        $("#file").html("上传失败！");
                        $("#filestate").val("0");
                    }else{
                        $("#attrID").attr("value",myObject.result);
                        $("#filename").val(file.name);
                        $("#jianli-container").html("简历：<a href='"+myObject.msg+"'>"+myObject.name+"</a>");
                        $("#filestate").val("2");
                    }

                }
            });
//感兴趣的领域
            var data = init(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);
            $("#stu-industry").html("我感兴趣的领域："+data+"<span id=\"change-industry\"  style=\"cursor:pointer\">【选择】</span>");
            function init(id){
                var str ="";
                $.ajax({
                    type:"post",
                    url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/getindustry/id/"+id,
                    async:false,
                    success:function(msg){
                        var obj = eval('('+ msg +')');
                        if(obj.json.state=="1"){
                            var inds="";
                            $.each(obj.json.data, function(i,item){
                                if(i==0){
                                    inds += item.ind_id;
                                }else{
                                    inds += ","+item.ind_id;
                                }
                                str += "<span  class=\"choose-industry\" data=\""+item.ind_id+"\" ind=\""+ item.ind_type +"\" >"+item.ind_type+"</span>";
                            });
                            if(id != 0 ){
                                $("#stu_in_ind").val(inds);
                            }

                        }
                    }
                });
                return str;
            }

            //点击重新选择
            $("#change-industry").live("click",function(){
                //alert("aaa");
                $('#dialog').fadeIn('fast');
                var industry = init(0);
                $('#all-industry').html(industry);

                $('#chosen-industry').html($("#stu-industry>.choose-industry").clone());

            });

            $("#all-industry > .choose-industry").live("click",function(){
                var id = $(this).attr("data");
                var ind = $(this).attr("ind");
                if($("#chosen-industry > .choose-industry[data='" + id + "']").size() > 0 ){
                    $("#chosen-industry > .choose-industry[data='" + id + "']").remove();
                }else{
                    $("#chosen-industry").append("<span  class=\"choose-industry\" data=\""+id+"\" ind=\""+ind+"\">"+ ind + "</span>");
                }

            });

            $("#chosen-industry > .choose-industry").live("click",function(){
                $(this).remove();
            });


            $("#chosen-ok").live("click",function() {
                var data = $("#chosen-industry").html();
                $("#stu-industry").html("我感兴趣的领域："+ data+ "<span id=\"change-industry\"  style=\"cursor:pointer\">【选择】</span>");
                var inds = "";
                $("#chosen-industry>.choose-industry").each(function(i,e){
                    if(i==0){
                        inds += $(e).attr("data");
                    }else{
                        inds +=  ","+$(e).attr("data");
                    }
                });
                $("#stu_in_ind").val(inds);

                $('#dialog').fadeOut('fast');
            });

            $("#close").live("click",function() {
                $('#dialog').fadeOut('fast');
            });
//end 感兴趣的领域



            $("#date").focus(function() {
                WdatePicker({
                    dateFmt : 'yyyy-MM-dd'
                });
            });
        });

        $("#mod-form").submit(function(){

        });
    </script>
</body>
</html><?php }} ?>