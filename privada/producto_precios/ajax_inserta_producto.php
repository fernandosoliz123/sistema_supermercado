<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre1 = $_POST["nombre1"];

//var_dump( $_POST);
//$db->debug=true;

//$smarty = new Smarty;

$reg = array();
$reg["id_superMercado"] = 1;
$reg["id_categoria"] = 1;
$reg["id_marca"] = 1;
$reg["nombre"] = $nombre1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("productos", $reg, "INSERT");
?>