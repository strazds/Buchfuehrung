<?php
include_once './utils/db.php';
$pdo = getConnection();

// Konten-Endpunkte

// Alle Konten anzeigen
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("SELECT * FROM konten");
    $konten = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($konten);
}

// Einzelnes Konto anzeigen
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM konten WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $konto = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($konto);
}

// Konto erstellen
if ($_POST['_method'] === 'POST') {
    include_once './services/konten.php';
    return kontoErstellen($pdo, $_POST);
}

// Konto aktualisieren
if ($_POST['_method'] === 'PUT' && isset($_GET['id'])) {
    include_once '../services/konten.php';
    kontoAktualisieren($pdo, $_GET['id'], $_POST);
}

// Konto löschen
if ($_POST['_method'] === 'DELETE' && isset($_GET['id'])) {
    // Hier das Konto aus der Datenbank löschen
    // ...
}

closeConnection();
?>