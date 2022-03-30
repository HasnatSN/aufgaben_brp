<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Längeneinheit</title>
  </head>
  <body>
    <div id="wrapper">
      <form action="einheiten.php" method="post" id="f1">
        <div>
          <div><label for="zahl-inp">Zahlenwert eingeben:</label></div>
          <div>
            <input name="zahl" id="zahl-inp" type="number" step="0.01" required/>
          </div>
        </div>
        <div>
          <div><label for="einheit-select">Einheit auswählen:</label></div>
          <div>
            <select name="einheit" id="einheit-select">
              <option value="Zoll">Zoll</option>
              <option value="Zentimeter">Zentimeter</option>
              <option value="Dezimeter">Dezimeter</option>
              <option value="Meter">Meter</option>
              <option value="Kilometer">Kilometer</option>
              <option value="Meilen">Meilen</option>
              <option value="Seemeilen">Seemeilen</option>
            </select>
          </div>
        </div>
        <div>
          <button form="f1" name="umrechnen" type="submit">Umrechnen</button>
        </div>
      </form>

      <?php
      
        if (isset($_POST["umrechnen"])) {
          include_once 'inc/einheiten.inc.php';
        };
      
      ?>

    </div>
  </body>
</html>
