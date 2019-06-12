<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Clé EAN</title>
      <link rel='stylesheet' href='css/bootstrap.min.css'>
    </head>
    <body>
<header> Formulaire d'obtention de la clé EAN :</header>
    <BR>
      <form class="col-lg-3 col-lg-offset-1" action="calcul.php" method=POST>
        <div class="form-group ">
          <label for="EAN">12 premier chiffres de l'EAN :</label>
          <input type="number" maxlength="12"  class="form-control" id="EAN" name="EAN">
        </div>

        <button type="submit" class="btn btn-primary" data-target="#MyModal">Valider</button>
      </form>
    </body>
  </html>
