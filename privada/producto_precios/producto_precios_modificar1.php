<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_producto=$_POST["id_producto"];
$id_precio=$_POST["id_precio"];
$precio=$_POST["precio"];
$fecha_asignada=$_POST["fecha_asignada"];

//$db->debug=true;

$smarty = new Smarty;

$reg=array();
$reg["id_producto"] =$id_producto;
$reg["id_precio"]=$id_precio;
$reg["precio"]=$precio;
$reg["fecha_asignada"]=$fecha_asignada;
$reg["usuario"]=$_SESSION["sesion_id_usuario"];
$rs1=$db->AutoExecute("producto_precios", $reg, "UPDATE", "id_precio='".$id_precio."'");

if ($rs1){
	header("Location: producto_precios.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_precio", $id_precio);
	$smarty->display("producto_precios_ modificar1.tpl");
}
?>

