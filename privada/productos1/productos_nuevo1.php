<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);

$id_receta=$_POST["id_receta"];
$cantidad=$_POST["cantidad"];
$unidad= $_POST["unidad"];
$ingrediente= $_POST["ingrediente"];


$smarty=new Smarty;

$db->debug=true;
	$reg=array();
	$reg["id_receta"] =$id_receta;
	$reg["cantidad"]=$cantidad;
	$reg["unidad"]=$unidad;
	$reg["ingrediente"]=$ingrediente;
	$rs1=$db->AutoExecute("ingredientes", $reg, "INSERT");

if ($rs1){
	header("Location: productos1.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("productos_nuevo1.tpl");
}
?>

