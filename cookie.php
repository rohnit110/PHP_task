<?php 
echo "<h3>Cookie</h3>";
 $cookie_name = "demo";
 $cookie_value = "Cookies";
 setcookie($cookie_name, $cookie_value, time() + (86400*30),'/');
?>
<html >
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "cookies name is :" . $cookie_name. " is not set";
    } else{
        echo "cookie ".$cookie_name ." is set<br>";
        echo "cookie value is  " . $_COOKIE[$cookie_name];
    }

    if(count($_COOKIE)>0){
        echo "<br> cookies are enabled<br>";
    }else{
        echo "Cookies are not started";
    }
    ?>
    <?php
    echo "<h3>Session</h3>";
session_start();
$_SESSION["favcolor"] = "blue";
$_SESSION["favanimal"] = "horse";
echo "Session variables are set.";
?>
<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";?>

</body>
</html>