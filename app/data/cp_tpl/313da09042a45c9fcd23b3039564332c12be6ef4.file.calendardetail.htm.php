<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 16:27:16
         compiled from "app/tpl/jobfairmsg/calendardetail.htm" */ ?>
<?php /*%%SmartyHeaderCode:1460009028542a6964257a12-02997409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '313da09042a45c9fcd23b3039564332c12be6ef4' => 
    array (
      0 => 'app/tpl/jobfairmsg/calendardetail.htm',
      1 => 1412042840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1460009028542a6964257a12-02997409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'detail' => 0,
    '__userinfo__' => 0,
    'collectFlag' => 0,
    'preNews' => 0,
    'nextNews' => 0,
    'frontlist' => 0,
    'share_content' => 0,
    'addShareUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a69643e4b29_67383238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a69643e4b29_67383238')) {function content_542a69643e4b29_67383238($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE HTML>
<html>

<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php echo $_smarty_tpl->getSubTemplate ('commcss.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/content.css" />
     <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/cor_drop.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
    <title>招聘日历-<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_name'];?>
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

        <!--导航栏-->
        <div class="nav">
            <dl>
                <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
                </dt>
                <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/Calendardetail">招聘日历/</a>
                </dt>
                <dt><a href="#"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detail']->value['jm_name'],50,'…',true);?>
</a></dt>
            </dl>
        </div>
        <div class="middle">
            <div class="middle_left">
                <div>
                    <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detail']->value['jm_name'],50,'…',true);?>
</p>
                                <?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
                        <?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']==0){?>
                        <span id="do-collect-btn" class="collect-btn" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value!="1"){?>style="display:none;"<?php }?> >收藏</span>
                        <span id="cancel-collect-btn" class="collect-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['collectFlag']->value=="1"){?>style="display:none;"<?php }?> >取消收藏</span>
                        <?php }?>
                    <?php }?>
                </div>
                <div>
                         <?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_date'];?>
&nbsp;
                        浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_read'];?>
&nbsp;
                        分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_share'];?>
&nbsp;
                        来源：<?php if ($_smarty_tpl->tpl_vars['detail']->value['jm_publish']==0){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['jm_src'])===null||$tmp==='' ? "就业中心" : $tmp);?>
<?php }else{ ?><a target="blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_publish'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detail']->value['com_name'],20,'…',true);?>
</a><?php }?>
                       <?php echo $_smarty_tpl->getSubTemplate ('share.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
                <div>
                    <span>召开时间:<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_opentime'];?>
</span>
                    <span>召开地点:<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_addr'];?>
</span>
                </div>
                <div class="content">
                    <?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
                        <div id="middle_img">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
                        </div>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_content'];?>

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
                <div class="zandiv" id="zandiv" >
                    <img class="zan"   src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/zan.png" />
                    <div class="zannum" ><?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_good'];?>
</div>
                </div>
                 <div id="middle_leftprenext">
                <p>
                    上一条：
                    <?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['jm_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['preNews']->value['jm_name'],50,'…',true);?>
</a>
                    <?php }else{ ?>
                    没有了！
                    <?php }?>
                </p>
                <p>
                    下一条：
                    <?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['jm_id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['nextNews']->value['jm_name'],50,'…',true);?>
</a>
                    <?php }else{ ?>
                    没有了！
                    <?php }?>
                </p>
            </div>
            </div>

            <div class="middle_right">
                <div class="rec">
                    <div>招聘信息</div>
                     <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['frontlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                    <div class="rec_item">
                        <div><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_id'];?>
">  <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_name'],30,'…',true);?>
</a>
                        </div>
                        <div>
                            <?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_content'])),50,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>

                        </div>
                        <div> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cim_date'],"%Y-%m-%d");?>
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
            <a id="close-collect-confirm" href="#" >关闭</a>
        </div>  
    </div>
    <div class="collect-confirm-main">
        <div class="collect-confirm-main-item">
            <span class="collect-confirm-main-title">确认收藏：</span>
            <span class="collect-confirm-main-info"><?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_name'];?>
</span>
        </div>
        <div class="collect-confirm-main-item" >
            <span class="collect-confirm-main-title">&nbsp;</span>
            <span class="collect-confirm-main-info">
                <input id="openmyinfo" name="openmyinfo"  type="checkbox" checked value=1>公开我的信息给企业？
            </span>
        </div>
        <div class="collect-confirm-main-item" >
            <span class="collect-confirm-main-title">&nbsp;</span>
            <span class="collect-confirm-main-info">
                <span id="do-collect" class="confirm-btn" data="<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_id'];?>
">确认</span>
                <span id="cancel-collect" class="confirm-btn">取消</span>
            </span>
        </div>
        <div class="collect-confirm-main-item" >
            <span class="collect-confirm-main-title">&nbsp;</span>
            <span id="result-collect" class="collect-confirm-main-info"></span>
        </div>
    
    </div>
</div>
    <?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['jm_content'])),130,'…',true), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/jobfairmsg/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['jm_id'])."/type/0", null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
             <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1782349" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script>
            $(".middle").css("height", $(".middle_left").css("height"));
            </script>
    <script type="text/javascript">

        var bds_config = {
            'bdDesc':'<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['share_content']->value),130,"...");?>
'
        };
        $(function(){
            $("#bdshare>a").click(function(){
                $.ajax({
                    type: "POST",
                    url: "<?php echo $_smarty_tpl->tpl_vars['addShareUrl']->value;?>
"
                });
            });
        });
        document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);


$(function(){

    //收藏
    $("#do-collect-btn").click(function(){
        $(".collect-confirm").show();
    });
    
    $("#close-collect-confirm,#cancel-collect").click(function(){
        $(".collect-confirm").hide();
    });
    
    $("#do-collect").click(function(){
        var id = $(this).attr("data");
        var openmyinfo = '1';
        if(!$("#openmyinfo").attr("checked")){
            openmyinfo = '0';
        }
        
        //alert($("#openmyinfo").attr("checked"));
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/collect/type/0/id/"+id+"/openmyinfo/"+openmyinfo,
            success: function(msg){
                var obj = eval('(' + msg + ')');
                if (obj.json.state == 1) {
                    $("#result-collect").html("");
                    $("#do-collect-btn").hide();
                    $("#cancel-collect-btn").show();
                    $("#close-collect-confirm").click();
                }else{
                    $("#result-collect").html(obj.json.msg);
                }
            },
            error:function(msg){
                $("#result-collect").html("网络连接错误！");
            }
        });
        
    });
    $("#cancel-collect-btn").click(function(){
        var id = $(this).attr("data");
        var openmyinfo = '1';
        if(!$("#openmyinfo").attr("checked")){
            openmyinfo = '0';
        }
        
        //alert($("#openmyinfo").attr("checked"));
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/cancelcollect/type/0/id/"+id,
            success: function(msg){
                var obj = eval('(' + msg + ')');
                if (obj.json.state == 1) {
                    $("#cancel-collect-btn").hide();
                    $("#do-collect-btn").show();
                }else{
                    alert(obj.json.msg);
                }
            },
            error:function(msg){
                alert("网络连接错误！");
            }
        });
    });
    //收藏end 
    
    
    var flag = false;
    $("#zandiv").click(function(){
        //alert("sss");
        if(!flag){
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/addgood/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['jm_id'];?>
",
                success: function(msg){
                    //alert("chenggong");
                    flag = true;
                    //alert( msg );
                    if(msg != "0"){
                        //alert("谢谢~");
                        $(".zan").css("background","#333333");
                        $(".zannum").text(msg);
                    }else{
                        //alert("shibai1"); 
                    }
                    
                },
                error:function(msg){
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