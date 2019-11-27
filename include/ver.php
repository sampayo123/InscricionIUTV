<?php

require '../include/conexion.php';

$ver='SELECT * FROM usuarios';

$guardar=$con->prepare($ver);
$guardar->execute();

$resultado=$guardar->fetchAll();

$v='SELECT descripcion, idMateria,fecha_inscripcion FROM materia m ,inscripcion i, usuarios u WHERE m.id=i.idMateria AND i.idUsuario=u.cedula';

$g=$con->prepare($v);
$g->execute();

$r=$g->fetchAll();


?>
