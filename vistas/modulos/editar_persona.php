            <div class="modal-dialog modal-xl">
            <div class="modal fade" id="staticBackdrop<?php echo $registro["pk_empleado"]; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edicion de persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>

          <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
          <div class="row g-3">
          <div class="col">



          <label for="" class="form-label">
          <b> Nombre de Empleado: </b>

          <input type="text" class="form-control" name="pk" value="<?php echo $registro["pk_empleado"];?>" required onkeypress="return soloLetras(event)">


          </label>
          <input type="text" class="form-control" name="nombres" value="<?php echo $registro["nombres"];?>" required onkeypress="return soloLetras(event)">
          <br> 

          <label for="" class="form-label">
            <b> Primer Apellido: </b>
          </label>
          <input type="text" class="form-control" name="primer_apellido" value="<?php echo $registro["primer_apellido"];?>" required onkeypress="return soloLetras(event)"> 
          <br> 

          <label for="" class="form-label">
            <b> Segundo Apellido: </b>
          </label>
          <input type="text" class="form-control" name="segundo_apellido" value="<?php echo $registro["segundo_apellido"];?>" required onkeypress="return soloLetras(event)"> 
          <br> 

          <label for="" class="form-label">
            <b> Edad: </b>
          </label>
          <input type="text" class="form-control" name="edad" min=18 max=100 value="<?php echo $registro["edad"];?>" required onkeypress="ValidaSoloNumeros()"> 
          <br> 

        </div>
        <div class="col">


          <label for="" class="form-label">
            <b> Fecha de Nacimiento: </b>
          </label>
          <input type="date" class="form-control" name="fecha_nac" value="<?php echo $registro["fecha_nac"];?>" required> 
          <br> 
          <label for="" class="form-label">
            <b> Telefono: </b>
          </label>
          <input type="text" class="form-control" name="telefono" maxlength=10 value="<?php echo $registro["telefono"];?>" required onkeypress="ValidaSoloNumeros()"> 
          <br> 

          <label for="" class="form-label">
            <b> Correo Electronico: </b>
          </label>
          <input type="email" class="form-control" name="correo" value="<?php echo $registro["correo"];?>" required> 
          <br> 

          <label for="" class="form-label">
            <b> Clave: </b>
          </label>
          <input type="text" class="form-control" name="clave" value="<?php echo $registro["clave"];?>" required> 
          <br> 

        </div>
        <div class="col">



          <label for="" class="form-label">
            <b> latitud: </b>
          </label>
          <input type="text" class="form-control" name="latitud" value="<?php echo $registro["latitud"];?>" required> 
          <br> 
          <label for="" class="form-label">
            <b> longitud: </b>
          </label>
          <input type="text" class="form-control" name="altitud" value="<?php echo $registro["longitud"];?>" required> 
          <br> 

          <label for="" class="form-label"><b>Puesto</b></label>
          <?php
          $puesto = new Controlador();
          $puesto->ListaPuestos();
          ?>

          <option selected value=""><?php echo $registro["nombre_puesto"];?></option>
          <br>
          <label for="" class="form-label"><b>Foto del Empleado</b></label>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="<?php echo $registro['foto'] ?>">
              <label class="custom-file-label" for="inputGroupFile01">Elije un archivo</label>
            </div>
          </div>
          <img src="<?php echo $registro["foto"]; ?>" class="img-fluid">

          <br> 
        </div>
      </div>
      <center>
        <button type="submit" class="btn btn-lg text-white" name="editarPersona" style="background:#6830B8;"><i class="fa-regular fa-floppy-disk"></i> Guardar</button>
      </center>
    </form>  

       
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
</div>
</div>
</div>
</div>

<?php
$editarPersona = new Controlador();
$editarPersona->editarPersonaControlador();
?>

