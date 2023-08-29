<?php
$action = isset($_GET["action"]) || "";
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buchführungs-Website</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <div id="layout-container">
    <div id="layout" class="vertical-layout" style="background-color: aqua">
      <div id="layout-header" class="layout" style="background-color: darkcyan">
        <h1>
          <?php echo $header; ?>
        </h1>
      </div>
      <div id="layout-body" class="layout" style="background-color: darkkhaki">
        <?php include_once $body; ?>
      </div>
      <div id="layout-footer" class="layout" style="background-color: gray">[footer]</div>
    </div>
  </div>
</body>

</html>