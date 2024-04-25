<?php
    function generateRandom(){
        $randomNumbers = [];
        for ($i = 0; $i < 10; $i++) {
            $random = rand(1, 100);
            $randomNumbers[] = $random;
        }
        return $randomNumbers;
    }

    $returnedRandomNums = generateRandom();
    $max = max($returnedRandomNums);
    $min = min($returnedRandomNums);

    echo " maximum is  $max  \n";
    echo " minimum is $min  \n";
?>