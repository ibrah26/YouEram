<?php
include "lib/conf.php";

/*Creem la conexxió amb el mysql (bdd)*/
$db = new mysqli($conex['host'], $conex['user'], $conex['pass'], $conex['db']);

/*si no posem igual o res, vol di per defecte que existeix*/
/*mostra errror de conexió si n'hi ha*/
if($db->connect_error) die ($db->connect_error);

$id_get_url = $_GET["id"];

$sql = 'SELECT media_titol as titol,
                url as url,
                media_id as id
               FROM media
               WHERE media_id =\''.$id_get_url.'\'';

/*executa la consulta , query = consulta*/
$results = $db->query($sql);

$text = "";

if($results->num_rows > 0){

    while ($row = $results->fetch_object()){
        $text .= "<div class='col-md-10'>";
        $text .= "<a href=\"media.php?id=".$row->id."\"><h1>".$row->titol."</h1></a>";

        $text .= "<div><iframe width=\"100%\" height=\"315\" src=\"".$row->url."\" frameborder=\"0\" allowfullscreen></iframe></div>";
        $text .= "</div>";

    }

}else{
    echo"0 results";
}
?>


