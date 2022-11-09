<?php
 session_start(); 
 require_once ("../../smarty/libs/Smarty.class.php"); 
 require_once ("../../conexion.php" ); 

 $marca = $_REQUEST["marca"];

 $smarty = new Smarty ; 

 $db->debug = true ; 

 if ($marca == "T"){

     $sql = $db->Prepare("SELECT * 
          FROM marcas m, productos p
          WHERE m.id_marca = p.id_marca
          AND m.estado <> '0' 
          AND p.estado <> '0' 
          ORDER BY (p.id_marca) DESC
          ");

    $rs = $db->GetAll($sql); 

 }else{

$sql = $db->Prepare("SELECT *
          FROM marcas m, productos p
          WHERE m.id_marca = p.id_marca
          AND marca = ?
          AND m.estado <> '0' 
          AND p.estado <> '0' 
          ORDER BY (p.id_marca) DESC
          ");


     $rs = $db->GetAll($sql,array($marca)); 
}

 	 $sql1 = $db->Prepare("SELECT *
 	 					FROM SuperMercado
 	 					WHERE id_superMercado = 1
 	 					AND estado <> '0'
 	 					");

 	 $rs1 = $db->GetAll($sql1);
 	 $nombre = $rs1[0]["nombre"];
 	 $Logo = $rs1[0]["Logo"];

 	 $fecha= date("Y-m-d H:i:s");

 	 $smarty->assign("productos_marcas1" ,$rs); 
 	 $smarty->assign("Logo" ,$Logo);
 	 $smarty->assign("fecha" ,$fecha);
 	 $smarty->assign("direc_css" , $direc_css); 
 	 $smarty->display("rpt_productos_marcas1.tpl");
?>