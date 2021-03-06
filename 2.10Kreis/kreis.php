<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Kreis</title>
  </head>
  <body>
    <div id="wrapper">
      <form action="kreis.php" method="post" id="F1">
        <h4>Radius des Kreises:</h4>
        <div>
          <input
            type="number"
            name="radius"
            id="rad-inp"
            min="1"
            placeholder="Radius eingeben"
            required
          />
        </div>
        <div><button type="submit" name="berechnen">Berechnen</button></div>
      </form>

      <?php
      
        if (isset($_POST["berechnen"])) {
          include_once 'inc/kreis.inc.php';
        }

      ?>

    </div>
  </body>
</html>
