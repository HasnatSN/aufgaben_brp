<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Dreisatz</title>
  </head>
  <body>
    <div class="wrapper">
      <form action="dreisatz.php" method="post" id="f1">
        <div class="header-text"><h2>Dreisatz-Berechnung</h2></div>
        <div>
          <input
            name="zahl-1"
            value="1"
            type="number"
            min="1"
            step="0.01"
            placeholder="Zahl 1"
          />
        </div>
        <div>entspricht</div>
        <div>
          <input
            name="zahl-2"
            value="1"
            type="number"
            min="1"
            step="0.01"
            placeholder="Zahl 2"
          />
        </div>
        <div>
          <input
            name="zahl-3"
            value="1"
            type="number"
            min="1"
            step ="0.01"
            placeholder="Zahl 3"
          />
        </div>
        <div>entspricht</div>
        <div class="div-x">X</div>
        <div class="div-btn">
          <button name="berechnen" for="f1" type="submit">Berechnen</button>
        </div>
      </form>
      <hr />
      
      <?php
    
        if (isset($_POST["berechnen"])) {
          include_once 'inc/dreisatz.inc.php';
        };

      ?>
    </div>

    

  </body>
</html>
