<?php
($link = mysqli_connect("localhost:3306", "root")) or
    die("No se ha podido establecer la conexion con la base de datos");
mysqli_select_db($link, "base2");
?>