<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación</title>
</head>
<body>
<?php
    include ("ej2-conexion.php");

    $vCiudad = $_POST['Ciudad'];
    $vPais = $_POST['Pais'];
    $vHab = $_POST['Hab'];
    $vSup = $_POST['Sup'];
    $vTieneMetro = isset($_POST['TieneMetro']);

    $vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHab', superficie='$vSup', tieneMetro=" . (boolval($vTieneMetro) ? 1 : 0) . " where ciudad='$vCiudad'";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    
    echo("La ciudad fue Modificada<br>");
    echo("<A href= './menu.html'>Volver al Menu del ABM</A>");
    
    mysqli_close($link);
?>
</body>
</html>