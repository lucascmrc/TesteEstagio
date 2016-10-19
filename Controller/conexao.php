<?php
//Conexão com o bando de dados
function conectar(){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pessoas', 'root', '');

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $pdo;
}
?>
