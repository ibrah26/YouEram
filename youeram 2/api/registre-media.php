<?php

include "../lib/conf.php";


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






