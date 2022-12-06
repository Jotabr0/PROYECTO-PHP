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
   $bd=conexion::getInstance();
   $db=$bd->connect();
   $result = $db->query('SELECT * FROM tareas');
   $tareas = array();
   while ($tarea = $result->fetch())
      $tareas[] = $tarea;

   return $tareas;
}

function getTarea($id)
{
   $bd=conexion::getInstance();
   $db=$bd->connect();
   $query = 'SELECT * FROM tareas WHERE id = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($id));
   $tarea = $stmt->fetch();
   return $tarea;
}
