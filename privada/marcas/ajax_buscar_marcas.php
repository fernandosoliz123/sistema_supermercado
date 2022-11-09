<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$Marcas =strip_tags(stripslashes($_POST["marcas"]));
$Proveedores =strip_tags (stripslashes($_POST["proveedores"]));


$db->debug=false;
if ($Marcas or $Proveedores ){
  $sql3=$db->Prepare("
          SELECT *
          FROM marcas ve
          INNER JOIN proveedores com ON ve.id_proveedor = com.id_proveedor
          AND ve.estado <> '0'
          AND com.estado <> '0'
          ORDER BY ve.id_proveedor DESC

  ");
  $rs3 =$db->GetAll($sql3, array($Marcas."%",$Proveedores."%"));
  // code...

  if ($rs3){
    echo"<center>
    <table class='listado'>
    <tr>
    <th>MARCAS</th><th>PROVEEDORES</th><th><img src='../../imagenes/modificar.png'></th><th><img src='../../imagenes/borrar1.jpg'></th>
    </tr>";
    foreach($rs3 as $k => $fila) {
      
      $str2 = $fila["marca"];
      $str3 = $fila["nombre_proveedor"];
      echo"<tr>
      <td align ='center'>".resaltar($ci,$str)."</td>
      <td>".resaltar($Marcas,$str1)."</td>
      <td>".resaltar($Proveedores,$str2)."</td>
       
      <td align='center'>
      <form name='formModif".$fila['id_marca']."' method='post' action='marca_modificar.php'>
      <input type='hidden' name='id_marca' value='".$fila['id_marca']."'>
      <a href='javascript:document.formModif".$fila['id_proveedor'].".submit();' title='modificar marcas del sistema'>
      MODIFICAR>>>>>>
      </a>
      </form>
      </td>

      <td align='center'>
      <form name='formElimi".$fila["id_marca"]."' method='post' action='marca_eliminar.php'>
      <input type='hidden' name='id_proveedor' value='".$fila['id_proveedor']."'>
      <a href='javascript:document.formElimi".$fila['id_marca'].".submit();' title='eliminar proveedores del sistema' onclick='javascript:return(confirm(\"desea realmente eliminar a proveedores ..?\"))';
      location.href='proveedores_eliminar.php''>
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
