<?php

include ('../core/conexion.php');

$query = "SELECT * FROM servicio WHERE terminado = 0"; 
$result = mysqli_query($conexion,$query);

if (!$result){
    die("Query faild".mysqli_error($conexion));
}

$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['id'],
        'name' => $row['Nombre_Cliente'],
        'direc' => $row['Direccion'],
        'tipo' => $row['Tipo_Servicio'],
        'prop' => $row['Problema_Presentado'],
        'agente' => $row['agente'],

    );   
}

$jsonString = json_encode($json);
echo $jsonString;
?>