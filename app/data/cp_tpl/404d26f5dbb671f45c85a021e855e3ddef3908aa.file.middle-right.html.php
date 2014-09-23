<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:48:26
         compiled from "app/tpl/middle-right.html" */ ?>
<?php /*%%SmartyHeaderCode:2064478935541e4a8a4cf5b4-01668905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404d26f5dbb671f45c85a021e855e3ddef3908aa' => 
    array (
      0 => 'app/tpl/middle-right.html',
      1 => 1397188814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064478935541e4a8a4cf5b4-01668905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'xinwenfenxiang' => 0,
    'color' => 0,
    'xinxifenxiang' => 0,
    'xinwensousuo' => 0,
    'xinxishaixuan' => 0,
    'searchaction' => 0,
    'tuijianzhaopinhui' => 0,
    'zhaopinxinxi' => 0,
    'redianpaihang' => 0,
    'tongzhigonggao' => 0,
    'dianxingrenwu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4a8a5cade1_08719635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4a8a5cade1_08719635')) {function content_541e4a8a5cade1_08719635($_smarty_tpl) {?><?php if (!is_callable('smarty_function_getrightrecjob')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.getrightrecjob.php';
if (!is_callable('smarty_function_getrightcorpmsg')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.getrightcorpmsg.php';
if (!is_callable('smarty_function_getrightjobinfo')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.getrightjobinfo.php';
if (!is_callable('smarty_function_getrighttypical')) include '/Users/haoli/Desktop/www/wyjob/been/View/plugins/function.getrighttypical.php';
?> <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/middle-right.css" />
 <div id="middle_right">

 	<!-- 新闻分享 -->
 	<?php if (isset($_smarty_tpl->tpl_vars['xinwenfenxiang']->value)){?>
	 	<div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>">
			<p style="background:#ffd189">
				<img  src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/share.png" alt="share" />
			</p>
		  	<span>新闻分享</span><em></em>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('right_share.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	<!-- 信息分享-->
	<?php if (isset($_smarty_tpl->tpl_vars['xinxifenxiang']->value)){?>

	     <div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" >
	        <p style="background:#ffd189;">
	        	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/corpinternmsg/share.png" alt="employ" />
	        </p>
	        <span>信息分享</span>
	     </div>
		 <?php echo $_smarty_tpl->getSubTemplate ('right_share.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>

    <!-- 新闻搜索 
    <?php if (isset($_smarty_tpl->tpl_vars['xinwensousuo']->value)){?>
    	<div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>">
        	<p style="background:#ffd189;"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/xinwensousuo.png" alt="employ" /></p>
        	<span>新闻搜索</span>
        </div>
        <div class="m-r-main">
       		<form id="form1"   target="_self" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/getsearchlist" >
        		<br/>
        		<div class="keywords-container">
        			<div class="keywords-label">关键字:</div>
  					<div class="keywords-input-wrap" ><input type="text" name="content" class="input-keyword"/></div>
        		</div>

            	<div class="btn-container">
                	<input type="submit" value="搜索" class="btn-search middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" />
            	</div>
			</form>
		</div>
      <?php }?>
	-->
      <!-- 信息筛选 
      <?php if (isset($_smarty_tpl->tpl_vars['xinxishaixuan']->value)){?>
      <div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>">
        	<p style="background:#ffd189;"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/corpinternmsg/employ.png" alt="employ" /></p>
        	<span>信息筛选</span>
      </div>
      <div class="m-r-main">
      	  <form id="form1"   target="_self" name="form1" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['searchaction']->value;?>
" >
            <br/>
            <div class="keywords-container">
            	<div class="keywords-label">关键字:</div>
            	<div class="keywords-input-wrap" >
            	<input type="text" name="content" class="input-keyword"/>
            	</div>
        	</div>
            <div class="btn-container">
                <input type="submit" value="搜索" class="btn-search middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" />
            </div>
		  </form>
     </div>
     <?php }?>
	-->

	<!-- 推荐招聘会 -->
	<?php if (isset($_smarty_tpl->tpl_vars['tuijianzhaopinhui']->value)){?>

	    <div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" >
	        <p style="background:#ffd189">
	        	<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/stujobinfo/employ1.png" alt="employ" />
	        </p>
	        <span>推荐招聘会</span>
	        <em><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobfairmsg/index"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/stujobinfo/right1.png" alt="right1" /></a></em>
	    </div>
	    <div class="m-r-main">
			<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?>
	    	<?php echo smarty_function_getrightrecjob(array('color'=>$_smarty_tpl->tpl_vars['color']->value),$_smarty_tpl);?>

	    	<?php }else{ ?>
	    	<?php echo smarty_function_getrightrecjob(array(),$_smarty_tpl);?>

	    	<?php }?>
	    </div>
    <?php }?>

    <!-- 招聘信息 -->
    <?php if (isset($_smarty_tpl->tpl_vars['zhaopinxinxi']->value)){?>
    <div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" >
    	<p style="background:#ffd189;">
    		<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/corpinternmsg/broadcast.png" alt="employ" />
    	</p>
    	<span>招聘信息</span>
        <em>
        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/corpinternmsg/corpindex">
        		<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/stujobinfo/right1.png" alt="right1" />
        	</a>
        </em>
    </div>
    <div class="m-r-main">
    	<?php echo smarty_function_getrightcorpmsg(array(),$_smarty_tpl);?>

   	</div>
   	<?php }?>


   	<!-- 热点排行 -->
   	<?php if (isset($_smarty_tpl->tpl_vars['redianpaihang']->value)){?>

   	<div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" >
    	<p style="background:#ffd189;">
    		<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/jobinfo/lanse2.png" alt="employ" />
    	</p>
    	<span>热点排行</span>
    	<em>
    		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/news">
    			<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/jobinfo/lansejiantou.png" alt="right1" />
    		</a>
    	</em>
    </div>
    <div class="m-r-main">
       <?php echo smarty_function_getrightjobinfo(array(),$_smarty_tpl);?>

    </div>
    <?php }?>

 <!-- 写到这里了-->
      <!-- 通知公告 -->
      <?php if (isset($_smarty_tpl->tpl_vars['tongzhigonggao']->value)){?>
      <div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" >
      	<p style="background:#ffd189;"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/jobinfo/lanse2.png" alt="employ" /></p>
      	<span>通知公告</span>
      	<em>
      		<a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/jobinfo/act">
      			<img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/jobinfo/lansejiantou.png" alt="right1" />
      		</a>
      	</em>
      </div>
      <div class="m-r-main">
      		<?php echo smarty_function_getrightjobinfo(array('type'=>2),$_smarty_tpl);?>

     </div>
     <?php }?>
<!-- 典型人物 -->
<?php if (isset($_smarty_tpl->tpl_vars['dianxingrenwu']->value)){?>
	<div class="m-r-title middle-right-<?php if (isset($_smarty_tpl->tpl_vars['color']->value)){?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" >
		<p style="background:#ffd189;"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/dianxingrenwu_coin.png" alt="head" /></p>
		<span>典型人物</span>
		<em><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/west/person"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/stujobinfo/right1.png" alt="right" /></a></em>
	</div>
	<div id="dxrw" class="m-r-main">

		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/west/human.css" />
		<ul>
			<?php echo smarty_function_getrighttypical(array(),$_smarty_tpl);?>

	 	</ul>
	</div>
<?php }?>
<!-- js -->
      <script type="text/javascript">
			$(function() {
				$("#form1").submit( function () {
					if($("#number").val() == ""){
 			//			alert("123");
 						document.getElementById("button").disabled=true;
 					return false;
 				}
 				return true;
			});
		});
		</script>
</div><?php }} ?>