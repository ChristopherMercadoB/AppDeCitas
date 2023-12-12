<?php 
include "modelo/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Pacientes.php">Pacientes</a>
          </li>
        </ul>
        <form class="d-flex" role="search" method="Post" >
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name = "busqueda">
          <button class="btn btn-outline-success" type="submit" name = "buscar" value="ok" >Search</button>
        </form>
      </div>
    </div>
  </nav>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Citas</h1>
        <p>
          <a href="CrearCita.php" class="btn btn-primary my-2">Crear Cita</a>
        </p>
      </div>
    </div>
  </section>
<?php 
include "Controlador/EliminarCitaController.php";
?>

    <?php 
    if(!empty($_POST['buscar'])){
      $valor = $_POST['busqueda'];
      $sql = $conexion->query("select * from cita where motivo like '%$valor%' ");
    }
    else{
      $sql = $conexion->query("select * from cita");
    }

    while($data = $sql->fetch_object()){
        $motivo = $data->Motivo;
        $Id = $data->Id;
        $fecha = $data->Fecha;
        $IdP = $data->pacienteId;
        ?>

        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
                <h6 class ="card-text"><?=$motivo?></h6>
                <h6 class ="card-text">Id del paciente: <?=$IdP?></h6>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a type="button" href = "index.php?id=<?=$Id?>" class="btn btn-sm btn-outline-danger" value ="ok" name ="delete" >Eliminar</a>
                </div>
                <small class="text-body-secondary"><?=$fecha?></small>
              </div>
            </div>
          </div>
        </div>
    <?php
    }
    
    ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">


</body>
</html>