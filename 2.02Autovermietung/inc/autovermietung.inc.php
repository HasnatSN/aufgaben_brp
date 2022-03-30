<?php
  $autotyp_array = [
    ["Kleinwagen", 50],
    ["Mittelklasse", 80],
    ["Oberklasse", 110]
  ];

  $kundentyp_array = [
    ["Businesskunde", 0.2],
    ["Stammkunde", 0.1],
    ["Kunde", 0]
  ];

  $autotyp = $autotyp_array[$_POST["auto-kateg"]][0];
  $miet_dauer = (int)$_POST["m-dauer"];
  $versicherung = $_POST["versicherung"];
  $kundentyp = $kundentyp_array[$_POST["k-type"]][0];

  $mietpreis = $autotyp_array[$_POST["auto-kateg"]][1] * $miet_dauer;
  $vers_preis = $mietpreis * $_POST["versicherung"];
  $rabatt = $mietpreis * $kundentyp_array[$_POST["k-type"]][1];

  $gpreis = $mietpreis + $vers_preis - $rabatt
?>


<!-- <header>
        <div> <?php echo '<img src="img/car.png" alt="" />' ?></div>
        <div class="header-text"> <?php echo ' <h1>Autovermietung</h1> ' ?></div>
      </header> -->

<div class="div-best">
  <div>Autotyp: <?php echo $autotyp ?> </div>
  <div>Mietdauer: <?php echo  $miet_dauer ?> </div>
  <div>Verischerung: <?php echo $versicherung ?> </div>
  <div>Kundentyp: <?php echo $kundentyp ?> </div>

  <hr>

  <div>Mietpreis: <?php echo $mietpreis, " €" ?>  </div>
  <div>Aufpreis Versicherung: <?php echo $vers_preis, " €" ?>  </div>
  <div>Rabatt: <?php echo $rabatt, " €" ?>  </div>
  <div>Gesamtpreis: <?php echo $gpreis, " €" ?>  </div>
</div>
<h2>Wir wünschen Ihnen eine erholsame Fahrt!</h2>



