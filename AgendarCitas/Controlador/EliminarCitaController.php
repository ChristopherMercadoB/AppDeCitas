<?php 
if(!empty($_GET['id'])){
    $Id = $_GET['id'];
    $sql = $conexion->query("delete from cita where Id = $Id ");
    
    if($sql){
        echo "<div class = 'alert alert-danger'> Cita Eliminada </div>";
    }
}


?>