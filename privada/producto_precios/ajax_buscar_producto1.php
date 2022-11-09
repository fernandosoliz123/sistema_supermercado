<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_producto = $_POST["id_producto"];

//$db-> debug=true;

	$sql3 = $db->Prepare("SELECT *
						FROM productos
						WHERE id_producto = ?
						AND estado <> '0'
						");

$rs3 = $db->GetAll($sql3, array($id_producto));

echo "<center>
<table width='60%' border='1'>
<tr>
<th colspan='4'>Datos Producto</th>
</tr>
";
foreach ($rs3 as $k => $fila) {
	echo "<tr>
	<td align='center'>".$fila["nombre"]."</td>
	</tr>
	";
}
echo "</table>
	</center>"

?>