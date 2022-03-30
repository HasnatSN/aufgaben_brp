<?php

  $size = [
    ["Mini", 4.4],
    ["Midi", 6.5],
    ["Maxi", 9.5]
  ];

  $cheese = [
    ["Kein Käse"],
    ["Gouda"],
    ["Mozzarella"]
  ];

  $prize = $size[$_POST["size"]][1];

  if(!empty($_POST["meat"])) {
    foreach ($_POST["meat"] as $item) {
      $meat_a[] = $item;
    };
    if (count($meat_a) > 1) {
      $prize = $prize + (count($meat_a) * 1 - 1);
    };
  };

  if(!empty($_POST["toppings"])) {
    foreach ($_POST["toppings"] as $topping) {
      $toppings_a[] = $topping;
    };
    if (count($toppings_a) > 2) {
      $prize = $prize + (count($toppings_a) * 0.5 - 1);
    };
  };   
?>

<div class="ausgabe">
  <h2>Ihre Bestellung</h2>
  <div class="ausgabe-itm">
    <div>Name: <?php echo $_POST["kunde"] ?> </div>
    <div>Straße: <?php echo $_POST["street"] ?> </div>
    <div>Ort: <?php echo $_POST["stadt"] ?> </div>
  </div>
  <div class="ausgabe-itm">
    <div>Pizzagröße: <?php echo $size[$_POST["size"]][0] ?> </div>
    <div>Käsevariante: <?php echo $cheese[$_POST["cheese"]][0] ?> </div>

    <div>Wurst / Fisch: <?php if (!empty($meat_a)) {
        foreach ($meat_a as $key) {echo $key, ', ';}}?> 
    </div>

    <div>Beilagen: <?php if (!empty($toppings_a)) {
        foreach ($toppings_a as $topping) {echo $topping, ', ';}}?>
    </div>
    
    <div>Pizzapreis: <?php echo $prize, ' €' ?> </div>
  </div>
</div>