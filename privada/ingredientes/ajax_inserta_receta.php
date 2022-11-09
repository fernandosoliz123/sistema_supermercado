<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$receta = $_POST["receta"];
$foto = $_POST["foto"];
$fecha_realizacion = $_POST["fecha_realizacion"];



//var_dump( $_POST);
$db->debug=true;

$smarty = new Smarty;

$reg = array();

$reg["receta"] = $receta;
$reg["foto"] = $foto;
$reg["fecha_realizacion"] = $fecha_realizacion;

$rs1 = $db->AutoExecute("recetas", $reg, "INSERT");
?>