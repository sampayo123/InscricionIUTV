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

		if($result['idpromedio']>=18 and $result['idpromedio']<=20){
			$inscribir= 'te puedes inscribir<br>';
		}else{
			$noInscipcion='no es tu dia de inscripcion<br>';
		}
		$lunes= 'Lunes';
	break;
	case 'Tuesday':
			echo "Martes - $fecha_Actual";

		if($result['idpromedio']>=15 and $result['idpromedio']<=17 ){
			$inscribir= 'te puedes inscribir<br>';
			
		}else{
			
			$noInscipcion='no es tu dia de inscripcion<br>';
		}
		
	break;
	case 'Wednesday':
			echo 'Miercoles<br>';

		if($result['idpromedio']>=13 and $result['idpromedio']<=14 ){
			$inscribir= 'te puedes inscribir<br>';
		}else{
			$noInscipcion='no es tu dia de inscripcion<br>';
		}
		
	break;
	case 'Thursday':
			echo 'Jueves<br>';

		if($result['idpromedio']>=11 and $result['idpromedio']<=12 ){
			$inscribir= 'te puedes inscribir<br>';
		}else{
			$noInscipcion='no es tu dia de inscripcion<br>';
		}
		
	break;
	case 'Friday':
		echo 'viernes<br>';

	if($result['idpromedio']<=10){
		$inscribir= 'te puedes inscribir<br>';
	}else{
		if(isset($_POST['btn'])){
		
		}
		$noInscipcion='no es tu dia de inscripcion<br>';
	}
	break;

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

<?php
if(isset($inscribir)){
if($inscribir ==='te puedes inscribir<br>')
{	 echo $inscribir;
	
	include '../form.php';
}
}
if(isset($noInscipcion)){
if($noInscipcion==='no es tu dia de inscripcion<br>')
{	 echo $noInscipcion;
	
}
}

?>


</body>
</html>