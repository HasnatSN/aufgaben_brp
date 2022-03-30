<?php

  $rad = $_POST["radius"];

  $surface = $rad * $rad * 3.14;
  $scope = 2 * 3.14 * $rad;
  $dia = 2 * $rad;


?>

<div class="ausgabe">
  <h4>Kreis</h4>
  <div>Kreisdurchmesser: <?php echo $dia; ?> </div>
  <div>Kreisfläche: <?php echo $surface; ?> </div>
  <div>Kreisumfang: <?php echo $scope; ?> </div>
</div>