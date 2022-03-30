<?php

  $num1 = $_POST["zahl-1"];
  $num2 = $_POST["zahl-2"];
  $num3 = $_POST["zahl-3"];

  $result = ($num2 / $num1) * $num3;

  $result = round($result);

  echo '<div class="ergebnis">X = ', $result, '</div>';
?>