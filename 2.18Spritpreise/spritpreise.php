<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Spritpreise</title>
  </head>
  <body>
    <div id="wrapper">
      <h2>Lohnt sich der Weg zur weiter entfernten Tankstelle</h2>
      <p>
        Beim Tanken lässt sich durch <strong>Preisvergleich</strong> an der
        günstigeren Tankstelle sparen, es stellt sich jedoch die Frage
        <strong>Lohnt sich der Umweg</strong> fürs Tanken? Und wie viel muss man
        mindestens tanken, damit sich der Umweg zur günstigeren Tankstelle
        rentiert.
      </p>
      <p>Formel:</p>
      <div><img src="img/formel.png" alt="formel" /></div>
      <form action="spritpreise.php" method="post" id="f1">
        <div class="input-div">
          <div>
            <label for="billigere">Preis an der günstigen Tankstelle:</label>
          </div>
          <div>
            <input
              type="number"
              name="cheap-gas"
              id="billigere"
              step="0.001"
              min="1"
              required
            />
            €/L
          </div>
          <div><label for="teuere">Preis an der teuren Tankstelle:</label></div>
          <div>
            <input
              type="number"
              name="expen-gas"
              id="teuere"
              step="0.001"
              min="1"
              required
            />
            €/L
          </div>
          <div><label for="verbrauch">Verbrauch des Autos:</label></div>
          <div>
            <input
              type="number"
              name="usage"
              id="verbrauch"
              step="0.1"
              min="1"
              required
            />
            L/100km
          </div>
          <div>
            <label for="kosten">Betriebskosten exkl. Treibstoff:</label>
          </div>
          <div>
            <input
              type="number"
              name="costs"
              id="kosten"
              step="0.01"
              min="1"
              required
            />
            €/km
          </div>
        </div>
        <div class="btns">
          <button form="f1" name="berechnen" type="submit">Berechnen</button>
          <button form="f1" type="reset">Neu</button>
        </div>
      </form>

      <?php
      
        if (isset($_POST["berechnen"])) {
          include_once 'inc/spritpreise.inc.php';
        }

      ?>
    </div>
  </body>
</html>
