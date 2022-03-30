<?php

$tarifgruppe = [
  ["Optima Komfort", 25, 0.05],
  ["XL-Energie", 60, 0.03],
  ["XXL-Energie", 90, 0.01],
];

$preis = $tarifgruppe[$_POST['tarif']][1] + $tarifgruppe[$_POST['tarif']][2] * $_POST["verbrauch"];

$gpreis = $preis + $_POST["z-art"]

?>

<div class="output">

  <div class="itm">
  <div>Verbrauch: <?php echo $_POST["verbrauch"], 'kWh' ?> </div>
  <div>Tarifgruppe: <?php echo $tarifgruppe[$_POST["tarif"]][0] ?> </div>
  <div>Strompreis inkl. Grundgebühr: <?php echo number_format($preis, 2), ' €' ?> </div>
  </div>

  <div class="itm">
    <div>
      <?php
      
        if ($_POST["rabatt"] = 'true') {
          $gpreis = $gpreis * 1;
          echo '5% Rabatt';
        } else {
          echo 'Kein Rabatt';
        }

      ?>
    </div>
    <div>Zahlungsart: </div>
    <div>Zuschlag für Zahlungsart: <?php echo number_format($_POST["z-art"], 2) ?> </div>
    <div>Gesamtpreis: <?php echo number_format($gpreis, 2) ?> </div>
  </div>

</div>