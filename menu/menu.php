<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Incripcion</title>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">

</head>
<body>
<header>
        <nav class="navbar navbar-dark bg-dark"> 
            <a class="navbar-brand" href="../administrador/index.php" > 
                <img src="../src/icon-inscripcion.png"  width="30" heigt="30" class="d-inline-block align-top"> Inicio</a>
            <ul class="nav justufy-content-end">
                <li class="nav-item"><a class="nav-link active" href="../administrador/index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="../perfiles/perfil.php?cedula=<?php echo $user['cedula']?>">Perfil</a></li>
                <li class="nav-item"><a class="nav-link active" href="../vistas/verRegistro.php">Registrar</a></li>
                <li class="nav-item"><a class="nav-link active" href="../login/salir.php">Salir</a></li>
            </ul>
        </nav>
    </header>

</body>
</html>