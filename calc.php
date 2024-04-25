<?php
    function calc($first, $second, $operator){
        switch ($operator) {
            case '+':
                return $first + $second;
            case '-':
                return $first - $second;
            case '*':
                return $first * $second;
            case '/':
                return $first / $second;
            default:
                return 0;
        }
    }

    $first = readline("Enter the first number: ");
    $first = floatval($first);
    $second = readline("Enter the second number: ");
    $second = floatval($second);
    $operator = readline("Enter the operator: ");

    $result = calc($first, $second, $operator);
    echo "The result is: $result";
?>