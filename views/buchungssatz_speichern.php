<!DOCTYPE html>
<html>

<head>
  <title>Buchungssatz speichern</title>
</head>

<body>
  <h1>Buchungssatz speichern</h1>

  <form action="http://localhost/projekt1/api.php?endpoint=buchungen" method="post" target="_blank">
    <input type="hidden" name="_method" value="POST" />

    <label for="Buchungsdatum">Buchungsdatum:</label>
    <input type="text" id="Buchungsdatum" name="Buchungsdatum" placeholder="jjjj-mm-tt" required /><br /><br />

    <label for="Betrag">Betrag:</label>
    <input type="text" id="Betrag" name="Betrag" required /><br /><br />

    <label for="KontoID">KontoID:</label>
    <input type="text" id="KontoID" name="KontoID" required /><br /><br />

    <input type="submit" value="Buchungssatz speichern" />
  </form>

  <br>
  <a href="javascript:history.back()">Zurück</a>
</body>

</html>