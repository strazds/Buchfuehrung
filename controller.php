<?php
// Datei: api.php
include_once 'service.php';

// Initialisierung
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];

// Routen definieren
if ($method === 'GET') {
    if ($_GET['route'] === 'resource') {
        // Logik für GET /resource
        $response = array('message' => 'GET request to resource');
        echo json_encode($response);
    } else {
        http_response_code(404);
        echo json_encode(array('message' => 'Route not found'));
    }
} elseif ($method === 'POST') {
    $_GET['route'] = "/";
    if ($_GET['route'] === '/') {
        // Logik für POST /resource
        $response = $_POST;
        echo json_encode($response);
    } else {
        http_response_code(404);
        echo json_encode(array('message' => 'Route not found'));
    }
} else {
    http_response_code(405);
    echo json_encode(array('message' => 'Method not allowed'));
}
?>