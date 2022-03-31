<?php

$num1 = $_POST["zahl-1"];
$num2 = $_POST["zahl-2"];

if ($num1 > $num2) {
  $bigger_n = $num1;
  $smaller_n = $num2;
} elseif ($num2 > $num1) {
  $bigger_n = $num2;
  $smaller_n = $num1;
} else {
  $ggt = $num1;
}

$working_num = $bigger_n % $smaller_n;


while ($working_num != 0) {
  $new_num = $working_num;
  $working_num = $smaller_n % $working_num;
  $smaller_n = $new_num;
}

echo $smaller_n;

?>