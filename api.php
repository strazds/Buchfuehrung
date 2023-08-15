<?php
// Datei: api.php

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
    if ($_GET['route'] === 'resource') {
        // Logik für POST /resource
        $data = json_decode(file_get_contents('php://input'), true);
        $response = array('message' => 'POST request to resource', 'data' => $data);
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
