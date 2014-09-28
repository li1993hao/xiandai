<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 17:36:19
         compiled from "app/tpl/student/calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:3564108255427d0abf3af76-20501192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc14d0729070847247a6868fec603447088d6423' => 
    array (
      0 => 'app/tpl/student/calendar.html',
      1 => 1411896977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3564108255427d0abf3af76-20501192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5427d0ac0743c8_53386577',
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5427d0ac0743c8_53386577')) {function content_5427d0ac0743c8_53386577($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/corpinternmsg/calendar.css" />
    <link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.print.css' media='print' />
    <title>个人中心-收藏的招聘会</title>
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
            width:723px;
            height:auto;
            float:right;
            display:inline;
            margin-top:20px;
        }



        /*#middle-other{width:405px;height:40px;float:left;font-size:0.9em;margin-top:10px;}*/
        #middle-other{width:731px;height:40px;float:left;font-size:0.9em;margin-top:10px;margin-bottom:10px;background: #34495e;}
        .other-option-item{
            display: block;
            height: 20px;
            width:160px;
            font-size: 15px;
            color: #ffffff;
            text-decoration: none;
            float: left;
            padding:10px 20px;
            text-align:center;
        }
        .menu-list-item-other-selected{background:url(../../common/app/images/index/bottom_bg.png)  no-repeat;
            background-color:  #5d6d7d;
            background-position:center 30px;height: 20px;
        }
        .other-option-content{float:left;}

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
            <dt><a href="#">收藏的招聘会</a>
            </dt>

        </dl>
    </div>

    <div id="middle_main">
        <div id="middle_left">
            <div >功能菜单</div>
            <ul>
                <li ><a href="#">学生基本信息</a></li>
                <li style="background-color: #33495e"><a href="#"  style="color: #ffffff">我的招聘</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/changepw">修改密码</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index#feedback">满意度调查</a></li>
            </ul>
        </div>
        <div id="middle_right">
            <div id="middle">
                <?php $_smarty_tpl->tpl_vars['pageid'] = new Smarty_variable(2, null, 0);?>
                <div id="middle-other">
                    <div class="other-option-content">
                        <a class="other-option-item menu-list-item-other menu-list-item-other-selected" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobfair">收藏的招聘会</a>
                    </div>
                    <div class="other-option-content">
                        <a class="other-option-item " href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/favorjobinfo">收藏的招聘信息</a>
                    </div>
                </div>


                <div id="myinfo_left">

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
    <script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.min.js'></script>
<script type="text/javascript">
    $(function(){
        var canlendar = new calendar_view("#myinfo_left","<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
");
        canlendar.generateCalendar();

        $(".event-info").mouseleave(function(event){

            //fc-event-inner
            if($(event.relatedTarget).attr("class") != "fc-event-inner fc-event-skin" && $(event.relatedTarget).attr("class") != "fc-event-title"){
                $(".event-info").hide("fast");
            }

        });
    });

    function calendar_view(containerid,basePath) {
        var container = $(containerid);
        this.generateCalendar = function() {

            var viewsets = {
                defaultView : 'month',
                header : {

                    left : 'month,agendaWeek,agendaDay prevYear,nextYear',
                    center : 'title',
                    right : ' prev,next today'
                },
                weekends : true,
                weekMode : 'liquid',
                editable : false,

                disableResizing : false,
                // event ajax
                lazyFetching : true,
                startParam : 'start',
                endParam : 'end',

                isRTL : false,
                firstDay : 1,
                monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月',
                    '九月', '十月', '十一月', '十二月' ],
                monthNamesShort : [ '一月', '二月', '三月', '四月', '五月', '六月', '七月',
                    '八月', '九月', '十月', '十一月', '十二月' ],
                dayNames : [ '周日', '周一', '周二', '周三', '周四', '周五', '周六'  ],
                dayNamesShort : [ '周日','周一', '周二', '周三', '周四', '周五', '周六'],
                buttonText : {
                    prev : '&#9668;',
                    next : '&#9658;',
                    prevYear : '&lt;&lt;上一年',
                    nextYear : '下一年&gt;&gt;',
                    today : '今天',
                    month : '月',
                    week : '周',
                    day : '天'

                },
                agenda: 'HH:mm{ - HH:mm}',
                '': 'HH:mm',
                timeFormat: 'HH:mm',
                allDayText:"全天",
                axisFormat: 'HH:mm',
                slotMinutes:60,
                firstHour:6,
                slotEventOverlap:false,

                dayClick: function(date, allDay, jsEvent, view) {

                    // change the day's background color just for fun
                    //$(this).css('background-color', 'red');
                    container.fullCalendar( 'changeView', "agendaDay" );
                    container.fullCalendar( 'gotoDate', date.getFullYear(),date.getMonth(),date.getDate() );

                },
                eventMouseover:function( event, jsEvent, view ){
                    $(".event-info").html("<a href=\""+basePath+"/index.php/jobfairmsg/calendardetail/id/"+event.id+"\">"+event.title+"</a><a href=\""+basePath+"/index.php/student/canceljobfair/infoid/"+event.id+"\">&nbsp;【退出】</a><br/>地点："+event.addr+"<br/>开始时间："+event.start.getFullYear()+"-"+(event.start.getMonth()+1)+"-"+event.start.getDate()+"&nbsp;"+event.start.toLocaleTimeString() );
                    //alert("jsEvent"+jsEvent.pageX+"..."+jsEvent.pageY);
                    $(".event-info").css("left",$(jsEvent.target).offset().left+"px");
                    $(".event-info").css("top",$(jsEvent.target).offset().top+$(jsEvent.target).height()+"px");
                    //$(".event-info").clearQueue();
                    $(".event-info").stop(true,true);
                    $(".event-info").show("fast");
                    //alert(event+"...."+jsEvent+"...."+view);

                },
                eventMouseout:function( event, jsEvent, view ){

                    if($(jsEvent.relatedTarget).attr("class")!="event-info"){
                        $(".event-info").hide("fast");
                    }


                },
                events : function(start, end, callback) {

                    var events = [];
                    var goUrl = basePath+"/index.php/student/getjsondata";
                    //alert(start.getTime());
                    $.ajax({
                        type: "POST",
                        data:"start="+start.getTime()+"&end="+end.getTime()+"",
                        url: goUrl,
                        success: function(msg){
                            //alert( msg );
                            var myObject = eval('(' + msg + ')');
                            //jm_opentimestamp":"1380816000

                            $.each(myObject, function(idx, iteminfo) {

                                events.push({
                                    id:iteminfo.jm_id,
                                    title : iteminfo.jm_name,
                                    start :new Date(iteminfo.jm_opentimestamp*1000),
                                    allDay: false,
                                    addr:iteminfo.jm_addr,
                                    url : basePath+"/index.php/jobfairmsg/calendardetail/id/"+iteminfo.jm_id,
                                    color: '#99CC33'
                                    // will be parsed
                                });
                            });
                            callback(events);
                        },
                        error:function(msg){
                            alert("ss");
                        }
                    });

                },
                eventColor: '#378006'
            };
            container.fullCalendar(viewsets);
        };// generateCalendar

        this.refetchEvents = function() {
            container.fullCalendar('refetchEvents');
        };

    };// function calendar_view


    function ShowObjProperty ( obj ) {
        // 用来保存所有的属性名称和值
        var props = "" ;
        // 开始遍历
        for ( var p in obj ){
            // 方法
            if ( typeof ( obj [p]) == "function" ){
                //obj [p]() ;
                props += p + " = function \t " ;
            } else {
                // p 为属性名称，obj[p]为对应属性的值
                props += p + " = " + obj [ p ] + " \t " ;
                //props += p + "  \t " ;
            }
        }
        // 最后显示所有的属性
        alert ( props ) ;
    }
</script>
</body>
</html><?php }} ?>