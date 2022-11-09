<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");



$smarty = new Smarty;

/*$db->debug=true;*/


     $sql = $db->Prepare("SELECT * 
          FROM vehiculos v, clientes1 c
          GROUP BY (c.cliente) DESC
          ");

    $rs = $db->GetAll($sql); 


$smarty->assign("vehiculos",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("ficha_tecnica_vehiculo.tpl");
?>