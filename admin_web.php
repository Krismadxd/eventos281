<?php 
include("con_db.php");

$quienes = $_POST['quienes'];
$mision = $_POST['mision'];
$vision = $_POST['vision'];
//$logotipo = file_get_contents($_FILES['logotipo']['tmp_name']);
$sql = "INSERT INTO pagina( quienes_somos, mision, vision, logotipo) 
                    VALUES ('$quienes','$mision','$vision','hola')";
mysqli_query($conn, $sql);

?>