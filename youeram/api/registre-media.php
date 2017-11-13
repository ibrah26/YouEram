<?php

include "../lib/conf.php";

/*Creem la conexxió amb el mysql (bdd)*/
$db = new mysqli($conex['host'], $conex['user'], $conex['pass'], $conex['db']);

/*si no posem igual o res, vol di per defecte que existeix*/
/*mostra errror de conexió si n'hi ha*/
if($db->connect_error) die ("Connection failed: ".$db->connect_error);

$titol = $_POST["titol"];
$descripcio = $_POST["descripcio"];
$assignatura = $_POST["assignatura"];
$nomtreball = $_POST["nomtreball"];
$anyentrada = $_POST["any-entrada"];
$curs = $_POST["curs"];
$url = $_POST["url"];


$sql = "INSERT INTO media (media_titol, media_descripcio, media_assignatura, media_curs,media_any,media_nom_treball,media_tipus, url	)
        VALUES ('$titol', '$descripcio', '$assignatura' , '$curs','$anyentrada', '$nomtreball', '1' , '$url')";

/*executa la consulta , query = consulta*/


if($db->query($sql) === TRUE){

    echo "insercio correcta";

}else{
    echo "Error: ".$sql."<br>".$db->error;
}
$db->close();
?>






