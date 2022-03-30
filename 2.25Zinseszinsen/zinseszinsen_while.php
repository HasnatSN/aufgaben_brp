<h1>do-while-Schleife</h1>
<?php
$kapital = 1000;
$i = $kapital;
$r = 1;

  while ($i < $kapital * 2) {
    if ($r < 2) {
      echo  '<div>Startkapital: ', number_format($i, 2), '€</div>';
      $i = $i * 1.055;
      $r++; 
    } else {
      echo '<div>', $r-1, '. Jahr: ', number_format($i, 2), '€</div>';
      $r++;
      $i = $i * 1.055;
    }
  }

  if ($r < 2) {
    echo  '<div>Startkapital: ', number_format($i, 2), '€</div>';
    $i = $i * 1.055;
    $r++; 
  } else {
    echo '<div>', $r-1, '. Jahr: ', number_format($i, 2), '€</div>';
    $r++;
    $i = $i * 1.055;
  }
?>