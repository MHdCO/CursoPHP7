<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Matheus Henrique");
$cad->setEmail("matheushenrique@gmail.com");
$cad->setSenha("5648972");

$cad->registrarVenda();

 ?>