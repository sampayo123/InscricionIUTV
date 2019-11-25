<?php

require '../include/conexion.php';




try{

   
//     $nombre= $_POST['nombre'];
//     $apellido= $_POST['apellido'];
//     $rol= $_POST['rol'];
//     $carrera= $_POST['carrera'];
//     $promedio= $_POST['promedio'];
//     $fecha= $_POST['fecha'];
//     $usuario= $_POST['usuario'];
//     $pass =$_POST['pass'];
// $cedula = $_POST['cedula'];


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

$edit=$con->prepare('UPDATE usuarios SET 
nombre=:nombre,
apellido=:apellido,
idRol=:idRol,
carrera=:carrera,
idpromedio=:idpromedio,
fecha_inscripcion=:fecha,
user=:user,
pass=:pass
 WHERE cedula=:cedula');


$edit->bindParam(':nombre',$obtUser['nombre']);
$edit->bindParam(':apellido',$obtUser['apellido']);
$edit->bindParam(':idRol',$obtUser['idRol']);
$edit->bindParam(':carrera',$obtUser['carrera']);
$edit->bindParam(':idpromedio',$obtUser['idpromedio']);
$edit->bindParam(':fecha',$obtUser['fecha_inscripcion']);
$edit->bindParam(':user',$obtUser['user']);
$edit->bindParam(':pass',$obtUser['password']);
$edit->bindParam(':cedula',$obtUser['cedula']);
//print_r( $obtUser );

$resultado=$edit->execute();

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