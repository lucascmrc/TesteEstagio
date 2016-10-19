<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../Bootstrap/css/meu-css.css"/>
</head>
<body>
<?php
include("../Controller/processar-pesquisa.php");
if (listar($_GET["nome"]) == null) {
    header("location:Erro/erro-pesquisa.php");
}
else {
$selecionar = listar($_GET["nome"]);
?>
<!--Formulário de cadastro de usuários-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <a href="index.php">Cadastrar</a>
        <a href="pesquisar-usuarios.php">Pesquisar</a>
    </div>
</nav>
<section>
    <fieldset>
        <!--Listar usuários-->
        <legend>Lista de usuários</legend>
        <table class="table table-hover">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Mais informações</th>
            </tr>

            <?php
            $selecionar = $selecionar->fetchAll(PDO::FETCH_OBJ);
            foreach ($selecionar as $listar) {
                echo "<tr>";
                echo "<td>" . $listar->nome . "</td>";
                echo "<td>" . $listar->email . "</td>";
                echo "<td><a href='mais-informacoes-usuario.php?id=" . $listar->id . "'>Acessar</a></td>";
                echo "</tr>";
            }

            }
            ?>

        </table>
        <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>
    </fieldset>
</section>

</body>
</html>








