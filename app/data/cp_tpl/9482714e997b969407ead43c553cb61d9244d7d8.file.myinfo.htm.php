<?php /* Smarty version Smarty-3.1.14, created on 2014-09-30 15:26:43
         compiled from "app/tpl/company/myinfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:2088809850542a5b334c7a13-27081526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9482714e997b969407ead43c553cb61d9244d7d8' => 
    array (
      0 => 'app/tpl/company/myinfo.htm',
      1 => 1412042840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088809850542a5b334c7a13-27081526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'detail' => 0,
    'corplist' => 0,
    'detailaction' => 0,
    'jobfairlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a5b337215a5_87737902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a5b337215a5_87737902')) {function content_542a5b337215a5_87737902($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
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
/common/app/css/common/myinfo.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
    <title>企业基本信息</title>
    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <![endif]-->
</head>
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
<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心/</a>
        </dt>
        <dt><a href="#">企业基本信息</a></dt>
    </dl>
</div>
   <div class="middle" style="padding: 0">
       <!-- 中间左部-->
       <div id="middle_left" style="padding-top: 0px">
            <div id="title">
                <p>功能菜单</p>
            </div>
           <div class="title" style="margin-top: 8px">
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo'"  style="background-color:#344a5d;color: #ffffff">企业基本信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair'">招聘会预定</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmycorpmsg'">招聘信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/studentinterestme'">学生信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw'">修改密码</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/index#feedback'">满意度调查</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message'">我的消息</p>
           </div>

       </div>
       <!-- 中间右部-->
       <div class="middle_right">
           <div class="myinfo-title-left">
               <span class="myinfo-span-username"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detail']->value['name'],20);?>
</span>
                <span class="myinfo-span-state">
                <?php if ($_smarty_tpl->tpl_vars['detail']->value['state']==0){?>
              <span class="myinfo-company-state">(未审核)</span>
            <?php }elseif($_smarty_tpl->tpl_vars['detail']->value['state']==1){?>
              <?php if ($_smarty_tpl->tpl_vars['detail']->value['isable']==0){?>
                <span class="myinfo-company-state">(账户已冻结)</span>
              <?php }else{ ?>
                <span class="myinfo-company-state">(审核通过)</span>
                到期时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail']->value['outdate'],"%Y-%m-%d");?>

              <?php }?>
            <?php }else{ ?>
              <span class="myinfo-company-state">(审核不通过)</span>
            <?php }?>
                </span>
           </div>
           <div class="myinfo-title-right">
               <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/modifyinfo/">
                   <span class="myinfo-span-edit">编辑</span>
               </a>
           </div>

           <div id="content-left">
               <div class="content-info">
                   <span class = "content-info-title">信用等级：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['degree'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">单位性质：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['corptype'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">联系人：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['contacter'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">手机：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['mobile'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">邮政编码：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['post'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">网址：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['website'];?>

               </div>
           </div>

           <div id="content-middle">
               <div class="content-info">
                   <span class = "content-info-title">所属行业：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['industry'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">注册资本：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['capital'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">固定电话：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['phone'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">传真：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['fax'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">邮箱：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['email'];?>

               </div>
               <div class="content-info">
                   <span class = "content-info-title">所在地：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['location'];?>

               </div>
           </div>
           <div id="content-right">
               <img  style="width:199px;height: 200px" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['picUrl'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" />
           </div>

           <div id="content-down">
               <div class="content-info">
                   <span class = "content-info-title">详细地址：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['address'];?>

               </div>

               <div class="content-qualification">
                   <div class="content-qualification-title content-info"><span class = "content-info-title">资质证明:</span></div>
                   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['name'] = 'lcs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['detail']->value['license']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lcs']['total']);
?>
                   <img  class="content-qualification-item" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['detail']->value['license'][$_smarty_tpl->getVariable('smarty')->value['section']['lcs']['index']]['picUrl'];?>
" />
                   <?php endfor; endif; ?>
               </div>

               <div style="clear:both;"></div>
               <div class="content-down-company">
                   <div id="content-down-companyintro-title " class="content-down-company-title content-background1 cdct-selected1" data="1" rel="first">公司简历</div>
                   <div id="content-down-jobinfo-title" class="content-down-company-title content-background3"  data="3" rel="third">招聘会信息</div>
                   <div id="content-down-jobfair-title" class="content-down-company-title content-background2"  data="2" rel="second">近期招聘信息</div>
                   <div class="content-down-company-content">
                   </div>
               </div>

               <div class="company-introduce jobinfo-container notice-show" id="jobinfo-container1" >
                   <?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>

               </div>
               <!-- 近期招聘信息 -->
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
                               <?php if ($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['rit_id']==1){?>
                               <?php $_smarty_tpl->tpl_vars['detailaction'] = new Smarty_variable("Corpdetail", null, 0);?>
                               <?php }elseif($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['rit_id']==2){?>
                               <?php $_smarty_tpl->tpl_vars['detailaction'] = new Smarty_variable("interndetail", null, 0);?>
                               <?php }else{ ?>
                               <?php $_smarty_tpl->tpl_vars['detailaction'] = new Smarty_variable("basedetail", null, 0);?>
                               <?php }?>
                               <?php if ($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_isup']!=''){?>
                               <a style="padding-left: 15px" target="_blank" class="a-up-news" title="<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/<?php echo $_smarty_tpl->tpl_vars['detailaction']->value;?>
/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">
                                   [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'],35,'…',true);?>

                               </a>
                               <?php }else{ ?>
                               <a style="padding-left: 15px" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/<?php echo $_smarty_tpl->tpl_vars['detailaction']->value;?>
/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">
                                   <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'],35,'…',true);?>

                               </a>
                               <?php }?>
                           </div>

                       </h3>
                       <div class="jobinfo-textitem-read">
                           <div class="jobinfo-texitem-time" style="padding-left: 15px"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_date'],"%Y-%m-%d");?>
</div>
                           <div class="work_read_left">阅读：<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_read'];?>
&nbsp;&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_share'];?>
</div>
                           <div class="work_read_right" style="margin-right: 15px"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">查看详情>></a></div>
                       </div>
                   </div>
                   <?php endfor; endif; ?>
                   <?php if ($_smarty_tpl->tpl_vars['corplist']->value!=''){?>
                   <div class="jobinfo-container-more"><p><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpindex">更多>></a></p></div>
                   <?php }else{ ?>
                   <div>没有近期招聘信息~~</div>
                   <?php }?>
               </div>
               <!-- 近期招聘会信息 -->
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
                                   <a style="padding-left: 15px" target="_blank" class="a-up-news" title="<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">
                                       [顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'],35,'…',true);?>

                                   </a>
                                   <?php }else{ ?>
                                   <a style="padding-left: 15px" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">
                                       <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'],35,'…',true);?>

                                   </a>
                                   <?php }?>
                               </div>

                           </h3>
                           <div class="jobinfo-textitem-read">
                               <span class="jobinfo-texitem-time" style="padding-left: 15px"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_date'],"%Y-%m-%d");?>
</span>
                               <div class="work_read_left">阅读：<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_read'];?>
&nbsp;&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_share'];?>
</div>
                               <div class="work_read_right" style="margin-right: 15px"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/Corpdetail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">查看详情>></a></div>
                           </div>
                       </div>
                       <?php endfor; endif; ?>
                       <?php if ($_smarty_tpl->tpl_vars['jobfairlist']->value!=''){?>
                       <div class="jobinfo-container-more"><p><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg">更多>></a></p></div>
                       <?php }else{ ?>
                       <div>没有近期招聘会~~</div>
                       <?php }?>
                   </div>
               </div>
           </div>
       </div>

   </div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>