<?php

include "../lib/conf.php";


$nom = $_POST["nom"];
$any = $_POST["any-entrada"];
$especial = $_POST["especial"];
$pwd = $_POST["pwd"];

/*$sql = 'INSERT INTO table_name (user_name, user_any_entrada, user_especialitacio, password	)
        VALUES ('.$nom.', '.$any.', '.$especial.', '.$pwd.')';*/

$sql = "INSERT INTO user (user_name, user_any_entrada, user_especialitacio, password	)
        VALUES ('$nom', '$any', '$especial' , '$pwd')";

/*executa la consulta , query = consulta*/


if($db->query($sql) === TRUE){

    echo "insercio correcta";

}else{
    echo "Error: ".$sql."<br>".$db->error;
}
$db->close();
?>






