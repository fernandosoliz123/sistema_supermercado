"use strict"
function validar(){
	var id_proveedor = document.formu.id_proveedor.value;
	var usuario = document.formu.usuario.value;
	var clave = document.formu.clave.value;

	if (id_proveedor=="") {
		alert("Por favor seleccione un proveedor");
		document.formu.id_proveedor.focus();
		return;
	}
	if (usuario=="") {
		alert("Por favor ingrese al usuario");
		document.formu.usuario.focus();
		return;
	}
	if (clave == ""){
		alert("Por favor ingrese la clave");
		document.formu.clave.focus();
		return;
	}
	document.formu.submit();
}