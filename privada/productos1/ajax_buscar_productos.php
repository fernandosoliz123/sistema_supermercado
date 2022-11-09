<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$proveedor = strip_tags(stripslashes($_POST["proveedor"]));
$descripcion = strip_tags(stripslashes($_POST["descripcion"]));
$modelo = strip_tags(stripslashes($_POST["modelo"]));
$marca = strip_tags(stripslashes($_POST["marca"]));

//$db-> debug=true;

if ($proveedor or $descripcion or $modelo or $marca) {

	$sql3 = $db->Prepare("SELECT *
						FROM productos1 p, proveedores1 r 
          				WHERE r.id_proveedor = p.id_proveedor
						AND nombre  LIKE ?
						AND descripcion LIKE ?
						AND modelo LIKE ?
						AND marca LIKE ?
						");

	$rs3 = $db->GetAll($sql3, array($proveedor."%",$descripcion."%",$modelo."%",$marca."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>NOMBRE DEL PROVEEDOR</th><th>DESCRIPCION</th><th>MODELO</th><th>MARCA</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["nombre"];
					$str1 = $fila["descripcion"];
					$str2 = $fila["modelo"];
					$str3 = $fila["marca"];
		

					echo "<tr>
					<td align='center'>".resaltar($proveedor,$str)."</td>
					<td align='center'>".resaltar($descripcion,$str1)."</td>
					<td align='center'>".resaltar($modelo,$str2)."</td>
					<td>".resaltar($marca,$str3)."</td>
					
					
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> NO EXISTE!!!</b></center><br>";
			
		}
}
?>