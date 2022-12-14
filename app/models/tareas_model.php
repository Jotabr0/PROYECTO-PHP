<?php

require 'claseConexion.php';

// function getConnection()
// {
//    $user = 'root';
//    $pwd = '';
//    return new PDO('mysql:host=localhost;dbname=miproyectophp', $user, $pwd);
// }

function getTareas()
{
   require("paginacionTareas.php");

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $result = $db->query("SELECT * FROM tareas LIMIT $empezar_desde, $tamano_paginas");
   $tareas = array();
   while ($tarea = $result->fetch())
      $tareas[] = $tarea;

   return $tareas;

}

function getTareasOperarios()
{
   require("paginacionTareasOperarios.php");

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $result = $db->query("SELECT * FROM tareas LIMIT $empezar_desde, $tamano_paginas");
   $tareas = array();
   while ($tarea = $result->fetch())
      $tareas[] = $tarea;

   return $tareas;

}

function getProvincias(){

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $result = $db->query("SELECT * FROM provincias");
   $provincias = array();
   while ($provincia = $result->fetch())
      $provincias[] = $provincia;

   return $provincias;

}

function getTareasPendientes(){

   

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $result = $db->query("SELECT * FROM tareas WHERE estado='P'");
   $tareas = array();
   while ($tarea = $result->fetch())
      $tareas[] = $tarea;

   return $tareas;

}

function getTareasPendientesOperario($nombre){

   
   $bd = conexion::getInstance();
   $db = $bd->connect();
   $result = $db->query("SELECT * FROM tareas WHERE estado='P' AND operario='$nombre'");
   $tareas = array();
   while ($tarea = $result->fetch())
      $tareas[] = $tarea;

   return $tareas;

}



function getTarea($id)
{
   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'SELECT * FROM tareas WHERE id = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($id));
   $tarea = $stmt->fetch();
   return $tarea;
}

function borraTarea($id){

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'DELETE FROM tareas WHERE id= ?';

   $stmt = $db->prepare($query);
   $stmt->execute(array($id));

}

function crearTarea(array $datos)
{
   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'INSERT INTO 
   tareas(dni,persona,telefono,descripcion,poblacion,codigopostal,provincia,estado,operario,fecharealizacion)
    VALUES(?,?,?,?,?,?,?,?,?,?)';

   $stmt = $db->prepare($query);
   $stmt->execute($datos);
}

function modificarTarea(array $datos){

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'UPDATE tareas SET dni = ?, persona = ?, telefono = ?, descripcion = ?, email = ?, direccion = ?, poblacion = ?, codigopostal = ?, provincia = ?, estado = ?, operario = ?, fecharealizacion = ?, anotacionesantes = ? WHERE (id = ?)';

   $stmt = $db->prepare($query);
   $stmt->execute($datos);


}
