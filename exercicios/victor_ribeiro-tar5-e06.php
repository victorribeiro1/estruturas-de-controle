<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 6</h1>
<?php
    function createSquare($side) {
        if ($side > 20 || $side < 3) {
            echo "ERROR";
            return;
        };
 
        for ($rows= 1; $rows <= $side; $rows++) {

            // adicionando um asterísco em cada coluna
            for ($columns = 1; $columns <= $side; $columns++) echo '*&nbsp;&nbsp;';

            // criando nova linha
            echo "<br>";
        }
    }
    
    createSquare(20);
?>