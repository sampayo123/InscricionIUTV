<?php

require '../include/ver.php';



require '../include/conexion.php';

if(isset($_GET['cedula'])){

$sql ='DELETE FROM usuarios WHERE cedula=:cedula';

try{
    $borrar=$con->prepare($sql);
    $borrar->bindValue(':cedula', $_GET['cedula']);
    $borrar->execute();

}catch(PDOExeption $e){
    print "Error: " .$e->getMessage()."<br/>";
    die();
}



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
    
<div class="container">
<table class="table table-dark">
<img src="../src/icon-agregar.svg"  width="25" heigt="25" class="d-inline-block align-top" onclick="location.href='./registrar.php'">
  <thead>
    <tr>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Rol</th>
      <th scope="col">Carrera</th>
      <th scope="col">Promedio</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      
    </tr>
  </thead>

  
  <tbody>
  <?php foreach($resultado as $dato):  ?>
    <tr>
      <td><?php echo $dato['cedula']?></td>
      <td><?php echo $dato['nombre']?></td>
      <td><?php echo $dato['apellido']?></td>
      <td><?php echo $dato['idRol']?></td>
      <td><?php echo $dato['carrera']?></td>
      <td><?php echo $dato['idpromedio']?></td>
      <td><?php echo $dato['user']?></td>
      <td><?php echo $dato['password']?></td>
      <td><img src="../src/icon-editar.svg"  width="25" heigt="25" class="d-inline-block align-top" onclick="location.href='./editarRegistro.php?cedula=<?php echo $dato['cedula'] ?>'"></td>
      <td><img name="btnBorrar" src="../src/icon-borrar.svg"  width="25" heigt="25" class="d-inline-block align-top" onclick="location.href='./verRegistro.php?cedula=<?php echo $dato['cedula'] ?>'"></td>
    

    </tr>
    <?php endforeach?>

  </tbody>
</table>
<?php 
if(isset($borrar))
    {
      $Eliminado=("usuario eliminado");
    }else{
      $Eliminado="";
    }?>

</div>       
<?php if(isset($borrar)): ?>
<div class="alert alert-primary" role="alert">
    <?php echo $Eliminado ?>
<div>
<?php endif ?>

</body>
</html>