<?php
define("GREATING", "Hello there, I\'m Yihun Alemayehu\n");
echo GREATING;

// FOR EACH LOOP
$colors = array("red", "yellow", "green", "white", "black", "blue");
$colors2 = array("brown", "white", "pink", "black", "orange", "purple", "red");

foreach ($colors as $value) {
    echo $value . "\n";
}

echo str_replace("Hello", "Hi", " ");

function gMessage()
{
    echo GREATING;
}

// gMessage();

$finalArray = array_intersect($colors, $colors2);

echo "----------------Color Intersect--------------------------\n";

foreach ($finalArray as $myColor) {
    echo $myColor . "\n";
}

echo "----------------Color Index or key--------------------------\n";

echo array_search("black", $colors);


echo "----------------Color Reversed--------------------------\n";

$reversed =  array_reverse($colors);

foreach($reversed as $color){
    echo $color . "\n";
}

echo "----------------Color Sorted--------------------------\n";

$sorted = sort($colors);

// foreach($sorted as $color){
//     echo $color . "\n";
// }