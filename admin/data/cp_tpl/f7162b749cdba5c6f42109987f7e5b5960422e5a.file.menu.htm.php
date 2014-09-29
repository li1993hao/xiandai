<?php /* Smarty version Smarty-3.1.14, created on 2014-09-29 20:31:10
         compiled from "admin/tpl/index/menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:1202884331541e87ce16d907-62379379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7162b749cdba5c6f42109987f7e5b5960422e5a' => 
    array (
      0 => 'admin/tpl/index/menu.htm',
      1 => 1411993235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202884331541e87ce16d907-62379379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e87ce4cf375_52308272',
  'variables' => 
  array (
    'web_url' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e87ce4cf375_52308272')) {function content_541e87ce4cf375_52308272($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/css/admin.css" type="text/css" rel="stylesheet">
<SCRIPT language=javascript>
	function expand(el)
	{
		childObj = document.getElementById("child" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
		}
		else
		{
			childObj.style.display = 'none';
		}
		return;
	}
</SCRIPT>
</HEAD>
<BODY>

<TABLE height="100%" cellSpacing=0 cellPadding=0 width=170 background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bg.jpg" border=0>
	<TR>
    	<TD vAlign=top align=middle>
      		<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        		<TR><TD height=10></TD></TR>
			</TABLE>
			<?php if ($_smarty_tpl->tpl_vars['menu']->value['recruit']==1){?>
			<!-- 招聘信息管理- -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(2) href="javascript:void(0);">招聘信息管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child2 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
                <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/getcorpmsglist" target=main>企业招聘信息管理</A></TD>
				</TR>
               <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/getinternmsglist" target=main>实习招聘信息管理</A></TD>
				</TR>
			  <!--
					<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/getbasemsglist" target=main>基层招聘信息管理</A></TD>
				</TR>
             -->
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/addcorpmsg" target=main>添加企业招聘信息</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/addinternmsg" target=main>添加实习招聘信息</A></TD>
				</TR>
                <!--
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/addbasemsg" target=main>添加基层招聘信息</A></TD>
				</TR>
				-->
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/recruit/verifyinfo" target=main>待审核的招聘信息</A></TD>
				</TR>

        		<TR height=4><TD colSpan=2></TD></TR>
			</TABLE>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['menu']->value['jobfair']==1){?>
			<!-- 招聘会管理- -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(3) href="javascript:void(0);">招聘会管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child3 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>

				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/getjobfairmsglist" target=main>招聘会信息管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/addjobfairmsg" target=main>添加招聘会信息</A></TD>
				</TR>
               	<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobfair/verifyinfo" target=main>待审核的招聘会</A></TD>
				</TR>

        		<TR height=4><TD colSpan=2></TD></TR>
			</TABLE>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['menu']->value['jobinfo']==1){?>
			<!-- --就业资讯管理 -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(4) href="javascript:void(0);">就业资讯管理 </A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child4 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
                <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/1" target=main>工作动态管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/2" target=main>通知公告管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/3" target=main>职业生涯规划管理</A></TD>
				</TR>
				 <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/4" target=main>就业指导管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/5" target=main>创业指导管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/Getemploylist" target=main>就业政策管理</A></TD>
				</TR>
                <TR height=20>
                    <TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
                    <TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/jobinfo/infolist/infotype/9" target=main>创就业明星管理</A></TD>
                </TR>
             <TR height=4><TD colSpan=2></TD></TR>
			</TABLE>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['menu']->value['studentjobinfo']==1){?>

			<!-- -学生就业通讯管理 -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(7) href="javascript:void(0);">就业活动管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child7 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>

				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getstudentjobcomsglist" target=main>学生就业通讯管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/getjobbulletinlist" target=main>就业工作简报管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getprofessionpersontalkmsglist" target=main>校友寻访信息管理</A></TD>

				</TR>
                <!--
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/Getprofessionsailmsglist" target=main>职业起航管理</A></TD>
				</TR>
				-->
				 <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/newstudentjobcomm" target=main>添加学生就业通讯</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/newjobbulletin" target=main>添加就业工作简报</A></TD>
				</TR>
               <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/newalumuns" target=main>添加校友寻访</A></TD>

				</TR>
                <!--
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/studentjobinfo/newprofessionsail" target=main>添加职业起航</A></TD>
				</TR>
                -->
				<TR height=4><TD colSpan=2></TD></TR>
			</TABLE>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['menu']->value['employerservice']==1){?>
			<!-- 用人单位服务- -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(11) href="javascript:void(0);">用人单位服务</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
			<TABLE id=child11 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
			<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Getcollegeintromsglist" target=main>院系介绍管理</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Getsourceinfomsglist" target=main>生源信息管理</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Addcollegeintro" target=main>添加院系介绍</A>
		  			</TD>
				</TR>

				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Addsourceinfo" target=main>添加生源信息</A>
		  			</TD>
				</TR>
				</TR>
			<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Getteamlist" target=main>就业专员管理</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Addemploymentteam" target=main>添加就业专员</A>
		  			</TD>
				</TR>
			<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/employerservice/Recruitment" target=main>招聘指南管理</A>
		  			</TD>
				</TR>


			</TABLE>
			<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['menu']->value['west']==1){?>


			<!-- 西部基层就业  -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(12) href="javascript:void(0);">渤海轻工集团管理</A>
					</TD>
				</TR>

        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child12 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/personlist" target=main>渤海轻工集团就业人物</A>
		  			</TD>
				</TR>
                <TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/newslist" target=main>渤海轻工集团就业动态</A>
		  			</TD>
				</TR>

        		<TR height=20>
         			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
		  			</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/policylist" target=main>渤海轻工集团就业政策</A>
		  			</TD>
				</TR>
        <!--
				<TR height=20>
         			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
		  			</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/west/addinfo" target=main>添加渤海轻工集团就业信息</A>
		  			</TD>
				</TR>
		-->
	  		</TABLE>
	  		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['menu']->value['othermanagement']==1){?>
		<!-- 其他信息管理- -->

			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(5) href="javascript:void(0);">其他信息管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child5 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
                <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Centerintroduction" target=main>中心简介管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Getsoftlist" target=main>快速通道管理</A></TD>
				</TR>
                <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/Othermanagement/Getlinklist" target=main>友情链接管理</A></TD>
				</TR>
        		<TR height=4><TD colSpan=2></TD></TR>
			</TABLE>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['menu']->value['push']==1){?>
		<!-- 其他推送管理 -->

			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(50) href="javascript:void(0);">推送信息管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child50 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
                <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/push/pushmobile" target=main>推送其他消息</A></TD>
				</TR>
        		<TR height=4><TD colSpan=2></TD></TR>
			</TABLE>
			<?php }?>
    		<?php if ($_smarty_tpl->tpl_vars['menu']->value['frontuser']==1){?>
		<!-- 前台用户管理 -->

			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(51) href="javascript:void(0);">前台用户管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child51 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
                <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/student" target=main>学生管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/Getcompanyuser" target=main>企业用户管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/companydegree" target=main>企业信用等级管理</A></TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/frontuser/xvzhi/mod/select" target=main>前台须知管理</A></TD>
				</TR>
			</TABLE>
			<?php }?>



			<?php if ($_smarty_tpl->tpl_vars['menu']->value['user']==1){?>
			<!-- 系统用户管理 -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(13) href="javascript:void(0);">系统用户管理</A>
					</TD>
				</TR>

        		<TR height=4><TD></TD></TR>
			</TABLE>
			<TABLE id=child13 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/userlist" target=main>用户管理</A>
		  			</TD>
				</TR>
                <TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/rolelist" target=main>角色管理</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/adduser" target=main>创建用户</A>
		  			</TD>
				</TR>
                <TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/user/addrole" target=main>添加角色</A>
		  			</TD>
				</TR>


	  		</TABLE>
	  		<?php }?>
	  		<?php if ($_smarty_tpl->tpl_vars['menu']->value['version']==1){?>
	  		<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(30) href="javascript:void(0);">版本更新管理</A>
					</TD>
				</TR>
        		<TR height=4><TD></TD></TR>
			</TABLE>
				<TABLE id=child30 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Getplatform" target=main>平台管理</A>
		  			</TD>
				</TR>
              	<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Addplatform" target=main>添加平台</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/Getversion" target=main>版本管理</A>
		  			</TD>
				</TR>
        		<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/version/addversion" target=main>添加新版本</A>
		  			</TD>
				</TR>
	  		</TABLE>
	  		<?php }?>
	  		<?php if ($_smarty_tpl->tpl_vars['menu']->value['stat']==1){?>
			<!-- 系统统计 -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(14) href="javascript:void(0);">系统统计</A>
					</TD>
				</TR>

        		<TR height=4><TD></TD></TR>
			</TABLE>
			<TABLE id=child14 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/stat/sitevisit" target=main>访问统计</A>
		  			</TD>
				</TR>
              	<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/stat/jobstat" target=main>招聘信息统计</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/stat/userlogin" target=main>用户登录统计</A>
		  			</TD>
				</TR>
				<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/stat/feedback" target=main>意见反馈</A>
		  			</TD>
				</TR>

	  		</TABLE>
	  		<?php }?>

	  		<?php if ($_smarty_tpl->tpl_vars['menu']->value['wechat']==1){?>
			<!-- 系统统计 -->
			<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(15) href="javascript:void(0);">微信平台</A>
					</TD>
				</TR>

        		<TR height=4><TD></TD></TR>
			</TABLE>
			<TABLE id=child15 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
        		 <TR height=20>
          			<TD align=middle width=30><IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9></TD>
          			<TD><A class=menuChild href="https://mp.weixin.qq.com/" target=main>微信推送</A></TD>
				</TR>

	  		</TABLE>
	  		<?php }?>



      		<TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=22>
          			<TD style="PADDING-LEFT: 30px" background="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_bt.jpg">
						<A class=menuParent onclick=expand(20) href="javascript:void(0);">个人信息管理</A>
					</TD>
				</TR>

        		<TR height=4><TD></TD></TR>
			</TABLE>
      		<TABLE id=child20 style="DISPLAY: none" cellSpacing=0 cellPadding=0 width=150 border=0>
        		<TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/account/changepw" target=main>修改密码</A>
		  			</TD>
				</TR>
                <TR height=20>
          			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
					</TD>
          			<TD>
		  				<A class=menuChild  href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/account/myinfo" target=main>个人资料</A>
		  			</TD>
				</TR>

        		<TR height=20>
         			<TD align=middle width=30>
		  				<IMG height=9 src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/admin/images/menu_icon.gif" width=9>
		  			</TD>
          			<TD>
		  				<A class=menuChild onClick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/manwyjob.php/account/logout" target=_top>退出系统</A>
		  			</TD>
				</TR>
	  		</TABLE>

	  	</TD>
		<TD width=1 bgColor="#d1e6f7"></TD>
	</TR>
</TABLE>
</BODY>
</HTML>
<?php }} ?>