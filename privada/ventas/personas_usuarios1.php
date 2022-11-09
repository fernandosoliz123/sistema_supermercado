<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$smarty =new Smarty();
$sql= $db->Prepare("SELECT * 
	                   FROM ventas ve, clientes cli
                       WHERE ve.id_venta=cli.id_cliente
                        AND ve.estado <> '0' 
                        AND cli.estado <> '0' 
                        ORDER BY (cli.id_venta) DESC
                        ");
$rs=$db->GetAll($sql);
$sql1=$db->Prepare("SELECT * 
	                   FROM clientes
	                   WHERE id_cliente =1 
	                   AND estado <> '0' 
	               
	                   ");
$rs1=$db->GetAll($sql1);
$nombre=$rs1[0]["Nombre"];

$Logo=$rs1[0]["Logo"];

$fecha =date("Y-m-d H:i:s" );

$smarty->assign("ventas_clientes",$rs);
$smarty->assign("logo",$Logo);
$smarty->assign("fecha",$fecha);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ventas_clientes.tpl");
