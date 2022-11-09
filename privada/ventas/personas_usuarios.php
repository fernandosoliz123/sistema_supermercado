<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$direc_css ="../css/colores.css";
$smarty= new  Smarty;
//$db->debug=true;

$sql = $db->Prepare("SELECT *
	                   FROM ventas ve, clientes cli
	                   WHERE ve.id_venta =u.id_venta 
	                   AND ve.estado <> '0'
	                   AND cli.estado <> '0'
	                   ORDER BY (u.id_venta) DESC
	                  
	                   ");
$rs=$db->GetAll($sql);

$smarty->assign("ventas_clientes",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ventas_clientes.tpl");
?>