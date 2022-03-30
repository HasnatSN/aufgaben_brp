<?php

  $gross = number_format($_POST["gross"], 2);
  $percent = number_format($_POST["percent"], 2);

  $sbetrag = $gross * ($percent / 100);
  $ebetrag = $gross - $sbetrag;

?>



<div>
  <h1>Skontoberechnung</h1>
  <p>Bruttobetrag in €: <?php echo $gross ?> </p>
  <p>Skonto in %: <?php echo $percent ?> </p>
  <h3>Skontobetrag in €: <?php echo $sbetrag ?> </h3>
  <h3>Endbetrag in €: <?php echo $ebetrag ?> </h3>
</div>