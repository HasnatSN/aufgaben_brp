<?php

  $anzahl = $_POST["anzahl-ticket"];

  $kategorie = [
    ["Kategorie I", 90],
    ["Kategorie II", 70],
    ["Kategorie III", 50],
    ["Stehplatz", 10]
  ];

if (isset($_POST["schulklasse"])) {
  $discount_text = "Discount: Schulklasse";
  $kategorie_preis = 0;
  $gpreis = $anzahl * 5;
} else {
  $discount_text = "Discount: Nein";
  $kategorie_preis = $kategorie[$_POST["kategorie"][1]];
  $gpreis = $anzahl * $kategorie_preis;
}

?>

<div id="res_best">
  <h2>Reservierungsbestätigung</h2>

  <div class="infos">

    <div class="info">

      <?php echo "Namen: ", $_POST["kunde"], "<br>";  
       echo "Event: ", $_POST["event"], "<br>" ; 
       echo "Termin: ", $_POST["termin"], "<br>" ;
      ?>

    </div>

    <div class="info">
      <?php
      
      echo "Anzahl Tickets: $anzahl", "<br>"; 
      echo "Platz: ", $kategorie[$_POST["kategorie"]][0], ": $kategorie_preis €", "<br>"; 
      echo "$discount_text", "<br>"; 
      ?>
      
    </div>
  </div>

  <p>
    <b>
      Gesamtpreis: <?php echo "$gpreis €"; ?>
    </b>
  </p>

</div>