<?php
/* Smarty version 3.1.36, created on 2022-10-16 16:10:10
  from 'C:\wamp6\www\sis_supermercado\privada\empleados\templates\empleado_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634c6522c823b9_96495742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '008946fca9ec929269dc5f8e3677b97104406560' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\empleados\\templates\\empleado_nuevo.tpl',
      1 => 1654831396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c6522c823b9_96495742 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
"type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_empleado.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="empleado_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR EMPLEADO</h2>
			<input type="text" name="Fecha_inicio" size="15" placeholder="Fecha_inicio" >(*)
			<p>
			<input type="text" name="Fecha_fin" size="15" placeholder="Fecha_fin" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="Apellido_Paterno" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="Apellido_Materno" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="Direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()">
			</p>
			<p>
			<input type="text" name="telefono" size="15" placeholder="Telefono">
			</p>
			<p>
			(*)<b>Genero</b><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='empleados.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html><?php }
}
