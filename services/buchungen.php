<?php
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
        $response = array("message" => "Buchungssatz erfolgreich erstellt");
        return json_encode($response);
    } catch (PDOException $e) {
        $response = array("message" => "Fehler beim Erstellen des Bucungssatzes: " . $e->getMessage());
        return json_encode($response);
    }
}
?>