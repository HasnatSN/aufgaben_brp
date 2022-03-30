<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Mischtemperatur</title>
  </head>
  <body>
    <div id="wrapper">
      <header><h1>Berechnung der Mischtemperatur</h1></header>
      <div>
        <div><h3>Erläuterung</h3></div>

        <form action="mischtemperatur.php" method="post" id="f1">
          <div class="un-list">
            <ul>
              <li>mk Kaltwassermenge (in Liter)</li>
              <li>mw Warmwassermenge (in Liter)</li>
              <li>Tk Temperatur des kalten Wassers (in °C)</li>
              <li>Tw Temperatur des warmen Wassers (in °C)</li>
              <li>Tm Mischtemperatur (in °C)</li>
            </ul>
          </div>

          <div class="inputs">
            <div class="num-inputs">
              <div>
                <label for="mk">mk:</label>
                <input type="number" name="mk" value="1" id="mk" min="0" />
              </div>
              <div>
                <label for="mw">mw:</label>
                <input type="number" name="mw" value="1" id="mw" min="0" />
              </div>
              <div>
                <label for="tk">Tk:</label>
                <input type="number" name="tk" value="1" id="tk" min="0" />
              </div>
              <div>
                <label for="tw">Tw:</label>
                <input type="number" name="tw" value="1" id="tw" min="0" />
              </div>
            </div>
            <div class="btns-div">
              <button type="submit" for="f1" name="berechnen">Berechnung</button>
              <button type="reset">Neu</button>
            </div>
          </div>
        </form>

        <?php
        
          if (isset($_POST["berechnen"])) {
            include_once 'inc/mischtemperatur.inc.php';
          };

        ?>
      </div>
    </div>
  </body>
</html>
