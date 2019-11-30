<?php

session_start();
require '../include/conexion.php';
if(isset($_SESSION['user_id'])){
	//echo $_SESSION['user_id'];
	$consult=$con->prepare('SELECT * FROM usuarios WHERE cedula=:cedula');

	$consult->bindParam(':cedula',$_SESSION['user_id']);

	$consult->execute();


	 $result= $consult->fetch(PDO::FETCH_ASSOC);
	
//	print_r($result);
	$user="";
	

	if(count($result)>0){
		$user=$result;
	}
	
}else{
	header('location: vistas/login.php');
}



include '../include/fecha.php';

switch($dia){
	case 'Sunday':
		echo "Domingo<br>";
	break;
	case 'Monday':

		if($result['idpromedio']==1){
			echo 'te puedes inscribir';
		}else{
			echo 'no es tu dia de inscripcion';
		}
		echo 'Lunes';
	break;
	case 'Tuesday':
			echo 'Martes<br>';

		if($result['idpromedio']==2){
			echo 'te puedes inscribir';
		}else{
			echo 'no es tu dia de inscripcion';
		}
		
	break;
	case 'Wednesday':
			echo 'Miercoles<br>';

		if($result['idpromedio']==3){
			echo 'te puedes inscribir';
		}else{
			echo 'no es tu dia de inscripcion';
		}
		
	break;
	case 'Thursday':
			echo 'Jueves<br>';

		if($result['idpromedio']==4){
			echo 'te puedes inscribir';
		}else{
			echo 'no es tu dia de inscripcion';
		}
		
	break;
	case 'Friday':
		echo 'viernes<br>';

	if($result['idpromedio']==5){
		echo 'te puedes inscribir';
	}else{
		echo 'no es tu dia de inscripcion';
	}
	break;


	default:
	echo "no existe";
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
<header><?php include '../menu/menu1.php' ?></header>


<h1>Bienvenido <?php echo $user['nombre']?></h1>

</body>
</html>