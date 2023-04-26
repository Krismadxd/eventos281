<?php
include("../configs/con_db.php");

$ci = "";
if (!empty($_POST["ci"])) {
  $ci = $_POST["ci"];
} else {
  echo "Falta el parametro del ci";
}

$sql = sprintf("SELECT * FROM persona WHERE ci = '%s'", $ci);
$consulta = $conn->query($sql);
$data = $consulta->fetch_object();
?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>usuario</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <input type="number" class="form-control" name="ci" id="ci" value="<?php echo $data->ci;?>" aria-describedby="helpId" placeholder="ci">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $data->nombre;?>"aria-describedby="helpId" placeholder="Nombre">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="apaterno" id="apaterno" value="<?php echo $data->apaterno;?>" aria-describedby="helpId" placeholder="Apellido Paterno">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="amaterno" id="amaterno" value="<?php echo $data->amaterno;?>" aria-describedby="helpId" placeholder="Apalleido Materno">
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" <?php echo $data->sexo == "MASCULINO" ? "checked":"" ;?> value="MASCULINO">
                <label class="form-check-label" for="inlineRadio1">Masculino</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" <?php echo $data->sexo == "FEMENINO" ? "checked":"" ;?> value="FEMENINO">
                <label class="form-check-label" for="inlineRadio2">Femenino</label>
              </div>
              <div class="mb-3">
                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="<?php echo $data->fecha_nac;?>" aria-describedby="helpId" placeholder="dd/mm/aaaa">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" value="<?php echo $data->direccion;?>" placeholder="Direccion">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="correo" id="correo" aria-describedby="helpId" value="<?php echo $data->correo;?>" placeholder="correo">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" value="<?php echo $data->telefono;?>" placeholder="Telefono">
              </div>

              <div class="btn-group" role="group" aria-label="Button group name">
                <button type="submit" name="accion" value="editar" class="btn btn-success">Agregar</button>
              </div>
            </div>
          </div>
        </form>
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