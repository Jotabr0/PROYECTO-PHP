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
