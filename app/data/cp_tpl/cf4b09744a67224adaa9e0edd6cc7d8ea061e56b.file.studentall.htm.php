<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 14:28:04
         compiled from "app/tpl/company/studentall.htm" */ ?>
<?php /*%%SmartyHeaderCode:62910786543b70f4785e66-60989522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf4b09744a67224adaa9e0edd6cc7d8ea061e56b' => 
    array (
      0 => 'app/tpl/company/studentall.htm',
      1 => 1413103106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62910786543b70f4785e66-60989522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543b70f48283f5_73811051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543b70f48283f5_73811051')) {function content_543b70f48283f5_73811051($_smarty_tpl) {?><!DOCTYPE HTML>
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
    <style>
    .act-page{ width:610px; margin-top:20px; text-align:left; height:30px;float:left;}
    .small-btn{  padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#E8F1FA; cursor:pointer;}
    .small-btn:hover{background:#FCF1CA;}
    .small-btn-noclick{ padding:2px 10px; margin-left:5px; margin-right:5px; font-size:12px; border: #666 double 1px; background-color:#666; cursor:none;}
    </style>
    <script type="text/javascript">
    var collegeName = "null";
    var grade = 0;
    var pro = "null";
    var degree = 3;
    var cur_page = 1;
    $(document).ready(function(){
        getInfo(0,1);
        getProList(1);
        getGrade(2);
        getCollege(3);
        getDegree(4);
        $("#college").change(function(){
            collegeName = $("#college").val();
            getInfo(0,1);
        });
        $("#nianji").change(function(){
            grade = $("#nianji").val();
            getInfo(0,1);
        });
        $("#major").change(function(){
            pro = $("#major").val();
            getInfo(0,1);
        });
        $("#eduction").change(function(){
            degree = $("#eduction").val();
            getInfo(0,1);
        });
    });
    function getPage(nowpage,totalpage){
        //alert(nowpage+"/"+totalpage);
        if(totalpage < 1){
            return "";
        }
        var page = "<div class=\"act-page\">";
        if(nowpage==1){
            page += "<input class=\"small-btn-noclick\"  type=\"button\" value=\"1\" />";
        }else{
            page += "<input class=\"small-btn\"  type=\"button\" value=\"上页\" onclick=\"prepage("+nowpage+","+totalpage+")\" />";
            page += "<input class=\"small-btn\"  type=\"button\" value=\"1\" onclick=\"gopage(1,"+totalpage+")\" />";

            if(nowpage-1 > 5){
                var i;

                for(i=2;i<=3;i++){
                    //alert("i1:"+i);
                    page += "<input class=\"small-btn\"  type=\"button\" value=\""+i+"\" onclick=\"gopage("+i+","+totalpage+")\" />";

                }
                page += "...";
                for(i= nowpage - 2 ; i < nowpage;i++){
                    //alert("i2:"+i);
                    page += "<input class=\"small-btn\"  type=\"button\" value=\""+i+"\" onclick=\"gopage("+i+","+totalpage+")\" />";
                }
            }else{
                var i;
                for(i=2;i<nowpage;i++){
                    //alert("i3:"+i);
                    page += "<input class=\"small-btn\"  type=\"button\" value=\""+i+"\" onclick=\"gopage("+i+","+totalpage+")\" />";
                }
            }
            page += "<input class=\"small-btn-noclick\"  type=\"button\" value=\""+nowpage+"\" />";

        }
        if(nowpage != totalpage){
            //alert("total-now:"+(totalpage-nowpage));
            if( (totalpage-nowpage) > 5){
                var j;
                for(j= parseInt(nowpage)+1;j<= parseInt(nowpage)+2;j++){
                    //alert("j1:"+j);
                    page += "<input class=\"small-btn\"  type=\"button\" value=\""+j+"\" onclick=\"gopage("+j+","+totalpage+")\" />";

                }
                page += "...";
                for(j=totalpage-2;j<totalpage;j++){
                    //alert("j2:"+j);
                    page += "<input class=\"small-btn\"  type=\"button\" value=\""+j+"\" onclick=\"gopage("+j+","+totalpage+")\" />";
                }

            }else{
                //alert(nowpage);
                var k = parseInt(nowpage)+1;
                for(k ; k < totalpage; k++){
                    //alert("k:"+k);
                    page += "<input class=\"small-btn\"  type=\"button\" value=\""+k+"\" onclick=\"gopage("+k+","+totalpage+")\" />";
                }
            }
            page += "<input class=\"small-btn\"  type=\"button\" value=\""+totalpage+"\" onclick=\"gopage("+totalpage+","+totalpage+")\" />";
            page += "<input class=\"small-btn\"  type=\"button\" value=\"下页\" onclick=\"nextpage("+nowpage+","+totalpage+")\" />";
        }


        page += "</div>";
        return page;
    }
    //上一页
    function prepage(nowpage,totalpage){
        if( nowpage <=1 ){return false;}
        page = nowpage - 1;
        gopage(page,totalpage);

    }

    //下一页
    function nextpage(nowpage,totalpage){
        if( nowpage == totalpage ){return false;}
        page = nowpage + 1;
        gopage(page,totalpage);

    }
    function gopage(destpage,totalpage){
        if( destpage > totalpage ){return false;}
        if( destpage <1 ){return false;}
        cur_page = destpage;
        getInfo(0,destpage);
    }
    function getInfo(flag,page){
        //var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag+"/college/"+collegeName+"/grade/"+grade+"/major/"+pro+"/degree/"+degree;
        //alert(url);
        $("#mytable").html("正在载入，请稍后。。。");
        $.ajax({
            url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/",
            data:{type:flag,college:collegeName,grade:grade,major:pro,degree:degree,page:page},
            type:"post",
            async:false,
            dataType:"json",
            success:function(data){
                var str = "<tr>";
                str += "<th scope=\"col\" width=\"60px\" style=\"border-left:1px solid #adceff;text-align:center;\" >姓名</th>";
                str += "<th scope=\"col\" width=\"50px\" style=\"text-align:center;\">性别</th>";
                str += "<th scope=\"col\" width=\"90px\" style=\"text-align:center;\">生日</th>  ";
                str += "<th scope=\"col\" width=\"1100px\" style=\"text-align:center;\">学院</th>";
                str += "<th scope=\"col\" width=\"50px\" style=\"text-align:center;\">学历</th>";
                str += "<th scope=\"col\" width=\"140px\" style=\"text-align:center;\">专业</th>";
                str += "<th scope=\"col\" width=\"150px\" style=\"text-align:center;\">操作</th>";
                str += "</tr>";
                if(data.json.state == 1){
                    $.each(data.json.data.list,function(index,item){
                        //alert("111");
                        str += "<tr>";
                        str += "<td style=\"border-left:1px solid #adceff;text-align:center;\">"+item.stu_name+"</td>";
                        if (item.stu_stu_gender == 0){
                            str += "<td style=\"text-align:center;\">男</td>";
                        }else{
                            str += "<td style=\"text-align:center;\">女</td>";
                        }
                        str += "<td style=\"text-align:center;\">"+item.stu_birth+"</td>";
                        str += "<td style=\"text-align:center;\">"+item.stu_college+"</td>";
                        if(item.stu_education == 0){
                            str += "<td style=\"text-align:center;\">本科</td>";
                        }else if (item.stu_education == 1){
                            str += "<td style=\"text-align:center;\">研究生</td>";
                        }else{
                            str += "<td style=\"text-align:center;\">博士</td>";
                        }
                        str += "<td style=\"text-align:center;\">"+item.stu_pro+"("+item.stu_grade+"级)</td>";
                        str += "<td style=\"text-align:center;\"><a href=\"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/common/userinfo/id/"+item.fu_id+"\">详细资料</a></td>";
                        str += "</tr>";
                    });
                    $("#mytable").html(str);
                    //alert(str);
                    var pagestr= getPage(data.json.data.page,data.json.data.totalPage);
                    //alert(str);
                    $("#page-item").html(pagestr);
                }else{
                    alert(data.json.msg);
                    str +="<th class=\"spec\" colspan=\"7\">暂无记录</th>";
                    $("#mytable").html(str);
                    $("#page-item").html("");
                }
            },
            error:function(msg){
                //alert(str);
                alert("网络出现问题！");
            }
        });
    }

    function getProList(flag){
        //var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getstudentinfo/flag/"+flag+"/type/"+infoType+"/infoid/"+infoId+"/major/"+pro+"/time/"+timeRange;
        //alert(url);
        $.ajax({
            url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/",
            data:{type:flag},
            type:"POST",
            async:false,
            dataType:"json",
            success:function(data){
                var str = "";
                if(data.json.state == 1){
                    str += "<option value=\"0\" selected=\"selected\">不限</option>";
                    $.each(data.json.data,function(index,item){
                        str += "<option value=\""+item.stu_pro+"\">"+item.stu_pro+"</option>";
                    });
                    $("#major").html(str);
                }else{
                    $("#major").html(str);
                }
            },
            error:function(msg){
                alert("网络出现问题！");
            }
        });
    }

    function getGrade(flag){
        //var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag;
        //alert(url);
        $.ajax({
            url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/",
            data:{type:flag},
            type:"POST",
            async:false,
            dataType:"json",
            success:function(jsondata){
                var str = "";
                if(jsondata.json.state == 1){
                    //alert(jsondata.json.data);
                    str += "<option value=\"0\" selected=\"selected\">不限</option>";
                    $.each(jsondata.json.data,function(index,item){
                        //alert(item.grade);
                        str += "<option value=\""+item.stu_grade+"\">"+item.stu_grade+"级</option>";
                    });
                    //alert(str);
                    $("#nianji").html(str);
                }else{
                    $("#nianji").html(str);
                }
            },
            error:function(msg){
                alert("网络出现问题！");
            }
        });
    }

    function getCollege(flag){
        //var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag;
        //alert(url);
        $.ajax({
            url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/",
            data:{type:flag},
            type:"POST",
            async:false,
            dataType:"json",
            success:function(jsondata){
                var str = "";
                if(jsondata.json.state == 1){
                    //alert(jsondata.json.data);
                    str += "<option value=\"0\" selected=\"selected\">不限</option>";
                    $.each(jsondata.json.data,function(index,item){
                        //alert(item.grade);
                        str += "<option value=\""+item.stu_college+"\">"+item.stu_college+"</option>";
                    });
                    //alert(str);
                    $("#college").html(str);
                }else{
                    $("#college").html(str);
                }
            },
            error:function(msg){
                alert("网络出现问题！");
            }
        });
    }

    function getDegree(flag){
        //var url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/type/"+flag;
        //alert(url);
        $.ajax({
            url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Getallstudentinfo/",
            data:{type:flag},
            type:"POST",
            async:false,
            dataType:"json",
            success:function(jsondata){
                var str = "";
                if(jsondata.json.state == 1){
                    //alert(jsondata.json.data);
                    str += "<option value=\"3\" selected=\"selected\">不限</option>";
                    $.each(jsondata.json.data,function(index,item){
                        //alert(item.grade);
                        str += "<option value=\""+item.stu_education+"\">"+item.education+"</option>";
                    });
                    //alert(str);
                    $("#eduction").html(str);
                }else{
                    $("#eduction").html(str);
                }
            },
            error:function(msg){
                alert("网络出现问题！");
            }
        });
    }

    </script>
</head>
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
        <dt><a href="#">全部学生信息</a></dt>
    </dl>
</div>
<div class ="middle" style="padding: 0">
    <div id="middle_left" style="padding-top: 0px">
        <div id="title">
            <p>功能菜单</p>
        </div>
        <div class="title" style="margin-top: 8px">
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo'">企业基本信息</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair'">招聘会预定</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmycorpmsg'">招聘信息</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/studentinterestme'"  style="background-color:#344a5d;color: #ffffff" >学生信息</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw'">修改密码</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/index#feedback'">满意度调查</p>
            <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message'">我的消息</p>
        </div>

    </div>
    <div class="middle_right">

        <div id="middle-left">
            <div class="myinfo_left_top">
                <div class="getjobfair-result"></div>
                <div id="xuanxiang-table" >
                    <div style="width:128px" id="jobfair-button2" class="cursor-hand jobfair-table " data=2>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Studentinterestme">对我感兴趣的学生</a>
                    </div>
                    <div style="width:128px" id="jobfair-button3" class="cursor-hand jobfair-table jobfair-button-selected ">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/studentall">所有学生</a>
                    </div>
                </div>
            </div>

            <div class="student-search">
                <div class="student-search-item">
                    <div class="student-search-item-title">学院</div>
                    <select id="college" name="college">
                        <option value="0" selected="selected">不限</option>
                    </select>
                    <div class="student-search-item-title">年级</div>
                    <select id="nianji" name="nianji">
                        <option value="0" selected="selected">不限</option>
                    </select>
                    <div class="student-search-item-title">学历</div>
                    <select id="eduction" name="eduction">
                        <option value="3" selected="selected">不限</option>
                    </select>
                    <div class="student-search-item-title">专业</div>
                    <select id="major" name="major">
                        <option value="0" selected="selected">不限</option>
                    </select>
                </div>
            </div>
            <div id="student-interested-info">
                <table id="mytable" cellspacing="0" >
                </table>
            </div>
            <div id="page-item" class="page-item"></div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
]
</body>

</html><?php }} ?>