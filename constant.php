<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant</title>
</head>

<body>
    <h1>PHP Constant</h1>
    <?php
    define("WELCOME", "Hello, welcome to our website!");
    echo WELCOME;
    echo "<br>";
    const car = "Supra mk4";
    echo car;
    echo "<br>";

    define("Bike",["Kawasaki","Ducatti","BMW"]);
    echo Bike[1];
    echo "<br>";
    function demo(){
        echo WELCOME;
        echo "<br>";
        echo __FUNCTION__;
    }
    demo();
    echo "<h4>MaGic ConStant</h4>";
    echo __DIR__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    echo __METHOD__;

    ?>
</body>

</html>
