<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$nro_placa = strip_tags(stripslashes($_POST["nro_placa"]));
$modelo = strip_tags(stripslashes($_POST["modelo"]));

$db->debug=true;
if ($nombre or $nro_placa or $modelo){
	$sql3 = $db->Prepare("SELECT *
						FROM vehiculos v, clientes1 c
          				WHERE v.id_cliente = c.id_cliente
						AND c.nombre LIKE ?
						AND v.nro_placa LIKE ?
						AND v.modelo LIKE ?
						");
	$rs3 = $db->GetAll($sql3, array($nombre."%", $nro_placa."%", $modelo."%"));
	if ($rs3) {
		echo"<center>
			<table width='60%' border='1'>
					<tr>
					<th>CLIENTE</th><th>PLACA</th><th>MODELO</th><th>SELECCIONE</th>
					</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["nombre"];
			$str1 = $fila["nro_placa"];
			$str2 = $fila["modelo"];
			echo"<tr>
			<td align='center'>".resaltar($nombre, $str)."</td>
				<td>".resaltar($nro_placa, $str1)."</td>
				<td>".resaltar($modelo, $str2)."</td>
				<td align='center'>
				<input type='radio' name='opcion' value='' onClick='mostrar(".$fila["id_vehiculo"].")'></td>
				</tr>";
			}
			echo"</table>
			</center>";
		}else{
			echo"<center><b> EL VEHICULO NO EXISTE!!</b></center><br>";
	}
}
?>