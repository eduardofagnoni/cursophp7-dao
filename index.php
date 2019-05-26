<?php
require_once("config.php");

/**Carrega um usuario */
/*
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

/**carrega uma lista de usuarios */
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

/**carrega lista de usuarios buscando pelo login */
/*
$search = Usuario::search("eduardo");
echo json_encode($search);
*/


/**Carrega use autenticado */
/*$usuario = new Usuario();
$usuario->login("eduardo","asas123");
echo ($usuario);
*/

/*
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->SetDessenha("w2e3r4tss5");
$aluno->insert();
echo $aluno;
*/


$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("Eduardo Fagnoni", "q1w2e3r4t5y6u7i8o9p0");



echo $usuario;


?>