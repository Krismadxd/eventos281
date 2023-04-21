<?php
// Recuperamos los datos del formulario

include("con_db.php");

$ci = $_POST['ci'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];



// Verificamos si el usuario ya existe en la tabla de usuarios
$sql = "SELECT * FROM usuario WHERE nombre_usuario = '$nombre_usuario'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // El usuario ya existe
    echo "El usuario ya existe en la base de datos";
} else {
    // El usuario no existe, insertamos el registro en la tabla de personas y usuarios
    $sql = "INSERT INTO usuario (nombre_usuario, contrasena)
    VALUES ('$nombre_usuario', '$contrasena')";
    mysqli_query($conn, $sql);
    $cod_usuario = mysqli_insert_id($conn);

    $sql = "INSERT INTO persona (ci, apaterno, amaterno, nombre, sexo, fecha_nac, direccion, correo, telefono, cod_usuario)
            VALUES ('$ci', '$apaterno', '$amaterno', '$nombre', '$sexo', '$fecha_nac', '$direccion', '$correo', '$telefono', '$cod_usuario')";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO participante (ci, cod_usuario)
    VALUES ('$ci', '$cod_usuario')";
    mysqli_query($conn, $sql);

    echo "El registro se insertó correctamente";
}

mysqli_close($conn);
?>
