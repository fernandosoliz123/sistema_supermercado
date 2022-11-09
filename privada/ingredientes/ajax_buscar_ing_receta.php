<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");


$receta = strip_tags(stripslashes($_POST["receta"]));
$ingredientes = strip_tags(stripslashes($_POST["ingredientes"]));
$unidad = strip_tags(stripslashes($_POST["unidad"]));


$db-> debug=true;

if ($receta or $ingredientes or $unidad) {
	$sql3 = $db->Prepare("SELECT *
						FROM recetas r, ingredientes i
						WHERE r.receta LIKE ?
						AND i.ingrediente LIKE ?
						AND i.unidad LIKE ?
						");

	$rs3 = $db->GetAll($sql3, array($receta."%",$ingredientes."%",$unidad."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>RECETA</th><th>INGREDIENTES</th><th>UNIDAD</th><th>SELECCIONE</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["receta"];
					$str1 = $fila["ingrediente"];
					$str2 = $fila["unidad"];
					echo "<tr>
					<td align='center'>".resaltar($receta,$str)."</td>
					<td>".resaltar($ingredientes,$str1)."</td>
					<td>".resaltar($unidad,$str2)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='mostrar(".$fila["id_receta"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> LA RECETA NO EXISTE!!!</b></center><br>";
		}
}
?>