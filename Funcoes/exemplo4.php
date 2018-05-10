<?php 

function ola(){

	$argumentos = func_get_args();

	echo "<br>";

	return $argumentos;	

}

var_dump(ola("Bom Dia"));

var_dump(ola(10));



 ?>