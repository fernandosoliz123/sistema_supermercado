<?php
/* Smarty version 3.1.36, created on 2022-09-27 09:19:36
  from 'C:\wamp6\www\sis_supermercado\privada\reportes\templates\rpt_personas_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6332f868a75570_62679582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f0138b100721be15867767c0796e2dad363d41' => 
    array (
      0 => 'C:\\wamp6\\www\\sis_supermercado\\privada\\reportes\\templates\\rpt_personas_genero.tpl',
      1 => 1661933814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332f868a75570_62679582 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta charset="UTF-8">

	<?php echo '<script'; ?>
 type="text/javascript">
	function validar() {
		genero = document.formu.genero.value;
		if (document.formu.genero.value == "") {
			alert("Por favor seleccione el genero");
			document.formu.genero.focus();
			return;
		}
		ventanaCalendario = window.open("rpt_personas_genero1.php?genero=" + genero , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PERSONAS POR GENERO</h2>
		<form method="post" name="formu">
			<p>
				<b>*Seleccione genero</b>
				<select name="genero">
					<option value="">--Seleccione--</option>
					<option value="T">--Todos--</option>
					<option value="F">--Femenino--</option>
					<option value="M">--Masculino--</option>
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
