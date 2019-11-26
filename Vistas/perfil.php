<?php

require '../include/conexion.php';

if(isset($_GET['cedula'])){

    $sql="SELECT * FROM usuarios WHERE cedula=:cedula";

    try{
        $estado = $con->prepare($sql);
     
        $estado->bindValue(':cedula',$_GET['cedula']);
        $estado->execute();

        $obtUser = $estado->fetch(PDO::FETCH_ASSOC);
     
    }catch(PDOExeption $e){
        print "Error: " .$e->getMessage()."<br/>";
        die();
    }


}else{
    echo "se necesita un id";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscripcion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
<header><?php include '../menu/menu.php' ?></header>

<form action="" method="POST">

  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="inputCedula">Cedula</label>
      <input type="text" class="form-control" id="inputCedula" placeholder="Cedula" name="cedula" value="<?php echo $obtUser['cedula']?>" required autofocus>
    </div>
    <div class="form-group col-md-3">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombre" required
                 autofocus value="<?php echo $obtUser['nombre']?>">
    </div>
    <div class="form-group col-md-3">
      <label for="inputApellido">Apellido</label>
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="apellido" required autofocus value="<?php echo $obtUser['apellido']?>">
    </div>
  
  </div>
  <div class="form-group">
    <label for="inputAddress">Rol</label>
    <input type="number" class="form-control" id="inputidRol" min="1" max="3" name="rol"  required value="<?php echo $obtUser['idRol']?>">
  </div>
  <div class="form-group">
    <label for="inputCarrera2">Carrera</label>
    <input type="text" class="form-control" id="inputCarrera" placeholder="Carrera" name="carrera" required value="<?php echo $obtUser['carrera']?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Promedio</label>
      <input type="number" class="form-control" id="inputPromedio" min="1" max="20" name="promedio" required value="<?php echo $obtUser['idpromedio']?>">
    </div>

    <div class="form-group">
    <label for="inputFecha">Fecha</label>
    <input type="date" class="form-control" id="inputFecha"  name="fecha" value="<?php echo $obtUser['fecha']?>">
  </div>
    <div class="form-group col-md-4">
    <label for="inputCity">Usuario</label>
      <input type="text" class="form-control" id="inputUsuario" name="usuario" required value="<?php echo $obtUser['user']?>">
    </div>
    <div class="form-group col-md-2">
    <label for="inputContraseña">Contraseña</label>
      <input type="password" class="form-control" id="inputContraseña" name="pass" required value="<?php echo $obtUser['password']?>">
    </div>
  </div>
  <div class="form-group">
  </div>


  
</form>



</body>
</html>