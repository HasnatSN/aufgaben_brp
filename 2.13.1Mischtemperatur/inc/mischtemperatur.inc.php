<?php

  $mk = $_POST["mk"];
  $mw = $_POST["mw"];
  $tk = $_POST["tk"];
  $tw = $_POST["tw"];


  if ($mk == 0 || $mw == 0 || $tk == 0 || $tw == 0 ) {
    echo 'Division durch 0 nicht möglich.';
    $possible = false;
  } else {
    $tm = ($mk * $tk + $mw * $tw) / ($mk + $mw);
    $possible = true;
  };

?>

<div class="ausgabe">
  <h1>
    <?php  

      if ($possible) {
          echo 'Mischtemperatur: ', number_format($tm, 2), '°C';
      }

    ?>
  </h1>
</div>