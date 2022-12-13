<?php
  $usuariook = "pepe";
  $passok = "123";
  if(isset($_POST['submit'])){ // Comprobamos que recibimos los datos y que no están vacíos
      if((isset($_POST['usuario'])&& isset($_POST['password'])) 
        && (!empty($_POST['usuario'])&& !empty($_POST['password']))){
         if ($_POST['usuario'] == $usuariook && $_POST['password'] == $passok) {
            session_start();
            $_SESSION['logueado']=$_POST['usuario'];
            $_SESSION['usuario']= $_POST['usuario'];
            //Creamos un par de cookies para recordar el user/pass. Tcaducidad=3 días
            if(isset($_POST['recuerdo'])&&($_POST['recuerdo']=="on")) // Si está seleccioniado el checkbox...
             { // Creamos las cookies para ambas variables 
               setcookie ('usuario' ,$_POST['usuario'] ,time() + (60 * 60 * 24 * 3)); 
               setcookie ('password',$_POST['password'],time() + (60 * 60 * 24 * 3));
               setcookie ('recuerdo',$_POST['recuerdo'],time() + (60 * 60 * 24 * 3));
              } else {  //Si no está seleccionado el checkbox..
                // Eliminamos las cookies
                if(isset($_COOKIE['usuario'])) { 
                   setcookie ('usuario',""); } 
                if(isset($_COOKIE['password'])) { 
                   setcookie ('password',""); } 
                if(isset($_COOKIE['recuerdo'])) { 
                   setcookie ('recuerdo',""); }    
             }
             
            // Redirigimos a la página de inicio de nuestro sitio  
             header ("Location: index.php?controller=tareas&action=menuGeneral");
          }else{
            $error="datos";
            include(__DIR__.'/../views/formLogin.php');
          }  
        }else{
          $error="datos";
          include(__DIR__.'/../views/formLogin.php');
        }
    } else{
      
      include(__DIR__.'/../views/formLogin.php');
    }
