<?php

define ('CONTROLLERS_FOLDER',"controllers/");

define('DEFAULT_CONTROLLER',"tareas");

define('DEFAULT_ACTION',"menuGeneral");

$controller = DEFAULT_CONTROLLER;

if(!empty($_GET['controller']))
    $controller = $_GET['controller'];

$action = DEFAULT_ACTION;

if(!empty($_GET['action']))
    $action=$_GET['action'];



    $controller = CONTROLLERS_FOLDER . $controller . '_controller.php';
//Si la variable $controller es un fichero lo requerimos

   if ( is_file ( $controller ) )
      require_once ($controller);
   else
      throw new Exception ('El controlador no existe - 404 not found');

   //Si la variable $action es una funcion la ejecutamos o detenemos el script
   if ( is_callable ($action) )
      $action();
   else
      throw new Exception ('La accion no existe - 404 not found');
