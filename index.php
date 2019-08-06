<?php 
header("Content-Type: application/json");
require_once("config.php");

//$user = new Sql;
//$usuarios = $user-> select("SELECT * FROM tb_usuarios"); //listagem direta


// $root = new Usuario();
// $root->loadById(4);//listagem por id


// $lista = Usuario::getList();//listagem de todos usuarios
// echo json_encode($lista);

// $search = Usuario::search("s");//busca por caracteres 
// echo json_encode($search);

$usuario = new Usuario();//carrega os valores validando campos usuário e senha
$usuario->login("dsadsa","lindo");
echo $usuario;