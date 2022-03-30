<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Zahlenraten</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <img src="img/dice.png" alt="dice" />
        <h1>Zahlenraten</h1>
      </header>
      <form action="zahlenraten.php" method="post">
        <div class="inp-div">
          <div>
            <label for="zahl"></label>Zu erratende Zahl:
            <input type="number" name="u_num" id="zahl" min="1" max="6" />
          </div>
          <button name="los" type="submit">LOS</button>
        </div>
      </form>

      <?php
      
          if (isset($_POST["los"])) {
            include_once 'inc/zahlenraten.inc.php';
          }

      ?>

    </div>
  </body>
</html>
