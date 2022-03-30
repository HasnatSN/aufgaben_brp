<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Stromabrechnung</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div><img src="img/blitz.png" alt="blitz" /></div>
        <div>
          <h1>MeinStrom AG</h1>
          <p>Strompreisrechner</p>
        </div>
      </header>
      <main>
        <form action="stromabrechnung.php" method="post" id="f1">
          <div class="middle-div">
            <div class="left-div">
              <div><label for="name">Name:</label></div>
              <div><input type="text" name="name" id="name" required /></div>
              <div><label for="">Tarifgruppe:</label></div>
              <div>
                <select name="tarif" id="">
                  <option value="0">Optima Komfort</option>
                  <option value="1">XL-Energie</option>
                  <option value="2">XXL-Energie</option>
                </select>
              </div>
              <div><label for="verbrauch">Verbrauch:</label></div>
              <div>
                <input type="number" name="verbrauch" id="verbrauch" min="1" required/>kWh
              </div>
            </div>
            <div class="right-div">
              <div>
                <input type="checkbox" name="rabatt" value="true" id="rabatt" /><label
                  for="rabatt"
                  >Rabatt für langjährige Kunden</label
                >
              </div>
              <div>
                <fieldset>
                  <legend>Zahlungsart</legend>
                  <div>
                    <input
                      type="radio"
                      name="z-art"
                      value="3"
                      id="Erlagschein"
                      required
                    /><label for="">Erlagschein</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      name="z-art"
                      value="1"
                      id="Kontoeinzug"
                    /><label for="">Kontoeinzug</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      name="z-art"
                      value="5"
                      id="Kreditkarte"
                    /><label for="">Kreditkarte</label>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="btn">
            <button form="f1" name="auswertung" type="submit">Auswertung</button>
          </div>
        </form>

        <?php
        
          if (isset($_POST["auswertung"])) {
            include_once 'inc/stromabrechnung.inc.php';
          }
        
        ?>

      </main>
    </div>
  </body>
</html>
