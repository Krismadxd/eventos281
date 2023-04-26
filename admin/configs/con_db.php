<?php

// Conectamos a la base de datos MySQL
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$host = 'localhost';
$user = 'testuser';
$password = 'P@ssw0rd';
$dbname = 'eventos281';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>