<?php /* Smarty version Smarty-3.1.14, created on 2014-10-10 10:43:10
         compiled from "app/tpl/company/pubcorpmsg.htm" */ ?>
<?php /*%%SmartyHeaderCode:811798089542a5b76dfd722-41626061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '460c5289607746c1393e49f971015e55e2e0bc54' => 
    array (
      0 => 'app/tpl/company/pubcorpmsg.htm',
      1 => 1412908988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811798089542a5b76dfd722-41626061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a5b76eb8306_04467863',
  'variables' => 
  array (
    'web_url' => 0,
    'company' => 0,
    'officelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a5b76eb8306_04467863')) {function content_542a5b76eb8306_04467863($_smarty_tpl) {?><!DOCTYPE HTML>
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
/common/libs/upload/uploadify.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/jquery.uploadify.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/xheditor-1.2.1/xheditor-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/xheditor-1.2.1/xheditor_lang/zh-cn.js"></script>
    <title>招聘信息</title>
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


<script type="text/javascript">
var parentId = 0;
var provid = 0;
//确认添加职位
function save(){
    var besure = "";
    if($("#officename").val() == ""){
        $("#officeresult").text("职位名称不能为空！");
        $("#officename").focus();
        besure = false;
    }else if($("#jobtype3").val() == "0"){
        $("#officeresult").text("职位类别不能为空！");
        besure = false;
    }else if($("#officereq").val() == ""){
        $("#officeresult").text("职位要求不能为空！");
        $("#officereq").focus();
        besure = false;
    }else{besure = true;}
    if(besure == true){
        officename = $("#officename").val();
        officetype = $("#jobtype3").attr("value");
        officetype1 = $("#jobtype1").attr("value");
        officetype2 = $("#jobtype2").attr("value");
        officereq = $("#officereq").val();
        //alert(officename+officetype+officereq);
        var str = "";
        str+="<div class=\"position-list-item edit-flag\" style=\"height: 25px;border-bottom: 1px\" >";
        str+="<div class=\"position-list-item-content\" style=\"float: left;margin-left: 70px\" > <span class=\"float-left\">"+officename+"</span></div>";
        str+="<div class=\"option-content\"><div style=\"float: left;margin-left: 150px\" class=\"edit-coin-content\"  jobname=\""+officename+"\" jobtypeinput1= \""+officetype1+"\" jobtypeinput2= \""+officetype2+"\" jobtypeinput3 =\""+officetype+"\" jobcontent=\""+officereq+"\">";
        str+="<input class=\"officename\" type=\"hidden\" name = \"officenamelist[]\" value=\""+officename+"\"/>";
        str+="<input class=\"jobtypeinput\" type=\"hidden\" name = \"officejobtype[]\" value=\""+officetype+"\" jobtypeinput1= \""+officetype1+"\" jobtypeinput2= \""+officetype2+"\"/>";
        str+="<input class=\"jobcontentinput\" type=\"hidden\" name = \"officecontent[]\" value=\""+officereq+"\"/></div>";
        str+="<span  style=\"float: left;margin-left: 20px\" class=\"position-list-delete position-list-optionitem cursor-hand\" onclick=\"deleteoffice(this);\">删除</span></div>";
        str+="</div>";
        $("#positionlist").append(str);
        $("#dialog").hide();
    }
}
function addZhiwei(){
    var str = "";
    str+="<input id = \"select-yes\" class=\"select-yes cursor-hand\" type=\"button\" value=\"保存\"  onclick=\"save();\"/>";
    $("#select-yes-container").html(str);
    str1= "<option value=\"0\" selected=\"selected\">选择类别</option>";
    //alert(str1);
    $("#jobtype2").html(str1);
    $("#jobtype3").html(str1);
    getJobtype("jobtype1",0,0);
    $("#officename").val("");
    $("#officereq").val("");
    $("#dialog").show();
}


$(document).ready(function(){
    getArea("prov",parentId);

    $("#prov").change(function(){
        parentId = $("#prov").val();
        getArea("city",parentId);
        $("#city").change(function(){
            parentId = $("#city").val();
            getArea("county",parentId);
        });
    });

    $('#file_upload').uploadify({
        'formData'     : {
        },
        'swf'      : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/upload/uploadify.swf',
        'uploader' : '<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/fileupload/filetype/file',
        'queueSizeLimit': 1 ,
        'multi':false,
        'auto':true,
        'fileTypeDesc':"请选择文件",
        'fileTypeExts':'*.txt;*.pdf;*.doc;*.docx;*.xls;*.xslx;*.rar;*.zip;*.ppt;*.pptx',
        'fileSizeLimit': '10240KB',
        'buttonText':"上传附件",
        'width' : 100,
        'height':20,
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
            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
            // alert(data);//size
            var myObject = eval('(' + data + ')');
            // alert(myObject.result);
            //alert(myObject.msg);
            if(myObject.result == '0'){
                $("#file").html("上传失败！");
                $("#filestate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
            }else{
                $("#hidFileID").attr("value",myObject.result);
                //$("#fsize").val(myObject.size);
                $("#filetitle").val(myObject.name);
                var str = "<a id= \"link"+myObject.result+"\" href='"+myObject.msg+"'><font size='2px' color='#080719'>"+myObject.name+"</font></a>";
                str += "<a id=\"del"+myObject.result+"\"  href=\"#\" onClick=\"delfile("+myObject.result+");\" return false;><font size='2px' color='#D6504B'>[删除]</font></a>";
                $("#file").html(str);
                $("#filestate").val("2");
            }

        }
    });


    var editor = $('#require').xheditor({
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
        upMediaExt:"avi"
    });

    var editor = $('#content').xheditor({
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
        upMediaExt:"avi"
    });

    $("#form1").submit(function (){
        //alert($("#jobfairtitle").val());
        if($("#jobfairtitle").val() == ""){
            $("#result").text("标题不能为空！");
            $("#jobfairtitle").focus();
            return false;
        }
        if($("#isopen").val() == ""){
            $("#result").text("请选择是否公开！");
            $("#isopen").focus();
            return false;
        }
        if($("#jobfairtype").val() == "0"){
            $("#result").text("招聘信息类型不能为空！");
            $("#jobfairtype").focus();
            return false;
        }
        if($("#prov").val() == "0"){
            $("#result").text("所在省份不能为空！");
            $("#prov").focus();
            return false;
        }
        //alert($("#prov").val());
        if( !$("div").hasClass("position-list-item") ){
            $("#result").text("职位信息不能为空！");
            //$("#prov").focus();
            return false;
        }
        if($("#content").val() == 0){
            $("#result").text("招聘信息内容不能为空！");
            $("#content").focus();
            return false;
        }
        return true;
    });



    $(".edit-coin-content").live('click',function(){
        var officename = $(this).attr("jobname");
        var officetype1 = $(this).attr("jobtypeinput1");
        var officetype2 = $(this).attr("jobtypeinput2");
        var officetype3 = $(this).attr("jobtypeinput3");
        var officecontent = $(this).attr("jobcontent");
        //alert($(this).attr("jobname"));
        $("#officename").val(officename);
        getJobtype("jobtype1",0,officetype1);
        getJobtype("jobtype2",officetype1,officetype2);
        getJobtype("jobtype3",officetype2,officetype3);
        $("#officereq").val(officecontent);
        $(this).parentsUntil( $("#positionlist"), ".edit-flag" ).addClass("edit-selected");
        var str = "";
        str+="<input id = \"edit-yes\" class=\"cursor-hand\" type=\"button\" value=\"保存\"/>";
        $("#select-yes-container").html(str);
        $("#dialog").show();
    });
    $("#edit-yes").live('click',function(){
        officename = $("#officename").val();
        officetype = $("#jobtype3").attr("value");
        officetype1 = $("#jobtype1").attr("value");
        officetype2 = $("#jobtype2").attr("value");
        officereq = $("#officereq").val();
        //alert(officename+officetype+officereq);
        $(".edit-selected .position-list-item-content .float-left").html(officename);
        $(".edit-selected .option-content .edit-coin-content").attr({ jobcontent: officereq, jobname: officename,jobtypeinput1:officetype1,jobtypeinput2:officetype2,jobtypeinput3:officetype });
        $(".edit-selected .option-content .edit-coin-content .jobname").val(officename);
        $(".edit-selected .option-content .edit-coin-content .jobtypeinput").val(officetype);
        $(".edit-selected .option-content .edit-coin-content .jobcontentinput").val(officereq);
        $(".position-list-item").each(function(i){
            $(this).removeClass("edit-selected");
        });
        $("#dialog").hide();
    });
    $(".position-list-delete").live('click',function(){
        $(this).parentsUntil( $("#positionlist"), ".edit-flag" ).remove();
    });
});
function getArea(htmlId,pId){
    //alert(provid);
    $.ajax({
        url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/area/parentid/"+pId,
        type:"POST",
        async:false,
        dataType:"json",
        success:function(data){
            var str = "";
            if(htmlId == "prov"){
                if(provid == ""){
                    str += "<option value=\"0\" selected=\"selected\" >选择省份</option>";
                }else{
                    str += "<option value=\"0\"  >选择省份</option>";
                }
            }
            //var str="";
            if(data.json.state == 1){
                $.each(data.json.data.list,function(index,item){
                    if(provid == item.area_id){
                        str +="<option value=\""+item.area_id+"\" selected=\"selected\">"+item.area_name+"</option>";
                    }else{
                        str +="<option value=\""+item.area_id+"\">"+item.area_name+"</option>";
                    }

                });
                $("#"+htmlId).html(str);
            }else{
                $("#"+htmlId).html(str);
            }
        },
        error:function(msg){
            alert("网络出现问题！");
        }
    });
}

function delfile(id){
    $.ajax({
        url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/delfile/filetype/file/id/"+id,
        type:"post",
        async: false,
        dataType:"json",
        success:function(data){
            if (data.json.state == 1){
                $("#link"+id).remove();
                $("#del"+id).remove();
                $("#hidFileID").val("");
                $("#filetitle").val("");
                alert("删除成功");
            }else{
                alert("删除失败");
            }
        },
        error:function(msg){
            alert("网络出现问题，请稍后再试");
            //$("#news-all-container").html("");
        }
    });
}


</script>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心/</a>
        </dt>
        <dt><a href="#">招聘信息</a></dt>
    </dl>
</div>
<div class ="middle" style="padding: 0">
    <div id="middle_left" style="padding-top: 0px">
        <div id="title">
            <p>功能菜单</p>
        </div>
        <div class="title" style="margin-top: 8px">
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo'" >企业基本信息</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair'">招聘会预定</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmycorpmsg'"  style="background-color:#344a5d;color: #ffffff">招聘信息</p>
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
    <div class="middel_right">

        <div id="myinfo_left">
            <form id="form1" target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/pubcorpmsg">
                <table class="fairinfo_table">
                    <tbody>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">标题：</td>
                        <td class="company-jobfair-item-info">
                            <input id="jobfairtitle" type="text" name="jobfairtitle" style="width:480px;height:30px;" value="" />
                        </td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">是否公开：</td>
                        <td class="company-jobfair-item-info">
                            <select id="isopen" name="isopen" class="select-list">
                                <option value="" selected="selected" disabled>选择</option>
                                <option value="0">不公开</option>
                                <option value="1">公开</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">信息类型：</td>
                        <td class="company-jobfair-item-info">
                            <select id="jobfairtype" class="select-list" name="jobfairtype">
                                <option value="0" selected="selected" >选择信息类型</option>
                                <option value="1" >企业招聘</option>
                                <option value="2" >实习招聘</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">单位名称：</td>
                        <td class="company-jobfair-item-info"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">单位性质：</td>
                        <td class="company-jobfair-item-info"><?php echo $_smarty_tpl->tpl_vars['company']->value['corptype'];?>
</td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">所属行业：</td>
                        <td class="company-jobfair-item-info"><?php echo $_smarty_tpl->tpl_vars['company']->value['industry'];?>
</td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">所在地：</td>
                        <td class="company-jobfair-item-info">
                            <select id="prov" class="select-list" name="prov">
                                <option value="0" selected="selected" >选择省份</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">网址：</td>
                        <td class="company-jobfair-item-info"<?php echo $_smarty_tpl->tpl_vars['company']->value['website'];?>
</td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">电话：</td>
                        <td class="company-jobfair-item-info"><?php echo $_smarty_tpl->tpl_vars['company']->value['phone'];?>
</td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">邮箱：</td>
                        <td class="company-jobfair-item-info"><?php echo $_smarty_tpl->tpl_vars['company']->value['comEmail'];?>
</td>
                    </tr>
                    </tbody>
                </table>

                <div class="company-jobfair-item" >
                    <div id = "positionlist" class="company-jobfair-item-info">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['officelist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
                        <div class="position-list-item edit-flag" style="height: 25px;border-bottom: 1px">
                            <div class="position-list-item-content" style="float: left;margin-left: 70px">
                                <span class="float-left"><?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['office_name'];?>
</span>
                            </div>
                            <div  class="option-content">
                                <div style="float: left;margin-left: 150px"  class="edit-coin-content" jobcontent="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['office_intro'];?>
" jobtypeinput3="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ot_id'];?>
" jobtypeinput2="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['officetype2'];?>
" jobtypeinput1="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['officetype1'];?>
" jobname="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['office_name'];?>
">
                                    <input class="officename" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['office_name'];?>
" name="officenamelist[]"></input>
                                    <input class="jobtypeinput" type="hidden" jobtypeinput2="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['officetype2'];?>
" jobtypeinput1="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['officetype1'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['ot_id'];?>
" name="officejobtype[]"></input>
                                    <input class="jobcontentinput" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['officelist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['office_intro'];?>
" name="officecontent[]"></input>
                                </div>
                                <span style="float: left;margin-left: 20px"  class="position-list-delete position-list-optionitem cursor-hand" onclick="deleteoffice(this);">删除</span>
                            </div>
                        </div >
                        <?php endfor; endif; ?>
                    </div>
                </div>
                <script type="text/javascript">
                    function deleteoffice(o){
                        $(o).parent().parent().remove();
                    }
                </script>
                <table class="fairinfo_table">
                    <tbody>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title" style="width: 100px">职位：</td>
                        <td class="company-jobfair-item-info"><input class="cursor-hand jqmClose" type="button" value="添加职位" onclick="addZhiwei();"/></td>
                    </tr>
                    <?php echo $_smarty_tpl->getSubTemplate ('company/addposition.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title"></td>
                        <td id="file" class="company-jobfair-item-info"></td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">附件：</td>
                        <td class="company-jobfair-item-info">
                            <input id="file_upload" name="file_upload" type="file" multiple />
                            <input id="hidFileID" type="hidden" name="fileid" value="" />
                            <input type="hidden" name="filestate" id="filestate" value="0" />
                            <input type="hidden" name="filetitle" id="filetitle" value="" />
                        </td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title">招聘内容：</td>
                        <td class="company-jobfair-item-info">
                            <textarea id="content" name="content" rows="15" cols="120" style="width:90%;height:350px" value=""></textarea>
                        </td>
                    </tr>
                    <tr class="company-jobfair-item">
                        <td class="company-jobfair-item-title"></td>
                        <td class="company-jobfair-item-info">
                            <input id="submit" class="submit" name="submit" type="submit" value="发布招聘信息"/>
                            <span id="result" style="color:red;font-size:13px;margin-left: 30px"></span>
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