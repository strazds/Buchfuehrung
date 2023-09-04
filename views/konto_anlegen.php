<form action="./?endpoint=konten&action=konto_anlegen" method="post">
  <input type="hidden" name="_method" value="POST" />

  <div class="form-group">
    <label for="KontoName" class="label">Konto Name:</label>
    <input type="text" id="KontoName" class="input-field" name="KontoName" placeholder="Konto Name" required />
  </div>

  <div class="form-group">
    <label for="KontoTyp" class="label">Konto Typ:</label>
    <input type="text" id="KontoTyp" class="input-field" name="KontoTyp" placeholder="Konto Typ" required />
  </div>

  <input class="button-like-link" type="submit" value="Konto anlegen" />
</form>