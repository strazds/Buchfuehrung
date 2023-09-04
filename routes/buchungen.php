<?php
include_once './utils/db.php';
$pdo = getConnection();

// Buchungssatz erstellen
if ($_POST['_method'] === 'POST') {
    include_once './services/buchungen.php';
    return buchungErstellen($pdo, $_POST);
}

closeConnection();
?>