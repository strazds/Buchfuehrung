<?php



function createAccount($pdo, $data)
{
    // Beispielabfrage
    try {
        // SELECT-Abfrage ausführen
        $stmt = $pdo->query("INSERT INTO Konten(KontoName, KontoTyp) VALUES('" . $data["KontoName"] . "', '" . $data["KontoTyp"] . "')");
    } catch (PDOException $e) {
        echo "Abfragefehler: " . $e->getMessage();
    }
}

function getAllAccounts($pdo)
{
    // Beispielabfrage
    try {
        // SELECT-Abfrage ausführen
        $stmt = $pdo->query("SELECT * FROM Konten");

        // Ergebnisse abrufen und verarbeiten
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "KontoID: " . $row['KontoID'] . ", KontoName: " . $row['KontoName'] . $row['KontoTyp'] . "<br>";
        }
    } catch (PDOException $e) {
        echo "Abfragefehler: " . $e->getMessage();
    }
}

?>