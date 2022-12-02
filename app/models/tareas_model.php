<?php

function getConnection()
{
   $user = 'root';
   $pwd = '';
   return new PDO('mysql:host=localhost;dbname=miproyectophp', $user, $pwd);
}


function getTareas()
{
   $db = getConnection();
   $result = $db->query('SELECT * FROM tareas');
   $tareas = array();
   while ($tarea = $result->fetch())
      $tareas[] = $tarea;

   return $tareas;
}

function getTarea($id)
{
   $db = getConnection();
   $query = 'SELECT * FROM tareas WHERE id = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($id));
   $tarea = $stmt->fetch();
   return $tarea;
}
