<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$receta = strip_tags(stripslashes($_POST["receta"]));
$foto = strip_tags(stripslashes($_POST["foto"]));


//$db-> debug=true;

if ($receta or $foto) {
	$sql3 = $db->Prepare("SELECT *
						FROM recetas
						WHERE receta LIKE  ?
						AND foto LIKE  ?
						");

	$rs3 = $db->GetAll($sql3, array($receta."%",$foto."%"));

		if ($rs3) {
			echo "<center>
				<table width='60%' border='1'>
				<tr>
				<th>RECETA</th><th>FOTO</th><th>?</th>
					</tr>";
				foreach($rs3 as $k => $fila){
					$str = $fila["receta"];
					$str1 = $fila["foto"];
					echo "<tr>
					<td align='center'>".resaltar($receta,$str)."</td>
					<td>".resaltar($foto,$str1)."</td>
					<td align='center'>
					<input type='radio' name='option' value='' onclick='buscar_receta(".$fila["id_receta"].")'>
					</td>
				</tr>";
				}
				echo"</table>
				</center>";
} else {
			echo"<center><b> LA RECETA NO EXISTE!!!</b></center><br>";
			echo "<center>
			<table class='listado'>
			<tr>
			<td><b>Nombre:</b></td>
			<td><input type='text' name='receta1' size='10'></td>
			</tr>
			<tr>
			<td><b>Direccion:</b></td>
			<td><input type='text' name='foto1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td><b>Fecha realizacion:</b></td>
			<td><input type='date' name='fecha_realizacion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
			</tr>
			<tr>
			<td align='center' colspan='2'>
			<input type='button' value='ADCIONAR RECETA' onclick='insertar_receta()'>
			</td>
			</tr>
			</table>
			</center>
			";
		}
}
?>