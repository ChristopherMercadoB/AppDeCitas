<?php 
include "Modelo/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">CL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Citas</a>
          </li>
         
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda" >
          <button class="btn btn-outline-success" type="submit" value="ok" name="buscar" >Search</button>
        </form>
      </div>
    </div>
  </nav>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Pacientes</h1>
        <p>
          <a href="CrearPaciente.php" class="btn btn-primary my-2">Agregar un paciente</a>
        </p>
      </div>
    </div>
  </section>
  <?php 
  include "Controlador/EliminarPacienteController.php";
  ?>

  <?php 
  if(isset($_POST['buscar'])){
    $valor = $_POST['busqueda'];
    $sql = $conexion->query("select * from paciente where Nombre like '%$valor%' ");
  }
  else{
    $sql = $conexion->query("select * from paciente");
  }

  while($data = $sql->fetch_object()){
    $nombre = $data->Nombre;
    $Id = $data->Id;
    $telefono = $data->Telefono;
    $Img = $data->urlImg;
    ?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="<?=$Img?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <h6 class ="card-text"><?=$nombre?></h6>
                <a type="button" href = "Pacientes.php?id=<?=$Id?>" class="btn btn-sm btn-outline-danger" value ="ok" name ="delete" >Eliminar</a>
                </div>
                <small class="text-body-secondary"><?=$telefono?></small>
              </div>
            </div>
          </div>
        </div>
  </div>
<?php
}

?>


       
</body>
</html>