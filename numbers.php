<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Number</title>
</head>

<body>
    <?php
    echo "<h1> PHP Number </h1>";
    $q = 56;
    $g = 45.52;
    $t = "450";
    $w = "Hello";
echo var_dump($q);
echo var_dump($g);
echo var_dump($t);
echo "<br>";
echo var_dump(is_int($q));
echo var_dump(is_float($g));
echo var_dump(is_double($t));
$x = 1.9e411;
var_dump($x);
var_dump(is_numeric($w));
echo "<br>";
$r = 345654.5654;
$e = "3564904.53959";
$int_cast = (int)$r;
echo $int_cast;
echo "<br>";
$int_cast = (int)$e;
echo $int_cast; 
echo "<br>";
echo "<h4>PHP Casting</h4>";
$p = 3567;
$l = 4545.52;
$f = "4rt432";
$k = "Hello";
$h = array("M-series","GLS-series","X-series");

$p = (int)$p;
$l = (float)$l;
$f = (int)$f;
$k = (bool)$k;
$h = (object)$h;

echo var_dump($p);
echo var_dump($l);
echo var_dump($f);
echo var_dump($k);
echo var_dump($h);

    ?>
</body>

</html>