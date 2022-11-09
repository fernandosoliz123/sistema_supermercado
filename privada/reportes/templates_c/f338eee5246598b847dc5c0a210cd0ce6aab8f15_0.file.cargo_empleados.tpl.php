<?php
/* Smarty version 3.1.36, created on 2022-09-27 11:17:36
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\cargo_empleados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633314104f7c34_30628646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f338eee5246598b847dc5c0a210cd0ce6aab8f15' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\cargo_empleados.tpl',
      1 => 1661348058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633314104f7c34_30628646 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("cargo_empleados1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>CARGO_EMPLEADOS</h1></td>
		</tr>
	</table>
	<br>
	<center> <table class="listado">
			<tr>
				<th>NRO</th><th>EMPLEADO</th><th>CARGO</th>
			</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cargo_empleados']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?><tr>
	            	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['Apellido_Paterno'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['Apellido_Materno'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['cargo'];?>
</td>
				   <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?></tr>
	            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir</td>
		</h2>
	</center>
</body>
</html><?php }
}
