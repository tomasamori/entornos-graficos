<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja</title>
</head>
<body>
    <?php
        include ("ej2-conexion.php");
        
        $vCiudad = $_POST ['Ciudad'];
        $vSql = "SELECT * FROM ciudades WHERE ciudad='$vCiudad' ";
        $vResultado = mysqli_query($link, $vSql);
        
        if(mysqli_num_rows($vResultado) == 0)
        {
            echo ("Capital Inexistente...!!! <br>");
            echo ("<A href='./ej2-baja.html'>Continuar</A>");
        }
        else 
        {
            $vSql= "DELETE FROM ciudades WHERE ciudad = '$vCiudad' ";
            mysqli_query($link, $vSql);

            echo("La capital fue borrada<br>");
            echo("<A href='./ej2-menu.html'>Volver al Menu del ABM</A>");
        }
        
        mysqli_free_result($vResultado);
        
        mysqli_close($link);
    ?>
</body>
</html>