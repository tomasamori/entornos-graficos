<?php
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];<
    setcookie("estilo", $estilo, time() + 60 * 60 * 24 * 90);
} else {
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>

<head>
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Práctica 7 - Ejercicio 4</h1>
    <p>
    Confeccionar una página que simule ser la de un periódico. La misma debe permitir configurar qué
    tipo de titular deseamos que aparezca al visitarla, pudiendo ser:
    Noticia política, Noticia económica o Noticia deportiva.
    Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico.
    Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el
    sitio deben aparecer los tres titulares. Disponer un hipervínculo a una tercer página que borre la
    cookie creada.
    </p>

    <p>Integrantes del grupo: </p>
    <br>
    <ul>
        <li>Amori, Tomás</li>
        <li>Mayor, Matías</li>
        <li>Tombolini, Santiago</li>
    </ul>
    <br>
    <br>
    <?php if (isset($_COOKIE["noticia"])) {
        if ($_COOKIE["noticia"] == "politica") {
            echo "<h1>Elecciones 2023</h1>";
            echo "<h2>Titular " . $_COOKIE["noticia"] . "</h2>";
        } elseif ($_COOKIE["noticia"] == "economica") {
            echo "<h1>Economía en Argentina</h1>";
            echo "<h2>Titular " . $_COOKIE["noticia"] . "</h2>";
        } elseif ($_COOKIE["noticia"] == "deportiva") {
            echo "<h1>Despedida Maxi Rodriguez</h1>";
            echo "<h2>Titular " . $_COOKIE["noticia"] . "</h2>";
        }
    } else {
        echo '
        <table border=1 padding=5>
            <tr>
                <td>
                    <h1>Economía en Argentina</h1>
                    <h2>Titular económico</h2>
                </td>
                <td>
                    <h1>Despedida Maxi Rodriguez</h1>
                    <h2>Titular deportivo</h2>
                </td>
                <td>
                    <h1>Elecciones 2023</h1>
                    <h2>Titular político</h2>
                </td>
            </tr>
        </table>
        ';
    }
    ?>

    <form action="ej4-noticia.php" method="post">
        <p>
            Aquí puedes seleccionar el titular que deseas que aparezca en el diario:<br>
            <input type="radio" name="noticiaActual" value="politica"> Noticia política <br>
            <input type="radio" name="noticiaActual" value="economica"> Noticia económica<br>
            <input type="radio" name="noticiaActual" value="deportiva"> Noticia deportiva
        </p>
        <p>
            <input type="submit" value="Confirmar">
        </p>
    </form>

    <form action="ej4-borrarCookie.php" method="post">
        <input type="submit" value="Borrar cookies">
    </form>
</body>

</html>