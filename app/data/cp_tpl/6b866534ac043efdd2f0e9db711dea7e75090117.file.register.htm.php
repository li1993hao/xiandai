<?php /* Smarty version Smarty-3.1.14, created on 2014-09-25 18:08:15
         compiled from "app\tpl\account\register.htm" */ ?>
<?php /*%%SmartyHeaderCode:277035423e98f311fe6-86878706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b866534ac043efdd2f0e9db711dea7e75090117' => 
    array (
      0 => 'app\\tpl\\account\\register.htm',
      1 => 1411639452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277035423e98f311fe6-86878706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
    'reg_flag' => 0,
    'dwxzList' => 0,
    'hyList' => 0,
    'form_userinfo' => 0,
    'provinceList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5423e98f493fc5_00167763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423e98f493fc5_00167763')) {function content_5423e98f493fc5_00167763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/index/index.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/account/register.css"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/account/account.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/account/company_register.js"></script>

<!--导航栏-->
		<!-- <form id="myform" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/account/dataCheck">
			<input type="text" name="user_name"/>
			<input type="text" name="pswd"/>
			<input type="file" name="file_upload"/>
			<input type="submit" value="注册" id="mysub" />
		</form> -->
		
        <div class="nav">
        		<ul>
        			<li><a class="nav-a"href=#>首页/</a></li><li><a href=#>企业注册</a></li>
        		</ul>
        </div>

		<div class="register_middle">
			<?php echo $_smarty_tpl->tpl_vars['reg_flag']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['reg_flag']->value=="succeed"){?>
            	恭喜您！注册成功！等待系统管理员审核！
            <?php }else{ ?>
				<form id="form-register" name="form_register" method="post" enctype="multipart/form-data"  action="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/index.php/account/register">

	    		<div class="form-register-item">
					<span class="form-register-item-title"></span>
					<span id="register-result" class="form-register-item-warn" style= "width:300px;" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
	    		<div class="form-register-item">
					<span class="form-register-item-title">登陆邮箱:</span>
					<input class="form-register-item-input e-mail not-empty" id="form-email" type="text" name="form_email" value="" error_info="请检查注册邮箱！" placeholder="请输入注册邮箱" />
					<span class="form-register-item-warn"  init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span class="form-register-item-title">公司名称:</span>
					<input class="form-register-item-input not-empty" error_info="企业名称不能为空！"  id="form-name"  type="text" name="form_name" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span class="form-register-item-title">密码:</span>
					<input class="form-register-item-input pw not-empty" id="form-password" type="password" error_info="密码不能为空" name="form_password"  />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span class="form-register-item-title">重复密码:</span>
					<input class="form-register-item-input re-pw not-empty" id="form-password-second" type="password" error_info="密码不能为空" name="form_password_second"  />
					<span class="form-register-item-warn zz_mima" init-data="" ></span>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item form-register-item-onerow">
					<span class="form-register-item-title">单位性质:</span>
					<select class="form-register-item-input re-pw not-empty" id="form-dwxz" name="form_dwxz" error_info="请选择单位性质！">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['name'] = 'dl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dwxzList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['dwxzList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['dwxzList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['name'];?>
</option>
						<?php endfor; endif; ?>
					</select>
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item form-register-item-onerow">
					<span class="form-register-item-title">所属行业:</span>
					<select class="form-register-item-input re-pw not-empty" id="form-hy" name="form_hy" error_info="请选择所属行业！">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['name'] = 'dl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hyList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dl']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['hyList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['hyList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dl']['index']]['name'];?>
</option>
						<?php endfor; endif; ?>
					</select>
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item">
					<span class="form-register-item-title">注册资本:</span>
					<input class="form-register-item-input not-empty" id="form-zczb" type="text" name="form_zczb" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_zczb'])===null||$tmp==='' ? '' : $tmp);?>
" error_info="请输入注册资本！" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item">
					<span class="form-register-item-title">邮政编码:</span>
					<input class="form-register-item-input not-empty" id="form-yzbm" type="text" name="form_yzbm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_yzbm'])===null||$tmp==='' ? '' : $tmp);?>
" error_info="请输入邮政编码！" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item form-register-item-onerow">
					<span class="form-register-item-title">所在地:</span>
					
					<select class="form-register-item-input-dz not-empty" id="form-sheng" name="form_sheng" error_info="请选择所在地！">
						<option value="0" selected="selected" disabled="disabled"  >选择省份</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['name'] = 'pl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['provinceList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pl']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['provinceList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['provinceList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pl']['index']]['area_name'];?>
</option>
						<?php endfor; endif; ?>
					</select>
					<select class="form-register-item-input-dz not-empty" id="form-shi" name="form_shi" error_info="请选择所在地！">
						<option value="0" selected="selected" disabled="disabled" >选择城市</option>
						
					</select>
					<select class="form-register-item-input-dz not-empty" id="form-xian" name="form_xian" error_info="请选择所在地！">
						<option value="0" selected="selected" disabled="disabled" >选择县区</option>
					</select>
					
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item">
					<span class="form-register-item-title">详细地址:</span>
					<input class="form-register-item-input not-empty" id="form-xxdz" type="text" name="form_xxdz" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_xxdz'])===null||$tmp==='' ? '' : $tmp);?>
" error_info="请输入详细地址！" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span class="form-register-item-title">联系人:</span>
					<input class="form-register-item-input not-empty" id="form-lxr" type="text" name="form_lxr" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_lxr'])===null||$tmp==='' ? '' : $tmp);?>
" error_info="填写联系人！" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item">
					<span class="form-register-item-title">固定电话:</span>
					<input class="form-register-item-input not-empty" id="form-gddh" type="text" name="form_gddh" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_gddh'])===null||$tmp==='' ? '' : $tmp);?>
" error_info="请填写固定电话！" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span class="form-register-item-title">手机:</span>
					<input class="form-register-item-input" id="form-phone" type="text" name="form_phone" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_phone'])===null||$tmp==='' ? '' : $tmp);?>
"  />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span class="form-register-item-title">传真:</span>
					<input class="form-register-item-input" id="form-chz" type="text" name="form_chz" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['form_chz'])===null||$tmp==='' ? '' : $tmp);?>
" />
					<span class="form-register-item-warn" init-data=""></span>
					<div style="clear:both;"></div>
				</div>
					
			
				<div class="form-register-item">
					<span class="form-register-item-title">资质证明:</span>
					<div id="select_file_path" class="select_file_path"></div>
					<img class ="file_upload_img"  alt="资质证明" id="imgFile" src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/images/account/register/upload.png"/>
					<input id="file_upload" name="file_upload" type="file" onchange="file_upload_change(this)"/>
					<input type="hidden" name="fileid" id="hidFileID" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['form_userinfo']->value['fileid'])===null||$tmp==='' ? '' : $tmp);?>
" />
					<input type="hidden" name="filestate" id="filestate" value="0" />
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item">
					<span class="form-register-item-title">公司简介:</span>
					<textarea id="gsjj" name="gsjj" ></textarea>
					<div style="clear:both;"></div>
				</div>
				
				<div class="form-register-item" >
					<span class="form-register-item-title">&nbsp;</span>
					<span class="form-register-item-info">
						<input type="checkbox" value="0" class="" checked/>&nbsp<a href="#" class="form-a">我已阅读《协议》并同意相关条款</a> 
					</span>
					<div style="clear:both;"></div>
				</div>
				<div class="form-register-item">
					<span id="register-result" class="form-register-item-title"></span>
					<input id="form-submit" type="submit" class="form-submit" value="注册"/> 
					<div style="clear:both;"></div>
				</div>
				<div class="form-foot">
					
				</div>
			</form>
			<?php }?>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>