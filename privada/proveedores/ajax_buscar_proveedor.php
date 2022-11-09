<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$Nombre = strip_tags(stripslashes($_POST["Nombre"]));
$Direccion = strip_tags(stripslashes($_POST["Direccion"]));
$Telefono = strip_tags(stripslashes($_POST["Telefono"]));
 

/*$db->debug=true;*/
if ($Nombre or $Direccion or $Telefono ){
  $sql3 = $db->Prepare("
                      SELECT *
                      FROM proveedores
                      WHERE nombre_proveedor like ?
                      AND direccion like ?
                      AND telefono like ?
                      AND estado <> '0'
  ");
  $rs3 =$db->GetAll($sql3, array($Nombre."%", $Direccion."%", $Telefono."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>NOMBRES</th><th>DIRECCION</th><th>TELEFONO</th><th><img src='../../imagenes/modificar.png'></th><th><img src='../../imagenes/borrar1.jpg'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      $str = $fila["nombre"];
      $str1 = $fila["direccion"];
      $str2 = $fila["telefono"];
    
      echo"<tr>
      <td align='center'>".resaltar($Nombre,$str)."</td>
      <td>".resaltar($Direccion,$str1)."</td>
      <td>".resaltar($Telefono,$str2)."</td>    
      <td align='center'>
      <form name='formModif".$fila['id_proveedor']."' method='post' action='proveedor_modificar.php'>
      <input type='hidden' name='id_proveedor' value='".$fila['id_proveedor']."'>
      <a href='javascript:document.formModif".$fila['id_proveedor'].".submit();' title='modificar Proveedores del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["id_proveedor"]."' method='post' action='proveedor_eliminar.php'>
      <input type='hidden' name='id_proveedor' value='".$fila["id_proveedor"]."'>
      <a href='javascript:document.formElimi".$fila['id_proveedor'].".submit();' title='eliminar proveedores del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar a los proveedores..?\"))';
      location.href='proveedor_eliminar.php''>
      ELIMINAR>>>>>>
  
      </a>
      </form>
      </td>
      </tr>";
    }
echo"</table>
</center>";

  }else{
    echo "<center><b> LA PERSONA NO EXISTE!!!! </b></center><br>";
  }
}

?>
