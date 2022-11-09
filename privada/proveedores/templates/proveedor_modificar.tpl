<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_proveedor.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="proveedor_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR PROVEEDORES</h2>
		{foreach item=r from=$persona}	
		  	<input type="text" name="nombre" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre_proveedor}">(*)
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}">
		  </p>
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono" value="{$r.telefono}">(*)
		  </p> 
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_proveedor" value="{$r.id_proveedor}">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='proveedores.php';" class="boton2">
		  </p>
		  {/foreach}
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>