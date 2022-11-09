<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../{$direc_css}"type="text/css">
    <script type="text/javascript" src="../js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/validar_categoria.js"></script>
</head>
<body>
    <div class="formu_ingreso_datos">
        <form action="persona_modificar1.php" method="post" name="formu">
            <h2>MODIFICAR  CATEGORIA</h2>
            {foreach item=r from=$categoria}
            <input type="text" name="categoria" size="15" placeholder="Categoria" value="{$r.categoria}" >(*)
            
            <p>
                <input type="hidden" name="accion" value="">
                <input type="hidden" name="id_categoria" value="{$r.id_categoria}">
                <input type="button" value="Aceptar" onclick="validar();" class="boton2">
                <input type="button" value="Cancelar" onclick="javascript:location.href='categorias.php';" class="boton2">
            </p>
            {/foreach}
            <p><b>(*)Campos Obligatorios</b></p>
        </form>
    </div>
</body>
</html>
