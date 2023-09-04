<?php

if (!isset($_GET['endpoint']))
    return json_encode(array("message" => "Startseite"));


// Route: Konten
if ($_GET['endpoint'] === 'konten')
    return require_once('./routes/konten.php');


// Route: Buchungen
if ($_GET['endpoint'] === 'buchungen')
    return require_once('./routes/buchungen.php');

?>