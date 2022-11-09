"use strict"
function validar(){
	var id_marca = document.formu.id_marca.value;
	var nombre = document.formu.nombre,value;
	 

	if (id_marca=="") {
		alert("Por favor seleccione una  marca");
		document.formu.id_marca.focus();
		return;
	}
	if (nombre=="") {
		alert("Por favor ingrese el nombre");
		document.formu.nombre.focus();
		return;
	}
	
	document.formu.submit();
}