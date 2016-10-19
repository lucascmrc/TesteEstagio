<?php
include("conexao.php");
include("../Model/Usuario.php");

//Pesquisar usuário
function maisInformaçoes($id){
    $pdo = conectar();
    $selecionar = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $selecionar->bindValue("id", $id);
    $selecionar->execute();
    return $selecionar;
}
?>