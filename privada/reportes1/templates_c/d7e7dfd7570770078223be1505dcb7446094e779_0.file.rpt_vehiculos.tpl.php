<?php
/* Smarty version 3.1.36, created on 2022-10-13 21:03:23
  from 'C:\wamp6\www\sis_supermercado\privada\reportes1\templates\rpt_vehiculos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b55bc44ad0_20446991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7e7dfd7570770078223be1505dcb7446094e779' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes1\\templates\\rpt_vehiculos.tpl',
      1 => 1664933153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b55bc44ad0_20446991 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta charset="UTF-8">

	<?php echo '<script'; ?>
 type="text/javascript">
	function validar() {
		nombre = document.formu.nombre.value;
		if (document.formu.nombre.value == "") {
			alert("Por favor seleccione el cliente");
			document.formu.nombre.focus();
			return;
		}
		ventanaCalendario = window.open("rpt_vehiculos1.php?nombre=" + nombre , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE VEHICULOS POR CLIENTES</h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione el cliente</b>
				<select name="nombre">
				<option value="">--Seleccione--</option>
				<option value="T">Todos</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>			
			</select>
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton">
			</p>	
		</form>
	</div>
</body>
</html>
<?php }
}
