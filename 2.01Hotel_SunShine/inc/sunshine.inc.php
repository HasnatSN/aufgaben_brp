<?php

  $preis_pro_nacht = 50;
  $p_anzahl = $_POST["p_anzahl"];
  $n_anzahl = $_POST["n_anzahl"];

  $verplegungsarten = [
    ["Frühstück", 0],
    ["Halbpension", 10],
    ["Vollpension", 15],
    ["All-Inclusive", 20]
  ];

  $zimmer_typ = [
    ["Standard", 0],
    ["Familie", 10],
    ["Suit", 25]
  ];

 if ($_POST["ein-zimmer"] == "JA") {
   $preis_pro_nacht = $preis_pro_nacht * 1.5;
 }

 $kategorie_preis = $verplegungsarten[$_POST["food"]][1];
 $zimmer_typ_preis = $zimmer_typ[$_POST["zimmertyp"]][1];
 
 $gpreis = $n_anzahl * $p_anzahl * $preis_pro_nacht + $kategorie_preis + $zimmer_typ_preis;


?>

<div id="preisberechnung">
  <div class="title"><h1>Preisberechnung</h1></div>
  
  <div class="left-div">

    <?php 

    echo
    'Preis pro Nacht: ', '50.00 €', '<br>',
    'Anzahl Erwachsenen: ', $p_anzahl, '<br>',
    'Anzahl Nächte: ', $n_anzahl, '<br>'
    
    ?>  
  </div>

  <div class="right-div">

    <?php echo 'Einzelzimmer: ', $_POST["ein-zimmer"] ?> <br>
    <?php echo 'Verpflegung: ', $verplegungsarten[$_POST["food"]][0],"; ", $verplegungsarten[$_POST["food"]][1], " €"?> <br>
    <?php echo 'Zimmertyp: ', $zimmer_typ[$_POST["zimmertyp"]][0],"; ", $zimmer_typ[$_POST["zimmertyp"]][1], " €"?> <br>

  </div>

  <div class="gpreis">
    <?php
      echo "<div>Gesamtpreis: $gpreis  € </div>"
    ?>
  </div>

</div>