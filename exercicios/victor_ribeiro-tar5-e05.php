<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 5</h1>
<?php
    function multiplicationTableOf($number) {
        for ($factor = 1; $factor !== 11; $factor++) {
            echo "$factor x $number = " . $factor * $number;
            echo "<br>";
        }
    }

    multiplicationTableOf(10);
?>