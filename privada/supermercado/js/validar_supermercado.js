"use strict"
function validar (){
	var nombre = document.formu.nombre.value;
	var Email = document.formu.Email.value;


	if(nombre==""){
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	}
	if(Email==""){
		alert("el Email no es valido o el campo esta vacio");
		document.formu.Email.focus();
		return;
	}
	document.formu.submit();
}