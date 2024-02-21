<?php

include ('../core/conexion.php');

$query = "SELECT * FROM usuario WHERE nivel = 'Tecnico' ";

$result = mysqli_query($conexion,$query);

if (!$result){
    die("Query faild".mysqli_error($conexion));
}

$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'id' => $row['Id_usuario'],
        'name' => $row['Nombre'],
        'estatus' => $row['estatus'],

    );   
}

$jsonString = json_encode($json);
echo $jsonString;
?>