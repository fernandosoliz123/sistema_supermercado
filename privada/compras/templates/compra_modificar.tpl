<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../{$direc_css}"type="text/css">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/validar_compra.js"></script>
</head>
<body>
    <div class="formu_ingreso_datos">
        <form action="compra_modificar1.php" method="post" name="formu">
            <h2>MODIFICAR  COMPRAS</h2>
            {foreach item=r from=$compras}
            <input type="date" name="fecha" size="15" placeholder="Fecha" value="{$r.fecha}" >(*)
            <p>
            <input type="number" name="monto_final" size="15" placeholder="Monto final" onkeyup="this.value=this.value.toUpperCase()" value="{$r.monto_final}">(*)
            </p>
            <p>
                <input type="hidden" name="accion" value="">
                <input type="hidden" name="id_compra" value="{$r.id_compra}">
                <input type="button" value="Aceptar" onclick="validar();" class="boton2">
                <input type="button" value="Cancelar" onclick="javascript:location.href='compras.php';" class="boton2">
            </p>
            {/foreach}
            <p><b>(*)Campos Obligatorios</b></p>
        </form>
    </div>
</body>
</html>
