<h1>for-Schleife</h1>
<?php

$kapital = 1000;
$r = 1;

for ($i=$kapital; $i <= ($kapital * 2) ; $i = $i * 1.055) {
  
  if ($i == $kapital) {
    echo  '<div>Startkapital: ', number_format($kapital, 2), '€</div>';
  } else {
    echo '<div>', $r-1, '. Jahr: ', number_format($i, 2), ' €</div>'; 
  }
  $r++;

};

if ($i == $kapital) {
  echo  '<div>Startkapital: ', number_format($kapital, 2), '€</div>';
} else {
  echo '<div>', $r-1, '. Jahr: ', number_format($i, 2), ' €</div>'; 
}
$r++;
?>