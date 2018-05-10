<?php

//Tenta funcionar mesmo sem a existenia ou funcionamento dos arquivos
//include "inc/exemplo1.php";

//Arquivo e obrigado a exeistir e funcionar, senao ele gera erro fatal
require "inc/exemplo1.php";
//Inclui somente uma vez mesmo que ocorra repetição
require_once "inc/exemplo1.php";

$resultado = somar(10,25);

echo $resultado;

?>