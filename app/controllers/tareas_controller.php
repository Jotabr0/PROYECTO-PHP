<?php

function listar(){
    require 'models/tareas_model.php';

    $tareas = getTareas();

    include 'views/listaTareas.php';
}

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
   include('views/listaTareas.php');
}

?>