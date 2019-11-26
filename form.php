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
      <input type="timestamp"  readonly="readonly" name="fecha_inscripcionI" value="<?php echo $fechaDMA?>" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label>Promedio</label>
      <input type="text" class="form-control" readonly="readonly" name="promedioI" value="<?php echo $result['idpromedio'] ?>">
    </div>
    <div class="form-group col-md-4">
    </fieldset>
     <legend>Materias</legend>
  <input type='checkbox'
            name='PHP' value='PHP' > PHP
  <input type='checkbox' 
            name='materia[]' value='ISID' > ISID
  <input type='checkbox'
            name='materia[]' value='SQL' > SQL
	<input type='checkbox'
            name='materia[]' value='ADS' > ADS
	<input type='checkbox'
            name='materia[]' value='ICO' > ICO
 </fieldset>
    </div>
  </div>
  <div class="form-group">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Materias inscritas</label>
    <textarea class="form-control"  readonly="readonly" id="exampleFormControlTextarea1" value="" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary"  name="inscribir">Inscribir</button>
  <?php include '../include/crear.php'?>
</form>