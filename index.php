<?php

session_start();
require 'include/conexion.php';
if(isset($_SESSION['user_id'])){
	//echo $_SESSION['user_id'];
	$consult=$con->prepare('SELECT cedula,nombre,user,password FROM usuarios WHERE cedula=:cedula');

	$consult->bindParam(':cedula',$_SESSION['user_id']);

	$consult->execute();


	 $result= $consult->fetch(PDO::FETCH_ASSOC);
	
	//print_r($result);
	$user="";
	

	if(count($result)>0){
		$user=$result;
	}
	
}else{
	header('location: vistas/login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Incripcion</title>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.css">

</head>
<body>
<header>
        <nav class="navbar navbar-dark bg-dark"> 
            <a class="navbar-brand" href="./index.php" > 
                <img src="src/icon-inscripcion.png"  width="30" heigt="30" class="d-inline-block align-top"> Inscripcion</a>
            <ul class="nav justufy-content-end">
                <li class="nav-item"><a class="nav-link active" href="./index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="">Perfil</a></li>
                <li class="nav-item"><a class="nav-link active" href="">Registrar</a></li>
                <li class="nav-item"><a class="nav-link active" href="login/salir.php">Salir</a></li>
            </ul>
        </nav>
    </header>


<h1>Bienvenido <?php echo $user['nombre']?></h1>

</body>
</html>