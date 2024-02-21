<?php

include ('../core/conexion.php');

session_start();
$userId = $_SESSION['id'];

$query = "SELECT *
FROM servicio
JOIN notificaciones ON servicio.id = notificaciones.id_servicio
WHERE notificaciones.id_user = $userId and servicio.terminado = 1"; //no me funciona la sig, condicion


$result = mysqli_query($conexion,$query);

if (!$result){
    die("Query faild".mysqli_error($conexion));
}

$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['id'],
        'nombre' => $row['Nombre_Cliente'],
        'telefono' => $row['Teléfono'],
        'direc' => $row['Direccion'],
        'rdirec' => $row['Referenica_Domicilio'],
        'tipos' => $row['Tipo_Servicio'],
        'problep' => $row['Problema_Presentado'],


    );   
}


$jsonString = json_encode($json);
echo $jsonString;
?>