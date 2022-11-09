"use strict"
function validar(){
	var id_producto = document.formu.id_producto.value;
	var precio = document.formu.precio.value;


	if (id_producto=="") {
		alert("Por favor seleccione un producto");
		document.formu.id_producto.focus();
		return;
	}
	if (precio=="") {
		alert("Por favor ingrese precios");
		document.formu.precio.focus();
		return;
	}
	
	document.formu.submit();
}