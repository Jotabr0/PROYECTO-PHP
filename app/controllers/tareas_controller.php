<?php

function menuGeneral(){
   include 'views/menuGeneral.php';
}

function menuOperario(){
   include 'views/menuOperario.php';
}


//index.php?controller=tareas&action=listar

function listar(){
    require 'models/tareas_model.php';

    $tareas = getTareas();
    

    include 'views/listaTareasBlade.php';
}

function listarOperario(){

   require 'models/tareas_model.php';

   

   $tareas = getTareasOperarios();
   

   include 'views/listaTareasOperariosBlade.php';

}

//index.php?controller=tareas&action=listarPendientes
function listarPendientes(){
   require 'models/tareas_model.php';

   $tareas = getTareasPendientes();

   include 'views/listaTareasPendientesBlade.php';

}

function listarPendientesOperarios(){
   require 'models/tareas_model.php';

   if ( !isset ( $_GET [ 'nombre' ] ) )
      die("No has especificado un identificador de tarea.");
   $nombre = $_GET [ 'nombre' ];
   
   $tareas = getTareasPendientesOperario($nombre);

   include 'views/listaTareasPendientesOperariosBlade.php';
}

//index.php?controller=tareas&action=menuCrear
function menuCrear(){
   require 'models/tareas_model.php';
   $provincias = getProvincias();
   include 'views/nuevaTareaBlade.php';
}

function guardar(){
   
   // print_r($_POST);
   // exit;

   include 'models/tareas_model.php';

   $dni=$_POST['dni'];
   $contacto=$_POST['contacto'];
   $telefono=$_POST['telefono'];
   $descripcion=$_POST['descripcion'];
   $poblacion=$_POST['poblacion'];
   $valuepostal=$_POST['valuepostal'];
   $provincia=$_POST['provincia'];
   $estado=$_POST['estado'];
   $operario=$_POST['operario'];
   $fecharealizacion=$_POST['fecharealizacion'];

   $datos=array($dni,$contacto,$telefono,$descripcion,$poblacion,
$valuepostal,$provincia,$estado,$operario,$fecharealizacion);

   crearTarea($datos);

   header("location:index.php?controller=tareas&action=listar");
}

//index.php?controller=tareas&action=borrar&id=1

function borrar(){

   require 'models/tareas_model.php';

   if ( !isset ( $_GET [ 'id' ] ) )
      die("No has especificado un identificador de tarea.");
   $id = $_GET [ 'id' ];
   
   borraTarea($id);

   header("location:index.php?controller=tareas&action=listar");
}

function verBorrar(){
   if ( !isset ( $_GET [ 'id' ] ) )
      die("No has especificado un identificador de tarea.");
   $id = $_GET [ 'id' ];
   //Incluimos el modelo correspondiente
   require 'models/tareas_model.php';
   //Le pide al modelo la tarea con id = $id
   $tarea = getTarea($id);
   if ($tarea === null)
      die("Identificador de tarea incorrecto");
   //Pasamos a la vista toda la información que se desea representar
   include('views/borraTareaBlade.php');
}



//index.php?controller=tareas&action=ver&id=1

function ver ()
{
   if ( !isset ( $_GET [ 'id' ] ) )
      die("No has especificado un identificador de tarea.");
   $id = $_GET [ 'id' ];
   //Incluimos el modelo correspondiente
   require 'models/tareas_model.php';
   //Le pide al modelo la tarea con id = $id
   $tarea = getTarea($id);
   if ($tarea === null)
      die("Identificador de tarea incorrecto");
   //Pasamos a la vista toda la información que se desea representar
   include('views/verTareaBlade.php');
}

function verModificar(){

   if ( !isset ( $_GET [ 'id' ] ) )
      die("No has especificado un identificador de tarea.");
   $id = $_GET [ 'id' ];
   //Incluimos el modelo correspondiente
   require 'models/tareas_model.php';
   //Le pide al modelo la tarea con id = $id
   $tarea = getTarea($id);
   if ($tarea === null)
      die("Identificador de tarea incorrecto");
   //Pasamos a la vista toda la información que se desea representar
   include('views/modificaTareaBlade.php');


}

function modificar(){
   include 'models/tareas_model.php';
   
   $id=$_GET['id'];
   $dni=$_POST['dni'];
   $contacto=$_POST['contacto'];
   $telefono=$_POST['telefono'];
   $email=$_POST['email'];
   $descripcion=$_POST['descripcion'];
   $poblacion=$_POST['poblacion'];
   $direccion=$_POST['direccion'];
   $valuepostal=$_POST['valuepostal'];
   $provincia=$_POST['provincia'];
   $estado=$_POST['estado'];
   $operario=$_POST['operario'];
   $fecharealizacion=$_POST['fecharealizacion'];
   $anotacionesantes=$_POST['anotacionesantes'];

   $datos=array($dni,$contacto,$telefono,$descripcion,$email,
   $direccion,$poblacion,$valuepostal,$provincia,
   $estado,$operario,$fecharealizacion,$anotacionesantes,$id);

   modificarTarea($datos);

   header("location:index.php?controller=tareas&action=verModificar&id=$id");
}

?>