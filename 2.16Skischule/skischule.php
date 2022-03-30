<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Skischule</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div><img src="img/snowman.png" alt="snowman" /></div>
        <div>
          <h4>Skischule Perfekt</h4>
          <p>
            Egal ob Sie Anfänger oder Könner sind, die Skischule Perfekt betreut
            Sie und versüßt ihre Freude am Wintersport.
          </p>
        </div>
      </header>

      <form action="skischule.php" method="post" id="f1">
        <div class="inputs">
          <div class="name-date-div">
            <div><label for="kunde">Zu- und Vorname: </label></div>
            <div><input type="text" name="kunde" id="kunde" required/></div>
            <div><label for="datum">Datum: </label></div>
            <div><input type="date" name="date" id="datum" required/></div>
          </div>

          <div class="field-verleih">
            <fieldset>
              <legend>Art des Skikurses</legend>
              <div>
                <input type="radio" name="kurs" value="0" id="e-4h" checked />
                <label for="e-4h">Erwachsene 4h/Tag</label>
              </div>
              <div>
                <input type="radio" name="kurs" value="1" id="k-4h" />
                <label for="k-4h">Kinderclub 4h/Tag</label>
              </div>
              <div>
                <input type="radio" name="kurs" value="2" id="m-2h" />
                <label for="m-2h">Miniclub 2h/Tag</label>
              </div>
              <div>
                <input type="radio" name="kurs" value="3" id="s-2h" />
                <label for="s-2h">Snowboarden 2h/Tag</label>
              </div>
            </fieldset>

            <div class="verleih-div">
              <div><strong>Skiverleih</strong></div>
              <div>
                <input type="checkbox" name="ski-snow" value="1" id="ski-snow" />
                <label for="ski-snow">Ski- oder Snowboard</label>
              </div>
              <div>
                <input
                  type="checkbox"
                  name="ski-snow-schuhe"
                  id="ski-snow-schuhe"
                  value="1"
                />
                <label for="ski-snow-schuhe">Ski- oder Snowboardschuhe</label>
              </div>
              <div class="btn-div">
                <button type="reset">NEU</button>
                <button type="submit" for="f1" name="berechnen">
                  Berechnung
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>

      <?php
      
        if (isset($_POST["berechnen"])) {
          include_once 'inc/skischule.inc.php';
        };

      ?>
    </div>
  </body>
</html>
