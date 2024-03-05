<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
</head>
<body>
    <h1>PHP Math</h1>
    <?php
    echo "PI Value: "; echo(pi());
    echo "<br>";
    echo "Min Value: "; echo(min(245,5352,25,-222,253,-35));
    echo "<br>";
    echo "Max Value: "; echo(max(43,3656,6,211,4,5,5562));
    echo "<br>";
    echo "Absolute Value: "; echo(abs(-532.540));
    echo "<br>";
    echo "Square-root Value: "; echo(sqrt(36));
    echo "<br>";
    echo "Rounded Value: "; echo(round(4.8));
    echo "<br>";
    echo "Random Number: "; echo (rand());
    echo "<br>";
    echo "Random Number with range: "; echo(rand(12,4562));
    ?>
</body>
</html>