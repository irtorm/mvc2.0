<?php
class Controlador
{
        //metodo que carga la plantilla
        static public function paginas()
        {
            include("vistas/plantilla.php");
        }

        //método que gestiona los enlaces
        static public function enlacespaginas()
        {
            if(isset($_GET['accion']))
            {
                $enlaces = $_GET['accion'];
            }
            else
            {
                $enlaces = "principal";
            }

            $respuesta= Paginas::enlacesPaginasModelo($enlaces);

            //muestra la pagina
            include $respuesta;
        }

        //metodo para  guardar los puestos
        static public function registroPuestosControlador()
        {
            if(isset($_POST['nombre_puesto']))
            {
                //arreglo
                $datosControlador = array("0"=>$_POST['nombre_puesto'], "1"=>$_POST['salario']);
                $tabla='puesto';
                $respuesta= Datos::guardarPuesto($datosControlador,$tabla);

                if($respuesta == 'ok')
                {
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos guardados',
                            text: 'Datos guardados correctamente',
                            confirmButtonText: 'OK',
                            allowOutsideClick: false 
                        }).then((result) =>{
                            if(result.isConfirmed){
                                window.location.replace("index.php?accion=alta_puesto");
                            }
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                     Swal.fire({
                         icon: 'error',
                         title: 'Ocurrió un Error',
                         text: 'Los Datos no se pudieron Guardar',

                     }).then((result) =>{
                         if(result.isConfirmed){
                             window.location.replace("index.php?accion=alta_puesto");
                         }
                     });
                 </script>
                 <?php
             }
         }
        }

        //metodo para  guardar las personas
     static public function registroPersonasControlador()
     {
        if(isset($_POST['nombres']))
        {

                //Gestión de la Imagen
            $archivo= $_FILES['foto']['tmp_name'];
            $nombreArchivo= $_FILES['foto']['name'];

            $ruta= "vistas/imagenes/".$nombreArchivo;



                //arreglo
            $datosControlador = array(
                "0"=>$_POST['nombres'],
                "1"=>$_POST['primer_apellido'],
                "2"=>$_POST['segundo_apellido'],
                "3"=>$_POST['edad'],
                "4"=>$_POST['fecha_nac'],
                "5"=>$_POST['telefono'],
                "6"=>$_POST['correo'],
                "7"=>$_POST['clave'],
                "8"=>$ruta,
                "9"=>$_POST['puesto'],
                "10"=>$_POST['latitud'],
                "11"=>$_POST['altitud']); 

            $tabla='empleado';
            $respuesta= Datos::guardarPersona($datosControlador,$tabla);

            if($respuesta == 'ok')
            {
                     //Instrucción PHP para mover el archivo
                move_uploaded_file($archivo,$ruta);

                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=alta_puesto");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 }).then((result) =>{
                     if(result.isConfirmed){
                         window.location.replace("index.php?accion=alta_puesto");
                     }
                 });
             </script>
             <?php
         }
        }
     }


         static public function papeleraPersonaControlador()
    {
        $pk = $_GET[ 'pk' ];
        $tabla = 'empleado';
        $respuesta= Datos::papeleraPersona($tabla,$pk);


            if($respuesta == 'ok')
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Operación exitosa',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=mostrar_persona");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 });
             </script>
             <?php
         }
       
    }


     static public function editarPersonaControlador()
    {
        if(isset($_POST['editarPersona']))
        {

            //Gestión de la Imagen
            $archivo= $_FILES['foto']['tmp_name'];
            $nombreArchivo= $_FILES['foto']['name'];

            $ruta= "vistas/imagenes/".$nombreArchivo;
                //arreglo
            $datosControlador = array(
                "0"=>$_POST['nombres'],
                "1"=>$_POST['primer_apellido'],
                "2"=>$_POST['segundo_apellido'],
                "3"=>$_POST['edad'],
                "4"=>$_POST['fecha_nac'],
                "5"=>$_POST['telefono'],
                "6"=>$_POST['correo'],
                "7"=>$_POST['clave'],
                "8"=>$ruta,
                "9"=>$_POST['puesto'],
                "10"=>$_POST['latitud'],
                "11"=>$_POST['altitud']); 

            $tabla='empleado';
            $pk =$_POST['pk'];
            $respuesta= Datos::editarPersona($tabla,$datosControlador,$pk);

            if($respuesta == 'ok')
            {
                ?>
                <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos guardados',
                            text: 'Datos guardados correctamente',
                            confirmButtonText: 'OK',
                            allowOutsideClick: false 
                        }).then((result) =>{
                            if(result.isConfirmed){
                                window.location.replace("index.php?accion=mostrar_persona");
                            }
                        });

                </script>
                <?php
            }
            else
            {
                ?>

             <?php
         }
     }
    }



        //metodo para agregar departamento
    static public function registroDepartamentoControlador()
    {
        if(isset($_POST['nombreDepartamento']))
        {
                //arreglo
            $datosControlador = array("0"=>$_POST['nombreDepartamento']);
            $tabla='departamento';
            $respuesta= Datos::guardarDepartamento($datosControlador,$tabla);

            if($respuesta == 'ok')
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=mostrarDepartamento");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 });
             </script>
             <?php
         }
     }
    }

    static public function actualizarDepartamentoControlador()
    {
        if(isset($_POST['nombreDepartamentoEditar']))
        {
                //arreglo
            $datosControlador = array(
                "0"=>$_POST['nombreDepartamentoEditar']
            );
            $tabla='departamento';
            $pk =$_POST['pk'];
            $respuesta= Datos::actualizarDepartamento($tabla,$pk,$datosControlador);

            if($respuesta == 'ok')
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=mostrarDepartamento");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 });
             </script>
             <?php
         }
     }
    }



        //Método que enlista los puestos
    static public function ListaPuestos()
    {
        $tabla = 'puesto';
        $respuesta= Datos::ObtenerPuestos($tabla);
        ?>
        <select name="puesto" id="" class="form-control">
            <option value="">Elige un Puesto</option>
            <?php
            foreach($respuesta as $registro)
            {
                ?>
                <option value="<?php echo $registro['pk_puesto']; ?>"><?php echo $registro['nombre_puesto']; ?></option>
                <?php
            }
            ?>
            

        </select>

        
        <?php
    }




            //Método que enlista los puestos
    static public function ListaEmpleado()
    {
        $tabla = 'empleado';
        $respuesta= Datos::ObtenerEmpleado($tabla);

        $i=0;
        //conocer el numero de registros
        foreach($respuesta as $registro)
        {
            $i=$i+1;
            ?>
            <tr>
                <td><a data-toggle="modal" data-target="#staticBackdropinfo<?php echo $registro["pk_empleado"]; ?>" class="btn btn-info"><i class="fa-solid fa-eye"></i> Todos los datos</a></td>
                <td><a data-toggle="modal" data-target="#staticBackdrop<?php echo $registro["pk_empleado"]; ?>"  href="index.php?accion=editarEmpleado&pk=<?php echo $registro["pk_empleado"];?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a class="btn btn-danger" href="index.php?accion=papeleraPersona&pk=<?php echo $registro["pk_empleado"];?>"><i class="fa-solid fa-trash"></i></a></td>
                <td><?php echo $registro["nombres"];?></td>
                <td><?php echo $registro["primer_apellido"];?></td>
                <td><?php echo $registro["segundo_apellido"];?></td>
            </tr>


        <?php
        include("vistas/modulos/editar_persona.php");
        include("vistas/modulos/info_empleado.php");


        }

        
    }




                //Método para contar empleados

    static public function numEmpleados()
    {
        $tabla = 'empleado';
        $respuesta= Datos::ObtenerEmpleado($tabla);

        $i=0;
        //conocer el numero de registros
        foreach($respuesta as $registro)
        {
            $i=$i+1;
        }
        ?>
        <div class="alert alert-info">
           <b>Numero de empleados:</b> <?php echo $i; ?>    
       </div>
       <?php
       
    }


    static public function papeleraDepartamentoControlador()
    {
        $pk = $_GET[ 'pk' ];
        $tabla = 'departamento';
        $respuesta= Datos::papeleraDepartamento($tabla,$pk);


            if($respuesta == 'ok')
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Operación exitosa',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=mostrarDepartamento");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 });
             </script>
             <?php
         }
       
    }






        static public function mostrarDepartamento()
        {
                        $tabla = 'departamento';
                        $respuesta= Datos::ObtenerDepartamento($tabla);

                            foreach($respuesta as $registro)
                            {
                                ?>
                            <tr>
                                <td><a data-toggle="modal" data-target="#staticBackdrop<?php echo $registro["PK_departamento"]; ?>"  class="btn btn-warning"> Editar <i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td><a class="btn btn-danger" href="index.php?accion=papeleraDepartamento&pk=<?php echo $registro["PK_departamento"];?>"> Mover a la papelera <i class="fa-solid fa-trash"></i></a></td>
                                <td><?php echo $registro['nombre_departamento'];  ?></td>
                                <td><?php echo $registro['fecha'];  ?></td>
                                <td><?php echo $registro['hora'];  ?></td>
                            </tr>
                            <div class="modal fade" id="staticBackdrop<?php echo $registro["PK_departamento"]; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <form method="POST" onsubmit="#">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Editar departamento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                <div>
                                  
                                    <input type="text" value=" <?php echo $registro['PK_departamento'] ?> " name="pk" class="form-control" hidden>
                                    <label class="form-label">Nombre de departamento</label><br>
                                    <input type="text" value=" <?php echo $registro['nombre_departamento'] ?> " name="nombreDepartamentoEditar" class="form-control"><br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Agregar departamento</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          </div>
                      </div>
                      </form>
                  </div>
                </div>



                            <?php
            }
$editar = new Controlador();
$editar-> actualizarDepartamentoControlador();



    }



        static public function mostrarPapeleraDepartamento()
        {
                            $tabla = 'departamento';
                            $respuesta= Datos::ObtenerPapeleraDepartamento($tabla);

                            foreach($respuesta as $registro)
                            {
                                ?>
                                <tr>
                                    <td><a data-toggle="modal" data-target="#staticBackdrop<?php echo $registro["PK_departamento"]; ?>"  class="btn btn-success"> Sacar de la papelera <i class="fa-solid fa-rotate-left"></i></a></td>
                                    <td><a class="btn btn-danger" href="index.php?accion=papeleraDepartamento&pk=<?php echo $registro["PK_departamento"];?>"> Eliminar definitivamente <i class="fa-solid fa-trash"></i></a></td>
                                    <td><?php echo $registro['nombre_departamento'];  ?></td>
                                    <td><?php echo $registro['fecha'];  ?></td>
                                    <td><?php echo $registro['hora'];  ?></td>
                                </tr>
                                <div class="modal fade" id="staticBackdrop<?php echo $registro["PK_departamento"]; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <form method="POST" onsubmit="#">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Editar departamento</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <div>

                                            <input type="text" value=" <?php echo $registro['PK_departamento'] ?> " name="pk" class="form-control" hidden>
                                            <label class="form-label">Nombre de departamento</label><br>
                                            <input type="text" value=" <?php echo $registro['nombre_departamento'] ?> " name="nombreDepartamentoEditar" class="form-control"><br>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Agregar departamento</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <?php
                }
                $editar = new Controlador();
                $editar-> actualizarDepartamentoControlador();



    }


}

