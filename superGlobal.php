<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Superglobal</title>
</head>
<body>
    <?php 
     echo "<h2>PHP Super Global</h2>";
       $d= 87;
       function demo(){
        echo $GLOBALS['d'];
       }
       demo();
       $x = 34;
       echo "<br>";
       function myfunction(){
        global $x;

       }
       echo $x;
       echo "<br>";
       echo $d;
        echo "<br>";
       // Creating Global Variable
       $g = 30;
       echo $GLOBALS["g"];

       echo "<h4>SERVER</h4>";
       echo $_SERVER ["PHP_SELF"];
       echo "<br>";
       echo $_SERVER ["SERVER_NAME"];
       echo "<br>";
       echo $_SERVER['HTTP_HOST'];
       echo "<br>";
       echo $_SERVER['HTTP_REFERER'];
       echo "<br>";
       echo $_SERVER['HTTP_USER_AGENT'];
       echo "<br>";
       echo $_SERVER['SCRIPT_NAME'];

       echo "<h4>REQUEST</h4>";

    ?>
</body>
</html>