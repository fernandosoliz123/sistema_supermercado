<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../{$direc_css}"type="text/css">
    <script type="text/javascript">
        var ventanaCalendario=false
        function imprimir(){
            if (confirm('Desea Imprimir ?')){
                window.print();
            }
        }
    </script>
</head>
<body style='cursor:pointer;cursor:hand' onclick="imprimir();">
    <table width="100%" border="0">
        <tr>
            <td><img src="../../img/{$logo}" width="70%" >
            </td>
            <td align="center" width="80%">
            <h1>VENTAS CON FECHAS</h1>
        </td>
        </tr>
    </table>
    <br>
    <center>
        <table border="1" cellspacing="0">
            <tr>
                <th>NRO</th><th>VENTAS</th><th>FECHA INSERCION</th>
            </tr>
            {assign var="b" value="1"}
            {foreach item=r from=$ventas_fechas1}
            <tr>
                <td align="center">{$b}</td>
                <td> {$r.Monto_final} {$r.Fecha} {$r.descuento}</td>
                <td><i>{$r.fec_insercion}</i>></td>
                {assign var="b" value="`$b+1`"}
            {/foreach}
            </tr>
        </table>
        <br><br>
    </center>
    <b>DEL:</b>{$fechas1} <b>A</b>{$fechas2}
</body>
</html>
