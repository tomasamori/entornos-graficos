<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Capital</title>
</head>
<body>
    <?php
        include("ej2-conexion.php");
        
        $vCiudad = $_POST['Ciudad'];
        $vPais = $_POST['Pais'];
        $vHab = $_POST['Hab'];
        $vSup = $_POST['Sup'];
        $vTieneMetro = isset($_POST['TieneMetro']);

        $vSql = "SELECT Count(ciudad) as canti FROM ciudades WHERE ciudad='$vCiudad'";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $vCantCapitales = mysqli_fetch_assoc($vResultado);

        
            $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) values ('$vCiudad','$vPais', '$vHab', '$vSup', " . (boolval($vTieneMetro) ? 1 : 0) . ")";
            mysqli_query($link, $vSql) or die (mysqli_error($link));

            echo("La capital fue registrada con éxito<br>");
            echo ("<A href='./ej2-menu.html'>VOLVER AL MENU</A>");
            
            mysqli_free_result($vResultado);
        
        mysqli_close($link);
    ?>
</body>
</html>