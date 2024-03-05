<?php
function pattern($number)
{
    for ($i = 0; $i <= $number; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
pattern(5);
echo "<br>";
function square($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "* * * * *";
        echo "<br>";
    }
}
square(5);
echo "<br>";
function reverse($number)
{
    for ($i = $number; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
reverse(5);
echo "<br>";
function opposite($number)
{
    for ($i = $number; $i > 0; $i--) {

        for ($k = $i; $k < $number; $k++) {
            echo "&nbsp &nbsp";
        }
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
opposite(5);
function pyramid($size){
    for($i = 0; $i < $size; $i++) {

        for($j = 0; $j < $size - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for($k = 0; $k < 2 * $i + 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}pyramid(5);

class Practice{
    
}