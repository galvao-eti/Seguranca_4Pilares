<?php require_once('../session.php'); ?>
<?php
require '../config.php';
require '../conn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Sistema</title>
        <link rel="stylesheet" type="text/css" href="css/default.css">
    </head>
    <body>
<?php
$sql = "SELECT * FROM usuario WHERE email='" . $_POST['email'] . "' AND senha='" . $_POST['senha'] . "'";
$sth = $dbh->prepare($sql);

$sth->execute();

if ($sth->rowCount() != 0) {
    echo "Autenticado!";
} else {
    echo "Usuário e/ou senha inválido";
}

$dbh = NULL;
?>
    </body>
</html>
