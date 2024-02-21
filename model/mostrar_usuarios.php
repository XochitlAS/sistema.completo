<?php
include ("../core/conexion.php");

$sql="SELECT * FROM usuario";

$result=mysqli_query($conexion,$sql);

if(!$result){
    die("Error al consultar ".mysqli_error($conexion));
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        "id"=>$row["Id_usuario"],
        "nombre"=>$row["Nombre"],
        "telefono"=>$row["teléfono"],        
        "registro"=>$row["registro"],        
        "estatus"=>$row["estatus"]
    );
}

$jsonString = json_encode($json);
echo $jsonString;
?>