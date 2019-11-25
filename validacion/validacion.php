<?php


if(isset($_POST['btnRegistro'])){

    $cedula = $_POST['cedula'];
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $rol= $_POST['rol'];
    $carrera= $_POST['carrera'];
    $promedio= $_POST['promedio'];
    $fecha= $_POST['fecha'];
    $usuario= $_POST['usuario'];
    $pass =$_POST['pass'];

 
    include '../include/crear.php';


}








?>