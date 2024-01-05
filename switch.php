<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch</title>
</head>

<body>
    <?php
    echo "<h2>Short Hand If Statement</h2>";
    $favsweets = "kajukatri";
    switch ($favsweets) {
        case "Gulabjamun";
            echo "your favourite food is Gulabjamun";
            break;

        case "kajukatri";
            echo "Your favourite food is kajukatri";
            break;

        case "Mithai";
            echo "Your favourite food is mithai";
            break;
        default:
            echo "YOur favourite food is not mentioned";
    }
    $d = 3;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "The weeks feels so long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";
    }
    ?>
</body>

</html>