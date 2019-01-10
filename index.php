<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


/*$root = new Usuario();

$root->loadById(1);

echo $root;*/


/*$lista = Usuario ::getList();

echo json_encode($lista);*/


/*$search = Usuario ::search("ri");

echo json_encode($search);*/

$usuario = new Usuario();
$usuario->login("user", "12k345");

echo $usuario;
?>