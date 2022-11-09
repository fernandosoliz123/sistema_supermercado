<?php
/* Smarty version 3.1.36, created on 2022-09-09 13:58:50
  from 'C:\wamp64\www\sis_supermercado\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631b469a8364e2_23156989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '088bcc6f92091897924ec80206f0752256356d2e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_supermercado\\privada\\templates\\menu_sup.tpl',
      1 => 1660005216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631b469a8364e2_23156989 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	</head>
	<body>
		<div class="cabecera">
			<img src="supermercado/logos/logo_super.jpg" width="10%">
			<div class="titulo">
				SUPERMERCADO <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

				
			</div>
			<div class="usuario">
				Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
				Rol:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
				
			</div>
		</div>
	</body>
</html><?php }
}
