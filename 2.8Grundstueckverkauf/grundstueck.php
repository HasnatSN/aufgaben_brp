<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Grundstueckverkauf</title>
  </head>
  <body>
    <div class="wrapper">
      <header><h1>Grundstückverkauf</h1></header>
      <form action="grundstueck.php" method="post" id="f1">
        <div class="input-div">

          <div><label for="gsparzelle">Grundstückparzelle</label></div>
          <div><input type="text" name="cell_f" value=""  placeholder="GZ-35" id="gsparzelle" required/>
          </div>

          <div><label for="laenge">Länge</label></div>
          <div><input class="i1" type="number" min="1" placeholder="35" name="length_f" id="laenge" required/></div>

          <div><label for="breite">Breite</label></div>
          <div><input class="i1" type="number" min="1" placeholder="35" name="width_f" id="breite" required/></div>

        </div>
        <div class="btn-div">
          <button type="reset">Zurücksetzen</button>
          <button type="submit" name="preisberechnung">Preisberechnung</button>
        </div>
      </form>

      <?php
      
        if (isset($_POST["preisberechnung"])) {
          include_once 'inc/grundstueck.inc.php';
        }
      
      ?>

    </div>
  </body>
</html>
