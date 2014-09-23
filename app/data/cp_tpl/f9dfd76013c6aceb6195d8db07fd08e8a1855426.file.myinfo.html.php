<?php /* Smarty version Smarty-3.1.14, created on 2014-09-22 10:51:53
         compiled from "app/tpl/student/myinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1397911454541f8ec9314911-52439448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9dfd76013c6aceb6195d8db07fd08e8a1855426' => 
    array (
      0 => 'app/tpl/student/myinfo.html',
      1 => 1397109454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1397911454541f8ec9314911-52439448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'studetail' => 0,
    'web_url' => 0,
    'stuindustry' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541f8ec9447436_35581629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541f8ec9447436_35581629')) {function content_541f8ec9447436_35581629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/haoli/Desktop/www/wyjob/been/Smarty/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('myinfo', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('我的信息', null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable("我的信息", null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('red', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('jobinfo_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('jobinfo_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
<!--
#middle{width:1000px;min-height:860px;height:auto;margin:0 auto;padding:0 95px;}
#myinfo_left{width:760px;height:auto;float:left;display:block;margin-top:10px;}
/*标题那一排*/
#myinfo_title{text-align:left;width:760px;display:block;background:#e2e2e2;}
.myinfo-title-left{width:550px;float:left;display:block;}
.myinfo-span-username{display:block;height:34px;float:left;line-height:30px;color:#788ac6;font-size:22px;font-weight:500;/*border-bottom:2px solid #A56B8A;*/}
.myinfo-span-state{color:#788ac6;font-size:13px;margin-right:10px;}
.myinfo-company-state{color:#7BAC87;font-weight:500;font-size:20px;
	margin-left:20px;margin-right: 20px;}
.myinfo-title-right{width:80px;float:right;display:block;height:30px;}
.myinfo-title-right img{height: 22px;padding:6px 6px 6px 6px;margin-right: 15px;
	float:right;display:block;background: #09c6b2;}
/*.myinfo-span-edit{color:#788ac6;font-size:16px; height:17px;line-height:30px;height:30px;float:left;display:block;}*/
/*标题那一排end*/

#content-left{ margin-top:20px; margin-right:10px; width:250px; float:left;}
#content-middle{margin-top:20px;margin-right:10px; width:290px; float:left;}
#content-right{margin-top:20px;	width:200px; max-height:150px; float:left;}
#content-right img{max-height:200px;max-width:200px;}
#content-down{width:750px;float:left;}
.content-info{margin:10px 0 0 0;font-size:15px;line-height:20px;color:#707070;}
.content-info-title{font-weight:700;}
-->
</style>
    
    <div id="middle">
        <?php $_smarty_tpl->tpl_vars['pageid'] = new Smarty_variable(1, null, 0);?>
     	<?php echo $_smarty_tpl->getSubTemplate ('student/student_menu.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<div id="myinfo_left">
           <div id="myinfo_title">
           		<div class="myinfo-title-left">
           			<span class="myinfo-span-username"><?php echo $_smarty_tpl->tpl_vars['studetail']->value['name'];?>
</span>
           		</div>
    			<div class="myinfo-title-right">
    				<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/modifyinfo">
    					<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/company_info_edit.png" />
    					<!--<span class="myinfo-span-edit">编辑</span>-->
    				</a>
    			</div>
    			
    			    			
    	   </div>
    	   <div id="content-left">
    			<div class="content-info">
    				性别：<?php if ($_smarty_tpl->tpl_vars['studetail']->value['gender']==0){?>
    						男
    					<?php }else{ ?>
    						女
    					<?php }?>	
				</div>
				<div class="content-info">
    				学历：<?php if ($_smarty_tpl->tpl_vars['studetail']->value['education']==0){?>
    						本科
    					<?php }elseif($_smarty_tpl->tpl_vars['studetail']->value['education']==1){?>
    						硕士
    					<?php }else{ ?>
    						博士
    					<?php }?>	
				</div>
				<div class="content-info">
    				年级：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['grade'];?>

				</div>
				<div class="content-info">
    				生源地：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['source'];?>

				</div>
				 <div class="content-info">
    				政治面貌：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['politic'];?>

				</div>
    		</div>
            
			<div id="content-middle">
    			<div class="content-info">
    				出生年月：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['studetail']->value['birth'],10,'');?>

				</div>
				<div class="content-info">
    				学院：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['college'];?>

				</div>
				<div class="content-info">
    				专业：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['pro'];?>

				</div>
				<div class="content-info">
    				籍贯：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['home'];?>

				</div>
				<div class="content-info">
					<?php if ($_smarty_tpl->tpl_vars['studetail']->value['filelink']!=''){?>
    				简历：<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/files/<?php echo $_smarty_tpl->tpl_vars['studetail']->value['filelink'];?>
"><?php echo $_smarty_tpl->tpl_vars['studetail']->value['filename'];?>
</a>
					<?php }else{ ?>
					简历：还未上传！
					<?php }?>
				</div>
			</div>
           
            <div id="content-right">
    			<img style="" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/upload/images/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['studetail']->value['piclink'])===null||$tmp==='' ? "noimg.jpg" : $tmp);?>
" />
    			
    		</div>
    		
    		<div id="content-down">
				<div class="content-info" >
    				感兴趣的领域：
    					<?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stuindustry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
    						<?php echo $_smarty_tpl->tpl_vars['si']->value['ind_type'];?>
&nbsp;
    					<?php } ?>
				</div>
				<div class="content-info">
    				个人简介：<?php echo $_smarty_tpl->tpl_vars['studetail']->value['intro'];?>

				</div>
    		</div>
          </div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>