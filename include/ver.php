<?php

require '../include/conexion.php';

$ver='SELECT * FROM usuarios';

$guardar=$con->prepare($ver);
$guardar->execute();

$resultado=$guardar->fetchAll();



$vers='SELECT * FROM inscripcion';
$guardars=$con->prepare($ver);
$guardars->execute();

$resultados=$guardar->fetchAll();
print_r($resultados);
?>