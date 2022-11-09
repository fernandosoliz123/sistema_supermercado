<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");


$nombre = strip_tags(stripslashes($_POST["nombre"]));


//$db-> debug=true;

if ($nombre) {
	$sql3 = $db->Prepare("SELECT *
						FROM productos
						WHERE nombre LIKE ?
						AND estado <> '0'
						");

	$rs3 = $db->GetAll($sql3, array($nombre."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>NOMBRES</th><th>?</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["nombre"];

					echo "<tr>
					<td align='center'>".resaltar($nombre,$str)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='buscar_producto(".$fila["id_producto"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> EL PRODUCTO NO EXISTE!!!</b></center><br>";
			echo "<center>
			<table class='listado'>
			<tr>
			<td><b>Nombre del Producto:</b></td>
			<td><input type='text' name='nombre1' size='10'></td>
			</tr>
			<td align='center' colspan='2'>
			<input type='button' value='ADCIONAR PRODUCTO' onclick='insertar_producto()'>
			</td>
			</tr>
			</table>
			</center>
			";
		}
}
?>