<?php

  $mk = $_POST["mk"];
  $mw = $_POST["mw"];
  $tk = $_POST["tk"];
  $tw = $_POST["tw"];


  if ($mk == 0 || $mw == 0 || $tk == 0 || $tw == 0 ) {
    echo 'Division durch 0 nicht möglich.';
    $possible = false;
  } else {
    $tm = ($mk * $tk + $mw * $tw) / ($mk + $mw);
    $possible = true;
  };

?>

<div class="ausgabe">

    <table>
      <tr>
        <th>T<sub>k</sub></th>
        <th>T<sub>w</sub></th>
        <th>T<sub>m</sub></th>
      </tr>

    
      <?php  

        for ($i=$tk; $i <= $tw ; $i+= 2) { 
          echo '<tr> <td>', number_format($tk, 2),'</td>  <td>', number_format($i, 2),'</td>  <td>', number_format($tm, 2),'</td></tr>';
        }

      ?>
    </table>
</div>