<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 11:44:32
         compiled from "app/tpl/common/userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1788475823543b4aa08bf339-70052911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0466fd7db1bd941b473de0172374219dfac495ab' => 
    array (
      0 => 'app/tpl/common/userinfo.html',
      1 => 1413103106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788475823543b4aa08bf339-70052911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'userinfo' => 0,
    'corplist' => 0,
    'jobfairlist' => 0,
    'jobFair' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543b4aa0ad4ae0_70940183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543b4aa0ad4ae0_70940183')) {function content_543b4aa0ad4ae0_70940183($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
    <title>用户信息</title>
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
        <dt><a href="#">用户信息</a>
        </dt>
    </dl>
</div>
<div id="middle">
<div class="middle_main">

    <style type="text/css">
        /*学生*/
        <!--
        #middle{
            width:100%;
            min-height:860px;
            height:auto;
        }

        #middle_left{
            width: 640px;
            float: left;
        }
        .middle_right{
            float: left;
        }
        /*标题那一排*/
        #myinfo_title{ margin-top:10px;	text-align:left;width:500px;display:block;border-bottom:solid 2px #929292; height:34px }
        .myinfo-title-left{width:500px;float:left;display:block;height:34px;}
        .myinfo-span-username{display:block;height:34px;float:left;line-height:30px;color:#A56B8A;font-size:22px;font-weight:500;border-bottom:2px solid #A56B8A;}
        .myinfo-span-state{color:red;font-size:13px;}
        .myinfo-company-state{color:#7BAC87;font-weight:500;font-size:22px;}


        /*标题那一排end*/

        #content-left{ margin-top:20px; margin-right:10px; width:200px; float:left;}
        #content-middle{margin-top:20px;margin-right:10px; width:200px; float:left;}
        #content-right{margin-top:20px;	width:200px; max-height:200px; float:left;}
        #content-right img{height:120px;width:100px;}
        #content-down{width:500px;float:left;}
        .content-info{margin:10px 0 0 0;font-size:15px;line-height:20px;color:#707070;}


        -->
    </style>
    <div id="middle_left">
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['type']=="0"){?>
    <!-- 学生 -->
    <div id="myinfo_title">
        <div class="myinfo-title-left">
            <span class="myinfo-span-username"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['userinfo']->value['name'],20);?>
</span>
        </div>
    </div>
    <div id="content-left">
        <div class="content-info">
            性别：<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['gender']==0){?>
            男
            <?php }else{ ?>
            女
            <?php }?>
        </div>
        <div class="content-info">
            学历：<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['education']==0){?>
            本科
            <?php }elseif($_smarty_tpl->tpl_vars['userinfo']->value['education']==1){?>
            硕士
            <?php }else{ ?>
            博士
            <?php }?>
        </div>
        <div class="content-info">
            年级：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['grade'];?>

        </div>
        <div class="content-info">
            生源地：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['source'];?>

        </div>
        <div class="content-info">
            政治面貌：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['politic'];?>

        </div>
    </div>

    <div id="content-middle">
        <div class="content-info">
            出生年月：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['userinfo']->value['birth'],10,'');?>

        </div>
        <div class="content-info">
            学院：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['college'];?>

        </div>
        <div class="content-info">
            专业：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['pro'];?>

        </div>
        <div class="content-info">
            籍贯：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['home'];?>

        </div>
        <div class="content-info">
            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['filelink']!=''){?>
            简历：<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['filelink'];?>
"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['filename'];?>
</a>
            <?php }else{ ?>
            简历：还未上传！
            <?php }?>
        </div>
    </div>

    <div id="content-right">
        <img style="" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['piclink'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" />

    </div>

    <div id="content-down">
        <div class="content-info" >
            感兴趣的领域：
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['indl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['name'] = 'indl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userinfo']->value['stuindustry']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['indl']['total']);
?>
            <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['stuindustry'][$_smarty_tpl->getVariable('smarty')->value['section']['indl']['index']]['indType'];?>
&nbsp;
            <?php endfor; endif; ?>
        </div>
        <div class="content-info">
            个人简介：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['intro'];?>

        </div>
    </div>


    <?php }elseif($_smarty_tpl->tpl_vars['userinfo']->value['type']=="1"){?>
    <!-- 企业 start-->
    <style type="text/css">
        <!--
        /*资质认证 */
        .content-qualification{
            width:600px;
            height:auto;
        }
        .content-qualification-title{	width:150px;color:#A56B8A;font-size:18px;margin-top:20px;	}
        .content-qualification-item{float:left;	max-width:170px;height:100px;margin:10px 10px 0 0;}
        /*资质认证 end */
        .content-background1{background:#72B1D6;}
        .content-background2{background: #7BAC87;}
        .content-background3{background:#A56B8A;}
        .content-down-company{width:600px;height:40px;margin-top:20px;}
        .content-down-company-title{margin-left:2px;width:130px;height:30px;float:left;font-size:18px;line-height:30px;cursor:pointer;text-align:center;padding:5px 10px;color:white;}
        .content-down-company-title:hover{color:white;}
        .cdct-selected1{background:url(../../common/app/images/companyinfo_xuanxiang_coin.png) 0 0 no-repeat #72B1D6; background-position:bottom center;}
        .cdct-selected2{background:url(../../common/app/images/companyinfo_xuanxiang_coin.png) 0 0 no-repeat #7BAC87; background-position:bottom center;}
        .cdct-selected3{background:url(../../common/app/images/companyinfo_xuanxiang_coin.png) 0 0 no-repeat #A56B8A; background-position:bottom center;}

        /*文章列表*/
        .jobinfo-container{min-height:400px;background:#fff;float:left;	padding: 15px;	width:564px;}
        .notice-hide{display:none;}

        .jobinfo-textitem{height: auto;width: 564px;display: block;padding-bottom: 5px;border-bottom: 1px dashed #b6b6b6;color:#58587A;}
        .phone-jobinfo-texitem-a{height: 30px;width:564px;margin-top: 12px; }
        #jobinfo-container2 a{color:#C69AB1;}
        #jobinfo-container3 a{color:#C69AB1;}
        .jobinfo-texitem-time{float:left;height:20px;}
        .jobinfo-textitem-p{clear:both;}
        .jobinfo-textitem-read{width:564px;height:20px;}
        .work_read_left{float:left;height:20px;width:300px;margin-left:30px;}
        .work_read_right{float: right;height:20px;color:#C69AB1;}
        .jobinfo-container-more{height:30px;margin-top:12px;}
        .jobinfo-container-more p{float:right; font-size:1em;}

        .content-down-company-content{	width:600px;height:auto;}

        .company-introduce{	width:564px;	height:auto;}
        .company-introduce p{	font-size:12px;}

        -->
    </style>
    <script type="text/javascript">
        $(function(){
            $(".content-down-company-title").click(function(){
                var data=$(this).attr("data");
                $(".content-down-company-title").removeClass("cdct-selected");
                $(".content-down-company-title").each(function(i){
                    $(this).removeClass("cdct-selected"+$(this).attr("data"));
                });
                $(this).addClass("cdct-selected"+data);
                $(".jobinfo-container").removeClass("notice-show");
                $(".jobinfo-container").addClass("notice-hide");
                var rel = $(this).attr("rel");
                //alert(id);
                var data = $(this).attr("data");
                $("#jobinfo-container"+data).removeClass("notice-hide");
                $("#jobinfo-container"+data).addClass("notice-show");

            });
        });
    </script>

    <div id="myinfo_title">
        <div class="myinfo-title-left">
            <span class="myinfo-span-username"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['userinfo']->value['name'],20);?>
</span>
           			<span class="myinfo-span-state">
           			<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['state']==0){?>
    					<span class="myinfo-company-state">(未审核)</span>
    				<?php }elseif($_smarty_tpl->tpl_vars['userinfo']->value['state']==1){?>
    					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['isable']==0){?>
    						<span class="myinfo-company-state">(账户已冻结)</span>
    					<?php }else{ ?>
    						<span class="myinfo-company-state">(审核通过)</span>
    					<?php }?>
    				<?php }else{ ?>
    					<span class="myinfo-company-state">(审核不通过)</span>
    				<?php }?>
           			</span>


        </div>
    </div>

    <div id="content-left">
        <div class="content-info">
            信用等级：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['degree'];?>

        </div>
        <div class="content-info">
            单位性质：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['corptype'];?>

        </div>
        <div class="content-info">
            联系人：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['contacter'];?>

        </div>
        <div class="content-info">
            手机：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['mobile'];?>

        </div>
        <div class="content-info">
            邮政编码：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['post'];?>

        </div>
        <div class="content-info">
            网址：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['website'];?>

        </div>
    </div>

    <div id="content-middle">
        <div class="content-info">
            所属行业：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['industry'];?>

        </div>
        <div class="content-info">
            注册资本：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['capital'];?>

        </div>
        <div class="content-info">
            固定电话：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['phone'];?>

        </div>
        <div class="content-info">
            传真：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['fax'];?>

        </div>
        <div class="content-info">
            邮箱：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['comEmail'];?>

        </div>
        <div class="content-info">
            所在地：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['location'];?>

        </div>
    </div>

    <div id="content-right">
        <img  src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userinfo']->value['picUrl'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" />
    </div>

    <div id="content-down">

        <div class="content-down-company">
            <div id="content-down-companyintro-title " class="content-down-company-title content-background1 cdct-selected1" data="1" rel="first">公司简介</div>
            <div id="content-down-jobfair-title" class="content-down-company-title content-background2"  data="2" rel="second">近期招聘信息</div>
            <div id="content-down-jobinfo-title" class="content-down-company-title content-background3"  data="3" rel="third">近期招聘会</div>
            <div class="content-down-company-content">
            </div>
        </div>

        <div class="company-introduce jobinfo-container notice-show" id="jobinfo-container1" >
            <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['intro'];?>

        </div>
        <!-- 近期招聘信息 start-->
        <div id="jobinfo-container2" class="jobinfo-container notice-hide">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['name'] = 'corpinfo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['corplist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['corpinfo']['total']);
?>
            <div class="jobinfo-textitem">
                <h3>
                    <div class="phone-jobinfo-texitem-a">
                        <?php if ($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_isup']!=''){?>
                        <a target="_blank" class="a-up-news" title="<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">
                            [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'],35,'…',true);?>

                        </a>
                        <?php }else{ ?>
                        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'],35,'…',true);?>

                        </a>
                        <?php }?>
                    </div>

                </h3>
                <div class="jobinfo-textitem-read">
                    <div class="jobinfo-texitem-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_date'],"%Y-%m-%d");?>
</div>
                    <div class="work_read_left">阅读：<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_read'];?>
&nbsp;&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_share'];?>
</div>
                    <div class="work_read_right"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">查看详情>></a></div>
                </div>
            </div>
            <?php endfor; endif; ?>
            <?php if ($_smarty_tpl->tpl_vars['jobfairlist']->value!=null){?><div class="jobinfo-container-more"><p><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">更多>></a></p></div><?php }?>
        </div>
        <!-- 近期招聘信息 end-->

        <!-- 近期招聘会信息 start-->
        <div id="jobinfo-container3" class="jobinfo-container notice-hide">
            <div class="jobinfo-container-list">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['name'] = 'jfm';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobfairlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jfm']['total']);
?>
                <div class="jobinfo-textitem">
                    <h3>
                        <div class="phone-jobinfo-texitem-a">
                            <?php if ($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_isup']!=''){?>
                            <a target="_blank" class="a-up-news" title="<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">
                                [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'],35,'…',true);?>

                            </a>
                            <?php }else{ ?>
                            <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'],35,'…',true);?>

                            </a>
                            <?php }?>
                        </div>

                    </h3>
                    <div class="jobinfo-textitem-read">
                        <span class="jobinfo-texitem-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_date'],"%Y-%m-%d");?>
</span>
                        <div class="work_read_left">阅读：<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_read'];?>
&nbsp;&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_share'];?>
</div>
                        <div class="work_read_right"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">查看详情>></a></div>
                    </div>
                </div>
                <?php endfor; endif; ?>
                <?php if ($_smarty_tpl->tpl_vars['jobfairlist']->value!=null){?><div class="jobinfo-container-more"><p><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg">更多>></a></p></div><?php }?>
            </div>
        </div>
        <!-- #content-down end-->



        <!-- 企业end -->


    </div>

    <?php }?>
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
                    <div>
                        <?php echo smarty_function_getdate(array('format'=>"cnWeek",'date'=>$_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime']),$_smarty_tpl);?>

                    </div>
                    <div>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%Y.%m.%d");?>

                    </div>
                </div>
                <div>
                    <div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/calendardetail/id/<?php echo $_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_id'];?>
">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_name'],15,'…',true);?>

                        </a>
                    </div>
                    <div>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%Y.%m.%d  %H:%M");?>

                    </div>
                    <div>
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_addr'],15,'…',true);?>

                    </div>
                </div>
            </div>
            <?php endfor; endif; ?>
        </div>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script>
    $(".middle").css("height",$(".middle_left").css("height"));
</script>
</body>

</html><?php }} ?>