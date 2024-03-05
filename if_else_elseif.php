<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP if-else-elseif</title>
</head>

<body>
    <?php
    echo "<h3>IF Statement</h3>";
    $x = 5;
    if ($x > 4) {
        echo "5 is bigger than 4";
    }
    echo "<br>";
    if ($x == 5) {
        echo "Oh! Great";
    }
    echo "<br>";
    $r = 50;
    $t = 20;
    $y = 30;
    if ($r > $t && $y < $r) {
        echo "Condition is true";
    }
    echo "<br>";

    echo "<h3>If-Else Statement</h3>";
    $t = date("l");
    if ($t == "Wednesday") {
        echo "Today is Wednesday";
    } else {
        echo "Today is not wednesday";
    }
    echo "<br>";
    $g = date("H");
    if ($g == "12") {
        echo "Good Evening";
    } elseif ($g > 10) {
        echo "Good afternooon";
    } else {
        echo "Good night";
    }
    echo "<br>";

    echo "<h3>Short Hand If Statement</h3>";
    $g = 45;
    if ($g < 50) $b = "Valid";
    echo $b;
    echo "<br>";
    //if-else
    $a = 13;

    $b = $a < 10 ? "Hello" : "Good Bye";

    echo $b;

    echo "<h3>Nested If Statement</h3>";
    $a = 13;

    if ($a > 10) {
        echo "Above 10";
        if ($a > 20) {
            echo " and also above 20";
        } else {
            echo " but not above 20";
        }
    }
    ?>
</body>

</html>