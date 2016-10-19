<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Cadastro de usuários</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../Bootstrap/css/meu-css.css"/>
</head>

<body>
<!--Menu-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <a href="index.php">Cadastrar</a>
        <a href="pesquisar-usuarios.php">Pesquisar</a>
    </div>
</nav>
<!--Formulário de cadastro de usuários-->
<section id="form-cadastro">
    <fieldset>
        <legend>Cadastrar usuários</legend>
        <form class="form-horizontal" name="form" action="../Controller/cadastrar-usuario.php" method="POST">
            <label>Nome</label><br/>
            <input class="form-control" type="text" name="nome" required="required"
                   pattern="[a-z A-Zçãõéáóú]+" title="apenas letras" placeholder=" Nome"/><br/>
            <label>CPF</label><br/>
            <input class="form-control" type="text" name="cpf"
                   pattern="[0-9]{3}[\.]?[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}" title="111.222.333-44"
                   required="required"
                   placeholder=" CPF"/><br/>
            <label>Profissão</label><br/>
            <input class="form-control" type="text" name="prof" required="required"
                   pattern="[a-z A-Zçãõéáóú]+" title="apenas letras" placeholder=" Profissão"/><br/>
            <label>E-mail</label><br/>
            <input class="form-control" type="text" name="email"
                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                   title="exemplo@mail.com" required="required" placeholder=" E-mail"/><br/>
            <input class="btn btn-default" type="submit" value="Cadastrar"/>
            <input class="btn btn-default" type="reset" value="Limpar"/>
        </form>
    </fieldset>
</section>


</body>
</html>





