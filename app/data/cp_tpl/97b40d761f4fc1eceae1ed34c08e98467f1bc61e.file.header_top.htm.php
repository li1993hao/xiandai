<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:47:29
         compiled from "app/tpl/header_top.htm" */ ?>
<?php /*%%SmartyHeaderCode:93976466541e4a51d0b807-82338168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b40d761f4fc1eceae1ed34c08e98467f1bc61e' => 
    array (
      0 => 'app/tpl/header_top.htm',
      1 => 1401159564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93976466541e4a51d0b807-82338168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    '__userinfo__' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4a51dd42d8_08644151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4a51dd42d8_08644151')) {function content_541e4a51dd42d8_08644151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/header-top.css" />
<script type="text/javascript">var web_url="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
"; var web_php_url = "<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php";</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/header_top.js?v=2.0" type="text/javascript"></script>
<div class="login-container">
	<div class="l-c-content">
		<div class="l-c-content-left">
			<div class="login-list-item">
				<span class="input-title">账号:</span>
				<input class="re_input" id="username" type="text" name="username" placeholder="学号或邮箱"/>
			</div>
			<div class="login-list-item">
				<span class="input-title">密码:</span>
				<input class="re_input" id="password" type="password" name="password" />
			</div>
			<div class="login-list-item">
				<span class="input-title">&nbsp;</span>
				<input id="login-submit" type="button" class="submit" />
			</div>
			<div class="login-list-item">
				<span class="input-title">&nbsp;</span>
				<span id="login-result" class="input-title"></span>
			</div>
		</div>

		<div class="l-c-content-right">

			<p>>学生可以使用学号登录,初试密码为身份证后六位</p>
			<p>>企业可以使用您的注册邮箱进行登录</p>
			<p>>如果忘记密码请联系天津外国语大学就业指导中心</p>
		</div>
	</div>
</div>
<div id="header-top-container">
	<div class="big-logo">
		<div class="big-logo-containter">
			<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/logo_index.png"class="img-responsive"></img></a>
			<div class="big-logo-right">
				<div class="header-search-container">
					 <div id="header-search">
				    	<form id="headerform"   target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/getsearchlist" >
							<input name="content" type="text" value="搜索"  id="number"/>
							<button><name="submit" id="button2" type="submit" value="搜索" /></button>
						</form>
	       			</div>
	       		</div>
       			<div class="top-user" id = "top_user" <?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>title="<?php echo $_smarty_tpl->tpl_vars['__userinfo__']->value['name'];?>
"<?php }?>>
					<ul class="top-user-login">
						<?php if (isset($_smarty_tpl->tpl_vars['__userinfo__']->value)){?>
						<li id="top-user-name" class="top-user-login-item">
							<a href="#">
								<?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']=="0"){?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/student-logo.png" /><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['__userinfo__']->value['name'],15);?>
</span>
								<?php }elseif($_smarty_tpl->tpl_vars['__userinfo__']->value['type']=="1"){?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/company-logo.png" /><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['__userinfo__']->value['name'],15);?>
</span>
								<?php }else{ ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/teacher-logo.png" /><span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['__userinfo__']->value['name'],15);?>
</span>
								<?php }?>
							</a>
							<div id="user-menu">
			                	<ul>
			                		<?php if ($_smarty_tpl->tpl_vars['__userinfo__']->value['type']=="0"){?>
			                    	<li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/myinfo">个人中心</a> </li>
			                    	<?php }elseif($_smarty_tpl->tpl_vars['__userinfo__']->value['type']=="1"){?>
			                    	<li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/company/myinfo">个人中心 </a> </li>
			                    	<?php }else{ ?>
			                    	<li> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/teacher/myinfo">个人中心</a> </li>
			                    	<?php }?>
			                    	<li> <a target="_self" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/account/logout">退出</a> </li>
			                    </ul>
		               		</div>
						</li>
						<?php }else{ ?>
						<li class="top-user-login-item">
							<a id="user-login-btn" href="#">
								<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/login-logo.png" /><span>用户登录</span>
							</a>
						</li>
						<li class="top-user-login-item" style="">
							 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Account/Register">
							 	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/register-logo.png"/><span>企业注册</span>
							 </a>
						</li>
						<?php }?>
					</ul>
				</div>
				<div id="choose">
		           	<ul class="menu">
		                <li  class="first" >
		                	<span class="first-btn">
		                		学&nbsp;生&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/top_btn_noselected.png" alt="top_btn_noselected.png" />
		                	</span>

		                	<div id="student">
			                	<ul>
			                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/index/type/1">企业招聘信息</a></li>
			                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobfairmsg/Index">招聘会信息</a></li>
			                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/calendar">招聘日历</a></li>
			                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/index/type/2">实习招聘信息</a></li>
			                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/index/type/3">基层招聘信息</a></li>
			                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobinfo/plan">职业生涯规划</a></li>
			                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Send/index">派遣服务</a></li>
			                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentpolicy/Index">就业政策</a></li>
			                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobinfo/search">求职指导</a></li>
			                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobinfo/start">创业指导</a></li>
			                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Corpinternmsg/jiuyexvzhi">就业须知</a></li>
			                      
			                    </ul>
		               		</div>
		                </li>
		                <li class="second">
		                    <span class="second-btn">
		                    	校&nbsp;友&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/top_btn_noselected.png" alt="top_btn_noselected.png" />
		                    </span>
		                    <div  id="school_f">
				               <ul>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobinfo/news">就业动态</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Jobinfo/act">通知公告</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Activityjobbulletin/index">天外职刊</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Professionpersontalk/index">校友寻访</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Professionsail/index">职业起航</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/West/index">基层就业</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Leavelist/daylqd">档案遗留清单</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Leavelist/xwzylqd">毕业证、学位证遗留清单</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Leavelist/bdzylqd">报到证遗留清单</a></li>
				                   
				                  
				               </ul>
		           			</div>
		                </li>

		                <li class="third">
		                    <span class="third-btn">
		                    	企&nbsp;业&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/index/top_btn_noselected.png" alt="top_btn_noselected.png" />
		                    </span>
		                    <div id="employer">
				               <ul>
				               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Center/index">中心简介</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Collegeintroduction/index">院系介绍</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Sourceinformation/index">生源信息</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Recruitment/index">招聘指南</a></li>
				                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/Employmentteam/index">就业小组</a></li>
				                   

				               </ul>
		           			</div>
		                </li>
		            </ul>
        		</div>
			</div>
		</div>
	</div>
</div><?php }} ?>