<html>
<body>

<?php 
$x = 23;
var_dump($x);
$y = "Hello world!";
var_dump($y);
$z = 2345.58;
var_dump($z);
$r = true;
var_dump($r);
$w = array("Kawasaki", "Ducatti", "Triumph");
var_dump($w);
var_dump(5);
$e = "Hello world!";
$e = null;
var_dump($e);
$d = 5;
$d = (string) "5";
var_dump($d);

//String
$h = "Rohnit";
echo "$h here";
echo "<br>";
echo strlen("Good Evening"); 
echo "<br>";
echo str_word_count("Good Evening");
echo "<br>";
echo strpos("Good Evening", "Evening");
echo "<br>";echo "<br>";

//Modify String
echo strtoupper("welcome to php");
echo "<br>";
echo strtolower("good night");
echo "<br>";
$g = "Hello Universe";
echo str_replace("Universe", "World!", $g);
echo "<br>";
echo strrev("Right to left");
echo "<br>";
echo trim("  Windows, Apache, sql, php  ");
echo "<br>";
$x = "hello world";
$y = explode(" " , $y);
print_r($y);
echo "<br>";echo "<br>";

//Concatenate Strings
$x= "Rohnit";
$y = "Aghariya";
$z = $x ." ". $y;
echo $z;
echo "<br>";
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
echo "<br>";echo "<br>";

//Slicing Strings
$s = "Welcome to Aehmdabad";
echo substr($s, 8, 16);
echo "<br>";
$x = "Hello World!";
echo substr($x, -5, 3);
echo "<br>";
$x = "Hello World!";
echo substr($x, 5, -3);
echo "<br>";
echo "<br>";
//Escape Characters
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?>

</body>
</html>
