<?php
include("conexao.php");
include("../Model/Usuario.php");

//Pesquisar usuários

    function listar($nome)
    {
        $pdo = conectar();
        $selecionar = $pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE :nome");
        $nome = "%$nome%";
        $selecionar->bindValue("nome", $nome);
        $selecionar->execute();
        if($selecionar->rowCount() >= 1){
            return $selecionar;     
        }else{
            return null;
        }

       
    }


?>