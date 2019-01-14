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

/*$usuario = new Usuario();
$usuario->login("user", "12345");

echo $usuario;*/

/*$aluno = new Usuario("Teste", "metodo");
$aluno -> insert();
echo $aluno;*/

/*$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor", "odke039@#");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(2);
$usuario->remove();
echo $usuario


?>