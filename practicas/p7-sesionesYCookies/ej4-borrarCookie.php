<?php
  setcookie("noticia", null, time() - 60);
  header("Location: ej4-index.php");
?>