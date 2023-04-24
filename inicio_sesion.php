<?php
// Conectarse a la base de datos
include("configs/con_db.php");

session_start();
// Recuperar los datos del formulario de inicio de sesión
$username = $_POST['username'];
$password2 = $_POST['contrasena'];

$sql = "SELECT * FROM administrativo a,usuario u WHERE u.nombre_usuario='$username' AND u.contrasena='$password2' AND a.cod_usuario=u.cod_usuario ";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

  //echo "soy admin";
  header('Location: admin_web.html');
} else {
  // Realizar una consulta SQL para buscar al usuario en la tabla de usuarios

  $sql = "SELECT * FROM expositor e,usuario u WHERE u.nombre_usuario='$username' AND u.contrasena='$password2' AND e.cod_usuario=u.cod_usuario ";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {

    //echo "soy admin";
    header('Location: perfil_expositor.html');
  } else {


    $sql = "SELECT * FROM participante p,usuario u WHERE u.nombre_usuario='$username' AND u.contrasena='$password2' AND p.cod_usuario=u.cod_usuario ";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {


      //  echo "soy expositor";
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user_id'] = $row['cod_usuario'];
      $_SESSION['user_name'] = $row['nombre_usuario'];
      $_SESSION['user_email'] = $row['contrasena'];
      // $sqlpersona = "SELECT cod_participante, ci, cod_usuario FROM participante where cod_participante='$id_usuario'"


      header('Location: participante_eventos.html');


      exit();
    } else {
      // Si no se encuentra el usuario, mostrar un mensaje de error
      echo "Nombre de usuario o contraseña incorrectos.";
    }
  }
}
// Cerrar la conexión a la base de datos
mysqli_close($conn);
