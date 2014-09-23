<?php /* Smarty version Smarty-3.1.14, created on 2014-09-22 10:52:19
         compiled from "app/tpl/student/changepw.html" */ ?>
<?php /*%%SmartyHeaderCode:1145607831541f8ee3670625-21987309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a5deab02269e939475390137a01931b22fbff4' => 
    array (
      0 => 'app/tpl/student/changepw.html',
      1 => 1397109454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145607831541f8ee3670625-21987309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541f8ee36e3e50_70399332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541f8ee36e3e50_70399332')) {function content_541f8ee36e3e50_70399332($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('changepw', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('修改密码', null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('red', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('jobinfo_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('jobinfo_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/corpinternmsg/detail.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/detail-360.css" />
<style type="text/css">
<!--
#middle{width:1000px;min-height:800px;height:auto;margin:0 auto;padding:0 95px;}
#myinfo_left{width:760px;height:auto;float:right;display:block;margin-top:20px;}
/*标题那一排*/
#myinfo_title{	text-align:left;width:750px;display:block; height:30px;}
.myinfo-title-left{width:500px;float:left;display:block;height:30px;}
.myinfo-span-username{line-height:30px;color:#778ac6;font-size:22px;font-weight:500;}
.myinfo-title-right{width:80px;float:right;display:block;height:30px;}
.myinfo-title-right img{height:17px;margin:6px 5px 7px;float:left;display:block;}
.myinfo-span-edit{color:#778ac6;font-size:16px; height:17px;line-height:30px;height:30px;float:left;display:block;}
/*标题那一排end*/

.content-info{margin:10px 0 0 0;font-size:15px;line-height:20px;color:#707070;}
.input-title{width:100px;text-align:right; margin-left: 220px;}
.inputpw{border:1px solid #778ac6; height:20px; width:120px;}
.submit-pw{height:20px; width:120px;background:#778ac6;color:#FFF;cursor:pointer;}
-->
</style>
<script type="text/javascript">
	
</script>    
    
    <div id="middle">
    <?php $_smarty_tpl->tpl_vars['pageid'] = new Smarty_variable(3, null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ('student/student_menu.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
    	<div id="myinfo_left">        
    	   <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/student/changepw">
    	  
    	   		<div class="content-info">
    	   			<span class="input-title">原密码：</span><input class="inputpw" type="password" name="old" size="15" placeholder="原始密码" />
    	   		</div>
    	   		<div class="content-info">
    	   			<span class="input-title">新密码：</span><input class="inputpw" type="password" name="new" size="15" placeholder="新密码" />
    	   		</div>
    	   		<div class="content-info">
    	   			<span class="input-title">重复新密码：</span><input class="inputpw" type="password" name="renew" size="15" placeholder="重复输入新密码" />
    	   		</div>
    	   		<div class="content-info">
    	   			<span class="input-title">&nbsp;</span><input class="submit-pw" type="submit" value="更改"><span class="result-info" ><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</span>
    	   		</div>
            </form>
		</div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>