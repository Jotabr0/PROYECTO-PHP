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