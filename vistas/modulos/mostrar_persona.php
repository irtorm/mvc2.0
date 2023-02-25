<div class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4">Registros de empleados</h1>
    <p class="lead">Informacion de empleados registrados actualmente activo</p>
  </div>
</div>
<div class="container-xl ">
  <br>
  <?php
  $numEmpleado = new Controlador();
  $numEmpleado->numEmpleados();
  ?>    
  <div class="table-responsive">
    <table class="table table-bordered table-striped hover table-hover">
      <thead>
        <tr>
          <th>Informacion</th>
          <th>Editar</th>
          <th>Eliminar</th>
          <th>Nombre </th>
          <th>Primer Apellido</th>  
          <th>Segundo Apellido</th> 
<!--      <th>Edad</th>
          <th>Fecha de Nacimiento</th>
          <th>Telefono</th>
          <th>Correo Electronico</th>
          <th>Puesto</th>
 -->        </tr>
      </thead>
      <tbody>
        <?php
        $empleado = new Controlador();
        $empleado->ListaEmpleado();
        ?>
      </tbody>
    </table>
  </div>
</div>
</div> <!--Cierre de la clase container-->
</body>
</html>



