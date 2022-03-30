<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Autovermietung</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div><img src="img/car.png" alt="" /></div>
        <div class="header-text"><h1>Autovermietung</h1></div>
      </header>

      <section>
        <form action="autovermietung.php" method="post" id="f1">
          <div class="inputs">
            <div class="row-1">
              <label for="auto-kategorie">Autokategorie: </label>
              <select name="auto-kateg" id="auto-kategorie">
                <option value="0">Kleinwagen</option>
                <option value="1" selected>Mittelklasse</option>
                <option value="2">Oberklasse</option>
              </select>
            </div>

            <div class="row-2">
              <label for="miet-dauer">Mietdauer in Tage: </label>
              <input
                type="number"
                name="m-dauer"
                value="1"
                id="miet-dauer"
                min="1"
                placeholder="1"
                required
              />
            </div>

            <div class="row-3">
              <label for="kunden-type">Kundentype: </label>
              <select name="k-type" id="kunden-type">
                <option value="0">Businesskunde</option>
                <option value="1">Stammkunde</option>
                <option value="2" selected>Kunde</option>
              </select>
            </div>

            <div class="row-4">
              <fieldset>
                <legend>Versicherung</legend>

                <div>
                  <input
                    name="versicherung"
                    value="0.25"
                    type="radio"
                    id="versicherung-ja"
                    checked
                  />
                  <label for="versicherung-ja">Ja</label>
                </div>

                <div>
                  <input
                    name="versicherung"
                    value="0"
                    type="radio"
                    id="versicherung-nein"
                  />
                  <label for="versicherung-nein">Nein</label>
                </div>
              </fieldset>
            </div>
          </div>

          <div class="row-btns">
            <button name="zuruecksetzen" form="f1" type="reset">Zurücksetzen</button>
            <button name="berechnen" form="f1" type="submit">Berechnen</button>
          </div>
        </form>
      </section>



    </div>

    <div class="output">

      <?php
      
        if (isset($_POST["berechnen"])) {
          include_once 'inc/autovermietung.inc.php';
        }

      ?>
    </div>
  </body>
</html>
