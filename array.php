<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array</title>
</head>

<body>
    <?php
    echo "<h2>PHP Array</h2>";
    function myFunction()
    {
        echo "This text comes from a function";
    }
    $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());
    $myArr[3];
    echo "<br>";
    $cars = array("audi", "bmw", "jeep");
    echo count($cars);

    echo "<h4>Indexed Arrays</h4>";
    $color = array("blue", "green", "red");
    var_dump($color);
    echo $color[0];
    $color[1] = "purple";
    var_dump($color);

    $student = array("rahul", "Ronak", "rinkesh");
    foreach ($student as &$x) {

        echo "$x <br>";
    }
    array_push($cars, "mustang");
    var_dump($cars);

    echo "<h4>Associative Arrays</h4>";
   
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => "1964");
    $car["model"] = "chellanger";
    var_dump($car);
    //update array in foreach group
    unset($x);
    var_dump($student);

//remove array item
unset($student[1]);
var_dump($student);

unset($car["model"], $car["year"]);
var_dump($car);

array_splice($cars, 1 , 1); //array splice 
var_dump($cars);

array_push($cars , "bugatti");
array_push($student, "Ramesh");

echo "<h4>Sorting Array</h4>";
sort($cars);
$clength= count($cars);
for($x=0; $x < $clength;$x++){
    echo $cars[$x];
    echo '<br>';
}
echo "Descending Order: ";
$number = array(12,3,44,21,32);
rsort($number);
$length = count($number);
for($y=0; $y< $length; $y++){
    echo $number[$y];
    echo ",";
}echo '<br>';
$car = array("brand" => "Ford", "model" => "Mustang", "year" => "1964");
asort($car);
foreach($car as $x => $x_values){
    echo "Key = ". $x. ", value = ".$x_values;
    echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<h4>Multidimensional  Array</h4>";
$data = array(
    array("John", 34,45),
    array("don", 45,53),
    array("michel",44,43)
);
echo $data[0][0]." : "."Maths - ".$data[0][1]." Science - ".$data[0][2]; echo "<br>";
echo $data[1][0]." : "."Maths - ".$data[1][1]." Science - ".$data[1][2]; echo "<br>";
echo $data[2][0]." : "."Maths - ".$data[2][1]." Science - ".$data[2][2]; echo "<br>";
    ?>
</body>

</html>