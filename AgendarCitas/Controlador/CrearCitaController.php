<?php 
if(!empty($_POST["enviar"])){
    if(!empty($_POST["motivo"]) && !empty($_POST["fecha"]) && !empty($_POST["idP"])){
        $motivo = $_POST["motivo"];
        $fecha = $_POST["fecha"];
        $IdP = $_POST["idP"];
        
        
        $sql = $conexion->query("insert into cita(Motivo, Fecha, pacienteId) values('$motivo', '$fecha', $IdP);");

        if($sql){
            echo "<div class = 'alert alert-success'>Se ha agendado la cita</div>";
        }else{
            echo "<div class = 'alert alert-danger'>Hubo un error al insertar los datos</div>";
        }
    }else{
        echo "<div class= 'alert alert-danger'>Debe de llenar todos los datos</div>";
    }
}



?>