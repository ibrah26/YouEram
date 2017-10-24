<?php
//Inclou fitxer conf.php
include 'lib/conf.php';

//creo connexió a la Base de dades i ho guardo a $DB
$db = new mysqli($conex['host'],$conex['user'],$conex['pass'],$conex['db']);

if ($db->connect_error) die ($db->connect_error);

//executa la consulta
$sql = 'SELECT * FROM user';

//Executa consulta
$results = $db->query($sql);

//mostra errors
if (!$results) die ($db->error);

$text = '';

while($row = $results->fetch_object()){
    echo '<p>'.$row->user_username.' (<em>'.$row->user_mail.'</em>)</p>';
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exercici 1 - Primera connexió</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <div class='container'>
            <?php echo $text ?>
        </div>
    </body>
</html>