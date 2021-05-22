<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 2</h1>
<?php
    function calcIdealWeight($height, $gender) {
        if ($height <= 0 || $height >= 300) return 'Por favor, preencha o campo corretamente.';

        $height = correctHeightWriting($height);

        // contando com a implementação de um input radio, ou algo similar, 
        // para a captura do sexo
        if ($gender == 'masculino') $idealWeight = (72.7 * $height) - 58;
        else $idealWeight = (62.1 * $height) - 44.7;

        return $idealWeight;
    }

    // Função responsável por corrigir, se necessário,
    // a forma como a altura foi inserida.
    function correctHeightWriting($height) {
        if ($height >= 100) $height /= 100;
        else if ($height >= 10) $height /= 10;

        return $height;
    }

    echo calcIdealWeight(1.75, 'masculino');
    echo " | ";
    echo calcIdealWeight(17.5, 'masculino');
    echo " | ";
    echo calcIdealWeight(175, 'masculino');
    echo " | ";
    echo calcIdealWeight(175, 'f');
    echo " | ";
    echo calcIdealWeight(1.75, 'f');
?>