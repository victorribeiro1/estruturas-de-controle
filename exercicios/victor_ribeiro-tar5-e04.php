<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 4</h1>
<?php
    function checkAgeOf($nome, $idade) {
        list($idadeAdulta, $idadeIdosa) = [18, 65];

        if ($idade < $idadeAdulta) return "$nome, você é menor de idade.";
        else if ($idade <= $idadeIdosa) return "$nome, você é maior de idade.";
        else return "$nome, você é maior de 65 anos.";
    }

    echo checkAgeOf("Victor", 16);
    echo "<br>";
    echo checkAgeOf("Miranda", 65);
    echo "<br>";
    echo checkAgeOf("Aliança", 66);

?>