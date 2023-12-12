<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear paciente</title>
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
            <a class="nav-link active" aria-current="page" href="Pacientes.php">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Cita.php">Cita</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>

<br><br><br><br>
      <div class="col-md-7 col-lg-8 text-center">
        <h4 class="mb-3"style="vertical-align: inherit;" style="vertical-align: inherit;">Agregar Pacientes</h4>
        <?php 
        include "Modelo/conexion.php";
        include "Controlador/CrearPacienteController.php";
        
        ?>
        <form  method="Post" >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label" style="vertical-align: inherit;"style="vertical-align: inherit;">Nombre</label>
              <input type="text" class="form-control"  name="nombre">
              <div class="invalid-feedback" style="vertical-align: inherit;" style="vertical-align: inherit;">
              </div>
            </div>


            <div class="col-sm-6">
              <label for="lastName" class="form-label" style="vertical-align: inherit;" style="vertical-align: inherit;">Imagen</label>
              <input type="text" class="form-control"  name="imagen">
              <div class="invalid-feedback" style="vertical-align: inherit;" style="vertical-align: inherit;">
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label" style="vertical-align: inherit;"style="vertical-align: inherit;">Numero de contacto</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="telefono">
              <div class="invalid-feedback" style="vertical-align: inherit;" style="vertical-align: inherit;">
                </div>
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit" style="vertical-align: inherit;" style="vertical-align: inherit;" value="ok" name="enviar">Guardar</button>
        </form>
        
      </div>
    </div>
</body>
</html>