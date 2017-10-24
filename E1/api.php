<?php
//Inclou fitxer conf.php
include 'lib/conf.php';

//creo connexió a la Base de dades i ho guardo a $DB
$db = new mysqli($conex['host'],$conex['user'],$conex['pass'],$conex['db']);

if ($db->connect_error) die ($db->connect_error);

//executa la consulta
$sql = 'SELECT * FROM user WHERE user_active_flg=1';

if ($_GET['id']){
    $sql.=' AND user_id='.$_GET['id'];
}

//Executa consulta
$results = $db->query($sql);

//mostra errors
if (!$results) die ($db->error);

$json = array();

while($row = $results->fetch_object()){
   $json[] = $row;
}
header ('content-type: application/json;charset=utf-8');
echo json_encode($json, true);

?>
