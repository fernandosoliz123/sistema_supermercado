<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../{$direc_css}"type="text/css">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/validar_cliente.js"></script>
</head>
<body>
    <div class="formu_ingreso_datos">
        <form action="cliente_modificar1.php" method="post" name="formu">
            <h2>MODIFICAR  CLIENTE</h2>
            {foreach item=r from=$cliente}
            
            <input type="text" name="Nombre" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Nombre}">(*)
            </p>
            <p>
            <input type="text" name="apellido_paterno" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellido_paterno}">(*)
            </p>
            <p>
            <input type="text" name="apellido_materno" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellido_materno}">(*)
            </p>
            <input type="text" name="ci" size="15" placeholder="Carnet de Identidad" value="{$r.ci}" >(*)
            <p>
            <p>
            <input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}">
            </p>
            <p>
                <input type="hidden" name="accion" value="">
                <input type="hidden" name="id_cliente" value="{$r.id_cliente}">
                <input type="button" value="Aceptar" onclick="validar();" class="boton2">
                <input type="button" value="Cancelar" onclick="javascript:location.href='clientes.php';" class="boton2">
            </p>
            {/foreach}
            <p><b>(*)Campos Obligatorios</b></p>
        </form>
    </div>
</body>
</html>
