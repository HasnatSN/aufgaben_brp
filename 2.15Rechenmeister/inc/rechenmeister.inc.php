<?php

  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];

  $plus = $num1 + $num2;
  $minus = $num1 - $num2;
  $multi = $num1 * $num2;
  $divi = $num1 / $num2;


?>

<div>
  <h1>Rechenmeister Auswertung</h1>
  <div>Zahl 1: <?php echo $num1; ?> </div>
  <div>Zahl 2: <?php echo $num2; ?> </div>
  <div class="last-row">
    <div class="lr-1">
      Ergebnis Addition: <br>
      Ergebnis Subtraktion: <br>
      Ergebnis Multiplation: <br>
      Ergebnis Division: 
    </div>
    <div class="lr-2">
      Das Ergebnis ist <?php echo $plus; ?> <br>
      Das Ergebnis ist <?php echo $minus; ?> <br>
      Das Ergebnis ist <?php echo $multi; ?> <br>
      Das Ergebnis ist <?php echo $divi; ?> <br>
    </div>
  </div>
</div>