<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Práctica 7 - Ejercicio 3</h1>
    <p>
    Crear un formulario que solicite la carga del nombre de usuario. Cuando se presione un botón
    crear una cookie para dicho usuario. Luego cada vez que ingrese al formulario mostrar el último
    nombre de usuario ingresado.
    </p>
    <p>Integrantes del grupo: </p>
    <br>
    <ul>
        <li>Amori, Tomás</li>
        <li>Mayor, Matías</li>
        <li>Tombolini, Santiago</li>
    </ul>
    <?php if (isset($_COOKIE["usuario"])) {
        echo "<p>El nombre del usuario ingresado es: " .
            $_COOKIE["usuario"] .
            "</p>";
        echo "<p>Ingrese un nuevo nombre para cambiarlo</p>";
    } else {
        echo "<p>Ingrese un nombre de usuario:</p>";
    } ?>

    <form action="ej3-actualizarUsuario.php" method="post">
        <input type="text" name="usuario" id="usuario">
        <input type="submit" value="Cambiar nombre">
    </form>

</body>

</html>