<?php

    if(isset($_POST['submit'])){ // Comprobamos que recibimos los datos y que no están vacíos
      if((isset($_POST['usuario'])&& isset($_POST['password'])) 
        && (!empty($_POST['usuario'])&& !empty($_POST['password']))){

          $usuario = usuarioLogin($_POST['usuario'],$_POST['password']);

         if ($usuario!=null &&  $_POST['usuario'] == $usuario['user'] && $_POST['password'] == $usuario['pass']) {
            session_start();
            $_SESSION['logueado']=$_POST['usuario'];
            $_SESSION['usuario']= $_POST['usuario'];
            $_SESSION['nombre']=$usuario['nombre'];
            $_SESSION['rol']=$usuario['rol'];
            $_SESSION['hora'] = time();
            //Creamos un par de cookies para recordar el user/pass. Tcaducidad=3 días
            
            setcookie ('usuario' ,$_POST['usuario'] ,time() + (60 * 60 * 24 * 3)); 
            setcookie ('password',$_POST['password'],time() + (60 * 60 * 24 * 3));
            setcookie ('rol',$usuario['rol'],time() + (60 * 60 * 24 * 3));

            if(isset($_POST['recuerdo'])&&($_POST['recuerdo']=="on")) // Si está seleccioniado el checkbox...
             { // Creamos las cookies para ambas variables 
               
               setcookie ('recuerdo',$_POST['recuerdo'],time() + (60 * 60 * 24 * 3));
              // } else {  //Si no está seleccionado el checkbox..
              //   // Eliminamos las cookies
              //   if(isset($_COOKIE['usuario'])) { 
              //      setcookie ('usuario',""); } 
              //   if(isset($_COOKIE['password'])) { 
              //      setcookie ('password',""); } 
              //   if(isset($_COOKIE['recuerdo'])) { 
              //      setcookie ('recuerdo',""); }    
             }
            
             // Redirigimos a la página de inicio de nuestro sitio  
             
             if($usuario['rol']=="admin"){
              header ("Location: index.php?controller=tareas&action=menuGeneral");
             }else{
              header ("Location: index.php?controller=tareas&action=menuOperario");
             }
             
          }else{
            
            include(__DIR__.'/../views/formLogin.php');
          }  
        }else{
          
          include(__DIR__.'/../views/formLogin.php');
        }
    } else{
      
      include(__DIR__.'/../views/formLogin.php');
    }

  

  
