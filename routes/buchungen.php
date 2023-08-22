<?php
include_once 'db.php';
$pdo = getConnection();

// Konten-Endpunkte

// Alle Buchungssätze anzeigen
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //
}

// Einzelnen Buchungssatz anzeigen
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    //
}

// Buchungssatz erstellen
if ($_POST['_method'] === 'POST') {
    include_once 'services/buchungen.php';
    buchungErstellen($pdo, $_POST);
}

// Konto aktualisieren
if ($_POST['_method'] === 'PUT' && isset($_GET['id'])) {
    //
}

// Konto löschen
if ($_POST['_method'] === 'DELETE' && isset($_GET['id'])) {
    //
}

closeConnection();
?>