<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__Nombre = $_POST["Nombre"];
$__apellido_paterno = $_POST["apellido_paterno"];
$__apellido_materno = $_POST["apellido_materno"];
$__ci= $_POST["ci"];
$__direccion = $_POST["direccion"];
$__genero = $_POST["genero"];

$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_superMercado"] = 1;
$reg["Nombre"] = $__Nombre;
$reg["apellido_paterno"] = $__apellido_paterno;
$reg["apellido_materno"] = $__apellido_materno;
$reg["ci"] = $__ci;
$reg["direccion"] = $__direccion;
$reg["genero"] = $__genero;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("clientes", $reg, "INSERT");
if($rs1){
	header("Location: clientes.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("cliente_nuevo1.tpl");
}
?>