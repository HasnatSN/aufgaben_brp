<hr>
<?php
$n = (int) $_POST['zahl'];
$e = $_POST['einheit'];

if ($e == 'Zoll')
    $n = $n * 0.0254;
else if ($e == 'Zentimeter')
    $n = $n * 0.01;
else if ($e == 'Dezimeter')
    $n = $n * 0.1;
else if ($e == 'Meter')
    ;
else if ($e == 'Kilometer')
    $n = $n * 1000;
else if ($e == 'Meilen')
    $n = $n * 0.00062137;
else if ($e == 'Seemeilen')
    $n = $n * 0.000539957;

echo $n, " ", $e, "<br> = ", $n * 39.3701, " Zoll <br>";
echo "= ", $n * 1000, "mm<br>";
echo "= ", $n * 100, "cm<br>";
echo "= ", $n * 10, "dm<br>";
echo "= ", $n, "mm<br>";
echo "= ", $n * 0.001, "mm<br>";
echo "= ", $n * 0.000621371, "mm<br>";
echo "= ", $n * 0.000539957, "mm<br>";
?>