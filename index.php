<?php 

require_once("config.php");

//$user = new Sql;

//$usuarios = $user-> select("SELECT * FROM tb_usuarios");
$root = new Usuario();

$root->loadById(4);

echo $root;