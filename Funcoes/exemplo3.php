<?php 

function ola($texto = "Mundo", $periodo = "Bom Dia"){

	return "Olá $texto! $periodo <br>";

}

echo ola("", "Bom Dia");
echo ola("","Boa Noite");
echo ola("Glaucio","Boa Tarde");
echo ola("Pedro","");
 ?>