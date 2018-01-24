<?php 

require_once ("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega lista do usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//Carrega um usuario com o login e senha
$usuario = new Usuario();
$usuario->login("rmrogerio","#@Rm@");
echo $usuario;
?>