<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_receta = $_POST["id_receta"];

$db-> debug=true;

	$sql3 = $db->Prepare("SELECT *
						FROM recetas
						WHERE id_receta = ?
						
						");

$rs3 = $db->GetAll($sql3, array($id_receta));

echo "<center>
<table width='60%' border='1'>
<tr>
<th colspan='4'>Datos Receta</th>
</tr>
";
foreach ($rs3 as $k => $fila) {
	echo "<tr>
	<td align='center'>".$fila["receta"]."</td>
	<td>".$fila["foto"]."</td>
	</tr>
	";
}
echo "</table>
	</center>"

?>