<?php
include_once 'db.php';
$pdo = getConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buchfuehrung</title>
</head>

<body>
    <h2>Konten</h2>
    <form action="http://localhost/projekt1/controller.php" enctype="application/json" method="post" target="_blank">
        <label for="KontoName" class="person">KontoName:</label><br />
        <input type="text" id="KontoName" class="person person-vname" name="KontoName" value=""
            placeholder="Dein KontoName" /><br />
        <label for="KontoTyp" class="person">KontoTyp:</label><br />
        <input type="text" id="KontoTyp" class="person person-vname" name="KontoTyp" value=""
            placeholder="Dein KontoTyp" /><br />
        <input type="submit" value="Absenden" />
    </form>
</body>

</html>