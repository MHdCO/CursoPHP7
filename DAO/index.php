<?php 

require_once("config.php");

$tete = new Usuario();

$tete->loadbyID(3);

echo $tete;

?>