"use strict"
function validar(){
	var nombre = document.formu.nombre.value;
	var telefono = document.formu.telefono.value;

	if (!v1.test(nombre)){
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	}
	if (telefono==""){
		alert("El telefono esta vacio");
		document.formu.telefono.focus();
		return;
	}
	
	document.formu.submit();
}