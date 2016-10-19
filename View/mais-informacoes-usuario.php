<!DOCTYPE html>
<html>
<head>
    <title>Informações do usuário</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../Bootstrap/css/meu-css.css"/>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <a href="index.php">Cadastrar</a>
        <a href="pesquisar-usuarios.php">Pesquisar</a>
    </div>
</nav>

<?php
include("../Controller/detalhar-usuario.php");
$id = $_GET["id"];
$selecionar = maisInformaçoes($_GET["id"]);
?>
<section>
    <fieldset>
        <!--Listar usuário especifico mais detalhado-->
        <legend>Informações do usuário</legend>
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Profissão</th>
                <th>E-mail</th>
            </tr>

            <?php
            $selecionar = $selecionar->fetchAll(PDO::FETCH_OBJ);
            foreach ($selecionar as $listar) {
                echo "<tr>";
                echo "<td>" . $listar->id . "</td>";
                echo "<td>" . $listar->nome . "</td>";
                $parte_um     = substr($listar->cpf, 0, 3);
                $parte_dois   = substr($listar->cpf, 3, 3);
                $parte_tres   = substr($listar->cpf, 6, 3);
                $parte_quatro = substr($listar->cpf, 9, 2);
                $listar->cpf = "$parte_um.$parte_dois.$parte_tres-$parte_quatro";
                echo "<td>" . $listar->cpf . "</td>";
                echo "<td>" . $listar->profissao . "</td>";
                echo "<td>" . $listar->email . "</td>";
                echo "</tr>";
            }
            ?>

        </table>
        <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>
    </fieldset>

</section>

</body>
</html>









