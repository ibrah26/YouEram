<?php

include "../lib/conf.php";

$valor1 = $_POST["valoracio1"];
$valor2 = $_POST["valoracio2"];
$valor3 = $_POST["valoracio3"];
$valor4 = $_POST["valoracio4"];
$id_get_url = $_GET['id'];

$sql = "INSERT INTO valoracio (media_fk, user_fk, valoracio_1, valoracio_2, valoracio_3, valoracio_4)
        VALUES ($id_get_url , '1' , '$valor1' , '$valor2','$valor3', '$valor4')";

/*executa la consulta , query = consulta*/


if($db->query($sql) === TRUE){

    echo "insercio correcta";

}else{
    echo "Error: ".$sql."<br>".$db->error;
}
$db->close();
?>

