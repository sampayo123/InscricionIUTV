<?php

session_start();
require '../include/conexion.php';
if(isset($_SESSION['user_id'])){
	//echo $_SESSION['user_id'];
	$consult=$con->prepare('SELECT * FROM usuarios WHERE cedula=:cedula');
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
	 <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">

</head>
<body>
<header><?php include '../menu/menu.php' ?></header>


<h1>Bienvenido <?php echo $user['nombre']?></h1>

</body>
</html>