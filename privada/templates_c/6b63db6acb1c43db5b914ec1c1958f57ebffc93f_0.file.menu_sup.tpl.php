<?php
/* Smarty version 3.1.36, created on 2022-10-13 20:48:20
  from 'C:\wamp6\www\sis_supermercado\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b1d49a03f4_23551427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b63db6acb1c43db5b914ec1c1958f57ebffc93f' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\templates\\menu_sup.tpl',
      1 => 1660005216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b1d49a03f4_23551427 (Smarty_Internal_Template $_smarty_tpl) {
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
