<?php
session_start();   //Activamos el uso de sesiones
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='operario'){
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
                    <a href="index.php?controller=tareas&action=listarOperario">
                        <h1>Tareas/Incidencias</h1>
                    </a>
                </div>

                <div>
                    <a href="index.php?controller=tareas&action=listarPendientesOperarios&nombre=<?php echo $_SESSION['nombre'] ?>">
                        <h1>Mis tareas pendientes</h1>
                    </a>
                </div>

                <div>
                    <h1>Buscar/Filtrar tareas</h1>
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