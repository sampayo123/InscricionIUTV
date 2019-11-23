<?php 

require '../include/conexion.php' ;

 session_start();

 if(isset($_POST['btn'])){
$user=$_POST['usuario'];
$pass=$_POST['contraseña'];

  if(!empty($user) && !empty($pass)){


    $consul=$con->prepare('SELECT cedula,user,password FROM usuarios WHERE user=:user and password=:password');

      $consul->bindParam(':user',$user);
      $consul->bindParam(':password',$pass);

    
      $consul->execute();
      $results= $consul->fetch(PDO::FETCH_ASSOC);


  if($user=!$results['user'] &&
       $pass!=$results['pass']){
        $errorUser = "Usuario o contraseña incorrectos";
     
      }
 }
//print_r($results);

if($pass==$results['password']){
   if(count($results) > 0 && $pass==$results['password']){
      $_SESSION['user_id']=$results['cedula'];
     header('location: ../index.php');
   
    }

}
      
    
}


?>

<!DOCTYPE html>
<html>
<head>
	<title> Inscripcion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>

  <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form action="" method="POST" class="form-signin">
              <div class="form-label-group">
			  <label for="idcedula">Usuario</label>
                <input type="text" id="idcedula" class="form-control" placeholder="Usuario" name="usuario" required
                 autofocus>
              </div>

              <div class="form-label-group">
			  <label for="idContraseña">Contraseña</label>
                <input type="password" id="idContraseña" class="form-control" placeholder="Contraseña" name="contraseña" required>                
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Recordarme</label>
              </div>
			  <button type="submit" class="btn btn-primary" name="btn">Entrar</button>
        <button type="delete" class="btn btn-danger" name="btn">borrar</button>
              <?php 
                if(isset($errorUser)){
              echo $errorUser;}
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>
