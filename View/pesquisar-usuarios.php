<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pesquisar usuários</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../Bootstrap/css/meu-css.css"/>
    <script src="../Bootstrap/js/bootstrap.js"></script>
    <script src="../Bootstrap/js/npm.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <a href="index.php">Cadastrar</a>
        <a href="pesquisar-usuarios.php">Pesquisar</a>
    </div>
</nav>
<!--Formulário de pesquisa de usuários-->
<section id="form-consulta">
    <fieldset>
        <legend>Pesquisar usuários</legend>
        <form class="form-horizontal" action="listar-usuarios.php" method="GET">
            <label>Nome</label><br/>
            <input class="form-control" type="text" name="nome" required="required" placeholder=" Informe um nome"/>
            <br/>
            <input class="btn btn-default" type="submit" value="Pesquisar"/>
        </form>
       
    </fieldset>
</section>

</body>
</html>