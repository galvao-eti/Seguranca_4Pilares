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
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
<?php
$sql = "SELECT * FROM cliente WHERE id=" . $_GET['id'];
$sth = $dbh->prepare($sql);

$sth->execute();

while($record = $sth->fetch()) {
    echo '<tr>';
    echo '<td>' . $record[0] . '</td>';
    echo '<td>' . $record[1] . '</td>';
    echo '<td>' . $record[2] . '</td>';
    echo '</tr>';
}

$dbh = NULL;
?>
            </tbody>
        </table>
    </body>
</html>
