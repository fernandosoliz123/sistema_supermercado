<?php
/* Smarty version 3.1.36, created on 2022-10-16 16:09:56
  from 'C:\wamp6\www\sis_supermercado\privada\productos\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634c65142fc147_52287080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08af2557ddd7384feb7b24041811a8d39760642' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\productos\\templates\\productos.tpl',
      1 => 1662317144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c65142fc147_52287080 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1>PRODUCTOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="producto_nuevo.php">
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
				<th>NRO</th><th>PRODUCTO</th><th>MARCA</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['marca'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
" method="post" action="producto_modificar.php">
						<input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
">
						<input type="hidden" name="id_marca" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_marca'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
.submit();" title="Modificar productos">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
" method="post" action="producto_eliminar.php">
						<input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
.submit();" title="Eliminar Producto" onclick='javascript:return(confirm("Desea realmente Eliminar el producto:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_producto'];?>
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
