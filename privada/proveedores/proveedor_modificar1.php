<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_proveedor = $_REQUEST["id_proveedor"];
$nombre_proveedor = $_POST["nombre_proveedor"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

//$db->debug=true;

$smarty = new Smarty;

 $reg = array();
 $reg["nombre_proveedor"] = $nombre_proveedor;
 $reg["direccion"] = $direccion;
 $reg["telefono"] = $telefono;
 $reg["usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("proveedores", $reg, "UPDATE", "id_proveedor='".$id_proveedor."'");

 if ($rs1){
 	header("Location: proveedores.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_proveedor", $id_proveedor);
	$smarty->display("proveedor_modificar1.tpl");
 }
 ?>