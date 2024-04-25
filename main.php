<?php
$age = readline("Enter your age: ");

$age = intval($age);

if (is_int($age)) {
    if ($age >= 18) {
        echo "registration successfully
    completed";
    } else {
        echo "access denied";
    }
} else {
    echo "Please enter a valid number";
    echo " error " . is_int($age). "sth wrong";
    exit;
}







