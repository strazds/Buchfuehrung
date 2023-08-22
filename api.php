<?php
header("Content-Type: application/json");

// Route: Konten
if ($_GET['endpoint'] === 'konten') {
    include_once 'routes/konten.php';
}

// Route: Buchungen
if ($_GET['endpoint'] === 'buchungen') {
    include_once 'routes/buchungen.php';
}
?>