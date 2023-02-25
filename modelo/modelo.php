<?php
//incluimos el archivo conexion
include("conexion.php");

class Datos extends Conexion
{
    //método que regisstra el puesto
    static public function guardarPuesto($datosModelo,$tabla)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $habilitado= "1"; //<- activo

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_puesto,salario, hora, fecha, habilitado) VALUES (:puesto, :salario, :hora, :fecha, :habilitado)");

        $consulta->bindParam(":puesto",$datosModelo["0"], PDO::PARAM_STR);
        $consulta->bindParam(":salario",$datosModelo["1"], PDO::PARAM_STR);
        $consulta->bindParam(":hora",$hora, PDO::PARAM_STR);
        $consulta->bindParam(":fecha",$fecha, PDO::PARAM_STR);
        $consulta->bindParam(":habilitado",$habilitado, PDO::PARAM_STR);

        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();
    }



     //método que regisstra el empleado/persona
    static public function guardarPersona($datosModelo,$tabla)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $activo= "1"; //<- activo

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres,
        primer_apellido,
        segundo_apellido,
        edad,
        fecha_nac,
        telefono,
        correo,
        clave,
        foto,
        fk_puesto,
        activo,
        latitud,
        longitud,
        fecha,
        hora) VALUES (:nombres,
        :primer_apellido,
        :segundo_apellido,
        :edad,
        :fecha_nac,
        :telefono,
        :correo,
        :clave,
        :ruta,
        :fk_puesto,
        :activo,
        :latitud,
        :longitud,
        :fecha,
        :hora)");

        $consulta->bindParam(":nombres",            $datosModelo["0"], PDO::PARAM_STR);
        $consulta->bindParam(":primer_apellido",    $datosModelo["1"], PDO::PARAM_STR);
        $consulta->bindParam(":segundo_apellido",   $datosModelo["2"], PDO::PARAM_STR);
        $consulta->bindParam(":edad",               $datosModelo["3"], PDO::PARAM_INT);
        $consulta->bindParam(":fecha_nac",          $datosModelo["4"], PDO::PARAM_STR);
        $consulta->bindParam(":telefono",           $datosModelo["5"], PDO::PARAM_INT);
        $consulta->bindParam(":correo",             $datosModelo["6"], PDO::PARAM_STR);
        $consulta->bindParam(":clave",              $datosModelo["7"], PDO::PARAM_STR);
        $consulta->bindParam(":ruta",               $datosModelo["8"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_puesto",          $datosModelo["9"], PDO::PARAM_INT);
        $consulta->bindParam(":latitud",            $datosModelo["10"],PDO::PARAM_STR);
        $consulta->bindParam(":longitud",           $datosModelo["11"],PDO::PARAM_STR);
        $consulta->bindParam(":fecha",              $fecha,            PDO::PARAM_STR);
        $consulta->bindParam(":hora",               $hora,             PDO::PARAM_STR);
        $consulta->bindParam(":activo",             $activo,           PDO::PARAM_INT);

        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();
    }


         //método que regisstra el empleado/persona
    static public function editarPersona($tabla,$datosModelo,$pk)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $activo= "1"; //<- activo

        $consulta = Conexion::conectar()->prepare("UPDATE $tabla SET nombres=:nombres,
        primer_apellido=:primer_apellido,
        segundo_apellido=:segundo_apellido,
        edad = :edad,
        fecha_nac = :fecha_nac,
        telefono = :telefono,
        correo = :correo,
        clave = :clave,
        foto = :ruta,
        fk_puesto = :fk_puesto,
        activo = :activo,
        latitud = :latitud,
        longitud = :longitud,
        fecha = :fecha,
        hora = :hora 
        WHERE pk_empleado = '$pk'");

        $consulta->bindParam(":nombres",            $datosModelo["0"], PDO::PARAM_STR);
        $consulta->bindParam(":primer_apellido",    $datosModelo["1"], PDO::PARAM_STR);
        $consulta->bindParam(":segundo_apellido",   $datosModelo["2"], PDO::PARAM_STR);
        $consulta->bindParam(":edad",               $datosModelo["3"], PDO::PARAM_INT);
        $consulta->bindParam(":fecha_nac",          $datosModelo["4"], PDO::PARAM_STR);
        $consulta->bindParam(":telefono",           $datosModelo["5"], PDO::PARAM_INT);
        $consulta->bindParam(":correo",             $datosModelo["6"], PDO::PARAM_STR);
        $consulta->bindParam(":clave",              $datosModelo["7"], PDO::PARAM_STR);
        $consulta->bindParam(":ruta",               $datosModelo["8"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_puesto",          $datosModelo["9"], PDO::PARAM_INT);
        $consulta->bindParam(":latitud",            $datosModelo["10"],PDO::PARAM_STR);
        $consulta->bindParam(":longitud",           $datosModelo["11"],PDO::PARAM_STR);
        $consulta->bindParam(":fecha",              $fecha,            PDO::PARAM_STR);
        $consulta->bindParam(":hora",               $hora,             PDO::PARAM_STR);
        $consulta->bindParam(":activo",             $activo,           PDO::PARAM_INT);

        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();
    }



            //papelera de personas
            static public function papeleraPersona($tabla,$pk)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $activo= "0"; //<- activo

        $consulta = Conexion::conectar()->prepare("UPDATE $tabla set activo=:activo,
            fecha=:fecha,
            hora=:hora
            WHERE pk_empleado = '$pk'");

        $consulta->bindParam(":activo",                 $activo,           PDO::PARAM_STR);
        $consulta->bindParam(":fecha",                  $fecha,            PDO::PARAM_STR);
        $consulta->bindParam(":hora",                   $hora,             PDO::PARAM_STR);



        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();


    }





         //método que regisstra el departamento
    static public function guardarDepartamento($datosModelo,$tabla)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $activo= "1"; //<- activo

        $consulta = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_departamento,
            activo,
            fecha,
            hora) 
            VALUES (:nombreDepartamento,
               :activo,
               :fecha,
               :hora)");

        $consulta->bindParam(":nombreDepartamento",$datosModelo["0"], PDO::PARAM_STR);
        $consulta->bindParam(":fecha",             $fecha,            PDO::PARAM_STR);
        $consulta->bindParam(":hora",              $hora,             PDO::PARAM_STR);
        $consulta->bindParam(":activo",            $activo,           PDO::PARAM_INT);

        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();
    }


    //Método que obtiene los puestos de la tabla
    static public function ObtenerPuestos($tabla)
    {
        $peticion= Conexion::conectar()->prepare("SELECT pk_puesto,nombre_puesto FROM $tabla WHERE habilitado=1");
        $peticion->execute();
        return $peticion;
        $peticion= null;
    }



             //método que muestra los empleados
    static public function ObtenerEmpleado($tabla)
    {
        $peticion = Conexion::conectar()->prepare("SELECT pk_empleado,puesto.pk_puesto,puesto.nombre_puesto ,nombres,primer_apellido,segundo_apellido, 
            edad,fecha_nac,telefono,correo,clave,foto,latitud,longitud, empleado.fecha, empleado.hora FROM $tabla INNER JOIN puesto ON empleado.fk_puesto= puesto.pk_puesto
            WHERE activo=1 ORDER BY pk_empleado;");



        $peticion->execute();
        return $peticion;
        $peticion= null;
    }

    static public function ObtenerDepartamento($tabla)
    {
        $peticion = Conexion::conectar()->prepare("SELECT * FROM departamento WHERE activo = 1;");



        $peticion->execute();
        return $peticion;
        $peticion= null;
    }

    static public function actualizarDepartamento($tabla,$pk,$datosModelo)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $activo= "1"; //<- activo

        $consulta = Conexion::conectar()->prepare("UPDATE $tabla set nombre_departamento = :nombreDepartamentoEditar,
            fecha=:fecha,
            hora=:hora,
            activo=:activo
            WHERE PK_departamento = '$pk'");

        $consulta->bindParam(":nombreDepartamentoEditar",$datosModelo["0"],PDO::PARAM_STR);
        $consulta->bindParam(":fecha",                  $fecha,            PDO::PARAM_STR);
        $consulta->bindParam(":hora",                   $hora,             PDO::PARAM_STR);
        $consulta->bindParam(":activo",                 $activo,           PDO::PARAM_STR);


        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();


    }

        static public function papeleraDepartamento($tabla,$pk)
    {
        //obtener fecha y hora
        date_default_timezone_set("America/Mazatlan");
        $fecha = date("Y,m-d");
        $hora = date("H:i:s");
        //habilitado
        $activo= "0"; //<- activo

        $consulta = Conexion::conectar()->prepare("UPDATE $tabla set activo=:activo,
            fecha=:fecha,
            hora=:hora
            WHERE PK_departamento = '$pk'");

        $consulta->bindParam(":activo",                 $activo,           PDO::PARAM_STR);
        $consulta->bindParam(":fecha",                  $fecha,            PDO::PARAM_STR);
        $consulta->bindParam(":hora",                   $hora,             PDO::PARAM_STR);



        if($consulta->execute())
        {
            return 'ok';
        }
        else
        {
            return 'error';
        }
        $consulta->close();


    }

    static public function ObtenerPapeleraDepartamento($tabla)
    {
        $peticion = Conexion::conectar()->prepare("SELECT * FROM departamento WHERE activo = 0;");



        $peticion->execute();
        return $peticion;
        $peticion= null;
    }


}
?>