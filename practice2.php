<?php
echo "<h3>File Handing</h3>";

echo readfile("task.txt");
echo "<br>";
echo "<br>";
echo "<br>";
$file = fopen("task.txt", "r") or die ("file don't exist");
echo fread($file, filesize("task.txt"));
fclose($file);
echo "<br>";
echo "<br>";
echo "<br>";
$myfile = fopen("text3.txt", "w") or die("Unable to open file!");
$txt = "wertyhjk,mgfdertyuikjhtresdfghnbfe";
fwrite($myfile,$txt);
fclose($myfile);
$myfile = fopen("text3.txt", "a") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
readfile("text3.txt");

goto a;
echo "foo";
a:
echo "bar";


?>
