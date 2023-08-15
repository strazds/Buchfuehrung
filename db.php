<?php
// Verbindungsdaten zur Datenbank
$host = "localhost";
$dbname = "meine_db";
$username = "root";
$password = "";

// Verbindung zur Datenbank herstellen
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbindung zur Datenbank hergestellt.";
} catch (PDOException $e) {
    die("Verbindung fehlgeschlagen: " . $e->getMessage());
}

// Beispielabfrage
try {
    // SELECT-Abfrage ausführen
    $stmt = $pdo->query("SELECT * FROM benutzer");
    
    // Ergebnisse abrufen und verarbeiten
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Abfragefehler: " . $e->getMessage();
}

// Verbindung schließen
$pdo = null;
?>
