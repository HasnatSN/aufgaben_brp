<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Rechenmeister</title>
  </head>
  <body>
    <div id="wrapper">
      <header><h1>Rechenmeister</h1></header>
      <main>
        <form action="rechenmeister.php" method="post" id="f1">
          <div>Rechnen leicht gemacht!</div>

          <div class="input-div">
            <div>
              <label for="zahl1">Zahl 1:</label>
              <input type="number" name="num1" id="zahl1" value="1" />
            </div>
            <div>
              <label for="zahl2">Zahl 2:</label>
              <input type="number" name="num2" id="zahl2" value="1" />
            </div>
          </div>

          <div>
            <button type="reset" form="f1">Zurücksetzen</button>
            <button type="submit" name="berechnen" form="f1">Berechnung</button>
          </div>
        </form>

        <section>
          <?php
          
            if (isset($_POST["berechnen"])) {
              include_once 'inc/rechenmeister.inc.php';
            }

          ?>
        </section>
      </main>
    </div>
  </body>
</html>
