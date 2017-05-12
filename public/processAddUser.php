<?php require_once('../session.php'); ?>
<?php
require '../config.php';
require '../conn.php';

$sql = "INSERT INTO usuario (email, senha) VALUES ('" . $_POST['email'] . "', '" .  $_POST['senha'] . "')";

$result = $dbh->exec($sql);

$dbh = NULL;
