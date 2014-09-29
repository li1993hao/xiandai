<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 18:11:46
         compiled from "app/tpl/company/message.htm" */ ?>
<?php /*%%SmartyHeaderCode:106029502454292e8d2e8b89-48879709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f8e4234d861eb8c96a243de26e9841bd9d26da' => 
    array (
      0 => 'app/tpl/company/message.htm',
      1 => 1411985355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106029502454292e8d2e8b89-48879709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54292e8d5100d5_97546746',
  'variables' => 
  array (
    'web_url' => 0,
    'type' => 0,
    'page' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54292e8d5100d5_97546746')) {function content_54292e8d5100d5_97546746($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_page')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.page.php';
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/DOMAssistantCompressed-2.7.4.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/ie-css3.js"></script>
    <title>企业基本信息</title>
    <script type="text/javascript">
        var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
    </script>
    <!--[if lt IE 9]>

    <![endif]-->
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">

.message-checked{
	float:left;
	width:640px;
	margin:5px 0px 5px 15px;;
}
#student-interested-info{
	float:right;
	width:710px;
}


#mytable th {
 border-right: 1px solid #D9D9D9;
 border-bottom: 1px solid #D9D9D9;
 border-top: 1px solid #D9D9D9;
 letter-spacing: 2px;
 text-align: center;
 padding: 6px 6px 6px 12px;
 background: #82605e;
 color:white;
}
#mytable td {
 border-right: 1px solid #D9D9D9;
 border-bottom: 1px solid #D9D9D9;
 background: #fff;
 font-size:12px;
 padding: 6px 6px 6px 12px;

}
#mytable th.spec {
 border-left: 1px solid #D9D9D9;
 border-top: 0;
 background: #fff;
}

.message-checked-item-title{display:inline-block;width:auto;text-align:right;margin:5px 5px 5px 10px;}
/*页码*/
#Paging{float:left;}
-->
</style>

<script type="text/javascript">
	$(document).ready(function(){

	});
	function check(flag){
		if (flag == 1){
			$(".checkbox-mes").attr("checked","true");
			$("#message-checked-button").attr("onclick","check(0)");
		}else{
			$(".checkbox-mes").removeAttr("checked");
			$("#message-checked-button").attr("onclick","check(1)");
		}
	}

	function isChecked(id){
		if($("#mes-checkbox"+id).is(":checked")){
			//alert($("#mes-checkbox"+id).is(":checked"));
			$("#mes-checkbox"+id).attr("checked","true");
		}else{
			//alert("222");
			$("#mes-checkbox"+id).removeAttr("checked");
		}
	}

	function del(){
		//alert($(".checkbox-mes:checked").length);
		if ($(".checkbox-mes:checked").length > 0){
			var str = "";
			$(".checkbox-mes:checked").each(function(index,doEle){
				//.alert($("doEle").val());
				if (index == $(".checkbox-mes:checked").length - 1){
					str += $(doEle).attr("data");
				}else{
					str += $(doEle).attr("data")+",";
				}
			});
			$.ajax({
				url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/operatemessage",
				type:"POST",
				data:{do:"del",id:str},
				async:false,
				dataType:"json",
				success:function(data){
					if (data.json.state == 1){
						alert("删除成功！");
						location.href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message/all/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
";
					}else {
						alert("删除失败！");
					}
				},
				error:function(msg){
					alert("网络出现问题！");
				}
			});
		}else{
			alert("你没有选择任何消息！");
		}
	}

	function delone(id){
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/operatemessage",
			type:"POST",
			data:{do:"del",id:id},
			async:false,
			dataType:"json",
			success:function(data){
				if (data.json.state == 1){
					alert("删除成功！");
					location.href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message/all/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
";
				}else {
					alert("删除失败！");
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}

	function setread(id){
		$.ajax({
			url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/operatemessage",
			type:"POST",
			data:{do:"setread",id:id},
			async:false,
			dataType:"json",
			success:function(data){
				if (data.json.state == 1){
					alert("设为已读成功！");
					location.href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message/all/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
";
				}else {
					alert("设为已读失败！");
				}
			},
			error:function(msg){
				alert("网络出现问题！");
			}
		});
	}
</script>
<div class="nav">
    <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index">首页/</a>
        </dt>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心/</a>
        </dt>
        <dt><a href="#">我的消息</a></dt>
    </dl>
</div>
		<div class="middle" style="padding: 0">
            
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
/index.php/company/studentinterestme'">学生信息</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/changepw'">修改密码</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/index/index#feedback'">满意度调查</p>
               <p class = "title_link" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message'" style="background-color:#344a5d;color: #ffffff">我的消息</p>
           </div>

       </div>
			
     	<div class="middel_right">
	    <div class="myinfo_left_top">
			<div id="xuanxiang-table">
				<div>

					<div id="jobfair-button2" class="cursor-hand jobfair-table <?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>jobfair-button-selected<?php }?>" data=2>
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message/all/1">新消息</a>
					</div>
					<div id="jobfair-button3" class="cursor-hand jobfair-table <?php if ($_smarty_tpl->tpl_vars['type']->value==3){?>jobfair-button-selected<?php }?>" data=3>
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/message/all/0">全部消息</a>
					</div>

				</div>
			</div>
		</div>

			<div id="student-interested-info">
				<table id="mytable" cellspacing="0" >
					<tr>
		    			<th scope="col" width="20px" style="border-left:1px solid #adceff;" ></th>
		    			<th scope="col" width="480px" style="text-align:center;">消息</th>
		    			<th scope="col" width="110px" style="text-align:center;">操作</th>
		  			</tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ml'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['name'] = 'ml';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mes']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ml']['total']);
?>
                    <tr>
                        <td style="border-left:1px solid #adceff;">
                            <input id="mes-checkbox<?php echo $_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_id'];?>
"  type="checkbox" onclick="isChecked(<?php echo $_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_id'];?>
)" name="mes-checkbox" class="checkbox-mes" value="1" data="<?php echo $_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_id'];?>
"/>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_isread']==0){?>
                            <font color="#E6433C">[new]</font>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_type']==0){?>
                            你的公司
                            <font color="#E6433C"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['info_name'],16,'...',true,true);?>
</font>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==0){?>
                            未通过审核
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==1){?>
                            通过了审核
                            <?php }else{ ?>
                            <?php }?>
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_type']==1){?>
                            你的企业招聘信息
                            <font color="#E6433C"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['info_name'],16,'...',true,true);?>
</font>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==0){?>
                            未通过审核
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==1){?>
                            通过了审核
                            <?php }else{ ?>
                            <?php }?>
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_type']==2){?>
                            你的实习招聘信息
                            <font color="#E6433C"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['info_name'],16,'...',true,true);?>
</font>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==0){?>
                            未通过审核
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==1){?>
                            通过了审核
                            <?php }else{ ?>
                            <?php }?>
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_type']==3){?>
                            你的基层招聘信息
                            <font color="#E6433C"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['info_name'],16,'...',true,true);?>
</font>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==0){?>
                            未通过审核
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==1){?>
                            通过了审核
                            <?php }else{ ?>
                            <?php }?>
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_type']==4){?>
                            你的招聘会信息
                            <font color="#E6433C"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['info_name'],16,'...',true,true);?>
</font>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==0){?>
                            预定失败
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_sort']==1){?>
                            预定成功
                            <?php }else{ ?>
                            <?php }?>
                            <?php }elseif($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_type']==5){?>
                            <font color="#E6433C"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['info_name'],16,'...',true,true);?>
</font>
                            关注了你
                            <?php }else{ ?>
                            <?php }?>
                            &nbsp;
                            <?php echo $_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_time'];?>

                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_isread']==0){?>
                            <a href ="#" onclick="setread(<?php echo $_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_id'];?>
)" return false;>设为已读</a>
                            &nbsp;
                            <?php }?>
                            <a href ="#" onclick="delone(<?php echo $_smarty_tpl->tpl_vars['mes']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ml']['index']]['mes_id'];?>
)" return false;>删除</a>
                        </td>
                    </tr>
                    <?php endfor; else: ?>
                    <tr>
                        <th class="spec" colspan="3">暂无记录</td>
                    </tr>
                    <?php endif; ?>
		 		</table>
                <?php if ($_smarty_tpl->tpl_vars['mes']->value['list']){?>
                <div class="message-checked">
                    <input type="checkbox" id="message-checked-button" name="message-checked-button" onclick="check(1)" value="1"/><div class="message-checked-item-title">全选</div>
                    <div class="message-checked-item-title"><a href="#" onclick="del()" return false;>删除</a></div>
                </div>
                <?php }?>
                <?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['mes']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/company/message/all/".((string)$_smarty_tpl->tpl_vars['type']->value)."/page/".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

		 	</div>



</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>