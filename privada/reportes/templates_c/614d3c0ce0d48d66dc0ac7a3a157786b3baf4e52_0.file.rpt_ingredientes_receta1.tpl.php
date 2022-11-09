<?php
/* Smarty version 3.1.36, created on 2022-10-13 21:07:07
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\rpt_ingredientes_receta1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6348b63b9a4594_09954937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '614d3c0ce0d48d66dc0ac7a3a157786b3baf4e52' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\rpt_ingredientes_receta1.tpl',
      1 => 1664293651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348b63b9a4594_09954937 (Smarty_Internal_Template $_smarty_tpl) {
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
	 			<h1> INGREDIENTES--RECETA </h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <th>NRO</th><th>INGREDIENTE</th><th>CANTIDAD</th><th>UNIDAD</th><th>RECETA</th></tr> 
	 		 <?php $_smarty_tpl->_assignInScope('b', "1");?>
	 		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ingredientes_receta1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
	 		 <tr> 
	 		 	<td align = "center "><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ingrediente'];?>
</td> 
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['cantidad'];?>
</td>
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['unidad'];?>
</td>
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['receta'];?>
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
