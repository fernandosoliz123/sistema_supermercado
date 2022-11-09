<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");


$id_producto = $_POST["id_producto"];
$precio = $_POST["precio"];
$fecha_asignada = $_POST["fecha_asignada"];


//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_producto"] = $id_producto;
$reg["precio"] = $precio;
$reg["fecha_asignada"] = $fecha_asignada;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("producto_precios", $reg, "INSERT");
if($rs1){
	header("Location: producto_precios.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("producto_precios_nuevo1.tpl");
}
?>