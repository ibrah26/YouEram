<?php
/* Creació de dades per la connexio de la bdd del phpMyadmin*/
$conex = array('host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db' => 'youeram'
);
/*Creem la conexxió amb el mysql (bdd)*/
$db = new mysqli($conex['host'], $conex['user'], $conex['pass'], $conex['db']);

/*si no posem igual o res, vol di per defecte que existeix*/
/*mostra errror de conexió si n'hi ha*/
if($db->connect_error) die ($db->connect_error);