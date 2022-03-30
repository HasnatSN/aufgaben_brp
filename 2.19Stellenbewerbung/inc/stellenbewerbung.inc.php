<?php

  if (isset($_POST["sprache"])) {
    $sprache = implode(", ", $_POST["sprache"]);
  } else {
    $sprache = '';
  }

?>
<div>
  <h1>Bewerberdaten</h1>
  <div class="output">
    <div class="green">Vorname:</div> <div class="yellow"><?php echo $_POST["vorname"] ?></div>
    <div class="green">Zuname:</div> <div class="yellow"><?php echo $_POST["nachname"] ?></div>
    <div class="green">Geschlecht</div> <div class="yellow"><?php echo $_POST["geschlecht"] ?></div>
    <div class="green">Sprachkenntnisse</div> <div class="yellow"><?php echo $sprache; ?></div>
    <div class="green">Nächste Großstadt</div> <div class="yellow"><?php echo $_POST["stadt"] ?></div>
    <div class="green">Kommentar</div> <div class="yellow"><?php echo $_POST["comment"] ?></div>
  </div>
</div>