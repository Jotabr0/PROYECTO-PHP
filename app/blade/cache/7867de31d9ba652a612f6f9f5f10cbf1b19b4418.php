<?php

if (isset($_COOKIE['recuerdo'])) {
    if($_COOKIE['rol']=='admin'){
        header("Location:index.php?controller=tareas&action=menuGeneral");
    }
    if($_COOKIE['rol']=='operario'){
        header("Location:index.php?controller=tareas&action=menuOperario");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ejercicios PHP/PROYECTO PHP/Assets/css/nuevaTarea.css">

    <title><?php echo $__env->yieldContent('pestaña'); ?></title>
</head>

<body>

    <main class="main">
        <div class="cabecera">
            <div>
                <h1><?php echo $__env->yieldContent('tituloCabecera'); ?></h1>
            </div>
        </div>
        <div class="centro">

            <div class="cuerpo">

                <?php echo $__env->yieldContent('centro'); ?>

            </div>


        </div>

    </main>
    <footer class="pie">
        <h1> Pie de Página</h1>
    </footer>

</body>

</html><?php /**PATH D:\2DAW\DWEC\Ejemplos\Ejercicios PHP\PROYECTO PHP\app\blade\viewsBlade/layouts/plantillaLogin.blade.php ENDPATH**/ ?>