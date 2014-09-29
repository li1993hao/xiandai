<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 15:28:12
         compiled from "app/tpl/company/myinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:13099529515429090a18a265-24063766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a7f21a917e4cb8fa2be1951462d7aa96058aad' => 
    array (
      0 => 'app/tpl/company/myinfo.html',
      1 => 1411975690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13099529515429090a18a265-24063766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5429090a3ebae5_83394774',
  'variables' => 
  array (
    'web_url' => 0,
    'detail' => 0,
    'corplist' => 0,
    'detailaction' => 0,
    'jobfairlist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5429090a3ebae5_83394774')) {function content_5429090a3ebae5_83394774($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/haoli/Desktop/www/xiandai/been/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE HTML>
<html>
<head>
    <meta id="screen-view" name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/reset.css?v=2.0" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/headAndfoot.css" />
    <title>个人中心-我得信息</title>
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
<!--
#middle{width:990px;min-height:860px;height:auto;margin:0 auto;}
#myinfo_left{width:460px;height:auto;float:left;display:block;margin-top:10px;}
/*标题那一排*/
#myinfo_title{text-align:left;width:660px;display:block;background:#e2e2e2; }
.myinfo-title-left{width:550px;float:left;display:block;}
.myinfo-span-username{display:block;height:34px;float:left;line-height:30px;color:#788ac6;font-size:22px;font-weight:500;/*border-bottom:2px solid #A56B8A;*/}
.myinfo-span-state{color:#788ac6;font-size:13px;margin-right:10px;}
.myinfo-company-state{color:#7BAC87;font-weight:500;font-size:20px;
	margin-left:20px;margin-right: 20px;}
.myinfo-title-right{width:80px;float:right;display:block;height:30px;}
.myinfo-title-right img{height: 22px;padding:6px 6px 6px 6px;margin-right: 15px;
	float:right;display:block;background: #09c6b2;}
/*.myinfo-span-edit{color:#A56B8A;font-size:16px; height:17px;line-height:30px;height:30px;float:left;display:block;}*/
/*标题那一排end*/

#content-left{ margin-top:20px; margin-right:10px; width:250px; float:left;}
#content-middle{margin-top:20px;margin-right:10px; width:290px; float:left;}
#content-right{margin-top:20px;	width:200px; max-height:150px; float:left;}
#content-right img{max-height:200px;max-width:200px;}
#content-down{width:750px;float:left;}
.content-info{margin:10px 0 0 0;font-size:15px;line-height:20px;color:#707070;}
.content-info-title{font-weight:700;}

/*===*/
/*资质认证 */
.content-qualification{width:723px;height:auto;}
.content-qualification-title{width:150px;/*color:#446976;*/font-size:18px;margin-top:20px;	}
.content-qualification-title-line{width: 100px;margin: -10px 0 0 0;padding-left: 100px;}
.content-qualification-item{float:left;	max-width:170px;height:100px;margin:10px 10px 0 0;}
/*资质认证 end */

.content-background1{background:#677bc0;}
.content-background2{background: #677bc0;}
.content-background3{background:#677bc0;}
.content-down-company{width:760px;height:40px;margin-top:20px;}
.content-down-company-title{margin-right:2px;width:30%;height:30px;float:left;font-size:18px;line-height:30px;cursor:pointer;text-align:center;padding:5px 10px;color:white;}
.content-down-company-title:hover{color:white;}
.cdct-selected1{background:url(../../common/app/images/companyinfo_xuanxiang_coin.png) 0 0 no-repeat #f0c279; background-position:bottom center;}
.cdct-selected2{background:url(../../common/app/images/companyinfo_xuanxiang_coin.png) 0 0 no-repeat #f0c279; background-position:bottom center;}
.cdct-selected3{background:url(../../common/app/images/companyinfo_xuanxiang_coin.png) 0 0 no-repeat #f0c279; background-position:bottom center;}
/*文章列表*/
.jobinfo-textitem{height: auto;width: 720px;display: block;padding-bottom: 5px;border-bottom: 1px dashed #b6b6b6;color:#58587A;}
.phone-jobinfo-texitem-a{height: 30px;width:720px;margin-top: 12px; }
#jobinfo-container2 a{color:#677BC0;}
#jobinfo-container3 a{color:#677BC0;}
.jobinfo-texitem-time{float:left;height:20px;}
.jobinfo-textitem-p{clear:both;}
.jobinfo-textitem-read{width:720px;height:20px;}
.work_read_left{float:left;height:20px;width:300px;margin-left:30px;}
.work_read_right{float: right;height:20px;color:#C69AB1;}
.jobinfo-container-more{height:30px;margin-top:12px;}
.jobinfo-container-more p{float:right; font-size:1em;}

.content-down-company-content{width:720px;height:auto;}
.company-introduce{width:720px;height:auto;}
.company-introduce p{font-size:12px;}
.jobinfo-container{min-height:400px;background:#fff;float:left;	padding: 15px;	width:720px;}
.notice-hide{display:none;}
-->
</style>
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
</head>
<?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
    <div id="middle">
    <?php $_smarty_tpl->tpl_vars['pageid'] = new Smarty_variable(1, null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ('company/left_function.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<div id="myinfo_left">
           <div id="myinfo_title">
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
    					<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/company_info_edit.png" />
    					<!--<span class="myinfo-span-edit">编辑</span>-->
    				</a>
    			</div>
    			<div style="clear:both;"></div>
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
    				<span class = "content-info-title">邮箱：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['comEmail'];?>

				</div>
				 <div class="content-info">
    				<span class = "content-info-title">所在地：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['location'];?>

				</div>
			</div>

            <div id="content-right">
    			<img  src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['picUrl'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" />
    		</div>

    		<div id="content-down">
				<div class="content-info">
    				<span class = "content-info-title">详细地址：</span><?php echo $_smarty_tpl->tpl_vars['detail']->value['address'];?>

				</div>
				<div class="content-qualification">
					<div class="content-qualification-title content-info"><span class = "content-info-title">资质证明</span></div>
					<img class="content-qualification-title-line" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/company_info_line.png"/>
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
	                    	<a target="_blank" class="a-up-news" title="<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/<?php echo $_smarty_tpl->tpl_vars['detailaction']->value;?>
/id/<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_id'];?>
">
	                        	[顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'],35,'…',true);?>

	                        </a>
	                    <?php }else{ ?>
	                    	<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_name'];?>
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
	                    <div class="jobinfo-texitem-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_date'],"%Y-%m-%d");?>
</div>
                        	<div class="work_read_left">阅读：<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_read'];?>
&nbsp;&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['corplist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['corpinfo']['index']]['cim_share'];?>
</div>
                        	<div class="work_read_right"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
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
		                    	<a target="_blank" class="a-up-news" title="<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">
		                        	[顶]<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'],35,'…',true);?>

		                        </a>
		                    <?php }else{ ?>
		                    	<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/detail/id/<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_id'];?>
">
		                        	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_name'],35,'…',true);?>

		                        </a>
		                    <?php }?>
		                    </div>

		                    </h3>
		                     <div class="jobinfo-textitem-read">
		                    	<span class="jobinfo-texitem-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_date'],"%Y-%m-%d");?>
</span>
	                        	<div class="work_read_left">阅读：<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_read'];?>
&nbsp;&nbsp;分享：<?php echo $_smarty_tpl->tpl_vars['jobfairlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jfm']['index']]['jm_share'];?>
</div>
	                        	<div class="work_read_right"><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
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

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header.js"></script>
</body>
</html>

<?php }} ?>