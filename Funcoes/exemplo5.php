<?php

$a = 10;

// Passagem por Valor
function trocaValor($b){

	$b += 50;

	return $b;

}

function trocaValor1(&$c){

	$c += 20;

	return $c;
}

echo $a;

echo "<br>";

echo "Passagem de parametro por Valor: ".trocaValor($a);

echo "<br>";

echo ($a);

echo "<br>";

echo "Passagem de parametro por referencia: ".trocaValor1($a);

echo "<br>";

echo $a;

?>