<?php require_once('../session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Sistema</title>
        <link rel="stylesheet" type="text/css" href="css/default.css">
    </head>
    <body>
        <form action="processLogin.php" method="post">
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email"><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>
