<?php
include "lib/conf.php";

$sql = 'SELECT media_titol as titol,
                url as url,
                media_id as id
               FROM media';

/*executa la consulta , query = consulta*/
$results = $db->query($sql);

$text = "";

if($results->num_rows > 0){

    while ($row = $results->fetch_object()){
        $text .= "<div class='col-lg-6'>";
        $text .= "<a href=\"media.php?id=".$row->id."\"><h1>".$row->titol."</h1></a>";

        $text .= "<div><iframe width=\"100%\" height=\"315\" src=\"".$row->url."\" frameborder=\"0\" allowfullscreen></iframe></div>";
        $text .= "</div>";
    }

}else{
    echo"0 results";
}




?>
