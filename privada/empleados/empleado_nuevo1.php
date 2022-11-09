<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__Fecha_inicio = $_POST["Fecha_inicio"];
$__Fecha_fin = $_POST["Fecha_fin"];
$__Nombre = $_POST["Nombre"];
$__Apeliido_Paterno = $_POST["Apellido_Paterno"];
$__Apeliido_Materno = $_POST["Apeliido_Materno"];
$__Direccion = $_POST["Direccion"];
$__telefono = $_POST["telefono"];
$__genero = $_POST["genero"];

$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_superMercado"] = 1;
$reg["Fecha_inicio"] = $__Fecha_inicio;
$reg["Fecha_fin"] = $__Fecha_fin;
$reg["Nombre"] = $__Nombre;
$reg["Apellido_Paterno"] = $__Apellido_Paterno;
$reg["Apellido_Materno"] = $__Apellido_Materno;
$reg["Direccion"] = $__Direccion;
$reg["telefono"] = $__telefono;
$reg["genero"] = $__genero;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("empleados", $reg, "INSERT");
if($rs1){
	header("Location: empleados.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("empleado_nuevo1.tpl");
}
?> 