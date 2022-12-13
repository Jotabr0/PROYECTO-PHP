<?php

function listar()
{
   require 'models/usuarios_model.php';

   $usuarios = getUsuarios();

   include 'views/listaUsuariosBlade.php';
}

function borrar()
{

   require 'models/usuarios_model.php';

   if (!isset($_GET['id']))
      die("No has especificado un identificador de tarea.");
   $id = $_GET['id'];

   borraUsuario($id);

   header("location:index.php?controller=usuarios&action=listar");
}

function verModificar()
{

   if (!isset($_GET['id']))
      die("No has especificado un identificador de tarea.");
   $id = $_GET['id'];
   //Incluimos el modelo correspondiente
   require 'models/usuarios_model.php';

   $usuario = getUsuario($id);
   if ($usuario === null)
      die("Identificador de tarea incorrecto");
   //Pasamos a la vista toda la información que se desea representar
   include('views/modificaUsuarioBlade.php');
}

function modificar()
{
   include 'models/usuarios_model.php';

   $id = $_GET['id'];
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $rol = $_POST['rol'];


   $datos = array($user, $pass, $rol, $id);

   modificarUsuario($datos);

   header("location:index.php?controller=usuarios&action=verModificar&id=$id");
}

function guardar()
{

   // print_r($_POST);
   // exit;

   include 'models/usuarios_model.php';

   $user = $_POST['nuevoUser'];
   $pass = $_POST['nuevoPass'];
   $rol = $_POST['nuevoRol'];


   $datos = array($user, $pass, $rol);

   crearUsuario($datos);

   header("location:index.php?controller=usuarios&action=listar");
}

function login()
{
   require 'models/usuarios_model.php';
   include 'views/loginBlade.php';
}

function logout()
{
   require 'models/usuarios_model.php';
   session_start();
   session_unset();
   session_destroy();
   include 'views/loginBlade.php';
}
