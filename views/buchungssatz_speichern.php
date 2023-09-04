<form action="./?endpoint=buchungen&action=buchungssatz_speichern" method="post">
  <input type="hidden" name="_method" value="POST" />

  <div class="form-group">
    <label for="Buchungsdatum" class="label">Buchungsdatum:</label>
    <input type="text" id="Buchungsdatum" class="input-field" name="Buchungsdatum" placeholder="jjjj-mm-tt" required />
  </div>

  <div class="form-group">
    <label for="Betrag" class="label">Betrag:</label>
    <input type="text" id="Betrag" class="input-field" name="Betrag" placeholder="0,00" required />
  </div>

  <div class="form-group">
    <label for="KontoID" class="label">KontoID:</label>
    <input type="text" id="KontoID" class="input-field" name="KontoID" placeholder="#" required />
  </div>

  <input class="button-like-link" type="submit" value="Buchungssatz speichern" />
</form>