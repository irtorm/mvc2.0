<div class="modal-dialog modal-xl">
<div class="modal fade" id="staticBackdropinfo<?php echo $registro["pk_empleado"]; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="staticBackdropLabel"><?php echo $registro['nombres'].' '.$registro['primer_apellido'].' '.$registro['segundo_apellido'] ?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <h1 class="text-center"></h1>
          </div>
          <div class="row">
            <div class="col">
                <img src="<?php echo $registro['foto']; ?>" class="img-fluid">
                <div class="row">
                  <br>
                  <br>
                  <h6 class="text-center">Fecha de nacimiento: <br> <?php echo $registro["fecha_nac"];?></h6>
                </div>
            </div>
            <div class="col">
                <h3>Datos de contacto:</h3>
                <h6>Telefono:<?php echo $registro["telefono"];?></h6>
                <h6>Correo:<?php echo $registro["correo"];?></h6>
            </div>
            <div class="col">
              <h3>Datos de sistema:</h3>
              <h6>Fecha de registro: <?php echo $registro["fecha"];?></h6>
              <h6>Hora de registro: <?php echo $registro["hora"];?></h6>
            </div>
          </div>




<!--           <img src="<?php echo $registro['foto']; ?>" class="img-thumbnail">
          <?php echo $registro['segundo_apellido']; ?> -->

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
