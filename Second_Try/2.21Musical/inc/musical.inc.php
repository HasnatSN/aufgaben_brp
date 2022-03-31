<?php

$name = $_POST["kunde"];
$event = $_POST["event"];
$termin = $_POST["datum"];
$anzahl_t = $_POST["anzahl"];

$kategorie = [
  ["Kategorie I", 90],
  ["Kategorie II", 70],
  ["Kategorie III", 50],
  ["Stehplatz", 10]
];

$show = [
  ["Elisabeth"],
  ["König der Löwen"],
  ["Rebecca"],
  ["Romeo und Julia"],
  ["We will rock you"]
];

if (isset($_POST["discount"])) {
  $gpreis = $anzahl_t * 5;
  $discount = "JA";
} else {
  $gpreis = $anzahl_t * $kategorie[$_POST["kat"]][1];
  $discount = "NEIN";
}
?>

<div class="output">
  <h1>Reservierungsbestätigung</h1>

  <div class="output-mid">
  <div class="left">
    <div>Name: <?php echo $name; ?> </div>
    <div>Event: <?php echo $show[$_POST["event"]][0]; ?> </div>
    <div>Termin: <?php echo $termin; ?> </div>
  </div>
  <div class="right">
    <div>Anzahl Tickets: <?php echo $anzahl_t; ?> </div>
    <div>Platz: <?php echo $kategorie[$_POST["kat"]][0], ', ', $kategorie[$_POST["kat"]][1], ' €'; ?> </div>
    <div>Ermäßigung: <?php echo $discount; ?> </div>
  </div>
  </div>

  <h3>Gesamtpreis: <?php echo $gpreis, ' €'; ?> </h3>
</div>