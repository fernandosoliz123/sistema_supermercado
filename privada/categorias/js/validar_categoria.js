"use strict"
function validar(){
var categoria = document.formu.categoria.value;


if (categoria== "") {
	alert("Por favor ingrese la Categoria"); 
	document.formu.categoria.focus();
	return;

}


document.formu.submit();
}