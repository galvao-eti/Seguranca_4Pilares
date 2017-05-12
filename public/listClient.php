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
                </tr>
            </thead>
            <tbody>
<?php
$sql = "SELECT * FROM cliente";
$sth = $dbh->prepare($sql);

$sth->execute();

while($record = $sth->fetchObject()) {
    echo '<tr>';
    echo '<td><a href="viewClient.php?id=' . $record->id . '">' . $record->nome . '</a></td>';
    echo '</tr>';
}

$dbh = NULL;
?>
            </tbody>
        </table>
    </body>
</html>
