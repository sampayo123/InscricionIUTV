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

<form method='POST'>


<div>
<label>cedula<input type="text" name="cedula" value="<?php echo $result['cedula']  ?>"  readonly="readonly" ></label>

</div>
<div>
<label>nombre<input type="text" value="<?php echo $result['nombre'] ?>" readonly="readonly" name="nombreI"></label>

</div>
<div>
<label>apellido<input type="text" name="apellidoI" value="<?php echo $result['apellido'] ?>" ></label>

</div>
<fieldset>
  <legend>Materias</legend>
  <input type='checkbox'
            name='PHP' value='PHP' > PHP
  <input type='checkbox' 
            name='materia[]' value='ISID' > ISID
  <input type='checkbox'
            name='materia[]' value='SQL' > SQL
	<input type='checkbox'
            name='materia[]' value='ADS' > ADS
	<input type='checkbox'
            name='materia[]' value='ICO' > ICO
 </fieldset>

<div>
<label>fecha<input type="text" name="fecha_inscripcionI"></label>

</div>
<div>
<label>promedio <input type="text" name="promedioI"></label>

</div>
<input type="submit" value="inscribir" name="inscribir"></input>
<?php include '../include/crear.php'?>
</form>



</body>
</html>