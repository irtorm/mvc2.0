<?php
class Paginas
{
    //metodo donde se obtiene la ruta del archivo
    static public function enlacesPaginasModelo($enlaces)
    {
        if($enlaces == 'principal')
        {
            $modulo = 'vistas/modulos/principal.php';
        }
        else if($enlaces == 'alta_persona')
        {
            $modulo = 'vistas/modulos/alta_persona.php';
        }
        else if($enlaces == 'mostrar_persona')
        {
            $modulo = 'vistas/modulos/mostrar_persona.php';
        }
        else if($enlaces == 'alta_puestos')
        {
            $modulo = 'vistas/modulos/alta_puestos.php';
        }
        else if($enlaces == 'mostrar_puestos')
        {
            $modulo = 'vistas/modulos/mostrar_puestos.php';
        }
        else if($enlaces == 'altaDepartamento')
        {
            $modulo = 'vistas/modulos/alta_departamento.php';
        }
        else if($enlaces == 'editarEmpleado')
        {
            $modulo = 'vistas/modulos/editar_persona.php';
        }
        else if($enlaces == 'mostrarDepartamento')
        {
            $modulo = 'vistas/modulos/mostrar_departamento.php';
        }
        else if($enlaces == 'papeleraDepartamento')
        {
            $modulo = 'vistas/modulos/papelera_departamento.php';
        }
        else if($enlaces == 'MostrarPapeleraDepartamento')
        {
            $modulo = 'vistas/modulos/mostrar_papeleraDepartamento.php';
        }
        else if($enlaces == 'papeleraPersona')
        {
            $modulo = 'vistas/modulos/papelera_persona.php';
        }
        else
        {
            $modulo = 'vistas/modulos/principal.php';
        }
        //regresamos la ruta dentro de una variable la ruta del archivo dentro de una variable

        return $modulo;
    }
}
