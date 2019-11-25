<?php

require '../include/conexion.php';

$ver='SELECT * FROM usuarios';

$guardar=$con->prepare($ver);
$guardar->execute();

$resultado=$guardar->fetchAll();


?>