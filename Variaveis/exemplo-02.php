<?php


$anoNascimento = 1990;

$nomeCompleto = "";

// Na linha de baixo temos uma variável com número no nome
$nome1 = "João";

$sobrenome = "Rangel";

//Concatenação feita por . " " .
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo "<br/>";

//Excluir Variaveis
unset($nome1);

if(isset($nome1)){

	echo $nome1;
}

//Quebra de Linha
echo "<br/>";

echo $anoNascimento;


?>