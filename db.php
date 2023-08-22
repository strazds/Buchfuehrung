<?php



function getConnection()
{
    // Verbindungsdaten zur Datenbank
    $host = "localhost";
    $dbname = "Buchfuehrung";
    $username = "root";
    $password = "";
    $pdo = null;
    // Verbindung zur Datenbank herstellen
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Verbindung zur Datenbank hergestellt.";
    } catch (PDOException $e) {
        die("Verbindung fehlgeschlagen: " . $e->getMessage());
    }
    return $pdo;
}

function closeConnection()
{
    // Verbindung schließen
    $pdo = null;
}

?>