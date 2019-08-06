<?php 

require_once("config.php");

$user = new Sql;

$usuarios = $user-> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
?>