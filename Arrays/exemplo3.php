<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=> 'Joao',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

print_r($pessoas);
echo "<br>";
print_r($pessoas[0]['nome']);
 ?>