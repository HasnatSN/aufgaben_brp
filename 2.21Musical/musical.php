<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Ticketsystem MUSICAL</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <img src="img/header.png" alt="music-picture" />
        <div class="header-text"><h1>Ticketsystem MUSICAL</h1></div>
      </header>

      <form id="F1" action="" method="post">
        <main>
          <div class="btn-container">
            <div class="btns-div">
              <button form="F1" class="btns" type="reset">Reset</button>
            </div>
            <div class="btns-div">
              <button name="tickets" form="F1" class="btns" type="submit">Tickets</button>
            </div>
          </div>

          <section class="input-area">
            <div class="input-area-div">
              <div class="input-div">
                <label for="name">Name:</label>
                <input
                  class="input-cls"
                  type="text"
                  name="kunde"
                  id="name"
                  placeholder="Vor- und Nachname"
                  required
                />
              </div>

              <div class="input-div">
                <label for="eingabeevent">Event:</label>
                <select class="input-cls" name="event" id="eingabeevent" required>
                  <option value="Batman">Batman</option>
                  <option value="Ratman" selected>Ratman</option>
                  <option value="Fatman">Fatman</option>
                  <option value="Fatman 2">Fatman 2</option>
                  <option value="The Rise of the Fatman">
                    The Rise of the Fatman
                  </option>
                </select>
              </div>

              <div class="input-div">
                <label for="datum">Termin</label>
                <input
                  class="input-cls"
                  type="date"
                  name="termin"
                  id="datum"
                  required
                />
              </div>

              <div class="input-div">
                <label for="anzahl">Anzahl Tickets</label>
                <input
                  class="input-cls"
                  type="number"
                  id="anzahl"
                  name="anzahl-ticket"
                  required
                />
              </div>
            </div>
          </section>

          <div class="last-row">
            <fieldset>
              <legend>Platzbuchung</legend>
              <div>
                <input id="kat1" name="kategorie" type="radio" value="0" />
                <label for="kat1">Kategorie I</label>
              </div>

              <div>
                <input id="kat2" name="kategorie" type="radio" value="1" />
                <label for="kat2">Kategorie II</label>
              </div>
              <div>
                <input id="kat3" name="kategorie" type="radio" value="2" />
                <label for="kat3">Kategorie III</label>
              </div>
              <div>
                <input id="kat4" name="kategorie" type="radio" value="3"/>
                <label for="kat4">Stehplatz</label>
              </div>
            </fieldset>

            <div class="discount-div">
              <strong>Ermäßigung</strong>
              <p>
                <input id="discount" type="checkbox" name="schulklasse" />
                <label for="discount">Schulklasse</label>
              </p>
            </div>
          </div>
        </main>
      </form>

    <?php
      if (isset($_POST["tickets"])) {
        include_once "inc/musical.inc.php";
      }
    ?>

  </body>
</html>
