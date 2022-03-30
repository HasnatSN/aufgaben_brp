<?php

  $gspz = $_POST["cell_f"];
  $length = $_POST["length_f"];
  $width = $_POST["width_f"];

  $surface = $length * $width;
  $scope = ($length + $width) * 2;
  $price_s = $surface * 25;
  $price_z = $scope * 15;

?>


<div class= "output">

<h2>Grundstückverkauf</h2>


  <div class="col1">Grundstückparzelle <br> Länge <br> Breite</div>
  <div class="col-2"><?php echo $gspz, '<br>', $length, '<br>', $width ?></div>

<h2>Berechnung</h2>


  <div class="col1">
    Fläche <br> Umfang <br> Grundstück     <br>Zaun
  
  </div>

  <div class="col-2"> 

    <?php
    
      echo $surface,'<br>', $scope,'<br>', 'Der Grundstückpreis beträgt ', $price_s, ' EUR!','<br>', 'Der Zaun kostet ', $price_z, ' EUR!';
    
    ?>
  </div>

</div>