<?php
/* Smarty version 3.1.36, created on 2022-09-27 20:27:19
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\rpt_productos_marcas1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633394e7c14cb4_11254349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f075d3bcdb0cb64ccbe495357c0858ca18362550' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\rpt_productos_marcas1.tpl',
      1 => 1664293653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633394e7c14cb4_11254349 (Smarty_Internal_Template $_smarty_tpl) {
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
	 		   <td><img src="../../img/<?php echo $_smarty_tpl->tpl_vars['Logo']->value;?>
" width="70%" alt=""></td>
	 		<td align="center" width="80%">
	 			<h1>PRODUCTOS-MARCAS</h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <th>NRO</th><th>MARCA</th><th>PRODUCTO</th></tr> 
	 		 <?php $_smarty_tpl->_assignInScope('b', "1");?>
	 		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos_marcas1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
	 		 <tr> 
	 		 	<td align = "center "><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['marca'];?>
</td> 
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
	 		 	<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?> 
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
				</tr>
		</table > 
	<br><br> 
	<b>Fecha:</b><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

		</center> 
	</body> 
</html><?php }
}
