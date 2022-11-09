<?php
/* Smarty version 3.1.36, created on 2022-10-13 21:07:03
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\rpt_ingredientes_receta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b637a9bda0_89475591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9708f88a2988dc1d5205518aca5b61dda6f9738' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\rpt_ingredientes_receta.tpl',
      1 => 1664293648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b637a9bda0_89475591 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta charset="UTF-8">

	<?php echo '<script'; ?>
 type="text/javascript">
	function validar() {
		receta = document.formu.receta.value;
		if (document.formu.receta.value == "") {
			alert("Por favor seleccione la receta");
			document.formu.receta.focus();
			return;
		}
		ventanaCalendario = window.open("rpt_ingredientes_receta1.php?receta=" + receta , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE INGREDIENTES POR RECETA</h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione la receta</b>
				<select name="receta">
				<option value="">--Seleccione--</option>
				<option value="T">Todos</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recetas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
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
