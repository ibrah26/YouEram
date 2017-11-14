<?php
include "lib/conf.php";

/*Creem la conexxió amb el mysql (bdd)*/
$db = new mysqli($conex['host'], $conex['user'], $conex['pass'], $conex['db']);

/*si no posem igual o res, vol di per defecte que existeix*/
/*mostra errror de conexió si n'hi ha*/
if($db->connect_error) die ("Connection failed: ".$db->connect_error);
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>