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
    $nombre= "$_POST[nombre]";
    $apellido= $_POST['apellido'];
    $rol= $_POST['rol'];
    $carrera= $_POST['carrera'];
    $promedio= $_POST['promedio'];
    $fecha= $_POST['fecha'];
    $usuario= $_POST['usuario'];
    $pass =$_POST['pass'];
    $cedula = $_POST['cedula'];

}//if

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

    $edit->bindParam(':nombre',$nombre);
    $edit->bindParam(':apellido',$apellido);
    $edit->bindParam(':idRol', $rol);
    $edit->bindParam(':carrera',$carrera);
    $edit->bindParam(':idpromedio', $promedio);
    $edit->bindParam(':fecha',$fecha);
    $edit->bindParam(':user',$usuario);
    $edit->bindParam(':pass', $pass);
    $edit->bindParam(':cedula',$cedula, PDO::PARAM_INT);
    
    $edit->execute();
    $resultado=$edit;

   // echo "UPDATE usuarios SET  nombre= $_POST[nombre] apellido=$_POST[apellido] idRol=$_POST[rol] carrera=$_POST[carrera] idpromedio=$_POST[promedio] fecha_inscripcion= $_POST[usuario] user=$_POST[user] pass=$_POST[pass] WHERE cedula=$_POST[cedula]";

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