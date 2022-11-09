<?php
/* Smarty version 3.1.36, created on 2022-10-16 16:11:05
  from 'C:\wamp6\www\sis_supermercado\privada\personas\templates\personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634c65597e1609_88072934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df6353a65d328054f9e7e47d1b0c2dccdfa95ad' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\personas\\templates\\personas.tpl',
      1 => 1660269582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c65597e1609_88072934 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_personas.js"> <?php echo '</script'; ?>
>
</head>
<body>
	<div class="titulo_listado">
		<h1>
			PERSONAS
		</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="persona_nuevo.php">
			<a href="javascript:document.formNuevo.submit();">
				Nuevo>>>
			</a>
		</form>
	</div>
	<!----INICIO BUSCADOR---->
	<center>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
	  <tr>
	  	<th>
	  		<b>Paterno</b><br />
	  		<input type="text" name="paterno" value="" size="10"  onkeyup="buscar_personas()">
	  	</th>
	  	<th>
	  		<b>Materno</b><br />
	  		<input type="text" name="materno" value="" size="10"  onkeyup="buscar_personas()">
	  	</th>
	  	<th>
	  		<b>Nombres</b><br />
	  		<input type="text" name="nombres" value="" size="10"  onkeyup="buscar_personas()">
	  	</th>
	  	<th>
	  		<b>C.I.</b><br />
	  		<input type="text" name="ci" value="" size="10"  onkeyup="buscar_personas()">
	  	</th>
	  </tr>
	</table>
	 </form>
	  </center>
	   <!------------FIN BUSCADOR  ------>
		


 <br><br>
 <center> 
      <div id="personas1">
		<table class="listado">
			<tr>
				<th>NRO</th><th>CI</th><th>NOMBRES</th><th>AP</th><th>AM</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "0");?>
			<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
			<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
			<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
" method="post" action="persona_modificar.php">
						<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
.submit();" title="Modificar Persona Sistema">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
" method="post" action="persona_eliminar.php">
						<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
.submit();" title="Eliminar Persona Sistema" onclick="javascript:return(confirm('Desea realmente Eliminar a la persona <?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
')); location.href='persona_eliminar.php'">
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

		<!--PAGINACION------------------------->
		<table>
			<tr align="center">
				<td>
					<?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
					<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana;font-size: 9px;cursor:pointer";>&laquo;Anterior</a>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>|<?php }?><b style="color:#FB992F;font-size: 12px; "><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
					<?php } else { ?>
					| <a onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
					<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
					| <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana; font-size: 9px; cursor: pointer">Siguinte&raquo;</a>
					<?php }?>
				</td>
			</tr>
		</table>
		<!----FIN PAGINACION----->
	 </div>
	</center>
</body>
</html>
<?php }
}
