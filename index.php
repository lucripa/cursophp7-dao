<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


// carrega um usuário
// $root = new Usuario();
// $root->loadbyid(3);
// echo $root;

// carrega um lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

// carrega um usuário usando um login e a senha
// $usuario = new Usuario();
// $usuario->login("root", "123456");
// echo $usuario;

// criando um novo usuário
// $aluno = new Usuario("aluno", "123456");
// $aluno->insert();
// echo $aluno;

$usuario = new Usuario();

$usuario->loadbyid(8);

$usuario->update("professor", "123456");

echo $usuario;

?>