<?php
$user="root";
$contra="";
try{
    $con= new PDO('mysql:host=localhost;dbname=inscripcion',$user,$contra);
   // print 'se conecto a la base de datos';
}
catch(PDOExeption $e){
    print "Error: " .$e->getMessage()."<br/>";
    die();
}

?>