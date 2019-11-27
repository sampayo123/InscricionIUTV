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
      <input type="text" class="form-control" id="inputCedula" placeholder="Cedula" name="cedula" required autofocus>
    </div>
    <div class="form-group col-md-3">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombre" required
                 autofocus>
    </div>
    <div class="form-group col-md-3">
      <label for="inputApellido">Apellido</label>
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="apellido" required autofocus>
    </div>
  
  </div>
  <div class="form-group">
    <label for="inputAddress">Rol</label>
    <input type="number" class="form-control" id="inputidRol" min="1" max="3" name="rol" required>
  </div>
  <div class="form-group">
    <label for="inputCarrera2">Carrera</label>
    <input type="text" class="form-control" id="inputCarrera" placeholder="Carrera" name="carrera" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Promedio</label>
      <input type="number" class="form-control" id="inputPromedio" min="1" max="20" name="promedio" required>
    </div>

    <div class="form-group">
    <label for="inputFecha">Fecha</label>
    <input type="timestamp" class="form-control" id="inputFecha"  name="fecha">
  </div>
    <div class="form-group col-md-4">
    <label for="inputCity">Usuario</label>
      <input type="text" class="form-control" id="inputUsuario" name="usuario" required>
    </div>
    <div class="form-group col-md-2">
    <label for="inputContraseña">Contraseña</label>
      <input type="password" class="form-control" id="inputContraseña" name="pass" required>
    </div>
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary" name="btnRegistro">Crear usuario</button>
  <?php include '../validacion/validacion.php ';  
    include '../include/crear.php ';  
    if($result=== TRUE){
   header('location: ../vistas/verRegistro.php');
   
     }
   
  ?> 






</body>
</html>