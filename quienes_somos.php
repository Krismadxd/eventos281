<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Quiénes Somos</title>
  </head>
  <body>
    <h1>Quiénes Somos</h1>
    <?php
      // Conexión a la base de datos
      include("con_db.php");
      
      // Consulta para obtener los datos de "Quiénes Somos"
      $query = "SELECT * FROM pagina WHERE cod_pagina = 9";
      $resultado = mysqli_query($conn, $query);
      
      // Si la consulta tuvo éxito, mostramos los datos
      if($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        echo "QUIENES SOMOS:      "."<p>" . $fila['quienes_somos'] . "</p>";
        echo "MISION:      "."<p>" . $fila['mision'] . "</p>";
        echo "VISION:      "."<p>" . $fila['vision'] . "</p>";
        //echo "LOGOTIPO:      "."<p>" . $fila['logotipo'] . "</p>";
      } else {
        echo "<p>No se encontraron datos.</p>";
      }
      
      // Cerramos la conexión a la base de datos
      mysqli_close($conexion);
    ?>
  </body>
</html>
