<?php

include "../lib/conf.php";

/*Creem la conexxió amb el mysql (bdd)*/
$db = new mysqli($conex['host'], $conex['user'], $conex['pass'], $conex['db']);

/*si no posem igual o res, vol di per defecte que existeix*/
/*mostra errror de conexió si n'hi ha*/
if($db->connect_error) die ("Connection failed: ".$db->connect_error);

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






