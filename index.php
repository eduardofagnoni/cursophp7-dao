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
echo "<br><br>";
$lista = Usuario::getList();
echo json_encode($lista);
*/

/**carrega lista de usuarios buscando pelo login */
/*
echo "<br><br>";
$search = Usuario::search("eduardo");
echo json_encode($search);
*/


/**Carrega use autenticado */
echo "<br><br>";
$usuario = new Usuario();
$usuario->login("eduardo","asas123");
echo ($usuario);


?>