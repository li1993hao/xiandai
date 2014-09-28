<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 16:25:26
         compiled from "app/tpl/student/favorjobinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:250716405542549bae2d125-06905061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31a7bfab2791f42b9c23430b6daff7950b2873d' => 
    array (
      0 => 'app/tpl/student/favorjobinfo.htm',
      1 => 1411892667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250716405542549bae2d125-06905061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542549bae9ccc6_13193025',
  'variables' => 
  array (
    'web_url' => 0,
    'type' => 0,
    'joblist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542549bae9ccc6_13193025')) {function content_542549bae9ccc6_13193025($_smarty_tpl) {?><?php if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.page.php';
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


        #myinfo_left{
            width:760px;
            height:auto;
            float:right;
            display:inline;
            margin-top:20px;
        }

        #myinfo_title{
            text-align:left;
            width:723px;
            /*background-color:blue;*/
            line-height:30px;
            color:#7bac87;
            font-size:22px;
            font-weight:500;
            display:block;
        }

        /*#middle-other{width:405px;height:40px;float:left;font-size:0.9em;margin-top:10px;}*/
        #middle-other{width:760px;height:40px;float:left;font-size:0.9em;margin-top:10px;margin-bottom:10px;background: #f0c279;}
        .other-option-item{
            display: block;
            height: 20px;
            width:160px;
            font-size: 15px;
            color: rgb(68, 105, 118);
            text-decoration: none;
            float: left;
            padding:10px 20px;
            text-align:center;
            margin-left:2.5px;
        }
        /*.menu-list-item-other{background:#A9D2EA;}
        .menu-list-item-other-selected{background:#7BAC87;}*/
        .menu-list-item-other-selected{background:url(../../common/app/images/companyinfo_xuanxiang_coin2.png) 0 0 no-repeat #788ac6; background-position:bottom center;height: 25px;margin-top: -5px;color:#f0c279 ;
        }
        .other-menu-list{float:left;}
        .other-option-content{float:left;}
        #mytable{width:760px; margin-top:10px;}
        #info th {
            border-right: 1px solid #D9D9D9;
            border-bottom: 1px solid #D9D9D9;
            border-top: 1px solid #D9D9D9;
            letter-spacing: 2px;
            text-align: center;
            padding: 6px 6px 6px 12px;
            background: #e2e2e2;
            color:#fff;
        }
        #info td {
            border-right: 1px solid #D9D9D9;
            border-bottom: 1px solid #D9D9D9;
            background: #fff;
            font-size:12px;
            padding: 6px 6px 6px 12px;

        }
        #info th.spec {
            border-left: 1px solid #D9D9D9;
            border-top: 0;
            background: #fff;
        }
        #select{
            width:600px;
            height:20px;
        }
        .select-option{
            float:left;
            width:100px;
            color:#446976;
            font-size:15px;
        }
        #down{
            height:30px;
            width:600px;
            font-size:14px;
            color:#707070;
        }
        .op-del{text-align:center; margin-left:5px;float:left; background:#A9D2EA;}
    </style>


</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="middle_big">
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
                <li style="background-color: #33495e"><a href="#" style="color: #ffffff">学生基本信息</a></li>
                <li><a href="#">我得招聘</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/changepw">修改密码</a></li>
                <li><a href="#">满意度调查</a></li>
            </ul>
        </div>
        <div id="middle_right">
            <div id="middle">
                <?php $_smarty_tpl->tpl_vars['pageid'] = new Smarty_variable(2, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ('student/student_menu.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div id="middle-other">
                    <div class="other-option-content">
                        <a class="other-option-item menu-list-item-other" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobfair">收藏的招聘会</a>
                    </div>
                    <div class="other-option-content">
                        <a class="other-option-item menu-list-item-other-selected" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo">收藏的招聘信息</a>
                    </div>
                </div>


                <div id="myinfo_left">
                    <div id="select">
                        <form id="type-filter" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo">
                            <div class="select-option">
                                <input class="change-type" type="radio" name="select" value="0" <?php if ($_smarty_tpl->tpl_vars['type']->value==0){?> checked <?php }?>/>所有招聘
                            </div>
                            <div class="select-option">
                                <input class="change-type" type="radio" name="select" value="1" <?php if ($_smarty_tpl->tpl_vars['type']->value==1){?> checked <?php }?>/>企业招聘
                            </div>
                            <div class="select-option">
                                <input class="change-type" type="radio" name="select" value="2" <?php if ($_smarty_tpl->tpl_vars['type']->value==2){?> checked <?php }?>/>实习招聘
                            </div>
                            <div class="select-option">
                                <input class="change-type" type="radio" name="select" value="3" <?php if ($_smarty_tpl->tpl_vars['type']->value==3){?> checked <?php }?>/>基层招聘
                            </div>

                        </form>
                    </div>

                    <div id="info">

                        <?php if (isset($_smarty_tpl->tpl_vars['joblist']->value['list'])){?>
                        <table id="mytable" cellspacing="0" >
                            <tr>
                                <th scope="col" width="" style="border-left:1px solid #D9D9D9;" ></th>
                                <th scope="col" width="" >招聘信息</th>
                                <th scope="col" width="" >发布单位</th>
                                <th scope="col" width="" >收藏时间</th>
                                <th scope="col" width="" >操作</th>
                            </tr>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['jl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['name'] = 'jl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['joblist']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jl']['total']);
?>
                            <tr>
                                <td style="border-left:1px solid #D9D9D9;" >
                                    <input name="chk" type="checkbox" class="checked" data="<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['coll_info_id'];?>
">
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['rit_id']==1){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_name'];?>
</a>
                                    <?php }elseif($_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['rit_id']==2){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/interndetail/id/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_name'];?>
</a>
                                    <?php }else{ ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/basedetail/id/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_name'];?>
</a>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_publish']==0||$_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_publish']==''){?>
                                    就业中心
                                    <?php }else{ ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_publish'];?>
"><?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['publishname']['com_name'];?>
</a>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['coll_time'];?>

                                </td>
                                <td>
                                    <a class="op-del" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo/do/del/infoid/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_id'];?>
" >删除</a>&nbsp;
                                    <?php if ($_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['coll_open_myinfo']==1){?>
                                    信息对企业不可见[<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo/do/open/infoid/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_id'];?>
" >开放</a>]&nbsp;
                                    <?php }else{ ?>
                                    信息对企业可见[<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo/do/close/infoid/<?php echo $_smarty_tpl->tpl_vars['joblist']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['jl']['index']]['cim_id'];?>
" >关闭</a>]&nbsp;
                                    <?php }?>
                                </td>
                            </tr>
                            <?php endfor; else: ?>
                            <tr >
                                <th class="spec" colspan="6" ><span style="color:#222;">暂无记录</span></th>
                            </tr>
                            <?php endif; ?>
                        </table>
                        <br/>
                        <div id="down">
                            <a class="op-del" id="all-choose" href="javascript:void(0);">全选</a>
                            &nbsp;
                            <a class="op-del" id="delete-some" href="javascript:void(0);">批量删除</a>
                            &nbsp;
                            <span id="warn-info" style="color:red;"></span>
                        </div>
                        <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 0 : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['joblist']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/student/favorjobinfo/type/".$_tmp1),$_smarty_tpl);?>

                        <?php }?>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
    <script type="text/javascript">
        $(function(){


            $(".op-del").click(function(){
                return confirm("确认删除此条记录？");
            });


            $("#all-choose").toggle(
                    function () {
                        $(".checked").attr("checked",true);
                    },
                    function () {
                        $(".checked").attr("checked",false);
                    }
            );



            $("#delete-some").click(function(){
                //alert("bb");
                if(!confirm("确认要删除所选信息？")){
                    return false;
                }
                $("#warn-info").html("正在删除...");
                $('input[type="checkbox"][name="chk"]:checked').each(
                        function() {
                            var infoid  = $(this).attr("data");
                            //alert(infoid);
                            $.ajax({
                                url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/delcollect/infoid/"+infoid,
                                type:"post",
                                async:false,
                                success:function(msg){
                                    // alert(msg);
                                }
                            });

                        }
                );

                window.location.href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo/type/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 0 : $tmp);?>
";
            });

            $(".change-type").click(function(){
                $("#type-filter").submit();
            });
        });

    </script>
</body>
</html><?php }} ?>