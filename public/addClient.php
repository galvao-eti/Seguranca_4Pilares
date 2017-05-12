<?php require_once('../session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Sistema</title>
        <link rel="stylesheet" type="text/css" href="css/default.css">
    </head>
    <body>
        <form action="processAddClient.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf"><br>
            <label for="">Telefone: </label>
            ( <input type="text" name="ddd" id="ddd" size="3"> )&nbsp;&nbsp;
            <input type="text" name="telefone" id="telefone"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
