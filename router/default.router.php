<?php

function getRoute($action)
{
    $header = "";
    $body = "";
    switch ($action) {
        case 'konto_anlegen':
            $route = "konto_anlegen";
            $header = "Konto anlegen";
            $body = "./views/konto_anlegen.php";
            break;
        case 'buchungssatz_speichern':
            $route = "buchungssatz_speichern";
            $header = "Buchungssatz speichern";
            $body = "./views/buchungssatz_speichern.php";
            break;
        default:
            $route = "home";
            $header = "Buchführung";
            $body = "./views/home.php";
            break;
    }
    return array(
        "header" => $header,
        "body" => $body,
        "route" => $route,
    );
}
?>