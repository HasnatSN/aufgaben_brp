<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Hotel SunShine</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div class="header-img"><img src="img/sun.png" alt="sun" /></div>
        <div class="header-text"><h2>Hotel SunShine</h2></div>
      </header>

      <main>

        <form method="post" action="sunshine.php" id="f1">

        <section id="eingabe">
          <p class="eingabe-text">
            Geben Sie die gewünschten Daten für die Preisberechnung ein. <br />
            Wählen Sie den Zimmertyp aus:
            <select name="zimmertyp" id="id-zimmertyp">
              <option name="zimmertyp" value="0">Standard</option>
              <option name="zimmertyp" value="1">Familie</option>
              <option name="zimmertyp" value="2">Suite</option>
            </select>
          </p>

          <div class="input">
            <div class="anzahl-div">
              <div class="orange-line-div">
                <label for="anzahl-erwachsene">Anzahl Erwachsene:</label>
                <input name="p_anzahl" value="1" required min="1" id="anzahl-erwachsene" type="number" />
              </div>

              <div class="orange-line-div">
                <label for="anzahl-nights">Anzahl Nächte: </label>
                <input name="n_anzahl" value="1" required min="1" id="anzahl-nights" type="number" />
              </div>

              <fieldset class="fs-1">
                <legend>Einzelzimmerzuschlag</legend>
                <input name="ein-zimmer" value="JA" id="einzel-ja" type="radio" required/>
                <label for="einzel-ja">JA</label>

                <input name="ein-zimmer" value="NEIN" id="einzel-nein" type="radio" />
                <label for="einzel-nein">NEIN</label>
              </fieldset>
            </div>

            <div class="verpflegung-div">
              <fieldset class="fs-2">
                <legend>Verpflegung</legend>

                <div>
                  <input id="fruehstueck" name="food" value="0" type="radio" required/>
                  <label for="fruehstueck">Frühstück</label>
                </div>

                <div>
                  <input id="halbpension" name="food" value="1" type="radio" />
                  <label for="halbpension">Halbpension</label>
                </div>
                <div>
                  <input id="vollpension" name="food" value="2" type="radio" />
                  <label for="vollpension">Vollpension</label>
                </div>
                <div>
                  <input id="all-inclusive" name="food" value="3" type="radio" />
                  <label for="all-inclusive">All-Inclusive</label>
                </div>
              </fieldset>
            </div>
          </div>
        </section>

        <div class="btns-div">
          <button type="reset" form="f1">NEU</button>
          <button name="preis-berechnung" type="submit" form="f1">Preisberechnung</button>
        </div>
      </main>
    </div>
  </form>

  <section class="output">
    
    <?php
    
      if (isset($_POST["preis-berechnung"])) {
        include_once 'inc/sunshine.inc.php';
      }

    ?>

  </section>


  </body>
</html>
