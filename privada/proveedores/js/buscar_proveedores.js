"use strict"
function buscar_proveedores(){
var d1,d2,d3, ajax,url,param,contenedor;
contenedor = document.getElementById('proveedores1');
d1 = document.formu.Nombre.value;
d2 =document.formu.Direccion.value;
d3 =document.formu.Telefono.value;
ajax = nuevoAjax();
url = "ajax_buscar_proveedor.php"
param = "Nombre="+d1+"&Direccion="+d2+"&Telefono="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 3) { /*donde esta el 3 la cantidad de variables d1,d2,d3,etc..*/
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}
