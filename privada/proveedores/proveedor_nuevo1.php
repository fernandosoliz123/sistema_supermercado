<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre_proveedor = $_POST["nombre_proveedor"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

$db->debug=true;

$smarty = new Smarty;

 $reg = array();
 $reg["id_superMercado"] = 1;
 $reg["nombre_proveedor"] = $nombre_proveedor;
 $reg["direccion"] = $direccion;
 $reg["telefono"] = $telefono;
 $reg["fec_insercion"] = date("Y-m-d H:i:s");
 $reg["fec_modificacion"] = date("Y-m-d H:i:s");
 $reg["estado"] = '1';
 $reg["id_usuario"] = $_SESSION["sesion_id_usuario"];
 $rs1 = $db->AutoExecute("proveedores",$reg,"INSERT");

 if ($rs1){
 	header("Location:proveedores.php");
 	exit();
 }else{
 	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!");
 	$smarty->assign("direc_css", $direc_css);
 	$smarty->assign("proveedor_nuevo1.tpl");
 }
 ?>