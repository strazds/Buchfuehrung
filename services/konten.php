<?php
// header("Content-Type: application/json");
function kontoErstellen($pdo, $data)
{
    // Daten aus JSON holen
    $kontoName = $data['KontoName'];
    $kontoTyp = $data['KontoTyp'];

    // Konto in die Datenbank einfügen
    $stmt = $pdo->prepare("INSERT INTO konten (KontoName, KontoTyp) VALUES (:kontoName, :kontoTyp)");
    $stmt->bindParam(':kontoName', $kontoName);
    $stmt->bindParam(':kontoTyp', $kontoTyp);

    try {
        $stmt->execute();
        $response = array("message" => "Konto erfolgreich erstellt");
        return json_encode($response);
    } catch (PDOException $e) {
        $response = array("message" => "Fehler beim Erstellen des Kontos: " . $e->getMessage());
        return json_encode($response);
    }
}

function kontoAktualisieren($pdo, $kontoID, $data)
{
    // Daten aus JSON holen
    $kontoName = $data['KontoName'];
    $kontoTyp = $data['KontoTyp'];

    // Konto in die Datenbank einfügen
    $stmt = $pdo->prepare("UPDATE konten SET KontoName = :kontoName, KontoTyp = :kontoTyp WHERE KontoID = :kontoID ");
    $stmt->bindParam(':kontoID', $kontoID);
    $stmt->bindParam(':kontoName', $kontoName);
    $stmt->bindParam(':kontoTyp', $kontoTyp);

    try {
        $stmt->execute();
        $response = array("message" => "Konto erfolgreich aktualisiert");
        echo json_encode($response);
    } catch (PDOException $e) {
        $response = array("message" => "Fehler beim Aktualisieren des Kontos: " . $e->getMessage());
        echo json_encode($response);
    }
}
?>