<form method='POST'>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Cedula</label>
      <input input type="text" name="cedula" value="<?php echo $result['cedula']  ?>"  readonly="readonly"  class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label>Nombre</label>
      <input  type="text" value="<?php echo $result['nombre'] ?>" readonly="readonly" name="nombreI" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label>Apellido</label>
      <input type="text" class="form-control" readonly="readonly" name="apellidoI" value="<?php echo $result['apellido'] ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label >Fecha</label>
      <input type="timestamp"  readonly="readonly" name="fecha_inscripcionI" value="<?php echo $fecha_Actual?>" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label>Promedio</label>
      <input type="text" class="form-control" readonly="readonly" name="promedioI" value="<?php echo $result['idpromedio'] ?>">
    </div>
    <div class="form-group col-md-4">
    </fieldset>
     <legend>Materias</legend>
  <input type='checkbox'
            name='materia[]' value='1' > PHP
  <input type='checkbox' 
            name='materia[]' value='2' > ISID
  <input type='checkbox'
            name='materia[]' value='3' > SQL
	<input type='checkbox'
            name='materia[]' value='4' > ADS
	<input type='checkbox'
            name='materia[]' value='5' > ICO
            
 
 </fieldset>
    </div>
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary"  name="inscribir">Inscribir</button>


  <?php include '../include/crearI.php';
  ?>
</form>