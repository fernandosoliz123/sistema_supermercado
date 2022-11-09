<?php
/* Smarty version 3.1.36, created on 2022-10-16 16:10:44
  from 'C:\wamp6\www\sis_supermercado\privada\ventas\templates\ventas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634c6544184052_67053993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57c06c5e5ea8d5112242e85fc378862cd1ee55eb' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\ventas\\templates\\ventas.tpl',
      1 => 1657255010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c6544184052_67053993 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>
				</table>
			</td>
			<td align="center" width="33%">
				<h1>VENTAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="venta_nuevo.php">
					<a href="javascript:document.formNuveo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
	</table>

	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>MONTO</th><th>FECHAS</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ventas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_final'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Fecha'];
echo $_smarty_tpl->tpl_vars['r']->value['descuento'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
" method="post" action="producto_modificar.php">
						<input type="hidden" name="id_venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
">
						<input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
.submit();" title="Modificar ventas">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
" method="post" action="venta_eliminar.php">
						<input type="hidden" name="id_venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
.submit();" title="Eliminar Venta" onclick='javascript:return(confirm("Desea realmente Eliminar la Venta:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
?"));'>
							Eliminar>>
						</a>
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

	</center>
</body>
</html>
<?php }
}
