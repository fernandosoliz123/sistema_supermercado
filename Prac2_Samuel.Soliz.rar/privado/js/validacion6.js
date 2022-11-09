"use strict"
function validar (){
	var nombre = document.form5.nombre.value;
	var apellido_paterno = document.form5.apellido_paterno.value;
	var apellido_materno = document.form5.apellido_materno.value;
	var fecha_inicio = document.form5.fecha_inicio.value;
	var fecha_fin = document.form5.fecha_fin.value;
	var direccion = document.form5.direccion.value;
	var telefono = document.form5.telefono.value;

	if((!v1.test(nombre))|| (nombre=="")){
		alert("el nombre es incorrecto o esta vacio");
		document.form5.nombre.focus();
		return;
	}
	if((!v1.test(apellido_paterno))|| (apellido_paterno=="")){
		alert("el apellido paterno es incorrecto o esta vacio");
		document.form5.apellido_paterno.focus();
		return;
	}
	
	if((!v1.test(apellido_materno))|| (apellido_materno=="")){
		alert("el apellido materno es incorrecto o esta vacio");
		document.form5.apellido_materno.focus();
		return;
	}

	if((!v1.test(fecha_inicio))|| (fecha_inicio=="")){
		alert("el apellido materno es incorrecto o esta vacio");
		document.form5.fecha_inicio.focus();
		return;
	}
	if((!v1.test(fecha_fin))|| (fecha_fin=="")){
		alert("el apellido materno es incorrecto o esta vacio");
		document.form5.fecha_fin.focus();
		return;
	}
	if (direccion==""){
		alert("La direccion esta vacia");
		document.form5.direccion.focus();
		return;
	}
	if ((!v2.test(telefono))||(telefono=="")){
		alert("El telefono esta vacio o incorrecto");
		document.form5.telefono.focus();
		return;
	}
document.form5.submit();

}
function reset(){
	var nombreSuper=null;
	var correoSuper=null;
}