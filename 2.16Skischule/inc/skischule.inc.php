<?php

  $name = $_POST["kunde"];
  $date = $_POST["date"];

  $skikurse = [
    ["Erwachsene 4h/Tag", 50 ],
    ["Kinderclub 4h/Tag", 45 ],
    ["Miniclub 2h/Tag", 35 ],
    ["Snowboarden 2h/Tag", 40 ],
  ];

  $preis = $skikurse[$_POST["kurs"]][1];

  if (!empty($_POST["ski-snow"])) {
    if ($_POST["ski-snow"] == 1) {
      $preis = $preis + 16;
    };
  };

  
  if (!empty($_POST["ski-snow-schuhe"])) {
    if ($_POST["ski-snow-schuhe"] == 1) {
      $preis = $preis + 14;
    };
  }
?>

<div class="ausgabe">
  <hr>
  <h1>Buchungsbestätigung</h1>
  <div>Name: <?php echo $_POST["kunde"] ?> </div>
  <div>Art des Skikurses: <?php echo $skikurse[$_POST["kurs"]][0]  ?> </div>
  <div>Verleih:
    <ul>
      <?php
      
        if (!empty($_POST["ski-snow"])) {
          echo '<li>Ski- oder Snowboard: 16€';
        };

        if (!empty($_POST["ski-snow-schuhe"])) {
          echo '<li>Ski- oder Snowboardschuhe: 14€';
        };

        if (empty($_POST["ski-snow"]) && empty($_POST["ski-snow-schuhe"])) {
          echo '<li>Kein Leihequiment.';
        }

      ?>
    </ul>

  </div>
  <div>Datum: <?php echo $_POST["date"] ?> </div>
  <div>Gesamtpreis: <?php echo number_format($preis, 2), ' €' ?> </div>
</div>