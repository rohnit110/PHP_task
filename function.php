<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>

<body>
    <?php
    echo "<h2> PHP Function</h2>";
    function first()
    {
        echo "Function is called";
    }
    first();
    echo "<br>";
    echo "<br>";

    //functin as argument
    function familyName($fname, $year)
    {
        echo "Mr  $fname $year <br>";
    }
    familyName("Rohnit", 2001);
    familyName("Kevin", 2001);
    familyName("Nishan", 2004);
    echo "<br>";
    //function with returning value
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    echo "2 + 4 =" . sum(2, 4) . "<br>";
    echo "5 + 2 =" . sum(5, 2) . "<br>";
    echo "1 + 9 =" . sum(1, 9) . "<br>";


    ?>
</body>

</html>