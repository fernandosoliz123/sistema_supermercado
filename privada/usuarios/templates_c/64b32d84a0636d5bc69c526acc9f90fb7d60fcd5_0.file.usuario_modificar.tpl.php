<?php
/* Smarty version 3.1.36, created on 2022-09-20 20:48:31
  from 'C:\wamp6\www\sis_supermercado\privada\usuarios\templates\usuario_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a5f5fe4f994_99457597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64b32d84a0636d5bc69c526acc9f90fb7d60fcd5' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\usuarios\\templates\\usuario_modificar.tpl',
      1 => 1662128142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a5f5fe4f994_99457597 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/validar_usuario.js"><?php echo '</script'; ?>
>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="usuario_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR USUARIO</h2>
			<b>Persona (*)</b>
			<select name="id_persona">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
			</select>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario_1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<p>
				<input type="text" name="usuario" size="15" placeholder="Usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
">(*)
			</p>
			<p>
				<input type="password" name="clave" size="15" placeholder="Clave"> (*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">
			</p>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html><?php }
}
