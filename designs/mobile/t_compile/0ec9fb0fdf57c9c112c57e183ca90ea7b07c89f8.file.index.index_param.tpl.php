<?php /* Smarty version Smarty-3.1.8, created on 2012-05-05 21:38:41
         compiled from "/home/spaxi116/public_html/modules/profile/templates/index.index_param.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10617618084fa565a157e6b1-86110519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec9fb0fdf57c9c112c57e183ca90ea7b07c89f8' => 
    array (
      0 => '/home/spaxi116/public_html/modules/profile/templates/index.index_param.tpl',
      1 => 1336239222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10617618084fa565a157e6b1-86110519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa565a16d6155_33248839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa565a16d6155_33248839')) {function content_4fa565a16d6155_33248839($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/home/spaxi116/public_html/system/classes/smarty/plugins/function.mailto.php';
?>

<div class='item0'>
	<a href='<?php echo $_smarty_tpl->tpl_vars['profile']->value['avatar_full'];?>
'>
		<div style='margin: 3px; float: left; border-radius: 14px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['profile']->value['avatar'];?>
); width: 100px; height: 100px;'>
		</div>
	</a>
	<span style='font-size: 15px;padding-left: 3px;'>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

		<b>
			<?php echo $_smarty_tpl->tpl_vars['profile']->value['login'];?>

		</b>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['surname'], ENT_QUOTES, 'UTF-8', true);?>

	</span>
	<?php if ($_smarty_tpl->tpl_vars['profile']->value['level']>0){?>
	<br />
	<b style='padding-left: 10px; color: red;'>
		<i contenteditable='true'>
			<?php echo $_smarty_tpl->tpl_vars['profile']->value['status_name'];?>

		</i>
	</b>
	<?php }?>
	<br />
	<div style='margin-left: 110px'>
		<b>
			E-mail:
		</b>
		<?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['email'], ENT_QUOTES, 'UTF-8', true),'encode'=>'javascript','subject'=>'Сообщение'),$_smarty_tpl);?>

		</a>
		<br>
		<b>
			О себе:
		</b>
		<br />
			<?php echo Filters::full($_smarty_tpl->tpl_vars['profile']->value['about_me']);?>

		<br/>
		<b>
			Девайсы:
		</b>
		<?php echo Filters::full($_smarty_tpl->tpl_vars['profile']->value['devices']);?>

	</div>
	<div style='clear: both'>
	</div>
</div>
<div class='item1'>
	<b>
		Регистрация:
	</b>
	<?php echo getTime($_smarty_tpl->tpl_vars['profile']->value['reg_timestamp']);?>

	<br/>
	<b>
		Посл. посещение:
	</b>
	<?php echo getTime($_smarty_tpl->tpl_vars['profile']->value['last_visit']);?>

	<br/>
		<?php if ($_smarty_tpl->tpl_vars['user']->value->access("view_user_data")){?>
	<b>
		Браузер:
	</b>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['browser'], ENT_QUOTES, 'UTF-8', true);?>

	<br/>
	<b>
		IP:
	</b>
	<?php echo long2ip($_smarty_tpl->tpl_vars['profile']->value['ip']);?>

	<?php }?>
</div>
<?php }} ?>