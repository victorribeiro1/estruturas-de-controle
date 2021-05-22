<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 9</h1>
<?php
    function getIntervalBetween($x, $y) {
        $allNumbers = [];

        $min = $x < $y ? $x : $y;
        $max = $x > $y ? $x : $y;

        while ($min < $max - 1) array_push($allNumbers, ++$min);

        return $allNumbers;
    }

    function getOddNumbers($allNumbers) {
        $oddNumbers = [];

        foreach ($allNumbers as $number) {
            if ($number % 2 !== 0) array_push($oddNumbers, $number);
        }
        
        return $oddNumbers;
    } 

    function sumOddNumbers($oddNumbers) {
        // return $totalSum = array_reduce($oddNumbers, fn($totalSum, $nextNumber) => $totalSum += $nextNumber);
        return $totalSum = array_reduce($oddNumbers, function($totalSum, $nextNumber) {return $totalSum += $nextNumber;});
    }

    echo 'Números entre: ';
    foreach(getIntervalBetween(1, 10) as $number) {
        echo "$number | ";
    };
    
    echo "<br>";
    
    echo 'Números ímpares: ';
    foreach(getOddNumbers(getIntervalBetween(1, 10)) as $number) {
        echo "$number | ";
    };
    
    echo "<br>";
    
    echo 'Soma dos números ímpares: ';
    echo sumOddNumbers(getOddNumbers(getIntervalBetween(1, 10)));
?>