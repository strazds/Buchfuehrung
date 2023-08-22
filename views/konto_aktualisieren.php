<!DOCTYPE html>
<html>

<head>
  <title>Konto aktualisieren</title>
</head>

<body>
  <h1>Konto aktualisieren</h1>

  <form action="http://localhost/projekt1/api.php?endpoint=konten&id=<?php echo $_GET['id']; ?>"
    enctype="application/json" method="post" target="_blank">
    <input type="hidden" name="_method" value="PUT" />

    <label for="KontoName">Konto Name:</label>
    <input type="text" id="KontoName" name="KontoName" required /><br /><br />

    <label for="KontoTyp">Konto Typ:</label>
    <input type="text" id="KontoTyp" name="KontoTyp" required /><br /><br />

    <input type="submit" value="Konto aktualisieren" />
  </form>
</body>

</html>