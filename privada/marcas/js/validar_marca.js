"use strict"
function validar(){
	var id_proveedor = document.formu.id_proveedor.value;
	var marca = document.formu.marca.value;


	if (id_proveedor=="") {
		alert("Por favor seleccione un proveedor");
		document.formu.id_proveedor.focus();
		return;
	}
	if (marca=="") {
		alert("Por favor ingrese al marca");
		document.formu.marca.focus();
		return;
	}
	
	document.formu.submit();
}