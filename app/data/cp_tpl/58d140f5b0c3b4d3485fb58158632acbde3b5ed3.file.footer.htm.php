<?php /* Smarty version Smarty-3.1.14, created on 2014-10-12 16:41:01
         compiled from "app/tpl/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:1406297439542a4f872360d7-52740545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d140f5b0c3b4d3485fb58158632acbde3b5ed3' => 
    array (
      0 => 'app/tpl/footer.htm',
      1 => 1413103106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406297439542a4f872360d7-52740545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542a4f87256a34_69272703',
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a4f87256a34_69272703')) {function content_542a4f87256a34_69272703($_smarty_tpl) {?><?php if (!is_callable('smarty_function_visitelog')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.visitelog.php';
if (!is_callable('smarty_function_getapp')) include '/Users/haoli/Desktop/www/xiandai/been/View/plugins/function.getapp.php';
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
            		<li>用人单位服务</li>
            		<li>邮箱:xxxx@163.com</li>
            		<li>电话:022-12345678</li>
            		<li>传真:022-12345678</li>
            		<li>就业政策咨询</li>
            		<li>电话:022-12345678</li>
            		<li>传真:022-12345678</li>
            		<li>职业生涯辅导</li>
              		<li>电话:022-12345678</li>
            		<li>传真:022-12345678</li>
            	</ul>
            </div>
            <div>
            	<ul>
            		<li>友情链接</li>
                    <li><a href="http://www.xdxy.com.cn/">天津现代职业技术学院</a></li>
                    <li><a href="http://www.zhaopin.com/">智联招聘网</a></li>
                    <li><a href="http://www.yingjiesheng.com/">应届生网</a></li>
                    <li><a href="http://www.dajie.com/home">大街网</a></li>
                    <li><a href="http://www.chinahr.com/">中华英才网</a></li>
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