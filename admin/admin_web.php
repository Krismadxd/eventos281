<?php 
include("../configs/con_db.php");

$quienes = $_POST['quienes'];
$mision = $_POST['mision'];
$vision = $_POST['vision'];

$sql = "INSERT INTO pagina( quienes_somos, mision, vision, logotipo) 
                    VALUES ('$quienes','$mision','$vision','hola')";
mysqli_query($conn, $sql);

?>