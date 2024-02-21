<?php

// Esta función toma el ID de usuario como parámetro y verifica si tiene notificaciones en la base de datos
function verificarNotificaciones($idUsuario) {
    // Conexión a la base de datos (ajusta según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "servicios";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta a la base de datos para verificar si el usuario tiene notificaciones
    $sql = "SELECT COUNT(*) as cantidad FROM notificaciones WHERE id_user = $idUsuario and terminado =0";
    $result = $conn->query($sql);

    // Manejar los resultados y devolver en formato JSON
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cantidadNotificaciones = $row['cantidad'];

        echo json_encode(array('tieneNotificaciones' => $cantidadNotificaciones > 0));
    } else {
        echo json_encode(array('tieneNotificaciones' => false));
    }

    // Cerrar la conexión
    $conn->close();
}

session_start();
$idUsuario = $_SESSION['id'];

if ($idUsuario !== null) {
    // Llamar a la función para verificar notificaciones
    verificarNotificaciones($idUsuario);
} else {
    echo json_encode(array('error' => 'ID de usuario no proporcionado'));
}

?>
