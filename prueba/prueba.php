<?php
require '../include/conexion.php';

$ver='SELECT * FROM usuarios';

$guardar=$con->prepare($ver);
$guardar->execute();

$resultado=$guardar->fetchAll();


if(isset($_GET['id'])){

    $sql="SELECT * FROM inscripcion WHERE id=:id";

    try{
        $estado = $con->prepare($sql);
     
        $estado->bindValue(':id',$_GET['id']);
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


try{

    if(isset($_POST['btnGuardar'])){
     $nombre= $_POST['nombre'];
     $apellido= $_POST['apellido'];
 $cedula = $_POST['id'];
 echo $nombre,$apellido,$id;
    }
 
     // $edit=$con->prepare('UPDATE usuarios SET 
     // cedula= ?,
     // nombre= ?,
     // apellido= ?,
     // idRol= ?,
     // carrera= ?,
     // idpromedio= ?,
     // fecha_inscripcion= ?,
     // user= ?,
     // pass= ?
     //  WHERE cedula= ?');
 //print_r( $obtUser );
 
 $edit=$con->prepare('UPDATE inscripcion SET 
 nombre=:nombre,
 apellido=:apellido,
  WHERE id=:id');
 

 
 $edit->bindParam(':nombre',$nombre);
 $edit->bindParam(':apellido',$apellido);
 $edit->bindParam(':id',$id);
 
echo $nombre,$apellido,$id;
 
 
 
 $edit->execute();
 
 $resultado=$edit;
 if(isset($_POST['btnGuardar'])){
 if($resultado === TRUE){
     echo "Cambios guardados";
 } else {
     echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
 }
 }
 
 }catch(PDOExeption $e){
     print "Error: " .$e->getMessage()."<br/>";
     die();
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
      <input type="text" class="form-control" id="inputCedula" placeholder="id" name="id" value="<?php echo $obtUser['id']?>" required autofocus>
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
 <a href="../include/editar.php">modificar</a>
  <button type="submit" class="btn btn-primary" name="btnGuardar">Guardar</button>
 <?php
 include '../include/editar.php';?>

  
</form>



</body>
</html>