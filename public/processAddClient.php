<?php require_once('../session.php'); ?>
<?php
require '../config.php';
require '../conn.php';

var_dump($_POST);

$sql = "INSERT INTO cliente(nome, cpf, ddd, telefone) VALUES ('" . $_POST['nome'] . "', '" .  $_POST['cpf'] . "', '" . $_POST['ddd'] . "', '" .  $_POST['telefone'] . "')";

$result = $dbh->exec($sql);

$dbh = NULL;
