
<div class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4">Registros de empleados</h1>
    <p class="lead">Informacion de empleados registrados actualmente activo</p>
  </div>
</div>
<div class="container-xl ">
  <br>
  <div class="table-responsive">
    <table class="table table-bordered table-striped hover table-hover">
      <thead>
        <th>Editar</th>
        <th>Eliminar</th>
        <th>Nombre de puesto</th>
        <th>Hora</th>
        <th>Fecha</th>
      </thead>
      <tbody>
        <?php
        $mostrarDepartamento = new Controlador();
        $mostrarDepartamento->mostrarDepartamento();
        ?>
      </tbody>
    </table>
  </div>
</div>
</div> <!--Cierre de la clase container-->
</body>
</html>

