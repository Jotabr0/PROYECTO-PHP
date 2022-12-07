<?php

function menuGeneral(){
   include 'views/menuGeneral.php';
}

//index.php?controller=tareas&action=listar

function listar(){
    require 'models/tareas_model.php';

    $tareas = getTareas();

    include 'views/listaTareasBlade.php';
}

//index.php?controller=tareas&action=menuCrear
function menuCrear(){
   include 'views/nuevaTarea.php';
}

function guardar(){
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
   include('views/verTarea.php');
}

?>