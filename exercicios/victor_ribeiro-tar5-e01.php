<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 1</h1>
<?php
    function driverStatus($speed) {
        list($okSpeed, $limitSpeed) = [50, 60]; // DESTRUCTURING: declarando duas varáveis de maneira mais ágil

        /* abaixo */ if ($speed <= $okSpeed) return "ok";
        /* média  */ else if ($speed <= $limitSpeed) return "atenção";
        /* acima  */ else return 'multado';
    }

    echo driverStatus(10);
    echo " | ";
    echo driverStatus(60);
    echo " | ";
    echo driverStatus(61);
?>