<?php
/* Smarty version 3.1.36, created on 2022-10-13 21:45:09
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\ficha_tecnica_vehiculo1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348bf25476222_71581552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '360025b0e44c9138614513b11f47262c2e4f20d2' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\ficha_tecnica_vehiculo1.tpl',
      1 => 1665709370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348bf25476222_71581552 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> 
<html> 
	<head> 
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				if (confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	<?php echo '</script'; ?>
> 
	</head> 
	<body style='cursor:pointer;cursor:hand' onclick="imprimir();">
	 <table width="100%" border="0"> 
	 	<tr> 
	 		<td><img src="../../img/logo.jfif" width="70%" alt=""></td>
	 		<td align="center" width="80%">
	 			<h1>FICHA TECNICA DE VEHICULOS</h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 			<td>
	 				<table>
	 				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>	
	 		<tr>
			<th>
			<b>Nombre del cliente</b><br>
			<td><input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" disabled=""></td>
			</th>
		</tr>
			<tr>
			<th>
			<b>nro_placas</b><br>
			<td><input type="text" name="nro_placa" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nro_placa'];?>
" disabled=""></td>
			</th>
		</tr>
		<tr>
	 		<th>
			<b>Modelo</b><br>
			<td><input type="text" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['modelo'];?>
" disabled=""></td>
			</th>
		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<td>

			<tr>
			</tr>
			
		</table > 
		</center> 
	</body> 
</html><?php }
}
