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

try{

    if(isset($_POST['btnGuardar'])){

    $cedula = $_POST['cedula'];
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $rol= $_POST['rol'];
    $carrera= $_POST['carrera'];
    $promedio= $_POST['promedio'];
    $usuario= $_POST['usuario'];
    $pass =$_POST['pass'];
    }
 
    //$query('UPDATE usuarios SET nombre = 'Andres', carrera = informatica, idpromedio = 12 WHERE usuarios.cedula = 24206793');

    $inserts=$con->prepare('UPDATE usuarios SET nombre=:nombre,apellido=:apellido,idRol=:idRol,
    carrera=:carrera,idpromedio=:idpromedio,user=:user,password=:pass WHERE cedula=:cedula');

    
    $inserts->bindParam(':cedula',$cedula);
    $inserts->bindParam(':nombre',$nombre);
    $inserts->bindParam(':apellido',$apellido);
    $inserts->bindParam(':idRol',$rol);
    $inserts->bindParam(':carrera',$carrera);
    $inserts->bindParam(':idpromedio',$promedio);
    $inserts->bindParam(':user',$usuario);
    $inserts->bindParam(':pass',$pass);
    
    $result=$inserts->execute();



    if(isset($_POST['btnGuardar'])){
        if($result == TRUE){
            $cambio= "Cambios guardados";
            header('location: ../vistas/verRegistro.php');
        } else {
            echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
        }
    }

}catch(PDOExeption $e){
    print "Error: " .$e->getMessage()."<br/>";
    die();
}

?>