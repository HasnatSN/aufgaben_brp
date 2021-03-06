<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Musical</title>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <div><img src="img/note.png" alt="music_note" /></div>
        <h1>Ticketsystem MUSICAL</h1>
      </header>

      <div class="input-div">
        <form action="musical.php" method="post" id="f1">
          <div class="btns-div">
            <button form="f1" type="reset">Reset</button>
            <button name="abschicken" type="submit">Tickets</button>
          </div>

          <div class="mid">
            <div>
              <label for="kunde_i">Name:</label>
              <input type="text" name="kunde" id="kunde_i" placeholder="Vor- und Nachname" required/>
            </div>
            <div>
              <label for="event_i">Event:</label>
              <select name="event" id="event_i">
                <option value="0">Elisabeth</option>
                <option value="1" selected>König der Löwen</option>
                <option value="2">Rebecca</option>
                <option value="3">Romeo und Julia</option>
                <option value="4">We will rock you</option>
              </select>
            </div>
            <div>
              <label for="date_i">Termin:</label>
              <input type="date" name="datum" id="date_i" required/>
            </div>
            <div>
              <label for="anzahl_i">Anzahl Tickets:</label>
              <input type="number" name="anzahl" id="anzahl_i" min="1" required />
            </div>
          </div>

          <div class="inputs-bottom">
            <fieldset>
              <legend>Platzbuchung</legend>
              <div>
                <input type="radio" name="kat" value="0" id="kat-1" />
                <label for="kat-1">Kategorie I</label>
              </div>
              <div>
                <input type="radio" name="kat" value="1" id="kat-2" />
                <label for="kat-2">Kategorie II</label>
              </div>
              <div>
                <input type="radio" name="kat" value="2" id="kat-3" />
                <label for="kat-3">Kategorie III</label>
              </div>
              <div>
                <input type="radio" name="kat" value="3" id="kat-4" />
                <label for="kat-4">Stehplatz</label>
              </div>
            </fieldset>

            <div>
              <p><strong>Ermäßigung</strong></p>
              <input form="f1" type="checkbox" name="discount" value="1" id="rabatt" />
              <label form="rabatt">Schulklasse</label>
            </div>
          </div>
        </form>

        <?php
        
          if (isset($_POST["abschicken"])) {
            include_once 'inc/musical.inc.php';
          }

        ?>

      </div>
    </div>
  </body>
</html>
