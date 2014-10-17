<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 10:05:43
         compiled from "app\tpl\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:26879544079776cbc88-71710491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a632fc47cf1e2044df95cb8d0efab2d8e9cd9b21' => 
    array (
      0 => 'app\\tpl\\footer.htm',
      1 => 1413369785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26879544079776cbc88-71710491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_544079777055e5_25236291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544079777055e5_25236291')) {function content_544079777055e5_25236291($_smarty_tpl) {?><?php if (!is_callable('smarty_function_visitelog')) include 'E:\\wamp\\www\\xd\\xiandai\\been/View/plugins\\function.visitelog.php';
if (!is_callable('smarty_function_getapp')) include 'E:\\wamp\\www\\xd\\xiandai\\been/View/plugins\\function.getapp.php';
?>  <div class="footer" id="footer">
            <div>
                <ul>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/logo.png"></img>
                    </li>
                    <li>天津现代职业技术学院就业指导中心</li>
                    <li>版权所有</li>
                    <li>今日访问量：<?php echo smarty_function_visitelog(array('info'=>"today"),$_smarty_tpl);?>
</li>
                    <li>总访问量：<?php echo smarty_function_visitelog(array('info'=>"total"),$_smarty_tpl);?>
</li>
                    <li>自2013年9月30日起计数</li>
                </ul>

            </div>
            <div>
            	<ul>
            		<li>服务指南</li>
            		<li>电话:022-28193292</li>
            		<li>传真:022-28343733</li>
            	</ul>
            </div>
            <div>
            	<ul>
            		<li>友情链接</li>
                    <li><a href="http://www.xdxy.com.cn/">天津现代职业技术学院</a></li>
                    <li><a href="http://www.tjbys.com.cn/">天津市高校毕业生就业信息网</a></li>
                    <li><a href="http://www.zhaopin.com/">智联招聘网</a></li>
                    <li><a href="http://www.chinahr.com/">中华英才网</a></li>
                    <li><a href="http://www.yingjiesheng.com/">应届生网</a></li>
                    <li><a href="http://www.ncss.org.cn/">新职业</a></li>
                    <li><a href="http://www.dajie.com/home">大街网</a></li>

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/friendlink/Getlink">更多>></a></li>
            	</ul>
            </div>
            <div>
            	<ul>
            		<li>客户端下载</li>
            		<li>
            			<div>
            				<div><a href="<?php echo smarty_function_getapp(array('info'=>"android"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/android.png"></img></a></div>
            				<div>安卓客户端</div>
            			</div>
             			<div>
             				<div><a href="<?php echo smarty_function_getapp(array('info'=>"iphone"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/ios.png"></img></a></div>
            				<div>ios客户端</div>
            			</div>
            		</li>
            	</ul>
            </div>

        </div>
    </div>
<?php }} ?>