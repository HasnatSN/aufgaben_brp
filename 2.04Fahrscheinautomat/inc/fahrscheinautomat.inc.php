<?php

  $card_cat = [
    ["Einzelkarte", 1],
    ["Wochenkarte", 6],
    ["Monatskarte", 26]
  ];

  $type = $_POST["zone"];
  $card = $card_cat[$_POST["schein"]][1];

  $gpreis = $type * $card;


  echo '<div class="output">Der Fahrschein kostet ', round($gpreis, 2),  'EUR.<br> (gültig ', $_POST["date"],  ')</div>' ;
?>