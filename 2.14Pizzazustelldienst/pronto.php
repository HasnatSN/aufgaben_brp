<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="HSN" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Pizzazustelldienst Pronto</title>
  </head>
  <body>
    <div id="wrapper">
      <header><h1>Pizzazustelldienst Pronto</h1></header>

      <form action="pronto.php" method="post" id="f1">
        <main>
          <div class="itm">
            <h3>Größe</h3>
            <div>
              <input type="radio" name="size" value="0" id="mini" checked />
              <label for="mini">Mini</label>
            </div>
            <div>
              <input type="radio" name="size" value="1" id="midi" />
              <label for="midi">Midi</label>
            </div>
            <div>
              <input type="radio" name="size" value="2" id="max" />
              <label for="max">Max</label>
            </div>
          </div>
          <div class="itm">
            <h3>Käse</h3>
            <div>
              <input type="radio" name="cheese" value="0" id="kein-k" checked />
              <label for="kein-k">Kein Käse</label>
            </div>
            <div>
              <input type="radio" name="cheese" value="1" id="gouda" />
              <label for="gouda">Gouda</label>
            </div>
            <div>
              <input type="radio" name="cheese" value="2" id="mozza" />
              <label for="mozza">Mozzarella</label>
            </div>
          </div>
          <div class="itm">
            <h3>Wurst / Fisch</h3>
            <div>
              <input type="checkbox" name="meat[]" value="Hackfleisch" id="hack" />
              <label for="hack">Hackfleisch</label>
            </div>
            <div>
              <input type="checkbox" name="meat[]" value="Salami" id="salami" />
              <label for="salami">Salami</label>
            </div>
            <div>
              <input type="checkbox" name="meat[]" value="Schinken" id="ham" />
              <label for="ham">Schinken</label>
            </div>
            <div>
              <input type="checkbox" name="meat[]" value="Speck" id="speck" />
              <label for="speck">Speck</label>
            </div>
            <div>
              <input type="checkbox" name="meat[]" value="Thunfisch" id="tuna" />
              <label for="tuna">Thunfisch</label>
            </div>
          </div>
          <div class="itm">
            <h3>Beilagen</h3>
            <div>
              <input
                type="checkbox"
                name="toppings[]"
                value="Champignon"
                id="champ"
                
              />
              <label for="champ">Champignon</label>
            </div>
            <div>
              <input type="checkbox" name="toppings[]" value="Mais" id="mais" />
              <label for="mais">Mais</label>
            </div>
            <div>
              <input
                type="checkbox"
                name="toppings[]"
                value="Paprika"
                id="paprika"
              />
              <label for="paprika">Paprika</label>
            </div>
            <div>
              <input
                type="checkbox"
                name="toppings[]"
                value="Spargel"
                id="spargel"
              />
              <label for="spargel">Spargel</label>
            </div>
            <div>
              <input
                type="checkbox"
                name="toppings[]"
                value="Spinat"
                id="spinat"
              />
              <label for="spinat">Spinat</label>
            </div>
            <div>
              <input
                type="checkbox"
                name="toppings[]"
                value="Zwiebel"
                id="zwiebel"
              />
              <label for="zwiebel">Zwiebel</label>
            </div>
          </div>
          <div class="adresse">
            <div class="a-inputs">
              <label for="i-kunde">Name:</label>
              <input type="text" name="kunde" id="i-kunde" required/>
            </div>
            <div class="a-inputs">
              <label for="i-strasse">Straße:</label>
              <input type="text" name="street" id="i-strasse" required/>
            </div>
            <div class="a-inputs">
              <label for="i-stadt">Ort:</label>
              <input type="text" name="stadt" id="i-stadt" required/>
            </div>

            <div class="btn-div">
              <button name="bestellung" type="submit">Bestellung</button>
            </div>
            <div class="btn-div">
              <button for="f1" type="reset">Neu</button>
            </div>
          </div>
        </main>
      </form>

      <?php
      
        if (isset($_POST["bestellung"])) {
          include_once 'inc/pronto.inc.php';
        }
      
      ?>

    </div>
  </body>
</html>
