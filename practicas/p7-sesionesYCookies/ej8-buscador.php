<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h2>Canciones</h2>
    <br>
    <form action="ej8-buscador.php" method="post">
        <label for="cancion">
            Buscar:
            <input type="text" name="cancion" id="cancion" placeholder="Canción">
        </label>
        <input type="submit" value="Aceptar">
    </form>
    <?php if (isset($_POST["cancion"])) {
        include "ej8-conexion.php";
        $cancion = $_POST["cancion"];
        $vSql = "SELECT * FROM buscador WHERE canciones LIKE '%$cancion%'";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros = mysqli_num_rows($vResultado);
        echo "<br>";
        echo "<h3>Resultados para: $cancion</h3>";
        echo "<ul>";
        if ($total_registros > 0) {
            while ($fila = mysqli_fetch_array($vResultado)) {
                $nombre = $fila["canciones"];
                echo "<li>$nombre</li>";
            }
        } else {
            echo "No hay resultados.";
        }
        echo "</ul>";
    } ?>
</body>

</html>