<?php /* Smarty version Smarty-3.1.14, created on 2014-09-21 11:53:41
         compiled from "app/tpl/jobfairmsg/calendar.htm" */ ?>
<?php /*%%SmartyHeaderCode:1314083305541e4bc5539c85-75083362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0800fb05182ad2858c0a9c4a7c0cd4a603a5cd7f' => 
    array (
      0 => 'app/tpl/jobfairmsg/calendar.htm',
      1 => 1396322546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314083305541e4bc5539c85-75083362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541e4bc55ad088_97087773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e4bc55ad088_97087773')) {function content_541e4bc55ad088_97087773($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable('jobfairmsg/calendar', null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable('招聘日历', null, 0);?>
<?php $_smarty_tpl->tpl_vars['phonetitle'] = new Smarty_variable('招聘日历', null, 0);?>
<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
<?php $_smarty_tpl->tpl_vars['topid'] = new Smarty_variable('corpinternmsg_top', null, 0);?>
<?php $_smarty_tpl->tpl_vars['westid'] = new Smarty_variable('corpinternmsg_west', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/middle-right.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/corpinternmsg/calendar.css" />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.print.css' media='print' />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/css/common/content.css" />
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/libs/fullcalendar/fullcalendar.min.js'></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
/common/app/js/calendar.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	var canlendar = new calendar_view("#middle_left","<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
");
	canlendar.generateCalendar();

	$(".event-info").mouseleave(function(event){

		//fc-event-inner
		if($(event.relatedTarget).attr("class") != "fc-event-inner fc-event-skin" && $(event.relatedTarget).attr("class") != "fc-event-title"){
			$(".event-info").hide("fast");
		}
		
	});
});
</script>

    
    <div id="middle">
    	<div id="middle_left">
            	
           
        </div>   
         
        
    	<?php $_smarty_tpl->tpl_vars['tuijianzhaopinhui'] = new Smarty_variable(1, null, 0);?>
		  <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
		  <?php echo $_smarty_tpl->getSubTemplate ('middle-right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="event-info">   	
        </div> 
             
        
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('footer.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>