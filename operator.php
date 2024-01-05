<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operator</title>
</head>
<body>
<?php
echo "<h3>Arithmetic Operator</h3>";
$x = 50;
$y = 3;
echo "The sum of two value: "; echo $x + $y;
echo "<br>";
echo "The substract of two value: "; echo $x - $y;
echo "<br>";
echo "The multiplication of two value: "; echo $x * $y;
echo "<br>";
echo "The division of two value: "; echo $x / $y;
echo "<br>";
echo "The modulus of two value: "; echo $x % $y;
echo "<br>";
echo "The exponentiation of two value: "; echo $x ** $y;
echo "<br>";

echo "<h3> Assignment Operators</h3>";
$r = 10;
echo "Equal to: "; echo $r;
echo "<br>";
$r += 4;
echo "The sum of two value: "; echo "$r";
echo "<br>";
$y = 10;
$y -= 6;
echo "The substract of two value: "; echo $y;
echo "<br>";
$u = 10;
$u *= 6;
echo "The multiplication of two value: "; echo $u;
echo "<br>";
$i = 10;
$i /= 6;
echo "The multiplication of two value: "; echo $i;
echo "<br>";
$o = 10;
$o %= 6;
echo "The modulus of two value: "; echo $o;
echo "<br>";

echo "<h3> Comparison Operator</h3>";
$x=400;
$y='400';
echo "Equal(==):"; echo $x == $y;
echo "<br>";
echo "Identical(===):"; var_dump($x===$y);
echo "<br>";
echo "Not equal(!=):"; var_dump($x!=$y);
echo "<br>";
echo "Not equal(<>):"; var_dump($x<>$y);
echo "<br>";
echo "Not Identical(!==):"; var_dump($x!==$y);
echo "<br>";
$d = 40;
$f = 70;
echo "Greater than(>):"; var_dump($d > $f);
echo "<br>";
echo "Less than(<):"; var_dump($d < $f);
echo "<br>";
$h = 70;
$j = 70;
echo "Greater than or equal to(>=):"; var_dump($h >= $j);
echo "<br>";
echo "Less than or equal to(<=):"; var_dump($h <= $j);
echo "<br>";
$m = 40;
$n = -70;
echo "Spaceship(<=>):"; var_dump($d <=> $f);
echo "Spaceship(<=>):"; var_dump($h <=> $j);
echo "Spaceship(<=>):"; var_dump($m <=> $n);
echo "<br>";

echo "<h3> Increment / Decrement Operators</h3>";
echo "Pre-Increment: ";
$d = 45;
echo  ++$d;
echo "<br>";
echo "Post-Increment: ";
$d = 45;
echo  $d++;
echo "<br>";
echo "Pre-Decrement: ";
$e = 45;
echo  --$e;
echo "<br>";
echo "Post-Decrement: ";
$e = 45;
echo  $e--;
echo "<br>";

echo "<h3>Logical Operators</h3> ";
$z = 40;
$c = 70;
if( $z == 40 and $c == 70){
    echo "And Operator";
}echo "<br>";
if( $z == 70  or $c == 70){
    echo "Or Operator";
}echo "<br>";
if( $z == 70  xor $c == 70){
    echo "xor Operator";
}echo "<br>";
if( $z == 40  && $c == 70){
    echo "And (&&) Operator";
}echo "<br>";
if( $z == 40  && $c == 70){
    echo "And (||) Operator";
}echo "<br>";
if (!($x == 90)) {
    echo "Not Operator";
}

echo "<h3>String Operators</h3>";
$txt1 = "hello ";
$txt2 = "Good Evening";
echo "Concatenation: "; echo $txt1.$txt2;
echo "<br>";
echo "Concatenation: ";  $txt1.=$txt2; echo $txt1;

echo "<h3>Conditional Assignment Operators</h3>";
