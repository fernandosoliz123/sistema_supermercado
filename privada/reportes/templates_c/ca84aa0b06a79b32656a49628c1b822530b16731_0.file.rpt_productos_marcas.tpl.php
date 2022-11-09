<?php
/* Smarty version 3.1.36, created on 2022-09-27 20:27:16
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\rpt_productos_marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633394e4494436_26266464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca84aa0b06a79b32656a49628c1b822530b16731' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\rpt_productos_marcas.tpl',
      1 => 1664293649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633394e4494436_26266464 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar(){
			marca=document.formu.marca.value;
			if (document.formu.marca.value=="") {
				alert("por favor seleccione una marca");
				document.formu.marca.focus();
				return;
			}
			ventanaCalendario = window.open ("rpt_productos_marcas1.php?marca="+ marca , "calendario" , "width=600 , height=550 ,left=100,top=100 ,scrollbars=yes ,menubars=no ,statusbar=NO , status=NO, resizable=YES ,location=NO" ) 
			}
	<?php echo '</script'; ?>
>
	
</head>
<body >
<div class="formu_ingreso_datos"> 
	<h2>PRODUCTOS POR MARCAS</h2>
	<form method="post" name="formu" >
		<p>
			<b>*seleccione la marca</b>
			<select name="marca">
				<option value="">--Seleccione--</option>
				<option value="T">Todos</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['marca'];?>
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
</html><?php }
}
