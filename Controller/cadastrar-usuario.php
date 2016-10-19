<?php
include("conexao.php");
include("../Model/Usuario.php");
include("../Model/verificar-exclusividade.php");

if (verificarExclusividade((string)$_POST["cpf"]) == 0) {
//Receber dados
    $usuario = new Usuario();
    $usuario->setNome((string)$_POST["nome"]);
    $usuario->setCpf((string)$_POST["cpf"]);
    $usuario->setProf((string)$_POST["prof"]);
    $usuario->setEmail((string)$_POST["email"]);
    cadastro($usuario->getNome(), $usuario->getCpf(), $usuario->getProf(), $usuario->getEmail());
  
} else {
    include("../View/Erro/erro-cadastro.php");
}

//Cadastrar usuário
function cadastro($nome, $cpf, $prof, $email)
{

    $pdo = conectar();
    $inserir = $pdo->prepare("INSERT INTO usuarios(id, nome, cpf, profissao, email) VALUES (:id, :nome, :cpf, :prof, :email)");
    $inserir->bindValue("id", NULL);
    $inserir->bindValue("nome", $nome);
    $inserir->bindValue("cpf", $cpf);
    $inserir->bindValue("prof", $prof);   
    $inserir->bindValue("email", $email);
    $inserir->execute();
    include("../View/Sucesso/cadastro-sucesso.php");
}


?>