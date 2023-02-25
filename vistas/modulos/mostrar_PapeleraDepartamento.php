<div class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4">Papelera de departamento</h1>
    <p class="lead">Informacion de empleados borrados anteriormente</p>
  </div>
</div>
<div class="container-xl ">
  <br>
  <div class="table-responsive">
    <table class="table table-bordered table-striped hover table-hover">
      <thead>
        <th>Regresar</th>
        <th>Eliminar definitivamente</th>
        <th>Nombre de puesto</th>
        <th>Hora</th>
        <th>Fecha</th>
      </thead>
      <tbody>
        <?php
        $mostrarPapeleraDepartamento = new Controlador();
        $mostrarPapeleraDepartamento->mostrarPapeleraDepartamento();
        ?>
      </tbody>
    </table>
  </div>
</div>
</div> <!--Cierre de la clase container-->
</body>
</html>

