<?php 

require_once("config.php");


/*
//Carrega somente um usuario
$tete = new Usuario();
$tete->loadbyID(3);
echo $tete;
*/
/*
//Carrega Uma lista de Usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega uma lista de Usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*
//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@-sd");
echo $usuario;
*/

/*
//Criando um novo usuário
$aluno = new Usuario("aluno","@lun0");
$aluno->insert();
echo $aluno;
*/

/*
//Alteração de Usuario
$usuario = new Usuario();
$usuario->loadbyID(13);
$usuario->update("professor", "pr0fess0r");
echo $usuario;
*/

/*
//Delete a User
$usuario = new Usuario();
$usuario->loadbyID(11);
$usuario->delete();
echo $usuario;
*/


?>