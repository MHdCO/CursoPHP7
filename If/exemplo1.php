<?php 

$qualASuaIdade = 65;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

	echo "Criança.";

} else if($qualASuaIdade < $idadeMaior) {

	echo "Adolescente.";

} else if($qualASuaIdade < $idadeMelhor) {

	echo "Adulto.";

} else {

	echo ucwords("idoso");
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>