<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 10:11:29
         compiled from "app\tpl\corpinternmsg\detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:996754407ad196a034-44834505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e9da16cb5ce03ed3c4785f6c495879a6655bc8' => 
    array (
      0 => 'app\\tpl\\corpinternmsg\\detail.htm',
      1 => 1413103351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '996754407ad196a034-44834505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'corpInfo' => 0,
    'detail' => 0,
    '__userinfo__' => 0,
    'collectFlag' => 0,
    'officelist' => 0,
    'preNews' => 0,
    'nextNews' => 0,
    'jobFair' => 0,
    'share_content' => 0,
    'addShareUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54407ad1cba4a8_47292571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54407ad1cba4a8_47292571')) {function content_54407ad1cba4a8_47292571($_smarty_tpl) {?><?php if (!is_callable('smarty_function_getdate')) include 'E:\\wamp\\www\\xd\\xiandai\\been/View/plugins\\function.getdate.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\xd\\xiandai\\been/Smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'E:\\wamp\\www\\xd\\xiandai\\been/Smarty/plugins\\modifier.truncate.php';
?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?php echo $_smarty_tpl->getSubTemplate ('commcss.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/content.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/rec.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css"/>
    <title><?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>
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
    <style>
        .middle_left > div:nth-child(3) span {
            margin-left: 10px;
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
        <dt>
            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/index/type/<?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_name'];?>
/</a>
        </dt>
        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>
</a></dt>
    </dl>
</div>
<div class="middle">

    <div class="middle_left">
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>
</p>
            <?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
            <?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']==0){?>
            <span id="do-collect-btn" class="collect-btn" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value!="1"){?>style="display:none;"<?php }?> >收藏</span>
            <span id="cancel-collect-btn" class="collect-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value=="1"){?>style="display:none;"<?php }?> >取消收藏</span>
            <?php }?>
            <?php }?>
        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_date'];?>
&nbsp;
            浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_read'];?>
&nbsp;
            分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_share'];?>
&nbsp;
            <?php echo $_smarty_tpl->getSubTemplate ('share.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        </div>
        <div>
            <div>
                <span style="margin-right: 10px;">公司:<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_addr'];?>
</span>
                <span>联系人:<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_contact'];?>
</span>
            </div>
            <div>
                <span style="margin-right: 50px;">联系电话:<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_tel'];?>
</span>
                <span>邮箱:<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_email'];?>
</span>
            </div>
        </div>
        <div class="content">
            <?php if ($_smarty_tpl->tpl_vars['officelist']->value){?>
            <div class="m-l-office">
                <div class="m-l-office-header">
                    >>职位
                </div>
                <div class="m-l-office-main">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ol'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['name'] = 'ol';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['officelist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ol']['total']);
?>
                    <div class="office-name">
                        <strong><?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ol']['index']]['office_name'];?>
</strong>
                    </div>
                    <div class="office-intro">
                        <?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ol']['index']]['office_intro'];?>

                    </div>
                    <?php endfor; endif; ?>
                </div>

            </div>
            <?php }?>
            <div class="m-l-office">
                <div class="m-l-office-header">
                    >>说明
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
            <div id="middle_img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
"/>
            </div>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_content'];?>

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
        <div class="zandiv" id="zandiv">
            <img class="zan" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png"/>

            <div class="zannum"><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_good'];?>
</div>
        </div>
        <div id="middle_leftprenext">
            <p>
                上一条：
                <?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['cim_name'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>

            <p>
                下一条：
                <?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['cim_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['cim_name'];?>
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
">
                        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_name'],15,'…',true);?>
</a>
                    </div>
                    <div> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_opentime'],"%Y.%m.%d %H:%M");?>
</div>
                    <div> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobFair']->value[$_smarty_tpl->getVariable('smarty')->value['section']['calendar']['index']]['jm_addr'],15,'…',true);?>
</div>
                </div>
            </div>
            <?php endfor; endif; ?>
        </div>
    </div>
</div>

<!-- 收藏确认 -->
<div class="collect-confirm">
    <div class="collect-confirm-header">
        <div class="collect-confirm-header-left">
            确认收藏信息？
        </div>
        <div class="collect-confirm-header-right">
            <a id="close-collect-confirm" href="#">关闭</a>
        </div>
    </div>
    <div class="collect-confirm-main">
        <div class="collect-confirm-main-item">
            <span class="collect-confirm-main-title">确认收藏：</span>
            <span class="collect-confirm-main-info"><?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_name'];?>
</span>
        </div>
        <div class="collect-confirm-main-item">
            <span class="collect-confirm-main-title">&nbsp;</span>
            <span class="collect-confirm-main-info">
                <input id="openmyinfo" name="openmyinfo" type="checkbox" checked value=1>公开我的信息给企业？
            </span>
        </div>
        <div class="collect-confirm-main-item">
            <span class="collect-confirm-main-title">&nbsp;</span>
            <span class="collect-confirm-main-info">
                <span id="do-collect" class="confirm-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_id'];?>
">确认</span>
                <span id="cancel-collect" class="confirm-btn">取消</span>
            </span>
        </div>
        <div class="collect-confirm-main-item">
            <span class="collect-confirm-main-title">&nbsp;</span>
            <span id="result-collect" class="collect-confirm-main-info"></span>
        </div>

    </div>
</div>

<?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['cci_content']),130,"…"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/corpinternmsg/addshare/type/".((string)$_smarty_tpl->tpl_vars['corpInfo']->value['type_code'])."/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['cim_id']), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1782349"></script>
<script type="text/javascript" id="bdshell_js"></script>


<script type="text/javascript">
    var bds_config = {
        'bdDesc': '<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['share_content']->value),130,"...");?>
'
    };
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000);

    $(function () {

        $("#bdshare>a").click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['addShareUrl']->value;?>
"
            });
        });

        //收藏
        $("#do-collect-btn").click(function () {
            $(".collect-confirm").show();
        });

        $("#close-collect-confirm,#cancel-collect").click(function () {
            $(".collect-confirm").hide();
        });

        $("#do-collect").click(function () {
            var id = $(this).attr("data");
            var openmyinfo = '1';
            if (!$("#openmyinfo").attr("checked")) {
                openmyinfo = '0';
            }

            //alert($("#openmyinfo").attr("checked"));
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/collect/type/<?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_code'];?>
/id/" + id + "/openmyinfo/" + openmyinfo,
                success: function (msg) {
                    var obj = eval('(' + msg + ')');
                    if (obj.json.state == 1) {
                        $("#result-collect").html("");
                        $("#do-collect-btn").hide();
                        $("#cancel-collect-btn").show();
                        $("#close-collect-confirm").click();
                    } else {
                        $("#result-collect").html(obj.json.msg);
                    }
                },
                error: function (msg) {
                    $("#result-collect").html("网络连接错误！");
                }
            });

        });
        $("#cancel-collect-btn").click(function () {
            var id = $(this).attr("data");
            var openmyinfo = '1';
            if (!$("#openmyinfo").attr("checked")) {
                openmyinfo = '0';
            }

            //alert($("#openmyinfo").attr("checked"));
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/cancelcollect/type/<?php echo $_smarty_tpl->tpl_vars['corpInfo']->value['type_code'];?>
/id/" + id,
                success: function (msg) {
                    var obj = eval('(' + msg + ')');
                    if (obj.json.state == 1) {
                        $("#cancel-collect-btn").hide();
                        $("#do-collect-btn").show();
                    } else {
                        alert(obj.json.msg);
                    }
                },
                error: function (msg) {
                    alert("网络连接错误！");
                }
            });
        });
        //收藏end


        var flag = false;
        $("#zandiv").click(function () {
            //alert("sss");
            if (!flag) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/addgood/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['cim_id'];?>
",
                    success: function (msg) {
                        //alert("chenggong");
                        flag = true;
                        //alert( msg );
                        if (msg != "0") {
                            //alert("谢谢~");
                            $(".zan").css("background", "#333333");
                            $(".zannum").text(msg);
                        } else {
                            //alert("shibai1");
                        }

                    },
                    error: function (msg) {
                        //alert("shibai");
                        //$("#addresult").html("添加失败！");
                    }
                });
            }

        });


    });


</script>
</body>

</html><?php }} ?>