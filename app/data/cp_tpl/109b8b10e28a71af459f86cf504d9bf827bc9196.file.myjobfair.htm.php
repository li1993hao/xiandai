<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 18:11:39
         compiled from "app/tpl/company/myjobfair.htm" */ ?>
<?php /*%%SmartyHeaderCode:106110250754292d30204c45-34025995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109b8b10e28a71af459f86cf504d9bf827bc9196' => 
    array (
      0 => 'app/tpl/company/myjobfair.htm',
      1 => 1411985396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106110250754292d30204c45-34025995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54292d3037f552_65940296',
  'variables' => 
  array (
    'web_url' => 0,
    'type' => 0,
    'page' => 0,
    'jobfair' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54292d3037f552_65940296')) {function content_54292d3037f552_65940296($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
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
    <title>招聘会预定</title>
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

<style type="text/css">

</style>
<script type="text/javascript">
var web_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
";
$(function(){
	
});
function deletejobfair(id,type,page){
	url=web_url+"/index.php/company/deletejobfair/id/"+id,
	//alert(url);
	$.ajax({
		url:"<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/deletejobfair",
		type:"POST",
		data:{id:id},
		dataType:"json",
		async: false,
		success:function(data){
			if(data.json.state == 1){
				alert(data.json.msg);
			}
			else
			{
				//alert(data);
				alert(data.json.msg);
			}
			location.assign(web_url+"/index.php/company/getmyjobfair/type/"+<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
+"/page/"+<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
);
		},
		   error:function(o){
				
			}
	});
}
function show_confirm(id,type,page)
{
var r=confirm("确定要删除这条信息吗？");
if (r==true)
  {
	deletejobfair(id,type,page);
  }
else
  {
  alert("已取消删除!");
  }
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
        <dt><a href="#">招聘会预定</a></dt>
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
/index.php/company/getmyjobfair'" style="background-color:#344a5d;color: #ffffff">招聘会预定</p>
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
    <div class="middle_right">
        <div class="myinfo_left_top">
            <div class="getjobfair-result"></div>
            <div class="xuanxiang-title">状态：</div>
            <div id="xuanxiang-table">
                <div id="jobfair-button1" class="cursor-hand jobfair-table <?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>jobfair-button-selected<?php }?>" data=1>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair/type/1">所有</a>
                </div>
                <div id="jobfair-button2" class="cursor-hand jobfair-table <?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>jobfair-button-selected<?php }?>" data=2>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair/type/2">申请中</a>
                </div>
                <div id="jobfair-button3" class="cursor-hand jobfair-table <?php if ($_smarty_tpl->tpl_vars['type']->value==3){?>jobfair-button-selected<?php }?>" data=3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair/type/3">已通过</a>
                </div>
                <div id="jobfair-button4" class="cursor-hand jobfair-table <?php if ($_smarty_tpl->tpl_vars['type']->value==4){?>jobfair-button-selected<?php }?>" data=4>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/getmyjobfair/type/4">未通过</a>
                </div>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/Pubjobfairinfo">
                <div class="xuanxiang-pubcorpmsg-background">
                    <div class = "xuanxiang-pubcorpmsg">预订招聘会</div>
                </div>
            </a>
        </div>
        <div id="table-type1" class="table-type">
            <table id="mytable" cellspacing="0" >
                <?php if ($_smarty_tpl->tpl_vars['jobfair']->value['list']==true){?>
                <tr>
                    <th scope="col" width="" style="border-left:1px solid #D9D9D9;" >名称</th>
                    <th scope="col" width="" >状态</th>
                    <th scope="col" width="" >期望时间以及要求</th>
                    <th scope="col" width="" >申请时间</th>
                    <th scope="col" width="" >操作</th>
                </tr>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobfair']->value['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <tr>
                    <td style="border-left:1px solid #D9D9D9;" >
                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_name'];?>
</a>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_veri']==0){?>
                        <span style="color:#e59c00">审批中</span>
                        <?php }elseif($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_veri']==2){?>
                        <span style="color:red">未通过（原因：<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_reason'];?>
）</span>
                        <?php }elseif($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_veri']==1){?>
			 		<span style="color:#7bac87">审批通过<br>时间：<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_opentime'];?>
<br><?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_addr'];?>

			 		<?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_require'];?>

                    </td>
                    <td>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_date'],"%Y-%m-%d %H:%M");?>

                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_veri']==0){?>
                        <div class="option-item"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/editjobfair/id/<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_id'];?>
">修改</a></div>
                        <div id = "delete-jobfair" class="cursor-hand  option-item" onclick="show_confirm(<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['page'];?>
)">删除</div>
                        <?php }elseif($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_veri']==2){?>
                        <div class="option-item"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/editjobfair/id/<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_id'];?>
">修改</a></div>
                        <div id = "delete-jobfair" class="cursor-hand option-item" onclick="show_confirm(<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['jobfair']->value['page'];?>
)">删除</div>
                        <?php }elseif($_smarty_tpl->tpl_vars['jobfair']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['jm_veri']==1){?>
                        已经审批不能进行操作，如需修改请联系就业中心
                        <?php }?>
                    </td>
                </tr>
                <?php endfor; else: ?>
                <tr >
                    <th class="spec" colspan="5">暂无记录</th>
                </tr>
                <?php endif; ?>
            </table>
            <?php echo smarty_function_page(array('info'=>$_smarty_tpl->tpl_vars['jobfair']->value,'web_url'=>$_smarty_tpl->tpl_vars['web_url']->value,'url'=>"/index.php/company/getmyjobfair/type/".((string)$_smarty_tpl->tpl_vars['type']->value)),$_smarty_tpl);?>

        </div>

     </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>