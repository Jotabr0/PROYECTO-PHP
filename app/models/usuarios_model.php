<?php

require 'claseConexion.php';

// function getConnection()
// {
//    $user = 'root';
//    $pwd = '';
//    return new PDO('mysql:host=localhost;dbname=miproyectophp', $user, $pwd);
// }

function getUsuarios()
{
   //require("paginacionUsuarios.php");

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $result = $db->query("SELECT * FROM usuarios");
   $usuarios = array();
   while ($usuario = $result->fetch())
      $usuarios[] = $usuario;

   return $usuarios;

}


function getUsuario($id)
{
   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'SELECT * FROM usuarios WHERE id = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($id));
   $usuario = $stmt->fetch();
   return $usuario;
}


function usuarioLogin($user,$pass)
{
   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'SELECT * FROM usuarios WHERE user = ? AND pass = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($user,$pass));
   $usuario = $stmt->fetch();
   return $usuario;
}



function borraUsuario($id){

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'DELETE FROM usuarios WHERE id= ?';

   $stmt = $db->prepare($query);
   $stmt->execute(array($id));

}

function crearUsuario(array $datos)
{
   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'INSERT INTO 
   usuarios(user,pass,rol)
    VALUES(?,?,?)';

   $stmt = $db->prepare($query);
   $stmt->execute($datos);
}

function modificarUsuario(array $datos){

   $bd = conexion::getInstance();
   $db = $bd->connect();
   $query = 'UPDATE usuarios SET user = ?, pass = ?, rol = ? WHERE (id = ?)';

   $stmt = $db->prepare($query);
   $stmt->execute($datos);


}
