<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop</title>
</head>

<body>
    <?php
    echo "<h3>While Loop</h3>";
    $d = 1;
    while ($d < 6) {
        echo $d;
        $d++;
    }
    echo "<br>";

    $r = 0; //break
    while ($r < 5) {
        if ($r == 3) break;
        echo $r;
        $r++;
    }
    echo "<br>";

    $g = 0; //continue
    while ($g < 8) {
        $g++;
        if ($g == 3) continue;
        echo "$g";
        echo "<br>";
    }
    $t = 0;
    while ($t < 100) :
        echo $t;
        echo "<br>";
        $t += 10;
    endwhile;

    echo "<h3> do while Loop</h3>";
    $x = 1;
    do {
        echo $x;
        $x++;
    } while ($x <= 6);

    $f = 1; //break
    do {
        if ($f == 3) break;
        echo "<br>";
        echo $f;
        $f++;
    } while ($f < 6);
    echo "<br>";

    $l = 0; //continue
    do {
        $l++;
        if ($l == 5) continue;
        echo $l;
        echo "<br>";
    } while ($l < 6);
    echo "<br>";

    echo "<h3> For Loop</h3>";
    for ($n = 1; $n <= 5; $n++) {
        echo "number is: $n <br>";
    }

    for ($k = 1; $k <= 5; $k++) {
        for ($m = 1; $m <= $k; $m++) {
            echo "* ";
        }
        echo "<br>";
    }

    echo "<h3> Foreach Loop</h3>";
    $browser = array("chrome", "edge", "firefox", "safari");
    foreach ($browser as $a) {
        echo "$a <br>";
    }
    echo "<br>";
    class Car //object
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
    }
    $myCar = new Car("red", "Ferarri");
    foreach ($myCar as $v => $z) {
        echo "$v - $z <br>";
    }
    //Foreach Byref
    $brand = array("rollsroys","bugatti","Ferarri","konigsegg");
    foreach($brand as &$x){
       if($x == "Feraari") $x== "lamborgini";
    }
 var_dump($brand);
    ?>
</body>

</html>