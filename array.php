<?php

$colors = array(
    "red" => "#FF0000",
    "green" => "#00FF00",
    "blue" => "#0000FF",
    "yellow" => "#FFFF00",
    "purple" => "#800080"
);

echo "<ul>";
foreach ($colors as $color => $hex) {
    echo "<li style='color: $hex;'>$color</li>";
}
echo "</ul>";

