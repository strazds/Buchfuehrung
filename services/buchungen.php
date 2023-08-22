<?php
header("Content-Type: application/json");
function buchungErstellen($pdo, $data)
{
    // Daten aus JSON holen
    $buchungsdatum = $data['Buchungsdatum'];
    $betrag = $data['Betrag'];
    $kontoID = $data['KontoID'];

    // Konto in die Datenbank einfügen
    $stmt = $pdo->prepare("INSERT INTO buchungssaetze (Buchungsdatum, Betrag, KontoID) VALUES (:buchungsdatum, :betrag, :kontoID)");
    $stmt->bindParam(':buchungsdatum', $buchungsdatum);
    $stmt->bindParam(':betrag', $betrag);
    $stmt->bindParam(':kontoID', $kontoID);

    try {
        $stmt->execute();
        $response = array("message" => "Bucungssatz erfolgreich erstellt");
        echo json_encode($response);
    } catch (PDOException $e) {
        $response = array("message" => "Fehler beim Erstellen des Bucungssatzes: " . $e->getMessage());
        echo json_encode($response);
    }
}
?>