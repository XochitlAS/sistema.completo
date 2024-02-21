<?php
session_start();

$response = array();

if (isset($_SESSION['user']) && isset($_SESSION['nivel'])) {
    $response['autenticado'] = true;
    $response['nivel'] = $_SESSION['nivel'];
} else {
    $response['autenticado'] = false;
}

header('Content-Type: application/json');
echo json_encode($response);
?>
