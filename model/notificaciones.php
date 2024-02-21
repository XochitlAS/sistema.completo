<?php

include ('../core/conexion.php');

if($_POST["botonId"] && $_POST["servId"]){
    $botonId = $_POST['botonId'];
    $servId = $_POST['servId'];
   
 
    $sql="INSERT INTO `notificaciones` (`id_user`,`id_servicio`)  VALUES ('$botonId','$servId')";
    $query = mysqli_query($conexion,$sql);


    echo "ID del boton recivido: $servId";
}else{
    echo "ID del boton no recivido";

}
?>
