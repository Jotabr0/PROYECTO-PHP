
<?php
session_start();   //Activamos el uso de sesiones
// if ((!isset($_SESSION['logueado'])) && (!isset($_COOKIE['abierta'])))  // Si no existe la sesión…
// { //Redirigimos a la página de login con el tipo de error ‘fuera’: que indica que
//     // se trató de acceder directamente a una página sin loguearse previamente
   
//     header("Location:index.php?controller=usuarios&action=login");
// }
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='admin'){
    header("Location:index.php?controller=usuarios&action=login");
 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ejercicios PHP/PROYECTO PHP/Assets/css/nuevaTarea.css">

    <title>@yield('pestaña')</title>
</head>

<body>

    <main class="main">
        <div class="cabecera">
    
            <div class="infosesion">
                Usuario: <span><?php echo $_SESSION['usuario'] ?></span><br>
                Permisos: <span><?php echo $_SESSION['rol'] ?></span><br>
                Conexión: <span><?php echo date('H:i:s', $_SESSION['hora']) ?></span>
            </div>
            <div>
                <h1>@yield('tituloCabecera')</h1>
            </div>
            <div class="cerrarsesion">
                <a href="index.php?controller=usuarios&action=logout">Cerrar sesión</a>
            </div>
            
        </div>
        <div class="centro">
            <div class="lateral">

                <div>
                    <a href="index.php?controller=tareas&action=listar">
                        <h1>Tareas/Incidencias</h1>
                    </a>
                </div>

                <div>
                    <a href="index.php?controller=tareas&action=menuCrear">
                        <h1>Añadir nueva incidencia/tarea</h1>
                    </a>
                </div>

                <div>
                    <h1>Buscar/Filtrar tareas</h1>
                </div>

                <div>
                    <a href="index.php?controller=tareas&action=listarPendientes">
                        <h1>Tareas Pendientes</h1>
                    </a>
                </div>

                <div>
                    <a href="index.php?controller=usuarios&action=listar">
                    <h1>Gestion de usuarios</h1>
                    </a>
                </div>

            </div>

            <div class="cuerpo">

                @yield('centro')

            </div>


        </div>

    </main>
    <footer class="pie">
        <h1> Pie de Página</h1>
    </footer>

</body>

</html>