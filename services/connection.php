<?php

//ESTILOS POR PROCEDIMIENTOS
$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_login";

//CREAR LA CONEXIÓN
$conn = mysqli_connect($host, $user, $pass, $db);

//CHECKEAR LA CONEXIÓN
if(!$conn) {
    echo "Error: No se pudo conectar a la bd." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
    mysqli_set_charset($conn, "utf8");
}

?>
