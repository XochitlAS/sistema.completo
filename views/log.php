<?php

include '../core/conexion.php';
if($_POST){
    $Usuario = $_POST['usuario'];
    $Contraseña = $_POST['password'];

    $SQL = "SELECT * FROM usuario WHERE Usuario='$Usuario' AND Password='$Contraseña'";

    $resultado = $conexion->query($SQL);
    $num = $resultado->num_rows;

    if($num>0) {
        $row = $resultado->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['Id_usuario'];
        $_SESSION['user'] = $row['Usuario'];
        $_SESSION['nivel'] = $row['nivel'];
        $conexion->close();
        header('location: home.php');
    }
    else{
        header('location: ../index.php');
    }
}

?>