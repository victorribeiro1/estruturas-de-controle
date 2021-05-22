<?php
    function createSquare($totalSize) {
        $rows = 1;
        $columns = 1;

        if ($totalSize < 3 || $totalSize > 20) {
            echo "Ops! Lembre-se que o mínimo deve ser 3 e o máximo deve ser 20.";
            return;
        }

        while ($rows <= $totalSize) {
            while ($columns <= $totalSize) {

                // SE a contagem coicidir com a primeira ou a última linha, 
                // imprima um asterísco.
                if ($rows == 1 || $rows == $totalSize) echo '*&nbsp; &nbsp;';

                // MAS SE a contagem coicidir com a primeira ou a última coluna,
                // imprima um asterísco.
                else if ($columns == 1 || $columns == $totalSize) echo '*&nbsp; &nbsp;';
                
                // SE NÃO for o caso de nenhum dos cenários previstos acima, 
                // imprima apenas espaço em branco.
                else echo '&nbsp; &nbsp; &nbsp;';

                $columns++;
            }

            // Criando nova linha
            echo "<br>";

            $columns = 1;
            $rows++;
        }
    }
    
    createSquare(20);
?>