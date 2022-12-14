<!-- include(__DIR__ . '/../models/comprobarLogueado.php'); ?> -->

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
    <title>Menu</title>
    <link rel="stylesheet" href="/Ejercicios PHP/PROYECTO PHP/Assets/css/menuGeneral.css">
</head>

<body>
    <main>
        <div class="cabecera">
            <div class="infosesion">
                Usuario: <span><?php echo $_SESSION['usuario'] ?></span><br>
                Permisos: <span><?php echo $_SESSION['rol'] ?></span><br>
                Conexión: <span><?php echo date('H:i:s', $_SESSION['hora']) ?></span>
            </div>
            <div>
                <h1>Panel de Gestión</h1>
            </div>

            <div class="cerrarsesion">
                <a href="index.php?controller=usuarios&action=logout">Cerrar sesión</a>
            </div>
        </div>
        <div class="centro">
            <a href="index.php?controller=tareas&action=listarOperario">
                <div>
                    <h1>Incidencias/tareas</h1>
                </div>
            </a>
            <div>
                <a href="index.php?controller=tareas&action=listarPendientesOperarios&nombre=<?php echo $_SESSION['nombre'] ?>">
                    <h1>Mis tareas pendientes</h1>
                </a>
            </div>


            <div>
                <h1>Buscar/Filtrar tareas</h1>
            </div>



        </div>
        <div class="pie"></div>
    </main>
</body>

</html>