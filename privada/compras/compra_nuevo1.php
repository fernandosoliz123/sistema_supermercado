<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$fecha = $_POST["fecha"];
$monto_final = $_POST["monto_final"];


$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_superMercado"] = 1;
$reg["fecha"] = $fecha;
$reg["monto_final"] = $monto_final;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("compras", $reg, "INSERT");
if($rs1){
	header("Location: compras.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("compra_nuevo1.tpl");
}
?>