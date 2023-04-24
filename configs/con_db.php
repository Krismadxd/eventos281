<?php

// Conectamos a la base de datos MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'eventos281';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>