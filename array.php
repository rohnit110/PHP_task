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

    array_splice($cars, 1, 1); //array splice 
    var_dump($cars);

    array_push($cars, "bugatti");
    array_push($student, "Ramesh");

    echo "<h4>Sorting Array</h4>";
    sort($cars);
    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo '<br>';
    }
    echo "Descending Order: ";
    $number = array(12, 3, 44, 21, 32);
    rsort($number);
    $length = count($number);
    for ($y = 0; $y < $length; $y++) {
        echo $number[$y];
        echo ",";
    }
    echo '<br>';
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => "1964");
    asort($car);
    foreach ($car as $x => $x_values) {
        echo "Key = " . $x . ", value = " . $x_values;
        echo "<br>";
    }
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    echo "<h4>Multidimensional  Array</h4>";
    $data = array(
        array("John", 34, 45),
        array("don", 45, 53),
        array("michel", 44, 43)
    );
    echo $data[0][0] . " : " . "Maths - " . $data[0][1] . " Science - " . $data[0][2];
    echo "<br>";
    echo $data[1][0] . " : " . "Maths - " . $data[1][1] . " Science - " . $data[1][2];
    echo "<br>";
    echo $data[2][0] . " : " . "Maths - " . $data[2][1] . " Science - " . $data[2][2];
    // echo "<br>";

    echo "<h3> Array Function </h4>";
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "driver" => "45");
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => "1964", "driver" => "45");
    $records = [
        array(
            'id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe',
        ),
        array(
            'id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith',
        ),
        array(
            'id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones',
        ),
        array(
            'id' => 5623, 'first_name' => 'Peter', 'last_name' => 'Doe',
        )
    ];
    print_r(array_change_key_case($age, CASE_UPPER));
    echo "<br>";
    print_r(array_chunk($age, 2));
    echo "<br>";
    print_r(array_column($records, "last_name"));
    echo "<br>";
    print_r(array_count_values($car));
    echo "<br>";
    print_r(array_diff_assoc($age, $car));
    echo "<br>";
    print_r(array_fill_keys($car, 'car'));
    echo "<br>";
    $entry = [
        0 => 'foo',
        1 => false,
        2 => -1,
        3 => null,
        4 => '',
        5 => '0',
        6 => 0,
    ];

    print_r(array_filter($entry));
    echo "<br>";
    print_r(array_is_list(['apple', 2, 3]));
    echo "<br>";
    if (array_key_exists("brand", $car)) {
        echo "The key is in the array";
    } else {
        echo "The key is not valid";
    }
    echo "<br>";
    print_r(array_key_first($car));
    echo "<br>";
    print_r(array_key_last($car));
    echo "<br>";
    print_r(array_keys($car));
    echo "<br>";
    function squre_root($val)
    {
        return sqrt($val);
    }
    $value = [1, 4, 9, 16, 25, 36];
    $total = array_map('squre_root', $value);
    print_r($total);
    echo "<br>";

    $r = (array_pop($value));
    print_r($value);
    echo "<br>";
    echo "Product of Array" . array_product($total);
    echo "<br>";
    $r = array_push($value, 36, 49);
    print_r($value);
    echo "<br>";
    print_r(array_rand($value, 3));
    echo "<br>";
    $a = [0 => 0];
    print_r(array_replace($value, $a));
    echo "<br>";
    $d = array_search("mustang", $car);

    date_default_timezone_set("	Indian/Kerguelen");
    echo "The time is " . date("h:i:sa");
    ?>
</body>

</html>