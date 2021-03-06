<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Skontoberechnung</title>
  </head>
  <body>
    <div id="wrapper">
      <h1>Skontoberechnung</h1>
      <form action="skonto.php" method="post" id="f1">
        <div class="input-div">
          <div class="lbls"><label for="brutto">Bruttobetrag in €:</label></div>
          <div><input type="number" name="gross" id="brutto" required placeholder="100" /></div>
          <div class="lbls"><label for="prozent">Skonto in %:</label></div>
          <div><input type="number" name="percent" id="prozent" step="0.1" required placeholder="3" /></div>
          <div class="btns">
            <button form="f1" name="berechnen" type="submit">Berechnen</button>
            <button form="f1" type="reset">Zurücksetzen</button>
          </div>
        </div>
      </form>

      <?php
      
        if (isset($_POST["berechnen"])) {
          include_once 'inc/skonto.inc.php';
        }
      
      ?>


    </div>
  </body>
</html>
