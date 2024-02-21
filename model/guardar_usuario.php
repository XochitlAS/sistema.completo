<?php
include ("../core/conexion.php");

if(isset($_POST)){
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$nivel = $_POST["nivel"];
$estatus = $_POST["estatus"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$SQL="INSERT INTO `usuario`(`Nombre`,`teléfono`,`nivel`,`estatus`,`Usuario`,`Password`)
 VALUES ('$nombre','$telefono','$nivel','$estatus','$usuario','$password')";

$query = mysqli_query($conexion,$SQL);


if(!$query){
    die("Error al realizar registro ".mysqli_error($conexion));        
}

echo "Servicio Registrado";
}
?>