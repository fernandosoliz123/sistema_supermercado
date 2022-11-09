"use strict"
function validar(){
var cargo = document.formu.cargo.value;


if (cargo== "") {
	alert("Por favor ingrese el numero de cargo"); 
	document.formu.cargo.focus();
	return;

}
if (!v1.test(cargo)) {
	alert("el cargo esta vacio"); 
	document.formu.cargo.focus();
	return;
}
document.formu.submit();
}