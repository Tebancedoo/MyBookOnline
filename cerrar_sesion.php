<?php
include("conexion.php");
session_destroy();
header("Location: pagina books.html");
?>