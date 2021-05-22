<!DOCTYPE html>
<meta charset="utf-8">
<h1>Exercício 3</h1>
<?php
	function order($numbers) {
		$maiorNumero = $numbers[0];
		$numeroIntermediario = $numbers[0];
		$menorNumero = $numbers[0];
		
		foreach ($numbers as $number) {
			$maiorNumero = $maiorNumero > $number ? $maiorNumero : $number;
			$menorNumero = $menorNumero < $number ? $menorNumero : $number;
		}

		foreach ($numbers as $number) {
			($number !== $maiorNumero && $number !== $menorNumero) ? 
			$numeroIntermediario = $number : 0;
		}

		if ($menorNumero === $numeroIntermediario && $numeroIntermediario === $maiorNumero) {
			echo "Todos iguais (sem número intermedário) => ";
			$numeroIntermediario = 0;
		} else if ($numeroIntermediario === $maiorNumero) {
			echo "Pela razão de números iguais terem sido passados, não há um número intermediário => ";
			$numeroIntermediario = 0;
		}

		echo "Menor número: $menorNumero";
		echo " | ";	
		echo "Número Intermediário: $numeroIntermediario";
		echo " | ";	
		echo "Maior número: $maiorNumero";
	}


	order([1234, 321, 12]);
	echo "<br>";
	order([50, 0, 1000]);
	echo "<br>";
	order([1, 987, 500]);
	echo "<br>";
	order([300, 100, 300]);
	echo "<br>";
	order([150, 150, 150]);
?>