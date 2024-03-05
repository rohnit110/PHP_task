<?php
echo "<h3> Filters </h3>";
$a = 10;
$b = array("options" => array("min_range" => 23, "max_range" => 35));

if (filter_var($a, FILTER_VALIDATE_INT, $b)) {
    echo "$a is integer";
} else {
    echo "$a is not an integer";
}
echo "<br>";
//float
$a = 22.99;
$b = array("options" => array("min_range" => 23, "max_range" => 35));

if (filter_var($a, FILTER_VALIDATE_FLOAT, $b)) {
    echo "$a is float";
} else {
    echo "$a is not a float";
}
echo "<br>";

//bool
$a = 22.99;
$b = array("options" => array("min_range" => 23, "max_range" => 35));

if (filter_var($a, FILTER_VALIDATE_BOOL, $b)) {
    echo "$a is float";
} else {
    echo "$a is not a float";
}


//
echo "<br>";
echo "<h5>Filter sanitization</h5>";
$a = "rahul.(kumar)/@gmail.com";
$a = filter_var($a, FILTER_SANITIZE_EMAIL);

if (filter_var($a, FILTER_VALIDATE_EMAIL)) {
    echo "$a is valid email";
} else {
    echo "$a is not a valid email";
}
echo "<br>";

$a = "https://www.google .com";
$a = filter_var($a, FILTER_SANITIZE_URL);

if (filter_var($a, FILTER_VALIDATE_URL)) {
    echo "$a is valid URL";
} else {
    echo "$a is not a valid URL";
}
echo "<br>";
//
$filters = filter_list();

foreach($filters as $filter_name) {

    echo $filter_name .": ".filter_id($filter_name) ."<br>";

}
