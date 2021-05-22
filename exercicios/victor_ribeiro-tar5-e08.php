<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 8</h1>
<?php
    $total = 0;
    $currentPower = 0;
    $houseNumber = 1;

    for ($counter = 0; $counter !== 64; $counter++) {
        $currentPower = pow(2, $counter);

        echo "Na casa número $houseNumber: $currentPower <br>";

        $houseNumber++;
        $total += pow(2, $counter);

    }

    echo "<br><strong>Total de grãos: $total</strong>";
?>