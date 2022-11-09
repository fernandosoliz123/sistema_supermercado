<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_cliente=$_REQUEST["id_cliente"];
$Nombre = $_POST["nombres"];
$apellido_paterno = $_POST["ap"];
$apellido_materno = $_POST["am"];
$ci = $_POST["ci"];
$direccion = $_POST["direccion"];

$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["nombres"] = $Nombre;
$reg["ap"] = $apellido_paterno;
$reg["am"] = $apellido_materno;
$reg["ci"] = $ci;
$reg["direccion"] = $direccion;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("clientes", $reg, "UPDATE", "id_cliente='".$id_cliente."'");

if($rs1){
	header("Location: clientes.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_cliente", $id_cliente);
	$smarty->display("cliente_modoficar1.tpl");
}
?>