<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 14:41:47
         compiled from "app/tpl/jobinfo/detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:984475622542a50ab0625a9-66670066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0fde38724693f414aae6cea56a68597d5407780' => 
    array (
      0 => 'app/tpl/jobinfo/detail.htm',
      1 => 1412042840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '984475622542a50ab0625a9-66670066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'typeinfo' => 0,
    'detail' => 0,
    'preNews' => 0,
    'nextNews' => 0,
    'frontlist' => 0,
    'share_content' => 0,
    'addShareUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a50ab1be7c8_24237727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a50ab1be7c8_24237727')) {function content_542a50ab1be7c8_24237727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
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
    <title><?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_title'];?>
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
/index.php/jobinfo/index/type/<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['type_name'];?>
/</a>
        </dt>
        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_title'];?>
</a></dt>
    </dl>
</div>

<div class="middle">
    <div class="middle_left">
        <div>
            <p><?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_title'];?>
</p>
        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_date'];?>
&nbsp;
            浏览：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_read'];?>
&nbsp;
            分享：<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_share'];?>
&nbsp;
            <?php echo $_smarty_tpl->getSubTemplate ('share.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div></div>
        <div class="content">
            <?php if ($_smarty_tpl->tpl_vars['detail']->value['pic_id']!=''){?>
            <div id="middle_img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['pic_link'];?>
" />
            </div>
            <?php }?>
            <div style="clear: both"></div>
            <?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_content'];?>

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
            <div class="zannum" ><?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_good'];?>
</div>
        </div>
        <div id="middle_leftprenext">
            <p>
                上一条：
                <?php if ($_smarty_tpl->tpl_vars['preNews']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['preNews']->value['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preNews']->value['ji_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
            <p>
                下一条：
                <?php if ($_smarty_tpl->tpl_vars['nextNews']->value!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/detail/id/<?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ji_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nextNews']->value['ji_title'];?>
</a>
                <?php }else{ ?>
                没有了！
                <?php }?>
            </p>
        </div>
    </div>

    <div class="middle_right">
        <div class="rec">
            <div>热点排行</div>
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
/index.php/jobinfo/detail/type/<?php echo $_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['it_id'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_id'];?>
">  <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_title'],22,'…',true);?>
</a>
                </div>
                <div>
                    <?php echo (($tmp = @smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_content'])),50,'…',true))===null||$tmp==='' ? "暂无介绍~" : $tmp);?>

                </div>
                <div> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['frontlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ji_date'],"%Y-%m-%d");?>
</div>
            </div>
            <?php endfor; endif; ?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->tpl_vars['share_content'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['detail']->value['ji_content']),130,"…"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['addShareUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['web_url']->value)."/index.php/jobinfo/addshare/id/".((string)$_smarty_tpl->tpl_vars['detail']->value['ji_id']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1782349" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">

    $(function(){
        var flag = false;
        $("#zandiv").click(function(){
            //alert("sss");
            if(!flag){
                $.ajax({
                    type: "POST",
                    url: "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/addgood/id/<?php echo $_smarty_tpl->tpl_vars['detail']->value['ji_id'];?>
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
</script>
</body>
</html><?php }} ?>