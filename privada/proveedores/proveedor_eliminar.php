<?php

session_start();


require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");


$id_proveedor = $_REQUEST["id_proveedor"];


$smarty = new Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
					  FROM marcas
					  WHERE id_proveedor = ?
					  AND estado <> '0'
					");
$rs = $db->GetAll($sql, array($id_proveedor));

if(!$rs){
	$reg = array ();
	$reg["estado"] ='0';
	$reg["id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("proveedores", $reg, "UPDATE", "id_proveedor='".$id_proveedor."'");
	header("Location: proveedores.php");
    exit();

} else { 
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!");
	$smarty->display("proveedor_eliminar.tpl");
}
?>


