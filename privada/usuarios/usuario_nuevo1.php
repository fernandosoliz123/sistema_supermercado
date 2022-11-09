<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
var_dump($_POST);
$id_persona=$_POST["id_persona"];
$usuario1=$_POST["usuario"];
$clave= $_POST["clave"];

$hash=password_hash($clave, PASSWORD_DEFAULT);

$smarty=new Smarty;
//$db->debug=true;
	$reg=array();
	$reg["id_persona"] =$id_persona;
	$reg["usuario1"]=$usuario1;
	$reg["clave"]=$hash;
	$reg["fec_insercion"]=date("Y-m-d H:i:s");
	$reg["estado"]='1';
	$reg["usuario"]=$_SESSION["sesion_id_usuario"];
	$rs1=$db->AutoExecute("usuarios", $reg, "INSERT");

if ($rs1){
	header("Location: usuarios.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insetaron!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("usuario_nuevo1.tpl");
}
?>

