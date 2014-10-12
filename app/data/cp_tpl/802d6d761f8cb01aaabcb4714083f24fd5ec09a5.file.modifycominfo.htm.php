<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 19:47:06
         compiled from "app/tpl/company/modifycominfo.htm" */ ?>
<?php /*%%SmartyHeaderCode:641944566542a68a72299e3-57591031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '802d6d761f8cb01aaabcb4714083f24fd5ec09a5' => 
    array (
      0 => 'app/tpl/company/modifycominfo.htm',
      1 => 1413028024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641944566542a68a72299e3-57591031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a68a7364759_72380999',
  'variables' => 
  array (
    'web_url' => 0,
    'companyinfo' => 0,
    'dwxzList' => 0,
    'companydetail' => 0,
    'hyList' => 0,
    'provinceList' => 0,
    'zzhList' => 0,
    'form_userinfo' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a68a7364759_72380999')) {function content_542a68a7364759_72380999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
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
	  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery-migrate-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/xheditor-1.2.1/xheditor-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/xheditor-1.2.1/xheditor_lang/zh-cn.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/company/modifycominfo.js"></script>
    <title>修改企业信息</title>
    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>


</head>
<style>
.up_img{
    height: 150px;
    width: 100px;
}
#myinfo_left{
	float:left;
	width:715px;
}

.middle{
    min-height: 1200px;
}
.form-register-item-input{height:26px;width:287px;margin:2px 10px 3px 0px;border:solid 1px #DBDBDB; line-height:30px;float:left;}
.form-register-item-input-dz{height:30px;width:87px;margin:2px 10px 3px 0px;border:solid 1px #DBDBDB; line-height:30px;float:left;}
.form-register-item-warn{height:18px;width:120px;display:block;margin:10px 10px 0;color:red;line-height:15px;font-size:13px;float:left;text-align:left;}
.company-jobfair-item-title{width:80px;}
.form-register-item-imgitem-close{
    cursor: pointer;
}

</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('#file_upload').uploadify({
            'formData'     : {
            },
            'swf'      : web_url+'/common/libs/upload/uploadify.swf',
            'uploader' : web_url+'/index.php/common/fileupload/filetype/img',
            'queueSizeLimit': 1 ,
            'multi':false,
            'auto':true,
            'fileTypeDesc':"请选择图片文件",
            'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif;*.bmp',
            'fileSizeLimit': '4096KB',
            'buttonText':"选择图片",
            'width' : 100,
            'height':20,
            'cancelImg' : web_url+'/common/libs/upload/uploadify-cancel.png',
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
                // alert(data);
                var myObject = eval('(' + data + ')');
                //alert(myObject.result);
                //alert(myObject.msg);
                if(myObject.result == '0'){
                    $("#img").html(myObject.msg);
                    $("#filestate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
                }else{
                    var info = "<div data=\""+myObject.result+"\" class=\"orm-register-item-imgitemf\"><img alt=\"资质证明\" class=\"up_img\" src=\""+myObject.msg+"\"><div title=\"删除\" class=\"form-register-item-imgitem-close\">X</div></div>";
                    $(".company-register-item-imglist").append(info);
                    $("#filestate").val("2");

                    var idArr = new Array();
                    $(".orm-register-item-imgitemf").each(function(){
                        idArr.push($(this).attr("data"));
                    });

                    $("#fileid").val(idArr.join(","));
                }

            }
        });

        var editor = $('#gsjj').xheditor({
            upLinkUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
            upLinkExt:"zip,rar,txt",
            upImgUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
            upImgExt:"jpg,jpeg,gif,png",
            upFlashUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
            upFlashExt:"swf",
            upMediaUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
            upMediaExt:"avi",
            remoteImgSaveUrl:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload.php",
            cleanPaste:2,
            internalScript:false,
            inlineScript:false,
            internalStyle:false,
            inlineStyle:false
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
    <div class="middle_right" >
           <div id="myinfo_left">
               <form id="form1" target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/modifyinfo">
                   <table class="fairinfo_table">
                   <tbody>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>邮箱：</td>
                       <td class="company-jobfair-item-info"><?php echo $_smarty_tpl->tpl_vars['companyinfo']->value['email'];?>
</td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>企业名称：</td>
                       <td class="company-jobfair-item-info"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['companyinfo']->value['name'],15);?>
</td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>单位性质：</td>
                       <td class="company-jobfair-item-info">
                           <select class="form-register-item-input short-select not-empty" id="form-dwxz" name="form_dwxz" error_info="请选择单位性质！">
                               <option value="" selected="selected">选择单位性质</option>
                               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['name'] = 'dl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dwxzList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total']);
?>
                               <option value="<?php echo $_smarty_tpl->tpl_vars['dwxzList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['companydetail']->value['ct_id']==$_smarty_tpl->tpl_vars['dwxzList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['id']){?>selected = "selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['dwxzList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['name'];?>
</option>
                               <?php endfor; endif; ?>
                           </select>

                       </td>
                       <td>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>所属行业：</td>
                       <td class="company-jobfair-item-info">
                           <select class="form-register-item-input short-select not-empty" id="form-hy" name="form_hy" error_info="请选择行业！">
                               <option value="" selected="selected"   >选择行业</option>
                               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['name'] = 'hl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hyList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hl']['total']);
?>

                               <option value="<?php echo $_smarty_tpl->tpl_vars['hyList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hl']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['companydetail']->value['ind_id']==$_smarty_tpl->tpl_vars['hyList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hl']['index']]['id']){?>selected = "selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hyList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hl']['index']]['name'];?>
</option>
                               <?php endfor; endif; ?>
                           </select>

                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>注册资本：</td>
                       <td class="company-jobfair-item-info"><input class="form-register-item-input not-empty" id="form-zczb" type="text" name="form_zczb" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_capital'];?>
" error_info="请输入注册资本！" />
                           <span class="form-register-item-warn" init-data=""></span>

                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>邮政编码：</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-yzbm" type="text" name="form_yzbm" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_post'];?>
" error_info="请输入邮政编码！" />
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>公司邮箱：</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-commail" type="text" name="form_commail" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_email'];?>
" error_info="请输入公司邮箱！" />
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>公司网址：</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-comweb" type="text" name="form_comweb" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_website'];?>
" error_info="请输入公司网址！" />
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>所在地：</td>
                       <td class="company-jobfair-item-info">
                           <select class="form-register-item-input-dz not-empty" id="form-sheng" name="form_sheng" error_info="请选择所在地！">
                               <option value="0" selected="selected" disabled="disabled"  >选择省份</option>
                               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['name'] = 'pl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['provinceList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total']);
?>
                               <option value="<?php echo $_smarty_tpl->tpl_vars['provinceList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['provinceList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['area_name'];?>
</option>
                               <?php endfor; endif; ?>
                           </select>
                           <select class="form-register-item-input-dz not-empty" id="form-shi" name="form_shi" error_info="请选择所在地！">
                               <option value="0" selected="selected" disabled="disabled" >选择城市</option>

                           </select>
                           <select class="form-register-item-input-dz not-empty" id="form-xian" name="form_xian" error_info="请选择所在地！">
                               <option value="0" selected="selected" disabled="disabled" >选择县区</option>
                           </select>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>详细地址：</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-xxdz" type="text" name="form_xxdz" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_address'];?>
" error_info="请输入详细地址！" />
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>联系人:</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-lxr" type="text" name="form_lxr" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_contact'];?>
" error_info="填写联系人！" />
                           <span class="form-register-item-warn" init-data="">
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>固定电话:</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-gddh" type="text" name="form_gddh" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_phone'];?>
" error_info="请填写固定电话！" />
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"><font  color="red">*</font>手机:</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-phone" type="text" name="form_phone" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_mobile'];?>
" error_info="请填写手机号码！" />
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title" style="width: 100px"><font  color="red">*</font>传真:</td>
                       <td class="company-jobfair-item-info">
                           <input class="form-register-item-input not-empty" id="form-chz" type="text" name="form_chz" value="<?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_fax'];?>
" error_info="请填写传真号码！"/>
                           <span class="form-register-item-warn" init-data=""></span>
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>

                   <tr class="company-register-item">
                   <td><span class="company-register-item-title"></span></td>
                   <td>
                   <div class="company-register-item-imglist">
                   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['name'] = 'zzhl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['zzhList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['zzhl']['total']);
?>
                       <div data="<?php echo $_smarty_tpl->tpl_vars['zzhList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['zzhl']['index']]['pic_id'];?>
" class="form-register-item-imgitem">
                           <img alt="资质证明" class="up_img" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo $_smarty_tpl->tpl_vars['zzhList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['zzhl']['index']]['pic_link'];?>
">
                           <div title="删除" class="form-register-item-imgitem-close">X</div>

                       </div>
                   <?php endfor; else: ?>
                   <?php endif; ?>
                   </div>
                   </td>
                   <td>
                   <div style="clear:both;"></div>
                   </td>
                   </tr>
                   <tr class="form-register-item">
                       <td><span class="form-register-item-title">上传资质:</span></td>
                       <td>
                           <input id="file_upload" name="file_upload" type="file" multiple />
                           <input type="hidden"  name="fileid" id="fileid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['fileid'])===null||$tmp==='' ? '' : $tmp);?>
" />
                           <input type="hidden"  name="filestate" id="filestate" value="0" />
                       </td>
                       <td><div style="clear:both;"></div></td>
                   </tr>
                   <tr class="form-register-item">
                       <td><span class="form-register-item-title">公司简介:</span></td>
                       <td>
                           <textarea style="width:450px"cols="70" rows="20" id="gsjj" name="gsjj" class="not-empty" error_info="请填写公司简介！"><?php echo $_smarty_tpl->tpl_vars['companydetail']->value['com_intro'];?>
</textarea>
                           <!-- <span class="form-register-item-warn" init-data="" style="margin-left:120px;"></span> -->
                       </td>
                       <td>
                           <div style="clear:both;"></div>
                       </td>
                   </tr>
                   <tr class="company-jobfair-item">
                       <td class="company-jobfair-item-title"></td>
                       <td class="company-jobfair-item-info">
                           <input id="" class="submit" name="submit" type="submit" value="确认修改"/>
                           <span id="result" style="color:red;font-size:13px;margin-left: 30px"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp);?>
</span>
                       </td>
                   </tr>
                   </tbody>
                   </table>
               </form>
           </div>
       </div>


 </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>