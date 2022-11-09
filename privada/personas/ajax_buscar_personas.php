<?php
session_start();/*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$paterno = strip_tags(stripslashes($_POST["paterno"]));
$materno = strip_tags(stripslashes($_POST["materno"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

//$db-> debug=true;

if ($paterno or $materno or $nombres or $ci) {
  $sql3 = $db->Prepare("SELECT *
            FROM personas
            WHERE ap LIKE ?
            AND am LIKE ?
            AND nombres LIKE ?
            AND ci LIKE ?
            AND estado <> '0'
            ");

  $rs3 = $db->GetAll($sql3, array($paterno."%",$materno."%",$nombres."%",$ci."%"));
    if ($rs3) {
      echo "<center>
        <table width='60%' border='1'>
        <tr>
        <th>C.I.</th><th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th>SELECCIONE</th>
          </tr>";
        foreach($rs3 as $k => $fila){
          $str = $fila["ci"];
          $str1 = $fila["ap"];
          $str2 = $fila["am"];
          $str3 = $fila["nombres"];
          echo "<tr>
          <td align='center'>".resaltar($ci,$str)."</td>
          <td>".resaltar($paterno,$str1)."</td>
          <td>".resaltar($materno,$str2)."</td>
          <td>".resaltar($nombres,$str3)."</td>
          <td align='center'>
          <input type='radio' name='option' value='' onclick='mostrar(".$fila["id_persona"].")'>
          </td>
        </tr>";
        }
        echo"</table>
        </center>";
    } else {
      echo"<center><b> LA PERSONA NO EXISTE!!!</b></center><br>";
      echo "<center>
      <table class='listado'>
      <tr>
      <td><b>Cedula de Identidad:</b></td>
      <td><input type='text' name='ci1' size='10'></td>
      </tr>
      <tr>
      <td><b>Apellido Paterno:</b></td>
      <td><input type='text' name='ap1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Apellido Materno:</b></td>
      <td><input type='text' name='am1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Nombres:</b></td>
      <td><input type='text' name='nombres1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Direccion:</b></td>
      <td><input type='text' name='direccion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
      </tr>
      <tr>
      <td><b>Telefono:</b></td>
      <td><input type='text' name='telef1' size='10'></td>
      </tr>
      <tr>
      <td><b>Genero:</b></td>
      <td><input type='radio' name='genero1' size='10'>Femenino
      <input type='radio' name='genero1' size='10'>Masculino<br>
      </td>
      </tr>
      <td align='center' colspan='2'>
      <input type='button' value='ADICIONAR PERSONA' onclick='insertar_persona()'>
      </td>
      </tr>
      </table>
      </center>
      ";
    }
}
?>