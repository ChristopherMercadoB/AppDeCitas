<?php 
if(!empty($_GET['id'])){
    $Id = $_GET['id'];
    $sql = $conexion->query("delete from paciente where Id = $Id ");
    
    if($sql){
        echo "<div class = 'alert alert-danger'> Paciente Eliminada </div>";
    }
}

?>