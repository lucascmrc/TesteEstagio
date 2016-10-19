<?php

//Verifica se CPF ja está cadastrado no sistema.
function verificarExclusividade($cpf)
{
    $pdo = conectar();
    $selecionar = $pdo->prepare("SELECT * FROM usuarios");
    $selecionar->execute();

    $selecionar = $selecionar->fetchAll(PDO::FETCH_OBJ);
    foreach ($selecionar as $listar) {
        if (strcasecmp((string)$listar->cpf, (string)$cpf) == 0) {
            return 1;
        }
    }
    return 0;
}


?>

