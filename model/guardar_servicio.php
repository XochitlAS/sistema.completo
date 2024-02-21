<?php
include ("../core/conexion.php");

if(isset($_POST)){
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$direc = $_POST["direc"];
$rdirec = $_POST["rdirec"];
$tservicio = $_POST["tservicio"];
$probleP = $_POST["probleP"];
$agente = $_POST["agente"];



$sql="INSERT INTO `servicio`(`Nombre_Cliente`,`Teléfono`,`Direccion`,`Referenica_Domicilio`,`Tipo_Servicio`,`Problema_Presentado`,`agente`)
 VALUES ('$nombre','$telefono','$direc','$rdirec','$tservicio','$probleP','$agente')";

$query = mysqli_query($conexion,$sql);


if(!$query){
    echo "Error al realizar registro ";
}

echo "Servicio Registrado";
}
?>
