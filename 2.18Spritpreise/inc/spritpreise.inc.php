<?php

$cheap_gas = $_POST["cheap-gas"];
$expen_gas = $_POST["expen-gas"];
$usage = $_POST["usage"];
$costs = $_POST["costs"];

$tankmenge1 = 5;
$umweg1 = 0.2;
$umweg2 = 1;
$tankmenge2 = 1;

?>

<hr>
<div class="output">
  <div>Tankmenge [L]</div> <div>Umweg [km]</div> <div>Umweg [km]</div> <div>Tankmenge [L]</div>

  <?php
  
  while ($tankmenge1 < 71) {
    echo '<div>', number_format($tankmenge1, 1), '</div>' ;
    echo '<div>', number_format($umweg1, 1), '</div>' ;
    echo '<div>', number_format($umweg2, 1), '</div>' ;
    echo '<div>', number_format($tankmenge2, 2), '</div>' ;

    $tankmenge1 = $tankmenge1 + 5;
    $umweg1 = $umweg1 + 0.2;
    $umweg2 = $umweg2 + 0.5;

  }
  
  ?>


</div>