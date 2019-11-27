<?php
require '../include/conexion.php';

require '../include/fecha.php';
   
if(!empty($_POST['materia'])){
    // Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
    
    $materias=$_POST['materia']; 
   
    foreach( $materias as $valor){
        $cedula= $result['cedula']; 
        $inserts=$con->prepare('INSERT INTO inscripcion VALUES
        (:id,:idmateria,:idusuario,:fecha)');
        
        $id="";
       
            $inserts->bindParam(':id',$id);
            $inserts->bindParam(':idmateria',$valor);
             $inserts->bindParam('idusuario',$cedula);
             $inserts->bindParam(':fecha',$fecha_Actual);
            
            $results=$inserts->execute();

            if($results['idMateria']>=0){
              echo "ya estas inscrito";
        
            }
    }
  
    if($result=== TRUE){
        echo "error";
      }else{
        $ins='Inscripcion exitosa';
        ECHO $ins;
         
      }

}


?>