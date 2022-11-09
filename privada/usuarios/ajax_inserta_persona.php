<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$ap1 = $_POST["ap1"];
$am1 = $_POST["am1"];
$nombres1 = $_POST["nombres1"];
$ci1 = $_POST["ci1"];
$direccion1 = $_POST["direccion1"];
$telef1 = $_POST["telef1"];
$genero1 = $_POST["genero1"];

//var_dump( $_POST);
//$db->debug=true;

//$smarty = new Smarty;

$reg = array();
$reg["id_superMercado"] = 1;
$reg["ap"] = $ap1;
$reg["am"] = $am1;
$reg["nombres"] = $nombres1;
$reg["ci"] = $ci1;
$reg["direccion"] = $direccion1;
$reg["telef"] = $telef1;
$reg["genero"] = $genero1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("personas", $reg, "INSERT");
?>