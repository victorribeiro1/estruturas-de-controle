<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 10</h1>
<?php
    $cars = [
        "vw" => ["Jetta", "Gol", "Fox", "Nivus"],
        "gm" => ["Bolt", "Cruze", "Joy", "Onix"],
        "fiat" => ["Uno", "Cronos", "Mobi", "Argo"],
        "ford" => ["Mustang", "Ka", "Edge", "Territory"]
    ];

    $counter = 1; // Para a segunda posição
    
    
    foreach ($cars as $carBrands) {
        $currentBrand = array_search($carBrands, $cars);
        
        
        if ($currentBrand !== "gm") {
            echo $cars[$currentBrand][$counter++];

            echo " | ";
        }
    }
?>