<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>GGT</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="form-div">
        <form action="ggt.php" method="post" id="f1">
          <div class="main-area">
            <div>
              <label for="z1">Zahl 1:</label> <br>
              <input name="zahl-1" value="1" id="z1" type="number" min="1" />
            </div>
            <div>
              <label for="z2">Zahl 2:</label> <br>
              <input name="zahl-2" value="1" id="z2" type="number" min="1" />
            </div>

            <button name="berechnen" type="submit">Berechnen</button>
          </div>
        </form>

        <?php
          
          if (isset($_POST["berechnen"])) {
            include_once 'inc/ggt.inc.php';
          }

        ?>

      </div>
    </div>
  </body>
</html>
