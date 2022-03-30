<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Fahrscheinautomat</title>
  </head>
  <body>
    <div id="wrapper">
      <form action="fahrscheinautomat.php" method="post" id="f1">
        <header>
          <div><img src="img/train.png" alt="train" /></div>
          <div class="header-text">
            <div><h1>Fahrscheinautomat</h1></div>
            <div>
              <label for="datum">Datum: </label>
              <input name="date" value="date" id="datum" type="date" required />
            </div>
          </div>
        </header>

        <div class="inputs">
          <div>
            <fieldset class="field-1">
              <legend>Fahrschein</legend>
              <div>
                <input id="einzel-karte" name="schein" type="radio" value="0" checked />
                <label for="einzel-karte">Einzelkarte</label>
              </div>
              <div>
                <input id="wochen-karte" name="schein" type="radio" value="1" />
                <label for="wochen-karte">Wochenkarte</label>
              </div>
              <div>
                <input
                  id="monats-karte"
                  name="schein"
                  type="radio"
                  value="2"
                />
                <label for="monats-karte">Monatskarte</label>
              </div>
            </fieldset>
          </div>
          <div>
            <fieldset class="field-2">
              <legend>Tarifzone</legend>

              <div>
                <input id="t-zone-1" name="zone" value="2" type="radio" required/>
                <label for="t-zone-1">Tarifzone 1</label>
              </div>
              <div>
                <input id="t-zone-2" name="zone" value="2.8" type="radio" />
                <label for="t-zone-2">Tarifzone 2</label>
              </div>
            </fieldset>
          </div>
          <div><button name="reset" form="f1" type="reset">NEU</button></div>
          <div><button name="ticket" form="f1" type="submit">Fahrscheinautomat</button></div>

          <hr />
        </div>
      </form>

      <?php
      
        if (isset($_POST["ticket"])) {
          include_once 'inc/fahrscheinautomat.inc.php';
        };

      ?>

    </div>
  </body>
</html>
