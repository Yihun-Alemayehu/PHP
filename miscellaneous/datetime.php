<?php
date_default_timezone_set('Africa/Addis_Ababa');
echo " today: " . date("d-m-Y h:i:sa") . "<br>";

$readed = readFile('webdic.txt');

echo " read : " . $readed . "<br>";

$myFile = fopen('webdic.txt', 'r') or die('cannot open file ' . $myFile);

echo fread($myFile, filesize('webdic.txt'));

while (!feof($myFile)) {
    echo fgets($myFile) . "<br>";
}
fclose($myFile);

$myfile = fopen('dicweb.txt', 'w') or die('cannot open file ' . $myFile);

fwrite($myfile, 'This is what called the function of the function of the function of the function of the function of the function of the function of');