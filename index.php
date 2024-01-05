<html>

<head>

</head>

<body>
    <?php
    echo " <h1> Helloo<h1>";
    $a = 34;
    $b = 43;
    echo $w = $a + $b;
    echo "<br>";
    function test(){
        $GLOBALS['b'] = $GLOBALS['a'] - $GLOBALS['b'];
    }
    test();
    echo $b;

// Static keyword
    function demo(){
        static $x = 0;
        echo $x;
        $x++;
    }
    demo();
    echo '<br>';
    demo();
    echo '<br>';
    demo();
    echo '<br>';    
    ?>
</body>

</html>