<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_cliente=$_REQUEST["id_compra"];
$fecha= $_POST["fecha"];
$monto_final = $_POST["monto_final"];

$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["fecha"] = $fecha;
$reg["monto_final"] = $monto_final;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_compras"];
$rs1 = $db->AutoExecute("compras", $reg, "UPDATE", "id_compra='".$id_compra."'");

if($rs1){
	header("Location: compras.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_compra", $id_compra);
	$smarty->display("compra_modoficar1.tpl");
}
?>