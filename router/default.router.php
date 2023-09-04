<?php

function getRoute($action)
{
    $header = "";
    $body = "";
    switch ($action) {
        case 'konto_anlegen':
            $header = "Konto anlegen";
            $body = "./views/konto_anlegen.php";
            break;
        case 'buchungssatz_speichern':
            $header = "Buchungssatz speichern";
            $body = "./views/buchungssatz_speichern.php";
            break;
        default:
            $header = "Buchführung";
            $body = "./views/home.php";
            break;
    }
    return array(
        "header" => $header,
        "body" => $body
    );
}
?>