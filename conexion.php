<!DOCTYPE html>
<head>
    <title> conexion</title>
    <meta charset="utf8">
</head>
<header>
    <center><h1>conexion</h1></center>
</header>

<body>

<?php
//conexion con base de datos

$conexion= new mysqli("localhost","root","","mybook");
if ($conexion)
    {
        echo"conexion establecida";
    }
    else 
    {
        echo"Error:No se pudo conectar con My SQL";
    }
?>

</body>
</html>
