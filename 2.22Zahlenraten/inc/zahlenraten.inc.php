<hr>

<?php

$try = 1;
$guesses = [];

for ($i = mt_rand(1,6); $i != $_POST["u_num"]; $i = mt_rand(1,6)) {
  
  if (!in_array($i, $guesses)) {
        echo '<p>', $try,'. Versuch: Zahl:', $i, '</p>';
    $try++;
    array_push($guesses, $i);
  };
};

if ($i == $_POST["u_num"]) 
{ 
  echo '<p>', $try,'. Versuch: Zahl:', $i, ' ERRATEN!</p>';
}; 


?>