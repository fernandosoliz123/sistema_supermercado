<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$receta = strip_tags(stripslashes($_POST["receta"]));
$ing = strip_tags(stripslashes($_POST["ing"]));
$cantidad_ing = strip_tags(stripslashes($_POST["cantidad_ing"]));
$unidad_ing = strip_tags(stripslashes($_POST["unidad_ing"]));

//$db-> debug=true;

if ($receta or $ing or $cantidad_ing or $unidad_ing) {

	$sql3 = $db->Prepare("SELECT *
						FROM ingredientes i, recetas r 
          				WHERE r.id_receta = i.id_receta
						AND receta LIKE ?
						AND ingrediente LIKE ?
						AND cantidad LIKE ?
						AND unidad LIKE ?
						");

	$rs3 = $db->GetAll($sql3, array($receta."%",$ing."%",$cantidad_ing."%",$unidad_ing."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>RECETA</th><th>INGREDINETE</th><th>CANTIDAD</th><th>UNIDAD</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["receta"];
					$str1 = $fila["ingrediente"];
					$str2 = $fila["cantidad"];
					$str3 = $fila["unidad"];
		

					echo "<tr>
					<td align='center'>".resaltar($receta,$str)."</td>
					<td align='center'>".resaltar($ing,$str1)."</td>
					<td align='center'>".resaltar($cantidad_ing,$str2)."</td>
					<td>".resaltar($unidad_ing,$str3)."</td>

					
				</tr>";
				}
				echo"</table>
				</center>";
		} else {
			echo"<center><b> NO EXISTE!!!</b></center><br>";
			
		}
}
?>