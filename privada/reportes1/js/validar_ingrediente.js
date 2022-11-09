"use strict"
function validar(){
	var id_receta=document.formu.id_receta.value;
	var cantidad=document.formu.cantidad.value;
	var unidad=document.formu.unidad.value;
	var ingrediente=document.formu.ingrediente.value;

	if(id_receta == ""){
		alert("Por favor seleccione una receta");
		document.formu.id_receta.focus();
		return;
	}
	if(cantidad == ""){
		alert("Por favor ingrese la cantidad")
		document.formu.cantidad.focus();
		return;
	}
	if(unidad == "") {
		alert("Por favor ingrese la unidad");
		document.formu.unidad.focus();
		return;
	}
	if(ingrediente == "") {
		alert("Por favor ingrese el ingrediente");
		document.formu.ingrediente.focus();
		return;
	}

	document.formu.submit();
}