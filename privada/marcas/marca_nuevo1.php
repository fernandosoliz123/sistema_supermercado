<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_proveedor = $_POST["id_proveedor"];
$__marca = $_POST["marca"];
echo "marca".$__marca;
$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_proveedor"] = $__id_proveedor;
$reg["marca"] = $__marca;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("marcas", $reg, "INSERT");
if($rs1){
	header("Location: marcas.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("marca_nuevo1.tpl");
}
?>