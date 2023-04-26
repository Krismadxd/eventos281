<?php
include("../configs/con_db.php");

$accion = $_POST['accion'];
if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            $ci = $_POST['ci'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nombre = $_POST['nombre'];
            $apaterno = $_POST['apaterno'];
            $amaterno = $_POST['amaterno'];
            $sexo = $_POST['sexo'];
            $fecha_nac = $_POST['fecha_nac'];
            $direccion = $_POST['direccion'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $sql = "INSERT INTO usuario(nombre_usuario, contrasena) VALUES ('$username', '$password')";
            $consulta = $conn->query($sql);

            $cod_usuario = mysqli_insert_id($conn);
            $sql = "INSERT INTO persona (ci, nombre, apaterno, amaterno, sexo, fecha_nac, direccion, correo, telefono,cod_usuario) VALUES ('$ci',  '$nombre', '$apaterno', '$amaterno', '$sexo', '$fecha_nac', '$direccion', '$correo', '$telefono',$cod_usuario)";
            $consulta = $conn->query($sql);
            $sql = "INSERT INTO expositor (ci, cod_usuario) VALUES ('$ci', '$cod_usuario')";
            $consulta = $conn->query($sql);
            break;
        case 'editar':
            $ci = $_POST['ci'];
            $nombre = $_POST['nombre'];
            $apaterno = $_POST['apaterno'];
            $amaterno = $_POST['amaterno'];
            $sexo = $_POST['sexo'];
            $fecha_nac = $_POST['fecha_nac'];
            $direccion = $_POST['direccion'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $sql = "UPDATE persona SET nombre='$nombre', apaterno='$apaterno', amaterno='$amaterno', sexo='$sexo', fecha_nac='$fecha_nac', direccion='$direccion', correo='$correo', telefono='$telefono' WHERE ci='$ci'";

            if (mysqli_query($conn, $sql)) {
                echo "Los datos de la persona han sido actualizados exitosamente.";
            } else {
                echo "Error al actualizar los datos de la persona: " . mysqli_error($conn);
            }
            break;
        case 'borrar':
            $sql = "DELETE FROM expositor WHERE ci = '$ci'";
            echo $sql; // mysqli_query($conexion, $sql);

            $sql = "DELETE FROM persona WHERE ci = '$ci'";
            echo $sql; // mysqli_query($conexion, $sql);

            $sql = "DELETE FROM usuario u, persona p WHERE u.nombre_usuario = '$username' AND u.contrasena = '$password' ";
            echo $sql; // mysqli_query($conexion, $sql);


            break;

        case 'seleccionar':
            echo "hola mundo";
            // $sql = "SELECT * FROM persona WHERE ci = ?";
            // $consulta = $conn->prepare($sql);
            //  $consulta->execute([$ci]);
            // $expositor = $consulta->fetch(PDO::FETCH_ASSOC);
            // print_r($expositor);
            // echo "nada";

            $sql = "SELECT * FROM persona WHERE ci = $ci";
            $consulta = $conn->query($sql);
             print_r($consulta);
             // $apaterno = $expositor['apaterno'];

            // $ci = $expositor['ci'];

            break;
    }
    header('Location: admin_expositor.php');
} else {
    echo "algo salio mal";
}












mysqli_close($conn);







// Ejecutamos la consulta SQL
//$resultado = $conn->query("SELECT * FROM persona");

// Iteramos sobre todas las filas del conjunto de resultados
//while ($fila = $resultado->fetch_array()) {
 //   echo $fila['ci'] . " " . $fila['nombre'] . "<br>";
//}

// Cerramos la conexión a la base de datos
//$conn->close();
