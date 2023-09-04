<?php
// header("Content-Type: application/json");

if (!isset($_GET['endpoint'])) {
    return json_encode(array("message" => "Startseite"));
}

// Route: Konten
if ($_GET['endpoint'] === 'konten') {
    $result = require_once('./routes/konten.php');
    return $result;
}

// Route: Buchungen
if ($_GET['endpoint'] === 'buchungen') {
    $result = require_once('./routes/buchungen.php');
    return $result;
}
?>