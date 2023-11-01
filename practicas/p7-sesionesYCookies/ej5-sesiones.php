<?php
session_start();

extract($_POST);

$_SESSION['usuario'] = $usuario;
$_SESSION['clave'] = $clave;

print('clave')

    ?>

<a href="ej5-perfil.php">Ir al perfil</a>