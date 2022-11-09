<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_marca = $_REQUEST["id_marca"];
$id_producto = $_REQUEST["id_producto"];
$nombre = $_POST["nombre"];

$smarty = new Smarty;
//$db->debug=true;

$reg = array();
$reg["id_marca"] = $id_marca;
$reg["nombre"] = $nombre;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("productos", $reg, "UPDATE", "id_producto='".$id_producto."'");

if($rs1){
	header("Location: productos.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_producto", $id_producto);
	$smarty->display("producto_modificar1.tpl");
}
?>