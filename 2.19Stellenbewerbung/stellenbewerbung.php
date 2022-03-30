<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Stellenbewerbung</title>
  </head>
  <body>
    <div id="wrapper">
      <header><h1>Meine Daten</h1></header>
      <form action="stellenbewerbung.php" method="post" id="f1">
        <div class="green">
          <label for="vorname">Vorname:</label>
        </div>
        <div class="yellow">
          <input class="long-inp" type="text" name="vorname" id="vorname" placeholder="Anton" />
        </div>

        <div class="green"><label for="nachname">Zuname:</label></div>
        <div class="yellow">
          <input  class="long-inp"
            type="text"
            name="nachname"
            id="nachname"
            placeholder="Hauleitner"
          />
        </div>

        <div class="green">Geschlecht:</div>
        <div class="yellow">
          <div>
            <input type="radio" name="geschlecht" value="m" id="geschlecht-m" required/>
            <label for="">männlich</label>
          </div>
          <div>
            <input type="radio" name="geschlecht" value="w" id="geschlecht-w" />
            <label for="">weiblich</label>
          </div>
        </div>

        <div class="green">Sprachkenntnisse:</div>
        <div class="yellow">
          <div>
            <input
              type="checkbox"
              name="sprache[]"
              value="Englisch"
              id="englisch"
            /><label for="">Englisch</label>
          </div>
          <div>
            <input
              type="checkbox"
              name="sprache[]"
              value="Italienisch"
              id="italienisch"
            /><label for="">Italienisch</label>
          </div>
          <div>
            <input
              type="checkbox"
              name="sprache[]"
              value="Spanisch"
              id="spanisch"
            /><label for="">Spanisch</label>
          </div>
        </div>

        <div class="green">Nächste Großstadt:</div>
        <div class="yellow">
          <select name="stadt" id="stadt">
            <option value="St.Pölten">St.Pölten</option>
            <option value="Linz">Linz</option>
            <option value="Wien">Wien</option>
          </select>
        </div>

        <div class="green"><label for="Kommentar">Kommentar:</label></div>
        <div class="yellow">
          <input class="long-inp" type="text" name="comment" id="Kommentar" />
        </div>

        <div class="green">Formular:</div>
        <div class="yellow">
          <button name="absenden" type="submit" form="f1">Absenden</button>
          <button type="reset" form="f1">Abbrechen</button>
        </div>
      </form>

      <?php
      
        if (isset($_POST["absenden"])) {
          include_once 'inc/stellenbewerbung.inc.php';
        };
      
      ?>

    </div>
  </body>
</html>
