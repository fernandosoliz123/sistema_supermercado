<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre_producto = strip_tags(stripslashes($_POST["nombre_producto"]));

//$db-> debug=true;

if ($nombre_producto) {
	$sql3 = $db->Prepare("SELECT *
						FROM productos
						WHERE nombre LIKE ?
						AND estado <> '0'
						");

	$rs3 = $db->GetAll($sql3,array($nombre_producto."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>NOMBRE DEL PRODUCTO</th><th>SELECCIONE</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["nombre"];
					

					echo "<tr>
					<td align='center'>".resaltar($nombre_producto,$str)."</td>
					
					<td align='center'>
					<input type='radio' name='option' value='' onclick='mostrar(".$fila["id_producto"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> EL PRODUCTO NO EXISTE!!!</b></center><br>";
		}
}
?>