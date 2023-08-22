<!DOCTYPE html>
<html>

<head>
  <title>Konto anlegen</title>
</head>

<body>
  <h1>Konto anlegen</h1>

  <form action="http://localhost/projekt1/api.php?endpoint=konten" method="post" target="_blank">
    <input type="hidden" name="_method" value="POST" />

    <label for="KontoName">Konto Name:</label>
    <input type="text" id="KontoName" name="KontoName" required /><br /><br />

    <label for="KontoTyp">Konto Typ:</label>
    <input type="text" id="KontoTyp" name="KontoTyp" required /><br /><br />

    <input type="submit" value="Konto anlegen" />
  </form>

  <br>
  <a href="javascript:history.back()">Zurück</a>
</body>

</html>