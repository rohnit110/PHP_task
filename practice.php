<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
</head>

<body>
    <?php
    // var_dump($w = 30);
    // $d = null;
    // echo is_null($d);
    // $e = [];
    // $g = null;
    // if ($e == $g) {
    //     echo "Both are null";
    // } else {
    //     echo "not null";
    // }
    // //phpinfo();
    // $f = 0;
    // do {
    //     echo $f;
    //     $f++;
    //     echo "<br>";
    // } while ($f < 7);
    // echo "<br>";

    // $g = 10;
    // do {
    //     echo $g;
    //     $g--;
    //     echo "<br>";
    // } while ($g > -1);

    // //function
    // function userdetail(){
    //     echo "<h1> User Detail</h1>";
    // }
    // function displayDetail($name,$color){
    //     userdetail();
    //     echo "username:<span style='color:$color'>$name</span><br> ";
    //     echo "Mobile No.: 985268526 <br>";
    //     echo "Gender: Male <hr>";
    // }
    // displayDetail("Rohnit","green");
    // displayDetail("Kevin","red");
    // displayDetail("Jigar","blue");

    //Server

    echo "PHP_SELF: " . $_SERVER["PHP_SELF"];
    echo "<br>";
    echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo "HTTP_HOST: " . $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo "SCRIPT_FILENAME: " . $_SERVER["SCRIPT_FILENAME"];
    echo "<br>";
    echo "HTTP_USER_AGENT" . $_SERVER["HTTP_USER_AGENT"];
    echo "<br>";
    echo "SCRIPT_NAME:" . $_SERVER["SCRIPT_NAME"];
    echo "<br>";
    echo "REQUEST_METHOD:" . $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo "SERVER_ADMIN: " . $_SERVER["SERVER_ADMIN"];
    echo "<br>";
    echo "SERVER_PORT: " . $_SERVER["SERVER_PORT"];
    echo "<br>";
    echo "GATEWAY_INTERFACE: " . $_SERVER["GATEWAY_INTERFACE"];

    //Integer

    $x = 23456788777;
    var_dump($x);
    $t = 345678987654321876543;
    var_dump($t);
    $g = 214748364809876543213456789;
    var_dump($g);
    $h = 100000000000;
    var_dump($h * 500000000000000);

    var_dump(345 / 20);
    echo $a = 1234;
    echo "<br>";
    echo $b = 0123;
    echo "<br>";
    echo $c = 0o123;
    echo "<br>";
    echo $d = 0x1A;
    echo "<br>";
    echo $a = 0b11111111;
    echo "<br>";
    echo $a = 1_234_567;
    echo "<br>";
    echo "<br>";

    // String

    echo 'this is a simple string';
    echo "<br>";
    echo 'You can also have embedded newlines in strings this way as it is okay to do';
    echo "<br>";
    echo 'Arnold once said: "I\'ll be back"';
    echo "<br>";
    echo 'You deleted C:\\*.*?';
    echo "<br>";
    echo 'You deleted C:\*.*?';
    echo "<br>";
    echo 'This will not expand: \n a newline';
    echo "<br>";
    echo 'Variables do not $expand $either';
    echo "<br>";
    echo "<br>";
    echo "The code will:\n from here<br>";
    echo "The code will: \r from here<br>";
    echo "The code will: \t from here<br>";
    echo "The code will: \v from here<br>";
    echo "The code will: \e from here<br>";
    echo "The code will: \f from here<br>";
    echo "The code will: \\ from here<br>";
    echo "The code will: \$ from here<br>";
    echo "The code will: \"from here<br>";
    echo "<br>";

    echo var_dump("0d1" == "000");
    echo var_dump("0E1" == "000");
    echo var_dump("2e1" == "020");
    echo "<br>";



      echo  $foo = 1 + "10.5";                // $foo is float (11.5)
    echo $foo = 1 + "-1.3e3";              // $foo is float (-1299)
     echo $foo = 1 + "bob-1.3e3";           // TypeError as of PHP 8.0.0, $foo is integer (1) previously
    echo $foo = 1 + "bob3";                // TypeError as of PHP 8.0.0, $foo is integer (1) previously
    echo $foo = 1 + "10 Small Pigs";       // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
    echo $foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
    echo $foo = "10.0 pigs " + 1;          // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
    echo $foo = "10.0 pigs " + 1.0;  
    echo "<br>";

    $ary = array(
        1 => "a",
        "1" => "b",
        "1.5" => "c",
        true => "d"
    );
    var_dump($ary);

    $y = array(
        "a",
        "b",
        5 => "c",
        "d"
    );
    var_dump($y);

    $H = array(
        "foo" => "bar",
        43 => 23,
        "multi" => array(
            1 => "car",
            2 => "bike"
        )
    );
    var_dump($H["foo"]);
    var_dump($H[43]);
    var_dump($H["multi"][1]);
    var_dump($H["multi"][2]);

    //Object
    class foo
    {
        function do_foo()
        {
            echo "Called";
        }
    }
    $bar = new foo;
    $bar->do_foo();
    echo "<br>";
    //Enumeration

    enum car
    {
        case BMW;
        case Ford;
        case Toyota;
        case Lamborgini;
    }
    function do_stuff(car $s)
    {
        echo "rwgre";
    }
    do_stuff(car::Toyota);
    echo "<br>";
    //never
    function Demo(): never
    {
        echo "hello";
        exit();
    }
    Demo();

    $Cars = [
        [
            "Brand" => "BMW",
            "Name" => "M5",
            "Buy" => "http://Link.com"
        ],
        [
            "Brand" => "Ford",
            "Name" => "srt",
            "Buy" => "http://google.com"
        ]
    ];
    $books = [
        "Do android dream of electric sheep",
        "The Langoliers",
        "Hail mary"
    ];
    ?><ul>
        <?php
        foreach ($Cars as $car) :?>
        <li><?=$car["Brand"] ?><li>
        <?php endforeach; ?>
    </ul>

    <?php
    // array.......................//
    $Cars = [
        [
            "Brand" => "BMW",
            "Name" => "M5",
            "Buy" => "http://Link.com"
            ],
            [
                "Brand" => "Ford",
                "Name" => "srt",
                "Buy" => "http://google.com"
                ]
                ];
                $books = [
                    "Do android dream of electric sheep",
          "The Langoliers",
                    "Hail mary"
                    ];
             
                    function filterByAuthor($Cars){
                        $filterCar =[];
                    } 
                  ?>
                    <ul>
                        <?php
        foreach ($Cars as $car) :?>
        <li><?= $car["Brand"] ?></li>
       <li> <?= $car["Name"] ?></li>
       <li> <a href="#" > <?= $car["Buy"] ?></a></li>
            <?php endforeach; ?>
        </ul>
   <?php  
     foreach($Cars as $cars){
        if($cars["Brand"]);
     }
    ?>
</body>

</html>