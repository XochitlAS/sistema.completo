<?php 

include ('../core/conexion.php');

if(isset($_POST["btn"])){
$idBtn = $_POST["btn"];

$serv= "UPDATE servicio SET terminado = 1 WHERE servicio.id = $idBtn "; //aqui debe solo mostrar las notificaciones de historial para los usuarios determinados
$notis= "UPDATE notificaciones SET terminado = 1 WHERE notificaciones.id_servicio = $idBtn "; //aqui debe solo mostrar las notificaciones de historial para los usuarios determinados

$query = mysqli_query($conexion,$serv);
$query2 = mysqli_query($conexion,$notis);

}
?>