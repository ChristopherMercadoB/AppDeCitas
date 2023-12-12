<?php 
if(!empty($_POST["enviar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["imagen"]) && !empty($_POST["telefono"])){
        $nombre = $_POST["nombre"];
        $Img = $_POST["imagen"];
        $telefono = $_POST["telefono"];
        
        
        $sql = $conexion->query("insert into paciente(Nombre, urlImg, Telefono) values('$nombre', '$Img', $telefono);");

        if($sql){
            echo "<div class = 'alert alert-success'>Se ha agregado el paciente</div>";
        }else{
            echo "<div class = 'alert alert-danger'>Hubo un error al insertar los datos</div>";
        }
    }else{
        echo "<div class= 'alert alert-danger'>Debe de llenar todos los datos</div>";
    }
}



?>