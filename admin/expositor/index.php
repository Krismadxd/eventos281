<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>usuario</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
  <link rel="stylesheet" href="../template/css/bootstrap.css">
  <link rel="stylesheet" href="../template/css/style.css">
</head>

<body>
  <!-- Page Loader-->
  <div id="page-loader">
    <div class="page-loader-body">
      <div class="cssload-spinner">
        <div class="cssload-cube cssload-cube0"></div>
        <div class="cssload-cube cssload-cube1"></div>
        <div class="cssload-cube cssload-cube2"></div>
        <div class="cssload-cube cssload-cube3"></div>
        <div class="cssload-cube cssload-cube4"></div>
        <div class="cssload-cube cssload-cube5"></div>
        <div class="cssload-cube cssload-cube6"> </div>
        <div class="cssload-cube cssload-cube7"></div>
        <div class="cssload-cube cssload-cube8"></div>
        <div class="cssload-cube cssload-cube9"></div>
        <div class="cssload-cube cssload-cube10"></div>
        <div class="cssload-cube cssload-cube11"></div>
        <div class="cssload-cube cssload-cube12"></div>
        <div class="cssload-cube cssload-cube13"></div>
        <div class="cssload-cube cssload-cube14"></div>
        <div class="cssload-cube cssload-cube15"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page">
    <?php 
    include("../template/header.php");
    ?>
    <section class="section  bg-gray-lighter text-center">

      <div class="col-md-3 ">
        <br><br>
        <form action="admin_expositor_read.php" method="post">
          <div class="card">
            <div class="card-header ">
              Expositor
            </div>
            <div class="card-body">
              <div class="mb-3">
                <input type="number" class="form-control" name="ci" id="ci" value="<?php echo $ci; ?>" aria-describedby="helpId" placeholder="ci">
              </div>
              <div class="mb-3">
                <!--<label for="userbane" class="form-label">Nombre de usuario</label>-->
                <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Nombre de usuario">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="apaterno" id="apaterno" aria-describedby="helpId" placeholder="Apellido Paterno">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="amaterno" id="amaterno" aria-describedby="helpId" placeholder="Apalleido Materno">
              </div>
              <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="MASCULINO">
                <label class="form-check-label" for="inlineRadio1">Masculino</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="FEMENINO">
                <label class="form-check-label" for="inlineRadio2">Femenino</label>
              </div>
              <div class="mb-3">
                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" aria-describedby="helpId" placeholder="dd/mm/aaaa">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Direccion">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="correo">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">
              </div>

              <div class="btn-group" role="group" aria-label="Button group name">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-9">
        <br><br>
        <p class="heading-1">Expositores</p>
        <br>
        <div class="table-responsive">
          <?php
          include("../configs/con_db.php");

          // Ejecutamos la consulta SQL
          $resultado1 = $conn->query("SELECT * FROM persona p,expositor e WHERE p.ci =e.ci ORDER BY e.ci");
          $resultado2 = $conn->query("SELECT * FROM usuario u, expositor e WHERE u.cod_usuario=e.cod_usuario ORDER BY e.ci");


          ?>
          <div style="display: flex;">
            <table style="display: inline-block;" class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">usuario</th>
                  <th scope="col">Contraseña</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($fila2 = $resultado2->fetch_array()) {
                  // $resultado = $conexion->query("SELECT id_usuario FROM  WHERE nombre_usuario = 'juan'");
                ?>
                  <tr>
                    <td><?php echo $fila2['nombre_usuario']; ?></td>
                    <td><?php echo $fila2['contrasena']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <table style="display: inline-block;" class="table table-primary">
              <thead>
                <th scope="col">CI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apaterno</th>
                <th scope="col">Amaterno</th>
                <th scope="col">Sexo</th>

                <th scope="col">Fecha_Nacimiento</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acciones</th>

              </thead>
              <tbody>
                <?php while ($fila1 = $resultado1->fetch_array()) {
                  //$resultado = $conexion->query("SELECT ci FROM persona p,expositor e WHERE p.ci =e.ci");
                ?>
                  <tr>
                    <td><?php echo $fila1['ci']; ?></td>
                    <td><?php echo $fila1['apaterno']; ?></td>
                    <td><?php echo $fila1['amaterno']; ?></td>
                    <td><?php echo $fila1['nombre']; ?></td>
                    <td><?php echo $fila1['sexo']; ?></td>
                    <td><?php echo $fila1['fecha_nac']; ?></td>
                    <td><?php echo $fila1['direccion']; ?></td>
                    <td><?php echo $fila1['correo']; ?></td>
                    <td><?php echo $fila1['telefono']; ?></td>
                    <td>
                      <form action="editar.php" method="post">
                        <input type="hidden" name="ci" id="ci" value="<?php echo $fila1['ci'];   ?>" />
                        <input type="submit" value="Editar" name="accion" class="btn btn-success">
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <?php $conn->close(); ?>
        </div>


      </div>

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br>
    </section>

    <?php 
    include("../template/footer.php");
    ?>



  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="../template/js/core.min.js"></script>
  <script src="../template/js/script.js"></script>
</body>

</html>