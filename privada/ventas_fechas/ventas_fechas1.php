<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$fecha1=$_REQUEST['fecha1'];
$fecha2=$_REQUEST["fecha2"];
$smarty=new Smarty;
/*$db->debug = true;*/

$fecha1=$fecha1." 00:00:00";
$fecha2=$fecha2." 23:59:00";
$db->debug=false;

$sql=$db->Prepare("SELECT *
	               FROM ventas
	               WHERE fec_insercion BETWEEN ? AND ?
	               AND estado <> '0'

	               ");
$rs = $db->GetAll($sql, array($fecha1, $fecha2));




$sql1=$db->Prepare("SELECT * 
	                   FROM clientes
	                   WHERE id_cliente =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$Nombre=$rs1[0]["Nombre"];
$smarty->assign("ventas_fechas1",$rs);
$smarty->assign("logo",$Logo);
$smarty->assign("fechas1",$fecha1);
$smarty->assign("fechas2",$fecha2);

$smarty->assign("direc_css",$direc_css);
$smarty->display("ventas_fechas1.tpl");

?>