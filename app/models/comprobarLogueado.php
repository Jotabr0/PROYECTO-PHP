<?php

session_start();   //Activamos el uso de sesiones
if ((!isset($_SESSION['logueado'])) && (!isset($_COOKIE['abierta'])))  // Si no existe la sesión…
{ //Redirigimos a la página de login con el tipo de error ‘fuera’: que indica que
    // se trató de acceder directamente a una página sin loguearse previamente
    header("Location:index.php?controller=usuarios&action=login");
}
