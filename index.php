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

// $usuario = new Usuario();//carrega os valores validando campos usuário e senha
// $usuario->login("dsadsa","lindo");
// echo $usuario;


// $aluno = new Usuario();//fazendo insert no banco
// $aluno->setDeslogin("Gabriel");
// $aluno->setDessenha("1234567");
// $aluno->insert();
// echo $aluno;

// $aluno = new Usuario("Gabriel2", "root");//método construtor
// $aluno->insert();
// echo $aluno;

// $usuario= new Usuario();//método para alterar dados 
// $usuario->loadById(8);
// $usuario->update("Ricardo","adfashsa");
// echo $usuario;

$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();
echo $usuario;