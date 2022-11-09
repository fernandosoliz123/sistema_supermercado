<?php
/* Smarty version 3.1.36, created on 2022-09-27 09:19:40
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\rpt_personas_genero1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6332f86c9de0a0_40830298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c23f6ab7bc9b3b14c19e46a7f528e829f6798f29' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\rpt_personas_genero1.tpl',
      1 => 1662611824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332f86c9de0a0_40830298 (Smarty_Internal_Template $_smarty_tpl) {
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
	 			<h1> PERSONAS--GENERO </h1>
	 		</td> 
	 	</tr > 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <th>NRO</th><th>NOMBRES</th><th>AP</th><th>AM</th><th>GENERO</th></tr> 
	 		 <?php $_smarty_tpl->_assignInScope('b', "1");?>
	 		 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas_genero1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
	 		 <tr> 
	 		 	<td align = "center "><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td> 
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
	 		 	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
	 		 	<td><?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == 'F') {?>FEMENINO<?php } else { ?>MASCULINO<?php }?></td>
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
