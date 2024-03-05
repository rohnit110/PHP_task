<?php
echo date("H:i:sa : d - m - Y") . "<br>";

$a = mktime(9, 36, 22, 10, 9, 2024);
echo "created date is" . date("d/m/Y :: h:i:s", $a) . "<br>";

$d = strtotime("2:30am may 10 2024");
echo "Day is" . date("d/m/Y : h:i:sa", $d) . "<br>";

$e = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $e) . "<br>";

$w = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $w) . "<br>";

$f = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $f) . "<br>";

$startdate = strtotime("monday");
$enddate = strtotime("+6 months", $startdate);
while ($startdate < $enddate) {
    echo date("M-y", $startdate) . "<br>";
    $startdate = strtotime("+1 months", $startdate);
}


