<?php
require '../include/conexion.php';

try{
$insert=$con->prepare('INSERT INTO usuarios VALUES
(:cedula,:nombre,:apellido,:idRol,:carrera,:idpromedio,:user,:pass)');
$insert->bindParam(':cedula',$cedula);
$insert->bindParam(':nombre',$nombre);
$insert->bindParam(':apellido',$apellido);
$insert->bindParam(':idRol',$rol);
$insert->bindParam(':carrera',$carrera);
$insert->bindParam(':idpromedio',$promedio);
$insert->bindParam(':user',$usuario);
$insert->bindParam(':pass',$pass);

$result=$insert->execute();

$mostrar="";
if($result=== TRUE){
 $mostrar ='usuario creador';
 ECHO $mostrar;
}
  
}catch(PDOExeption $e){
    print "Error: " .$e->getMessage()."<br/>";
    die();
}

// if(!empty($_POST['materia'])){
//     // Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
//     foreach($_POST['materia'] as $selected){
//     echo $selected."</br>";
//     }}



         
       
   
    
?>
