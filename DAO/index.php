<?php
require_once(config.php);

//consulta usuario pelo ID
$root = new Usuario();

$root->loadById(3);

echo $root;

//carrega a lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);

//carrega uma lista de users buscando pelo login
$search = Usuario::search($login);

//carrega um usuario usando login e senha
$usuario = new Usuario();

$usuario->login("root", "321321");

echo $usuario;


//insert
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;


//update
$usuario = new Usuario();

$usuario->loadById(1);

$usuario->update("professor", "321321");

echo $usuario;


//delete
$usuario = new Usuario();

$usuario->loadById(3);

$usuario->delete();

echo $usuario;
?>